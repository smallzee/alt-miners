@extends('layout')

@section('content')

    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>{{$page_title}}</h2>
                <a href="{{url('/')}}"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">{{$page_title}}</span>
            </div>
        </div>
    </div>



    <section class="pricing section-padding">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Pricing Plans</h2>
                        <p>Get started with our mining platform now! All you need to do is choose a mining algorithm.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($doge_pricing as $value)

                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="pricing-table text-center">
                            <div class="table-header">
                                <h3>{{$value->name}}</h3>
                            </div>
                            <div class="plan">
                                <h3 class="price">
                                    ${{$value->min_amount}} - ${{$value->max_amount}}</h3>
                                <p class="period">
                                    {{$value->description}}
                                </p>
                            </div>
                            <div class="plan-info">
                                <p>
                                    <strong><i class="lni-check-box"></i> TH/S</strong> {{ ($value->duration == 1) ? $value->duration.'day' : $value->duration.'days' }} </p>
                                <p>
                                    <strong><i class="lni-check-box"></i> Return On Investment</strong> {{$value->daily_return}}% daily profit</p>
                                <p>
                                    <strong><i class="lni-check-box"></i>Principle</strong>Capital back in {{ ($value->duration == 1) ? $value->duration.'day' : $value->duration.'days' }}</p>
                                <div class="button-area">
                                    <a href="{{url('user/mining/dogecoin')}}" class="btn btn-common btn-lg">
                                        Purchase
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>


@endsection