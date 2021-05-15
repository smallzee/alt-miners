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
                            <td>Full Name </td>
                            <td>{{ $user_data->full_name }}</td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td>{{$user_data->email_address}}</td>
                        </tr>
                        <tr>
                            <td>KYC Status</td>
                            <td> {{ kyc_status($user_data->kyc_status) }}</td>
                        </tr>
                        <tr>
                            <td>KYC Type</td>
                            <td>{{ get_kyc_type($user_data->kyc_type,'name') }}</td>
                        </tr>
                        <tr>
                            <td>KYC Document Image</td>
                            <td><a href="{{image_url($user_data->kyc_image)}}">
                                    <img src="{{image_url($user_data->kyc_image)}}" class="img-size" alt="">
                                </a></td>
                        </tr>
                    </table>
                </div>


                <h5 class="page-header">KYC Status</h5>
                <form action="{{url('admin/confirm_user_kyc')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">KYC status</label>
                        <select name="kyc_status" class="form-control" required id="">

                            @foreach(array(1,2,3) as $value)
                                <option value="{{$value}}" {{ ($value == $user_data->kyc_status) ? 'selected' : '' }}>{{ kyc_status($value) }}</option>
                            @endforeach

                        </select>
                    </div>


                    <input type="hidden" name="email_address" value="{{$user_data->email_address}}" id="">
                    <input type="hidden" name="id" value="{{$user_data->id}}" id="">
                    <input type="hidden" name="full_name" value="{{ $user_data->full_name }}" id="">

                    <div class="form-group">
                        <label for="">Comment</label>
                        <textarea name="comment" class="form-control" required placeholder="Comment" style="resize: none;"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection