@extends('layout')

@section('content')

    <!-- Page Banner Start -->
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>About Us</h2>
                <a href="{{url('/')}}"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">About Us</span>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- About Section Start -->
    <section class="about section-padding" style="padding-bottom:20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="img-thumb">
                        <img src="{{image_url('Bitcoin factory in China.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="img-thumb">
                        <img src="{{image_url('bitcoin-dave-carlson.jpeg')}}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="about-conter">
                        <h3>About Us</h3>
                        <p>{{ ucwords(get_settings('web_title')) }} is group company of 1500+ strong professionals and 2 mega data center’s parent Cyfuture with experience of over 5+ years in Data Center Industry serving 100,000 Customers.</p>
                        <p>Our crypto mining team came from different scientific disciplines and constantly monitor latest innovations and implement them in order to benefit investors. We have large-scale industrial data centers with state-of-the-art technology to host the diverse and complex mining environments. At {{ ucwords(get_settings('web_title')) }}, we’re using world’s best ASIC (Application specific integrated circuit) and GPU (Graphics processing unit) machines to generate best returns with high efficiencies. </p>
                        <p>Our state-of-the-art cloud mining data center offers a great option of Bitcoin mining or other cryptocurrencies with minimal expense and risk. </p>
                        <p>We make sure that our mining partner provides warranties for the mining equipment and maintenance. We keep on evaluating the best solutions so that we can provide the excellent capacity, speed, and performance. {{ ucwords(get_settings('web_title')) }} provide a wide range of services, including :</p>
                        <p>
                            - Different Hashpower with 99.95% Uptime<br>
                            - Instant Coins Deposit to the Account<br>
                            - Excellent Efficiency with Upscale Equipment<br>
                            - 24/7/365 Technical Support </p>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <div class="main-container section-padding" style="padding-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" aria-expanded="false">
                                        Our History</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse in collapse" style="">
                                <div class="panel-body" style="padding:7px;">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="intro-image wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                                <img src="{{image_url('history-banner.jpg')}}" alt="" class="img-fluid" style="margin-bottom:10px;" >
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                                <div class="intro-description"><p></p>
                                                    <p class="text-justify"></p><div style="text-align: justify;"><p> Founded in 2014, {{ ucwords(get_settings('web_title')) }}s is one of the independent branded cryptocurrency mining platform. Headquartered in the City of London, we are present in over 20 countries. We provide a unique global perspective through our global mining networking. This puts us in an excellent position to address the increasingly global needs of our clients.
                                                            <br><br>
                                                            With a global perspective to crypto mining, our service delivery and investment management best practices reveal that we play a key role in investors lives, which provides a solid foundation for our core brand idea and value proposition Realising Ambitions..</p></div><p></p>
                                                </div><br><br>

                                            </div>
                                        </div>
                                    </div>     </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                                    Our Approach
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" style="">
                            <div class="panel-body" style="padding:7px; margin-top:10px;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="intro-image wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                            <div class="intro-description">
                                                <p><strong>-Cryptocurrency Mining</strong></p>
                                                <p>Mining is done by specialized computers. The role of miners is to secure the network and to process every Bitcoin transaction. Here in {{ ucwords(get_settings('web_title')) }} we achieve this by solving a computational problem which allows us to chain together blocks of transactions. For this service, we are rewarded with newly-created Bitcoins and transaction fees.
                                                </p>
                                                <br>
                                                <p><strong>-Hardware Delivery</strong></p>
                                                <p>  Mining is popular today and offers excellent opportunities to earn extra money. {{ ucwords(get_settings('web_title')) }}s has been the reliable address for competitively priced cryptominers. Because we only supply profitable products, our customer base are constantly increasing. We strive to keep our customers happy by offering quick delivery and at the best online prices. offering support after purchase speaks for itself. </p><br>


                                            </div></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                            <div class="intro-description"><p></p>
                                                <p class="text-justify"></p><div style="text-align: justify;"><p><strong>-Investment Managrment</strong></p>
                                                    <p>To support our goal of providing clients with strong, risk-adjusted returns and tailored solutions across our core competencies,
                                                        {{ ucwords(get_settings('web_title')) }} leverages the broader resources and our robust fundamental research and risk-management capabilities have been utilized across mining  cycles
                                                        and support our investment process and deal sourcing.</p><br>

                                                    <p><strong>-Private Finance Solution</strong></p>
                                                    <p>{{ ucwords(get_settings('web_title')) }}s is experienced in offering a variety of consulting service for more than 50 retirement plan platforms including 401(k), 403(b), 457, Profit Sharing, Defined Benefit and ESOPs. We service qualified plans with assets in excess of $70 Billion.

                                                        Plus, Mining has excellent working relationships with dozens of investment companies so your provider likely already knows us. This inclusive market knowledge also helps us provide you with a global perspective that will help you create a solid mix of investment options in your plan.</p>


                                                </div><p></p>
                                            </div><br><br>

                                        </div>
                                    </div>
                                </div>     </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                                    How We Work
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" style="">
                            <div class="panel-body" style="padding:7px;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="intro-image wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                            <img src="{{image_url('8.jpg')}}" alt="" class="img-fluid" style="margin-bottom:10px;" >
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                            <div class="intro-description"><p></p>
                                                <p class="text-justify"></p><div style="text-align: justify;"><p>We devise solutions on behalf of cryptocurrency mining that balance the requirements of the projected parties, i.e., customers, suppliers and capital providers(investors). We have created and greatly benefit from our well- and long-established relationships with members of the global crypto-mining community in order to realize projects.   <br>
                                                        We provide a multi-algorithm, multi-coin cloud mining service using the latest technology </p></div><p></p>
                                            </div><br><br>

                                        </div>
                                    </div>
                                </div>     </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed" aria-expanded="false">
                                    Our Mission
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse">

                            <div class="panel-body" style="padding:7px;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="intro-image wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                            <img src="{{image_url('4.jpg')}}" alt="" class="img-fluid" style="margin-bottom:10px;" >
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="wow fadeIn animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                            <div class="intro-description"><p></p>
                                                <p class="text-justify"></p><div style="text-align: justify;"><p>

                                                        Visions & Missions :  <br><br>

                                                        1. To make acquiring cryptocurrencies easy and fast for everyone..<br>
                                                        2. To help finance your dreams in becoming independent. <br>
                                                        3. To make cryptocurrency mining an easy, smart and rewarding experience for all <br>
                                                        4. To setup a responsible business and facilitate cryptocurrency awareness. <br>
                                                        5. Making you more confident in your ability to boost profits.</p></div><p></p>
                                            </div><br><br>

                                        </div>
                                    </div>
                                </div>     </div>
                        </div>
                    </div>

                    <p><br>We stay updated about the major activities and players in the crypto mining space. For your queries, you can drop us a mail or chat with us. </p>

                    <a href="{{url('contact')}}" class="mt-3 btn btn-common">Contact Us</a>

                </div>
            </div>
        </div>


    </div>

    <!-- Testimonial Section Start -->
    <section class="testimonial section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel">
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Happy to purchase hardware from {{ ucwords(get_settings('web_title')) }}, Fast Delivery and at the best online price.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="{{image_url('testimonial/img1.png')}}" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">Michael Papirov</a></h2>
                                    <h4><a href="#">Customer</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description"> This unique synergy produces the best experience for those interested in mining and we look forward to having a long and prosperous relationship.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="{{image_url('testimonial/img2.png')}}" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">Josh Rossi</a></h2>
                                    <h4><a href="#">investor</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">It’s good to see that they are an honest cloudmining service which shows their farms openly to the public.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="{{image_url('testimonial/img3.png')}}" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">Daniel Greem</a></h2>
                                    <h4><a href="#">investor</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">Their transparent mining sites and high quality software infrastructure together with our high end mining hardware result in a great and unique product and experience for everybody interested in mining!.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="{{image_url('testimonial/img4.png')}}" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">Than Nguyen</a></h2>
                                    <h4><a href="#">investor</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content">
                                    <p class="description">the best in class mining service that is supported by our technologically superior mining hardware.</p>
                                </div>
                            </div>
                            <div class="client-info">
                                <div class="img-thumb">
                                    <img src="{{image_url('testimonial/img5.png')}}" alt="">
                                </div>
                                <div class="info-text">
                                    <h2><a href="#">David Rugani</a></h2>
                                    <h4><a href="#">Customer</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Logo Section Start -->

@endsection