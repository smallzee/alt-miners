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

    <section id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="page-login-form box">
                        <h3>
                           Please upload {{$page_title}}
                        </h3>
                        @include('flash')
                        <form action="{{url('user/upload_kyc')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">KYC Type</label>
                                <select name="kyc_type" required id="" class="form-control">
                                    <option value="" readonly="">Select</option>
                                    @foreach($kyc_type as $value)
                                        <option value="{{$value->id}}">{{ucwords($value->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">KYC Document (should be in image)</label> <br>
                                <input type="file" name="kyc_image" required id="">
                            </div>
                            <button class="btn btn-common log-btn" type="submit">Submit</button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection