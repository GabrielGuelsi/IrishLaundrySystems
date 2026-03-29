<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'name',
        'company',
        'email',
        'phone',
        'location',
        'sector',
        'request_type',
        'urgency',
        'equipment',
        'message',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_content',
        'utm_term',
        'page_source',
        'gdpr_consent',
        'marketing_consent',
    ];
}
