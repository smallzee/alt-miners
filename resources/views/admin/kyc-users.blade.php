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
                    <table class="table table-bordered table-striped table-hover" id="example1">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Country</th>
                            <th>KYC Status</th>
                            <th>KYC Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Country</th>
                            <th>KYC Status</th>
                            <th>KYC Type</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn = 1)
                        @foreach($all_users as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{ $value->email_address }}</td>
                                <td>{{ucwords($value->full_name)}}</td>
                                <td>{{get_country($value->country_id,'country_name')}}</td>
                                <td>{{kyc_status($value->kyc_status)}}</td>
                                <td>{{get_kyc_type($value->kyc_type,'name')}}</td>
                                <td><a href="{{url('admin/view-user-kyc/'.$value->id)}}" class="btn btn-primary btn-sm" >View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection