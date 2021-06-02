
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>DashBoard | {{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- <link id="skin-default" rel="stylesheet" href="css/theme0875.css"> -->
</head>


<style>
    @media only screen and (max-width: 767px){

        .dropdown-content {


            position: absolute!important;
            right: -15px!important;
        }


    }

    @media (min-width: 576px){.nk-content{padding:32px 22px}.nk-content-fluid{padding-left:22px;padding-right:22px}}@media (min-width: 992px){.nk-content-lg{padding-top:36px;padding-bottom:36px}.nk-content-fluid{padding-left:24px;padding-right:24px}}@media (min-width: 1660px){.nk-content-lg{padding-top:54px;padding-bottom:54px}.nk-content-fluid{padding-left:44px;padding-right:44px}}

    .nk-menu-link {

        transition-duration: 5ms!important;

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
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: none;}

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

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {background-color: #ddd;}

    .show {display: block;}
    /*===== GOOGLE FONTS =====*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

    /*===== VARIABLES CSS =====*/
    :root {
        --header-height: 3rem;

        /*===== Colores =====*/
        --first-color: #3664F4;
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
            background-color: var(--dark-color);
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
            -ms-grid-columns: (max-content)[3];
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
    <div class="nk-wrap " style="background-color: #000;">
        <div class="nk-header nk-header-fluid nk-header-fixed is-theme  nk-header-fixed">
            <div class="container-xl wide-lg">
                <div class="nk-header-wrap">
                    <!-- <div class="nk-menu-trigger mr-sm-2 d-lg-none"><a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                    </div> -->
                    <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>
                    <div class="nk-header-brand">
                        <a href="../index-2.html" class="logo-link">
                            <img class="logo-light logo-img" src="../images/logo.png" srcset="/demo6/images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="../images/logo-dark.png" srcset="/demo6/images/logo-dark2x.png 2x" alt="logo-dark"><span class="nio-version">Invest</span>
                        </a>
                    </div>
                    <nav class="nav nk-header-wrap" id="nav-menu">
                        <div class="nav__content bd-grid">
                            <ion-icon name="close-outline" class="nav__close md hydrated" id="nav-close" role="img" aria-label="close outline"></ion-icon>
                            <div class="nav__menu">
                                <ul class="nav__list nk-menu-main">
                                    <li class="nk-menu-item active"><a href="./index.html" class="nk-menu-link"><span class="nk-menu-text">Overview</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="./schemes.html" class="nk-menu-link"><span class="nk-menu-text">MY Plan</span></a>
                                    </li>
                                    <li class="nk-menu-item"><a href="./invest.html" class="nk-menu-link"><span class="nk-menu-text">Invest</span></a>
                                    </li>
                                    <!-- <li class="nk-menu-item"><a href="profile.html" class="nk-menu-link"><span class="nk-menu-text">Profile</span></a> --></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="nk-header-tools">
                        <ul class="nk-quick-nav">
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn" style="outline: none;">
                                    <div class="user-toggle">
                                        <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em>
                                        </div>
                                        <div class="user-info d-none d-xl-block">
                                            <div class="user-status user-status-unverified">verified</div>
                                            <div class="user-name dropdown-indicator"></div>
                                        </div>
                                    </div>
                                </button>
                                <div id="myDropdown" class="dropdown-content">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em>
                                            </div>
                                        </div>
                                        <div class="user-info"><span class="lead-text"></span><span class="sub-text">info@softnio.com</span>
                                        </div>
                                        <div class="user-action"><a class="btn btn-icon mr-n2" href="/demo6/invest/profile-setting.html" style="position: relative;
    right: 20px;"><em class="icon ni ni-setting"></em></a>
                                        </div>
                                    </div>
                                    <h6 class="overline-title-alt" style="position: relative;left: 12px;margin: 10px;">Account Balance</h6>
                                    <div class="user-balance" style="position: relative; left: 12px;">1,494.23 <small class="currency currency-usd">USD</small>
                                    </div>
                                    <div class="user-balance-sub" style="position: relative;left: 12px;">Locked <span>15,495.39 <span class="currency currency-usd">USD</span></span>
                                    </div><a href="#" class="link"><span>Withdraw Balance</span> <em class="icon ni ni-wallet-out"></em></a>
                                    <ul class="link-list">
                                        <li><a href="/demo6/invest/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                        </li>
                                        <li><a href="/demo6/invest/profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                        </li>
                                        <li><a href="/demo6/invest/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                        </li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <li class="dropdown notification-dropdown">
                                <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                    <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                    <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Notifications</span><a href="#">Mark All as Read</a>
                                    </div>
                                    <div class="dropdown-body">
                                        <div class="nk-notification">
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon"><em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon"><em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon"><em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon"><em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                    <div class="nk-notification-time">2 hrs ago</div>f</div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon"><em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                    </div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                            <div class="nk-notification-item dropdown-inner">
                                                <div class="nk-notification-icon"><em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                </div>
                                                <div class="nk-notification-content">
                                                    <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                    <div class="nk-notification-time">2 hrs ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-foot center"><a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="hide-mb-sm"><a href="#" class="nk-quick-nav-icon"><em class="icon ni ni-signout"></em></a>
                            </li>
                   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-content nk-content-lg nk-content-fluid" style="background-color: rgb(218 218 218);">
            <div class="container-xl wide-lg">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head">
                            <div class="nk-block-between-md g-3">
                                <div class="nk-block-head-content">
                                    <div class="nk-block-head-sub"><span>Welcome!</span>
                                    </div>
                                    <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                        <div>
                                            <h2 class="nk-block-title fw-normal">Abu Bin Ishtiyak</h2>
                                        </div>
                                        <div><a href="./schemes.html" class="btn btn-white btn-light">My Plans <em class="icon ni ni-arrow-long-right ml-2"></em></a>
                                        </div>
                                    </div>
                                    <div class="nk-block-des">
                                        <p>At a glance summary of your investment account. Have fun!</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content d-none d-md-block">
                                    <div class="nk-slider nk-slider-s1">
                                        <div class="slider-init" data-slick="{&quot;dots&quot;: true, &quot;arrows&quot;: false, &quot;fade&quot;: true}">
                                            <div class="slider-item">
                                                <div class="nk-iv-wg1">
                                                    <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                    <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6><a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                    <div class="nk-iv-wg1-progress">
                                                        <div class="progress-bar bg-primary" data-progress="80"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="nk-iv-wg1">
                                                    <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                    <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6><a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                    <div class="nk-iv-wg1-progress">
                                                        <div class="progress-bar bg-primary" data-progress="80"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-item">
                                                <div class="nk-iv-wg1">
                                                    <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                    <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6><a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                    <div class="nk-iv-wg1-progress">
                                                        <div class="progress-bar bg-primary" data-progress="80"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-dots"></div>
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
                                                <p>Do you know the latest update of 2019? <span> A overview of our is now available on YouTube</span>
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
                                                    <h6 class="title">Available Balance <em class="icon ni ni-info"></em></h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount">105.94 <span class="change up"><span class="sign"></span>3.4%</span>
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
                                                    <h6 class="title">Total Invested <em class="icon ni ni-info"></em></h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount">509,850.90 <span class="change up"><span class="sign"></span>2.8%</span>
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
                                                    <h6 class="title">Total Profits <em class="icon ni ni-info"></em></h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount">50,600.48 <span class="change down"><span class="sign"></span>1.4%</span>
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
                                                    <div class="nk-iv-wg2-amount ui-v2">12,587.96</div>
                                                    <ul class="nk-iv-wg2-list">
                                                        <li><span class="item-label">Available Funds</span><span class="item-value">105.94</span>
                                                        </li>
                                                        <li><span class="item-label">Invested Funds</span><span class="item-value">12,582.02</span>
                                                        </li>
                                                        <li class="total"><span class="item-label">Total</span><span class="item-value">12,587.96</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-iv-wg2-cta"><a href="#" class="btn btn-primary btn-lg btn-block">Withdraw Funds</a><a href="./invest-form.html" class="btn btn-trans btn-block">Deposit Funds</a>
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
                                                    <h6 class="title">This Month Profit <em class="icon ni ni-info text-primary"></em></h6>
                                                </div>
                                                <div class="nk-iv-wg2-text">
                                                    <div class="nk-iv-wg2-amount ui-v2">1,457.23 <span class="change up"><span class="sign"></span>4.5%</span>
                                                    </div>
                                                    <ul class="nk-iv-wg2-list">
                                                        <li><span class="item-label">Profits</span><span class="item-value">1,045.21</span>
                                                        </li>
                                                        <li><span class="item-label">Referrals</span><span class="item-value">212.02</span>
                                                        </li>
                                                        <li><span class="item-label">Rewards</span><span class="item-value">200.00</span>
                                                        </li>
                                                        <li class="total"><span class="item-label">Total Profit</span><span class="item-value">1,457.23</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-iv-wg2-cta"><a href="#" class="btn btn-primary btn-lg btn-block">Invest &amp; Earn</a>
                                                    <div class="cta-extra">Earn up to 25$ <a href="#" class="link link-dark">Refer friend!</a>
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
                                                    <div class="nk-iv-wg2-amount ui-v2">319 <span class="sub">03</span> Active</div>
                                                    <ul class="nk-iv-wg2-list">
                                                        <li><span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span><span class="item-value">2,500.00</span>
                                                        </li>
                                                        <li><span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span><span class="item-value">2,000.00</span>
                                                        </li>
                                                        <li><span class="item-label"><a href="#">Dimond</a> <small>- 14.29% for 14 Days</small></span><span class="item-value">8,000.00</span>
                                                        </li>
                                                        <li><span class="item-label"><a href="#">Starter</a> <small>- 1.67% for 30 Days</small></span><span class="item-value">335.00</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="nk-iv-wg2-cta"><a href="#" class="btn btn-light btn-lg btn-block">See all Investment</a>
                                                    <div class="cta-extra">Check out <a href="#" class="link link-dark">Analytic Report</a>
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
        </div>
</div>

<script src="js/bundle0875.html"></script>
<script src="js/demo-settings0875.js"></script>
<script src="js/charts/chart-invest0875.js"></script>
<script src="js/scripts0875.html"></script>
<script src="js/scripts0875.js"></script>
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
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
<!-- Mirrored from dashlite.net/demo6/invest/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 May 2021 04:42:56 GMT -->
</body>
<!-- ===== IONICONS ===== -->
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

<script>
    /*===== MENU SHOW Y HIDDEN =====*/
    const navMenu = document.getElementById('nav-menu'),
        toggleMenu = document.getElementById('nav-toggle'),
        closeMenu = document.getElementById('nav-close')

    /*SHOW*/
    toggleMenu.addEventListener('click', ()=>{
        navMenu.classList.toggle('show')
    })

    /*HIDDEN*/
    closeMenu.addEventListener('click', ()=>{
        navMenu.classList.remove('show')
    })

    /*===== ACTIVE AND REMOVE MENU =====*/
    const navLink = document.querySelectorAll('.nav__link');

    function linkAction(){
        /*Active link*/
        navLink.forEach(n => n.classList.remove('active'));
        this.classList.add('active');

        /*Remove menu mobile*/
        navMenu.classList.remove('show')
    }
    navLink.forEach(n => n.addEventListener('click', linkAction));
</script>

</html>
