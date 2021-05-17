@extends('user/layout')

@section('content')

    <div id="main-container">
        <div class="container-fluid">

            <div class="card-group">

                <div class="form-group">
                    <div class="alert alert-danger">Referral Link</div>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{url('ref/').'/'.auth()->user()->referral_code}}" id="myInput" style="height: 40px; border-radius: 0;">
                        <div class="input-group-btn">
                            <button class="btn btn-warning" style="border-radius: 0;" onclick="copy_keyboard()">Copy</button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @php($sn =1)
                            @foreach($referral as $value)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{ $value->full_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection