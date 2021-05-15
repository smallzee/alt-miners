@component('mail::message')
<center>
    <h1>KYC Verification</h1>
</center>

Dear admin

{{ ucwords($full_name) }} has provided his/her KYC and he/she waiting for your verification

<p>KYC User Details are stated below</p>

<ol>
    <li>Full Name : {{ ucwords($full_name) }}</li>
    <li>Email Address : {{ $email_address }}</li>
    <li>KYC Type : {{ $kyc_type }}</li>
    <li>KYC Verification Status : Processing</li>
</ol>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
