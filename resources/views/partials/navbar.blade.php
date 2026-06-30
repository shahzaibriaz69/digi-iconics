<nav class="navbar navbar-expand-lg custom-navbar fixed-top" id="mainNav">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/digi-iconics-logo.png') }}" alt="DIGI-ICONICS" class="logo-img">
        </a>

        <!-- Mobile Toggler -->
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="toggler-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ url('/about') }}">About</a>
                </li>

                <li class="nav-item dropdown has-mega-menu">
                    <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}" href="#"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services <i class="fas fa-chevron-down ms-1 style-icon"></i>
                    </a>
                    <div class="dropdown-menu mega-menu-wrapper p-4">
                        <div class="row custom-mega-row">

                            <div class="col-md-4 mega-column-border">
                                <div class="mega-header-wrapper">
                                    <div class="mega-icon-box mega-icon-indigo">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                    <h6 class="mega-title">Development</h6>
                                </div>
                                <div class="mega-links-container">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-code text-indigo ref-icon"></i>
                                        <span>Web Development</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fab fa-wordpress text-wordpress ref-icon"></i>
                                        <span>CMS & eCommerce</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-mobile-alt text-purple ref-icon"></i>
                                        <span>App Development</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 mega-column-border">
                                <div class="mega-header-wrapper">
                                    <div class="mega-icon-box mega-icon-warning">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                    <h6 class="mega-title">Marketing & SEO</h6>
                                </div>
                                <div class="mega-links-container">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-chart-line text-warning ref-icon"></i>
                                        <span>Digital Marketing</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-search text-success ref-icon"></i>
                                        <span>SEO Services</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-bullhorn text-pink ref-icon"></i>
                                        <span>Social Media</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mega-header-wrapper">
                                    <div class="mega-icon-box mega-icon-cyan">
                                        <i class="fas fa-bezier-curve"></i>
                                    </div>
                                    <h6 class="mega-title">Creative Studio</h6>
                                </div>
                                <div class="mega-links-container">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-palette text-cyan ref-icon"></i>
                                        <span>Graphic Design</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-wand-magic-sparkles text-pink-soft ref-icon"></i>
                                        <span>Branding Services</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fab fa-figma text-figma ref-icon"></i>
                                        <span>UI/UX Design</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('portfolio*') ? 'active' : '' }}"
                        href="{{ url('/portfolio') }}">Portfolio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog*') ? 'active' : '' }}"
                        href="{{ url('/blog') }}">Blog</a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a class="btn btn-proposal" href="{{ url('/contact') }}">Get Proposal</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
