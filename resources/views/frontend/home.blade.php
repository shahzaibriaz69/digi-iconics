@extends('layout.app')

@section('title', 'Home | DIGI-ICONICS')

@section('content')
<section class="premium-hero">
    <div class="ambient-flare flare-1"></div>
    <div class="ambient-flare flare-2"></div>

    <div class="container content-container-rebalance">
        <div class="row align-items-center min-vh-100">

            <div class="col-lg-6 content-pillar">
                <div class="agency-tag">
                    <span class="tag-pulse"></span>
                    <span class="tag-text">NEXT-GEN DIGITAL AGENCY</span>
                </div>

                <h1 class="giant-title">
                    <div class="title-line"><span class="anim-word">Grow</span> <span class="anim-word">Your</span> <span class="anim-word">Business</span></div>
                    <div class="title-line"><span class="anim-word">With</span> <span class="anim-word neon-gradient">Modern</span></div>
                    <div class="title-line"><span class="anim-word neon-gradient">Digital</span> <span class="anim-word">Solutions</span></div>
                </h1>

                <p class="sub-lead">
                    We engineer high-end web applications, immersive interfaces, and performance-driven marketing strategies tailored to scale modern enterprise brands globally.
                </p>

                <div class="action-trigger-group">
                    <a href="#" class="prime-btn">
                        <span>Get Proposal</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="#" class="ghost-btn">
                        <span>View Portfolio</span>
                    </a>
                </div>

                <div class="stat-matrix-row">
                    <div class="matrix-box">
                        <h2>150<span class="plus-sign">+</span></h2>
                        <p>Projects Completed</p>
                    </div>
                    <div class="matrix-box">
                        <h2>5<span class="plus-sign">+</span></h2>
                        <p>Years Experience</p>
                    </div>
                    <div class="matrix-box">
                        <h2>100<span class="plus-sign">%</span></h2>
                        <p>Satisfaction Rate</p>
                    </div>
                    <div class="matrix-box">
                        <h2>50<span class="plus-sign">+</span></h2>
                        <p>Global Clients</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 dynamic-visual-pillar">
                <div class="cyber-orbital-system">
                    <div class="reference-ring ring-lg"></div>
                    <div class="reference-ring ring-md"></div>
                    <div class="reference-ring ring-sm"></div>
                    {{-- <div class="orbiting-dot"></div> --}}

                    <div class="premium-glass-card glass-web">
                        <div class="glass-icon-shield sh-web"><i class="fas fa-code"></i></div>
                        <div class="glass-meta"><h5>Web Dev</h5><p>Fast & Scalable</p></div>
                    </div>

                    <div class="premium-glass-card glass-marketing">
                        <div class="glass-icon-shield sh-marketing"><i class="fas fa-chart-line"></i></div>
                        <div class="glass-meta"><h5>Marketing</h5><p>Maximize ROI</p></div>
                    </div>

                    <div class="premium-glass-card glass-app">
                        <div class="glass-icon-shield sh-app"><i class="fas fa-mobile-alt"></i></div>
                        <div class="glass-meta"><h5>App Dev</h5><p>iOS & Android</p></div>
                    </div>

                    <div class="premium-glass-card glass-seo">
                        <div class="glass-icon-shield sh-seo"><i class="fas fa-search"></i></div>
                        <div class="glass-meta"><h5>SEO Growth</h5><p>Dominate Search</p></div>
                    </div>

                    <div class="premium-glass-card glass-social">
                        <div class="glass-icon-shield sh-social"><i class="fas fa-bullhorn"></i></div>
                        <div class="glass-meta"><h5>Social Media</h5><p>Strategic Ads</p></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
