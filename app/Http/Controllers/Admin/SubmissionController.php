<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = ContactSubmission::orderByDesc('created_at')->get();

        return view('admin.submissions.index', compact('submissions'));
    }

    public function show(ContactSubmission $sub)
    {
        return view('admin.submissions.show', compact('sub'));
    }
}
