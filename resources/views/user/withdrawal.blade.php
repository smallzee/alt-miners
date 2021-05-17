@extends('user/layout')

@section('content')



            <div id="current-mining" class="mma mma-bc1">
                <div class="row">

                    <div class="cmg cmg-1" style="margin-top:30px;">

                        <div class="cmg cmg-1">
                            <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                            <div class="cmc">
                                <b>
                                    ${{ number_format(balance("balance"),2) }}							</b>
                                <b>
                                    {{get_btc_live_amount(balance("balance"))}} BTC
                                </b>
                                <p>Total <small>Balance</small>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-group">

                <form action="{{url('user/create_withdrawal')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Amount (should be in USD)</label>
                        <input type="number" class="form-control" step="any" name="amount" placeholder="Amount (should be in USD)" id="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Submit" name="" id="">
                    </div>
                </form>

            </div>



@endsection