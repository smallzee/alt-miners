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

                <form action="{{url('admin/edit_kyc_type')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$kyc->name}}" class="form-control" required placeholder="Name" id="">
                    </div>

                    <input type="hidden" name="id" value="{{$kyc->id}}" id="">


                    <div class="form-group">
                        <input type="submit" name="add" class="btn btn-primary" value="Submit" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection