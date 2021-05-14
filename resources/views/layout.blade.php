<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Finally a safe and transparent environment for bitcoin mining. {{ get_settings('web_title') }} offers you the opportunity to jump in the Crypto Mining industry.">

    <title>{{ page_title($page_title) }}</title>

    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/fonts/line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/slicknav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/color-switcher.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/ion.rangeSlider.skinFlat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/nivo-lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/extras/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/extras/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/extras/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/libs/css/responsive.css')}}">

    <link rel="icon" href="{{image_url('logo.png')}}">

    <script src="{{url('assets/libs/js/jquery-min.js')}}"></script>
    <script src="{{url('assets/libs/js/tradingview.js')}}"></script>
    <script type="text/javascript" src="../s3.tradingview.com/tv.js"></script>
</head>
<body>

<header id="header-wrap">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-xs-12">

                    <ul class="links clearfix">
                        <li><i class="lni-envelope"></i> {{get_settings('official_email')}}</li>

                    </ul>

                </div>
                <div class="col-lg-5 col-md-4 col-xs-12">
                    <div class="header-top-right float-right">

                    @if(auth()->user())
                            <a href="{{url('user/dashboard')}}" class="header-top-button"><i class="lni-user"></i> Dashboard</a>
                    @else


                        <a href="{{url('account/login')}}" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                        <a href="{{url('account/create')}}" class="header-top-button"><i class="lni-pencil"></i> Create Account</a>

                    @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white" data-toggle="sticky-onscroll">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lin-menu"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{image_url('logo.png')}}" alt="" style="height:60px; width:100px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">
                    <li class="nav-item  active">
                        <a class="nav-link" href="{{url('/')}}"  aria-haspopup="true" aria-expanded="false">
                            Home <i class="fa fa-angle-down"></i>
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{url('about')}}"  aria-haspopup="true" aria-expanded="false">
                            About <i class="fa fa-angle-down"></i>
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{url('pricing')}}"  aria-haspopup="true" aria-expanded="false">
                            Cloud Pricing <i class="fa fa-angle-down"></i>
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{url('doge_pricing')}}"  aria-haspopup="true" aria-expanded="false">
                            Dogecoin Mining Pricing <i class="fa fa-angle-down"></i>
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{url('gallery')}}"  aria-haspopup="true" aria-expanded="false">
                            Gallery <i class="fa fa-angle-down"></i>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{url('faq')}}"  aria-haspopup="true" aria-expanded="false">
                            FAQ <i class="fa fa-angle-down"></i>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">
                            Contact Us
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <ul class="mobile-menu">
            <li>
                <a class="active" href="{{url('/')}}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{url('about')}}">
                    About
                </a>
            </li>
            <li>
                <a href="{{url('pricing')}}">Cloud Pricing</a>
            </li>
            <li>
                <a href="{{url('gallery')}}">
                    Gallery
                </a>
            </li>

            <li>
                <a href="{{url('faq')}}">FAQ</a>
            </li>
            <li>
                <a href="{{url('contact')}}">
                    Contact Us
                </a>
            </li>
        </ul>

    </nav>

    <div class="clearfix"></div>
</header>


@yield('content')


<footer id="footer" class="footer-area section-padding">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">{{ strtoupper(get_settings('web_title')) }}</h3>
                    <ul class="footer-link">
                        <li>
                            <a>{{get_settings('web_title')}} has been reliable and a visible partner for the crypto mining hardware industry for years. We are looking foward navigating you through this complex market.</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">Quick<span> Links</span></h3>
                    <ul class="footer-link">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('faq')}}">FAQ</a></li>
                        <li><a href="{{url('about')}}">About Us</a></li>
                        <li><a href="{{url('shipping')}}">Shipping &amp; Pick-up</a></li></ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">Contact <span>Info</span></h3>
                    <ul class="address">
                        <li>
                            <a ><i class="lni-map-marker"></i>1 Croft Court Plumpton Close, Whitehills Business Park, Blackpool, England, FY4 5PR </a>
                        </li>
                        <li>
                            <a><i class="lni-envelope"></i> {{get_settings('official_email')}}</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright © {{date('Y')}} <a rel="nofollow" href="{{url('/')}}"> | {{get_settings('web_title')}}</a> | All Right Reserved</p>
            </div>
        </div>
    </div>
</section>

<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<script src="{{url('assets/libs/js/popper.min.js')}}"></script>
<script src="{{url('assets/libs/js/bootstrap.min.js')}}"></script>

<script src="{{url('assets/libs/js/jquery.mixitup.js')}}"></script>
<script src="{{url('assets/libs/js/jquery.counterup.min.js')}}"></script>
<script src="{{url('assets/libs/js/ion.rangeSlider.js')}}"></script>
<script src="{{url('assets/libs/js/jquery.parallax.js')}}"></script>
<script src="{{url('assets/libs/js/waypoints.min.js')}}"></script>
<script src="{{url('assets/libs/js/wow.js')}}"></script>
<script src="{{url('assets/libs/js/owl.carousel.min.js')}}"></script>
<script src="{{url('assets/libs/js/jquery.slicknav.js')}}"></script>
<script src="{{url('assets/libs/js/nivo-lightbox.js')}}"></script>
<script src="{{url('assets/libs/js/jquery.slicknav.js')}}"></script>
<script src="{{url('assets/libs/js/main.js')}}"></script>
<script src="{{url('assets/libs/js/form-validator.min.js')}}"></script>
<script src="{{url('assets/libs/js/contact-form-script.min.js')}}"></script>
<script src="{{url('assets/libs/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{url('assets/libs/js/jquery.themepunch.revolution.min.js')}}"></script>

<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/libs/js/extensions/revolution.extension.video.min.js')}}"></script>

<script type="text/javascript">
    var tpj = jQuery;
    var revapi1078;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1078_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_1078_1");
        } else{
            revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"revolution/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        }
                    }
                    ,
                    bullets: {
                        enable:false,
                        hide_onmobile:true,
                        hide_under:600,
                        style:"metis",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">sss</span>'
                    }
                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%",
                    presize:false
                },
                responsiveLevels:[1240, 1024, 778, 480],
                visibilityLevels:[1240, 1024, 778, 480],
                gridwidth:[1240, 1024, 778, 480],
                gridheight:[600, 600, 500, 400],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type:"mouse",
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops: - 1,
                stopAtSlide: - 1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    }); /*ready*/
</script>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+447503350804", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
</body>
</html>