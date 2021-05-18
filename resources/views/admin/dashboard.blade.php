@extends('admin/layout')

@section('content')

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total {{get_settings('web_title')}} Users</span>
                <span class="info-box-number">
                {{$all_users}}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total {{get_settings('web_title')}} Admins</span>
                <span class="info-box-number">
                {{$all_admin}}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total Users Processing KYC </span>
                <span class="info-box-number">
                {{ get_all_kyc_user(1) }}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total Users Rejected KYC </span>
                <span class="info-box-number">
                {{ get_all_kyc_user(2) }}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total Users Approved KYC </span>
                <span class="info-box-number">
                {{ get_all_kyc_user(3) }}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-wallet"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total Users Deposited </span>
                <span class="info-box-number">
                    ${{ number_format(get_all_user_balance('deposit'),2) }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-wallet"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total Users Balance </span>
                <span class="info-box-number">
                    ${{ number_format(get_all_user_balance('balance'),2) }}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-cloud"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total Cloud-Pricing</span>
                <span class="info-box-number">
                {{$total_cloud_pricing}}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-cloud"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10"> Total Doge-Pricing</span>
                <span class="info-box-number">
                {{$total_doge_pricing}}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>


    <div class="col-lg-12 col-md-12 col-sm col-xs-12">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Recent Transactions</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Plan Name</th>
                            <th>Daily Profit</th>
                            <th>Amount Invested</th>
                            <th>Status</th>
                            <th>Mining Type</th>
                            <th>Reference</th>
                            <th>Expiry Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Plan Name</th>
                            <th>Daily Profit</th>
                            <th>Status</th>
                            <th>Amount Invested</th>
                            <th>Mining Type</th>
                            <th>Reference</th>
                            <th>Expiry Date</th>
                            <td>Action</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach($mining as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{ user_details($value->user_id,'email_address') }}</td>
                                <td>{{ $value->plan_name }}</td>
                                <td>${{ $value->daily_profit }}</td>
                                <td>${{ $value->amount }}</td>
                                <td>{{ status($value->is_active) }}</td>
                                <td>{{$value->type}}</td>
                                <td>{{$value->reference}}</td>
                                <td>{{ date('Y-m-d',$value->duration) }}</td>
                                <td><a href="{{url('admin/view-mining/'.$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection