@extends('user/layout')

@section('content')

<div id="main-container">
    <div class="container-fluid">

            <div id="current-mining" class="mma mma-bc1">
                <div class="row">

                    <div class="cmg cmg-1" style="margin-top:30px;">

                        <div class="cmg cmg-1">
                            <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                            <div class="cmc">
                                <b>
                                    ${{ number_format(balance("deposit"),2) }}							</b>
                                <b>
                                    {{get_btc_live_amount(balance("deposit"))}} BTC
                                </b>
                                <p>Deposit</small>
                                </p>
                            </div>
                            <div class="btn-group">
                                <a href="{{url('user/deposit')}}" class="btn btn-warning">Deposit</a>
                                <a href="{{url('user/buy-haspower')}}" class="btn btn-primary">Buy Haspower</a>
                                <a href="{{url('user/mine-dogecoin')}}" class="btn btn-primary">Mine Dogecoin</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


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
                        <a href="" class="btn btn-primary">Withdraw</a>
                    </div>
                </div>

            </div>
        </div>

        <div id="current-mining" class="mma mma-bc1">
            <div class="row">

                <div class="cmg cmg-1" style="margin-top:30px;">

                    <div class="cmg cmg-1">
                        <span class="cpwr"><svg class="icon gm-icon-dashboard-power"><use xlink:href="#gm-icon-dashboard-power"></use></svg></span>

                        <div class="cmc">
                            <b>
                                ${{ number_format(balance("withdrawal"),2) }}							</b>
                            <b>
                                {{get_btc_live_amount(balance("withdrawal"))}} BTC
                            </b>
                            <p>Withdrawal <small>Amount</small>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!-- button boxes -->
        <div id="current-mining-boxes" class="mma mma-bc1">
            <div class="row">
                <div class="col-sm-6">
                    <div class="cmb-allocate">
                        <h3>Profit calculator</h3>
                        <p>calculate your daily profit</p>
                        <a href="{{url('user/caculator')}}" role="button" class="btn btn-primary mining-hp-allocation pull-right"><span class="fa fa-signal"></span>Calculate</a>
                        <svg class="icon gm-icon-dashboard-mining-allocation"><use xlink:href="#gm-icon-dashboard-mining-allocation"></use></svg>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="cmb-upgrade">
                        <h3>Buy Hashpower</h3>
                        <p>Purchase more hashpower</p>
                        <a href="{{url('user/buy-hashpower')}}" role="button" class="btn btn-warning order-hp-dash pull-right"><span class="fa fa-bolt"></span>Buy Hashpower</a>
                        <svg class="icon gm-icon-dashboard-upgrade-hashpower"><use xlink:href="#gm-icon-dashboard-upgrade-hashpower"></use></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection