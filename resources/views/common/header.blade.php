<header class="header-menu mob-menu">
    <section class="desktop-nav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <nav class="navbar fixed-top navbar-expand-lg navbar-toggleable-sm navbar-light bg-white">
                        <a class="navbar-brand" href="/">
                            <img class="nav-img" src="{{asset('images/main-logo.png')}}" alt="" srcset="">
                        </a>

                        <button class="navbar-toggler navbar-toggler-right collapsed" id="toggle" type="button"
                            data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span> </span>
                            <span> </span>
                            <span> </span>
                        </button>

                        <div class="collapse navbar-collapse modile-hide mobile-view-hide" id="asnavsupportcontent">
                            <ul class="navbar-nav left-nav ml-3">
                                <li class="nav-item">
                                    <a class="nav-link home-link {{ isset($menu) && $menu=='home'?'active':'' }}" href="/">
                                        <img src="{{asset('images/home-icon-silhouette-white.svg')}}" alt="" srcset="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ isset($menu) && $menu=='rates'?'active':'' }}" href="/apartment-listing">RATES & AVAILABILITY</a>
                                </li>
                                <li class="nav-item {{ isset($menu) && $menu=='typical'?'active':'' }}">
                                    <a class="nav-link" href="/typical-apartment">OUR TYPICAL APARTMENTS</a>
                                </li>

                                <li class="nav-item {{ isset($menu) && $menu=='faq'?'active':'' }}">
                                    <a class="nav-link" href="/faq">FAQ</a>
                                </li>
                                <li class="nav-item {{ isset($menu) && $menu=='about'?'active':'' }}">
                                    <a class="nav-link" href="/about">ABOUT</a>
                                </li>
                                <li class="nav-item {{ isset($menu) && $menu=='list-with-us'?'active':'' }}">
                                    <a class="nav-link" href="/list-with-us">LIST WITH US</a>
                                </li>
                                <li class="nav-item {{ isset($menu) && $menu=='contact'?'active':'' }}">
                                    <a class="nav-link" href="/contact">CONTACT</a>
                                </li>
                            </ul>

                            <ul class="navbar-nav right-nav ml-auto mr-3">

                                <li class="nav-item">
                                    <a class="trans-btn blue-border-btn" href="#" data-toggle="modal"
                                        data-target="#agent-modal">Agent Login</a>

                                </li>
                                <span class="gap-01"></span>
                                <li class="nav-item dropdown">
                                    <a class="right-link dropdown-toggle" href="http://example.com"
                                        id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="flag-icon flag-icon-au"> </span><span> English</span>
                                    </a>
                                    <div class="dropdown-menu filter-widget-inner-drop-list home-flag-nav default-nav-dropdown"
                                        aria-labelledby="dropdown09">
                                        <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-au">
                                            </span> English</a>
                                        <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-cn">
                                            </span> Mandarin</a>

                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!--mobile nav -->
                        <div class="desktop-hide mobi-nav">

                            <div class="collapse navbar-collapse bg-inverse mobile-nav-wrap" id="navbarCollapse">

                                <div class="container">
                                    <div class="top-mob-nav">
                                        <div class="top-nav-wrap">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="navbar-nav left-nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link {{ isset($menu) && $menu=='home'?'active':'' }}" href="/">
                                                                <img src="{{asset('images/home-icon-silhouette.svg')}}"
                                                                    alt="" srcset="">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>


                                                <div class="col-12">
                                                    <div class="divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--mobile-nav-list-->
                                        <div class="mobile-nav-list-wrap">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="navbar-nav left-nav">

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="/apartment-listing">RATES &
                                                                AVAILABILITY</a>
                                                        </li>
                                                        <li class="nav-item {{ isset($menu) && $menu=='typical'?'active':'' }}">
                                                            <a class="nav-link" href="/typical-apartment">OUR TYPICAL
                                                                APARTMENTS</a>
                                                        </li>

                                                        <li class="nav-item {{ isset($menu) && $menu=='faq'?'active':'' }}">
                                                            <a class="nav-link" href="/faq">FAQ</a>
                                                        </li>
                                                        <li class="nav-item {{ isset($menu) && $menu=='about'?'active':'' }}">
                                                            <a class="nav-link" href="/about">ABOUT</a>
                                                        </li>
                                                        <li class="nav-item {{ isset($menu) && $menu=='list-with-us'?'active':'' }}">
                                                            <a class="nav-link" href="/list-with-us">LIST WITH US</a>
                                                        </li>
                                                        <li class="nav-item {{ isset($menu) && $menu=='contact'?'active':'' }}">
                                                            <a class="nav-link" href="/contact">CONTACT</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                                <div class="col-12">
                                                    <div class="divider"></div>
                                                </div>

                                            </div>
                                        </div>

                                        <!--mobile nav bottom list-->
                                        <div class="mobile-nav-bottom-list">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="navbar-nav left-nav">

                                                        <li class="nav-item">
                                                            {{-- <a class="nav-link" href="#">Agent Login</a> --}}
                                                            <a class="trans-btn blue-border-btn" href="#"
                                                                data-toggle="modal" data-target="#agent-modal">Agent
                                                                Login</a>
                                                        </li>
                                                    </ul>

                                                    <ul class="list-inline">
                                                        <li class="list-inline-item li-social"><a><i
                                                                    class="ti-facebook"></i></a></li>
                                                        <li class="list-inline-item li-social"><a><i
                                                                    class="ti-twitter-alt"></i></a></li>
                                                        <li class="list-inline-item li-social"><a><i
                                                                    class="ti-youtube"></i></a></li>

                                                    </ul>


                                                </div>
                                            </div>


                                            <div class="mobile-bottom-flag-wrap">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="english-flag mobile-flag">
                                                            <span class="flag-icon flag-icon-au"> </span> <span
                                                                class="paraf">English</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mandarin-flag mobile-flag">
                                                            <span class="flag-icon flag-icon-cn"> </span> <span
                                                                class="paraf">Mandarin</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>

                    </nav>

                </div>
            </div>
        </div>
    </section>



    <!-- Modal HTML -->
    <!-- Modal -->
    <div class="modal fade" id="agent-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="agent-logo-wrap">
                                    <img src="{{asset('images/main-logo.png')}}" alt="">
                                </div>
                                <div class="agent-tittle">
                                    <h3 class="sub-heading">Agent login</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group agent-email-wrap">
                                    <span class="agent-email-span form-control-feedback"></span>
                                    <input type="email" class="form-control agent-email-input"
                                        placeholder="Email address">
                                </div>


                                <div class="form-group agent-email-wrap">
                                    <span class="agent-password-span form-control-feedback"></span>
                                    <input type="password" class="form-control agent-email-input"
                                        placeholder="Password">
                                </div>


                            </div>

                        </div>

                        <div class="forget-passwrd-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="forget-pswd">Forgot password?</span>
                                </div>
                            </div>
                        </div>

                        <div class="login-button-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="filter-widget">
                                            <a class="btn booking-btn agent-login-btn">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="close-agent-button-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="filter-widget">
                                            <a class="btn modal-close-btn" data-dismiss="modal">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="agen-copyright-wrap">
                        <p>Copyright © 2019 Apartment Stays Melbourne Pty Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>