@component('mail::message')

<h1>KYC Verification</h1>

Dear {{ ucwords($full_name) }},

{{ $comment }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
