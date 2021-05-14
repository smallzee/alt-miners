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

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Short Description</th>
                            <th>Minimum Amount</th>
                            <th>Maximum Amount</th>
                            <th>Daily Return%</th>
                            <th>Principle</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Short Description</th>
                            <th>Minimum Amount</th>
                            <th>Maximum Amount</th>
                            <th>Daily Return%</th>
                            <th>Principle</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach($cloud_pricing as $value)
                            <tr>
                                <td> {{$sn++}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->description}}</td>
                                <td>${{$value->min_amount}}</td>
                                <td>${{$value->max_amount}}</td>
                                <td>{{$value->daily_return}}%</td>
                                <td>Capital back in {{ ($value->duration == 1) ? $value->duration.'day' : $value->duration.'days' }}</td>
                                <td>{{ ($value->duration == 1) ? $value->duration.'day' : $value->duration.'days' }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection