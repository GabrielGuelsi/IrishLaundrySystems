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

        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'company'       => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'required|string|max:50',
            'location'      => 'required|string|max:255',
            'sector'        => 'required|string|in:healthcare,hospitality,care,commercial',
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

        return back()->with(
            'success',
            "Thank you — we've received your request. We'll review the details and respond with the next best step. We aim to respond within 24 hours (subject to location)."
        );
    }
}
