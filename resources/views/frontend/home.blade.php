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

    <section class="premium-casestudies-section py-5">
        <div class="ambient-flare flare-casestudies"></div>

        <div class="container py-5">
            <div class="row mb-5 text-center justify-content-center casestudies-header-trigger">
                <div class="col-lg-7">
                    <div class="agency-tag mx-auto mb-3">
                        <span class="tag-pulse"></span>
                        <span class="tag-text">CASE STUDIES</span>
                    </div>
                    <h2 class="section-giant-title">Proven Results, <span class="neon-gradient">Measurable Growth</span>
                    </h2>
                    <p class="section-sub-lead">Real campaigns, real numbers — see how our strategies translated into
                        measurable revenue for global brands.</p>
                </div>
            </div>

            <div class="row g-4 casestudies-grid-trigger">

                <div class="col-lg-4 col-md-6 casestudy-pillar-block">
                    <div class="casestudy-master-card cs-indigo">
                        <div class="casestudy-icon-box cs-icon-indigo">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h2 class="casestudy-stat-number">150<span class="stat-percent-sign">%</span></h2>
                        <p class="casestudy-stat-label">Traffic Growth</p>
                        <div class="casestudy-divider"></div>
                        <h5 class="casestudy-project-title">Luxury Retail Platform</h5>
                        <p class="casestudy-project-category">E-commerce</p>
                        <a href="#" class="casestudy-link-arrow">View Case Study <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 casestudy-pillar-block">
                    <div class="casestudy-master-card cs-warning">
                        <div class="casestudy-icon-box cs-icon-warning">
                            <i class="fas fa-users"></i>
                        </div>
                        <h2 class="casestudy-stat-number">80<span class="stat-percent-sign">%</span></h2>
                        <p class="casestudy-stat-label">User Retention</p>
                        <div class="casestudy-divider"></div>
                        <h5 class="casestudy-project-title">Fintech Dashboard</h5>
                        <p class="casestudy-project-category">SaaS Platform</p>
                        <a href="#" class="casestudy-link-arrow">View Case Study <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 casestudy-pillar-block">
                    <div class="casestudy-master-card cs-cyan">
                        <div class="casestudy-icon-box cs-icon-cyan">
                            <i class="fas fa-search"></i>
                        </div>
                        <h2 class="casestudy-stat-number">260<span class="stat-percent-sign">%</span></h2>
                        <p class="casestudy-stat-label">Organic Revenue</p>
                        <div class="casestudy-divider"></div>
                        <h5 class="casestudy-project-title">Hospitality Brand</h5>
                        <p class="casestudy-project-category">SEO Campaign</p>
                        <a href="#" class="casestudy-link-arrow">View Case Study <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="row mt-5 text-center">
                <div class="col-12">
                    <a href="/portfolio" class="btn btn-outline-info px-5 py-3"
                        style="border-radius: 30px; font-weight: 600; letter-spacing: 1px;">
                        VIEW ALL CASE STUDIES <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="premium-process-section py-5">
        <div class="ambient-flare flare-process"></div>

        <div class="container py-5">
            <div class="row align-items-center process-grid-trigger">

                <div class="col-lg-6 process-content-block">
                    <div class="agency-tag mb-3">
                        <span class="tag-pulse"></span>
                        <span class="tag-text">OUR PROCESS</span>
                    </div>
                    <h2 class="section-giant-title">See How Every Step <span class="neon-gradient">Drives Your
                            Growth</span></h2>
                    <p class="section-sub-lead mb-4">A connected process that takes your idea from concept to a fully
                        launched, scalable digital product, with full visibility at every stage.</p>

                    <div class="process-active-info">
                        <div class="process-active-step" id="processStepLabel">STEP 01</div>
                        <h3 class="process-active-title" id="processTitle">Discovery</h3>
                        <p class="process-active-desc" id="processDesc">Understanding your goals, audience and market
                            position before any work begins.</p>
                    </div>

                    <p class="process-hint-text">Hover any layer — the arrow follows you</p>

                    <a href="#" class="prime-btn mt-3">
                        <span>Start Your Project</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="col-lg-6 process-funnel-block">
                    <svg viewBox="0 0 380 380" class="process-funnel-svg" role="img"
                        aria-label="Interactive 3D funnel with 4 process layers">
                        <defs>
                            <linearGradient id="fl1" x1="0" y1="0" x2="1" y2="0">
                                <stop offset="0%" stop-color="#1d4ed8" />
                                <stop offset="50%" stop-color="#3b82f6" />
                                <stop offset="100%" stop-color="#1e3a8a" />
                            </linearGradient>
                            <linearGradient id="fl2" x1="0" y1="0" x2="1" y2="0">
                                <stop offset="0%" stop-color="#5b21b6" />
                                <stop offset="50%" stop-color="#7c3aed" />
                                <stop offset="100%" stop-color="#4c1d95" />
                            </linearGradient>
                            <linearGradient id="fl3" x1="0" y1="0" x2="1" y2="0">
                                <stop offset="0%" stop-color="#0e7490" />
                                <stop offset="50%" stop-color="#06b6d4" />
                                <stop offset="100%" stop-color="#155e75" />
                            </linearGradient>
                            <linearGradient id="fl4" x1="0" y1="0" x2="1" y2="0">
                                <stop offset="0%" stop-color="#9d174d" />
                                <stop offset="50%" stop-color="#ec4899" />
                                <stop offset="100%" stop-color="#831843" />
                            </linearGradient>
                            <radialGradient id="topRim" cx="50%" cy="30%" r="70%">
                                <stop offset="0%" stop-color="#0a1628" />
                                <stop offset="100%" stop-color="#020617" />
                            </radialGradient>
                        </defs>

                        <ellipse cx="190" cy="50" rx="120" ry="26" fill="url(#topRim)">
                        </ellipse>

                        <path class="funnel-layer" data-step="0" data-arrow-y="88" data-label="STEP 01"
                            data-title="Discovery"
                            data-desc="Understanding your goals, audience and market position before any work begins."
                            data-color="#818cf8" d="M 70 50 L 100 130 Q 190 145 280 130 L 310 50 Q 190 76 70 50 Z"
                            fill="url(#fl1)"></path>
                        <ellipse cx="190" cy="50" rx="120" ry="26" fill="none"
                            stroke="rgba(255,255,255,0.15)" stroke-width="1.5"></ellipse>

                        <path class="funnel-layer" data-step="1" data-arrow-y="160" data-label="STEP 02"
                            data-title="Strategy"
                            data-desc="Mapping the roadmap and defining key milestones for the project."
                            data-color="#d8b4fe" d="M 100 130 L 122 195 Q 190 207 258 195 L 280 130 Q 190 145 100 130 Z"
                            fill="url(#fl2)"></path>

                        <path class="funnel-layer" data-step="2" data-arrow-y="222" data-label="STEP 03"
                            data-title="Design &amp; Build"
                            data-desc="Crafting and engineering the complete digital solution." data-color="#a5f3fc"
                            d="M 122 195 L 140 255 Q 190 264 240 255 L 258 195 Q 190 207 122 195 Z" fill="url(#fl3)">
                        </path>

                        <path class="funnel-layer" data-step="3" data-arrow-y="278" data-label="STEP 04"
                            data-title="Launch &amp; Grow"
                            data-desc="Deploying the product and scaling it for continued ROI." data-color="#fbcfe8"
                            d="M 140 255 L 158 310 Q 190 316 222 310 L 240 255 Q 190 264 140 255 Z" fill="url(#fl4)">
                        </path>
                        <ellipse cx="190" cy="312" rx="32" ry="9" fill="#4a0d28"></ellipse>

                        <!-- Small arrow — default at top (blue layer) -->
                        <g id="processArrowGroup" transform="translate(0,88)">
                            <path class="process-arrow-blink"
                                d="M 184 -8 L 196 -8 L 196 1 L 202 1 L 190 13 L 178 1 L 184 1 Z"
                                fill="rgba(255,255,255,0.95)"></path>
                        </g>

                        <text x="340" y="90" class="funnel-label-text" fill="#a5b4fc">01 Discovery</text>
                        <text x="340" y="165" class="funnel-label-text" fill="#d8b4fe">02 Strategy</text>
                        <text x="340" y="225" class="funnel-label-text" fill="#a5f3fc">03 Build</text>
                        <text x="340" y="285" class="funnel-label-text" fill="#fbcfe8">04 Launch</text>
                    </svg>
                </div>

            </div>
        </div>
    </section>

    <section class="premium-portfolio-section py-5">
        <div class="ambient-flare flare-portfolio"></div>

        <div class="container py-5">
            <div class="row mb-5 text-center justify-content-center portfolio-header-trigger">
                <div class="col-lg-7">
                    <div class="agency-tag mx-auto mb-3">
                        <span class="tag-pulse"></span>
                        <span class="tag-text">OUR WORK</span>
                    </div>
                    <h2 class="section-giant-title">Projects That <span class="neon-gradient">Speak for Themselves</span>
                    </h2>
                    <p class="section-sub-lead">Hand-picked projects across web, marketing, and design — built for scale.
                    </p>
                </div>
            </div>

            {{-- Row 1: 1 big featured + 2 small stacked --}}
            <div class="portfolio-row-top portfolio-top-trigger">

                <div class="port-card port-featured port-indigo" id="portCard1">
                    <div class="port-thumb">
                        {{-- Replace with: <img src="{{ asset('assets/images/portfolio/project-1.jpg') }}" alt="Luxury E-Commerce Platform"> --}}
                        <div class="port-thumb-placeholder"
                            style="background:linear-gradient(135deg,#1e3a8a,#312e81,#4c1d95);">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="port-thumb-overlay"></div>
                        <div class="port-thumb-glow" style="background:rgba(99,102,241,0.15);"></div>
                        <div class="port-thumb-content">
                            <span class="port-cat-tag tag-indigo">WEB DEV · FEATURED</span>
                            <h4 class="port-thumb-title">Luxury E-Commerce Platform</h4>
                        </div>
                        <div class="port-arrow-btn">
                            <i class="fas fa-arrow-up-right"></i>
                        </div>
                    </div>
                    <div class="port-card-footer">
                        <span class="port-stack">Laravel + React · 2024</span>
                        <span class="port-metric-badge badge-indigo">+150% Traffic</span>
                    </div>
                </div>

                <div class="port-right-stack">

                    <div class="port-card port-small port-warning" id="portCard2">
                        <div class="port-thumb port-thumb-sm">
                            <div class="port-thumb-placeholder"
                                style="background:linear-gradient(135deg,#78350f,#92400e);">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="port-thumb-overlay"></div>
                            <div class="port-thumb-content">
                                <h5 class="port-thumb-title-sm">SEO Growth Campaign</h5>
                            </div>
                        </div>
                        <div class="port-card-footer">
                            <span class="port-stack">Hospitality · 2024</span>
                            <span class="port-metric-badge badge-warning">+260% Revenue</span>
                        </div>
                    </div>

                    <div class="port-card port-small port-cyan" id="portCard3">
                        <div class="port-thumb port-thumb-sm">
                            <div class="port-thumb-placeholder"
                                style="background:linear-gradient(135deg,#0e7490,#155e75);">
                                <i class="fas fa-bezier-curve"></i>
                            </div>
                            <div class="port-thumb-overlay"></div>
                            <div class="port-thumb-content">
                                <h5 class="port-thumb-title-sm">Brand Identity System</h5>
                            </div>
                        </div>
                        <div class="port-card-footer">
                            <span class="port-stack">SaaS Startup · 2024</span>
                            <span class="port-metric-badge badge-cyan">UI/UX</span>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Row 2: 3 equal cards --}}
            <div class="portfolio-row-bottom portfolio-bottom-trigger">

                <div class="port-card port-small port-pink" id="portCard4">
                    <div class="port-thumb port-thumb-sm">
                        <div class="port-thumb-placeholder" style="background:linear-gradient(135deg,#701a75,#86198f);">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="port-thumb-overlay"></div>
                        <div class="port-thumb-content">
                            <h5 class="port-thumb-title-sm">Fintech App</h5>
                        </div>
                    </div>
                    <div class="port-card-footer">
                        <span class="port-stack">React Native</span>
                        <span class="port-metric-badge badge-pink">DESIGN</span>
                    </div>
                </div>

                <div class="port-card port-small port-indigo" id="portCard5">
                    <div class="port-thumb port-thumb-sm">
                        <div class="port-thumb-placeholder" style="background:linear-gradient(135deg,#1e3a8a,#1e40af);">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="port-thumb-overlay"></div>
                        <div class="port-thumb-content">
                            <h5 class="port-thumb-title-sm">Retail Portal</h5>
                        </div>
                    </div>
                    <div class="port-card-footer">
                        <span class="port-stack">Laravel</span>
                        <span class="port-metric-badge badge-indigo">WEB DEV</span>
                    </div>
                </div>

                <div class="port-card port-small port-warning" id="portCard6">
                    <div class="port-thumb port-thumb-sm">
                        <div class="port-thumb-placeholder" style="background:linear-gradient(135deg,#7c2d12,#9a3412);">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="port-thumb-overlay"></div>
                        <div class="port-thumb-content">
                            <h5 class="port-thumb-title-sm">Social Campaign</h5>
                        </div>
                    </div>
                    <div class="port-card-footer">
                        <span class="port-stack">Retail Brand</span>
                        <span class="port-metric-badge badge-warning">MARKETING</span>
                    </div>
                </div>

            </div>

            <div class="row mt-5 text-center portfolio-btn-trigger">
                <div class="col-12">
                    <a href="/portfolio" class="btn btn-outline-info px-5 py-3"
                        style="border-radius: 30px; font-weight: 600; letter-spacing: 1px;">
                        VIEW ALL PROJECTS <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="premium-testimonials-section py-5">
        <div class="ambient-flare flare-testimonials"></div>

        <div class="container py-5">
            <div class="row mb-5 text-center justify-content-center testimonials-header-trigger">
                <div class="col-lg-7">
                    <div class="agency-tag mx-auto mb-3">
                        <span class="tag-pulse"></span>
                        <span class="tag-text">TESTIMONIALS</span>
                    </div>
                    <h2 class="section-giant-title">What Our <span class="neon-gradient">Clients Say</span></h2>
                    <p class="section-sub-lead">Trusted by 50+ global brands across web, marketing and design.</p>
                </div>
            </div>
        </div>

        {{-- Row 1: scroll left --}}
        <div class="testimonial-marquee-row marquee-row-trigger">
            <div class="testimonial-track track-scroll-left">
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"DIGI-ICONICS transformed our online presence completely. Revenue up 150% in just 3
                        months."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(99,102,241,0.3);">AK</div>
                        <div class="t-author-info">
                            <div class="t-name">Ahmad Khan</div>
                            <div class="t-role">CEO, LuxeRetail</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"The SEO campaign delivered results we hadn't seen in 5 years of trying other
                        agencies."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(245,158,11,0.3);">SR</div>
                        <div class="t-author-info">
                            <div class="t-name">Sarah Rahman</div>
                            <div class="t-role">Marketing Head, StayElite</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"Our fintech dashboard redesign improved user retention by 80%. Exceptional work."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(34,211,238,0.3);">MU</div>
                        <div class="t-author-info">
                            <div class="t-name">Mike Usman</div>
                            <div class="t-role">CTO, PayFast</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"From branding to web dev — they handled everything flawlessly. True professionals."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(236,72,153,0.3);">NJ</div>
                        <div class="t-author-info">
                            <div class="t-name">Nadia Javed</div>
                            <div class="t-role">Founder, NovaBrand</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"Social media ROI doubled within 60 days. I recommend them to every business owner."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(168,85,247,0.3);">ZA</div>
                        <div class="t-author-info">
                            <div class="t-name">Zain Ali</div>
                            <div class="t-role">Director, GrowthCo</div>
                        </div>
                    </div>
                </div>
                {{-- Duplicates for seamless loop --}}
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"DIGI-ICONICS transformed our online presence completely. Revenue up 150% in just 3
                        months."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(99,102,241,0.3);">AK</div>
                        <div class="t-author-info">
                            <div class="t-name">Ahmad Khan</div>
                            <div class="t-role">CEO, LuxeRetail</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"The SEO campaign delivered results we hadn't seen in 5 years of trying other
                        agencies."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(245,158,11,0.3);">SR</div>
                        <div class="t-author-info">
                            <div class="t-name">Sarah Rahman</div>
                            <div class="t-role">Marketing Head, StayElite</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"Our fintech dashboard redesign improved user retention by 80%. Exceptional work."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(34,211,238,0.3);">MU</div>
                        <div class="t-author-info">
                            <div class="t-name">Mike Usman</div>
                            <div class="t-role">CTO, PayFast</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"From branding to web dev — they handled everything flawlessly. True professionals."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(236,72,153,0.3);">NJ</div>
                        <div class="t-author-info">
                            <div class="t-name">Nadia Javed</div>
                            <div class="t-role">Founder, NovaBrand</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"Social media ROI doubled within 60 days. I recommend them to every business owner."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(168,85,247,0.3);">ZA</div>
                        <div class="t-author-info">
                            <div class="t-name">Zain Ali</div>
                            <div class="t-role">Director, GrowthCo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 2: scroll right --}}
        <div class="testimonial-marquee-row mt-4">
            <div class="testimonial-track track-scroll-right">
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"Best digital agency we've worked with. Delivered 3x our expected results on time."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(34,211,238,0.3);">FA</div>
                        <div class="t-author-info">
                            <div class="t-name">Farhan Aziz</div>
                            <div class="t-role">CMO, TechVault</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"The UI/UX redesign reduced our bounce rate by 45%. Stunning work every single
                        time."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(99,102,241,0.3);">LP</div>
                        <div class="t-author-info">
                            <div class="t-name">Layla Park</div>
                            <div class="t-role">Product Lead, DesignHub</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"They built our entire e-commerce system from scratch. Absolutely flawless
                        execution."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(245,158,11,0.3);">HM</div>
                        <div class="t-author-info">
                            <div class="t-name">Hassan Malik</div>
                            <div class="t-role">Owner, ShopElite</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"Google ranking went from page 5 to top 3 in just 4 months. Truly remarkable team."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(236,72,153,0.3);">RK</div>
                        <div class="t-author-info">
                            <div class="t-name">Rania Khan</div>
                            <div class="t-role">CEO, BloomDigital</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"App downloads tripled after their ASO and social media strategy. Absolutely
                        incredible."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(168,85,247,0.3);">TS</div>
                        <div class="t-author-info">
                            <div class="t-name">Tariq Shah</div>
                            <div class="t-role">Founder, AppNova</div>
                        </div>
                    </div>
                </div>
                {{-- Duplicates for seamless loop --}}
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"Best digital agency we've worked with. Delivered 3x our expected results on time."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(34,211,238,0.3);">FA</div>
                        <div class="t-author-info">
                            <div class="t-name">Farhan Aziz</div>
                            <div class="t-role">CMO, TechVault</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"The UI/UX redesign reduced our bounce rate by 45%. Stunning work every single
                        time."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(99,102,241,0.3);">LP</div>
                        <div class="t-author-info">
                            <div class="t-name">Layla Park</div>
                            <div class="t-role">Product Lead, DesignHub</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"They built our entire e-commerce system from scratch. Absolutely flawless
                        execution."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(245,158,11,0.3);">HM</div>
                        <div class="t-author-info">
                            <div class="t-name">Hassan Malik</div>
                            <div class="t-role">Owner, ShopElite</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"Google ranking went from page 5 to top 3 in just 4 months. Truly remarkable team."
                    </p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(236,72,153,0.3);">RK</div>
                        <div class="t-author-info">
                            <div class="t-name">Rania Khan</div>
                            <div class="t-role">CEO, BloomDigital</div>
                        </div>
                    </div>
                </div>
                <div class="t-card">
                    <div class="t-stars">★★★★★</div>
                    <p class="t-quote">"App downloads tripled after their ASO and social media strategy. Absolutely
                        incredible."</p>
                    <div class="t-author">
                        <div class="t-avatar" style="background:rgba(168,85,247,0.3);">TS</div>
                        <div class="t-author-info">
                            <div class="t-name">Tariq Shah</div>
                            <div class="t-role">Founder, AppNova</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection
