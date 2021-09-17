@extends('dashboard::layouts.master',[$pageName = 'activePlans'])
@section('content')
    @if(count($myActivePlans) > 0 || count($myEndedPlans) > 0  || count($myInactivePlans) > 0 )
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <div class="nk-block-head-sub"><span>My Plan</span></div>
        <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Invested Schemes</h2>
                <div class="nk-block-des">
                    <p>Here is your current balance and your active investment plans.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <ul class="nk-block-tools gx-3">
                    <li><a href="#" class="btn btn-primary"><span>Withdraw</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                    <li><a href="/investments" class="btn btn-white btn-light"><span>Invest More</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                </ul>
            </div><!-- .nk-block-head-content -->
        </div>
    </div>
</div><!-- .nk-block-head -->
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner-group">
            <div class="card-inner">
                <div class="row gy-gs">
                    <div class="col-lg-5">
                        <div class="nk-iv-wg3">
                            <div class="nk-iv-wg3-title">Total Balance</div>
                            <div class="nk-iv-wg3-group  flex-lg-nowrap gx-4">
                                <div class="nk-iv-wg3-sub">
                                    <div class="nk-iv-wg3-amount">
                                        <div class="number">18,752.84 <small class="currency currency-usd">USD</small></div>
                                    </div>
                                    <div class="nk-iv-wg3-subtitle">Available Balance</div>
                                </div>
                                <div class="nk-iv-wg3-sub">
                                    <span class="nk-iv-wg3-plus text-soft"><em class="icon ni ni-plus"></em></span>
                                    <div class="nk-iv-wg3-amount">
                                        <div class="number-sm">1,500.05</div>
                                    </div>
                                    <div class="nk-iv-wg3-subtitle">Locked Balance <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="You can't use"></em></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-7">
                        <div class="nk-iv-wg3">
                            <div class="nk-iv-wg3-title">This Month <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Current Month Profit"></em></div>
                            <div class="nk-iv-wg3-group flex-md-nowrap g-4">
                                <div class="nk-iv-wg3-sub-group gx-4">
                                    <div class="nk-iv-wg3-sub">
                                        <div class="nk-iv-wg3-amount">
                                            <div class="number">5,394.62</div>
                                        </div>
                                        <div class="nk-iv-wg3-subtitle">Total Profit</div>
                                    </div>
                                    <div class="nk-iv-wg3-sub">
                                        <span class="nk-iv-wg3-plus text-soft"><em class="icon ni ni-plus"></em></span>
                                        <div class="nk-iv-wg3-amount">
                                            <div class="number-sm">1,50.05</div>
                                        </div>
                                        <div class="nk-iv-wg3-subtitle">Today Profit</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .card-inner -->
            </div><!-- .card-inner-group -->
    </div><!-- .card -->
</div><!-- .nk-block -->
<div class="nk-block nk-block-lg">
    <div class="nk-block-head-sm">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Inactive Plan <span class="count text-base">({{count($myInactivePlans)}})</span></h5>
        </div>
    </div>
    <div class="nk-iv-scheme-list">
        <div class="nk-iv-scheme-item">
            <div class="nk-iv-scheme-icon is-running">
                <em class="icon ni ni-update"></em>
            </div>
            <div class="nk-iv-scheme-info">
                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$250</span></div>
            </div>
            <div class="nk-iv-scheme-term">
                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                    <span class="nk-iv-scheme-value date">Nov 04, 2019</span>
                </div>
                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                    <span class="nk-iv-scheme-value date">Nov 25, 2019</span>
                </div>
            </div>
            <div class="nk-iv-scheme-amount">
                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                    <span class="nk-iv-scheme-value amount">$ 499.99</span>
                </div>
                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                    <span class="nk-iv-scheme-value amount">$ 97.95 <span class="amount-ex">~ $152.04</span></span>
                </div>
            </div>
            <div class="nk-iv-scheme-more">
                <a class="btn btn-icon btn-lg btn-round btn-trans" href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
            </div>
            <div class="nk-iv-scheme-progress">
                <div class="progress-bar" data-progress="25"></div>
            </div>
        </div><!-- .nk-iv-scheme-item -->
        <div class="nk-iv-scheme-item">
            <div class="nk-iv-scheme-icon is-running">
                <em class="icon ni ni-update"></em>
            </div>
            <div class="nk-iv-scheme-info">
                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$1,250</span></div>
            </div>
            <div class="nk-iv-scheme-term">
                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                    <span class="nk-iv-scheme-value date">Oct 30, 2019</span>
                </div>
                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                    <span class="nk-iv-scheme-value date">Nov 19, 2019</span>
                </div>
            </div>
            <div class="nk-iv-scheme-amount">
                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                    <span class="nk-iv-scheme-value amount">$ 2,500</span>
                </div>
                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                    <span class="nk-iv-scheme-value amount">$ 1145.25 <span class="amount-ex">~ $105.75</span></span>
                </div>
            </div>
            <div class="nk-iv-scheme-more">
                <a class="btn btn-icon btn-lg btn-round btn-trans" href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
            </div>
            <div class="nk-iv-scheme-progress">
                <div class="progress-bar" data-progress="90"></div>
            </div>
        </div><!-- .nk-iv-scheme-item -->
    </div><!-- .nk-iv-scheme-list -->
</div><!-- .nk-block -->
<div class="nk-block nk-block-lg">
    <div class="nk-block-head-sm">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Active Plan <span class="count text-base">({{count($myActivePlans)}})</span></h5>
        </div>
    </div>
    <div class="nk-iv-scheme-list">
        <div class="nk-iv-scheme-item">
            <div class="nk-iv-scheme-icon is-running">
                <em class="icon ni ni-update"></em>
            </div>
            <div class="nk-iv-scheme-info">
                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$250</span></div>
            </div>
            <div class="nk-iv-scheme-term">
                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                    <span class="nk-iv-scheme-value date">Nov 04, 2019</span>
                </div>
                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                    <span class="nk-iv-scheme-value date">Nov 25, 2019</span>
                </div>
            </div>
            <div class="nk-iv-scheme-amount">
                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                    <span class="nk-iv-scheme-value amount">$ 499.99</span>
                </div>
                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                    <span class="nk-iv-scheme-value amount">$ 97.95 <span class="amount-ex">~ $152.04</span></span>
                </div>
            </div>
            <div class="nk-iv-scheme-more">
                <a class="btn btn-icon btn-lg btn-round btn-trans" href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
            </div>
            <div class="nk-iv-scheme-progress">
                <div class="progress-bar" data-progress="25"></div>
            </div>
        </div><!-- .nk-iv-scheme-item -->
        <div class="nk-iv-scheme-item">
            <div class="nk-iv-scheme-icon is-running">
                <em class="icon ni ni-update"></em>
            </div>
            <div class="nk-iv-scheme-info">
                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$1,250</span></div>
            </div>
            <div class="nk-iv-scheme-term">
                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                    <span class="nk-iv-scheme-value date">Oct 30, 2019</span>
                </div>
                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                    <span class="nk-iv-scheme-value date">Nov 19, 2019</span>
                </div>
            </div>
            <div class="nk-iv-scheme-amount">
                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                    <span class="nk-iv-scheme-value amount">$ 2,500</span>
                </div>
                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                    <span class="nk-iv-scheme-value amount">$ 1145.25 <span class="amount-ex">~ $105.75</span></span>
                </div>
            </div>
            <div class="nk-iv-scheme-more">
                <a class="btn btn-icon btn-lg btn-round btn-trans" href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
            </div>
            <div class="nk-iv-scheme-progress">
                <div class="progress-bar" data-progress="90"></div>
            </div>
        </div><!-- .nk-iv-scheme-item -->
    </div><!-- .nk-iv-scheme-list -->
</div><!-- .nk-block -->
<div class="nk-block nk-block-lg">
    <div class="nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Recently End <span class="count text-base">({{count($myEndedPlans)}})</span></h5>
            </div>
        </div>
    </div>
    <div class="nk-iv-scheme-list">
        <div class="nk-iv-scheme-item">
            <div class="nk-iv-scheme-icon is-done">
                <em class="icon ni ni-offer"></em>
            </div>
            <div class="nk-iv-scheme-info">
                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$250</span></div>
            </div>
            <div class="nk-iv-scheme-term">
                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                    <span class="nk-iv-scheme-value date">Nov 04, 2019</span>
                </div>
                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                    <span class="nk-iv-scheme-value date">Nov 25, 2019</span>
                </div>
            </div>
            <div class="nk-iv-scheme-amount">
                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                    <span class="nk-iv-scheme-value amount">$ 499.99</span>
                </div>
                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                    <span class="nk-iv-scheme-value amount">$ 97.95 <span class="amount-ex">~ $152.04</span></span>
                </div>
            </div>
            <div class="nk-iv-scheme-more">
                <a class="btn btn-icon btn-lg btn-round btn-trans" href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
            </div>
        </div><!-- .nk-iv-scheme-item -->
        <div class="nk-iv-scheme-item">
            <div class="nk-iv-scheme-icon is-done">
                <em class="icon ni ni-offer"></em>
            </div>
            <div class="nk-iv-scheme-info">
                <div class="nk-iv-scheme-name">Silver - Daily 4.76% for 21 Days</div>
                <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">$1,250</span></div>
            </div>
            <div class="nk-iv-scheme-term">
                <div class="nk-iv-scheme-start nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Start Date</span>
                    <span class="nk-iv-scheme-value date">Oct 30, 2019</span>
                </div>
                <div class="nk-iv-scheme-end nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">End Date</span>
                    <span class="nk-iv-scheme-value date">Nov 19, 2019</span>
                </div>
            </div>
            <div class="nk-iv-scheme-amount">
                <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Total Return</span>
                    <span class="nk-iv-scheme-value amount">$ 2,500</span>
                </div>
                <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                    <span class="nk-iv-scheme-label text-soft">Net Profit Earn</span>
                    <span class="nk-iv-scheme-value amount">$ 1145.25 <span class="amount-ex">~ $105.75</span></span>
                </div>
            </div>
            <div class="nk-iv-scheme-more">
                <a class="btn btn-icon btn-lg btn-round btn-trans" href="html/invest/scheme-details.html"><em class="icon ni ni-forward-ios"></em></a>
            </div>
        </div><!-- .nk-iv-scheme-item -->
    </div><!-- .nk-iv-scheme-list -->
</div><!-- .nk-block -->
    @else
        <p class="text-center text-lg-left">No plan</p>
        <blockquote class="blockquote text-center">
            <p class="mb-0">I will tell you how to become rich. Close the doors. Be fearful when others are greedy. Be greedy when others are fearful.</p>
            <footer class="blockquote-footer">Warren Buffett {{--<cite title="Source Title">Source Title</cite>--}}</footer>
        </blockquote>
    @endif

@endsection
