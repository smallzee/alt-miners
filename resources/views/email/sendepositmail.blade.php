@component('mail::message')

<h1>
    Deposit Notification
</h1>

Dear, admin

<p>User deposit details are stated below</p>

<ol>
    <li>Customer Email Address : {{$email_address}}</li>
    <li>Deposited Amount : {{ $amount }}USD</li>
    <li>Reference : {{ $reference }}</li>
    <li>Payment Status : Processing</li>
    <li>Payment Method : {{ $payment_method }}</li>
</ol>

<p>Please check admin to review the payment</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
