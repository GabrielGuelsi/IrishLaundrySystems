<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequest;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'company'       => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'required|string|max:50',
            'location'      => 'required|string|max:255',
            'sector'        => 'required|string|in:healthcare,hospitality,care,commercial',
            'equipment'     => 'nullable|string|max:500',
            'request_type'  => 'required|string|in:contract,rental,breakdown,parts,equipment_quote',
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
        ]);

        // Persist to database
        ContactSubmission::create($validated);

        // Send email notification
        Mail::to(config('mail.to_address', 'info@irishlaunderysystems.ie'))
            ->send(new ContactRequest($validated));

        return back()->with(
            'success',
            "Thank you — we've received your request. We'll review the details and respond with the next best step. We aim to respond within 24 hours (subject to location)."
        );
    }
}
