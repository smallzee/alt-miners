@extends('admin/layout')

@section('content')


    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="myModalLabel" class="modal-title">Add New KYC Type</h4>
                </div>
                <div class="modal-body">
                    <form action="{{url('admin/create_new_kyc_type')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{old('name',request('name'))}}" class="form-control" required placeholder="Name" id="">
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

                <button data-toggle="modal" style="margin-bottom: 20px;" data-target="#myModal" class="btn btn-primary"><i class="ti-plus"></i> Add New KYC Type</button>


                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @php($sn =1)
                            @foreach($all_kyc_type as $value)
                                <tr>
                                    <td>{{ $sn++ }}</td>
                                    <td>{{ ucwords($value->name) }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td><a href="{{url('admin/edit-kyc/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection