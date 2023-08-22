@extends('dashboard::layouts.master',[ $pageName = 'Dashboard' ]) @section('content') <div class="nk-block-head">
    <div class="nk-block-between-md g-3">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><span>Welcome!</span></div>
            <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                <div>
                    <h2 class="nk-block-title fw-normal">{{Auth::user()->fullName()}}</h2>
                </div> @if(Auth::user()->hasRole('user')) <div><a class="btn btn-white btn-light" href="/investments/myPlans" style=" border: ridge;">My Plans <em class="icon ni ni-arrow-long-right ml-2"></em></a></div> @endif
            </div> @if(Auth::user()->hasRole('user')) <div class="nk-block-des">
                <p>At a glance summary of your investment account. Have fun!</p>
            </div> @endif
        </div> @if(Auth::user()->hasRole('user')) <div><a class="btn btn-white btn-light ttu" href="#" style="padding: 12px 32px; width: none!important;background-color: black;color: #fff;" data-toggle="modal" data-target="#invest-plan">Make Deposit </a> <a class="btn btn-white btn-light " id="fade_in" href="#" style="float: right; margin: 6px 13px;background-color: dodgerblue;color: #000;">Withdraw
                <!-- <div id="button"><button>Show toast</button></div> -->
            </a> </div>
        <div> </div>
        <div class="nk-block-head-content d-none d-md-block">
            <div class="nk-slider nk-slider-s1">
                <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'> @if(count($myActivePlans) > 0) <div class="slider-item">
                        <div class="nk-iv-wg1">
                            <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                            <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6><a class="nk-iv-wg1-link link link-light" href="#"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                            <div class="nk-iv-wg1-progress">
                                <div class="progress-bar bg-primary" data-progress="80"></div>
                            </div>
                        </div>
                    </div> @else <div class="slider-item">
                        <div class="nk-iv-wg1">
                            <div class="nk-iv-wg1-sub sub-text">No active plan</div>
                            <h6 class="nk-iv-wg1-info title">invest now, secure your future</h6><a class="nk-iv-wg1-link link link-light" href="/investments"><em class="icon ni ni-trend-up"></em> <span>Check Investment list</span></a>
                            <div class="nk-iv-wg1-progress">
                                <div class="progress-bar bg-primary" data-progress="0"></div>
                            </div>
                        </div>
                    </div> @endif </div>
                <div class="slider-dots"></div>
            </div>
        </div> @endif
    </div>
</div>
@if(Auth::user()->hasRole('user')) <div class="nk-block">
    <div class="nk-news card card-bordered">
        <div id="fading_div" style="display:none;">Contact customer agent for support of withdrawal <span id="fade_out" class="close" style="cursor: pointer;">&#x00D7</span></div>
    </div>
    <div class="card-inner">
        <div class="nk-news-list"><a class="nk-news-item" href="/investments">
                <div class="nk-news-icon"><em class="icon ni ni-card-view"></em></div>
                <div class="nk-news-text">
                    <p>Still want to invest? <span>Let's go</span> </p> <em class="icon ni ni-external"></em>
                </div>
            </a></div>
    </div>
</div> @endif <div class="nk-block">
    <div class="row gy-gs">
        <div class="col-md-6 col-lg-4">
            <div class="nk-wg-card is-dark card card-bordered">
                <div class="card-inner">
                    <div class="nk-iv-wg2">
                        <div class="nk-iv-wg2-title">
                            <h6 class="title">Available Balance <em class="icon ni ni-info"></em></h6>
                        </div>
                        <div class="nk-iv-wg2-text">
                            <div class="nk-iv-wg2-amount"> 105.94 <span class="change up"><span class="sign"></span>3.4%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="nk-wg-card is-s1 card card-bordered">
                <div class="card-inner">
                    <div class="nk-iv-wg2">
                        <div class="nk-iv-wg2-title">
                            <h6 class="title">Total Invested <em class="icon ni ni-info"></em></h6>
                        </div>
                        <div class="nk-iv-wg2-text">
                            <div class="nk-iv-wg2-amount"> 509,850.90 <span class="change up"><span class="sign"></span>2.8%</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="nk-wg-card is-s3 card card-bordered">
                <div class="card-inner">
                    <div class="nk-iv-wg2">
                        <div class="nk-iv-wg2-title">
                            <h6 class="title">Total Profits <em class="icon ni ni-info"></em></h6>
                        </div>
                        <div class="nk-iv-wg2-text">
                            <div class="nk-iv-wg2-amount"> 50,600.48 <span class="change down"><span class="sign"></span>1.4%</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @if(Auth::user()->hasRole('user')) <div class="modal fade modal-length" tabindex="-1" id="invest-plan">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body modal-body-md text-center">
                <div class="nk-modal">
                    <div class="makedeposit" Align="center" style="font-size: 20px; font-weight: bold;">MAKE A DEPOSIT </div>
                    <h4 class="nk-modal-title">Confirm Your Payment</h4>
                    <div>Enter your amount to confirm the order to complete the payment or cancel.</div>
                    <div class="nk-modal-form">
                        <div class="form-group">
                            <div class="form-info">USD</div> <input type="number" class="form-control form-control-password-big text-cente border-control-form">
                        </div>
                    </div> <!-- <div class="main main-field"> <input type="text" value="18v4qyBUFXAHo7v4iTHqtDLZjCEoyJB8wt" readonly> <i class="material-icons" onclick="copy()" id="copy">content_copy</i> </div> -->
                    <div class="main main-field">
                        <div class="copy-text"><input type="text" class="text" value="18v4qyBUFXAHo7v4iTHqtDLZjCEoyJB8wt" readonly> <button><i class="fa fa-clone"></i></button> </div>
                    </div>
                    <div class="QRCODE qr-address"><img src="https://chart.apis.google.com/chart?chs=300x300&cht=qr&chld=|0&chl=http%3A%2F%2F13frahbJrBo6yfhyUaVJoixnhaTjXgDpbn" width="150" height="150"></div> <!-- <div class="proveofpayment Pop-prove"> <input id="input" placeholder="Transaction Hash" class="Pop-prove" type="text" name="name" style="background-color: none;"> </div> -->
                    <div class="nk-modal-action action-modal"> <a href="#" class="btn btn-lg btn-mw btn-primary" ng-click="openModal();" data-dismiss="modal" data-toggle="modal" data-target="#confirm-invest">Confirm Transaction</a>
                        <div class="sub-text sub-text-alt mt-3 mb-4">This transaction will appear on your wallet statement as Invest * SILVER. </div> <a href="#" class="link link-soft" data-dismiss="modal">Cancel and return</a>
                    </div>
                </div>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->
<!-- @@ Confirm Invest Modal @e -->
<div class="modal fade" tabindex="-1" id="confirm-invest">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content"> <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <h4 class="nk-modal-title">Confirm Your Payment</h4>
                    <div class="nk-modal-text">
                        <p>To confirm your payment of <strong>$251.25 (0.0054 BTC)</strong> on this order #93033939 using your <strong>Bitcoin Wallet</strong>. Please enter your transaction Hash code in order complete the payment or cancel.</p>
                    </div>
                    <div class="nk-modal-form">
                        <div class="form-group"><input type="text" class="form-control text-center" placeholder="Transaction Hash code"></div>
                    </div>
                    <div class="nk-modal-action"><a class=" btn-lg btn-mw btn-primary btn-open">Confirm Payment</a>
                        <div class="sub-text sub-text-alt mt-3 mb-4">This transaction will appear on your wallet statement as Invest * SILVER.</div><a href="#" class="link link-soft" data-bs-dismiss="modal">Cancel and return</a>
                    </div>
                </div>
            </div> <!-- .modal-body -->
            <div class="modal-footer bg-lighter">
                <div class="text-center w-100"> {{-- <p>Earn upto $25 for each friend your refer! <a href="#">Invite friends</a></p>--}} </div>
            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->
<div class="modal fade" tabindex="-1" id="confirm-hash">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal"><em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                    <h4 class="nk-modal-title">Successfully sent payment!</h4>
                    <div class="nk-modal-text">
                        <p class="sub-text">You have successfully order the Investment Plan of ‘Silver’ with amount of <strong>$250.00</strong> using your <strong>Bitcoin Wallet</strong>.</p>
                    </div>
                    <div class="nk-modal-action-lg">
                        <ul class="btn-group flex-wrap justify-center g-4">
                            <li><a href="/demo6/invest/invest.html" class="btn btn-lg btn-mw btn-primary">More Invest</a></li>
                            <li><a href="/demo6/invest/scheme-details.html" class="btn btn-lg btn-mw btn-dim btn-primary"><em class="icon ni ni-reports"></em><span>See the plan</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-lighter">
                <div class="text-center w-100">
                    <p>Earn upto $25 for each friend your refer! <a href="#">Invite friends</a></p>
                </div>
            </div>
        </div>
    </div>
</div> @endif <div class="nk-block">
    <div class="row gy-gs">
        <div class="col-md-6 col-lg-4">
            <div class="nk-wg-card card card-bordered h-100">
                <div class="card-inner h-100">
                    <div class="nk-iv-wg2">
                        <div class="nk-iv-wg2-title">
                            <h6 class="title">Balance in Account</h6>
                        </div>
                        <div class="nk-iv-wg2-text">
                            <div class="nk-iv-wg2-amount ui-v2">12,587.96</div>
                            <ul class="nk-iv-wg2-list">
                                <li><span class="item-label">Available Funds</span><span class="item-value">105.94</span></li>
                                <li><span class="item-label">Invested Funds</span><span class="item-value">12,582.02</span></li>
                                <li class="total"><span class="item-label">Total</span><span class="item-value">12,587.96</span></li>
                            </ul>
                        </div> @if(Auth::user()->hasRole('user')) <div class="nk-iv-wg2-cta"><a class="btn btn-primary btn-lg btn-block" href="#">Withdraw Funds</a><a class="btn btn-trans btn-block" href="#">Deposit Funds</a></div> @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="nk-wg-card card card-bordered h-100">
                <div class="card-inner h-100">
                    <div class="nk-iv-wg2">
                        <div class="nk-iv-wg2-title">
                            <h6 class="title">This Month Profit <em class="icon ni ni-info text-primary"></em></h6>
                        </div>
                        <div class="nk-iv-wg2-text">
                            <div class="nk-iv-wg2-amount ui-v2">1,457.23 <span class="change up"><span class="sign"></span>4.5%</span> </div>
                            <ul class="nk-iv-wg2-list">
                                <li><span class="item-label">Profits</span><span class="item-value">1,045.21</span></li>
                                <li><span class="item-label">Referrals</span><span class="item-value">212.02</span></li>
                                <li><span class="item-label">Rewards</span><span class="item-value">200.00</span></li>
                                <li class="total"><span class="item-label">Total Profit</span><span class="item-value">1,457.23</span></li>
                            </ul>
                        </div> @if(Auth::user()->hasRole('user')) <div class="nk-iv-wg2-cta"><a class="btn btn-primary btn-lg btn-block" href="#">Invest & Earn</a> </div> @endif
                    </div>
                </div>
            </div>
        </div> @if(Auth::user()->hasRole('user')) <div class="col-md-12 col-lg-4">
            <div class="nk-wg-card card card-bordered h-100">
                <div class="card-inner h-100">
                    <div class="nk-iv-wg2">
                        <div class="nk-iv-wg2-title">
                            <h6 class="title">My Investment</h6>
                        </div>
                        <div class="nk-iv-wg2-text">
                            <div class="nk-iv-wg2-amount ui-v2">0 <span class="sub">0{{count($myActivePlans)}}</span> Active </div>
                            <ul class="nk-iv-wg2-list"> @if(count($myActivePlans) > 0) <li><span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span><span class="item-value">2,500.00</span></li> @else <li><span class="item-label">No active plan</span></li> @endif </ul>
                        </div>
                        <div class="nk-iv-wg2-cta"><a class="btn btn-light btn-lg btn-block" href="/investments/myPlans">See all Investment</a> </div>
                    </div>
                </div>
            </div>
        </div> @endif
    </div>
</div> @endsection @push('script') <script>
    // global varibles
    var done = true,
        fading_div = document.getElementById('fading_div'),
        fade_in_button = document.getElementById('fade_in'),
        fade_out_button = document.getElementById('fade_out');

    function function_opacity(opacity_value, fade_in_or_fade_out) { // fade_in_or_out - 0 = fade in, 1 = fade out
        fading_div.style.opacity = opacity_value / 100;
        fading_div.style.filter = 'alpha(opacity=' + opacity_value + ')';
        if (fade_in_or_fade_out == 'in' && opacity_value == 1) {
            fading_div.style.display = 'block';
        }
        if (fade_in_or_fade_out == 'in' && opacity_value == 100) {
            done = true;
        }
        if (fade_in_or_fade_out == 'out' && opacity_value == 1) {
            fading_div.style.display = 'none';
            done = true;
        }
    }
    // fade in button
    fade_in_button.onclick = function() {
        if (done && fading_div.style.opacity !== '1') {
            done = false;
            for (var i = 1; i <= 100; i++) {
                setTimeout("function_opacity(" + i + ",'in')", i * 5);
            }
        }
    };
    // fade out button
    fade_out_button.onclick = function() {
        if (done && fading_div.style.opacity !== '0') {
            done = false;
            for (var i = 100; i >= 1; i--) {
                setTimeout("function_opacity(" + i + ",'out')", (i - 100) * -1 * 5);
            }
        }
    };
    $(".btn-open").click(function() {
        $('#confirm-hash').modal('show');
    });
</script> @endpush