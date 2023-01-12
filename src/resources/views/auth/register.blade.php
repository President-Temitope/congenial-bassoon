{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}{{--


    <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <title>Register - {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/Asset 16@4x.png')}}">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/skins/orange.css')}}">

--}}
{{--<!-- Live Style Switcher - demo only -->
<link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
<link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
<link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
<link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />
--}}{{--

<!-- Template JS Files -->
    <script src="{{asset('js/modernizr.js')}}"></script>

</head>
<body class="auth-page">
<!-- SVG Preloader Starts -->
<div id="preloader">
    <div id="preloader-content">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="150px" height="150px"
             viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                    <feOffset dx="0" dy="0" result="offsetblur"/>
                    <feFlood flood-color="red"/>
                    <feComposite in2="offsetblur" operator="in"/>
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>

        --}}
{{--        <img src="{{asset('images/Asset 11@4x.png')}}" class="img-responsive img-rounded"/>--}}{{--

    </div>
</div>
<!-- SVG Preloader Ends -->

<!-- Wrapper Starts -->
<div class="wrapper">
    <div class="container-fluid user-auth">
        <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
            <!-- Logo Starts -->
            <a class="logo" href="/">
                <img id="logo-user" class="img-responsive" src="{{asset('images/logo.png')}}" alt="logo">
            </a>
            <!-- Logo Ends -->
            <!-- Slider Starts -->
            <div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators Starts -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>
                <!-- Indicators Ends -->
                <!-- Carousel Inner Starts -->
                <div class="carousel-inner">
                    <!-- Carousel Item Starts -->
                    <div class="item active item-1">
                        <div>
                            <blockquote>
                                <p>This is a realistic program for anyone looking for site to invest. Paid to me
                                    regularly, keep up good work!</p>
                                <footer><span>Lucy Smith</span>, England</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-2">
                        <div>
                            <blockquote>
                                <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer
                                    service!</p>
                                <footer><span>Slim Hamdi</span>, Tunisia</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-3">
                        <div>
                            <blockquote>
                                <p>My family and me want to thank you for helping us find a great opportunity to make
                                    money online. Very happy with how things are going!</p>
                                <footer><span>Dalel Boubaker</span>, Russia</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                </div>
                <!-- Carousel Inner Ends -->
            </div>
            <!-- Slider Ends -->
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <!-- Logo Starts -->
            <a class="visible-xs" href="/">
                <img id="logo" class="img-responsive mobile-logo" src="{{asset('images/logo.png')}}" alt="logo">
            </a>
            <!-- Logo Ends -->
            <div class="form-container">
                <div>
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <h2 class="title-head hidden-xs">get <span>started</span></h2>
                        <p class="info-form">Open account for free and start trading Bitcoins now!</p>
                    </div>
                    <!-- Section Title Ends -->
                    <!-- Form Starts -->
                    <form method="POST" action="{{route('register')}}">
                    @csrf
                    <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input id="firstname" type="text" placeholder="Firstname"
                                   class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                   value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror</div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input id="lastname" type="text" placeholder="Lastname"
                                   class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                   value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror</div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input id="email" placeholder="Email" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror</div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input id="password" placeholder="Password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror </div>
                        <!-- Input Field Ends -->

                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input id="password" placeholder="Confirm password" type="password"
                                   class="form-control @error('password-confirm') is-invalid @enderror"
                                   name="password_confirmation" required autocomplete="current-password">

                            @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror </div>

                        <div class="form-group">
                            <select id="cryptocurrency"
                                    class="form-control @error('cryptocurrency') is-invalid @enderror"
                                    name="cryptocurrency" required>
                                <option value="btc" selected>Bitcoin</option>
                                <option value="ltc">Litecoin</option>
                                <option value="eth">Ethereum</option>
                            </select>

                            @error('cryptocurrency')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror </div>

                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input id="wallet_address" placeholder="Wallet address" type="text"
                                   class="form-control @error('wallet_address') is-invalid @enderror"
                                   name="wallet_address" required autocomplete="wallet_address">

                            @error('wallet_address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror </div>

                        <!-- Input Field Ends -->
                        <!-- Submit Form Button Starts -->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Register</button>
                            <p class="text-center"> have an account ? <a href="{{route('login')}}">Login</a>
                            <p class="text-center">forgot password ? click <a href="{{ route('password.request') }}">here</a>
                            --}}
{{--                            <p class="text-center">don't have an account ? <a href="{{route('register')}}">Register</a>--}}{{--

                        </div>

                        <!-- Submit Form Button Ends -->
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>

        </div>
    </div>
</div>

<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<!-- Wrapper Ends -->
</body>
</html>
--}}
    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content=""/>
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('img/icon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./"/>
    <!-- PAGE TITLE HERE -->
    <title>CRYPTOBOLT | Online</title>
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- [if lt IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif] -->
    <!-- EFFECT ANIMATION  -->
    <!-- <link rel="stylesheet" href="css-anima/animate.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- CUSTOM EFFECT  -->
    <link rel="stylesheet" href="./animate.css">
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/css/font-awesome.min.css')}}"/>
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.min.css')}}">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/loader.min.css')}}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('css/skin/skin-1.css')}}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/switcher.css')}}">
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/revolution/revolution/css/navigation.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- GOOGLE FONTS -->
    <link
        href="../../fonts.googleapis.com/css91d4.css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../../fonts.googleapis.com/cssd172.css?family=Crete+Round:400,400i&amp;subset=latin-ext"
          rel="stylesheet">
</head>
<style>
    @media only screen and (max-width: 767px) {


        #example img {

            /* position: absolute; */
            left: 346px !important;
            bottom: 9px !important;

        }


    }


    .cus-icon {

        font-size: 15px !important;
    }

    .mb-0 {
        font-size: 31px;
        FONT-FAMILY: Calibri, sans-serif, serif, EmojiFont;
        font-weight: bold;
        color: #FF9800;
        position: relative;
        top: -4px;
        left: -15px;
    }


    /* ==== custom hero header invite === */


    /* ========================= */

    /* Aligning Text */


    .text--center {
        text-align: center !important;
    }


    /*------------------------------------*\
        #COLORS
    \*------------------------------------*/
    /*
    /*------------------------------------*\
        #Align
    \*------------------------------------*/

    /* Small Devices, Tablets */
    /* Postion Helpers */


    /*------------------------------------*\
        #Blockquotes
    \*------------------------------------*/


    /*------------------------------------*\
        #BACKGROUNDS
    \*------------------------------------*/
    .bg-theme {
        background-color: #de7717 !important;
    }

    .bg-gray {
        background-color: transparent !important;
    }

    .bg-white {
        background-color: #ffffff !important;
    }


    /*------------------------------------*\
        #BUTTONS
    \*------------------------------------*/
    .btn {
        font-family: 'Roboto', sans-serif;
        position: relative;
        z-index: 2;
        font-size: 14px;
        font-weight: 700;
        text-transform: capitalize;
        text-align: center;
        border-radius: 0;
        padding: 0;
        line-height: 48px;
        width: 170px;
        height: 50px;
        letter-spacing: 0.26px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        /* width: 10%!important; */
    }

    .btn.active,
    .btn:active {
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    /* Button Primary */
    .btn--primary1 {
        background-color: #1d3161;
        color: #ffffff;
        border: 0;
        width: 65%;
        border-radius: 2px;
    }

    .start-winning {

        background-color: #1d3161;
        color: #ffffff;
        border: 0;
        width: 90%;
        border-radius: 2px;

    }

    .btn--primary:active,
    .btn--primary:focus,
    .btn--primary:hover {
        background-color: #0c3087;
        color: #fff;
    }

    .btn--primary.btn--inverse:active,
    .btn--primary.btn--inverse:focus,
    .btn--primary.btn--inverse:hover {
        background-color: #ffffff;
        color: #ffb400;
        border-color: #ffffff;
    }

    /* Button Secondary*/
    .btn--secondary {
        background-color: #282828;
        color: #ffffff;
        border: 2px solid #282828;
    }

    .btn--secondary:active,
    .btn--secondary:focus,
    .btn--secondary:hover {
        background-color: #ffb400;
        color: #ffffff;
        border-color: #ffb400;
    }

    .btn--secondary.btn--inverse:active,
    .btn--secondary.btn--inverse:focus,
    .btn--secondary.btn--inverse:hover {
        background-color: #ffffff;
        color: #282828;
        border-color: #ffffff;
    }

    /* Button White */
    .btn--white {
        background-color: #ffffff;
        color: #282828;
        border: 2px solid #ffffff;
    }

    .btn--white:active,
    .btn--white:focus,
    .btn--white:hover {
        background-color: #ffb400;
        color: #ffffff;
        border-color: #ffb400;
    }

    /* Button Block */
    .btn--block {
        width: 100%;
    }

    .btn--auto {
        width: auto;
    }

    /* Button Rounded */
    .btn--rounded {
        border-radius: 50px;
    }

    /* Button Link */
    .btn--link {
        background-color: transparent;
        border-color: transparent;
    }

    .btn--link.btn--primary {
        color: #ffb400;
    }

    .btn--link.btn--primary:active,
    .btn--link.btn--primary:focus,
    .btn--link.btn--primary:hover {
        color: #282828;
        background-color: transparent;
        border-color: transparent;
    }

    .btn--link.btn--secondary {
        color: #282828;
    }

    .btn--link.btn--secondary:active,
    .btn--link.btn--secondary:focus,
    .btn--link.btn--secondary:hover {
        color: #ffb400;
        background-color: transparent;
        border-color: transparent;
    }

    /* Button Bordered */


    /* Button Action */
    /*
    /*------------------------------------*\
        #FORMS
    \*------------------------------------*/

    /* Input Checkbox */

    /*------------------------------------*\
        #MEDIA
    \*------------------------------------*/

    /* Tab Vertical */


    /*------------------------------------*\
        #Accordion
    \*------------------------------------*/
    /* Accordion Base */

    /*------------------------------------*\
        #PAGINATION
    \*------------------------------------*/
    .pagination {
        margin: 0;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }

    .pagination > li {
        margin-right: 10px;
        display: inline-block;
    }

    .pagination > li > a,
    .pagination > li > span {
        background-color: transparent;
        color: #9b9b9b;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-weight: 700;
        border-color: 2px solid rgba(34, 34, 34, 0.1);
        text-transform: uppercase;
        padding: 0;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        border-radius: 50%;
    }

    .pagination > .active > a,
    .pagination > li:hover > a,
    .pagination > li > a:focus,
    .pagination > li > a:hover,
    .pagination > li > span:focus,
    .pagination > li > span:hover {
        background-color: #ffb400 !important;
        color: #ffffff;
        border-color: #ffb400;
    }

    .pagination > li:first-child > a,
    .pagination > li:first-child > span,
    .pagination > li:last-child > a,
    .pagination > li:last-child > span {
        border-radius: 50%;
    }

    .pagination > .active > a,
    .pagination > .active > a:focus,
    .pagination > .active > a:hover,
    .pagination > .active > span,
    .pagination > .active > span:focus,
    .pagination > .active > span:hover {
        border-color: #ffb400;
    }

    /*------------------------------------*\
        #ALERT MESSAGE
    \*------------------------------------*/


    /*------------------------------------*\
        #BACK TO TOP
    \*------------------------------------*/


    /*------------------------------------*\
        #Range
    \*------------------------------------*/


    /*------------------------------------*\
        #FEATRUE BOX
    \*------------------------------------*/

    /*------------------------------------*\
        #MODALS
    \*------------------------------------*/


    /*------------------------------------*\
        #Market Data
    \*------------------------------------*/


    /*------------------------------------*\
        #PRICING-SECTION
    \*------------------------------------*/
    .pricing-panel {
        position: relative;
        text-align: center;
    }

    .pricing-panel .pricing--heading {
        box-shadow: 0 10px 20px rgba(224, 224, 224, 0.4);
        border-radius: 2px;
        background-color: #ffffff;
        padding: 50px 0px;
        margin-bottom: 30px;
    }

    .pricing-panel .pricing--heading .pricing--icon {
        margin-right: auto;
        margin-left: auto;
        text-align: center;
        margin-bottom: 30px;
    }

    .pricing-panel .pricing--heading h4 {
        font-size: 15px;
        font-weight: 700;
        font-style: italic;
        line-height: 1;
        margin-bottom: 17px;
        text-transform: capitalize;
    }

    .pricing-panel .pricing--heading p {
        font-family: 'Exo 2', sans-serif;
        color: #333333;
        font-size: 90px;
        font-weight: 300;
        line-height: 1;
        margin-bottom: 16px;
    }

    .pricing-panel .pricing--heading .pricing--desc {
        color: #a5a5a5;
        font-size: 15px;
        font-weight: 400;
        line-height: 21px;
        margin-bottom: 46px;
    }

    .pricing-panel .btn--secondary {
        border: 2px solid rgba(34, 34, 34, 0.1);
    }

    .pricing-panel .pricing--footer {
        color: #fff;
        font-size: 14px;
        font-weight: 700;
    }

    .pricing-active .pricing-panel .pricing--heading {
        /* background-image: -moz-linear-gradient(180deg, #f8a137 0%, #fbac47 64%, #feb756 100%); */
        /* background-image: -webkit-linear-gradient(180deg, #f8a137 0%, #fbac47 64%, #feb756 100%); */
        /* background-image: -ms-linear-gradient(180deg, #f8a137 0%, #fbac47 64%, #feb756 100%); */
        /* background-image: tran; */
        padding: 70px 0px;
        margin-top: -20px;
    }

    .pricing-active .pricing-panel .pricing--heading p,
    .pricing-active .pricing-panel .pricing--heading .pricing--desc {
        color: #ffffff;
    }

    .pricing--notes {
        color: #a5a5a5;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: center;
        margin-top: 50px;
    }

    /* pricing #2 */
    .pricing-2 {
        overflow: visible;
    }

    .pricing-2 .pricing-wrapper {
        margin-top: -240px;
        position: relative;
        z-index: 2;
    }


    /*------------------------------------*\
        #BLOG-SECTION / CUSTOM CHANGES
    \*------------------------------------*/
    .logo-dark {

        position: relative;
        left: 20%;
        top: 0px;
    }

    .marquee {

        position: relative;
        bottom: 5px !important;
    }

    .logo-modal {

        position: relative;
        left: 34%;
        bottom: 17px;

    }

    /* =================== */
    /*------------------------------------*\
        #Market Data
    \*------------------------------------*/
    .ccc-widget.ccc-header-v3 {
        padding: 20px 0;
    }

    .bitcoin-tracker-dark .ccc-widget.ccc-header-v3 {
        background-color: #1b1a1a !important;
    }

    .ccc-widget.ccc-header-v3 .ccc-header-v3-price-logo {
        margin-right: 9px;
    }

    .bitcoin-tracker-dark .ccc-header-v3-price-value {
        color: #a5a5a5 !important;
        font-size: 12px !important;
    }

    .bitcoin-tracker-dark .ccc-header-v3-price-name {
        color: #f9f9f9 !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        margin-right: 6px !important;
        text-transform: capitalize !important;
    }

    .bitcoin-tracker-theme .ccc-widget.ccc-header-v3 {
        background-color: #ffb400 !important;
    }

    .bitcoin-tracker-theme .ccc-header-v3-price-value {
        color: #282828 !important;
        font-size: 12px !important;
    }

    .bitcoin-tracker-theme .ccc-header-v3-price-name {
        color: #1b1a1a !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        margin-right: 6px !important;
        text-transform: capitalize !important;
    }

    /**/
    .ccc-widget.ccc-chart {
        background-color: #fff;
        border-radius: 5px;
    }

    .ccc-widget.ccc-chart > div {
        background-color: transparent !important;
        border: none !important;
    }

    .ccc-widget.ccc-chart .header-div {
        background-color: transparent !important;
        border: none !important;
        padding: 40px 40px 26px 40px !important;
    }

    .ccc-widget.ccc-chart .header-div a:last-of-type {
        font-size: 0 !important;
        border-radius: 0 !important;
        width: 42px;
        height: 42px;
        position: relative;
    }

    .ccc-widget.ccc-chart .header-div a:last-of-type:before {
        position: absolute;
        content: "";
        color: #fff;
        width: 2px;
        height: 14px;
        top: 50%;
        left: 50%;
        margin-top: -6px;
        background: #ffffff;
    }

    /* .ccc-widget.ccc-chart .header-div a:last-of-type:after {
        position: absolute;
        content: "";
        color: #fff;
        width: 14px;
        height: 2px;
        top: 50%;
        left: 50%;
        margin-left: -6px;
        background: #ffffff;
    } */

    .ccc-widget.ccc-chart div:nth-child(2) {
        padding: 10px 30px 10px 40px !important;
    }

    .ccc-widget.ccc-chart div:nth-child(2) a {
        font-family: 'Exo 2', sans-serif;
        font-size: 40px;
        font-weight: 300;
    }

    .ccc-widget.ccc-chart div:nth-child(3) {
        padding-left: 44px !important;
    }

    .ccc-widget.ccc-chart div:nth-child(4) {
        padding-right: 44px !important;
    }

    .ccc-widget.ccc-chart div:last-of-type {
        margin-top: 36px !important;
    }

    /* Bitcoin Converter */
    .bitcoin-converter {
        background-color: #ffb400;
        padding: 31px;
    }

    .bitcoin-converter .cryptonatorwidget {
        padding: 0 !important;
        border: none !important;
    }

    .bitcoin-converter table {
        border: none;
        background-color: #ffb400;
    }

    .bitcoin-converter table tbody tr td {
        border: none;
        padding: 9px;
    }

    .bitcoin-converter input,
    .bitcoin-converter select {
        border-radius: 2px;
        background-color: #ffffff;
        height: 53px !important;
        line-height: 53px;
        font-family: 'Roboto', sans-serif;
        color: #9b9b9b;
        font-size: 13px !important;
        font-weight: 400;
        border: none;
        padding-left: 16px;
    }

    .logo-about {

        position: relative;
        left: 163px;

    }

    /* =================== */
</style>

<body id="bg">
<div class="page-wraper">
    <!-- HEADER START -->
    <header class="site-header header-style-3 topbar-transparent">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="wt-topbar-right">
                            <div class=" language-select pull-right">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Language
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#">
                                                <img src="images/united-states.png" alt="">English</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="images/france.png" alt="">French</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="images/germany.png" alt="">German</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-unstyled e-p-bx pull-right" style="position: relative; top: 16px;">@guest
                                    <li><a href="#" data-toggle="modal" data-target="#Login-form"><i
                                                class="fa fa-user"></i>Login</a>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#Register-form"><i
                                                class="fa fa-sign-in"></i>Register</a>
                                    </li>@endguest</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar">
                <div class="container">
                    <div class="logo-header mostion">
                        <a href="/" class="MyLink">
                            <img class="logo-dark" src="{{asset('img/logo1.png')}}" style="position: relative;top: 8px!important;
" alt="{{config('app.name')}}" width="120" height="50">
                        <!-- <img class="logo-dark" src="{{asset('img/logo1.png')}}" style="" alt="{{config('app.name')}}" width="15" height="20"> -->
                        </a>
                    </div>
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- ETRA Nav -->
                    <div class="extra-nav">
                        <div class="extra-cell"><a href="#search" class="site-search-btn"><i class="fa fa-search"
                                                                                             style="font-size: 24px; color: #fff;"></i></a>
                        </div>
                    </div>
                    <!-- SITE Search -->
                    <div id="search" class=""><span class="close"></span>
                        <form role="search" id="searchform" action="http://thewebmax.com/search" method="get"
                              class="radius-xl">
                            <div class="input-group">
                                <input value="" name="q" type="search" placeholder="Type to search"> <span
                                    class="input-group-btn"><button type="button" class="search-btn"><i
                                            class="fa fa-search"></i></button></span>
                            </div>
                        </form>
                    </div>
                    <!-- MAIN Vav -->
                    <div class="header-nav navbar-collapse collapse ">
                        <ul class=" nav navbar-nav">
                            <li class="active has-child"><a href="/">Home</a>
                                <div class=" glyphicon glyphicon-plus submenu-toogle"></div>
                            </li>{{--@auth
								<li class="has-child"> <a href="#prices">invest</a>
									<div class=" glyphicon glyphicon-plus submenu-toogle"></div>
								</li>@endauth--}}
                            <li class="has-child"><a href="#how-it-work">HOW IT WORK</a>
                                <div class=" glyphicon glyphicon-plus submenu-toogle"></div>
                            </li>
                            <li class="has-child"><a href="#bitcoin-price">PRICES</a>
                                <div class=" glyphicon glyphicon-plus submenu-toogle"></div>
                            </li>
                            <li class="has-child"><a href="#about-us">ABOUT
                                    US{{--<i class="fa fa-chevron-down" style="color: #fff;"></i>--}}</a>
                            </li>@auth
                                <li class="has-child"><a href="#">{{Auth::user()->fullName()}}<i
                                            class="fa fa-chevron-down" style="color: #fff;"></i></a>
                                    <div class=" glyphicon glyphicon-plus submenu-toogle"></div>
                                    <ul class="sub-menu">
                                        <li><a href="/dashboard">Dashboard</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">@csrf</form>
                                        </li>
                                    </ul>
                                </li>@endauth {{--
								<div class="wrapper">
									<div class="navbar">
										<div class="right">
											<ul>
												<li>
													<a href="#"> <span>Admin</span>
														</p>
														<img src="./138-1387631_login-comments-windows-10-person-icon.png" alt="Admin" width="20" height="20"><i class="fas fa-angle-down"></i>
													</a>
													<div class="dropdown">
														<ul>
															<li><a href="#"><i class="fas fa-user"></i> Dashboard</a>
															</li>
															<!-- <li><a href="#"><i class="fas fa-sliders-h"></i> Settings</a></li> -->
															<li><a href="#"><i class="fas fa-sign-out-alt"></i> Signout</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<script>
									document.querySelector(".right ul li").addEventListener("click", function(){
										  this.classList.toggle("active");
									});
								</script>--}}
                            <style>
                                @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');


                                * {
                                    margin: 0;
                                    padding: 0;
                                    box-sizing: border-box;
                                    list-style: none;
                                    text-decoration: none;
                                    font-family: 'Josefin Sans', sans-serif;
                                }

                                body {
                                    background: #000;
                                }

                                .wrapper {
                                    position: absolute;
                                    top: 35%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                }

                                .wrapper .navbar {
                                    /* width: 420px; */
                                    background: #fff;
                                    display: flex;
                                    justify-content: space-between;
                                    padding: 10px 25px;
                                    border-radius: 5px;
                                }

                                .wrapper .navbar ul li a {
                                    color: #644def;
                                }

                                .wrapper .navbar .left ul,
                                .wrapper .navbar .right ul li a {
                                    display: flex;
                                    align-items: center;
                                    height: 40px;
                                }

                                .wrapper .navbar .left ul li,
                                .wrapper .navbar .right img {
                                    margin: 0 10px;
                                }

                                .wrapper .navbar .right a {
                                    text-align: right;
                                }

                                .wrapper .navbar .right a span {
                                    font-size: 10px;
                                }

                                .wrapper .navbar .right ul li {
                                    position: relative;
                                }

                                .wrapper .navbar .right ul li .dropdown {
                                    position: absolute;
                                    top: 65px;
                                    right: 0;
                                    background: #fff;
                                    padding: 10px 25px;
                                    border-radius: 5px;
                                    display: none;
                                }

                                .wrapper .navbar .right ul li .dropdown .fas {
                                    margin-right: 10px;
                                }

                                .wrapper .navbar .right ul li .dropdown:before {
                                    content: "";
                                    position: absolute;
                                    top: -20px;
                                    left: 50%;
                                    transform: translateX(-50%);
                                    border: 10px solid;
                                    border-color: transparent transparent #fff transparent;
                                }

                                .wrapper .navbar .right ul li.active .dropdown {
                                    display: block;
                                }
                            </style>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->
    <!-- CONTENT START -->
    <div class="page-content" style="background-color: #000;">
        <!-- SLIDER START -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <!-- START REVOLUTION SLIDER 5.4.1 -->
                    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                         data-alias="typewriter-effect" data-source="gallery">
                        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;"
                             data-version="5.4.1">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1000" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="images/main-slider/slider2/slide11.jpg" data-rotate="0"
                                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                    data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slider2/slide11.jpg" alt=""
                                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"
                                         class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                         data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 12;background-color:rgba(2, 14, 34, 0.9);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>
                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-100-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['308','308','308','308']"
                                         data-fontsize="['60','60','60','60']"
                                         data-lineheight="['110','110','110','110']" data-width="['6','6','6','6']"
                                         data-height="['110,'110','110','110']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    ">
                                        <!-- <div class="bg-primary">&nbsp;</div> --></div>
                                    <!-- LAYER NR. 3 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-100-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                         data-fontsize="['55','55','55','45']" data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">
                                        <div
                                            style="font-family: 'Poppins', sans-serif; text-transform:uppercase;color:aliceblue;">
                                            <span class="text-white" style="padding-right:10px;">Earn Up to</span><span
                                                class="text-primary">200%</span> ROI
                                        </div>
                                    </div>
                                    <!-- LAYER NR. 4 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-100-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['360','360','360','360']"
                                         data-fontsize="['53','53','53','45']" data-lineheight="['70','70','70','75']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                            <span class="text-primary" style="padding-right:10px;">DOUBLE UP</span><span
                                                class="text-white">INVEST</span>
                                        </div>
                                    </div>
                                    <!-- LAYER NR. 5 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme" id="slide-100-layer-5"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                         data-y="['top','top','top','top']" data-voffset="['440','440','440','440']"
                                         data-fontsize="['16','16','16','30']" data-lineheight="['30','30','30','40']"
                                         data-width="['600','600','600','600']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    font-weight: bold;
                                    color:#fff;
                                    border-width:0px;"> <span
                                            style="font-family: 'Poppins', sans-serif;">Welcome to <span
                                                style="color: #ffb631;">&nbsp;CRYPTO BOLT&nbsp;</span> Private &amp; Secure; Invest your Earnings in our Platform, No Investment Fees. Get Up to $250 for referal!
											<br>
                                            <!-- You also get a 10% cash bank After 3 Months! -->
											</span>
                                    </div>
                                    <!-- LAYER NR. 6 [ for see all service botton ] -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-100-layer-6" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['530','530','530','600']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;"> <a href="#" class="site-button  slider-btn-left" style="pointer-events: none;">Login</a>
                                </div> -->
                                    <!-- LAYER NR. 7 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-100-layer-7"
                                         data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index:13;
                                    text-transform:uppercase;
                                    font-weight:500;
                                    ">
                                        <!-- <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a> -->
                                    </div>
                                    <!-- LAYER NR. 8 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-100-layer-8"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['bottom','bottom','bottom','bottom']"
                                         data-voffset="['100','100','100','100']" data-frames='[
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' style="z-index: 13;">
                                        <img src="images/main-slider/slider2/earth.png" alt="" class="spin-city">
                                    </div>
                                    <!-- LAYER NR. 9 [ for more detail botton ] -->
                                    <div id="example" class="tp-caption tp-resizeme" id="slide-100-layer-9"
                                         data-x="['right','right','right','right']"
                                         data-hoffset="['120','120','120','120']"
                                         data-y="['bottom','bottom','bottom','bottom']"
                                         data-voffset="['180','180','180','180']" data-height="none"
                                         data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                        <img src="images/main-slider/slider2/bitcoin.png" alt="">
                                        <img src="images/main-slider/slider2/1200px-Ethereum-icon-purple.svg.png"
                                             alt="">
                                        <img src="images/main-slider/slider2/litecoin-34-646075.png" alt="">
                                    </div>
                                    <style>
                                        @-webkit-keyframes cf4FadeInOut {
                                            0% {
                                                opacity: 1;
                                            }
                                            17% {
                                                opacity: 1;
                                            }
                                            25% {
                                                opacity: 0;
                                            }
                                            92% {
                                                opacity: 0;
                                            }
                                            100% {
                                                opacity: 1;
                                            }
                                        }


                                        #example {
                                            position: relative;
                                            height: 281px;
                                            width: 450px;
                                            margin: 0 auto;

                                        }

                                        #example img {

                                            position: absolute;
                                            left: 110px;
                                            bottom: 30px;
                                        }

                                        #example img {
                                            -webkit-animation-name: cf4FadeInOut;
                                            -webkit-animation-timing-function: ease-in-out;
                                            -webkit-animation-iteration-count: infinite;
                                            -webkit-animation-duration: 8s;

                                            -moz-animation-name: cf4FadeInOut;
                                            -moz-animation-timing-function: ease-in-out;
                                            -moz-animation-iteration-count: infinite;
                                            -moz-animation-duration: 8s;

                                            -o-animation-name: cf4FadeInOut;
                                            -o-animation-timing-function: ease-in-out;
                                            -o-animation-iteration-count: infinite;
                                            -o-animation-duration: 8s;

                                            animation-name: cf4FadeInOut;
                                            animation-timing-function: ease-in-out;
                                            animation-iteration-count: infinite;
                                            animation-duration: 8s;
                                        }

                                        #example img:nth-of-type(1) {
                                            -webkit-animation-delay: 4s;
                                            -moz-animation-delay: 4s;
                                            -o-animation-delay: 4s;
                                            animation-delay: 4s;
                                        }

                                        #example img:nth-of-type(2) {
                                            -webkit-animation-delay: 2s;
                                            -moz-animation-delay: 1s;
                                            -o-animation-delay: 1s;
                                            /* animation-delay: 1s; */
                                        }

                                        #example img:nth-of-type(3) {
                                            -webkit-animation-delay: 0s;
                                            -moz-animation-delay: 0s;
                                            -o-animation-delay: 0s;
                                            animation-delay: 0s;
                                        }

                                        /* #example img:nth-of-type(4) {
                                          -webkit-animation-delay: 5s;
                                          -moz-animation-delay: 5s;
                                          -o-animation-delay: 5s;
                                          animation-delay: 5s;
                                        } */
                                    </style>
                                </li>
                                <!-- SLIDE 2 -->
                                <li data-index="rs-1001" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="images/main-slider/slider2/slide22.jpg" data-rotate="0"
                                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                    data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slider2/slide11.jpg" alt=""
                                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"
                                         class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " id="slide-101-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                         data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 12;background-color:rgba(2, 14, 34, 0.9);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>
                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-101-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['308','308','308','308']"
                                         data-fontsize="['60','60','60','60']"
                                         data-lineheight="['110','110','110','110']" data-width="['6','6','6','6']"
                                         data-height="['110,'110','110','110']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    ">
                                        <!-- <div class="bg-primary">&nbsp;</div> --></div>
                                    <!-- LAYER NR. 3 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-101-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                         data-fontsize="['55','55','55','45']" data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">
                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase; ">
                                            <span class="text-white" style="padding-right:10px;">Crypto</span><span
                                                class="text-primary">Invest</span>
                                        </div>
                                    </div>
                                    <!-- LAYER NR. 4 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-101-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['360','360','360','360']"
                                         data-fontsize="['53','53','53','45']" data-lineheight="['70','70','70','70']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                            <span class="text-primary" style="padding-right:10px;">Easy & </span><span
                                                class="text-white">Secure way</span>
                                        </div>
                                    </div>
                                    <!-- LAYER NR. 5 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme" id="slide-101-layer-5"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                         data-y="['top','top','top','top']" data-voffset="['440','440','440','440']"
                                         data-fontsize="['16','16','16','30']" data-lineheight="['30','30','30','40']"
                                         data-width="['600','600','600','600']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    font-weight: bold;
                                    color:#fff;
                                    border-width:0px;"><span style="font-family: 'Poppins', sans-serif;">Invest and Earn anywhere, We accept Bitcoin from all over the world by one single click!</span>
                                    </div>
                                    <!-- LAYER NR. 6 [ for see all service botton ] -->
                                    <!-- <div class="tp-caption tp-resizeme" id="slide-101-layer-6" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['530','530','530','600']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;"> <a href="javascript:;" class="site-button slider-btn-left" style="pointer-events: none;">Login</a>
                                </div> -->
                                    <!-- LAYER NR. 7 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-101-layer-7"
                                         data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index:13;
                                    text-transform:uppercase;
                                    font-weight:500;
                                    ">
                                        <!-- <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a> -->
                                    </div>
                                    <!-- LAYER NR. 8 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-101-layer-8"
                                         data-x="['right','right','right','right']"
                                         data-hoffset="['-100','-100','-100','-100']"
                                         data-y="['bottom','bottom','bottom','bottom']"
                                         data-voffset="['-650','-650','-650','-650']" data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         style="z-index: 13;">
                                        <!-- <img src="images/main-slider/slider2/earth2.png" alt="" class="spin-city"> -->
                                    </div>
                                    <!-- LAYER NR. 10 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-100-layer-8"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['bottom','bottom','bottom','bottom']"
                                         data-voffset="['100','100','100','100']" data-frames='[
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' style="z-index: 13;">
                                        <img src="images/main-slider/slider3/earth-2.png" alt="">
                                    </div>
                                    <!-- LAYER NR. 9 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-100-layer-9"
                                         data-x="['right','right','right','right']"
                                         data-hoffset="['360','360','360','360']" data-y="['top','top','top','top']"
                                         data-voffset="['300','300','300','300']" data-height="none"
                                         data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":4500,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                        <img src="images/main-slider/slider3/map-marker.png" alt="" class="floating">
                                    </div>
                                    <!-- LAYER NR. 10 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-100-layer-10"
                                         data-x="['right','right','right','right']"
                                         data-hoffset="['240','120','120','120']" data-y="['top','top','top','top']"
                                         data-voffset="['490','500','500','500']" data-height="none"
                                         data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                         data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":2000,"to":"o:1;","delay":4000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                        <img src="images/main-slider/slider3/map-marker.png" alt="" class="floating">
                                    </div>
                                    <!-- LAYER NR. 11 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-100-layer-11"
                                         data-x="['right','right','right','right']" data-hoffset="['80','80','80','80']"
                                         data-y="['top','top','top','top']" data-voffset="['250','250','250','250']"
                                         data-height="none" data-whitespace="nowrap" data-type="image"
                                         data-responsive_offset="on" data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":3000,"to":"o:1;","delay":3500,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                        <img src="images/main-slider/slider3/map-marker.png" alt="" class="floating">
                                    </div>
                                    <!-- LAYER NR. 12 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-100-layer-12"
                                         data-x="['right','right','right','right']" data-hoffset="['70','70','70','70']"
                                         data-y="['top','top','top','top']" data-voffset="['380','380','380','380']"
                                         data-height="none" data-whitespace="nowrap" data-type="image"
                                         data-responsive_offset="on" data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":3500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                        <img src="images/main-slider/slider3/map-marker.png" alt="" class="floating">
                                    </div>
                                </li>
                                <!-- SLIDE  3 -->
                                <li data-index="rs-1002" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                    data-easein="default" data-easeout="default" data-masterspeed="default"
                                    data-thumb="images/main-slider/slider2/slide11.jpg" data-rotate="0"
                                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                    data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/slider2/slide11.jpg" alt=""
                                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"
                                         class="rev-slidebg" data-no-retina/>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 [ for overlay ] -->
                                    <div class="tp-caption tp-shape tp-shapewrapper " id="slide-102-layer-1"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                         data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                         data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                         data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         style="z-index: 12;background-color:rgba(2, 14, 34, 0.9);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>
                                    <!-- LAYER NR. 2 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-102-layer-2"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                         data-y="['top','top','top','top']" data-voffset="['308','308','308','308']"
                                         data-fontsize="['60','60','60','60']"
                                         data-lineheight="['110','110','110','110']" data-width="['6','6','6','6']"
                                         data-height="['110,'110','110','110']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    ">
                                        <!-- <div class="bg-primary">&nbsp;</div> --></div>
                                    <!-- --------------------------------------------------------                                  -->
                                    <!-- LAYER NR. 3 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-102-layer-3"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                         data-fontsize="['55','55','55','45']" data-lineheight="['60','60','60','65']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    color: rgb(75, 57, 65);
                                    border-width:0px;">
                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase; ">
                                            <span class="text-primary" style="padding-right:10px;">Grow</span><span
                                                class="text-white">with us</span>
                                        </div>
                                    </div>
                                    <!-- LAYER NR. 4 [ for title ] -->
                                    <div class="tp-caption   tp-resizeme" id="slide-102-layer-4"
                                         data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                         data-y="['top','top','top','top']" data-voffset="['360','360','360','360']"
                                         data-fontsize="['53','53','53','45']" data-lineheight="['70','70','70','70']"
                                         data-width="['700','700','700','700']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    border-width:0px;">
                                        <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                            <span class="text-white"
                                                  style="padding-right:10px;">Earn with us </span><span
                                                class="text-primary"></span>
                                        </div>
                                    </div>
                                    <!-- LAYER NR. 5 [ for paragraph] -->
                                    <div class="tp-caption  tp-resizeme" id="slide-102-layer-5"
                                         data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                         data-y="['top','top','top','top']" data-voffset="['440','440','440','440']"
                                         data-fontsize="['16','16','16','30']" data-lineheight="['30','30','30','40']"
                                         data-width="['600','600','600','600']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    font-weight: bold;
                                    color:#fff;
                                    border-width:0px;"><span style="font-family: 'Poppins', sans-serif;">Just start investing with us and enjoy our best Interest While we do The rest for you.</span>
                                    </div>
                                    <!-- LAYER NR. 7 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-102-layer-7"
                                         data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                         data-y="['top','top','top','top']" data-voffset="['530','530','530','600']"
                                         data-lineheight="['none','none','none','none']"
                                         data-width="['300','300','300','300']"
                                         data-height="['none','none','none','none']"
                                         data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                         data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]" style="z-index:13;
                                    text-transform:uppercase;
                                    font-weight:500;
                                    ">
                                        <!-- <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a> -->
                                    </div>
                                    <!-- LAYER NR. 8 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-101-layer-8"
                                         data-x="['right','right','right','right']"
                                         data-hoffset="['279','279','279','279']" data-y="['top','top','top','top']"
                                         data-voffset="['180','180','180','180']" data-frames='[{"from":"x:-100;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         style="z-index: 13;">
                                        <img src="images/main-slider/slider2/plant.png" alt="" class="plant side-plant">
                                        <style>
                                            .plant {

                                                position: relative !important;
                                                left: 50px !important;
                                            }
                                        </style>
                                    </div>
                                    <!-- LAYER NR. 9 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-101-layer-9"
                                         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="[''180,'180','180','180']"
                                         data-frames='[{"from":"x:100;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         style="z-index: 13;">
                                        <!-- <img src="images/main-slider/slider2/agent.png" alt="" style="position: relative!important; top:270px!important; width:200px!important;height:200px!important;"> -->
                                    </div>
                                    <!-- LAYER NR. 10 [ for more detail botton ] -->
                                    <div class="tp-caption tp-resizeme" id="slide-101-layer-10"
                                         data-x="['right','right','right','right']"
                                         data-hoffset="['-80','-80','-80','-80']" data-y="['top','top','top','top']"
                                         data-voffset="[''100,'100','100','100']" data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":4000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         style="z-index: 12;">
                                        <!-- <img src="images/main-slider/slider3/shadow-bg1.png" alt=""> -->
                                    </div>
                            </ul>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- SLIDER END -->
        <!-- MARQUEE SCROLL -->
        <!-- <div class="bg-black marquee marquee-custom">
            <div class="TickerNews" id="T1">
                <div class="ti_wrapper">
                    <div class="ti_slide">
                        <div class="ti_content">
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/bitcoin.png" alt=""><span>BTC: </span><span>$ 10,633.1</span><span class="text-yellow p-lr5">0.97 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/bitcoin.png" alt=""><span>BTC: </span><span>¥ 68,008.1</span><span class="text-danger p-lr5">0.00 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/bitcoin.png" alt=""><span>BTC: </span><span>€ 8,699.23</span><span class="text-white p-lr5">1.08 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/Ethereum.png" alt=""><span>ETH: </span><span>Ƀ 0.08160</span><span class="text-green p-lr5">-0.28 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/Ethereum.png" alt=""><span>ETH: </span><span>$ 867.93</span><span class="text-danger p-lr5">-0.60 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/Ethereum.png" alt=""><span>ETH: </span><span>¥ 5,549.46</span><span class="text-white p-lr5">-0.28 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/Ethereum.png" alt=""><span>ETH: </span><span>€ 709.94</span><span class="text-gray p-lr5">0.26 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/litecoin.png" alt=""><span>LTC: </span><span>Ƀ 0.01956</span><span class="text-danger p-lr5">-0.20 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/litecoin.png" alt=""><span>LTC: </span><span>$ 208.06</span><span class="text-green p-lr5">-1.97 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/litecoin.png" alt=""><span>LTC: </span><span>¥ 1,330.24</span><span class="text-white p-lr5">-0.20 %</span>
                                </a>
                            </div>
                            <div class="ti_news">
                                <a href="#">
                                    <img src="images/coin-icon/litecoin.png" alt=""><span>LTC: </span><span>€ 169.91</span><span class="text-yellow p-lr5">-1.29 %</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- MARQUEE SCROLL SECTION  END -->
        <!-- OUR VALUE SECTION START -->
        <!-- OUR VALUE SECTION  END -->
        <!-- ABOUT COMPANY SECTION START -->
        <div id="bitcoin-price" class="section-full home-about-section p-tb80 bg-no-repeat bg-bottom-right bg-gray"
             style="background-image:url(images/background/bg-coin.png);background-color: #000;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <p class="italic" id="pricin">* Price &amp; chart conversion through BTC</p>
                        <div class="bitcoin-chart ">
                            <!-- <script type="text/javascript" async="" src="https://widgets.cryptocompare.com/serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC&amp;tsyms=USD,EUR,CNY,GBP&amp;app=local"></script>  -->
                        </div>
                        <script type="text/javascript" async=""
                                src="https://widgets.cryptocompare.com/serve/v2/coin/chart?fsym=BTC&amp;tsym=USD&amp;period=1M&amp;app=local"></script>
                        <iframe class="chartjs-hidden-iframe"
                                style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="p-b20 text-left"><span
                                class="wt-title-subline font-16 text-gray-dark m-b15  wow fadeInUp"
                                data-wow-duration="1s" data-wow-delay="0s">What is bitcoin</span>
                            <h2 class="text-uppercase wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">New
                                Currency Bitcoin</h2>
                            <div class="wt-separator-outer">
                                <div class="wt-separator bg-primary"></div>
                            </div>
                        </div>
                        <div class="section-content  wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="wt-box">
                                <p><strong>Cryptocurrencies have become established investment commodities among major
                                        financial institutions, and have even been adopted by countries such as South
                                        Korea,Japan, united-states and Others. However, as with any investment there are
                                        benefits linked to market movements!
                                    </strong>
                                </p>
                                <p class="N wow slideInUp">Now you can start Investing Bitcoin, Ethereum and many
                                    cryptocurrencies fast, easily and safely from where ever you are. With great margin
                                    trading leverage and short sell options available with quick deposit &amp;
                                    withdrawal capability, you can start trading with us in seconds.</p>
                                <!-- <a href="#" class="site-button text-uppercase m-r15">Read More</a> -->
                                <!-- <a href="#contact-us" class="site-button-secondry text-uppercase">Contact us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT COMPANY SECTION  END -->
        <!-- WHY CHOOSE US SECTION START  -->
        <div class="section-full bg-white p-tb90 " style="background-color: #000!important;">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head text-center"><span
                        class="wt-title-subline font-16 text-gray-dark m-b15 wow slideInUp">Buy and Sell Bitcoin</span>
                    <h2 class="text-uppercase wow slideInUp">Why Choose Bitcoin</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-primary"></div>
                    </div>
                    <p style="
    color: #ccc;
    font-family: Calibri,sans-serif,serif,EmojiFont;
    font-size: 15px;
" class="ex wow slideInUp">Experts have different opinions about the future of bitcoin, there is nothing to worry about
                        investing in bitcoin as it is one of the best ways to make huge profits asof today.</p>
                </div>
                <!-- TITLE END-->
                <div class="section-content hover-block-outer" data-toggle="tab-hover">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 m-b30  p-t30">
                            <div class="wt-icon-box-wraper right p-a20 wow slideInUp" data-target="#tab1"
                                 data-toggle="tab">
                                <div class="icon-md text-primary"><span class="icon-cell  text-primary"><img
                                            src="images/icon/pick-17.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Safe and Secure</h4>
                                    <p style="
    font-family: Calibri,sans-serif,serif,EmojiFont;
    padding: 9px;
">Stop loss and take profit orders will help secure your investment. The system will automatically execute trades to
                                        realise gains.</p>
                                </div>
                            </div>
                            <div class="wt-icon-box-wraper right p-a20 wow slideInUp" data-target="#tab2"
                                 data-toggle="tab">
                                <div class="icon-md text-primary"><span class="icon-cell  text-primary"><img
                                            src="images/icon/pick-29.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Instant Invest</h4>
                                    <p>Select a specific volume and price; the order should be processed instantly.</p>
                                </div>
                            </div>
                            <div class="wt-icon-box-wraper right p-a20 wow slideInUp" data-target="#tab3"
                                 data-toggle="tab">
                                <div class="icon-md text-primary"><span class="icon-cell  text-primary"><img
                                            src="images/icon/pick-28.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Recurring Investing</h4>
                                    <p style="
    font-size: 16px;
    font-family: Calibri,sans-serif,serif,EmojiFont;
">Purchase asset depends on agreed item upon price. The purchase will continue automatically until you cancel the
                                        service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30 circle-content-pic wow slideInUp">
                            <div class="tab-content ">
                                <div id="tab1" class="tab-pane active">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20 text-center">
                                            <img src="images/ipad/safe.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20 text-center">
                                            <img src="images/ipad/Trading.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20 text-center">
                                            <img src="images/ipad/buying.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="tab4" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20 text-center">
                                            <img src="images/ipad/investment.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="tab5" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20 text-center">
                                            <img src="images/ipad/insurance.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div id="tab6" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20 text-center">
                                            <img src="images/ipad/transaction.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 m-b30  p-t30">
                            <div class="wt-icon-box-wraper left p-a20  wow slideInUp" data-target="#tab4"
                                 data-toggle="tab">
                                <div class="icon-md text-primary"><span class="icon-cell  text-primary"><img
                                            src="images/icon/pick-19.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Investment Planning</h4>
                                    <p style="
    font-size: 16px;
    font-family: Calibri,sans-serif,serif,EmojiFont;
">We help you identifying your financial goals and converting them building a plan.</p>
                                </div>
                            </div>
                            <div class="wt-icon-box-wraper left p-a20 wow slideInUp" data-target="#tab5"
                                 data-toggle="tab">
                                <div class="icon-md text-primary"><span class="icon-cell  text-primary"><img
                                            src="images/icon/pick-12.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Covered By Insurance</h4>
                                    <p style="
    font-family: Calibri,sans-serif,serif,EmojiFont;
    font-size: 16px;
">We help you manage your Risk.</p>
                                </div>
                            </div>
                            <div class="wt-icon-box-wraper left p-a20 wow slideInUp" data-target="#tab6"
                                 data-toggle="tab">
                                <div class="icon-md text-primary"><span class="icon-cell  text-primary"><img
                                            src="images/icon/pick-38.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Bitcoin Transaction</h4>
                                    <p style="
    font-size: 15px;
    font-family: Calibri,sans-serif,serif,EmojiFont;
">Make transfer anywhere in the world via wallet or BITcoin ATM if available in your country.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COMPANY DETAIL SECTION End -->
        <!-- HOW IT WORK SECTION START  -->
        <div class="section-full  p-t80 p-b80 bg-gray" id="how-it-work">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head text-center"><span class="wt-title-subline font-16 text-gray-dark m-b15">Three steps bitcoin</span>
                    <h2 class="text-uppercase wow slideInUp">How It Work</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-primary"></div>
                    </div>
                    <p style="
    font-family: Calibri,sans-serif,serif,EmojiFont;
    font-size: 15px;
    color: #ccc;
" class="invest&learn wow fadeInUp">Learning about bitcoin investment and making profits is very easy. Using great
                        platforms like Cryptobolt private &amp; Secure, it very easy for new investors to learn and
                        understand the hidden bitcoin secrets. It takes considerably less time compared to other
                        investments platforms.</p>
                </div>
                <!-- TITLE END-->
                <div class="section-content no-col-gap">
                    <div class="row">
                        <!-- COLUMNS 1 -->
                        <div class="col-md-4 col-sm-4 step-number-block">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5 wow fadeInUp"
                                 data-wow-duration="2s" data-wow-delay="1s">
                                <div class="icon-lg text-primary m-b20">
                                    <a href="#" class="icon-cell">
                                        <img src="images/icon/pick-4.png" alt="">
                                    </a>
                                </div>
                                <div class="icon-content ">
                                    <div class="step-number">1</div>
                                    <h4 class="wt-tilte text-uppercase font-weight-500" style="">Open an Account</h4>
                                    <p style="color: #000;">Create CRYPTO BOLT Account for free. No credit card
                                        information needed. Once your Registration is accepted, It's quite easy & you'll
                                        gain access to all our live investment opportunities, as well as be able to
                                        start raising investment.</p>
                                    <!-- <p>Once your Registration is accepted,you will automatically become a newest member of the investment platform.</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-md-4 col-sm-4 step-number-block">
                            <div class="wt-icon-box-wraper  p-a30 center bg-secondry m-a5 wow fadeInUp"
                                 data-wow-duration="2s" data-wow-delay="2s">
                                <div class="icon-lg m-b20">
                                    <a href="#" class="icon-cell">
                                        <img src="images/icon/pick-28.png" alt="">
                                    </a>
                                </div>
                                <div class="icon-content text-white">
                                    <div class="step-number active">2</div>
                                    <h4 class="wt-tilte text-uppercase font-weight-500">Make a Deposit</h4>
                                    <p>Fund your account you need working capital to get started in a matter of seconds.
                                        You need invest any amount you desire or more.</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-md-4 col-sm-4 step-number-block">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5 wow fadeInUp"
                                 data-wow-duration="2s" data-wow-delay="3s">
                                <div class="icon-lg text-primary m-b20">
                                    <a href="#" class="icon-cell">
                                        <img src="images/icon/pick-12.png" alt="">
                                    </a>
                                </div>
                                <div class="icon-content wow wow fadeInUp">
                                    <div class="step-number">3</div>
                                    <h4 class="wt-tilte text-uppercase font-weight-500" style="">Invest and Earn</h4>
                                    <p style="color: #000;">Start growing your investment beyond your expectation For
                                        only one Click our Team of experts constantly analyzes individual projects and
                                        save you time .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HOW IT WORK  SECTION END -->
        <!-- SECTION CONTENT START -->
        <div id="about-us" class="section-full  p-tb80 bg-full-height bg-repeat-x graph-slide-image"
             style="background-image:url(images/background/bg-1.jpg);">
            <h2 class="text-uppercase wow fadeInUp" style="text-align: center;">About Us</h2>
            <div class="wt-separator-outer" style="text-align: center;margin-bottom: 30px;">
                <div class="wt-separator bg-primary"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6  clearfix">
                        <div class="bit-converter p-a40 p-b15 bg-white wow fadeInUp">
                            <div class="wt-box">
                                <h2 class="text-uppercase m-t0 text-primary">Currency convertor</h2>
                                <!-- <p>Make your calculation easier by using our tool.</p> -->
                            </div>
                            <div class="currency-calculator sp-one">
                                <div class="btc-clc">
                                    <script type="text/javascript" src="js/calc_widget.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wt-box graph-part-right text-white wow fadeInUp"><strong
                                class="text-uppercase title-first"><a class="header-logo">
                                    <!-- <img class="logo-about" src="./images/logo/ClipartKey_78890.png" style="" alt="" width="15" height="20"> -->
                                    <!-- <span class="logo-about-text" style="font-size: 28px;">Crypto&nbsp;&nbsp;&nbsp;bolt</span> -->
                                </a></strong>
                            <!-- <h6 class="text-uppercase text-primary display-block title-second">Our co-investment platform allows everyday investors to invest alongside institutional and professional investors. </h6> -->
                            <p class="text-white wow fadeInUp" style="margin: 15px;">CRYPTOBOLT © is a cryptocurrency
                                mining and trading company founded by A Group of Professional Specialists , Expert
                                Market strategist, Analysts in cryptocurrency. Our company focus on great income
                                opportunities. We Work With You To Address Your Most Critical Business Priorities, Which
                                is why we only concentrate on sectors where our team have considerable experience and
                                success.</p>
                            <br>
                            <p class="text-white wow fadeInUp" style="margin: 15px;">CRYPTOBOLT © is a professional
                                Investment services company with high support team that emphasis on building up and
                                creating a fast-growing Digital wealth. We make Growth Capital which is registered in
                                Hong Kong ( We have agent around the countries to assist), it authorized and regulated
                                in the South Korea, Japan etc .
                                <br>
                                <br>CRYPTOBOLT © has been operating in South Korea, and Japan locally since 2009, until
                                it was launched globally in 2011, making our investment program available for investors
                                all over the world. In the epoch of development of electronic payment processors, we
                                certainly can't remain aloof. With the advent of Bitcoins we are one of the first to
                                appreciate the potential of cutting-edge digital currency and thoroughly examined all
                                aspects of its mining. This prompted us to launch a data center that would generate
                                cryptocoins.</p>
                            <ul class="list-check-circle primary wow fadeInUp">
                                <!-- <li>Governments support bitcoin . </li> -->
                                <li>Bitcoin is one the backbone of almost all other cryptocurrencies.</li>
                                <li>Bitcoin will ultimately become the world’s most powerful currency.</li>
                                <li>Bitcoin will increase the profits of manifolds for all the bitcoin investors.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-card">
                            <div class="feature-card-icon pt-10"><i class="icon-lock"></i>
                            </div>
                            <div class="feature-card-content">
                                <ul class="list-check-circle primary wow fadeInUp">
                                    <p class="text-white">Main features :</p>
                                    <li class="text-white">High growth opportunities</li>
                                    <li class="text-white">Impact driven investments.</li>
                                    <li class="text-white">Stable Income.</li>
                                    <li class="text-white">Risk management.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="prices" class="section-full pricing  p-t80 p-b80 bg-gray"
                         style="background-image: url(&quot;assets/images/background/;);">
                    <div class="container">
                        <div class="row clearfix">
                            <!-- .col-md-8 end -->
                        </div>
                        <!-- .row end -->
                        <div class="row">
                            <!-- Pricing Packge #1
                    ============================================= -->
                            <div class="col-xs-12 col-sm-12 col-md-4 price-table wow fadeInUp" data-wow-delay="100ms"
                                 style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="pricing-panel">
                                    <!--  Pricing heading  -->
                                    <div class="pricing--heading text--center step-number-block">
                                        <!-- <div class="pricing--icon"> -->
                                        <img src="./images/testimonials/3.jpg" alt="Bitcoin Icon" width="300"
                                             heigh="300" style="
    position: relative;
    right: 8px;
">
                                        <!-- </div> -->
                                    </div>
                                    <!--  Pricing heading  -->
                                    <div class="" style="
    position: relative;
    bottom: 80px;
    color: #000;
    font-family: monospace;
    font-size: larger;
">WANG BAOKUI
                                        <br>Financial Manager
                                    </div>
                                    <!--  Pricing Footer  -->
                                </div>
                            </div>
                            <!-- .pricing-table End -->
                            <!-- Pricing Packge #2
        ============================================= -->
                            <div
                                class=" col-xs-12 col-sm-12 col-md-4 price-table pricing-active wow fadeInUp animated animated"
                                data-wow-delay="200ms"
                                style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                                <div class="pricing-panel">
                                    <!--  Pricing heading  -->
                                    <div class="pricing--heading text--center step-number-block">
                                        <!-- <div class="pricing--icon"> -->
                                        <img src="images/testimonials/2.jpg" alt="Bitcoin Icon" width="300" height="400"
                                             style="
    position: relative;
    right: 8px;
">
                                        <!-- </div> -->
                                    </div>
                                    <!--  Pricing heading  -->
                                    <div class="" style="
    position: relative;
    bottom: 80px;
    color: #000;
    font-family: monospace;
    font-size: larger;
">LIU HONG (CEO)
                                    </div>
                                    <!--  Pricing Footer  -->
                                </div>
                            </div>
                            <!-- .pricing-table End -->
                            <!-- Pricing Packge #1
        ============================================= -->
                            <div class=" col-xs-12 col-sm-12 col-md-4 price-table wow fadeInUp animated animated"
                                 data-wow-delay="300ms"
                                 style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                                <div class="pricing-panel">
                                    <!--  Pricing heading  -->
                                    <div class="pricing--heading text--center step-number-block">
                                        <!-- <div class="pricing--icon"> -->
                                        <img src="./images/testimonials/1.jpg" alt="Bitcoin Icon" width="300"
                                             height="400" style="
    position: relative;
    right: 8px;
">
                                        <!-- </div> -->
                                    </div>
                                    <!--  Pricing heading  -->
                                    <div class="" style="
    position: relative;
    bottom: 80px;
    color: #000;
    font-family: monospace;
    font-size: larger;
">Sūn CHENGUANG
                                        <br>Financial Analyst
                                    </div>
                                    <!--  Pricing Footer  -->
                                </div>
                            </div>
                            <!-- .pricing-table End -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .container end -->
                </section>
            </div>
        </div>
        <!-- SECTION CONTENT  END -->
        <!-- OUR TEAM MEMBER SECTION START -->
        <!-- OUR TEAM MEMBER SECTION END -->{{-- @auth
			<!-- SECTION CONTENT START -->
			<section id="prices" class="section-full pricing  p-t80 p-b80 bg-gray" style="background-image: url(&quot;assets/images/background/;);">
				<div class="container">
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
							<div class="heading heading-1 text--center mb-70">
								<p class="heading--subtitle">Invest Now&nbsp;!</p>
								<h2 class="heading--title text-white">Our Pricing</h2>
								<p class="heading--desc text-white">Our Invest platform enable you to invest as low as $100 for better return of profit, Invest withus to earn every day and forever in your wallet. We accept Investment from all over the world.</p>
							</div>
						</div>
						<!-- .col-md-8 end -->
					</div>
					<!-- .row end -->
					<div class="row">
						<!-- Pricing Packge #1
                    ============================================= -->@if(count($investments) > 0) @foreach($investments as $investment)
						<div class=" col-xs-12 col-sm-12 col-md-4 price-table" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
							<div class="pricing-panel">
								<!--  Pricing heading  -->
								<div class="pricing--heading text--center step-number-block">
									<div class="pricing--icon">
										<img src="./images/client-logo/BitcoinIcon1.png" alt="Bitcoin Icon">
									</div>
									<h4>{{$investment->name}}</h4>
									<p>{{$investment->percentage}}<span class="currency">%</span>
									</p>
									<div class="pricing--desc">{!! $investment->description !!}</div>	<a class="btn btn--secondary btn--bordered btn--rounded" href="#">Invest Now</a>
								</div>
								<!--  Pricing heading  -->
								<div class="pricing--footer" style="
    position: relative;
    bottom: 22px;
">From ${{$investment->priceRangeOne}} to ${{$investment->priceRangeTwo}}</div>
								<!--  Pricing Footer  -->
							</div>
						</div>--}}{{--
						<!-- .pricing-table End -->
						<!-- Pricing Packge #2

        ============================================= -->
						<div class=" col-xs-12 col-sm-12 col-md-4 price-table pricing-active wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
							<div class="pricing-panel">
								<!--  Pricing heading  -->
								<div class="pricing--heading text--center step-number-block">
									<div class="pricing--icon">
										<img src="images/icon/pick-29.png" alt="Bitcoin Icon" width="90" height="80">
									</div>
									<h4>Basic Crypto Plan</h4>
									<p>25<span class="currency">%</span>
									</p>
									<div class="pricing--desc">Enjoy your investment with Bitcoin growing every day.</div>	<a class="btn btn--white btn--bordered btn--rounded" href="#">Invest Now</a>
								</div>
								<!--  Pricing heading  -->
								<div class="pricing--footer">From $500 to $100,000</div>
								<!--  Pricing Footer  -->
							</div>
						</div>
						<!-- .pricing-table End -->
						<!-- Pricing Packge #1
        ============================================= -->
						<div class=" col-xs-12 col-sm-12 col-md-4 price-table wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
							<div class="pricing-panel">
								<!--  Pricing heading  -->
								<div class="pricing--heading text--center step-number-block">
									<div class="pricing--icon">
										<img src="./images/client-logo/BitcoinIcon2.png " alt="Bitcoin Icon">
									</div>
									<h4>Starter Crypto Plan</h4>
									<p>12<span class="currency">%</span>
									</p>
									<div class="pricing--desc">Enjoy your investment with Bitcoin growing every day.</div>	<a class="btn btn--secondary btn--bordered btn--rounded" href="#">Invest Now</a>
								</div>
								<!--  Pricing heading  -->
								<div class="pricing--footer">From $200 to $10,000</div>
								<!--  Pricing Footer  -->
							</div>
						</div>
						<!-- .pricing-table End -->--}}{{-- @endforeach @endif</div>
					<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>
			<!-- SECTION CONTENT  END -->@endauth--}}
    <!-- LATEST BLOG SECTION START -->
        <!-- LATEST BLOG SECTION END -->
        <!-- CONTACT US SECTION END  -->
        <!-- CONTACT US OFFER SECTION END  -->
        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50 bg-center bg-full-height bg-no-repeat" style="
    background-color: black;
">
            <div class="container">
                <!-- TITLE START -->
                <div class="se
ction-head text-center"><span class="wt-title-subline font-16 text-gray-dark m-b15 wow fadeInUp">Our Clients</span>
                    <h2 class="text-uppercase wow fadeInUp">Our Client Say</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-primary"></div>
                    </div>
                </div>
                <!-- TITLE END -->
                <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                <div class="section-content">
                    <div class="owl-carousel home-carousel-1">
                        <div class="item">
                            <div class="testimonial-5 wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                                <div class="testimonial-pic-block radius-bx">
                                    <div class="testimonial-pic radius">
                                        <img src="images/testimonials/pic1.jpeg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph"><span
                                            class="fa fa-quote-left text-primary"></span>
                                        <p>I Fell in love with the platform the moment i saw it. itsclean and simple
                                            design was what sealed the deal for me.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix"><strong class="testimonial-name">Clara
                                            Dandrea</strong>
                                        <span class="testimonial-position text-primary p-t10"><span
                                                class="fa fa-instagram"
                                                style=" position: relative; right: 4px; top: 1px;"> </span><a
                                                href="https://www.instagram.com/">@claradandreadavies</a>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5 wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
                                <div class="testimonial-pic-block radius-bx">
                                    <div class="testimonial-pic radius">
                                        <!-- <img src="images/testimonials/pic2.jpeg" width="132" height="132" alt=""> -->
                                        <img src="images/testimonials/pic4.jpeg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph"><span
                                            class="fa fa-quote-left text-primary"></span>
                                        <p>I've learnrd a lot the financial markets While working with this company.
                                            <br>Now i can invest and Earn money.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix"><strong class="testimonial-name">Danny F.
                                            Michaels</strong>
                                        <span class="testimonial-position text-primary p-t10"><span
                                                class="fa fa-instagram"
                                                style=" position: relative; right: 4px; top: 1px;"></span><a
                                                href="https://www.instagram.com/">@dannyfmichael</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5 wow fadeInDown">
                                <div class="testimonial-pic-block radius-bx">
                                    <div class="testimonial-pic radius">
                                        <img src="images/testimonials/download.jpg" width="132" height="133" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph"><span
                                            class="fa fa-quote-left text-primary"></span>
                                        <p>An easy and affordable way to dive into investing.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix"><strong class="testimonial-name">Eva
                                            Brentford
                                            <span class="testimonial-position text-primary p-t10"><span
                                                    class="fa fa-instagram"
                                                    style=" position: relative; right: 4px; top: 1px;"></span><a
                                                    href="https://www.instagram.com/" style="text-transform: initial;font: icon;
">@evabrentford</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-5">
                                <div class="testimonial-pic-block radius-bx">
                                    <div class="testimonial-pic radius">
                                        <img src="images/testimonials/siss.jpg" width="132" height="132" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph"><span
                                            class="fa fa-quote-left text-primary"></span>
                                        <p style="font-weight: 100;">Contacting support was simple and easy. I was
                                            surprised by how quickly they actually get back to me.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix"><strong class="testimonial-name">Kimberly
                                            K. Kingsley</strong>
                                        <span class="testimonial-position text-primary p-t10"><span
                                                class="fa fa-instagram"
                                                style=" position: relative; right: 4px; top: 1px;"></span><a
                                                href="https://www.instagram.com/">@__kimberlykimmy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECTION CONTENT END -->
        <!-- OUR CLIENT SLIDER START -->
        <div class="section-full overlay-wraper bg-cover bg-repeat-x bg-primary"
             style="background-image:url(images/background/bg-7.png)">
            <div class="container">
                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                    <div class="owl-carousel home-logo-carousel">
                        <!-- COLUMNS 1 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/1.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/2.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/3.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/4.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/5.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/7.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/8.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/9.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 10 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/10.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 11 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/11.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 12 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#">
                                        <img src="images/client-logo/12.png" alt="">
                                        <!-- <a href="javascript:void(0);" class="fa fa-instagram"></a> --></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- IMAGE CAROUSEL START -->
            </div>
        </div>
        <!-- OUR CLIENT SLIDER END -->
    </div>
    <!-- CONTENT END -->
    <!-- FOOTER START -->
    <footer class="site-footer footer-dark bg-no-repeat bg-full-height bg-center "
            style="background-image:url(images/background/footer-bg.jpg);">
        <!-- FOOTER BLOCKES START -->
        <div class="footer-top overlay-wraper">
            <div class="overlay-main bg-black opacity-05"></div>
            <div class="container">
                <div class="row">
                    <!-- ABOUT COMPANY -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="widget widget_about">
                            <h4 class="widget-title text-white">About Company</h4>
                            <div class="logo-footer clearfix p-b15">
                                <p class="zeta color--foxtrot" style="color: #fff; font-weight: 100!important">CRYPTO
                                    BOLT © is a professional investment services company with high support team that
                                    emphasis on building up and creating a fast-growing digital Wealth. We are mainly
                                    registered in Hong Kong &nbsp;( caller assistance in usa No. +1 (310) 421‑1657),&nbsp;it
                                    authorised and regulated in the South Korea,Japan etc.</p>
                            </div>
                        </div>
                    </div>
                    <!-- RESENT POST -->
                    <!-- USEFUL LINKS -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                        <div class="widget widget_services">
                            <!-- <h4 class="widget-title text-white">Useful links</h4> -->
                            <ul>
                                <li><a href="#about-us">About</a>
                                </li>
                                </li>
                                <!-- <li><button id="modal-btn" class="button" data-target="#myModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" style="background:transparent;border:none;">Privacy Policy</button> --></li>
                                <li>
                                    <button id="modal-btn" class="button" data-target="#myModal" data-toggle="modal"
                                            data-backdrop="static" data-keyboard="false"
                                            style="background:transparent;border:none;">Terms &amp; Condition
                                    </button>
                                    <!-- <li><a href="javascript:void(0);">Terms  &amp; Condition</a> --></li>
                                </li>
                                <li><a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- NEWSLETTER -->
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="3s">
                        <div class="elementor-column-wrap  elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div
                                    class="elementor-element elementor-element-4a6c414 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                    data-id="4a6c414" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Risk Warning</h2>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-db58fad elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                    data-id="db58fad" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon"><i aria-hidden="true"
                                                                           class="fas fa-exclamation-triangle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-f9fd469 elementor-widget elementor-widget-text-editor"
                                    data-id="f9fd469" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p style="
    width: 332px;
">Dealing with financial instruments involves significant risk and can result in the loss of your capital when you do
                                                not adhere to the instructions provided by your trader. You should not
                                                spend more than you can afford to lose and should ensure that you fully
                                                understand the risks involved. Using leveraged products may not be
                                                suitable for everyone. Before you use these products, please take into
                                                consideration your level of experience, financial objectives and seek
                                                independent financial advice if necessary. It is the responsibility of
                                                the Client to ascertain whether he/she is permitted to use the services
                                                of the CRYPTO BOLT © brand based on the legal requirements in his/her
                                                country of residence. Click here to read CRYPTO BOLT©’s <a
                                                    style="font-weight: 800;" href="/privacy">PRIVACY POLICY</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-1e0d4b9 elementor-widget elementor-widget-divider"
                                    data-id="1e0d4b9" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">	<span class="elementor-divider-separator">
						</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mcwp-crypto" id="mcwp-322">
            <div class="mcwp-ticker mcwp-footer" data-speed="100" style="opacity: 1;">
                <div class="cc-ticker cc-white-color">
                    <ul class="cc-stats" style="width: 2056px; animation-duration: 20.56s;">
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/bitcoin.png" alt="bitcoin"><b>Bitcoin <span>(BTC)</span>
                                    <span>$ 34,126.00</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/ethereum.png" alt="ethereum"><b>Ethereum <span>(ETH)</span>
                                    <span>$ 1,972.61</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/Tether-logo.png" alt="tether"><b>Tether <span>(USDT)</span>
                                    <span>$ 1.00</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/binance-coin-logo.png" alt="binance-coin"><b>Binance Coin
                                    <span>(BNB)</span> <span>$ 305.58</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/cardano.png" alt="cardano"><b>Cardano <span>(ADA)</span>
                                    <span>$ 1.35</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/dogecoin.png" alt="dogecoin"><b>Dogecoin <span>(DOGE)</span>
                                    <span>$ 0.238921</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/xrp-symbol-white-128.png" alt="xrp"><b>XRP <span>(XRP)</span>
                                    <span>$ 0.652769</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/USD_Coin_icon.png" alt="usd-coin"><b>USD Coin
                                    <span>(USDC)</span> <span>$ 1.00</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/aJGBjJFU_400x400 (1).jpg" alt="polkadot"><b>Polkadot <span>(DOT)</span>
                                    <span>$ 16.09</span></b>
                            </div>
                        </li>
                        <li class="cc-coin">
                            <div>
                                <img src="images/coin-icon/BUSD.png" alt="binance-usd"><b>Binance USD
                                    <span>(BUSD)</span> <span>$ 1.00</span></b>
                            </div>
                        </li>
                        <div class="cc-dup">
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/bitcoin.png" alt="bitcoin"><b>Bitcoin <span>(BTC)</span>
                                        <span>$ 34,126.00</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/ethereum.png" alt="ethereum"><b>Ethereum
                                        <span>(ETH)</span> <span>$ 1,972.61</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/Tether-logo.png" alt="tether"><b>Tether
                                        <span>(USDT)</span> <span>$ 1.00</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/binance-coin-logo.png" alt="binance-coin"><b>Binance Coin
                                        <span>(BNB)</span> <span>$ 305.58</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/cardano.png" alt="cardano"><b>Cardano <span>(ADA)</span>
                                        <span>$ 1.35</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/dogecoin.png" alt="dogecoin"><b>Dogecoin
                                        <span>(DOGE)</span> <span>$ 0.238921</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/xrp-symbol-white-128.png" alt="xrp"><b>XRP
                                        <span>(XRP)</span> <span>$ 0.652769</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/USD_Coin_icon.png" alt="usd-coin"><b>USD Coin <span>(USDC)</span>
                                        <span>$ 1.00</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/aJGBjJFU_400x400.jpg" alt="polkadot"><b>Polkadot <span>(DOT)</span>
                                        <span>$ 16.09</span></b>
                                </div>
                            </li>
                            <li class="cc-coin">
                                <div>
                                    <img src="images/coin-icon/BUSD.png" alt="binance-usd"><b>Binance USD
                                        <span>(BUSD)</span> <span>$ 1.00</span></b>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <style>
        </style>
        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom  overlay-wraper">
            <div class="overlay-main"></div>
            <div class="constrot-strip"></div>
            <div class="container p-t30" style="position: relative;bottom: 20px;
">
                <div class="row">
                    <div class="wt-footer-bot-left"><span class="copyrights-text">© 2021 Your Company. All Rights Reserved.</span>
                    </div>
                    <!-- <div class="center" style="padding: 20px;">
                    <span class="copyrights-text">All investing involves risk.</span>
                </div> -->
                    <!-- <p style="align-items: center;">All investing involves risk</p> -->
                    <!-- <div class="wt-footer-bot-right">
                        <ul class="copyrights-nav pull-right">
                            <li><a href="javascript:void(0);">Terms  & Condition</a>
                            </li>
                            <li><button id="modal-btn" class="button" data-target="#myModal" data-toggle="modal" data-backdrop="static" data-keyboard="false">Privacy Policy</button>
                            </li>
                            <li><a href="contact-1.html">Contact Us</a>
                            </li>
                        </ul>
                    </div> --></div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->
    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>
    </button>
    <!-- MODAL  LOGIN -->
    <div id="Login-form" class="modal fade " role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Login Your Account</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="log-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i
                                        class="fa fa-user cus-icon"></i></span>
                                <input id="email" placeholder="Email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required
                                       autocomplete="email" autofocus>@error('email') <span
                                    class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i
                                        class="fa fa-eye cus-icon"></i></span>
                                <input id="password" placeholder="Password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required
                                       autocomplete="current-password">@error('password') <span
                                    class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                        </div>
                        <button type="submit"
                                class="site-button-secondry text-uppercase btn-block m-b10">Submit
                        </button>
                        <span class="font-12">Don't have an account? <a href="javascript:;"
                                                                        class="text-primary">Register Here</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center">
                        <!-- <a href="/" class="MyLink">
                        <img class="logo-modal" src="./images/logo/ClipartKey_78890.png" alt="" width="15" height="20"><span class="h2 mb-0" style="
font-size: 31px;
FONT-FAMILY: Calibri,sans-serif,serif,EmojiFont;
font-weight: bold;
color: #FF9800;
position: relative;
top: -22px;
left: -13px;
">Crypto&nbsp;&nbsp;&nbsp;bolt</span>
                    </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL  REGISTER -->
    <div id="Register-form" class="modal fade " role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Register here</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="reg-form" method="POST" action="{{route('register')}}">@csrf
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i
                                        class="fa fa-user cus-icon"
                                        style="font-size: 15px;!important"></i></span>
                                <input id="firstname" type="text" placeholder="Firstname"
                                       class="form-control @error('firstname') is-invalid @enderror"
                                       name="firstname" value="{{ old('firstname') }}" required
                                       autocomplete="firstname" autofocus>@error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i
                                        class="fa fa-user cus-icon"
                                        style="font-size: 15px;!important"></i></span>
                                <input id="lastname" type="text" placeholder="Lastname"
                                       class="form-control @error('lastname') is-invalid @enderror"
                                       name="lastname" value="{{ old('lastname') }}" required
                                       autocomplete="lastname" autofocus>@error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i
                                        class="fa fa-envelope cus-icon"
                                        style="font-size: 15px;!important"></i></span>
                                <input id="email" placeholder="Email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required
                                       autocomplete="email" autofocus>@error('email') <span
                                    class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i
                                        class="fa fa-key cus-icon" style="font-size: 15px;"></i></span>
                                <input id="password" placeholder="Password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required
                                       autocomplete="current-password">@error('password') <span
                                    class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                        </div>
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i
                                        class="fa fa-key cus-icon" style="font-size: 15px;"></i></span>
                                <input id="confirm-password" placeholder="Confirm Password"
                                       type="password"
                                       class="form-control @error('password-confirm') is-invalid @enderror"
                                       name="password_confirmation" required
                                       autocomplete="current-password">@error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
                        </div>
                        {{--  <div class="form-group">
                              <div class="input-group"><span class="input-group-addon"><i
                                          class="fa fa-btc cus-icon" style="font-size: 15px;"></i></span>
                                  <select id="cryptocurrency"
                                          class="form-control @error('cryptocurrency') is-invalid @enderror"
                                          name="cryptocurrency">
                                      <option value="btc" selected>Bitcoin</option>
                                      <option value="ltc">Litecoin</option>
                                      <option value="eth">Ethereum</option>
                                  </select>@error('cryptocurrency') <span class="invalid-feedback"
                                                                          role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror</div>
                          </div>
                          <div class="form-group">
                              <div class="input-group"><span class="input-group-addon"><i
                                          class="fa fa-wallet cus-icon"
                                          style="font-size: 15px;"></i></span>
                                  <input id="wallet_address" placeholder="Wallet address"
                                         type="text"
                                         class="form-control @error('wallet_address') is-invalid @enderror"
                                         name="wallet_address"
                                         autocomplete="wallet_address">@error('wallet_address')
                                  <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror</div>
                          </div>--}}
                        <button type="submit"
                                class="site-button-secondry text-uppercase btn-block m-b10">
                            Submit
                        </button>
                        <span class="font-12">Already Have an Account? <a href="javascript:;"
                                                                          class="text-primary">Login</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div class="text-center">
                        <!-- <a href="/" class="MyLink">
                        <img class="logo-modal" src="./images/logo/ClipartKey_78890.png" alt="" width="15" height="20"><span class="h2 mb-0" style="
font-size: 31px;
FONT-FAMILY: Calibri,sans-serif,serif,EmojiFont;
font-weight: bold;
color: #FF9800;
position: relative;
top: -22px;
left: -13px;
">Crypto&nbsp;&nbsp;&nbsp;bolt</span>
                    </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-dot bg-primary" style="background-color: transparent;">
                <!-- <i class="fa fa-bitcoin" style="color: #000; font-size: 30px;"></i> -->
                <img class="logo-dark" src="{{asset('img/logo1.png')}}" style="
" alt="" width="120" height="50">
            </div>
            <!-- <div class="step" id="cssload-s1"></div>
            <div class="step" id="cssload-s2"></div>
            <div class="step" id="cssload-s3"></div> --></div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= -->
<script src="js/jquery-1.12.4.min.js"></script>
<!-- JQUERY.MIN JS -->
<script src="js/bootstrap.min.js"></script>
<!-- BOOTSTRAP.MIN JS -->
<script src="js/bootstrap-select.min.js"></script>
<!-- FORM JS -->
<script src="js/jquery.bootstrap-touchspin.min.js"></script>
<!-- FORM JS -->
<script src="js/magnific-popup.min.js"></script>
<!-- MAGNIFIC-POPUP JS -->
<script src="js/waypoints.min.js"></script>
<!-- WAYPOINTS JS -->
<script src="js/counterup.min.js"></script>
<!-- COUNTERUP JS -->
<script src="js/waypoints-sticky.min.js"></script>
<!-- COUNTERUP JS -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- MASONRY  -->
<script src="js/owl.carousel.min.js"></script>
<!-- OWL  SLIDER  -->
<script src="js/stellar.min.js"></script>
<!-- PARALLAX BG IMAGE   -->
<script src="js/scrolla.min.js"></script>
<!-- ON SCROLL CONTENT ANIMTE   -->
<script src="js/custom.js"></script>
<!-- CUSTOM FUCTIONS  -->
<script src="js/shortcode.js"></script>
<!-- SHORTCODE FUCTIONS  -->
<script src="js/switcher.js"></script>
<!-- SWITCHER FUCTIONS  -->
<script src="js/jquery.bgscroll.js"></script>
<!-- BACKGROUND SCROLL -->
<script src="js/tickerNews.min.js"></script>
<!-- TICKERNEWS-->
<!-- TICKERNEWS FUNCTiON -->
<script type="text/javascript">
    jQuery(function () {
        var timer = !1;
        _Ticker = jQuery("#T1").newsTicker();
        _Ticker.on("mouseenter", function () {
            var __self = this;
            timer = setTimeout(function () {
                __self.pauseTicker();
            }, 200);
        });
        _Ticker.on("mouseleave", function () {
            clearTimeout(timer);
            if (!timer) return !1;
            this.startTicker();
        });
    });
</script>
<!-- REVOLUTION JS FILES -->
<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
<!-- ------------------------ -->
<script src="js/rev-script-1.js"></script>
<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 400, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>
<div style="float: left; margin-right: 1000px;">
    <script src="//code.jivosite.com/widget/XGnbXiV0lS" async></script>
</div>
<script>
    function copy_to_clipBoard() {
        var copyText = document.getElementById("mref-link-buddypress-profile");
        copyText.select();
        document.execCommand("copy");
    }
</script>
</body>
<!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
<script src="plugins/revolution/revolution/js/wow.min.js"></script>
<script src="plugins/revolution/revolution/js/main.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" id="mcwp-crypto-css-css" href="./Privacy Policy – Forbe Capital_files/style41a5.css"
      type="text/css" media="all">

</html>
