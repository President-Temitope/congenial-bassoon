<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register - {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="./images/favicon.png"> -->
    <!-- REG REGISTER VALI FORM -->
    <!-- <link rel="stylesheet" href="asset1/css/bootstrap.min.css">
                <link rel="stylesheet" href="asset1/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="asset1/css/themify-icons.css">
    <link rel="stylesheet" href="asset1/css/metisMenu.css">
    <link rel="stylesheet" href="asset1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset1/css/slicknav.min.css"> <!-- amchart css -->
    <link rel="stylesheet" href="../www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" /> <!-- others css -->
    <link rel="stylesheet" href="asset1/css/typography.css">
    <link rel="stylesheet" href="asset1/css/default-css.css">
    <link rel="stylesheet" href="asset1/css/styles.css">
    <link rel="stylesheet" href="asset1/css/responsive.css"> <!-- modernizr css -->
    <script src="asset1/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="./cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script> <!-- END REG FORM PLUGIN  -->
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="./asset/font-awesome.min.css"> <!-- <link rel="stylesheet" href="./asset/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="./asset/css/magnific-popup.css">
    <link rel="stylesheet" href="./asset/css/select2.min.css"> -->
    <link rel="stylesheet" href="./asset/css/skins/blue.css">
    <link rel="alternate stylesheet" type="text/css" title="blue" href="./asset/css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="./asset/css/styleswitcher.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> <!-- ------- custom from register folder css -------- -->
    <link href="/asset/css/style.css" rel="stylesheet">
    <!------- login animate boot plugin  -->
    <link href="/asset/css/bootstrap-animate.min.css" rel="stylesheet"> <!-- ----- End animate plugin ------ -->
    <!-- Template JS Files -->
    <script src="./asset/js/modernizr.js"></script>
</head>
<style>
    .login-form-head {
        text-align: center;
        background: #111;
        padding: 50px;
    }

    .form-gp.focused label {
        color: #111 !important;
        font-weight: 800 !important;
        margin-bottom: 5px !important;
    }

    .form-gp i {
        position: absolute;
        right: 5px;
        color: #111;
        font-size: 16px;
    }

    a {
        color: #555;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    .login-bg {
        background: #333;
        position: relative;
        z-index: 1;
    }

    .submit-btn-area button:hover {
        background: #fff !important;
        color: #111 !important;
    }

    meter {
        /* Reset the default appearance */
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0 auto 1em;
        width: 100%;
        height: 0.5em;
        /* Applicable only to Firefox */
        background: none;
        background-color: rgba(0, 0, 0, 0.1);
    }

    meter::-webkit-meter-bar {
        background: none;
        background-color: rgba(0, 0, 0, 0.1);
    }

    meter[value="1"]::-webkit-meter-optimum-value {
        background: red;
    }

    meter[value="2"]::-webkit-meter-optimum-value {
        background: yellow;
    }

    meter[value="3"]::-webkit-meter-optimum-value {
        background: orange;
    }

    meter[value="4"]::-webkit-meter-optimum-value {
        background: green;
    }

    /* Gecko based browsers */
    meter[value="1"]::-moz-meter-bar {
        background: red;
    }

    meter[value="2"]::-moz-meter-bar {
        background: yellow;
    }

    meter[value="3"]::-moz-meter-bar {
        background: orange;
    }

    meter[value="4"]::-moz-meter-bar {
        background: green;
    }
</style>
<style>
    .brandnav_logo {
        font-size: 20px;
        color: #000;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
    }
</style>

<body class="auth-page">
    <!-- SVG Preloader Starts -->
    <div id="preloader">
        <div id="preloader-content">
            <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
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
            </svg> -->
            <div id="loader-wrapper">
                <div id="loader"></div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </div> <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container-fluid user-auth">
            <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
                <!-- Logo Starts --> <a class="logo" href="/">
                    <h5 class="brandnav_logo">The <span style="color:#381fff;">OKX </span> Platinum</h5>
                </a> <!-- Logo Ends -->
                <!-- Slider Starts -->
                <div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Indicators Starts -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                    </ol> <!-- Indicators Ends -->
                    <!-- Carousel Inner Starts -->
                    <div class="carousel-inner">
                        <!-- Carousel Item Starts -->
                        <div class="item active item-1">
                            <div>
                                <blockquote>
                                    <p>This is a realistic program for anyone looking for site to invest. Paid to me regularly, keep up good work!</p>
                                    <footer><span>Lucy Smith</span>, England</footer>
                                </blockquote>
                            </div>
                        </div> <!-- Carousel Item Ends -->
                        <!-- Carousel Item Starts -->
                        <div class="item item-2">
                            <div>
                                <blockquote>
                                    <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer service!</p>
                                    <footer><span>Slim Hamdi</span>, Tunisia</footer>
                                </blockquote>
                            </div>
                        </div> <!-- Carousel Item Ends -->
                        <!-- Carousel Item Starts -->
                        <div class="item item-3">
                            <div>
                                <blockquote>
                                    <p>My family and me want to thank you for helping us find a great opportunity to make money online. Very happy with how things are going!</p>
                                    <footer><span>Dalel Boubaker</span>, Russia</footer>
                                </blockquote>
                            </div>
                        </div> <!-- Carousel Item Ends -->
                    </div> <!-- Carousel Inner Ends -->
                </div> <!-- Slider Ends -->
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <!-- Logo Starts --> <a class="visible-xs" href="/">
                    <!-- <img id="logo" class="img-responsive mobile-logo" src="./asset/'img/logo1.png" alt=""
                     style="width: 250px;"> -->
                    <h5 class="mobile-logo">The <span style="color:#381fff;">OKX </span> Platinum</h5>
                </a> <!-- Logo Ends -->
                <div class="form-container">
                    <div>
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <h2 class="title-head hidden-xs">get <span>started</span></h2>
                            <p class="info-form">Open account with us for free!</p>
                        </div> <!-- Section Title Ends -->
                        <!-- Form Starts -->
                        <form method="post" action="{{route('postRegister')}}"> @csrf
                            <!-- Input Field Starts -->
                            <!-- <div class="form-group">
                            <input class="form-control" name="firstname" id="name" placeholder="FIRSTNAME" type="text"
                                   required>
                        </div> -->
                            <!-- <div class=" input-box">
                            <input class="form-control input-field" name="firstname" id="name" placeholder="" type="text" required>
                            <label for="email">FIRSTNAME</label>
                        </div> -->
                            <!-- <div class="form-group">
                            <input class="form-control" name="lastname" id="name" placeholder="LASTNAME" type="text"
                                   required>
                        </div> -->
                            <!-- 
                        <div class=" input-box">
                            <input class="form-control input-field" name="lastname" id="name" placeholder="" type="text" required>
                            <label for="email">LASTNAME</label>
                        </div> -->
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <!-- <div class="form-group">
                            <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email"
                                   required>
                        </div> -->
                            <!-- <div class=" input-box">
                            <input class="form-control input-field" name="email" id="name" placeholder="" type="email" required>
                            <label for="email">EMAIL</label>
                        </div> -->
                            <!-- Input Field Ends -->
                            <!-- <div class="input-box">
                            <input class="input-field" name="phone_number" placeholder="PHONE NUMBER" id="phone"
                                   type="tel">
                        </div> -->
                            <!-- <div class=" form-group">
                            <input class="form-control" name="phone_number" id="phone" placeholder="" type="tel" required>
                            <label for="email">TELEPHONE</label>
                        </div> -->
                            <!-- Input Field Starts -->
                            <!-- <div class="form-group input-box">
                            <input class="form-control input-field" name="password" id="password" placeholder=""
                                   type="password" required>
                                   <label for="email">PASSWORD</label>
                        </div> -->
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <!-- <div class="form-group input-box">
                            <input class="form-control input-field" name="password_confirmation" id="password"
                                placeholder="" type="password" required>
                                <label for="email">CONFRIM PASSWORD</label>
                        </div> -->
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <!-- <div class="form-group">
                            <select class="form-control" name="coin_type" id="password">
                                <option value="btc">Bitcoin</option>
                                <option value="ltc">Litecoin</option>
                                <option value="eth">Ethereum</option>
                            </select>
                        </div> -->
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <!-- === Wallet Field ===== -->
                            <!-- <div class="form-group">
                            <input class="form-control" name="wallet_address" placeholder="WALLET ADDRESS" type="text">
                        </div> -->
                            <!-- Input Field Ends -->
                            <!-- Submit Form Button Starts -->
                            <!-- <div class="form-group">
                            <button class="btn btn-primary" type="submit">create account</button>
                            <p class="text-center">already have an account ? <a href="{{route('login')}}">Login</a>
                        </div> -->
                            <div class="login-form-body">
                                <div class="form-gp"> <label for="exampleInputName1">First Name</label> <input type="text" id="exampleInputName1" name="fname" required> <input type="hidden" class="form-control" name="ref" value="2170"> <input type="hidden" class="form-control" name="sel" value="1a2f">
                                    <div class="text-danger"></div>
                                </div>
                                <div class="form-gp"><label for="exampleInputName1">Last Name</label> <input type="text" id="exampleInputName1" name="lname" required>
                                    <div class="text-danger"></div>
                                </div>
                                <!-- <div class="form-gp"> <label for="exampleInputName1">Username</label> <input type="text" id="exampleInputName1" name="uname" required>
                            <div class="text-danger"></div>
                        </div> -->
                                <div class="form-group input-box"> <input class="input-field" name="phone_number" id="phone" placeholder="" type="tel" required> <!-- <label for="email">TELEPHONE</label> -->
                                </div>
                                <div class="form-gp"> <label for="exampleInputEmail1">Email address</label> <input type="email" id="exampleInputEmail1" name="email" required> <i class="ti-email"></i>
                                    <div class="text-danger"></div>
                                </div>
                                <div class="form-gp"> <label for="exampleInputPassword1">Password</label> <input type="password" name="password" required class="active" id="pass1"> <i id="icon1" class="fa fa-eye-slash"></i>
                                    <div class="text-danger"></div>
                                    <meter max="4" id="password-strength-meter"></meter>
                                    <p id="password-strength-text"></p>
                                </div>
                                <div class="form-gp"> <label for="exampleInputPassword2">Confirm Password</label> <input type="password" class="active" id="pass2" name="cpassword" required> <i id="icon" class="fa fa-eye-slash"></i>
                                    <div class="text-danger"></div>
                                </div>
                                <!-- <div class="submit-btn-area form-group">
                            <button id="form_submit" class="btn btn-primary" type="submit" name="submit">Submit <i class="ti-arrow-right"></i></button> 
                        </div> -->
                                <div class="form-group"> <button id="form_submit" class="btn btn-primary" type="submit" name="submit">create account <i class="ti-arrow-right"></i></button>
                                    <p class="text-center">already &nbsp;have&nbsp; an&nbsp;account? <a href="{{route('login')}}">&nbsp;Login</a>
                                </div>
                                <!-- <div class="form-footer text-center mt-5">
                            <p class="text-muted">Already have an account? <a href="login.html">Sign in</a></p>
                        </div> -->
                            </div> <!-- Submit Form Button Ends -->
                        </form> <!-- Form Ends -->
                    </div>
                </div> <!-- Copyright Text Starts -->
                <p class="text-center copyright-text">Copyright&nbsp;{{date('Y')}}&nbsp;©TheOkxPlatinum </p> <!-- Copyright Text Ends -->
            </div>
        </div>
        <script>
            var inputPass2 = document.getElementById('pass2'),
                icon = document.getElementById('icon');
            icon.onclick = function() {
                if (inputPass2.className == 'active') {
                    inputPass2.setAttribute('type', 'text');
                    icon.className = 'fa fa-eye';
                    inputPass2.className = '';
                } else {
                    inputPass2.setAttribute('type', 'password');
                    icon.className = 'fa fa-eye-slash';
                    inputPass2.className = 'active';
                }
            }
            var inputPass1 = document.getElementById('pass1'),
                icon1 = document.getElementById('icon1');
            icon1.onclick = function() {
                if (inputPass1.className == 'active') {
                    inputPass1.setAttribute('type', 'text');
                    icon1.className = 'fa fa-eye';
                    inputPass1.className = '';
                } else {
                    inputPass1.setAttribute('type', 'password');
                    icon1.className = 'fa fa-eye-slash';
                    inputPass1.className = 'active';
                }
            }
        </script>
        <script>
            var strength = {
                0: "Worst",
                1: "Bad",
                2: "Weak",
                3: "Good",
                4: "Strong"
            }
            var password = document.getElementById('pass1');
            var meter = document.getElementById('password-strength-meter');
            var text = document.getElementById('password-strength-text');
            password.addEventListener('input', function() {
                var val = password.value;
                var result = zxcvbn(val);
                // Update the password strength meter
                meter.value = result.score;
                // Update the text indicator
                if (val !== "") {
                    text.innerHTML = "Strength: " + strength[result.score];
                } else {
                    text.innerHTML = "";
                }
            });
        </script> <!-- Template JS Files -->
        <script src="./asset/js/jquery-2.2.4.min.js"></script>
        <script src="./asset/js/bootstrap.min.js"></script>
        <script src="./asset/js/select2.min.js"></script>
        <script src="./asset/js/jquery.magnific-popup.min.js"></script>
        <script src="./asset/js/custom.js"></script> <!-- Live Style Switcher JS File - only demo -->
        <script src="./asset/styleswitcher.css"></script>
    </div> <!-- Wrapper Ends --> @include('site::inc._messages')
</body>
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script> <!-- REG VALI FORM JS  -->
<!-- jquery latest version -->
<script src="asset1/js/vendor/jquery-2.2.4.min.js"></script> <!-- bootstrap 4 js -->
<script src="asset1/js/popper.min.js"></script>
<script src="asset1/js/bootstrap.min.js"></script>
<script src="asset1/js/owl.carousel.min.js"></script>
<script src="asset1/js/metisMenu.min.js"></script>
<script src="asset1/js/jquery.slimscroll.min.js"></script>
<script src="asset1/js/jquery.slicknav.min.js"></script> <!-- others plugins -->
<script src="asset1/js/plugins.js"></script>
<script src="asset1/js/scripts.js"></script> <!-- REG VALI FORN PLUGIN ENDS  -->

</html>