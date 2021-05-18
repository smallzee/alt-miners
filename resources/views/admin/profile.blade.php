@extends('admin/layout')

@section('content')

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fa fa-wallet"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Deposit USD </span>
                <span class="info-box-number">
                ${{ number_format($user_data->wallet->deposit,2) }}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fab fa-btc"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Deposit BTC </span>
                <span class="info-box-number">
                 {{ get_btc_live_amount($user_data->wallet->deposit) }}
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
                <span class="info-box-text mt-10">Total Balance USD </span>
                <span class="info-box-number">
                ${{ number_format($user_data->wallet->balance,2) }}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fab fa-btc"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Balance BTC </span>
                <span class="info-box-number">
                 {{ get_btc_live_amount($user_data->wallet->balance) }}
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
                <span class="info-box-text mt-10">Total Withdrawal USD </span>
                <span class="info-box-number">
                ${{ number_format($user_data->wallet->withdrawal,2) }}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-blue-gradient">
            <span class="info-box-icon"><i class="fab fa-btc"></i></span>
            <div class="info-box-content">
                <span class="info-box-text mt-10">Total Withdrawal BTC </span>
                <span class="info-box-number">
                 {{ get_btc_live_amount($user_data->wallet->withdrawal) }}
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
                <span class="info-box-text mt-10">Total Referral </span>
                <span class="info-box-number">
                {{ $user_data->referrals->count() }}
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
                <span class="info-box-text mt-10">Account Type </span>
                <span class="info-box-number">
                {{ $user_data->role_name }}
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue-gradient">
                <h3 class="widget-user-username">{{ ucwords($user_data->full_name) }}</h3>
                <h5 class="widget-user-desc">User Role : {{ ucwords($user_data->role_name)  }}</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle" src="{{image_url( !(empty($user_data->image)) ? auth()->user()->image : 'author.jpeg' )}}" alt="User Avatar">
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{$user_data->phone_number}}</h5>
                            <span> Phone Number</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">Email Address</h5>
                            <span> {{$user_data->email_address}}</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">{{$user_data->created_at}}</h5>
                            <span>Registered Date</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">All Mining Transaction</a></li>
                <li><a href="#tab_2" data-toggle="tab">All Referrals</a></li>
                <li><a href="#tab_3" data-toggle="tab">All Withdrawal</a></li>
                <li><a href="#tab_4" data-toggle="tab">All Deposit</a></li>
                <li><a href="#tab_5" data-toggle="tab">Account Balance</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
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

                <div class="tab-pane" id="tab_2">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @php($sn =1)
                            @foreach($referral as $value)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{ $value->full_name }}</td>
                                    <td>{{$value->email_address}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane" id="tab_3">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2">
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
                                <th>Actions</th>
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
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @php($sn =1)
                            @foreach($withdrawal as $value)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>${{$value->amount}}</td>
                                    <td>{{$value->amount_btc}}</td>
                                    <td>{{$value->wallet_address}}</td>
                                    <td>{{$value->reference}}</td>
                                    <td>{{$value->withdrawal_method}}</td>
                                    <td>{{ucwords($value->status)}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td><a href="{{url('admin/edit-withdrawal/'.$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane" id="tab_4">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example3">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Reference</th>
                                <th>Payment Method</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Reference</th>
                                <th>Payment Method</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @php($sn = 1)
                            @foreach($deposit as $value)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>${{ $value->amount }}</td>
                                    <td>{{ ucwords($value->status) }}</td>
                                    <td>{{$value->reference}}</td>
                                    <td>{{ ucwords($value->currency) }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td><a href="{{url('admin/deposit-details/'.$value->id)}}" class="btn btn-primary btn-sm">View</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane" id="tab_5">
                    <form action="{{url('admin/top_up_balance')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Total Balance</label>
                            <input type="number" step="any" class="form-control" required name="balance" value="{{$user_data->wallet->balance}}" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Deposit Balance</label>
                            <input type="number" step="any" class="form-control" required name="deposit" value="{{$user_data->wallet->deposit}}" id="">
                        </div>

                        <input type="hidden" name="user_id" value="{{$user_data->id}}" id="">

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->

    </div>

@endsection