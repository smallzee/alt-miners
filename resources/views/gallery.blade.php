@extends('layout')

@section('content')

    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Gallery</h2>
                <a href="{{url('/')}}"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">Gallery</span>
            </div>
        </div>
    </div>


    <section id="portfolio-section" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="controls text-center">
                        <a class="filter btn btn-common active" data-filter="all" style="color:#fff;">
                            All
                        </a>
                        <a class="filter btn btn-common" data-filter=".design" style="color:#fff;">
                            Farm
                        </a>
                        <a class="filter btn btn-common" data-filter=".development" style="color:#fff;">
                            Setup
                        </a>
                        <a class="filter btn btn-common" data-filter=".print" style="color:#fff;">
                            Team
                        </a>
                    </div>

                </div>
            </div>
            <div id="portfolio" class="row wow fadeInDown animated" style="visibility: visible;">
                <div class="col-md-6 col-sm-6 col-lg-4 mix development " style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-1.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-1.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix design " style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-2.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-2.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix development" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-3.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-3.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix  design" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-5.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-5.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix development" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-4.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-4.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix development" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-7.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-7.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div><div class="ccol-md-6 col-sm-6 col-lg-4 mix development" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-8.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-8.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix development" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-9.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-9.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix development" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-10.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-10.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix design" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-11.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-11.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div><div class="ccol-md-6 col-sm-6 col-lg-4 mix development" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-12.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-12.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix design" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-13.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-13.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix design" style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-14.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-14.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4 mix  development " style="display: inline-block;" data-bound="">
                    <div class="portfolio-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="{{ image_url('gallery/img-6.jpg')}}" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="{{ image_url('gallery/img-6.jpg')}}">
                                <i class="lni-zoom-in"></i>
                            </a>
                            <h3>Project Title</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection