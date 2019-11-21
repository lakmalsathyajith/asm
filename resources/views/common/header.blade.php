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
                                <li class="nav-item {{ isset($menu) && $menu=='home'?'active':'' }}">
                                    <a class="nav-link home-link" href="/">
                                        <img src="{{asset('images/home-icon-silhouette-white.svg')}}" alt="" srcset="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/apartment-listing">RATES & AVAILABILITY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/typical-apartment">OUR TYPICAL APARTMENTS</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/faq">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/list-with-us">LIST WITH US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">CONTACT</a>
                                </li>
                            </ul>

                            <ul class="navbar-nav right-nav ml-auto mr-3">

                                <li class="nav-item">
                                    <a class="trans-btn blue-border-btn " href="#">Agent Login</a>

                                </li>
                                <span class="gap-01"></span>
                                <li class="nav-item dropdown">
                                    <a class="right-link dropdown-toggle" href="http://example.com"
                                        id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="flag-icon flag-icon-au"> </span><span> English</span>
                                    </a>
                                    <div class="dropdown-menu filter-widget-inner-drop-list home-flag-nav"
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
                                                <div class="col-6">
                                                    <ul class="navbar-nav left-nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="/">
                                                                <img src="{{asset('images/home-icon-silhouette.svg')}}"
                                                                    alt="" srcset="">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-6">
                                                    <ul class="navbar-nav left-nav">
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle"
                                                                href="http://example.com" id="navbarDropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <span class="flag-icon flag-icon-au"> </span> English
                                                            </a>
                                                            <div class="dropdown-menu filter-widget-inner-drop-list"
                                                                aria-labelledby="dropdown09">
                                                                <a class="dropdown-item" href="#fr"><span
                                                                        class="flag-icon flag-icon-au"> </span>
                                                                    English</a>
                                                                <a class="dropdown-item" href="#fr"><span
                                                                        class="flag-icon flag-icon-cn"> </span>
                                                                    Mandarin</a>

                                                            </div>
                                                        </li>
                                                    </ul>

                                                </div>

                                                <div class="col-12">
                                                    <div class="divider"></div>
                                                </div>
                                            </div>
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
                                                                <div class="col-6">
                                                                    <ul class="navbar-nav left-nav">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="/">
                                                                                <img src="{{asset('images/home-icon-silhouette.svg')}}" alt="" srcset="">
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                    
                                                                <div class="col-6">
                                                                    <ul class="navbar-nav left-nav">
                                                                        <li class="nav-item dropdown">
                                                                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <span class="flag-icon flag-icon-au"> </span> English
                                                                                </a>
                                                                               <div class="dropdown-menu filter-widget-inner-drop-list" aria-labelledby="dropdown09">
                                                                                <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-au"> </span>  English</a>
                                                                                <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-cn"> </span>  Mandarin</a>
                                                                                
                                                                            </div>
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
                                                                            <a class="nav-link" href="/apartment-listing">RATES & AVAILABILITY</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="/typical-apartment">OUR TYPICAL APARTMENTS</a>
                                                                        </li>
                                                                        
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="/faq">FAQ</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="/about">ABOUT</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="/list-with-us">LIST WITH US</a>
                                                                        </li>
                                                                        <li class="nav-item">
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
                                                                            <a class="nav-link" href="#">Agent Login</a>
                    
                                                                        </li>
                                                                    </ul>
                    
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item li-social"><a><i class="ti-facebook"></i></a></li>
                                                                        <li class="list-inline-item li-social"><a><i class="ti-twitter-alt"></i></a></li>
                                                                        <li class="list-inline-item li-social"><a><i class="ti-youtube"></i></a></li>
                    
                                                                    </ul>
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
    </header>