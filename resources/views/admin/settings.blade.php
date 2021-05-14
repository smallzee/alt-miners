@extends('admin/layout')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$page_title}}</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">

                <form action="{{url('admin/update_settings')}}" method="post">
                    @csrf
                    <div class="row">

                        @foreach($all_key as $key)

                            <h6 class="page-header col-sm-12" style="font-size: 15px; font-weight: bold">{{ucwords($key)}}</h6>

                            @foreach($all_settings_array[$key] as $settings_key)

                                <div class="form-group">

                                    <label for="{{$settings_key['key']}}" class="col-md-4 control-label">
                                        {{$settings_key['descr']}}
                                    </label>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" required name="{{$settings_key['id']}}" type="text" id="{{$settings_key['id']}}" value="{{$settings_key['value']}}">
                                        </div>
                                    </div>

                                </div>

                            @endforeach

                        @endforeach
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update" id="">
                    </div>

                </form>

            </div>
        </div>
    </div>


@endsection