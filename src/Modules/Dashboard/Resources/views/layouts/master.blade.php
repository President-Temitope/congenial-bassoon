<!DOCTYPE html>
<html class="js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta content="{{config('app.name')}}" name="author">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Bitcoins investment platform" name="description">
    <!-- <link href="{{asset('img/2.png')}}" rel="shortcut icon"> -->
    <title>{{config('app.name')}} | {{$pageName}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/dashlite.css?ver=2.7.0')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets/css/theme.css?ver=2.7.0')}}">

</head>
<!-- copy paste  -->
<style>
    .main-field {

        position: absolute !important;
        position: absolute !important;
        top: 34% !important;
        left: 15% !important;
        width: 70%;
    }


    /* ========== mobile view ========= */

    @media only screen and (max-width: 767px) {
        .copy-text input.text {
            padding: 0px !important;
            font-size: 15px !important;
            color: #555;
            border: none;
            outline: none;
        }
    }

    @media only screen and (max-width: 480px) {
        .notify-sub-text {
            font-size: 12px !important;
            position: relative !important;
        }


        .copy-text input.text {
            padding: 0px !important;
            font-size: 15px !important;
            color: #555;
            border: none;
            outline: none;
        }

        .main-field {
            position: absolute !important;
            top: 34% !important;
            left: 0% !important;
            width: 100%;
        }

        .Pop-prove {
            width: 100% !important;
            position: relative;
            top: 2px;
            left: -4px !important;
            padding: 3px;
        }

        .successfully-notify {
            margin-bottom: 5.5rem !important;
        }

        .modal-length {
            width: 100% !important;
        }

        .qr-address {
            position: absolute !important;
            top: 45% !important;
            left: 30% !important;
        }

        input {
            font-size: 11px;
            color: #000 !important;
        }
    }

    .successfully-notify {
        margin-bottom: 6.5rem !important;
    }

    .border-control-form {
        border: 1px solid #0f4ffd !important;
    }

    .proveofpayment > input {
        width: 70% !important;
        position: relative;
        top: 280px;
        padding: 3px;
    }

    .action-modal {
        margin-top: 18.5rem !important;
    }

    .QRCODE {
        position: absolute !important;
        top: 45%;
        left: 38%;
    }

    /* .main {
        position: absolute;
        top: 36%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100px;
        height: 40px;
    } */

    input {
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

    i:active {
        color: #c2c2c2;
    }

    i {
        position: absolute;
        top: 10px;
        right: -46px;
        color: #0f0e0e;
        cursor: pointer;
        font-size: 40px;
        transform: scale(1.1);
    }

</style>


<style>
    input[type=text]:focus {
        border-color: dodgerBlue;
        box-shadow: 0 0 8px 0 dodgerBlue;
    }
</style>


<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        font-family: "Roboto", sans-serif;
        background: #f0f2f7;
    }

    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .label {
        padding: 10px;
        font-size: 18px;
        color: #111;
    }

    .copy-text {
        position: relative;
        padding: 8px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        display: flex;
        /* margin: 50px; */
    }

    .copy-text input.text {
        padding: 10px;
        font-size: 18px;
        color: #555;
        border: none;
        outline: none;
    }

    .copy-text button {
        padding: 10px;
        background: #5784f5;
        color: #fff;
        font-size: 18px;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
    }

    .copy-text button:active {
        background: #809ce2;
    }

    .copy-text button:before {
        content: "Copied";
        position: absolute;
        top: -45px;
        right: 0px;
        background: #5c81dc;
        padding: 8px 10px;
        border-radius: 20px;
        font-size: 15px;
        display: none;
    }

    .copy-text button:after {
        content: "";
        position: absolute;
        top: -20px;
        right: 25px;
        width: 10px;
        height: 10px;
        background: #5c81dc;
        transform: rotate(45deg);
        display: none;
    }

    .copy-text.active button:before,
    .copy-text.active button:after {
        display: block;
    }

    footer {
        position: fixed;
        height: 50px;
        width: 100%;
        left: 0;
        bottom: 0;
        background-color: #5784f5;
        color: white;
        text-align: center;
    }

    footer p {
        margin: revert;
        padding: revert;
    }

    body {
        font-family: "Roboto", sans-serif;
        background: #f0f2f7;
    }

    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .label {
        padding: 10px;
        font-size: 18px;
        color: #111;
    }

    .copy-text {
        position: relative;
        padding: 10px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        display: flex;
    }

    .copy-text input.text {
        padding: 0px !important;
        font-size: 16px;
        color: #555;
        border: none;
        outline: none;
    }

    .copy-text button {
        padding: 10px;
        background: #5784f5;
        color: #fff;
        font-size: 18px;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
    }

    .copy-text button:active {
        background: #809ce2;
    }

    .copy-text button:before {
        content: "Copied";
        position: absolute;
        top: -45px;
        right: 0px;
        background: #5c81dc;
        padding: 8px 10px;
        border-radius: 20px;
        font-size: 15px;
        display: none;
    }

    .copy-text button:after {
        content: "";
        position: absolute;
        top: -20px;
        right: 25px;
        width: 10px;
        height: 10px;
        background: #5c81dc;
        transform: rotate(45deg);
        display: none;
    }

    .copy-text.active button:before,
    .copy-text.active button:after {
        display: block;
    }
</style>

<style>
    #fading_div {
        background: transparent;
        border-radius: 10px;
        box-shadow: rgb(0 0 0 / 20%) 1px 7px 14px -5px;
        overflow: hidden;
        animation: 0.5s ease-out 0s 1 normal forwards running slide-in;
        /* opacity: 1; */
        color: #f71515 !important;
    }
</style>

<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">
    <div class="nk-wrap ">
        <div class="nk-header nk-header-fluid is-theme  is-regular">
            <div class="container-xl wide-xl">
                <div class="nk-header-wrap">
                    <div class="nk-menu-trigger mr-sm-2 d-lg-none"><a class="nk-nav-toggle nk-quick-nav-icon"
                                                                      data-target="headerNav" href="#"><em
                                class="icon ni ni-menu"></em></a></div>
                    <div class="nk-header-brand">
                        <a class="logo-link" href="/">
                            <!-- <img alt="logo" class="logo-light logo-img" src="{{asset('img/2.png')}}" srcset="{{asset('img/2.png')}} 2x">
                                <img alt="logo-dark" class="logo-dark logo-img" src="{{asset('img/2.png')}}" srcset="{{asset('img/2.png')}} 2x"> -->
                            <h5 class="brandnav_logo" style="color: aliceblue;">The <span
                                    style="color:#381fff;">OKX </span> Platinum</h5>
                        </a>
                    </div>
                    <div class="nk-header-menu" data-content="headerNav">
                        <div class="nk-header-mobile">
                            <div class="nk-header-brand">
                                <a class="logo-link" href="/">
                                    <!-- <img alt="logo" class="logo-light logo-img" src="{{asset('img/2.png')}}" srcset="{{asset('img/2.png')}} 2x">
                                        <img alt="logo-dark" class="logo-dark logo-img" src="{{asset('img/2.png')}}" srcset="{{asset('img/2.png')}} 2x"> -->
                                    <h5 class="brandnav_logo" style="color: #000;">The <span
                                            style="color:#381fff;">OKX </span> Platinum</h5>
                                </a>
                            </div>
                            <div class="nk-menu-trigger mr-n2"><a class="nk-nav-toggle nk-quick-nav-icon"
                                                                  data-target="headerNav" href="#"><em
                                        class="icon ni ni-arrow-left"></em></a></div>
                        </div>
                        <ul class="nk-menu nk-menu-main">
                            <li class="nk-menu-item {{$pageName == 'Dashboard' ? 'active' : ''}}"><a
                                    class="nk-menu-link" href="/dashboard"><span
                                        class="nk-menu-text">Overview</span></a></li>
                            @if(Auth::user()->hasRole('user'))
                                <li class="nk-menu-item {{$pageName == 'activePlans' ? 'active' : ''}}"><a
                                        class="nk-menu-link" href="/investments/myPlans"><span class="nk-menu-text">My Plan</span></a>
                                </li>
                                <li class="nk-menu-item {{$pageName == 'Investments' ? 'active' : ''}}"><a
                                        class="nk-menu-link" href="/investments"><span
                                            class="nk-menu-text">Investments</span></a></li>
                            @endif @if(Auth::user()->hasRole(['admin','super-admin']))
                                <li class="nk-menu-item {{$pageName == 'Users' ? 'active' : ''}}"><a
                                        class="nk-menu-link" href="/users"><span class="nk-menu-text">Users</span></a>
                                </li>
                                <li class="nk-menu-item {{$pageName == 'Investments' ? 'active' : ''}}"><a
                                        class="nk-menu-link" href="/investments/viewAll"><span class="nk-menu-text">Investments</span></a>
                                </li>
                                <li class="nk-menu-item {{$pageName == 'Payments' ? 'active' : ''}}"><a
                                        class="nk-menu-link" href="/payments"><span class="nk-menu-text">Payments</span></a>
                                </li>
                            @endif
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
                                            <div class="user-avatar"><span>@if(config('app_env') == 'production')
                                                        <img
                                                            src="{{Avatar::create(Auth::user()->fullName())->toBase64() }}"/>
                                                    @else
                                                        AB
                                                    @endif</span></div>
                                            <div class="user-info"><span
                                                    class="lead-text">{{Auth::user()->fullName()}}</span><span
                                                    class="sub-text">{{Auth::user()->email}}</span></div>
                                            <div class="user-action"><a class="btn btn-icon mr-n2"
                                                                        href="/users/profile"><em
                                                        class="icon ni ni-setting"></em></a></div>
                                        </div>
                                    </div>
                                    <div class="dropdown-inner user-account-info">
                                        <h6 class="overline-title-alt">Account Balance</h6>
                                        <div
                                            class="user-balance">{{isset($data[0]) && isset($data[0][0]) && count($data) > 0 &&$data[0][0]->available_balance!==null ? makeMoneyHumanReadable($data[0][0]->available_balance):0}}
                                            <small
                                                class="currency currency-usd">USD</small></div>
                                        <a class="link" href="#"><span>Withdraw Balance</span> <em
                                                class="icon ni ni-wallet-out"></em></a>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li><a href="/users/profile"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                            </li>
                                            <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                            </li>
                                            <li><a href=""><em
                                                        class="icon ni ni-lock-alt"></em><span>Change Password</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list"> @auth
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;"> @csrf </form>
                                            @endauth
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em
                                                        class="icon ni ni-signout"></em><span>Sign out</span></a></li>
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
                    <div class="nk-content-body"> @include('dashboard::messages') @yield('content') </div>
                </div>
            </div>
        </div>
        <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright"> &copy; @php echo date('Y')@endphp {{config('app.name')}}.</div>
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
</div> @prepend('script')
    <script src="{{asset('assets/js/bundle.js?ver=2.7.0')}}"></script>
    <script src="{{asset('assets/js/scripts.js?ver=2.7.0')}}"></script>
@endprepend @stack('script')
</body>
<script>
    let copyText = document.querySelector(".copy-text");
    copyText.querySelector("button").addEventListener("click", function () {
        let input = copyText.querySelector("input.text");
        input.select();
        document.execCommand("copy");
        copyText.classList.add("active");
        window.getSelection().removeAllRanges();
        setTimeout(function () {
            copyText.classList.remove("active");
        }, 2500);
    });

</script>
<!-- start Gist JS code-->
<script>
    (function (d, h, w) {
        var gist = w.gist = w.gist || [];
        gist.methods = ['trackPageView', 'identify', 'track', 'setAppId'];
        gist.factory = function (t) {
            return function () {
                var e = Array.prototype.slice.call(arguments);
                e.unshift(t);
                gist.push(e);
                return gist;
            }
        };
        for (var i = 0; i < gist.methods.length; i++) {
            var c = gist.methods[i];
            gist[c] = gist.factory(c)
        }
        s = d.createElement('script'), s.src = "https://widget.getgist.com", s.async = !0, e = d.getElementsByTagName(h)[0], e.appendChild(s), s.addEventListener('load', function (e) {
        }, !1), gist.setAppId("env4v3il"), gist.trackPageView()
    })(document, 'head', window);
    @if(app()->environment('production'))
    if (window.location.protocol !== "https:")
        window.location.href = "https:" +
            window.location.href.substring(window.location.protocol.length);
    @endif
</script>
<!-- end Gist JS code-->
</html>
