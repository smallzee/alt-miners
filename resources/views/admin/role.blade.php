@extends('admin/layout')

@section('content')

    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="myModalLabel" class="modal-title">Add New Role</h4>
                </div>
                <div class="modal-body">
                    <form action="{{url('admin/create_new_role')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required placeholder="Name" id="">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="add" class="btn btn-primary" value="Submit" id="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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

                <button data-toggle="modal" style="margin-bottom: 20px;" data-target="#myModal" class="btn btn-primary">Add New Role</button>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="example1">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Role Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Role Name</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach($role_data as $value)
                            <tr>
                                <td>{!! $sn++ !!}</td>
                                <td>{!! $value->name !!}</td>
                                <td>
                                    <a href="{{url('admin/edit-role/'.$value->id)}}" class="btn btn-sm btn-primary">Update</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection