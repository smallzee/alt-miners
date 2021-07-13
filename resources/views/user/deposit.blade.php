@extends('user/layout')

@section('content')

    <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$page_title}}</h3>
            </div>
            <div class="box-body">

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

                </form>

            </div>
        </div>
    </div>
</div>


@endsection