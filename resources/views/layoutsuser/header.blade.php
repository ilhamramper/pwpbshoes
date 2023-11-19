@php
    function setActive($routeName, $activePage = '')
    {
        return request()->routeIs($routeName) ? 'active' : $activePage;
    }

    // Tentukan halaman aktif berdasarkan rute saat ini
    $activePage = request()->routeIs(['home', 'contact']) ? 'active' : '';

    // Periksa apakah salah satu submenu aktif di dalam "Shop"
    $submenuActive = request()->routeIs(['shop', 'product.detail', 'product.checkout', 'confirmation']) ? 'active' : '';
@endphp

<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('karma/img/logo.png') }}"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item {{ setActive('home') }}"><a class="nav-link"
                                href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item submenu dropdown {{ $submenuActive }}">
                            <a href="#" class="nav-link dropdown-toggle" id="pagesDropdown"
                                data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="active-link">Shop</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item {{ setActive('shop') }}"><a class="nav-link"
                                        href="{{ route('shop') }}">Shop</a></li>
                                <li class="nav-item {{ setActive('product.detail') }}"><a class="nav-link"
                                        href="{{ route('product.detail') }}">Product
                                        Details</a></li>
                                <li class="nav-item {{ setActive('product.checkout') }}"><a class="nav-link"
                                        href="{{ route('product.checkout') }}">Product
                                        Checkout</a></li>
                                <li class="nav-item {{ setActive('confirmation') }}"><a class="nav-link"
                                        href="{{ route('confirmation') }}">Confirmation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item {{ setActive('contact') }}"><a class="nav-link"
                                href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item @if (request()->is('cart')) active @endif">
                            <a href="{{ route('cart') }}">
                                <span class="ti-bag @if (request()->is('cart')) text-warning @endif"></span>
                            </a>
                        </li>
                        <li class="nav-item @if (request()->is('wishlist')) active @endif">
                            <a href="{{ route('wishlist') }}">
                                <span class="ti-heart @if (request()->is('wishlist')) text-warning @endif"></span>
                            </a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="position-relative">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" type="button" id="userDropdown"
                                            data-toggle="dropdown">
                                            <span class="ti-user"></span>
                                            <span class="caret"></span>
                                        </a>
                                        <style>
                                            .dropdown-toggle::after {
                                                border-top: 0.3em solid #ffba00;
                                                border-right: 0.3em solid transparent;
                                                border-bottom: 0;
                                                border-left: 0.3em solid transparent;
                                                content: '';
                                                display: inline-block;
                                                margin-left: 0.200em;
                                                vertical-align: 0.255em;
                                            }
                                        </style>
                                        <div class="dropdown-menu" aria-labelledby="userDropdown"
                                            style="position: absolute; left: 40%; transform: translateX(-60%); top: 100%;">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li class="position-relative">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" type="button" id="userDropdown"
                                            data-toggle="dropdown">
                                            <span class="ti-user"></span>
                                            <span class="caret"></span>
                                        </a>
                                        <style>
                                            .dropdown-toggle::after {
                                                border-top: 0.3em solid #ffba00;
                                                border-right: 0.3em solid transparent;
                                                border-bottom: 0;
                                                border-left: 0.3em solid transparent;
                                                content: '';
                                                display: inline-block;
                                                margin-left: 0.255em;
                                                vertical-align: 0.255em;
                                            }
                                        </style>
                                        <div class="dropdown-menu" aria-labelledby="userDropdown"
                                            style="position: absolute; left: 40%; transform: translateX(-60%); top: 100%;">
                                            <a class="dropdown-item" href="{{ route('login') }}">Login/Register</a>
                                        </div>
                                    </div>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->