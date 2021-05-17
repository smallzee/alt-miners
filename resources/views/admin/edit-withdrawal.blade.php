@extends('admin/layout')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm col-xs-12">

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
                            <td>Withdrawal Id</td>
                            <td>{{$withdrawal->id}}</td>
                        </tr>
                        <tr>
                            <td>Withdrawal Email Address</td>
                            <td>{{user_details($withdrawal->user_id,'email_address')}}</td>
                        </tr>
                        <tr>
                            <td>Amount In USD</td>
                            <td>${{$withdrawal->amount}}</td>
                        </tr>
                        <tr>
                            <td>Amount In BTC</td>
                            <td>{{$withdrawal->amount_btc}}</td>
                        </tr>
                        <tr>
                            <td>Withdrawal Wallet Address</td>
                            <td>{{$withdrawal->wallet_address}}</td>
                        </tr>
                        <tr>
                            <td>Reference</td>
                            <td>{{$withdrawal->reference}}</td>
                        </tr>
                        <tr>
                            <td>Withdrawal Status</td>
                            <td>{{ucwords($withdrawal->status)}}</td>
                        </tr>
                    </table>
                </div>

                @if(!in_array($withdrawal->status,array('rejected','paid')))
                    <h4 class="page-header">Payment Confirmation</h4>

                    <form action="{{ url('admin/withdrawal_confirmation')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Payment Status</label>
                            <select name="status" id="" required class="form-control">
                                @foreach(array('processing','rejected','pending','paid') as $value)
                                    <option value="{{$value}}" {{ ($value == $withdrawal->status) ? 'selected' : ''}}>{{ucwords($value)}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" name="id" value="{{$withdrawal->id}}" id="">
                        <input type="hidden" name="email_address" value="{{ user_details($withdrawal->user_id,'email_address') }}" id="">
                        <input type="hidden" name="full_name" value="{{ user_details($withdrawal->user_id,'full_name') }}" id="">
                        <input type="hidden" name="amount" value="{{$withdrawal->amount}}" id="">
                        <input type="hidden" name="user_id" value="{{ $withdrawal->user_id }}" id="">
                        <input type="hidden" name="reference" value="{{ $withdrawal->reference }}" id="">

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>

@endsection