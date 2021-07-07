<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>DashBoard | {{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>


<style>
    @media only screen and (max-width: 767px) {

        .dropdown-content {


            position: absolute !important;
            right: -15px !important;
        }


        .active > .nk-menu-link {

            color: #FF9800 !important;

        }


        .Overview- {
            position: relative !important;
            left: 0px !important;
            bottom: 0 !important;

        }

        .media-deposit-withdraw {
            position: relative !important;
            left: 0 !important;

        }

        .main {

            position: relative !important;
            left: -14px !important;

        }

        .modal-content {

            margin: 20% auto !important;
            width: 95% !important;

        }


    }


    @media (min-width: 576px) {
        .nk-content {
            padding: 32px 22px
        }

        .nk-content-fluid {
            padding-left: 22px;
            padding-right: 22px
        }
    }

    @media (min-width: 992px) {
        .nk-content-lg {
            padding-top: 36px;
            padding-bottom: 36px
        }

        .nk-content-fluid {
            padding-left: 24px;
            padding-right: 24px
        }
    }

    @media (min-width: 1660px) {
        .nk-content-lg {
            padding-top: 54px;
            padding-bottom: 54px
        }

        .nk-content-fluid {
            padding-left: 44px;
            padding-right: 44px
        }
    }

    .nk-menu-link {

        transition-duration: 5ms !important;

    }

    .dropbtn {
        background-color: transparent;
        color: white;
        /* padding: 16px; */
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: none;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 260px;
        /* overflow: auto; */
        box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
        z-index: 1;
        border-radius: 3px;
    }

    /* .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    } */

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }


    /*===== GOOGLE FONTS =====*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

    /*===== VARIABLES CSS =====*/
    :root {
        --header-height: 3rem;

        /*===== Colores =====*/
        --first-color: #FF9800;
        --dark-color: #070D1F;
        --dark-color-alt: #282B3A;
        --white-color: #E6E7E9;

        /*===== Fuente y tipografia =====*/
        --body-font: 'Poppins', sans-serif;
        --normal-font-size: .938rem;
        --small-font-size: .813rem;

        /*===== z index =====*/
        --z-fixed: 100;
    }

    @media screen and (min-width: 768px) {
        :root {
            --normal-font-size: 1rem;
            --small-font-size: .875rem;
        }
    }

    /*===== BASE =====*/
    *, ::before, ::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        margin: var(--header-height) 0 0 0;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        font-weight: 500;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .bd-grid {
        max-width: 1024px;
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: 100%;
        grid-template-columns: 100%;
        margin-left: 1.5rem;
        margin-right: 1.5rem;
    }

    /*===== HEADER =====*/
    .header {
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        padding: 0 1.5rem;
        background-color: var(--dark-color);
        z-index: var(--z-fixed);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .header__logo {
        color: var(--white-color);
    }

    .header__toggle {
        font-size: 1.5rem;
        color: var(--white-color);
        cursor: pointer;
    }

    /*===== NAV =====*/
    @media screen and (max-width: 768px) {
        .nav {
            position: fixed;
            top: 0;
            left: -100%;
            background-color: #000;
            color: var(--white-color);
            width: 100%;
            height: 100vh;
            padding: 1.5rem 0;
            z-index: var(--z-fixed);
            -webkit-transition: .5s;
            transition: .5s;
        }
    }

    .nav__content {
        height: 100%;
        -ms-grid-rows: max-content 1fr max-content;
        grid-template-rows: -webkit-max-content 1fr -webkit-max-content;
        grid-template-rows: max-content 1fr max-content;
        row-gap: 2rem;
    }

    .nav__close {
        position: absolute;
        right: 1.5rem;
        font-size: 1.3rem;
        padding: .25rem;
        background-color: var(--dark-color-alt);
        border-radius: 50%;
        cursor: pointer;
    }

    .nav__img {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-top: .25rem;
        margin-bottom: .8rem;
        width: 56px;
        height: 56px;
        background-color: var(--first-color);
        border-radius: 50%;
        overflow: hidden;
    }

    .nav__img img {
        width: 46px;
    }

    .nav__name {
        display: block;
        color: var(--white-color);
    }

    .nav__profesion {
        font-size: var(--small-font-size);
    }

    .nav__menu {
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
    }

    .nav__item {
        margin: 2.5rem 0;
    }

    .nav__link {
        color: var(--white-color);
    }

    .nav__social {
        padding-top: .5rem;
    }

    .nav__social-icon {
        font-size: 1.2rem;
        color: var(--white-color);
        margin-right: 1rem;
    }

    .nav__social-icon:hover {
        color: var(--first-color);
    }

    /*Aparecer menu*/
    .show {
        left: 0;
    }

    /*Active menu*/
    .active {
        color: var(--first-color);
    }

    /*===== MEDIA QUERIES =====*/
    @media screen and (min-width: 768px) {
        body {
            margin: 0;
        }

        .header {
            height: calc(var(--header-height) + 1rem);
        }

        .header__logo, .header__toggle {
            display: none;
        }

        .nav {
            width: 100%;
        }

        .nav__content {
            -ms-grid-columns: (max-content) [ 3 ];
            grid-template-columns: repeat(3, -webkit-max-content);
            grid-template-columns: repeat(3, max-content);
            -ms-grid-rows: 1fr;
            grid-template-rows: 1fr;
            -webkit-column-gap: 1rem;
            column-gap: 1rem;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .nav__close, .nav__profesion {
            display: none;
        }

        .nav__perfil {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .nav__img {
            width: 32px;
            height: 32px;
            margin-right: .5rem;
            margin-bottom: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .nav__img img {
            width: 26px;
        }

        .nav__list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .nav__item {
            margin: 0 .25rem;
        }

        .nav__link {
            padding: .5rem .8rem;
            border-radius: .25rem;
        }

        .nav__link:hover {
            background-color: var(--first-color);
        }

        .active {
            /* background-color: var(--first-color); */

            color: var(--white-color);
            border-bottom: 3px solid var(--first-color);
        }
    }

    @media screen and (min-width: 1024px) {
        .bd-grid {
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>

<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">
    @include('dashboard::layouts.master')
                        <div class="nk-block-head">
                            <div class="nk-block-between-md g-3">
                                <div class="nk-block-head-content">
                                    <div class="nk-block-head-sub"><span>Welcome!</span>
                                    </div>
                                    <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                        <div>
                                            <h2 class="nk-block-title fw-normal">{{Auth::user()->fullName()}}</h2>
                                        </div>
                                        <div>
                                        </div>

                                        <div class="col-md-12 col-lg-4 media-deposit-withdraw">
                                            <button id="modal-btn" class="button btn btn-white btn-light"
                                                    data-target="#myModal" data-toggle="modal" data-backdrop="static"
                                                    data-keyboard="false">Deposit
                                            </button>
                                            <li class="opt-menu-md dropdown"><a href="#"
                                                                                class="btn btn-white btn-light btn-icon"
                                                                                data-toggle="dropdown"><em
                                                        class="icon ni ni-setting"></em></a></li>
                                            <div class="btn btn-white btn-light" style="float: right;">Withdrawal<em
                                                    class="icon ni ni-arrow-long-right ml-2"></em></a></div>
                                        </div>
                                    </div>
                                    <div class="nk-block-des">
                                        <p>At a glance summary of your investment account. Have fun!</p>
                                    </div>
                                </div>

                                <style>
                                    .media-deposit-withdraw {
                                        position: relative;
                                        left: 333;

                                    }

                                </style>


                                <div class="active_plan nk-block">
                                    <div class="row gy-gs">
                                        <div class="col-md-6 col-lg-4"
                                             data-slick="{&quot;dots&quot;: true, &quot;arrows&quot;: false, &quot;fade&quot;: true}">
                                            <div class="slider-item">
                                                <div class="nk-iv-wg1">
                                                    <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                    <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6><a
                                                        href="#" class="nk-iv-wg1-link link link-light"><em
                                                            class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                    <div class="nk-iv-wg1-progress">
                                                        <div class="progress-bar bg-primary" data-progress="80"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="nk-iv-wg1">
                                                    <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                    <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6><a
                                                        href="#" class="nk-iv-wg1-link link link-light"><em
                                                            class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                    <div class="nk-iv-wg1-progress">
                                                        <div class="progress-bar bg-primary" data-progress="80"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="nk-iv-wg1">
                                                    <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                    <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6><a
                                                        href="#" class="nk-iv-wg1-link link link-light"><em
                                                            class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                    <div class="nk-iv-wg1-progress">
                                                        <div class="progress-bar bg-primary" data-progress="80"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="slider-dots"></div> -->


                                        <div class="col-md-12 col-lg-4 Overview-">
                                            <div class="nk-wg-card card card-bordered h-100">
                                                <div class="card-inner h-100">
                                                    <div class="nk-iv-wg2">
                                                        <div class="nk-iv-wg2-title">
                                                            <h6 class="title">Overview</h6>
                                                        </div>
                                                        <div class="nk-iv-wg2-text">
                                                            <!-- <div class="nk-iv-wg2-amount ui-v2">0</div> -->
                                                            <ul class="nk-iv-wg2-list">
                                                                <li><span class="item-label">ROIs</span><span
                                                                        class="item-value">0</span>
                                                                </li>
                                                                <li><span class="item-label">Invested Funds</span><span
                                                                        class="item-value">0</span>
                                                                </li>
                                                                <li class="total"><span
                                                                        class="item-label">Total</span><span
                                                                        class="item-value">0</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-iv-wg2-cta"><a href="#"
                                                                                      class="btn btn-primary btn-lg btn-block"
                                                                                      style="position: relative; top: -35px;">Invest</a>
                                                            <!-- <a href="./invest-form.html" class="btn btn-trans btn-block">Deposit Funds</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            .Overview- {

                                                position: relative;
                                                left: 400;
                                                bottom: 0;


                                            }

                                        </style>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="nk-news card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-news-list">
                                        <a class="nk-news-item" href="#">
                                            <div class="nk-news-icon"><em class="icon ni ni-card-view"></em>
                                            </div>
                                            <div class="nk-news-text">
                                                <p>Do you know the latest update of 2021? <span> A overview of our is now available</span>
                                                </p><em class="icon ni ni-external"></em>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-gs">
                                <div class="col-md-6 col-lg-4">
                                    <div class="nk-wg-card is-dark card card-bordered">
                                        <div class="card-inner">
                                            <div class="nk-iv-wg2">
                                                <div class="nk-iv-wg2-title">
                                                    <h6 class="title">Available Balance <em
                                                            class="icon ni ni-info"></em></h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount">0 <span class="change up"><span
                                                                class="sign"></span>3.4%</span>
                                                    </div>
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
                                                    <h6 class="title">Total Invested <em class="icon ni ni-info"></em>
                                                    </h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount">0 <span class="change up"><span
                                                                class="sign"></span>2.8%</span>
                                                    </div>
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
                                                    <h6 class="title">Total Profits <em class="icon ni ni-info"></em>
                                                    </h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount">0 <span class="change down"><span
                                                                class="sign"></span>1.4%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-gs">
                                <div class="col-md-6 col-lg-4">
                                    <div class="nk-wg-card card card-bordered h-100">
                                        <div class="card-inner h-100">
                                            <div class="nk-iv-wg2">
                                                <div class="nk-iv-wg2-title">
                                                    <h6 class="title">Balance in Account</h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount ui-v2">0</div>
                                                    <ul class="nk-iv-wg2-list">
                                                        <li><span class="item-label">Available Funds</span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                        <li><span class="item-label">Invested Funds</span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                        <li class="total"><span class="item-label">Total</span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-iv-wg2-cta"><a href="#"
                                                                              class="btn btn-primary btn-lg btn-block">Withdraw
                                                        Funds</a><a href="./invest-form.html"
                                                                    class="btn btn-trans btn-block">Deposit Funds</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="nk-wg-card card card-bordered h-100">
                                        <div class="card-inner h-100">
                                            <div class="nk-iv-wg2">
                                                <div class="nk-iv-wg2-title">
                                                    <h6 class="title">This Month Profit <em
                                                            class="icon ni ni-info text-primary"></em></h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount ui-v2">0<span class="change up"><span
                                                                class="sign"></span>0</span>
                                                    </div>
                                                    <ul class="nk-iv-wg2-list">
                                                        <li><span class="item-label">Profits</span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                        <li><span class="item-label">Referrals</span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                        <li><span class="item-label">Rewards</span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                        <li class="total"><span
                                                                class="item-label">Total Profit</span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-iv-wg2-cta"><a href="#"
                                                                              class="btn btn-primary btn-lg btn-block">Invest
                                                        &amp; Earn</a>
                                                    <div class="cta-extra">Earn up to 25$ <a href="#"
                                                                                             class="link link-dark">Refer
                                                            friend!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="nk-wg-card card card-bordered h-100">
                                        <div class="card-inner h-100">
                                            <div class="nk-iv-wg2">
                                                <div class="nk-iv-wg2-title">
                                                    <h6 class="title">My Investment</h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount ui-v2">0 <span class="sub">0</span>
                                                        Active
                                                    </div>
                                                    <ul class="nk-iv-wg2-list">
                                                        <li><span class="item-label"><a href="#">BASIC PLAN</a> <small>- 4.76% for 21 Days</small></span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                        <li><span class="item-label"><a href="#">INVESTOR ( GOLD FAST TRACK) PLAN</a> <small>- 4.76% for 21 Days</small></span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                        <li><span class="item-label"><a href="#">NFP</a> <small>- 14.29% for 14 Days</small></span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                        <li><span class="item-label"><a href="#">START</a> <small>- 1.67% for 30 Days</small></span><span
                                                                class="item-value">0</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-iv-wg2-cta"><a href="#"
                                                                              class="btn btn-light btn-lg btn-block">See
                                                        all Investment</a>
                                                    <div class="cta-extra">Check out <a href="#" class="link link-dark">Analytic
                                                            Report</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="nk-refwg">
                                    <div class="nk-refwg-invite card-inner">
                                        <div class="nk-refwg-head g-3">
                                            <div class="nk-refwg-title">
                                                <h5 class="title">Refer Us &amp; Earn</h5>
                                                <div class="title-sub">Use the bellow link to invite your friends.</div>
                                            </div>
                                            <div class="nk-refwg-action"><a href="#" class="btn btn-primary">Invite</a>
                                            </div>
                                        </div>
                                        <div class="nk-refwg-url">
                                            <div class="form-control-wrap">
                                                <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em>  <span class="clipboard-text">Copy Link</span>
                                                </div>
                                                <div class="form-icon"><em class="icon ni ni-link-alt"></em>
                                                </div>
                                                <input type="text" class="form-control copy-text" id="refUrl" value="https://dashlite.net/?ref=4945KD48">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-refwg-stats card-inner bg-lighter">
                                        <div class="nk-refwg-group g-3">
                                            <div class="nk-refwg-name">
                                                <h6 class="title">My Referral <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="" data-original-title="Referral Informations"></em></h6>
                                            </div>
                                            <div class="nk-refwg-info g-3">
                                                <div class="nk-refwg-sub">
                                                    <div class="title">394</div>
                                                    <div class="sub-text">Total Joined</div>
                                                </div>
                                                <div class="nk-refwg-sub">
                                                    <div class="title">548.49</div>
                                                    <div class="sub-text">Referral Earn</div>
                                                </div>
                                            </div>
                                            <div class="nk-refwg-more dropdown mt-n1 mr-n1"><a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                    <ul class="link-list-plain sm">
                                                        <li><a href="#">7 days</a>
                                                        </li>
                                                        <li><a href="#">15 Days</a>
                                                        </li>
                                                        <li><a href="#">30 Days</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-refwg-ck">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas class="chart-refer-stats chartjs-render-monitor" id="refBarChart" style="display: block; height: 50px; width: 451px;" width="676" height="75"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --></div>
                </div>
            </div>
        </div>
        <!-- <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl wide-lg">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright">© 2020 DashLite. Template by <a href="#">Softnio</a>
                    </div>
                    <div class="nk-footer-links">
                        <ul class="nav nav-sm">
                            <li class="nav-item"><a class="nav-link" href="#">Terms</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --></div>
</div>


<div id="my-modal" class="modal">
    <div class="modal-content">
        <div class="modal-header"><span class="close">×</span>
        </div>
        <div class="modal-body">
            <p style="text-align: center;color: #000;position: relative;bottom: 45px;font-weight: 700;">MAKE A
                DEPOSIT</p>
            <div class="invest-field form-group" style="position: relative; bottom: 50px; margin: 0;">
                <div class="form-label-group">
                    <label class="form-label">Enter Your Amount</label>
                    <div class="form-note pt-2">Note: Minimum invest 100 USD and upto 2,000 USD</div>
                </div>
                <div class="form-control-group">
                    <div class="form-info">USD</div>
                    <input type="text" class="form-control form-control-amount form-control-lg" id="custom-amount"
                           value="">
                    <div class="form-range-slider" id="amount-step"></div>
                </div>

            </div>
            <div class="main" style="position: relative;left: 5px; text-align: center; bottom: 50px;">
                <p id="show"></p>
                <input type="text" id="text" value="1GJhFHfspSupQz5sEbKY1Fet8QAwTLQDhx" readonly>
                <!-- <i class="material-icons clipB" onclick="copy()" id="copy">content_copy</i> -->
            </div>
            <div id="qr-code" class="mb-25 ">
                <img
                    src="https://chart.apis.google.com/chart?cht=qr&amp;chs=300x300&amp;chl=1GJhFHfspSupQz5sEbKY1Fet8QAwTLQDhx&amp;chld=H|0"
                    width="150" height="150">
                <!-- <div class="arrow_chev_right" style="position: relative;float: right;right: 24%;top: 44px;">	<i class="fa fa-chevron-right" aria-hidden="true" style="color: #000;"></i> -->
            </div>
<div style="text-align: center; position: relative;bottom: 30px;">
  <!-- HTML5 Input Form Elements -->
                <input id="fileupload" class="" type="file" name="fileupload" style="background-color:#000;"><br><br>
                <button id="upload-button" class="" style="border: 0;padding: 12 30;color: #fff;background: black;" onclick="uploadFile()">Deposit</button>

                <div class="form-note pt-2" style="text-align: center;">Note: Send a copy (screenshot) of your transaction
            Details to our mail and wait for confirmation.
                 </div>
            </div>
    

    </div>
    <!--
                <div id="waiting">
                    <<p style="font-size:11px" class="f-16 em-300 mb-25" onclick="wait()">Still waiting for transaction? Click HERE!</p> -->
    <script>
        function wait() {
            waiting.innerHTML = "Sometimes transaction network is under load and it can take more time. Remember, this is an official promotion and every transaction address we receive gets their bonus back!";
            waiting.style.color = "green";
        }
    </script>
</div>
</div>
</div>



<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
</body>
<!-- ===== IONICONS ===== -->
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

<script>
    /*===== MENU SHOW Y HIDDEN =====*/
    const navMenu = document.getElementById('nav-menu'),
        toggleMenu = document.getElementById('nav-toggle'),
        closeMenu = document.getElementById('nav-close')

    /*SHOW*/
    toggleMenu.addEventListener('click', () => {
        navMenu.classList.toggle('show')
    })

    /*HIDDEN*/
    closeMenu.addEventListener('click', () => {
        navMenu.classList.remove('show')
    })

    /*===== ACTIVE AND REMOVE MENU =====*/
    const navLink = document.querySelectorAll('.nav__link');

    function linkAction() {
        /*Active link*/
        navLink.forEach(n => n.classList.remove('active'));
        this.classList.add('active');

        /*Remove menu mobile*/
        navMenu.classList.remove('show')
    }

    navLink.forEach(n => n.addEventListener('click', linkAction));
</script>

<style>


    .material-icons {
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -webkit-font-feature-settings: 'liga';
        -webkit-font-smoothing: antialiased;
    }

    :root {
        --modal-duration: 2s;
        --modal-color: #428bca;
    }

    .button {
        background: #428bca;
        padding: 1em 2em;
        color: #fff;
        border: 0;
        border-radius: 5px;
        cursor: pointer;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        /* height: 100%; */
        width: 100%;
        /* overflow: auto; */
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {

        margin: 5% auto;
        width: 50%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
        animation-name: modalopen;
        animation-duration: var(--modal-duration);
        height: 300px;
    }

    .modal-header h2,
    .modal-footer h3 {
        margin: 0;
    }

    .modal-header {
        background: #fff;
        padding: 18px;
        color: #fff;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border: 0;
    }

    .modal-body {
        padding: 13px 20px;
        background: #fff;
        position: relative;
        top: 0px;
    }

    .modal-footer {
        background: var(--modal-color);
        padding: 10px;
        color: #fff;
        text-align: center;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .close {
        color: #000;
        float: right;
        font-size: 30px;
        /* color: #fff; */
        position: relative;
        bottom: 5px;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    @keyframes modalopen {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }


    .main input {
        border: 2px solid #000;
        border-radius: 5px;
        outline: none;
        color: #fff;
        box-shadow: 0 0 10px -4px #000;
        letter-spacing: 0px;
        height: 40px;
        width: 350px;
        padding: 6px 36px 4px 40px;
        font-size: 12px;
        background-color: #000;
    }

    .mb-25 {
        text-align: center;
        margin-top: 0px;
        padding-bottom: 17px;
        position: relative;
        bottom: 30px;
    }


    i:active {
        color: #000;
    }

    i {
        position: relative;
        top: 10px;
        right: 33px;
        color: #fff;
        cursor: pointer;
        font-size: 40px;
        transform: scale(1.1);
    }

</style>

<script src="{{asset('modal.js')}}"></script>
<script>
    function copy() {
        var input = document.getElementById('text');
        input.select();
        document.execCommand("copy");
        document.getElementById("show").innerHTML = "Copy : " + '"' + input.value + '"';
    }
</script>



  <!-- Ajax JavaScript File Upload Logic -->
  <script>
  async function uploadFile() {
  let formData = new FormData(); 
  formData.append("file", fileupload.files[0]);
  await fetch('/upload.php', {
    method: "POST", 
    body: formData
  }); 
  alert('The file has been uploaded successfully.');
  }


  </script>
</html>

</html>
