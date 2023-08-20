<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('v/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('v/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>Registration Verification</title>
</head>
<style></style>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <main data-v-ddf14886="" class="app-content">
                <div data-v-ddf14886="" class="o-container o-container--thin registration-activation-page o-v-rhythm">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <!---->
                    <!---->
                    <div class="styled-form__header">
                        <h1 class="style-form_title" style="text-align: center;">Email verification</h1>
                        <!-- <h2 class="styled-form__title">Resend your verification code</h2> -->
                        <div class="success-animation">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                        </div>
                        <p class="noted"
                           style="line-height: 25px; font-size: 15px;padding: 5px 11px 0px 5px;border: none;margin-bottom: 12px; color: black;font-weight: 700;">
                            <span class="suc">Registration successful</span>
                        </p>
                        <h3 class="styled-form__subtitle"
                            style=" padding: 10px;border-radius: 2px;background-color: #ffd70069; font-family: Calibri,sans-serif,serif,EmojiFont;">
                            We sent a verification mail. Please activate your account
                            with the
                            link in your email. If you cannot find the mail, please also check the junk/spam fold!</h3>
                    </div>
                    {{--<p class="noted"
                       style="line-height: 25px;font-size: 14px;padding: 12px 11px 10px 5px;/* border: 2px solid #777; */margin-bottom: 12px;font-family: monospace;">
                        If you have not received a verification email or if you have mistyped your email address, you
                        can resend the verification mail. </p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                        .
                    </form>--}}
                </div>
            </main>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p style="line-height: 20px;"> WE FEELING THE JOY OF SERVING YOU BEST <br> BIG SERVE, BIG PROFIT. </p>
                <button class="btn transparent" id="sign-up-btn"> &#10094;</button>
            </div>
            <img src="{{asset('v/img/log.svg')}}" class="image" alt=""/>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3> for choose us ?</h3>
                <p style="line-height: 20px;"> The right choice for you, Solution to make investment easier, Service
                    that matters, Customer Satisfaction is our motto. </p>
                <button class="btn transparent" id="sign-in-btn"> &#10148;</button>
            </div>
            <img src="{{asset('v/img/register.svg')}}" class="image" alt=""/>
        </div>
    </div>
</div>
<script src="{{asset('v/app.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
