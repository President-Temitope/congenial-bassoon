@extends('dashboard::layouts.master',[$pageName = 'View Plan'])
@section('content')
    <div class="nk-block-head nk-block-head-lg">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><a href="/investments" class="back-to"><em class="icon ni ni-arrow-left"></em><span>Back to plan</span></a></div>
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Ready to get started?</h2>
            </div>
        </div>
    </div><!-- nk-block-head -->
    <div class="nk-block invest-block">
        <form action="#" class="invest-form">
            <div class="row g-gs">
                <div class="col-lg-7">
                    <div class="invest-field form-group">
                        <div class="dropdown invest-cc-dropdown">
                            <a href="#" class="invest-cc-chosen">
                                <div class="coin-item">
                                    <div class="coin-icon">
                                        <em class="icon ni ni-offer-fill"></em>
                                    </div>
                                    <div class="coin-info">
                                        <span class="coin-name">{{$investment->name}}</span>
                                        <span class="coin-text">Invest for {{$investment->term_days}} days and get daily profit {{$investment->daily_interest}}%</span>
                                    </div>
                                </div>
                            </a>
{{--


                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                <ul class="invest-cc-list">
                                    <li class="invest-cc-item selected">
                                        <a href="#" class="invest-cc-opt" data-plan="silver">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-offer-fill"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">Silver Plan</span>
                                                    <span class="coin-text">Invest for 21 days and get daily profit 4.76%</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="invest-cc-item selected">
                                        <a href="#" class="invest-cc-opt" data-plan="starter">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-offer-fill"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">Starter Plan</span>
                                                    <span class="coin-text">Invest for 30 days and get daily profit 1.67%</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="invest-cc-item">
                                        <a href="#" class="invest-cc-opt" data-plan="dimond">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-offer-fill"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">Dimond Plan</span>
                                                    <span class="coin-text">Invest for 14 days and get daily profit 14.29%</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
--}}
                        </div><!-- .dropdown -->
                    </div><!-- .invest-field -->
                   {{-- <div class="invest-field form-group">
                        <div class="form-label-group">
                            <label class="form-label">Choose Quick Amount to Invest</label>
                        </div>
                        <div class="invest-amount-group g-2">
                            <div class="invest-amount-item">
                                <input type="radio" class="invest-amount-control quick_amount" name="iv-amount" id="iv-amount-1" value="100">
                                <label class="invest-amount-label" for="iv-amount-1">$ 100</label>
                            </div>
                            <div class="invest-amount-item">
                                <input type="radio" class="invest-amount-control quick_amount" name="iv-amount" id="iv-amount-2" value="250">
                                <label class="invest-amount-label" for="iv-amount-2">$ 250</label>
                            </div>
                            <div class="invest-amount-item">
                                <input type="radio" class="invest-amount-control quick_amount" name="iv-amount" id="iv-amount-3" value="500">
                                <label class="invest-amount-label" for="iv-amount-3">$ 500</label>
                            </div>
                            <div class="invest-amount-item">
                                <input type="radio" class="invest-amount-control quick_amount" name="iv-amount" id="iv-amount-4" value="1000">
                                <label class="invest-amount-label" for="iv-amount-4">$ 1,000</label>
                            </div>
                            <div class="invest-amount-item">
                                <input type="radio" class="invest-amount-control quick_amount" name="iv-amount" id="iv-amount-5" value="1500">
                                <label class="invest-amount-label" for="iv-amount-5">$ 1,500</label>
                            </div>
                            <div class="invest-amount-item">
                                <input type="radio" class="invest-amount-control quick_amount" name="iv-amount" id="iv-amount-6" value="2000">
                                <label class="invest-amount-label" for="iv-amount-6">$ 2,000</label>
                            </div>
                        </div>
                    </div>--}}<!-- .invest-field -->
                    <div class="invest-field form-group">
                        <div class="form-label-group">
                            <label class="form-label">Or Enter Your Amount</label>
                            {{--<div class="dropdown">
                                <a href="#" class="link py-1" data-toggle="dropdown">Change Currency</a>
                                <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-right">
                                    <ul class="link-list-plain sm text-center">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">CAD</a></li>
                                        <li><a href="#">BTC</a></li>
                                        <li><a href="#">ETH</a></li>
                                    </ul>
                                </div>
                            </div>--}}
                        </div>
                        <div class="form-control-group">
                            <div class="form-info">USD</div>
                            <input type="number" class="form-control form-control-amount form-control-lg" id="custom_amount" min="{{$investment->min_amount}}" max="{{$investment->max_amount}}" name="custom_amount" placeholder="100.00" onchange="changeAmount()">
{{--                            <div class="form-range-slider" id="amount-step"></div>--}}
                        </div>`
                        <div class="form-note pt-2">Note: Minimum invest {{$investment->min_amount}} USD and upto
                            {{$investment->max_amount}} USD</div>
                    </div><!-- .invest-field -->
                    <div class="invest-field form-group">
                        <div class="form-label-group">
                            <label class="form-label">Choose Payment Method</label>
                        </div>
{{--                        <input type="hidden" value="wallet" name="iv-wallet" id="invest-choose-wallet">--}}
                        <div class="dropdown invest-cc-dropdown">
                            <a href="#" class="invest-cc-opt" data-plan="starter">
                                <div class="coin-item">
                                    <div class="coin-icon">
                                        <em class="icon ni ni-sign-btc"></em>
                                    </div>
                                    <div class="coin-info">
                                        <span class="coin-name">BTC Wallet</span>
{{--                                        <span class="coin-text">Current balance: 2.014095 BTC</span>--}}
                                    </div>
                                </div>
                            </a>
{{--
                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                <ul class="invest-cc-list">
                                    <li class="invest-cc-item selected">
                                        <a href="#" class="invest-cc-opt" data-plan="silver">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-wallet-alt"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">NioWallet</span>
                                                    <span class="coin-text">Current balance: 2.014095 BTC ( $18,934.84 )</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .invest-cc-item -->
                                    <li class="invest-cc-item selected">
                                        <a href="#" class="invest-cc-opt" data-plan="starter">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-sign-btc"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">BTC Wallet</span>
                                                    <span class="coin-text">Current balance: 2.014095 BTC</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .invest-cc-item -->
                                    <li class="invest-cc-item">
                                        <a href="#" class="invest-cc-opt" data-plan="dimond">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-sign-usd"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">USD Wallet</span>
                                                    <span class="coin-text">Current balance: $18,934.84</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .invest-cc-item -->
                                </ul>
                            </div>
--}}
                        </div><!-- .dropdown -->
                    </div><!-- .invest-field -->
                    <div class="invest-field form-group">
                        <div class="custom-control custom-control-xs custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox">
                            <label class="custom-control-label" for="checkbox">I agree the <a href="#">terms and &amp; conditions.</a></label>
                        </div>
                    </div><!-- .invest-field -->
                </div><!-- .col -->
                <div class="col-xl-4 col-lg-5 offset-xl-1">
                    <div class="card card-bordered ml-lg-4 ml-xl-0">
                        <div class="nk-iv-wg4">
                            <div class="nk-iv-wg4-sub">
                                <h6 class="nk-iv-wg4-title title">Your Investment Details</h6>
                                <ul class="nk-iv-wg4-overview g-2">
                                    <li>
                                        <div class="sub-text">Name of scheme</div>
                                        <div class="lead-text">{{$investment->name}}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Term of the scheme</div>
                                        <div class="lead-text">{{$investment->term_days}} days</div>
                                    </li>

                                    <li>
                                        <div class="sub-text">Daily profit %</div>
                                        <div class="lead-text">{{$investment->daily_interest}} %</div>
                                    </li>

                                    <li>
                                        <div class="sub-text">Total Return</div>
                                        <div class="lead-text">$ {{$investment->total_return}}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Term start at</div>
                                        <div class="lead-text">Today ({{\Carbon\Carbon::now()->format('d-m-Y')}})</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Term end at</div>
                                        <div class="lead-text">{{\Carbon\Carbon::now()->addDays($investment->term_days)->format('d-m-Y')}}</div>
                                    </li>
                                </ul>
                            </div><!-- .nk-iv-wg4-sub -->
                            <div class="nk-iv-wg4-sub">
                                <ul class="nk-iv-wg4-list">
                                    <li>
                                        <div class="sub-text">Payment Method</div>
                                        <div class="lead-text">BTC wallet</div>
                                    </li>
                                </ul>
                            </div><!-- .nk-iv-wg4-sub -->
                            <div class="nk-iv-wg4-sub">
                                <ul class="nk-iv-wg4-list">
                                    <li>
                                        <div class="sub-text">Amount to invest</div>
                                        <div class="lead-text">$ <span id="amount_to_invest">0</span> </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Conversion Fee <span>(0.5%)</span></div>
                                        <div class="lead-text" >$ <span id="conversion_fee">0</span></div>
                                    </li>
                                </ul>
                            </div><!-- .nk-iv-wg4-sub -->
                            <div class="nk-iv-wg4-sub">
                                <ul class="nk-iv-wg4-list">
                                    <li>
                                        <div class="lead-text">Total Charge</div>
                                        <div class="caption-text text-primary">$ <span id="total_amount_to_invest">0</span></div>
                                    </li>
                                </ul>
                            </div><!-- .nk-iv-wg4-sub -->
                            <div class="nk-iv-wg4-sub text-center bg-lighter">
                                <a href="#" class="btn btn-lg btn-primary ttu" data-toggle="modal" data-target="#invest-plan">Confirm &amp; proceed</a>
                            </div><!-- .nk-iv-wg4-sub -->
                        </div><!-- .nk-iv-wg4 -->
                    </div><!-- .card -->
                </div><!-- .col -->
            </div><!-- .row -->
        </form>
    </div><!-- .nk-block -->
    <!-- content @e -->
    <!-- app-root @e -->
    <!-- @@ Invest Modal @e -->

    <div class="modal fade modal-length" tabindex="-1" id="invest-plan">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body modal-body-md text-center">
                    <div class="nk-modal">
                        <div class="makedeposit" Align="center" style="font-size: 20px; font-weight: bold;">MAKE A DEPOSIT</div>
                        <h4 class="nk-modal-title">Confirm Your Payment</h4>

                            <div>Enter your amount to confirm the order to complete the payment or cancel.</div>

                        <div class="nk-modal-form">
                            <div class="form-group">
                            <div class="form-info">USD</div>
                                <input type="text" class="form-control form-control-password-big text-cente border-control-form">
                            </div>
                        </div>
                        <div class="main main-field">
                            <input type="text" id="text" value="13frahbJrBo6yfhyUaVJoixnhaTjXgDpbn" readonly>
                            <i class="material-icons" onclick="copy()" id="copy">content_copy</i>
                        </div>
                        <div class="QRCODE qr-address"><img src="https://chart.apis.google.com/chart?chs=300x300&cht=qr&chld=|0&chl=http%3A%2F%2F13frahbJrBo6yfhyUaVJoixnhaTjXgDpbn" width="150" height="150"></div>
                        <div class="proveofpayment Pop-prove"><input id="fileupload" class="" type="file" name="fileupload" style="background-color: none;" required></div>
                        <div class="nk-modal-action action-modal">
                            <a href="#" class="btn btn-lg btn-mw btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#confirm-invest">Confirm Payment</a>
                            <div class="sub-text sub-text-alt mt-3 mb-4">This transaction will appear on your wallet statement as Invest * SILVER.</div>
                            <a href="#" class="link link-soft" data-dismiss="modal">Cancel and return</a>
                        </div>

                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- @@ Confirm Invest Modal @e -->
    <div class="modal fade" tabindex="-1" id="confirm-invest">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title successfully-notify">Successfully sent payment!</h4>
                        <div class="nk-modal-text">
                            <p class="sub-text notify-sub-text">You have successfully order the Investment Plan of "{{$investment->name}}" with amount of <strong>$250.00</strong> using your <strong>NioWallet</strong>.</p>
                        </div>
                        <div class="nk-modal-action-lg">
                            <ul class="btn-group flex-wrap justify-center g-4">
                                <li><a href="/investments" class="btn btn-lg btn-mw btn-primary">More Invest</a></li>
                                <li><a href="/investments/viewPlan/{{$investment->id}}" class="btn btn-lg btn-mw btn-dim btn-primary"><em class="icon ni ni-reports"></em><span>See the plan</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-body -->
                <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
{{--                        <p>Earn upto $25 for each friend your refer! <a href="#">Invite friends</a></p>--}}
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
@endsection
@push('script')
    <script>
        function copy(){
            var input= document.getElementById('text');
            input.select();
            document.execCommand("copy");
            document.getElementById("show").innerHTML="Copy : "+'"'+input.value+'"';
        }

        var conversionFeeField = document.getElementById('conversion_fee');
        var amountToInvestField = document.getElementById('amount_to_invest').innerHTML;
        var customAmountToInvestField = document.getElementById('custom_amount').value;
        var totalAmountToInvestField = document.getElementById('total_amount_to_invest');

        function changeAmount(){
            amountToInvestField = customAmountToInvestField
            totalAmountToInvestField.innerHTML = parseInt(conversionFeeField.innerHTML) + parseInt(amountToInvestField)
            conversionFeeField.innerHTML = amountToInvestField * 0.5

        }
        totalAmountToInvestField.innerHTML = parseInt(conversionFeeField.innerHTML) + parseInt(amountToInvestField)

        // var quickAmountButton = document.getElementsByClassName('quick_amount').onclick = function() {
        //     alert(this.value)
        //     // var radios = document.getElementsByName('contact');
        //     // for (var radio of radios)
        //     // {
        //     //     if (radio.checked) {
        //     //         alert(radio.value);
        //     //     }
        //     // }
        // }
        // document.querySelector('input[name="rate"]:checked').value;
        console.log(conversionFeeField)
        console.log(amountToInvestField)
        console.log(totalAmountToInvestField)
        //console.log(quickAmountButton)
        console.log(customAmountToInvestField)

    </script>
    @endpush
