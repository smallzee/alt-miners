@extends('admin/layout')

@section('content')
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
                    <form action="{{url('admin/delete_mining')}}" method="post">
                        @csrf
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th></th>
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
                                <th></th>
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
                                    <td><input type="checkbox" name="id[]" value="{{$value->id}}" id=""></td>
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

                        <div class="form-group">
                            <input type="submit" class="btn btn-danger" value="Delete" name="" id="">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection