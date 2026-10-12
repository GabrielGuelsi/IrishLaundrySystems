<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequest;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Only successful sends count, so visitors fixing validation errors are never blocked.
        $limiterKey = 'contact-submit:'.$request->ip();

        if (RateLimiter::tooManyAttempts($limiterKey, 5)) {
            $minutes = (int) ceil(RateLimiter::availableIn($limiterKey) / 60);

            return back()
                ->withInput($request->except('photos'))
                ->withErrors(['rate_limit' => "Too many requests from this connection. Please try again in {$minutes} minutes or call us on +353 1 491 0402."]);
        }

        $request->merge($this->mapLegacyFormFields($request));

        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'company'       => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'required|string|max:50',
            'location'      => 'required|string|max:255',
            'sector'        => 'required|string|in:healthcare,hospitality,care,commercial,other',
            'equipment'     => 'nullable|string|max:500',
            'equipment_brand' => 'nullable|string|max:120',
            'machine_type'    => 'nullable|string|max:120',
            'model_number'    => 'nullable|string|max:120',
            'serial_number'   => 'nullable|string|max:120',
            'part_required'   => 'nullable|string|max:255',
            'request_type'  => 'required|string|in:contract,rental,breakdown,parts,equipment_quote,other',
            'urgency'       => 'required|string|in:today,24_48h,this_week,planning',
            'message'           => 'nullable|string|max:2000',
            'gdpr_consent'      => 'required|accepted',
            'marketing_consent' => 'nullable|boolean',
            'utm_source'    => 'nullable|string|max:100',
            'utm_medium'    => 'nullable|string|max:100',
            'utm_campaign'  => 'nullable|string|max:100',
            'utm_content'   => 'nullable|string|max:100',
            'utm_term'      => 'nullable|string|max:100',
            'page_source'   => 'nullable|string|max:255',
            'photos'        => 'nullable|array|max:5',
            'photos.*'      => 'image|mimes:jpeg,jpg,png,webp|max:8192',
        ]);

        // Uploaded photos are emailed as attachments, not stored on the submission row.
        $photos  = $request->file('photos', []);
        $rowData = collect($validated)->except('photos')->all();

        // Persist to database
        ContactSubmission::create($rowData);

        // Send email notification (with any uploaded photos attached)
        Mail::to(config('mail.to_address', 'contact@irishlaundrysystems.com'))
            ->send(new ContactRequest($rowData, $photos));

        RateLimiter::hit($limiterKey, 3600);

        return back()
            ->with('success', "Thank you — we've received your request. We'll review the details and respond with the next best step. We aim to respond within 24 hours (subject to location).")
            // Read once by layouts.app to send the GA4 generate_lead event for a confirmed send.
            ->with('lead', ['request_type' => $validated['request_type'], 'sector' => $validated['sector']]);
    }

    /**
     * The Repairs and Services forms use their own field names and label values
     * (organisation, site_location, fault_details, "Healthcare", "Urgent — …") and leave out
     * fields the rules require, so they could never pass validation. Map them onto the
     * standard fields. Only fills a standard field the request doesn't already have, so the
     * other forms are unaffected.
     */
    private function mapLegacyFormFields(Request $request): array
    {
        $filled = fn (string $key) => trim((string) $request->input($key, '')) !== '';
        $map = [];

        if (! $filled('company')) {
            $map['company'] = $filled('organisation') ? $request->input('organisation') : 'Not specified';
        }
        if (! $filled('location')) {
            $map['location'] = $filled('site_location') ? $request->input('site_location') : 'Not specified';
        }
        if (! $filled('equipment') && ($filled('equipment_type') || $filled('equipment_model'))) {
            $map['equipment'] = trim($request->input('equipment_type', '').' '.$request->input('equipment_model', ''));
        }

        $sectors = ['healthcare' => 'healthcare', 'care facilities' => 'care', 'hospitality' => 'hospitality', 'commercial & industrial' => 'commercial'];
        $sector = strtolower(trim((string) $request->input('sector', '')));
        if (! in_array($sector, ['healthcare', 'hospitality', 'care', 'commercial', 'other'], true)) {
            $map['sector'] = $sectors[$sector] ?? 'other';
        }

        if (! $filled('request_type')) {
            $map['request_type'] = $request->input('page_source') === 'repairs_callout_cta' ? 'breakdown' : 'other';
        }

        $urgency = (string) $request->input('urgency', '');
        if (! in_array($urgency, ['today', '24_48h', 'this_week', 'planning'], true)) {
            $map['urgency'] = match (true) {
                str_starts_with($urgency, 'Urgent') => 'today',
                str_starts_with($urgency, 'High') => '24_48h',
                str_starts_with($urgency, 'Normal') => 'this_week',
                default => 'planning',
            };
        }

        // Details the Repairs/Services forms collect that have no column of their own go into the message.
        $extra = array_filter([
            'Fault details' => $request->input('fault_details'),
            'Equipment out of use' => $request->input('out_of_use'),
            'Urgency' => $filled('urgency') && isset($map['urgency']) ? $urgency : null,
            'Recent service history' => $request->input('service_history'),
            'Preferred contact' => $request->input('preferred_contact'),
        ], fn ($v) => trim((string) $v) !== '');
        if ($extra && in_array($request->input('page_source'), ['repairs_callout_cta', 'services_overview_cta'], true)) {
            $lines = array_map(fn ($k, $v) => "{$k}: {$v}", array_keys($extra), $extra);
            $map['message'] = mb_substr(trim(implode("\n", $lines)."\n\n".$request->input('message', '')), 0, 2000);
        }

        return $map;
    }
}
