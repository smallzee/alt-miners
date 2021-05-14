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


                <form action="{{url('admin/update_user_role')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role" class="form-control" required id="">
                            @foreach($role as $value)
                                <option value="{{$value->id}}" {{ ($user_data[0]->role_id == $value->id) ? 'selected' : ''}}>{{ ucwords($value->name) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="id" value="{{$user_data[0]->id}}" id="">

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update" name="" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection