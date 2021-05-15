<!Doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ get_settings('web_title') }} is the largest and most trusted Bitcoin cloud mining provider in the world. We are dedicated to transparency, efficiency, and maximize your profits.">
    <meta name="keywords" content="Bitcoin mining, scrypt mining, altcoin mining, cloud mining, X11, hosted mining">
    <meta name="format-detection" content="telephone=no">
    <title>{{ page_title($page_title) }}</title>

    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/fonts/line-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/css/main.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/css/style_dash_1.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<header>
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="navbar-header text-center">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="user_dashboard.php" title="{{ get_settings('web_title') }}"><img src="{{image_url('logo.png')}}" height="50"></a>
        </div>
        <div id="notifications" class="navbar-header-container">
            <div class="container">
                <div class="mma">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8"><marquee style="color:#ffb345;font-size:25px;">Introducing Dogecoin Mining. In order to secure a better future for our members in the cryptocurrency world, {{ get_settings('web_title') }} is engaging in DOGECOIN Mining. <a href="user_dashboard.php?p=dogecoin_mining">Click here</a> to join in creating wealth with Dogecoin.</marquee></div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
                            <div class="limiter"><p><a href="#" class="nav-notification message-toggle">
                                        <svg class="gm-icon gm-icon-notification"><title>Messages</title></svg>
                                        <img src="dashboard/mail.png" alt="" class="img-responsive"></a>
                                    <a href="{{url('user/logout')}}"><img src="{{image_url('power-off.png')}}" alt="" class="img-responsive"></a></p>
                            </div></div></div></div></div> <div class="side-notification-overlay">
                <div class="side-notification"><div class="notification-top">
                        <h5 data-original-title="" title="">Messages</h5> <p>Dashboard message center</p> <ul>
                            <li class="close-notification message-toggle"><span title="Close" class="icon-box">
	<i class="gm-icon-close-xl"></i></span></li></ul></div> <ul class="notification-list">
                        <li class="none"><p>No new messages</p></li></ul>
                    <div class="notification-bottom disabled">
                        <button title="Previous messages" class="icon-box ics"><i class="gm-icon-arrow-left"></i></button>
                        <button title="Next messages" class="icon-box ics"><i class="gm-icon-arrow-right"></i></button>
                    </div></div> <div class="side-notification-close message-toggle"></div></div></div>


        <div class="collapse navbar-collapse" id="main-menu">

            <div class="nav-user-info">
                <h2>Welcome back </h2>
                <span class="fa fa-user"></span>
            </div>
            <ul class="nav navbar-nav ">

                <li class="start-mining">
                    <a class="navbar-link" href="{{url('user/buy-hashpower')}}"><span class="fa"><svg class="gm-icon gm-icon-hashpower"><use xlink:href="/img/sprite_dash.svg#gm-icon-hashpower"></use></svg></span>
                        <b>Start mining now</b></a>
                </li>
                <li class="active">
                    <a class="navbar-link" href="{{url('user/dashboard')}}"><span class="fa fa-dashboard"></span>
                        <b class="nav-text">Dashboard</b></a>
                </li>
                <li>
                    <a class="navbar-link" href="{{url('user/referral')}}"><span class="fa fa-th-list"></span> <b class="nav-text">Referral</b></a>
                </li>
                <li>
                    <a href="{{url('user/contact-support')}}"><span class="fa fa-comments"></span> <b class="nav-text">Customer Support</b></a>
                </li>
                <li>
                    <a class="navbar-link" href="{{url('user/password')}}"><span class="fa fa-th-list"></span> <b class="nav-text">Change Password</b></a>
                </li>
                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=my-orders"><span class="fa fa-address-book"></span>
                        <b class="nav-text">My orders</b></a>
                </li>
                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=dogecoin_mining"><span class="fa fa-flash"></span>
                        <b class="nav-text">Mine Dogecoin</b></a>
                </li>
                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=buy_hashpower"><span class="fa fa-flash"></span>
                        <b class="nav-text">Buy Hashpower</b></a>
                </li>

                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=hardware_purchase"><span class="fa fa-flash"></span>
                        <b class="nav-text">Hardware Purchase</b></a>
                </li>
                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=deposit"><span class="fa fa-shield"></span>
                        <b class="nav-text">Deposit</b></a>
                </li>
                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=withdrawal"><span class="fa fa-shield"></span>
                        <b class="nav-text">Withdrawal</b></a>
                </li>
                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=withdrawal_history"><span class="fa fa-shield"></span>
                        <b class="nav-text">Withdrawal History</b></a>
                </li>


                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=kyc"><span class="fa fa-shield"></span>
                        <b class="nav-text">KYC</b></a>
                </li>

                <li>
                    <a class="navbar-link" href="user_dashboard.php?p=settings"><span class="fa fa-shield"></span>
                        <b class="nav-text">Settings</b></a>
                </li>

                <li class="emptys">&nbsp;</li>
            </ul>
            <li class="emptys">&nbsp;</li>
        </div>
    </nav>
</header>

@yield('content')

<script src="{{url('assets/libs/js/jquery-min.js')}}"></script>
<script src="{{url('assets/libs/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/user/js/bootstrap-select.js')}}"></script>
<script src="{{url('assets/user/js/everybody.js')}}"></script>
<script src="{{url('assets/user/js/menu.js')}}"></script>
</body>
</html>