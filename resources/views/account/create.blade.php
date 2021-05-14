@extends('layout')

@section('content')

    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Register</h2>
                <a href="{{url('/')}}"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Register</span>
            </div>
        </div>
    </div>

    <!-- register form section -->
    <section id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="page-login-form box">
                        <h3>
                            Create Your account
                        </h3>
                        @include('flash')
                        <form class="login-form" method="post" action="">
                            @csrf
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-envelope"></i>
                                    <input type="email" value="{{old('email_address',request('email_address'))}}" class="form-control" name="email_address" placeholder="Email Address" required id='mail'>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" value="{{old('full_name',request('full_name'))}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="country" class="j-country-register form-control input-lg country-select" data-live-search="true">

                                    <option value="" disabled>Country</option>

                                    @foreach(get_all_countries() as $value)
                                        <option value="{{ $value->id }}">{{ ucwords($value->country_name) }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <button class="btn btn-common log-btn mt-3" type="submit" name="regbuttn">Register</button>
                            <p class="text-center">Already have an account?<a href="{{url('account/login')}}"> Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection