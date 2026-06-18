@extends('layout.app')

@section('title', 'Home | DIGI-ICONICS')

@section('content')
    <section class="premium-hero">
        <div class="ambient-flare flare-1"></div>
        {{-- <div class="ambient-flare flare-2"></div> --}}

        <div class="container content-container-rebalance">
            <div class="row align-items-center min-vh-100">

                <div class="col-lg-6 content-pillar">
                    <div class="agency-tag">
                        <span class="tag-pulse"></span>
                        <span class="tag-text">NEXT-GEN DIGITAL AGENCY</span>
                    </div>

                    <h1 class="giant-title">
                        <div class="title-line"><span class="anim-word">Grow</span> <span class="anim-word">Your</span>
                            <span class="anim-word">Business</span>
                        </div>
                        <div class="title-line"><span class="anim-word">With</span> <span
                                class="anim-word neon-gradient">Modern</span></div>
                        <div class="title-line"><span class="anim-word neon-gradient">Digital</span> <span
                                class="anim-word">Solutions</span></div>
                    </h1>

                    <p class="sub-lead">
                        We engineer high-end web applications, immersive interfaces, and performance-driven marketing
                        strategies tailored to scale modern enterprise brands globally.
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
                            <div class="glass-meta">
                                <h5>Web Dev</h5>
                                <p>Fast & Scalable</p>
                            </div>
                        </div>

                        <div class="premium-glass-card glass-marketing">
                            <div class="glass-icon-shield sh-marketing"><i class="fas fa-chart-line"></i></div>
                            <div class="glass-meta">
                                <h5>Marketing</h5>
                                <p>Maximize ROI</p>
                            </div>
                        </div>

                        <div class="premium-glass-card glass-app">
                            <div class="glass-icon-shield sh-app"><i class="fas fa-mobile-alt"></i></div>
                            <div class="glass-meta">
                                <h5>App Dev</h5>
                                <p>iOS & Android</p>
                            </div>
                        </div>

                        <div class="premium-glass-card glass-seo">
                            <div class="glass-icon-shield sh-seo"><i class="fas fa-search"></i></div>
                            <div class="glass-meta">
                                <h5>SEO Growth</h5>
                                <p>Dominate Search</p>
                            </div>
                        </div>

                        <div class="premium-glass-card glass-social">
                            <div class="glass-icon-shield sh-social"><i class="fas fa-bullhorn"></i></div>
                            <div class="glass-meta">
                                <h5>Social Media</h5>
                                <p>Strategic Ads</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="premium-services-section py-5">
        <div class="ambient-flare flare-services"></div>

        <div class="container py-5">
            <div class="row mb-5 text-center justify-content-center service-header-trigger">
                <div class="col-lg-7">
                    <div class="agency-tag mx-auto mb-3">
                        <span class="tag-pulse"></span>
                        <span class="tag-text">OUR EXPERTISE</span>
                    </div>
                    <h2 class="section-giant-title">Services We <span class="neon-gradient">Provide</span></h2>
                    <p class="section-sub-lead">We deliver high-end digital architecture and strategic marketing engineering
                        designed to elevate global enterprise brands.</p>
                </div>
            </div>

            <div class="row g-4 services-grid-trigger">

                <div class="col-lg-4 col-md-6 service-pillar-block">
                    <div class="service-master-card glass-card-indigo">
                        <div class="card-glow-drop"></div>
                        <div class="service-card-header">
                            <div class="service-icon-box sh-web"><i class="fas fa-laptop-code"></i></div>
                            <h4 class="service-main-title">Development</h4>
                        </div>
                        <p class="service-desc">Engineering robust backend ecosystems and highly intuitive interface
                            platforms customized for commercial operations.</p>
                        <div class="service-sub-tags">
                            <span class="sub-tag-node">Web Dev</span>
                            <span class="sub-tag-node">CMS & eCommerce</span>
                            <span class="sub-tag-node">App Dev</span>
                        </div>
                        <a href="#" class="service-arrow-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 service-pillar-block">
                    <div class="service-master-card glass-card-warning">
                        <div class="card-glow-drop"></div>
                        <div class="service-card-header">
                            <div class="service-icon-box sh-marketing"><i class="fas fa-rocket"></i></div>
                            <h4 class="service-main-title">Marketing & SEO</h4>
                        </div>
                        <p class="service-desc">Driving geometric data monetization strategies and search position
                            optimizations to dominate online market footprints.</p>
                        <div class="service-sub-tags">
                            <span class="sub-tag-node">Digital Marketing</span>
                            <span class="sub-tag-node">SEO Services</span>
                            <span class="sub-tag-node">Social Media</span>
                        </div>
                        <a href="#" class="service-arrow-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 service-pillar-block">
                    <div class="service-master-card glass-card-cyan">
                        <div class="card-glow-drop"></div>
                        <div class="service-card-header">
                            <div class="service-icon-box sh-seo"><i class="fas fa-bezier-curve"></i></div>
                            <h4 class="service-main-title">Creative Studio</h4>
                        </div>
                        <p class="service-desc">Sculpting high-fidelity interface layouts, strategic user wireframes, and
                            memorable brand vector identities.</p>
                        <div class="service-sub-tags">
                            <span class="sub-tag-node">UI/UX Design</span>
                            <span class="sub-tag-node">Graphic Design</span>
                            <span class="sub-tag-node">Branding Services</span>
                        </div>
                        <a href="#" class="service-arrow-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="row mt-5 text-center">
                <div class="col-12">
                    <a href="/services" class="btn btn-outline-info px-5 py-3"
                        style="border-radius: 30px; font-weight: 600; letter-spacing: 1px;">
                        VIEW ALL SERVICES <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="premium-whychoose-section py-5">
        <div class="ambient-flare flare-whychoose"></div>

        <div class="container py-5">
            <div class="row mb-5 text-center justify-content-center whychoose-header-trigger">
                <div class="col-lg-7">
                    <div class="agency-tag mx-auto mb-3">
                        <span class="tag-pulse"></span>
                        <span class="tag-text">WHY CHOOSE US</span>
                    </div>
                    <h2 class="section-giant-title">Built Different, <span class="neon-gradient">Built Better</span></h2>
                    <p class="section-sub-lead">We combine strategic thinking, premium craft, and reliable execution to
                        deliver results that compound over time.</p>
                </div>
            </div>

            <div class="row g-4 align-items-center whychoose-grid-trigger">

                <div class="col-lg-5 whychoose-stat-block">
                    <div class="whychoose-stat-panel">
                        <div class="stat-icon-ring">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h2 class="stat-big-number">5<span class="plus-sign">+</span></h2>
                        <p class="stat-label">Years of Excellence</p>
                        <div class="stat-divider"></div>
                        <p class="stat-footnote">Trusted by 50+ global brands to deliver premium digital experiences.</p>
                    </div>
                </div>

                <div class="col-lg-7 whychoose-list-block">
                    <div class="whychoose-row-item">
                        <div class="whychoose-icon-box sh-web">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="whychoose-row-meta">
                            <h5>Strategic Thinking</h5>
                            <p>Every decision backed by data and intent.</p>
                        </div>
                    </div>

                    <div class="whychoose-row-item">
                        <div class="whychoose-icon-box sh-marketing">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div class="whychoose-row-meta">
                            <h5>Fast Delivery</h5>
                            <p>Agile sprints that ship without compromise.</p>
                        </div>
                    </div>

                    <div class="whychoose-row-item">
                        <div class="whychoose-icon-box sh-seo">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="whychoose-row-meta">
                            <h5>Reliable Support</h5>
                            <p>24/7 partnership long after launch.</p>
                        </div>
                    </div>

                    <div class="whychoose-row-item">
                        <div class="whychoose-icon-box sh-social">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="whychoose-row-meta">
                            <h5>Premium Craft</h5>
                            <p>Pixel-level obsession on every screen.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
