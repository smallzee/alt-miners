@extends('admin/layout')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$page_title}}</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>Transaction Id</td>
                            <td>{{ $mining->id }}</td>
                        </tr>
                        <tr>
                            <td>Plan Name</td>
                            <td>{{ $mining->plan_name }}</td>
                        </tr>
                        <tr>
                            <td>Recipient Email Address</td>
                            <td>{{ $mining->user->email_address }}</td>
                        </tr>
                        <tr>
                            <td>Recipient Full Name</td>
                            <td>{{ $mining->user->full_name }}</td>
                        </tr>
                        <tr>
                            <td>Daily Profit</td>
                            <td>${{number_format($mining->daily_profit)}}</td>
                        </tr>
                        <tr>
                            <td>Amount Invested</td>
                            <td>${{number_format($mining->amount,2)}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{status($mining->is_active)}}</td>
                        </tr>
                        <tr>
                            <td>Mining Type</td>
                            <td>{{$mining->type}}</td>
                        </tr>
                        <tr>
                            <td>Reference</td>
                            <td>{{$mining->reference}}</td>
                        </tr>
                        <tr>
                            <td>Expiry Date</td>
                            <td>{{date('Y-m-d',$mining->duration)}}</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection