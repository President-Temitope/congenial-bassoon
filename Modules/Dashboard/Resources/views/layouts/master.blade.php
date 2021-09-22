{{--
<div class="nk-wrap " style="background-color: rgb(2 2 2);">
    <div class="nk-header nk-header-fluid nk-header-fixed is-theme  nk-header-fixed">
        <div class="container-xl wide-lg">
            <div class="nk-header-wrap">
                <!-- <div class="nk-menu-trigger mr-sm-2 d-lg-none"><a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                </div> -->
                <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>
                <div class="nk-header-brand">
                    <a href="" class="logo-link">
                        <img class="logo-light logo-img" src="{{asset('img/2.png')}}" alt="{{config('app.name')}}">
                        <!-- <img class="logo-dark logo-img" src="./assets/images/Asset 6300x.png" srcset="" alt="logo-dark"><span class="nio-version">Invest</span> -->
                    </a>
                </div>
                <nav class="nav nk-header-wrap" id="nav-menu">
                    <div class="nav__content bd-grid">
                        <ion-icon name="close-outline" class="nav__close md hydrated" id="nav-close" role="img"
                                  aria-label="close outline"></ion-icon>
                        <div class="nav__menu">
                            <ul class="nav__list nk-menu-main">
                                <li class="nk-menu-item active"><a href="/home" class="nk-menu-link"><span
                                            class="nk-menu-text">Overview</span></a>
                                </li>
                                <li class="nk-menu-item"><a href="./schemes.html" class="nk-menu-link"><span
                                            class="nk-menu-text">MY Plan</span></a>
                                </li>
                                <li class="nk-menu-item"><a href="/investments" class="nk-menu-link"><span
                                            class="nk-menu-text">Invest</span></a>
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
                                    <div class="user-action"><a class="btn btn-icon mr-n2"
                                                                href="/demo6/invest/profile-setting.html" style="position: relative;
    right: 20px;"><em class="icon ni ni-setting"></em></a>
                                    </div>
                                </div>
                                <h6 class="overline-title-alt" style="position: relative;left: 12px;margin: 10px;">
                                    Account Balance</h6>
                                <div class="user-balance" style="position: relative; left: 12px;">0 <small
                                        class="currency currency-usd">USD</small>
                                </div>
                                <div class="user-balance-sub" style="position: relative;left: 12px;">Locked
                                    <span>0<span class="currency currency-usd">USD</span></span>
                                </div>
                                <a href="#" class="link"><span>Withdraw Balance</span> <em
                                        class="icon ni ni-wallet-out"></em></a>
                                <ul class="link-list">
                                    <li><a href="/demo6/invest/profile.html"><em
                                                class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                    </li>
                                    <li><a href="/demo6/invest/profile-setting.html"><em
                                                class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                    </li>
                                    <li><a href="/demo6/invest/profile-activity.html"><em
                                                class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                    </li>
                                </ul>
                                <ul class="link-list">
                                    @auth
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endauth
                                    <li><a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
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
                                <div class="dropdown-head"><span
                                        class="sub-title nk-dropdown-title">Notifications</span><a href="#">Mark All
                                        as Read</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="nk-notification">
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is
                                                    placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is
                                                    placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                                f
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Withdrawal</span>
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon"><em
                                                    class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is
                                                    placed
                                                </div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-foot center"><a href="#">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="hide-mb-sm"><a href="#" class="nk-quick-nav-icon"><em
                                    class="icon ni ni-signout"></em></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-content nk-content-lg nk-content-fluid" style="background-color: rgb(2 2 2);">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
--}}


    <!DOCTYPE html>
<html class="js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta content="{{config('app.name')}}" name="author">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Bitcoins investment platform"
          name="description">
    <link href="{{asset('img/2.png')}}" rel="shortcut icon">
    <title>{{config('app.name')}} | {{$pageName}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/dashlite.css?ver=2.7.0')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets/css/theme.css?ver=2.7.0')}}">
    <style>
/* ========== mobile view ========= */
@media only screen and (max-width: 480px) {


        .notify-sub-text {

            font-size: 12px!important;
            position: relative!important;
        }


    .main-field {
        position: absolute!important;
        top: 38%!important;
        left: 43%!important;
    }

    .Pop-prove {

        width: 100%!important;
        position: relative;
        top: 2px;
        left: -4px!important;
        padding: 3px;
    }

    .successfully-notify {

        margin-bottom: 5.5rem!important;
    }


    .modal-length {

        width: 100%!important;

    }


    .qr-address {

        position: absolute!important;
        top: 45%!important;
        left: 30%!important;

    }


        input {

        font-size: 11px;
        color: #000!important;

    }

}



.successfully-notify {

margin-bottom: 6.5rem!important;
}

.border-control-form {

    border: 1px solid #0f4ffd!important;

}




.proveofpayment>input {

    width: 70%!important;
    position: relative;
    top: 280px;
    padding: 3px;

}

.action-modal {

    margin-top: 18.5rem!important;
}

.QRCODE {

    position: absolute!important;
    top: 45%;
    left: 38%;
}

.main{
        position: absolute;
        top: 38%;
        left: 46%;
        transform: translate(-50%,-50%);
        width: 250px;
        height: 40px;
      }
      input{
        border: 2px solid #8aa4ff;
        border-radius: 5px;
        width: 120%;
        height: 100%;
        font-size: 12px;
        padding: 0 40px 0 10px;
        outline: none;
        color: #000;
        box-shadow: 0 0 10px -4px #fff;
        letter-spacing: 1px;
      }
      i:active{
        color: #c2c2c2;
      }
      i{
        position: absolute;
        top: 10px;
        right: -46px;
        color:#0f0e0e;
        cursor: pointer;
        font-size: 40px;
        transform: scale(1.1);
      }
      /* p{
        color:#fff;
        font-size: 18px;
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%,-50%);
        letter-spacing: 1px;
      } */
    </style>
</head>
<body class="nk-body npc-invest bg-lighter ">


<div class="nk-app-root">
    <div class="nk-wrap ">
        <div class="nk-header nk-header-fluid is-theme  is-regular">
            <div class="container-xl wide-xl">
                <div class="nk-header-wrap">
                    <div class="nk-menu-trigger mr-sm-2 d-lg-none"><a class="nk-nav-toggle nk-quick-nav-icon"
                                                                      data-target="headerNav"
                                                                      href="#"><em
                                class="icon ni ni-menu"></em></a></div>
                    <div class="nk-header-brand"><a class="logo-link" href="/"><img alt="logo"
                                                                                    class="logo-light logo-img"
                                                                                    src="{{asset('img/2.png')}}"
                                                                                    srcset="{{asset('img/2.png')}} 2x"><img
                                alt="logo-dark" class="logo-dark logo-img"
                                src="{{asset('img/2.png')}}" srcset="{{asset('img/2.png')}} 2x"></a></div>
                    <div class="nk-header-menu" data-content="headerNav">
                        <div class="nk-header-mobile">
                            <div class="nk-header-brand"><a class="logo-link" href="/"><img
                                        alt="logo" class="logo-light logo-img"
                                        src="{{asset('img/2.png')}}" srcset="{{asset('img/2.png')}} 2x"><img
                                        alt="logo-dark"
                                        class="logo-dark logo-img"
                                        src="{{asset('img/2.png')}}"
                                        srcset="{{asset('img/2.png')}} 2x"></a></div>
                            <div class="nk-menu-trigger mr-n2"><a class="nk-nav-toggle nk-quick-nav-icon"
                                                                  data-target="headerNav"
                                                                  href="#"><em
                                        class="icon ni ni-arrow-left"></em></a></div>
                        </div>
                        <ul class="nk-menu nk-menu-main">
                            <li class="nk-menu-item {{$pageName == 'Dashboard' ? 'active' : ''}}"><a
                                    class="nk-menu-link" href="/dashboard"><span
                                        class="nk-menu-text">Overview</span></a></li>

                            <li class="nk-menu-item {{$pageName == 'activePlans' ? 'active' : ''}}"><a
                                    class="nk-menu-link" href="/investments/myPlans"><span
                                        class="nk-menu-text">My Plan</span></a></li>


                            <li class="nk-menu-item {{$pageName == 'Investments' ? 'active' : ''}}"><a
                                    class="nk-menu-link"
                                    href="/investments"><span
                                        class="nk-menu-text">Invest</span></a></li>

                            {{--<li class="nk-menu-item {{$pageName == 'plans' ? 'active' : ''}} has-sub"><a
                                    class="nk-menu-link nk-menu-toggle"
                                    href="#">
                                    <span
                                        class="nk-menu-text">Pages</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a class="nk-menu-link" href="welcome.html"><span
                                                class="nk-menu-text">Welcome / Intro</span></a></li>
                                    <li class="nk-menu-item"><a class="nk-menu-link" href="invest-form.html"><span
                                                class="nk-menu-text">Investment Process</span></a></li>
                                    <li class="nk-menu-item"><a class="nk-menu-link" href="scheme-details.html"><span
                                                class="nk-menu-text">Investment Details</span></a></li>
                                    <li class="nk-menu-item"><a class="nk-menu-link" href="kyc-application.html"><span
                                                class="nk-menu-text">KYC - Get Started</span></a></li>
                                    <li class="nk-menu-item"><a class="nk-menu-link" href="kyc-form.html"><span
                                                class="nk-menu-text">KYC - Application Form</span></a></li>
                                    <li class="nk-menu-item"><a class="nk-menu-link" href="../index.html"><span
                                                class="nk-menu-text">Main Dashboard <em
                                                    class="icon ni ni-external"></em> </span></a></li>
                                    <li class="nk-menu-item"><a class="nk-menu-link" href="../components.html"><span
                                                class="nk-menu-text">All Components <em
                                                    class="icon ni ni-external"></em></span></a></li>
                                </ul>
                            </li>--}}
                        </ul>
                    </div>
                    <div class="nk-header-tools">
                        <ul class="nk-quick-nav">
                            <li class="dropdown user-dropdown order-sm-first"><a class="nk-menu-link nk-menu-toggle"
                                                                                 data-toggle="dropdown" href="#">
                                    <div class="user-toggle">
                                        <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                        <div class="user-info d-none d-xl-block">
                                            <div class="user-name dropdown-indicator">{{Auth::user()->fullName()}}</div>
                                        </div>
                                    </div>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                                    <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                        <div class="user-card">
                                            <div class="user-avatar"><span>@if(config('app_env') == 'production') <img
                                                        src="{{Avatar::create(Auth::user()->fullName())->toBase64() }}"/> @else
                                                        AB @endif</span></div>
                                            <div class="user-info"><span
                                                    class="lead-text">{{Auth::user()->fullName()}}</span><span
                                                    class="sub-text">{{Auth::user()->email}}</span></div>
                                            <div class="user-action"><a class="btn btn-icon mr-n2"
                                                                        href="/users/profile"><em
                                                        class="icon ni ni-setting"></em></a></div>
                                        </div>
                                    </div>
                                    <div class="dropdown-inner user-account-info"><h6 class="overline-title-alt">Account
                                            Balance</h6>
                                        <div class="user-balance">1,494.23 <small
                                                class="currency currency-usd">USD</small></div>
                                        <div class="user-balance-sub">Locked <span>15,495.39 <span
                                                    class="currency currency-usd">USD</span></span></div>
                                        <a class="link" href="#"><span>Withdraw Balance</span> <em
                                                class="icon ni ni-wallet-out"></em></a></div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li><a href="/users/profile"><em
                                                        class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                            </li>
                                            <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                            </li>


                                            <li><a href=""><em
                                                        class="icon ni ni-lock-alt"></em><span>Change Password</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            @auth
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                            @endauth
                                            <li><a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em
                                                        class="icon ni ni-signout"></em><span>Sign out</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-xl">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
        <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright"> &copy; @php echo date('Y');@endphp {{config('app.name')}}.</div>
                    <div class="nk-footer-links">
                        <ul class="nav nav-sm">
                            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@prepend('script')
<script src="{{asset('assets/js/bundle.js?ver=2.7.0')}}"></script>
<script src="{{asset('assets/js/scripts.js?ver=2.7.0')}}"></script>
@endprepend
@stack('script')
</body>
</html>
