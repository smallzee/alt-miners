@extends('user/layout')

@section('content')

    <div id="main-container">
        <div class="container-fluid">

            <div class="card-group">
                <h3 align="center">
                    Make payment of <span class='text-danger'><b>{{$payment_data['amount']}}USD</b></span>  (in ONE payment) Via {{ strtoupper($payment_data['currency']) }}
                </h3>

                <p>
                <img style="max-width:100%; height:300px; width:300px; display: block; margin-right: auto; margin-left: auto" alt="qrcode" data-size="200" src=
                    "https://chart.googleapis.com/chart?chs=300x300&chld=L|2&cht=qr&chl={{$payment_data['currency'] }}:{{$payment_data['wallet_address']}}?amount={{$payment_data['amount']}}">
                </p>

               <div class="form-group">
                   <div class="input-group">
                       <input type="text" class="form-control" value="{{$payment_data['wallet_address']}}" id="myInput" style="height: 40px; border-radius: 0;">
                       <div class="input-group-btn">
                           <button class="btn btn-warning" style="border-radius: 0;" onclick="copy_keyboard()">Copy wallet address</button>
                       </div>
                   </div>
               </div>

                <center>
                    <p> Send <span class="text-danger"><b>{{ $payment_data['amount'] }}USD</b></span> (in ONE payment) to: don't include transaction fee in this amount </p>
                </center>

                <hr>

                <form action="{{url('user/create_new_payment')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <input type="hidden" name="currency" value="{{$payment_data['currency']}}" id="">

                    <input type="hidden" name="amount" value="{{$payment_data['amount']}}" id="">

                    <div class="form-group">
                        <label for="">Evidence Of Payment</label> <br>
                        <input type="file" required name="image" accept="image/*" id="">
                       <p> <small>Please note: Maximum upload filesize is 1MB</small></p>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

@endsection