@extends('user/layout')

@section('content')

    <div id="main-container">
        <div class="container-fluid">

            <h2>Enter the USD capital</h2>
            <div class="card-group">

                <form method="POST" action="">
                    <div class="form-group">
                        <input type="text" name="how-much" placeholder="Investment capital(USD)" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cn">Choose mining coin</label>
                        <select name="currency" class="form-control">
                            <option value="BITCOIN" selected="selected">BITCOIN</option>
                            <option value="USDT" selected="selected">ETH/Litecoin/USDT</option>
                            <option value="DOGECOIN" selected="selected">DOGECOIN</option>
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