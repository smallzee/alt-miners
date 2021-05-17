@component('mail::message')

<h1>Contact Us</h1>

<p>Customer details are started below</p>

<ol>
    <li>Name : {{ $name }}</li>
    <li>Email Address {{ $email_address }}</li>
</ol>

<hr>

<p>{{ $message }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
