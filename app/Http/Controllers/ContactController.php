<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'message'       => 'nullable|string|max:2000',
        ]);

        // In production: Mail::to('info@irishlaunderysystems.ie')->send(new ContactRequest($validated));
        // For now, store in session and flash success message

        session()->flash('contact_success', true);
        session()->flash('contact_data', $validated);

        return back()->with(
            'success',
            "Thank you — we've received your request. We'll review the details and respond with the next best step. We aim to respond within 24 hours (subject to location)."
        );
    }
}
