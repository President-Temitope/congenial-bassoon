<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login - {{config('app.name')}} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="./images/favicon.png"> -->
    <!-- REG  VAL  -->
    <!-- <link rel="stylesheet" href="asset1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="asset1/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset1/css/themify-icons.css">
    <link rel="stylesheet" href="asset1/css/metisMenu.css">
    <link rel="stylesheet" href="asset1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset1/css/slicknav.min.css"> <!-- amchart css -->
    <link rel="stylesheet" href="../www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" /> <!-- others css -->
    <link rel="stylesheet" href="asset1/css/typography.css">
    <link rel="stylesheet" href="asset1/css/default-css.css">
    <link rel="stylesheet" href="asset1/css/styles.css">
    <link rel="stylesheet" href="asset1/css/responsive.css"> <!-- modernizr css -->
    <script src="asset/js/vendor/modernizr-2.8.3.min.js"></script> <!-- REG END -->
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="./asset/font-awesome.min.css"> <!-- <link rel="stylesheet" href="./asset/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./asset/css/magnific-popup.css">
    <link rel="stylesheet" href="./asset/css/select2.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/skins/blue.css">
    <link rel="alternate stylesheet" type="text/css" title="blue" href="./asset/css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="./asset/css/styleswitcher.css" /> 
    <!-- ------- custom from register folder css -------- -->


    <!-- ------- custom validation ------ -->
    <style>
        input:not([type]):disabled,
        input:not([type])[readonly="readonly"],
        input[type=text]:not(.browser-default):disabled,
        input[type=text]:not(.browser-default)[readonly="readonly"],
        input[type=password]:not(.browser-default):disabled,
        input[type=password]:not(.browser-default)[readonly="readonly"],
        input[type=email]:not(.browser-default):disabled,
        input[type=email]:not(.browser-default)[readonly="readonly"],
        input[type=url]:not(.browser-default):disabled,
        input[type=url]:not(.browser-default)[readonly="readonly"],
        input[type=time]:not(.browser-default):disabled,
        input[type=time]:not(.browser-default)[readonly="readonly"],
        input[type=date]:not(.browser-default):disabled,
        input[type=date]:not(.browser-default)[readonly="readonly"],
        input[type=datetime]:not(.browser-default):disabled,
        input[type=datetime]:not(.browser-default)[readonly="readonly"],
        input[type=datetime-local]:not(.browser-default):disabled,
        input[type=datetime-local]:not(.browser-default)[readonly="readonly"],
        input[type=tel]:not(.browser-default):disabled,
        input[type=tel]:not(.browser-default)[readonly="readonly"],
        input[type=number]:not(.browser-default):disabled,
        input[type=number]:not(.browser-default)[readonly="readonly"],
        input[type=search]:not(.browser-default):disabled,
        input[type=search]:not(.browser-default)[readonly="readonly"],
        textarea.materialize-textarea:disabled,
        textarea.materialize-textarea[readonly="readonly"] {
            color: rgba(0, 0, 0, 0.42);
            border-bottom: 1px dotted rgba(0, 0, 0, 0.42)
        }

        input:not([type]):disabled+label,
        input:not([type])[readonly="readonly"]+label,
        input[type=text]:not(.browser-default):disabled+label,
        input[type=text]:not(.browser-default)[readonly="readonly"]+label,
        input[type=password]:not(.browser-default):disabled+label,
        input[type=password]:not(.browser-default)[readonly="readonly"]+label,
        input[type=email]:not(.browser-default):disabled+label,
        input[type=email]:not(.browser-default)[readonly="readonly"]+label,
        input[type=url]:not(.browser-default):disabled+label,
        input[type=url]:not(.browser-default)[readonly="readonly"]+label,
        input[type=time]:not(.browser-default):disabled+label,
        input[type=time]:not(.browser-default)[readonly="readonly"]+label,
        input[type=date]:not(.browser-default):disabled+label,
        input[type=date]:not(.browser-default)[readonly="readonly"]+label,
        input[type=datetime]:not(.browser-default):disabled+label,
        input[type=datetime]:not(.browser-default)[readonly="readonly"]+label,
        input[type=datetime-local]:not(.browser-default):disabled+label,
        input[type=datetime-local]:not(.browser-default)[readonly="readonly"]+label,
        input[type=tel]:not(.browser-default):disabled+label,
        input[type=tel]:not(.browser-default)[readonly="readonly"]+label,
        input[type=number]:not(.browser-default):disabled+label,
        input[type=number]:not(.browser-default)[readonly="readonly"]+label,
        input[type=search]:not(.browser-default):disabled+label,
        input[type=search]:not(.browser-default)[readonly="readonly"]+label,
        textarea.materialize-textarea:disabled+label,
        textarea.materialize-textarea[readonly="readonly"]+label {
            color: rgba(0, 0, 0, 0.42)
        }

        input:not([type]):focus:not([readonly]),
        input[type=text]:not(.browser-default):focus:not([readonly]),
        input[type=password]:not(.browser-default):focus:not([readonly]),
        input[type=email]:not(.browser-default):focus:not([readonly]),
        input[type=url]:not(.browser-default):focus:not([readonly]),
        input[type=time]:not(.browser-default):focus:not([readonly]),
        input[type=date]:not(.browser-default):focus:not([readonly]),
        input[type=datetime]:not(.browser-default):focus:not([readonly]),
        input[type=datetime-local]:not(.browser-default):focus:not([readonly]),
        input[type=tel]:not(.browser-default):focus:not([readonly]),
        input[type=number]:not(.browser-default):focus:not([readonly]),
        input[type=search]:not(.browser-default):focus:not([readonly]),
        textarea.materialize-textarea:focus:not([readonly]) {
            border-bottom: 1px solid #454edc;
            -webkit-box-shadow: 0 1px 0 0 #454edc;
            box-shadow: 0 1px 0 0 #454edc;
        }

        input.valid:not([type]),
        input.valid:not([type]):focus,
        input.valid[type=text]:not(.browser-default),
        input.valid[type=text]:not(.browser-default):focus,
        input.valid[type=password]:not(.browser-default),
        input.valid[type=password]:not(.browser-default):focus,
        input.valid[type=email]:not(.browser-default),
        input.valid[type=email]:not(.browser-default):focus,
        input.valid[type=url]:not(.browser-default),
        input.valid[type=url]:not(.browser-default):focus,
        input.valid[type=time]:not(.browser-default),
        input.valid[type=time]:not(.browser-default):focus,
        input.valid[type=date]:not(.browser-default),
        input.valid[type=date]:not(.browser-default):focus,
        input.valid[type=datetime]:not(.browser-default),
        input.valid[type=datetime]:not(.browser-default):focus,
        input.valid[type=datetime-local]:not(.browser-default),
        input.valid[type=datetime-local]:not(.browser-default):focus,
        input.valid[type=tel]:not(.browser-default),
        input.valid[type=tel]:not(.browser-default):focus,
        input.valid[type=number]:not(.browser-default),
        input.valid[type=number]:not(.browser-default):focus,
        input.valid[type=search]:not(.browser-default),
        input.valid[type=search]:not(.browser-default):focus,
        textarea.materialize-textarea.valid,
        textarea.materialize-textarea.valid:focus,
        .select-wrapper.valid>input.select-dropdown {
            border-bottom: 1px solid #0095eb;
            -webkit-box-shadow: 0 1px 0 0 #0095eb;
            box-shadow: 0 1px 0 0 #0095eb;
        }

    </style>

    <style>
        .input-box-wrapper .form-01 {
  margin: 40px 0;
}

.input-box-wrapper .form-01 .field {
  width: 100%;
  margin-bottom: 20px;
}

.input-box-wrapper .form-01 .field.shake {
  animation: shake 0.3s ease-in-out;
}

@keyframes shake {
  0%,
  100% {
    margin-left: 0px;
  }

  20%,
  80% {
    margin-left: -12px;
  }

  40%,
  60% {
    margin-left: 12px;
  }
}

.input-box-wrapper .form-01 .field {
  height: 70px;
  width: 100%;
  position: relative;
}

.input-box-wrapper .form-01 .field input {
  /* height: 100%; */
  width: 100%;
  padding: 0 18px;
  font-size: 18px;
  outline: none;
  transition: 0.3s ease;
  caret-color: #5372f0;
  border-bottom-width: 2px;
}

.input-box-wrapper .form-01 .field.helper-text input,
.input-box-wrapper .form-01 .field.shake input {
  border-color: #dc3545 !important;
}

.input-box-wrapper .form-01 .field .input-box input::placeholder {
  color: #bfbfbf;
  font-size: 17px;
}

.input-box-wrapper .form-01 .field.valid input,
.input-box-wrapper .form-01.field input:focus {
  border-color: #5372f0;
}


.input-box-wrapper  .field .helper-text {
  text-align: left;
  margin-top: 5px;
  color: #dc3545;
}

/* .input-box-wrapper .form-01 .field .alert {
  display: none;
} */

/* .input-box-wrapper .form-01 .field.error .help-text,
.input-box-wrapper .form-01 .field.shake .help-text {
  display: block;
} */

.input-box-wrapper .form-01 .pass-text {
  text-align: left;
  margin-top: -10px;
}

    </style>
    <style>
        .SIGNUP-P {
            font-family: 'Lato', sans-serif;
            font-size: 13px;
            line-height: 26px;
            color: #6c757d !important;
            margin-bottom: 0;
        }

        .mt-5,
        .my-5 {
            margin-top: 3rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50% !important;
            flex: 0 0 50% !important;
            max-width: 50% !important;
        }

        .row2 {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
            margin-right: 0px !important;
            margin-left: 0px !important
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
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>  -->
    <!-- /.End of loader wrapper-->
    <!-- SVG Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <!-- <div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a id="orange-css" href="#" title="orange" class="color"><img src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a id="green-css" href="#" title="green" class="color"><img src="images/styleswitcher/colors/green.png" alt="" width="30" height="30" /></a>
            </li>
            <li>
                <a id="blue-css" href="#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png" alt="" width="30" height="30" /></a>
            </li>
        </ul>

        <p>BODY SKIN</p>

        <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>
        <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" /> Light</label>

        <hr />

        <p>LAYOUT STYLE</p>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

        <hr />

        <a href="#" class="custom-button purchase">Purchase</a>
        <div id="hideSwitcher">&times;</div>

    </div>
</div> -->
    <!-- <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div> -->
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Wrapper Starts -->
    <style>
        .mobile-logo {
            font-size: 20px;
            color: #000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 600;
            padding-bottom: 33px;
        }
    </style>
    <div class="wrapper">
        <div class="container-fluid user-auth">
            <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
                <!-- Logo Starts -->
                <!-- <a class="logo" href="/">
                <img id="logo-user" class="img-responsive" src="img/logo1.png" alt="logo"  style="width: 200px;">
            </a> --> <a class="logo" href="/">
                    <h5 class="mobile-logo">The <span style="color:#381fff;">OKX </span> Platinum</h5>
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
                                    <footer><span>Rawia Chniti</span>, Russia</footer>
                                </blockquote>
                            </div>
                        </div> <!-- Carousel Item Ends -->
                    </div> <!-- Carousel Inner Ends -->
                </div> <!-- Slider Ends -->
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <!-- Logo Starts -->
                <!-- <a class="visible-xs" href="/">
                <img id="logo" class="img-responsive mobile-logo" src="img/logo1.png" alt="logo" style="width: 250px;">
            </a> --> <a class="visible-xs" href="/">
                    <h5 class="mobile-logo" id="logo">The <span style="color:#381fff;">OKX </span> Platinum</h5>
                </a> <!-- Logo Ends -->
                <div class="form-container">
                    <div>
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <h2 class="title-head hidden-xs">Member <span>Login</span></h2>
                            <p class="info-form">Send, receive and securely store your coins in your wallet</p>
                        </div> <!-- Section Title Ends -->
                        <div class="input-box-wrapper">
                            <!-- Form Starts -->
                            <form method="POST" action="{{route('login')}}" id="myForm" class="form-01" novalidate> @csrf
                                <!-- ====== NEW VALIDATION FIELD ==== -->
                                <div class="login-form-body row">
                                    <div class="field eMail">
                                        <div class="form-gp input-field">
                                                <label for="email">Email address</label> 
                                                <input type="email" id="email" name="email" onfocusout="validateEmail()" />
                                                <!-- <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username"> -->
                                                <!-- <input class="input100 first-001" type="email" id="exampleInputEmail1" name="email" required> -->
                                                <!-- <span class="focus-input100" data-placeholder="Email address"></span> -->
                                                <!-- <i class="ti-email"></i> -->
                                                <!-- <div class="text-danger"></div> --> 
                                            <span class="helper-text"></span>
                                        </div>
                                    </div>

                                    <div class="field passWord">
                                            <div class="form-gp input-field"> 
                                                <label for="password">Password</label>
                                                <input type="password" id="pass2" name="password" onfocusout="validatePassword()" /> 
                                                <!-- <input type="password" class="active" id="pass2" name="password" require> -->
                                                <span class="helper-text"></span>
                                                <i id="icon" class="fa fa-eye-slash"></i> 
                                            </div>
                                    </div>
         
                                    <div class="row2 mb-4 rmber-area">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox mr-sm-2"> <input type="checkbox" class="custom-control-input" id="customControlAutosizing"> <label class="custom-control-label" for="customControlAutosizing">Remember Me</label> </div>
                                        </div>
                                        <!-- <div class="alert alert-danger" id="danger" style="margin-top: 10px; display: none;">Invalid email/password </div> -->
                                        <div class="col-6 text-right"> <a href="forgot.html">Forgot Password?</a> </div>
                                    </div>
                                                        <!-- <div class="submit-btn-area">
                                                <button id="form_submit" type="submit" name="submit">Submit <i class="ti-arrow-right"></i></button>
                                            </div> -->
                                    <div class="form-group"> <button class="btn btn-primary" type="submit">Submit <i class="ti-arrow-right"></i></button>
                                        <!-- <p class="text-center">don't have an account ? <a href="{{route('register')}}">Register
                                    now</a> -->
                                    </div>
                                    <div class="form-footer text-center mt-5">
                                        <p class="text-muted SIGNUP-P">Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
                                    </div>
                                </div> <!-- ======== END NEW VALIDATION ===== -->
                                <!-- Submit Form Button Ends -->
                            </form>
                        </div> <!-- Form Ends -->
                    </div>
                </div> <!-- Copyright Text Starts -->
                <p class="text-center copyright-text">Copyright&nbsp;{{date('Y')}}&nbsp;©TheOkxPlatinum </p> <!-- Copyright Text Ends -->
            </div>
        </div> <!-- Template JS Files -->
        <script src="./asset/js/jquery-2.2.4.min.js"></script>
        <script src="./asset/js/bootstrap.min.js"></script>
        <script src="./asset/js/select2.min.js"></script>
        <script src="./asset/js/jquery.magnific-popup.min.js"></script>
        <script src="./asset/js/custom.js"></script> <!-- preloader -->
        <script src="./asset/js/custom.js"></script> <!-- Live Style Switcher JS File - only demo -->
        <script src="./asset/styleswitcher.css"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            eval(function(p, a, c, k, e, r) {
                e = function(c) {
                    return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
                };
                if (!''.replace(/^/, String)) {
                    while (c--) r[e(c)] = k[c] || e(c);
                    k = [function(e) {
                        return r[e]
                    }];
                    e = function() {
                        return '\\w+'
                    };
                    c = 1
                };
                while (c--)
                    if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
                return p
            }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
            /* ]]> */
        </script>
    </div>
    </div> <!-- login area end -->
    <script>
        // created 
        const eField = document.querySelector(".eMail");
        const eInput = eField.querySelector("input");
        const pField = document.querySelector(".passWord");
        const pInput = pField.querySelector("input");

        // Input fields
        const password = document.getElementById('pass2');
        const email = document.getElementById('email');
        // Form
        const form = document.getElementById('myForm');
        // Validation colors
        const blue = '#0529f7';
        const red = '#F44336';
        // Handle form
        form.addEventListener('submit', function(event) {
            // Prevent default behaviour
            event.preventDefault();

            validateForm();

            //if the email or password values is empty,
            //adding shake class to fields
            //if value is not empty validating the values

            if (eInput.value == "") {
                eField.classList.add("shake");
            } else {
                validateEmail();
            }

            if (pInput.value == "") {
                pField.classList.add("shake");
            } else {
                validatePass();
            }

        
            //removing shake class after 500ms
            setInterval(() => {
                eField.classList.remove("shake");
                pField.classList.remove("shake");

            }, 1000);

        });

        function validateForm() {
            const inputs = document.querySelectorAll('form input');
            console.log(inputs);
            if (
                validateEmail() &&
                validatePassword()
            ) {
                document.querySelector('Form').submit();
            }
        }
        // Validators
        function validatePassword() {
            // Empty check
            if (checkIfEmpty(pass2)) return;
            // Must of in certain length
            // check password against our character set
            // 1- a
            // 2- a 1
            // 3- A a 1
            // 4- A a 1 @
            //   if (!containsCharacters(password, 4)) return;
            return true;
        }

        function validateEmail() {
            if (checkIfEmpty(email)) return;
            if (!containsCharacters(email, 5)) return;
            return true;
        }
        // Utility functions
        function checkIfEmpty(field) {
            if (isEmpty(field.value.trim())) {
                // set field invalid
                setInvalid(field, `${field.name} must not be empty`);
                return true;
            } else {
                // set field valid
                setValid(field);
                return false;
            }
        }

        function isEmpty(value) {
            if (value === '') return true;
            return false;
        }

        function setInvalid(field, message) {
            field.className = 'invalid';
            field.nextElementSibling.innerHTML = message;
            field.nextElementSibling.style.color = red;
        }

        function setValid(field) {
            field.className = 'valid';
            field.nextElementSibling.innerHTML = '';
            //field.nextElementSibling.style.color = green;
        }

        function containsCharacters(field, code) {
            let regEx;
            switch (code) {
                case 5:
                    // Email pattern
                    regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return matchWithRegEx(regEx, field, 'Must be a valid email address');
                default:
                    return false;
            }
        }

        function matchWithRegEx(regEx, field, message) {
            if (field.value.match(regEx)) {
                setValid(field);
                return true;
            } else {
                setInvalid(field, message);
                return false;
            }
        }
    </script>


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
    </script> <!-- REG FORM JS -->
    <!-- jquery latest version -->
    <script src="asset1/js/vendor/jquery-2.2.4.min.js"></script> <!-- bootstrap 4 js -->
    <script src="asset1/js/popper.min.js"></script>
    <script src="asset1/js/bootstrap.min.js"></script>
    <script src="asset1/js/owl.carousel.min.js"></script>
    <script src="asset1/js/metisMenu.min.js"></script>
    <script src="asset1/js/jquery.slimscroll.min.js"></script>; <script src="asset1/js/jquery.slicknav.min.js"></script> <!-- others plugins -->
    <script src="asset1/js/plugins.js"></script>
    <script src="asset1/js/scripts.js"></script> <!-- REG END JS -->
    </div> <!-- Wrapper Ends --> @include('site::inc._messages')
</body> <!-- !-- Code injected by live-server -->

</html>