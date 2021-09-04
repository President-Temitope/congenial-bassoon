<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="/demo6/images/favicon.png">
    <title>Investment | DashLite Admin Template</title>
    <link rel="stylesheet" href="./assets/css/dashlite0875.css">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme0875.css">
    <!-- boot plugin-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>


    <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"
            data-stencil-namespace="ionicons"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<style>

    @media only screen and (max-width: 767px) {

        .nk-iv-scheme-item {

            position: relative !important;
            display: flex;
            flex-wrap: nowrap !important;
            align-items: center !important;
            background-color: #fff !important;
            border-radius: 4px !important;
            border: 1px solid #dbdfea !important;
            padding: 1.25rem !important;
        }

    }


    .white_btn a {

        display: inline-block;
        color: #000;
        font-size: 14px;
        font-weight: 300;
        background: #428bca;
        transition: .3s;
        padding: 12px 30px;
        border-radius: 2px;
        /* border: 1px solid #ECECEC; */
        line-height: 1;
        cursor: pointer;
        border-radius: 4px;
        text-decoration: none;
    }
</style>
<style>


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
        background-color: white !important;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }


    @media only screen and (max-width: 767px) {

        .dropdown-content {


            position: absolute !important;
            right: -15px !important;
        }


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
        background-color: #f1f1f1;
        min-width: 260px;
        /* overflow: auto; */
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }


    .nk-menu-item {
        padding: 10px 0 !important;
    }


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
        font-size: 2.5rem;
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
            /* color: var(--white-color); */

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


    .container {
        padding-right: 15px !important;
        padding-left: 0px !important;
        margin-right: auto !important;
        margin-left: auto !important;
    }


    .nk-menu-item {

        transition: border-bottom-color 0.5s ease-out !important;
        -webkit-transition: border-bottom-color 0.5s ease-out !important;

    }

</style>


<style>
    .MultiCarousel {
        float: left;
        overflow: hidden;
        padding: 15px;
        position: relative
    }

    .MultiCarousel {
        Height: 380px;
        left: 24%;
    }

    .MultiCarousel .MultiCarousel-inner {
        transition: 1s ease all;
        float: left;
    }

    .MultiCarousel .MultiCarousel-inner .item {
        float: left;
    }

    .MultiCarousel .MultiCarousel-inner .item > div {
        text-align: center;
        padding: 10px;
        margin: 10px;
        background: #f1f1f1;
        color: #666;
    }

    .MultiCarousel .leftLst, .MultiCarousel .rightLst {
        position: absolute;
        border-radius: 50%;
        top: calc(50% - 20px);
    }

    .MultiCarousel .leftLst {
        left: 0;
    }

    .MultiCarousel .rightLst {
        right: 0;
    }

    .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over {
        pointer-events: none;
        background: #ccc;
    }
</style>


<style>

    @media only screen and ( max-width: 720px) {

        .carousel-container {

            left: 0% !important;
        }


    }


</style>

<script>
    window.console = window.console || function (t) {
    };
</script>


<script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
    }
</script>
<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">
    @include('dashboard::layouts.master')
    <div class="nk-block-head text-center">
        <div class="nk-block-head-content">
            <div class="nk-block-head-sub"><span style="font-size: initial;">Choose an Option</span>
            </div>
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Investment Plan</h2>
                <div class="nk-block-des">
                    <p style="font-size:initial;">Choose your investment plan and start earning.</p>
                </div>
            </div>
        </div>
    </div>


    <style>
        .item {
            width: 100%;
        }

    </style>


    <div class="container">
        <div class="row">
            <div class="MultiCarousel carousel-container" data-items="1,3,5,6" data-slide="1"
                 id="MultiCarousel1" data-interval="1000">
                <div class="MultiCarousel-inner"
                     style="transform: translateX(0px); width: 10880px;">

                    @if(count($investments) > 0)
                        @foreach($investments as $investment)
                            <div class="item" style="width: 680px;">
                                <div class="plan-item-card pad15">
                                    <div class="plan-item-head">
                                        <div class="plan-item-heading">
                                            <h4 class="plan-item-title card-title title">{{$investment->name}}</h4>
                                            <p class="sub-text">{{$investment->desc}}</p>
                                        </div>
                                        <div class="plan-item-summary card-text">
                                            <div class="row">
                                                <div class="col-6"><span class="lead-text">{{$investment->daily_interest}}%</span><span
                                                        class="sub-text">Daily Interest</span>
                                                </div>
                                                <div class="col-6"><span
                                                        class="lead-text">{{$investment->term_days}}</span><span
                                                        class="sub-text">Term Days</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="plan-item-body">
                                        <div class="plan-item-desc card-text">
                                            <ul class="plan-item-desc-list">
                                                <li><span class="desc-label">Min Deposit</span> - <span
                                                        class="desc-data">${{$investment->min_amount}}</span>
                                                </li>
                                                <li><span class="desc-label">Max Deposit</span> - <span
                                                        class="desc-data">${{$investment->max_amount}}</span>
                                                </li>
                                                <li><span class="desc-label">Deposit Return</span> - <span
                                                        class="desc-data">{{$investment->deposit_return}}</span>
                                                </li>
                                                <li><span class="desc-label">Total Return</span> - <span
                                                        class="desc-data">{{$investment->total_return}}%</span>
                                                </li>
                                            </ul>
                                            <div class="plan-item-action">
                                                <label for="plan-iv-1" class="plan-label"><span
                                                        class="plan-label-base">Choose this plan</span><span
                                                        class="plan-label-selected">Plan Selected</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
                <button class="btn btn-primary leftLst over">&lt;</button>
                <button class="btn btn-primary rightLst">&gt;</button>
            </div>
        </div>


    </div>


</div>
</div>
</div>
</div>


<div class="plan-iv-actions text-center" style="margin-bottom: 20px;">
    <div class="white_btn"><a href="./invest-form.html"><span>Continue to Invest</span> <em
                class="icon ni ni-arrow-right"></em></a></div>
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
</div> -->
</div>
</div>


<script
    src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>


</body>
<script id="rendered-js">
    $(document).ready(function () {
        var itemsMainDiv = '.MultiCarousel';
        var itemsDiv = '.MultiCarousel-inner';
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this); else

                click(1, this);
        });

        ResCarouselSize();


        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = "data-items";
            var itemClass = '.item';
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                } else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers});
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = '.leftLst';
            var rightBtn = '.rightLst';
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            } else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
    //# sourceURL=pen.js
</script>

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


</html>
