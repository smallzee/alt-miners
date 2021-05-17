@extends('user/layout')

@section('content')


            <div class="card-group">
                <div class="table-responsive">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Amount In USD</th>
                                <th>Amount In BTC</th>
                                <th>Wallet Address</th>
                                <th>Reference</th>
                                <th>Withdrawal Method</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>Amount In USD</th>
                                <th>Amount In BTC</th>
                                <th>Wallet Address</th>
                                <th>Reference</th>
                                <th>Withdrawal Method</th>
                                <th>Status</th>
                                <th>Created At</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @php($sn =1)
                            @foreach($withdrawals as $value)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{$value->amount}}USD</td>
                                    <td>{{$value->amount_btc}}</td>
                                    <td>{{$value->wallet_address}}</td>
                                    <td>{{$value->reference}}</td>
                                    <td>{{$value->withdrawal_method}}</td>
                                    <td>{{ucwords($value->status)}}</td>
                                    <td>{{$value->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



@endsection