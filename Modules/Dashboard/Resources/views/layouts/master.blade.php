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
