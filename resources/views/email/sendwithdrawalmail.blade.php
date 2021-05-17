@component('mail::message')
<h1>
    Withdrawal Notification
</h1>

Dear, admin

<p>User withdrawal details are stated below</p>

<ol>
    <li>Customer Email Address : {{$email_address}}</li>
    <li>Withdrawal Amount In USD : {{ $amount }}USD</li>
    <li>Withdrawal Amount In BTC : {{ get_btc_live_amount($amount) }}</li>
    <li>Withdrawal Wallet Address : {{ $wallet_address }}</li>
    <li>Reference : {{ $reference }}</li>
    <li>Withdrawal Status : Processing</li>
    <li>Withdrawal Method : BTC</li>
</ol>

<p>Please check admin to review the withdrawal</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
