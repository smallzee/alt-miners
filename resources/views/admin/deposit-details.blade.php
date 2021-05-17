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
                            <td>{{ $deposit_details->id }}</td>
                        </tr>
                        <tr>
                            <td>Recipient Email Address</td>
                            <td>{{ $deposit_details->user->email_address }}</td>
                        </tr>
                        <tr>
                            <td>Recipient Full Name</td>
                            <td>{{ $deposit_details->user->full_name }}</td>
                        </tr>
                        <tr>
                            <td>Deposited Amount</td>
                            <td>{{ $deposit_details->amount }}USD</td>
                        </tr>
                        <tr>
                            <td>Payment Method</td>
                            <td> {{ $deposit_details->currency }}</td>
                        </tr>
                        <tr>
                            <td>Reference</td>
                            <td>{{ $deposit_details->reference }}</td>
                        </tr>
                        <tr>
                            <td>Payment Status</td>
                            <td>{{ ucwords($deposit_details->status) }}</td>
                        </tr>
                        <tr>
                            <td>Evidence</td>
                            <td><a href="{{image_url($deposit_details->image)}}"><img src="{{image_url($deposit_details->image)}}" class="img-thumbnail img-size" alt=""></a></td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td>{{ $deposit_details->created_at }}</td>
                        </tr>
                    </table>

                </div>

                @if(!in_array($deposit_details->status,array('failed','completed')))
                    <h4 class="page-header">Payment Confirmation</h4>

                    <form action="{{ url('admin/deposit_confirmation')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Payment Status</label>
                            <select name="status" id="" required class="form-control">
                                @foreach(array('processing','failed','pending','completed') as $value)
                                    <option value="{{$value}}" {{ ($value == $deposit_details->status) ? 'selected' : ''}}>{{ucwords($value)}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" name="id" value="{{$deposit_details->id}}" id="">
                        <input type="hidden" name="email_address" value="{{ user_details($deposit_details->user_id,'email_address') }}" id="">
                        <input type="hidden" name="full_name" value="{{ user_details($deposit_details->user_id,'full_name') }}" id="">
                        <input type="hidden" name="amount" value="{{$deposit_details->amount}}" id="">
                        <input type="hidden" name="user_id" value="{{ $deposit_details->user_id }}" id="">
                        <input type="hidden" name="reference" value="{{ $deposit_details->reference }}" id="">

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>


@endsection