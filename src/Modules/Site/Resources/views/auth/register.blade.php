<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Register - {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="./images/favicon.png"> -->
    <!-- REG REGISTER VALI FORM -->
    <link rel="stylesheet" href="asset1/css/themify-icons.css">
    <link rel="stylesheet" href="asset1/css/metisMenu.css"> <!-- amchart css -->
    <link rel="stylesheet" href="../www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>
    <!-- others css -->
    <link rel="stylesheet" href="asset1/css/typography.css">
    <link rel="stylesheet" href="asset1/css/default-css.css">
    <link rel="stylesheet" href="asset1/css/styles.css"> <!-- ====== Reg Form val css plugin custom ========= -->
    <link rel="stylesheet" href="asset1/css/regstrAddtionValidateCss/regstrCssValidate.css">
    <!-- ==== End REg form css ==== -->
    <link rel="stylesheet" href="asset1/css/responsive.css"> <!-- modernizr css -->
    <script src="asset1/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="./cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script> <!-- END REG FORM PLUGIN  -->

    <!-- == Lookup ip phone plugin == -->

    <link rel="stylesheet" href="../intl-tel-input/css/intlTelInput0d54.css">
    <link rel="stylesheet" href="./examples/css/prism.css">
    <link rel="stylesheet" href="./examples/css/examples0d54.css">

    <!-- ===== npm plugin ==== -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- ========= End Plugin npm ====== -->

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
    <!-- ============ -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        .form-control:focus {
            color: #000 !important;
            background-color: #fff;
            border-color: #86b7fe;
            font-size: 15px !important;
            width: 100% !important;
            box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25)
        }
    </style>
    <style>
        .error {
            color: red;
            /* size: 80% */
        }

        .hide {
            display: none
        }
    </style>
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>
    <style>
        .hide {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>
<style>
    /* <!-- ========  Brand Logo =========== --> */
    .brandnav_logo {
        font-size: 20px;
        color: #000;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
    }

    /* <!-- ======== End Brand Logo =========== --> */
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
                                <p>This is a realistic program for anyone looking for site to invest. Paid to me
                                    regularly, keep up good work!</p>
                                <footer><span>Lucy Smith</span>, England</footer>
                            </blockquote>
                        </div>
                    </div> <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-2">
                        <div>
                            <blockquote>
                                <p>Bitcoin doubled in 7 days. You should not expect anything more. Excellent customer
                                    service!</p>
                                <footer><span>Slim Hamdi</span>, Tunisia</footer>
                            </blockquote>
                        </div>
                    </div> <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-3">
                        <div>
                            <blockquote>
                                <p>My family and me want to thank you for helping us find a great opportunity to make
                                    money online. Very happy with how things are going!</p>
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
                        <form method="post" action="{{route('postRegister')}}" id="myForm" class="form-01"
                              novalidate> @csrf
                            <div class="login-form-body  scrollBox">
                                <div class="field firstName">
                                    <div class="form-gp input-field"><label for="firstName">First Name</label> <input
                                            type="text" name="firstname" id="firstName"
                                            onfocusout="validateFirstName()"/> <span class="helper-text"></span></div>
                                </div>
                                <div class="field lastName">
                                    <div class="form-gp input-field"><label for="lastName">Last Name</label> <input
                                            type="text" name="lastname" id="lastName" onfocusout="validateLastName()"/>
                                        <span class="helper-text"></span></div>
                                </div>

                                <div class="formControl input-box"><input type="text" maxlength="15" name="phone_number"
                                                                          id="phone"
                                                                          onfocusout="validatePhoneNumber()"/><br>
                                    <span id="error-msg" class="hide"></span></div>
                                <p id="result"
                                   style="margin: 0px 0px 20px!important; font-size: 14px; width: 100%;"></p>
                                <div class="field eMail">
                                    <div class="form-gp input-field"><label for="email">Email address</label> <input
                                            type="email" name="email" id="email" onfocusout="validateEmail()"/>
                                        <!-- <i class="ti-email"></i> --> <span class="helper-text"></span></div>
                                </div>
                                <div class="field password">
                                    <div class="form-gp input-field"><label for="passord">Password</label> <input
                                            type="password" name="password" class="active" id="pass1"
                                            onfocusout="validatePassword()"/> <span class="helper-text"></span> <i
                                            id="icon1" class="fa fa-eye-slash"></i><br>
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
                                    <div class="form-gp input-field"><label for="ConfrimPassword">Confirm
                                            Password</label> <input type="password" class="active" id="ConfirmPassword"
                                                                    name="password_confirmation"
                                                                    onfocusout="validateConfirmPassword()"/> <span
                                            class="helper-text"></span> <i id="icon" class="fa fa-eye-slash"></i></div>
                                </div>
                                <div class="form-group">
                                    <!-- <button class="btn btn-primary" type="submit" name="" id="my_button">create
                                        account <i class="ti-arrow-right"></i></button> -->
                                        <button class="btn btn-primary"  type="submit" onclick="submitForm()">create
                                        account&nbsp;<i class="ti-arrow-right"></i></button>
                                    <p class="text-center">already &nbsp;have&nbsp; an&nbsp;account? <a
                                            href="{{route('login')}}">&nbsp;Login</a>
                                </div>
                            </div> <!-- Submit Form Button Ends -->
                        </form> <!-- Form Ends -->
                    </div>
                </div>
            </div> <!-- Copyright Text Starts -->
            <p class="text-center copyright-text">Copyright&nbsp;{{date('Y')}}&nbsp;©TheOkxPlatinum </p>
            <!-- Copyright Text Ends -->
        </div>
    </div> <!-- ---- validate all Fields --- -->
    <script>
        // Input fields
        const firstName = document.getElementById('firstName');
        const lastName = document.getElementById('lastName');
        const phoneNumber = document.getElementById('phone');
        const password = document.getElementById('pass1');
        const confirmPassword = document.getElementById('ConfirmPassword');
        const email = document.getElementById('email');
        // Form
        const form = document.getElementById('myForm');
        // Validation colors
        const green = '#4CAF50';
        const red = '#F44336';

        // Handle form
        // add submit eventlistener to form element0
        // add submit eventlistener to form element0

            function submitForm() {
                const form = document.getElementById('myForm');
                form.addEventListener('submit', (event) => {
                event.preventDefault();

                // Perform validation and processing here
                //  validateForm();
                
                    validateFirstName() &&
                    validateLastName() &&
                    validatePhoneNumber() &&
                    validatePassword() &&
                    validateConfirmPassword() &&
                    validateEmail()

                });

                form.submit();
            }

 

        function validatePhoneNumber() {
            var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            return re.test();
        }

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


        function validatePhoneNumber() {
            if (checkIfEmpty(phoneNumber)) return;
            if (!validatePhoneNumber(phoneNumber)) return;
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
        pass1.addEventListener('input', function () {
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
            // if (meter.value >= 3) {
            //     register.disabled = false;
            // } else {
            //     register.disabled = true;
            // }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.0/zxcvbn.js"></script> <!-- Template JS Files -->
    <script src="./asset/js/jquery-2.2.4.min.js"></script>
    <script src="./asset/js/bootstrap.min.js"></script>
    <script src="./asset/js/select2.min.js"></script>
    <script src="./asset/js/jquery.magnific-popup.min.js"></script>
    <script src="./asset/js/custom.js"></script> <!-- Live Style Switcher JS File - only demo -->
    <script src="./asset/styleswitcher.css"></script>
</div> <!-- Wrapper Ends --> @include('site::inc._messages')
</body>

<script>
    // var input = document.querySelector('#phone'),
    //     errorMsg = document.querySelector('#error-msg'),
    //     validMsg = document.querySelector('#valid-msg');
    // var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long"];
    // // var iti = window.intlTelInput(input, {
    // //     utilscript:
    // //     "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    // // });
    // var iti = window.intlTelInput(input, {
    //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    // });
    // var reset = function() {
    //     input.classList.remove("error");
    //     errorMsg.innerHTML = "";
    //     errorMsg.classList.add("hide");
    //     validMsg.classList.add("hide");
    // }
    // input.addEventListener('blur', function() {
    //     reset();
    //     if (input.value.trim()) {
    //         if (iti.isValidNumber()) {
    //             validMsg.classList.remove('hide');
    //         } else {
    //             input.classList.add('error');
    //             var errorCode = iti.getValidationError();
    //             errorMsg.innerHTML = errorMap[errorCode];
    //             errorMsg.classList.remove("hide");
    //         }
    //     }
    // });
    // input.addEventListener('change', reset);
    // input.addEventListener("keyup", reset);


    var input = document.querySelector("#phone"),
        errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"],
        result = document.querySelector("#result");
    window.addEventListener("load", function () {
        errorMsg = document.querySelector("#error-msg");

        function getIp(callback) {
            fetch('https://ipinfo.io', {
                headers: {
                    'Accept': 'application/json'
                }
            }).then(resp => resp.json()).catch(() => {
                return {
                    country: ''
                };
            }).then(resp => callback(resp.country));
        }

        var iti = window.intlTelInput(input, {
            // allowDropdown: false,
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            hiddenInput: "full_number",
            nationalMode: false,
            formatOnDisplay: true,
            separateDialCode: true,
            autoHideDialCode: true,
            autoPlaceholder: "aggressive",
            initialCountry: "auto",
            placeholderNumberType: "MOBILE",
            preferredCountries: ['il', 'ge'],
            geoIpLookup: getIp,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/utils.js"
        });
        input.addEventListener('keyup', formatIntlTelInput);
        input.addEventListener('change', formatIntlTelInput);

        function formatIntlTelInput() {
            if (typeof intlTelInputUtils !== 'undefined') { // utils are lazy loaded, so must check
                var currentText = iti.getNumber(intlTelInputUtils.numberFormat.E164);
                if (typeof currentText === 'string') { // sometimes the currentText is an object :)
                    iti.setNumber(currentText); // will autoformat because of formatOnDisplay=true
                }
            }
        }

        input.addEventListener('keyup', function () {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    $(input).addClass('form-control is-valid');
                } else {
                    $(input).addClass('form-control is-invalid');
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    $(errorMsg).show();
                }
            }
        });
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
        var reset = function () {
            $(input).removeClass('form-control is-invalid');
            errorMsg.innerHTML = "";
            $(errorMsg).hide();
        };
        ////////////// testing - start //////////////
        input.addEventListener('keyup', function (e) {
            e.preventDefault();
            var num = iti.getNumber(),
                valid = iti.isValidNumber();
            result.textContent = "Number: " + num + ", valid: " + valid;
        }, false);
        input.addEventListener("focus", function () {
            result.textContent = "";
        }, false);
        $(input).on("focusout", function (e, countryData) {
            var intlNumber = iti.getNumber();
            // console.log(intlNumber);
        });
        ////////////// testing - end //////////////
    });

    //-----------------------only-phone-number-input code (with +)-------------------------------start-------//
    function isPhoneNumberKey(evt) {
        var charCode = evt.which ? evt.which : evt.keyCode;
        if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    //   -----------------------only-phone-number-input code (with +)-------------------------------end-------//
    //   # sourceURL=pen.js
</script>

<script class="iti-load-utils" async=""
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/utils.js"></script>
</script> <!-- REG VALI FORM JS  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<!-- jquery latest version -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/css/intlTelInput.css">
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/intlTelInput.js"></script>

<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>


<!-- === npm js ==== -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/intlTelInput.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
<script
    src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


<!-- ====== IP LOOKUP ===== -->
<script src="../intl-tel-input/js/intlTelInput0d54.js"></script>
<script src="./examples/js/prism.js"></script>
<script src="./examples/js/lookupCountry0d54.js"></script>
<!-- ========= END ======= -->
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