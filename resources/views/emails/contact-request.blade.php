<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; margin: 0; padding: 20px; color: #333; }
        .wrapper { max-width: 620px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0; }
        .header { background: #1a2744; padding: 24px 32px; }
        .header h1 { color: #ffffff; font-size: 18px; margin: 0; }
        .header p { color: #94a3b8; font-size: 13px; margin: 4px 0 0; }
        .body { padding: 32px; }
        .section { margin-bottom: 28px; }
        .section-title { font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 0.08em; color: #64748b; border-bottom: 1px solid #e2e8f0; padding-bottom: 8px; margin-bottom: 14px; }
        .row { display: flex; margin-bottom: 10px; }
        .label { min-width: 160px; font-size: 13px; color: #64748b; font-weight: 600; }
        .value { font-size: 13px; color: #1e293b; flex: 1; }
        .badge { display: inline-block; padding: 3px 10px; border-radius: 4px; font-size: 12px; font-weight: bold; }
        .badge-urgent { background: #fef2f2; color: #dc2626; border: 1px solid #fecaca; }
        .badge-normal { background: #f0f9ff; color: #0369a1; border: 1px solid #bae6fd; }
        .message-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 14px; font-size: 13px; color: #374151; line-height: 1.7; white-space: pre-wrap; }
        .utm-section { background: #f8fafc; border-radius: 6px; padding: 16px; font-size: 12px; color: #64748b; }
        .utm-row { margin-bottom: 4px; }
        .footer { background: #f8fafc; padding: 20px 32px; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8; }
        .cta-link { display: inline-block; margin-top: 16px; background: #e87c32; color: #ffffff; text-decoration: none; padding: 10px 22px; border-radius: 6px; font-size: 13px; font-weight: bold; }
    </style>
</head>
<body>
<div class="wrapper">

    <div class="header">
        <h1>New Website Enquiry</h1>
        <p>Irish Laundry Systems — {{ now()->format('d M Y, H:i') }}</p>
    </div>

    <div class="body">

        {{-- Urgency banner if today --}}
        @if(($data['urgency'] ?? '') === 'today')
        <div style="background:#fef2f2;border:1px solid #fecaca;border-radius:6px;padding:12px 16px;margin-bottom:24px;color:#dc2626;font-size:13px;font-weight:bold;">
            ⚠ URGENT — Customer requires response today
        </div>
        @endif

        {{-- Contact details --}}
        <div class="section">
            <div class="section-title">Contact Details</div>
            <div class="row"><span class="label">Name</span><span class="value">{{ $data['name'] }}</span></div>
            <div class="row"><span class="label">Company</span><span class="value">{{ $data['company'] }}</span></div>
            <div class="row"><span class="label">Email</span><span class="value"><a href="mailto:{{ $data['email'] }}" style="color:#2d5f8a;">{{ $data['email'] }}</a></span></div>
            <div class="row"><span class="label">Phone</span><span class="value"><a href="tel:{{ $data['phone'] }}" style="color:#2d5f8a;">{{ $data['phone'] }}</a></span></div>
            <div class="row"><span class="label">Location / County</span><span class="value">{{ $data['location'] }}</span></div>
        </div>

        {{-- Enquiry details --}}
        <div class="section">
            <div class="section-title">Enquiry Details</div>
            <div class="row">
                <span class="label">Sector</span>
                <span class="value">{{ ucfirst($data['sector']) }}</span>
            </div>
            <div class="row">
                <span class="label">Request Type</span>
                <span class="value">{{ ucwords(str_replace('_', ' ', $data['request_type'])) }}</span>
            </div>
            <div class="row">
                <span class="label">Urgency</span>
                <span class="value">
                    @php
                        $urgencyLabels = ['today' => 'Today', '24_48h' => '24–48 hours', 'this_week' => 'This week', 'planning' => 'Planning ahead'];
                    @endphp
                    <span class="badge {{ $data['urgency'] === 'today' ? 'badge-urgent' : 'badge-normal' }}">
                        {{ $urgencyLabels[$data['urgency']] ?? $data['urgency'] }}
                    </span>
                </span>
            </div>
            @if(!empty($data['equipment']))
            <div class="row"><span class="label">Equipment</span><span class="value">{{ $data['equipment'] }}</span></div>
            @endif
        </div>

        {{-- Message --}}
        @if(!empty($data['message']))
        <div class="section">
            <div class="section-title">Message / Problem Description</div>
            <div class="message-box">{{ $data['message'] }}</div>
        </div>
        @endif

        {{-- Quick reply CTA --}}
        <a href="mailto:{{ $data['email'] }}?subject=Re: Your ILS Enquiry" class="cta-link">Reply to {{ $data['name'] }}</a>

        {{-- UTM / Source data --}}
        @if(!empty($data['utm_source']) || !empty($data['page_source']))
        <div class="section" style="margin-top:32px;">
            <div class="section-title">Traffic Source</div>
            <div class="utm-section">
                @if(!empty($data['page_source']))<div class="utm-row"><strong>Page:</strong> {{ $data['page_source'] }}</div>@endif
                @if(!empty($data['utm_source']))<div class="utm-row"><strong>Source:</strong> {{ $data['utm_source'] }}</div>@endif
                @if(!empty($data['utm_medium']))<div class="utm-row"><strong>Medium:</strong> {{ $data['utm_medium'] }}</div>@endif
                @if(!empty($data['utm_campaign']))<div class="utm-row"><strong>Campaign:</strong> {{ $data['utm_campaign'] }}</div>@endif
                @if(!empty($data['utm_content']))<div class="utm-row"><strong>Content:</strong> {{ $data['utm_content'] }}</div>@endif
                @if(!empty($data['utm_term']))<div class="utm-row"><strong>Term:</strong> {{ $data['utm_term'] }}</div>@endif
            </div>
        </div>
        @endif

    </div>

    <div class="footer">
        This email was sent automatically by the Irish Laundry Systems website contact form.
        Do not reply to this message — use the reply button above to respond directly to the customer.
    </div>

</div>
</body>
</html>
