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

                <form action="{{url('admin/delete_withdrawal')}}" method="post">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th></th>
                                <th>S/N</th>
                                <th>Email Address</th>
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
                                <th></th>
                                <th>S/N</th>
                                <th>Email Address</th>
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
                                    <th><input type="checkbox" name="id[]" value="{{ $value->id }}" id=""></th>
                                    <td>{{$sn++}}</td>
                                    <td>{{ user_details($value->user_id,'email_address') }}</td>
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

                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Delete" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection