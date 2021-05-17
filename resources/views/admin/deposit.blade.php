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
                            <th>S/N</th>
                            <th>Email Address</th>
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
                            <th>Email Address</th>
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
                            @foreach($all_deposit_data as $value)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{ user_details($value->user_id,'email_address') }}</td>
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
        </div>
    </div>

@endsection