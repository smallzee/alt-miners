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


                <form action="{{url('admin/create_new_cloud_pricing')}}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" required placeholder="Name" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control" required placeholder="Description" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Daily Return (should be in number)</label>
                                <input type="number" name="daily_return" class="form-control" required placeholder="Daily Return" id="">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Duration (should be in days)</label>
                                <input type="number" name="duration" class="form-control" required placeholder="Duration (should be in days)" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Minimum Amount</label>
                                <input type="number" step="any" name="minimum_amount" class="form-control" required placeholder="Minimum Amount" id="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Maximum Amount</label>
                                <input type="number" step="any" name="maximum_amount" class="form-control" required placeholder="Maximum Amount" id="">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Pricing Type</label>
                                <select name="pricing_type" id="" required class="form-control">
                                    <option value="" disabled selected>Select</option>
                                    <option value="2">Doge Pricing</option>
                                    <option value="1">Cloud Pricing</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <input type="submit" name="add" class="btn btn-primary" value="Submit" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>


@endsection