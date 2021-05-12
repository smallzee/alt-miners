@extends('layout')

@section('content')
    <div id="page-banner-area" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Frequently Asked Questions</h2>
                <a href="{{url('/')}}"><i class="lni-home"></i> Home</a>
                <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
                <span class="current">FAQ</span>
            </div>
        </div>
    </div>


    <div class="main-container section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <h2 class="mt-3 mb-5 text-center">Frequently Asked Questions</h2>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" aria-expanded="false">
                                        How does bitcoin mining work ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse in collapse" style="">
                                <div class="panel-body">
                                    <p>
                                        It’s quick and very easy! As soon as we receive your payment your contract will be added to your profile, and you can immediately start mining. Depending on the blockchain algorithm you select and the associated mining service agreement you enter into, you can either mine native cryptocurrencies directly or allocate your hashpower to other cryptocurrencies (marked with AUTO), and even choose a specific allocation for them.
                                    </p>
                                    <p>
                                        Remark: Every day of mining will be processed and sent to your account in the following 24 hours after the mining day is over
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                                        What is the mining performance? Why are you not mining yourself?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" style="">
                                <div class="panel-body">
                                    <p>
                                        Besides the fact that we ourselves mine with the very same hardware that we offer to our clients, our capital is limited. We believe that Bitcoin and Altcoin mining is one of the best ways to receive Cryptocurrencies, however, we do not want to “put all our eggs in one basket”.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                                        What does “99.9% uptime guarantee” mean?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" style="">
                                <div class="panel-body">
                                    <p>
                                        It is always possible that mining hardware crashes, slows down or completely breaks. In all these cases, our algorithms ensure that other miners are allocated to the relevant pools to fully compensate for possible hashpower loss. This way our clients will not lose a second of mining time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed" aria-expanded="false">
                                        How frequently will I receive my mining outputs?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Mining outputs are generated daily, but you will receive your outputs only once they have accumulated to a certain quantity. These minimum mining outputs are set in order to avoid that customers pay excessive fees for receiving small amounts in their wallets.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwelve" class="collapsed" aria-expanded="false">
                                        Do i get referral commission ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsetwelve" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Yes, we offer a 10% referral commission whenever a new investor registers with your referral code and invest.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive" class="collapsed" aria-expanded="false">
                                        What is the maintenance fee?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Some of our products have a maintenance fee attached.

                                        The maintenance fee covers all costs related to mining including, inter alia:

                                        electricity cost
                                        cooling
                                        maintenance work
                                        hosting services

                                        The fee is fixed in USD but deducted from the daily mining rewards in the natively mined coin on a daily basis. You will find the maintenance fee details of your chosen contract in the Terms of Service before the purchase</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed" aria-expanded="false" href="#collapsesix">
                                        What are the expected returns?
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapsesix" style="">
                                <div class="panel-body">
                                    <p> The results of cryptocurrency mining highly depend on the price and the network difficulties of the given cryptocurrencies that you are mining. Neither of those can be predicted, so each customer must make an independent decision about the benefits of cryptocurrency mining and, in doing so, should consider the risks and their own circumstance when choosing whether to mine.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed" aria-expanded="false" href="#collapseseven">
                                        Ok, fine! How can I pay?
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" style="" id="collapseseven">
                                <div class="panel-body">
                                    <p>
                                        We currently accept the following payment methods:<br>
                                        Perfect Money, cryptocurrencies: Bitcoin, Litecoin, Dogecoin, Dash, Zcash, Bitcoin Cash </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed" aria-expanded="false" href="#collapseeight">
                                        How is security of my mining contract ensured?
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" style="" id="collapseeight">
                                <div class="panel-body">
                                    <p>
                                        Due to increased scam in the mining industry, we understand that this question is quite obvious. With an extensive experience of more than 5 years, HashGains possesses 1500+ well-qualified IT professionals. {{ ucwords(get_settings('web_title')) }}s is backed by Cyfuture, a leader in running and managing data centers across the globe for thousands of customers. Therefore, you are completely secured and are in safe hands with the investment in {{ ucwords(get_settings('web_title')) }}.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed" aria-expanded="false" href="#collapsenine">
                                        Do I need to provide KYC documents?
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" style="" id="collapsenine">
                                <div class="panel-body">
                                    <p>
                                        If the legal requirements arise in future you may be asked to provide the identity documents (Photo ID, Address Proof, Passport, Driving License... etc) for your identification for initiating the process of KYC. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed" aria-expanded="false" href="#collapseten">
                                        Is there transaction fee during payouts ?
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" style="" id="collapseten">
                                <div class="panel-body">
                                    <p>
                                        Yes, we charge small mining fee of 0.0008 BTC or equivalent currency for each transfer. We would like to confirm fellow customers that this is something which is required to be paid by HashGains as well to the network. 0.0008 BTC transaction for each contract. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" class="collapsed" aria-expanded="false" href="#collapseeleven">
                                        Is there an insurance policy on our investment ?
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" style="" id="collapseeleven">
                                <div class="panel-body">
                                    <p>
                                        Yes, for investments above $4,000. {{ ucwords(get_settings('web_title')) }} will take full responsibility if any issue arise in the future. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection