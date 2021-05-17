@extends('user/layout')

@section('content')

    <div class="card-group">

        <div class="table-responsive">
            <table class="table table-bordered" id="datatable">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Plan Name</th>
                    <th>Daily Profit</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Reference</th>
                    <th>Expiry Date</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>SN</th>
                    <th>Plan Name</th>
                    <th>Daily Profit</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Reference</th>
                    <th>Expiry Date</th>
                </tr>
                </tfoot>
                <tbody>
                    @php($sn =1)
                    @foreach($mining as $value)
                        <tr>
                            <td>{{$sn++}}</td>
                            <td>{{ $value->plan_name }}</td>
                            <td>${{ $value->daily_profit }}</td>
                            <td>${{ $value->amount }}</td>
                            <td>{{ status($value->is_active) }}</td>
                            <td>{{$value->type}}</td>
                            <td>{{$value->reference}}</td>
                            <td>{{ date('Y-m-d',$value->duration) }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

@endsection