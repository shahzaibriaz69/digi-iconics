@extends('layout.app')

@section('title', 'Home | DIGI-ICONICS')

@section('content')
<!-- ==========================================================================
   02 HERO SECTION LAYOUT
   ========================================================================== -->
<section class="hero-section d-flex align-items-center">
    <!-- Subtle Background Glow Gradients -->
    <div class="glow-bg-1"></div>
    <div class="glow-bg-2"></div>

    <div class="container position-relative">
        <div class="row align-items-center min-vh-100 py-5">

            <!-- Left Column: Copywriting & Stats -->
            <div class="col-lg-6 hero-content-block mb-5 mb-lg-0">
                <span class="badge hero-badge mb-3"><i class="fas fa-rocket me-2"></i> Next-Gen Digital Agency</span>
                <h1 class="hero-title mb-3">
                    Grow Your Business With <span class="text-gradient">Modern Digital</span> Solutions
                </h1>
                <p class="hero-description mb-4">
                    We create high-end websites, web applications, and marketing strategies that drive measurable growth and seamless user experiences.
                </p>

                <!-- CTA Action Buttons -->
                <div class="hero-btns-group mb-5">
                    <a href="#" class="btn btn-primary-custom me-3">Get Proposal <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="#" class="btn btn-secondary-custom">View Portfolio</a>
                </div>

                <!-- Mini Live Stats Matrix -->
                <div class="row hero-stats-grid">
                    <div class="col-4 stat-box">
                        <h3 class="stat-number">150+</h3>
                        <p class="stat-label">Projects Completed</p>
                    </div>
                    <div class="col-4 stat-box">
                        <h3 class="stat-number">98%</h3>
                        <p class="stat-label">Satisfaction Rate</p>
                    </div>
                    <div class="col-4 stat-box">
                        <h3 class="stat-number">50+</h3>
                        <p class="stat-label">Global Clients</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Animated Floating Tech Stack -->
         <div class="col-lg-6 position-relative d-flex justify-content-center align-items-center hero-animation-block">
    <div class="animation-container-wrapper">
        <div class="central-orb"></div>

        <div class="floating-tech-card tech-laravel">
            <div class="card-icon-box bg-dev-soft">
                <i class="fas fa-code text-indigo"></i>
            </div>
            <div class="card-info">
                <h6>Web Dev</h6>
                <p>Fast & Scalable</p>
            </div>
        </div>

        <div class="floating-tech-card tech-php">
            <div class="card-icon-box bg-marketing-soft">
                <i class="fas fa-chart-line text-warning"></i>
            </div>
            <div class="card-info">
                <h6>Digital Marketing</h6>
                <p>Maximize ROI</p>
            </div>
        </div>

        <div class="floating-tech-card tech-uiux">
            <div class="card-icon-box bg-app-soft">
                <i class="fas fa-mobile-alt text-purple"></i>
            </div>
            <div class="card-info">
                <h6>App Dev</h6>
                <p>iOS & Android</p>
            </div>
        </div>

        <div class="floating-tech-card tech-seo">
            <div class="card-icon-box bg-seo-soft">
                <i class="fas fa-search text-success"></i>
            </div>
            <div class="card-info">
                <h6>SEO Services</h6>
                <p>Dominate Search</p>
            </div>
        </div>

        <div class="floating-tech-card tech-marketing">
            <div class="card-icon-box bg-social-soft">
                <i class="fas fa-bullhorn text-pink"></i>
            </div>
            <div class="card-info">
                <h6>Social Media</h6>
                <p>Strategic Ads</p>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</section>
@endsection
