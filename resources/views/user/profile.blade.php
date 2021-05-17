@extends('user/layout')

@section('content')

    <div id="main-container">
        <div class="container-fluid">
            <div class="card-group">

                <form action="{{url('user/update_profile')}}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" value="{{auth()->user()->email_address}}" class="form-control" required name="email_address" disabled placeholder="Email Address"  id="">
                                <small class="text-danger">Please Note : Email address cannot be changed</small>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" required placeholder="Full name" value="{{auth()->user()->full_name}}" name="full_name" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" required placeholder="Phone Number" value="{{ auth()->user()->phone_number  }}" name="phone_number" id="">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" required value="{{auth()->user()->address}}" name="address" placeholder="Address" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" class="form-control" required value="{{ auth()->user()->city }}" name="city" placeholder="City" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Country</label>
                                <select name="country" class="form-control" required id="">
                                    @foreach(get_all_countries() as $value)
                                        <option value="{{$value->id}}" {{ ($value->id == auth()->user()->country_id) ? 'selected' : '' }}> {{ ucwords($value->country_name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">BTC Wallet Address</label>
                            <input type="text" class="form-control" required value="{{ auth()->user()->wallet_address }}" name="wallet_address" placeholder="BTC Wallet Address" id="">
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Save change" name="" id="">
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
