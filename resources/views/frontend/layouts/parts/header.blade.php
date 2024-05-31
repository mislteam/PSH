<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body header-body-bottom-border border-top-0">
        <div class="header-top">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <ul class="list list-unstyled list-inline mb-0">
                                <li class="list-inline-item text-color-dark me-md-4 mb-0">
                                    <i
                                        class="icons icon-phone text-color-primary text-4 position-relative top-2 me-1"></i>+
                                        @foreach ($header as $item)
                                             <a href="tel:{{$item->phone}}"
                                        class="text-color-dark text-color-hover-primary text-decoration-none">
                                        <strong>{{$item->phone}}</strong>
                                    </a>
                                        @endforeach                                   
                                </li>
                                <li class="list-inline-item text-color-dark me-4 mb-0 d-none d-md-inline-block">
                                    <i
                                        class="icons icon-envelope text-color-primary text-4 position-relative top-4 me-1"></i>
                                        @foreach ($header as $item)
                                    <a href="mailto:{{$item->email}}"
                                        class="text-color-dark text-color-hover-primary text-decoration-none text-2">
                                        {{$item->email}}
                                    </a>
                                    @endforeach
                                </li>
                                <li class="list-inline-item text-color-dark text-2 mb-0 d-none d-lg-inline-block">
                                    <i
                                        class="icons icon-calendar text-color-primary text-3-5 position-relative top-1 me-1"></i>
                                        @foreach ($header as $item)
                                            {{$item->open_hour}}
                                        @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons social-icons-clean d-none d-lg-block">
                                @foreach ($header as $item)
                                <li class="social-icons-facebook"><a href="{{url( $item->fb_link)}}" target="_blank"
                                        title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                @endforeach
                                @foreach ($header as $item)
                                <li class="social-icons-twitter"><a href="{{url( $item->twitter_link)}}" target="_blank"
                                        title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                @endforeach
                                @foreach ($header as $item)
                                <li class="social-icons-instagram"><a href="{{url( $item->ig_link)}}" target="_blank"
                                        title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                @endforeach
                            </ul>
                            <a href="{{route('user-login')}}"
                                class="btn btn-primary btn-px-4 py-3 font-weight-bold text-2 rounded-0 ms-lg-4">Login/Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('image/logo/'.generalSetting('logo'))}}" class="img-fluid"
                                    alt="PSH Global" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div
                                class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a href="{{route('home')}}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('about')}}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-item dropdown-toggle {{ request()->is('products') ? 'active' : '' }}">Our Products</a>
                                            <ul class="dropdown-menu border-radius-0">
                                                <li>
                                                    <a href="{{route('products')}}" class="nav-link ">All Products</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('projects')}}" class="nav-link {{ request()->is('projects') ? 'active' : '' }}">Our Projects</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog')}}" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">News</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none"
                                    data-focus="headerSearch" aria-label="Search">
                                    <i
                                        class="icons icon-magnifier header-nav-top-icon font-weight-bold text-4 top-2 text-color-hover-primary"></i>
                                </a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed"
                                    id="headerTopSearchDropdown">
                                    <form role="search" action="" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                                value="" placeholder="Search...">
                                            <button class="btn" type="submit" aria-label="Search">
                                                <i
                                                    class="icons icon-magnifier header-nav-top-icon font-weight-bold text-color-dark text-4 text-color-hover-primary top-2"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                            data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>