@component('mail::message')

<h1>
    Account Details
</h1>

<ol>
    <li>Email Address : {{ $email_address }}</li>
    <li>Full Name : {{ $full_name }}</li>
    <li>Password : {{ $password }}</li>
    <li>Country : {{ $country }}</li>
</ol>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
