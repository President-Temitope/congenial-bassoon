<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Register - {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="./images/favicon.png"> -->

    <!-- REG REGISTER VALI FORM -->
    <link rel="stylesheet" href="asset1/css/themify-icons.css">
    <link rel="stylesheet" href="asset1/css/metisMenu.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="../www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>
    <!-- others css -->
    <link rel="stylesheet" href="asset1/css/typography.css">
    <link rel="stylesheet" href="asset1/css/default-css.css">
    <link rel="stylesheet" href="asset1/css/styles.css">
    <link rel="stylesheet" href="asset1/css/responsive.css"> <!-- modernizr css -->
    <script src="asset1/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="./cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script> <!-- END REG FORM PLUGIN  -->

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="./asset/font-awesome.min.css">
    <link rel="stylesheet" href="./asset/css/skins/blue.css">
    <link rel="alternate stylesheet" type="text/css" title="blue" href="./asset/css/skins/blue.css"/>
    <link rel="stylesheet" type="text/css" href="./asset/css/styleswitcher.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- ------- custom from register folder css -------- -->
    <link href="/asset/css/style.css" rel="stylesheet">
    <!------- login animate boot plugin  -->
    <link href="/asset/css/bootstrap-animate.min.css" rel="stylesheet"> <!-- ----- End animate plugin ------ -->
    <!-- Template JS Files -->
    <script src="./asset/js/modernizr.js"></script>
</head>
<style>
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
        background-color: rgba(0, 0, 0, 0.1);
        position: relative;
        bottom: 25px;
    }

    #password-strength-text {
        position: relative;
        bottom: 0px;
        font-size: 12px;
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
        background: lime;
    }
 
/* Hide scrollbar for Chrome, Safari and Opera */
.scrollBox::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.scrollBox {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */

}
       
.scrollBox {
    overflow-y: scroll;
    scrollbar-width: none;
    max-height: 95vh;
}

html, body {
  max-width: 100% !important;
  overflow-x: hidden !important;
}

</style>
<style>

        /* <!-- ------- custom validation ------ --> */
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
  /* height: 77px; */
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

.helper-text {
    position: relative;
    bottom: -5px;
}

.input-box-wrapper  .field .helper-text {
  text-align: left;
  margin-top: 5px;
  color: #dc3545;
}

.input-box-wrapper .form-01 .pass-text {
  text-align: left;
  margin-top: 0px;
}

</style>

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
</style>

<style>
    #pass1 {
  width: 100%;
}
#progresscontainer {
  visibility: hidden;
  margin-top: 5px;
  width: 200px;
  border: 1px solid gray;
}
#progressbar {
      background-color: white;
      width: 200px;
    }
#progressbar > div {
   background-color: white; /* Adjust with JavaScript */
   width: 0%; /* Adjust with JavaScript */
   height: 5px;
   border-radius: 10px;
}
#strength-text {
  width: 200px;
  text-align:center;
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

<style>
    .password_strength_box .password_strength {
        width: 100%;
    }

    .password_strength .meter_strength {

        position: absolute;
        top: 70px;
        width: 100%;

    }

    .meter_strength .pass-text {
        position: relative;
  bottom: 0px;
  font-size: 12px;
  margin-top: 18px;
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
                        <div class="input-box-wrapper">
                                <!-- Form Starts -->
                            <form method="post" action="{{route('postRegister')}}" id="myForm" class="form-01" novalidate>
                                @csrf
                                <div class="login-form-body  scrollBox">
                                    <div class="field firstName">
                                        <div class="form-gp input-field">
                                            <label for="firstName">First Name</label>
                                            <input type="text" name="firstname" id="firstName" onfocusout="validateFirstName()" /> 
                                            <span class="helper-text"></span>
                                        </div>
                                    </div>

                                    <div class="field lastName">
                                        <div class="form-gp input-field">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" name="lastname" id="lastName" onfocusout="validateLastName()"/> 
                                            <span class="helper-text"></span>
                                        </div>
                                    </div>
                   
                                    <div class="form-group input-box"> 
                                        <input class="input-field" name="phone_number" id="phone" placeholder="" type="tel" required>
                                        <!-- <label for="email">TELEPHONE</label> -->
                                    </div>

                                    <div class="field eMail">
                                        <div class="form-gp input-field">
                                            <label for="email1">Email address</label>
                                            <input type="email" name="email" name="email" id="email" onfocusout="validateEmail()"/>
                                            <!-- <i class="ti-email"></i> -->
                                            <span class="helper-text"></span>
                                        </div>
                                    </div>
                         
                                    <div class="field password">
                                        <div class="form-gp input-field">
                                            <label for="passord">Password</label> 
                                            <input type="password" name="password" class="active" id="pass1" onfocusout="validatePassword()" /> 
                                            <span class="helper-text"></span>
                                            <i id="icon1" class="fa fa-eye-slash"></i><br>
                                            <div class="password_strength_box">
                                                <div class="password_strength">
                                                    <div class="meter_strength">
                                                        <meter max="4" id="password-strength-meter"></meter>
                                                    </div>
                                                    <div class="pass-text">
                                                        <p id="password-strength-text"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
              
                                    <div class="field password">
                                        <div class="form-gp input-field">
                                            <label for="ConfrimPassword">Confirm Password</label> 
                                            <input type="password" class="active" id="ConfirmPassword" name="password" onfocusout="validateConfirmPassword()" /> 
                                            <span class="helper-text"></span>
                                            <i id="icon" class="fa fa-eye-slash"></i>
                                        </div>
                                    </div>
            
                                    <div class="form-group"> 
                                        <button id="form_submit" class="btn btn-primary" type="submit" name="submit">create account <i class="ti-arrow-right"></i></button>
                                        <p class="text-center">already &nbsp;have&nbsp; an&nbsp;account? <a href="{{route('login')}}">&nbsp;Login</a>
                                    </div>
                                </div> <!-- Submit Form Button Ends -->
                            </form> <!-- Form Ends -->
                        </div>
                        
                    </div>
                </div> <!-- Copyright Text Starts -->
                <p class="text-center copyright-text">Copyright&nbsp;{{date('Y')}}&nbsp;©TheOkxPlatinum </p> 
                <!-- Copyright Text Ends -->
            </div>
        </div>
        <!-- ---- validate all Fields --- -->
        <script>
            // created 
            // const eField = document.querySelector("eMail");
            // const eInput = eField.querySelector("input");
            // const pField = document.querySelector("passWord");
            // const pInput = pField.querySelector("input");

        // Input fields
        const firstName = document.getElementById('firstName');
        const lastName = document.getElementById('lastName');
        const password = document.getElementById('pass1');
        const confirmPassword = document.getElementById('ConfirmPassword');
        const email = document.getElementById('email');
        // Form
        const form = document.getElementById('myForm');
        // Validation colors
        const green = '#4CAF50';
        const red = '#F44336';
        // Handle form
        form.addEventListener('submit', function(event) {
            // Prevent default behaviour
            event.preventDefault();
            if (
                validateFirstName() &&
                validateLastName() &&
                validatePassword() &&
                validateConfirmPassword() &&
                validateEmail()
            ) {
                // const name = firstName.value;
                // const container = document.querySelector('div.container');
                // const loader = document.createElement('div');
                // loader.className = 'progress';
                // const loadingBar = document.createElement('div');
                // loadingBar.className = 'indeterminate';
                // loader.appendChild(loadingBar);
                // container.appendChild(loader);
                // setTimeout(function() {
                //     const loaderDiv = document.querySelector('div.progress');
                //     const panel = document.createElement('div');
                //     panel.className = 'card-panel green';
                //     const text = document.createElement('span');
                //     text.className = 'white-text';
                //     text.appendChild(
                //         document.createTextNode(
                //             `Sign up successful, welcom to SocialApe ${name}`
                //         )
                //     );
                //     panel.appendChild(text);
                //     container.replaceChild(panel, loaderDiv);
                // }, 1000);
            }
        });
        // Validators
        function validateFirstName() {
            // check if is empty
            if (checkIfEmpty(firstName)) return;
            // is if it has only letters
            if (!checkIfOnlyLetters(firstName)) return;
            return true;
        }

        function validateLastName() {
            // check if is empty
            if (checkIfEmpty(lastName)) return;
            // is if it has only letters
            if (!checkIfOnlyLetters(lastName)) return;
            return true;
        }

        function validatePassword() {
            // Empty check
            if (checkIfEmpty(pass1)) return;
            // Must of in certain length
            if (!meetLength(pass1, 4, 100)) return;
            // check password against our character set
            // 1- a
            // 2- a 1
            // 3- A a 1
            // 4- A a 1 @
            //   if (!containsCharacters(password, 4)) return;
            return true;
        }

        function validateConfirmPassword() {
            if (pass1.className !== 'valid') {
                setInvalid(ConfirmPassword, 'Password must be valid');
                return;
            }
            // If they match
            if (pass1.value !== ConfirmPassword.value) {
                setInvalid(ConfirmPassword, 'Passwords must match');
                return;
            } else {
                setValid(ConfirmPassword);
            }
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

        function checkIfOnlyLetters(field) {
            if (/^[a-zA-Z ]+$/.test(field.value)) {
                setValid(field);
                return true;
            } else {
                setInvalid(field, `${field.name} must contain only letters`);
                return false;
            }
        }

        function meetLength(field, minLength, maxLength) {
            if (field.value.length >= minLength && field.value.length < maxLength) {
                setValid(field);
                return true;
            } else if (field.value.length < minLength) {
                setInvalid(
                    field,
                    `${field.name} must be at least ${minLength} characters long`
                );
                return false;
            } else {
                setInvalid(
                    field,
                    `${field.name} must be shorter than ${maxLength} characters`
                );
                return false;
            }
        }

        function containsCharacters(field, code) {
            let regEx;
            switch (code) {
                case 1:
                    // letters
                    regEx = /(?=.*[a-zA-Z])/;
                    return matchWithRegEx(regEx, field, 'Must contain at least one letter');
                case 2:
                    // letter and numbers
                    regEx = /(?=.*\d)(?=.*[a-zA-Z])/;
                    return matchWithRegEx(
                        regEx,
                        field,
                        'Must contain at least one letter and one number'
                    );
                case 3:
                    // uppercase, lowercase and number
                    regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
                    return matchWithRegEx(
                        regEx,
                        field,
                        'Must contain at least one uppercase, one lowercase letter and one number'
                    );
                case 4:
                    // uppercase, lowercase, number and special char
                    regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/;
                    return matchWithRegEx(
                        regEx,
                        field,
                        'Must contain at least one uppercase, one lowercase letter, one number and one special character'
                    );
                case 5:
                    // Email pattern
                    regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return matchWithRegEx(regEx, field, 'must be a valid email address');
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
        var inputConfirmPassword = document.getElementById('ConfirmPassword'),
            icon = document.getElementById('icon');
        icon.onclick = function () {
            if (inputConfirmPassword.className == 'active') {
                inputConfirmPassword.setAttribute('type', 'text');
                icon.className = 'fa fa-eye';
                inputConfirmPassword.className = '';
            } else {
                inputConfirmPassword.setAttribute('type', 'password');
                icon.className = 'fa fa-eye-slash';
                inputConfirmPassword.className = 'active';
            }
        }
        var inputPass1 = document.getElementById('pass1'),
            icon1 = document.getElementById('icon1');
        icon1.onclick = function () {
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

 var pass1 = document.getElementById('pass1');
 var meter = document.getElementById('password-strength-meter');
 var text = document.getElementById('password-strength-text');
 var register = document.getElementById('register');

 pass1.addEventListener('input', function() {
   var val = pass1.value;
   var result = zxcvbn(val);

   // Update the password strength meter
   meter.value = result.score;

   // Update the text indicator
   if (val !== "") {
     text.innerHTML = "Strength: " + strength[result.score];
   } else {
     text.innerHTML = "";
   }
   if (meter.value >= 3) {
     register.disabled = false;
   } else {
     register.disabled = true;
   }
 });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.0/zxcvbn.js"></script>

    <!-- Template JS Files -->
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
