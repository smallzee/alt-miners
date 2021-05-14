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
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Role</th>
                            <th>Country</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Role</th>
                            <th>Country</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @php($sn =1)
                            @foreach($all_users as $value)
                                <tr>
                                    <td>{{ $sn++ }}</td>
                                    <td>{{ $value->email_address }}</td>
                                    <td>{{$value->full_name}}</td>
                                    <td>{{ucwords($value->role_name)}}</td>
                                    <td>{{ get_country($value->country_id,'country_name') }}</td>
                                    <td>{{ status($value->status) }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/profile/'.$value->id)}}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{url('admin/change-role/'.$value->id)}}" class="btn btn-primary">Change User Role</a>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection