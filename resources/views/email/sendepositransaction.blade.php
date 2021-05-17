@component('mail::message')
<h1>
    Transaction Notification
</h1>

Dear, {{ $full_name }}

<p>Your transaction details are stated below</p>

<ol>
    <li>Amount : {{ $amount }}USD</li>
    <li>Reference : {{ $reference }}</li>
    <li>Payment Status : {{ $status }}</li>
    <li>Payment Type : {{ $type }}</li>
</ol>

@if($status == 'completed' or $status == 'paid')
Your balance is now ${{ $total_deposit }}
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
