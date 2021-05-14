<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ page_title($page_title) }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{image_url('logo.png')}}">
    <link rel="stylesheet" href="{{url('assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/css/iofrm-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/css/iofrm-theme22.css')}}">
</head>
<body>

<div class="form-body without-side">
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="{{image_url('graphic3.svg')}}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Admin Login</h3>
                    <p>Enter your credential to get access.</p>
                    @include('flash')
                    <form method="post">
                        @csrf
                        <label for="">Email Address</label>
                        <input class="form-control" value="" style="height: 45px; background: #fff; border: #ccc solid thin" type="text" name="email" placeholder="E-mail Address" required>
                        <label for="">Password</label>
                        <input class="form-control" style="height: 45px; background: #fff; border: #ccc solid thin" type="password" name="password" placeholder="Password" required>
                        <div class="form-button">

                            <button id="submit" type="submit" style="height: 45px;" name="login" class="ibtn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
