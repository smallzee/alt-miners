@extends('layout')

@section('content')

    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Login</h2>
                <a href="{{url('/')}}"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Login</span>
            </div>
        </div>
    </div>

    <section id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="page-login-form box">
                        <h3>
                            Login
                        </h3>
                        @include('flash')
                        <form class="login-form" action="" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-users"></i>
                                    <input type="email" required class="form-control" name="email_address" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" required class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="rememberme" value=""> Keep Me Signed In
                            </div>
                            <button class="btn btn-common log-btn" type="submit">Submit</button>
                        </form>
                        <ul class="form-links">
                            <li class="text-center"><a href="{{url('account/create')}}">Don't have an account?</a> | <a href="" id='res' style="font-weight:bold ">Reset password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection