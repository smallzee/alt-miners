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

            </div>
        </div>
    </div>


@endsection