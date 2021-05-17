@extends('user/layout')

@section('content')

    <div id="main-container">
        <div class="container-fluid">

            <h2>Enter the USD capital</h2>
            <div class="card-group">

                <form method="post" action="{{url('user/create_deposit')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="amount" required placeholder="Investment capital(USD)" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cn">Choose mining coin</label>
                        <select name="currency" class="form-control">
                            <option value="btc">Bitcoin</option>
                            <option value="usdt">USDT</option>
                            <option value="litcoin">Litcoin</option>
                            <option value="eth">Ethereum</option>
                            <option value="dogecoin">Dogecoin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="go-ahead" class="btn btn-lg btn-primary">Continue</button>

                    </div>

                    <div id="myAlertHolder"></div>

                </form>

            </div>
        </div>
    </div>

@endsection