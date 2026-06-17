<nav class="navbar navbar-expand-lg custom-navbar fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="logo-text">DIGI-<span>ICONICS</span></span>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <!-- Mega Menu Dropdown -->
                <li class="nav-item dropdown has-mega-menu">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Services <i class="fas fa-chevron-down ms-1 style-icon"></i>
                    </a>
                    <div class="dropdown-menu mega-menu-wrapper p-4">
                        <div class="row">
                            <!-- Column 1 -->
                            <div class="col-md-4 mb-3">
                                <h6 class="mega-title">Web Development</h6>
                                <a class="dropdown-item" href="#"><i class="fab fa-laravel text-danger me-2 ref-icon"></i> Custom Laravel Apps</a>
                                <a class="dropdown-item" href="#"><i class="fab fa-wordpress text-primary me-2 ref-icon"></i> CMS & eCommerce</a>
                            </div>
                            <!-- Column 2 -->
                            <div class="col-md-4 mb-3">
                                <h6 class="mega-title">UI/UX Design</h6>
                                <a class="dropdown-item" href="#"><i class="fab fa-figma text-purple me-2 ref-icon"></i> Figma Prototyping</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-paint-brush text-warning me-2 ref-icon"></i> Interface Design</a>
                            </div>
                            <!-- Column 3 -->
                            <div class="col-md-4 mb-3">
                                <h6 class="mega-title">Digital Marketing</h6>
                                <a class="dropdown-item" href="#"><i class="fas fa-search text-success me-2 ref-icon"></i> SEO Optimization</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bullhorn text-info me-2 ref-icon"></i> Social Media Growth</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-proposal" href="#">Get Proposal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
