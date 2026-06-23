// ==========================================================================
// DIGI-ICONICS 3D CINEMATIC EDGE-TO-EDGE INTRO GRAPHICS ENGINE
// ==========================================================================
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap !== "undefined") {

        const screenWidth = window.innerWidth;
        const entryOffset = screenWidth > 1200 ? screenWidth * 0.6 : 800;

        gsap.set(".content-pillar, .cyber-orbital-system", { clearProps: "all" });


        gsap.set(".content-pillar", { perspective: 1000, transformStyle: "preserve-3d" });
        gsap.set(".cyber-orbital-system", { perspective: 1500, transformStyle: "preserve-3d" });


        const cinematicTimeline = gsap.timeline();

        cinematicTimeline.from(".content-pillar", {
            x: -entryOffset,
            opacity: 0,
            duration: 1.6,
            ease: "power4.out"
        });

        cinematicTimeline.from(".cyber-orbital-system", {
            x: entryOffset,
            rotationY: -45,
            skewX: 5,
            opacity: 0,
            duration: 1.8,
            ease: "power4.out"
        }, "-=1.4");


        cinematicTimeline.to(".anim-word", {
            y: "0%",
            opacity: 1,
            duration: 1.0,
            stagger: 0.05,
            ease: "power3.out"
        }, "-=0.8");


        cinematicTimeline.from(".reference-ring, .core-nebula", {
            opacity: 0,
            scale: 0.5,
            duration: 1.2,
            stagger: 0.1,
            ease: "power2.out"
        }, "-=1.0");


        function applyPremiumFloat(element, xMax, yMax, rMax, duration) {
            gsap.to(element, {
                x: `random(${-xMax}, ${xMax})`,
                duration: duration,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });

            gsap.to(element, {
                y: `random(${-yMax}, ${yMax})`,
                duration: duration * 1.25,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });

            gsap.to(element, {
                rotationZ: `random(${-rMax}, ${rMax})`,
                rotationY: `random(${-rMax * 1.5}, ${rMax * 1.5})`,
                duration: duration * 1.5,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
        }


        applyPremiumFloat(".glass-web", 12, 20, 3, 4.2);
        applyPremiumFloat(".glass-app", 15, 16, 4, 4.8);
        applyPremiumFloat(".glass-social", 8, 10, 2, 5.5);
        applyPremiumFloat(".glass-marketing", 16, 18, 4, 5.0);
        applyPremiumFloat(".glass-seo", 14, 15, 3, 4.6);

        gsap.to(".orbiting-dot", {
            motionPath: {
                path: [{x: 0, y: -220}, {x: 220, y: 0}, {x: 0, y: 220}, {x: -220, y: 0}, {x: 0, y: -220}],
                curviness: 1.5
            },
            duration: 12,
            repeat: -1,
            ease: "none"
        });
    }
});


// ==========================================================================
        // 6. SERVICES GRID SCROLLTRIGGER CINEMATIC EFFECT
        // ==========================================================================
document.addEventListener("DOMContentLoaded", function () {
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);


        gsap.from(".service-header-trigger > *", {
            scrollTrigger: {
                trigger: ".service-header-trigger",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 2.5,
            stagger: 0.15,
            ease: "power3.out"
        });


        gsap.from(".services-grid-trigger .service-pillar-block:nth-child(1)", {
            scrollTrigger: {
                trigger: ".services-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            x: -150,
            rotationY: 25,
            opacity: 0,
            duration: 2.5,
            ease: "power4.out"
        });


        gsap.from(".services-grid-trigger .service-pillar-block:nth-child(2)", {
            scrollTrigger: {
                trigger: ".services-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            y: 150,
            rotationX: -20,
            opacity: 0,
            duration: 2.5,
            ease: "power4.out"
        });


        gsap.from(".services-grid-trigger .service-pillar-block:nth-child(3)", {
            scrollTrigger: {
                trigger: ".services-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            x: 150,
            rotationY: -25,
            opacity: 0,
            duration: 2.5,
            ease: "power4.out"
        });


        gsap.from(".premium-services-section .btn-outline-info", {
            scrollTrigger: {
                trigger: ".premium-services-section .btn-outline-info",
                start: "top 90%",
                toggleActions: "play none none none"
            },
            y: 40,
            scale: 0.9,
            opacity: 0,
            duration: 1.5,
            delay: 0.3,
            ease: "back.out(1.7)"
        });


        ScrollTrigger.refresh();
    }
});


document.addEventListener("DOMContentLoaded", function () {
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);


        gsap.from(".whychoose-header-trigger > *", {
            scrollTrigger: {
                trigger: ".whychoose-header-trigger",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: "power3.out"
        });


        gsap.from(".whychoose-stat-panel", {
            scrollTrigger: {
                trigger: ".whychoose-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            scale: 0.85,
            opacity: 0,
            duration: 1.4,
            ease: "power4.out"
        });


        gsap.from(".whychoose-row-item", {
            scrollTrigger: {
                trigger: ".whychoose-list-block",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            x: 120,
            opacity: 0,
            duration: 1.1,
            stagger: 0.18,
            ease: "power4.out"
        });


        ScrollTrigger.refresh();
    }
});

// ==========================================================================
// 8. CASE STUDIES - 3D SCROLLTRIGGER CINEMATIC EFFECT
// ==========================================================================
document.addEventListener("DOMContentLoaded", function () {
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        gsap.from(".casestudies-header-trigger > *", {
            scrollTrigger: {
                trigger: ".casestudies-header-trigger",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: "power3.out"
        });

        gsap.from(".casestudies-grid-trigger .casestudy-pillar-block:nth-child(1)", {
            scrollTrigger: {
                trigger: ".casestudies-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            x: -150,
            rotationY: 25,
            opacity: 0,
            duration: 1.4,
            ease: "power4.out"
        });

        gsap.from(".casestudies-grid-trigger .casestudy-pillar-block:nth-child(2)", {
            scrollTrigger: {
                trigger: ".casestudies-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            y: 150,
            rotationX: -20,
            opacity: 0,
            duration: 1.4,
            ease: "power4.out"
        });

        gsap.from(".casestudies-grid-trigger .casestudy-pillar-block:nth-child(3)", {
            scrollTrigger: {
                trigger: ".casestudies-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            x: 150,
            rotationY: -25,
            opacity: 0,
            duration: 1.4,
            ease: "power4.out"
        });

        gsap.from(".premium-casestudies-section .btn-outline-info", {
            scrollTrigger: {
                trigger: ".premium-casestudies-section .btn-outline-info",
                start: "top 90%",
                toggleActions: "play none none none"
            },
            y: 40,
            scale: 0.9,
            opacity: 0,
            duration: 1,
            delay: 0.3,
            ease: "back.out(1.7)"
        });

        ScrollTrigger.refresh();
    }
});

// ==========================================================================
// 10. PORTFOLIO SECTION - FIXED 3D ENTRANCE + TILT HOVER
// ==========================================================================
document.addEventListener("DOMContentLoaded", function () {

    // ---- Ensure cards start visible (prevent stuck-invisible bug) ----
    gsap.set([
        ".port-featured",
        ".port-right-stack .port-card",
        ".portfolio-bottom-trigger .port-card"
    ], { clearProps: "all" });

    // ---- 3D Tilt + Glow on hover ----
    var portConfigs = [
        { id: "portCard1", color: "#818cf8", glow: "rgba(99,102,241,0.25)"  },
        { id: "portCard2", color: "#fbbf24", glow: "rgba(245,158,11,0.25)"  },
        { id: "portCard3", color: "#22d3ee", glow: "rgba(34,211,238,0.25)"  },
        { id: "portCard4", color: "#f472b6", glow: "rgba(236,72,153,0.25)"  },
        { id: "portCard5", color: "#818cf8", glow: "rgba(99,102,241,0.25)"  },
        { id: "portCard6", color: "#fbbf24", glow: "rgba(245,158,11,0.25)"  }
    ];

    portConfigs.forEach(function (cfg) {
        var card = document.getElementById(cfg.id);
        if (!card) return;

        card.addEventListener("mousemove", function (e) {
            var rect = card.getBoundingClientRect();
            var x    = ((e.clientX - rect.left)  / rect.width  - 0.5) * 12;
            var y    = ((e.clientY - rect.top)    / rect.height - 0.5) * -12;
            card.style.transform    = "perspective(700px) rotateX(" + y + "deg) rotateY(" + x + "deg) translateY(-5px)";
            card.style.borderColor  = cfg.color + "80";
            card.style.boxShadow    = "0 16px 36px rgba(0,0,0,0.4), 0 0 28px " + cfg.glow;
        });

        card.addEventListener("mouseleave", function () {
            card.style.transform    = "perspective(700px) rotateX(0) rotateY(0) translateY(0)";
            card.style.borderColor  = "rgba(255,255,255,0.09)";
            card.style.boxShadow    = "none";
        });
    });

    // ---- ScrollTrigger Animations ----
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        // Heading
        gsap.from(".portfolio-header-trigger > *", {
            scrollTrigger: {
                trigger: ".portfolio-header-trigger",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: "power3.out"
        });

        // Featured card — from left
        gsap.from(".port-featured", {
            scrollTrigger: {
                trigger: ".portfolio-top-trigger",
                start: "top 82%",
                toggleActions: "play none none none"
            },
            x: -130,
            rotationY: 20,
            opacity: 0,
            duration: 1.4,
            ease: "power4.out"
        });

        // Right stacked cards — from right, staggered
        gsap.from(".port-right-stack .port-card", {
            scrollTrigger: {
                trigger: ".portfolio-top-trigger",
                start: "top 82%",
                toggleActions: "play none none none"
            },
            x: 130,
            opacity: 0,
            duration: 1.4,
            stagger: 0.18,
            ease: "power4.out"
        });

        // Bottom 3 cards — from bottom, staggered 3D
        gsap.from(".portfolio-bottom-trigger .port-card", {
            scrollTrigger: {
                trigger: ".portfolio-bottom-trigger",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            y: 90,
            rotationX: 15,
            opacity: 0,
            duration: 1.2,
            stagger: 0.18,
            ease: "power4.out"
        });

        // Button
        gsap.from(".portfolio-btn-trigger", {
            scrollTrigger: {
                trigger: ".portfolio-btn-trigger",
                start: "top 92%",
                toggleActions: "play none none none"
            },
            y: 40,
            scale: 0.9,
            opacity: 0,
            duration: 1,
            delay: 0.2,
            ease: "back.out(1.7)"
        });

        // Refresh AFTER full page load (fonts + images settled)
        window.addEventListener("load", function () {
            ScrollTrigger.refresh();
        });
    }
});

// ==========================================================================
// 11. TESTIMONIALS - SCROLLTRIGGER ENTRANCE ANIMATION
// ==========================================================================
document.addEventListener("DOMContentLoaded", function () {
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        // Heading pop-up
        gsap.from(".testimonials-header-trigger > *", {
            scrollTrigger: {
                trigger: ".testimonials-header-trigger",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: "power3.out"
        });

        // Row 1: slide in from left
        gsap.from(".marquee-row-trigger", {
            scrollTrigger: {
                trigger: ".marquee-row-trigger",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            x: -80,
            opacity: 0,
            duration: 1.2,
            ease: "power3.out"
        });

        // Row 2: slide in from right
        gsap.from(".testimonial-marquee-row:nth-of-type(2)", {
            scrollTrigger: {
                trigger: ".testimonial-marquee-row:nth-of-type(2)",
                start: "top 90%",
                toggleActions: "play none none none"
            },
            x: 80,
            opacity: 0,
            duration: 1.2,
            ease: "power3.out"
        });

        ScrollTrigger.refresh();
    }
});


// ==========================================================================
// 12. FAQ SECTION - ACCORDION + SCROLLTRIGGER
// ==========================================================================
document.addEventListener("DOMContentLoaded", function () {

    // ---- Accordion Logic ----
    var faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(function (item) {
        var header = item.querySelector(".faq-header");
        if (!header) return;

        header.addEventListener("click", function () {
            var isActive = item.classList.contains("faq-active");

            // Close all
            faqItems.forEach(function (i) {
                i.classList.remove("faq-active");
            });

            // Open clicked (if wasn't already open)
            if (!isActive) {
                item.classList.add("faq-active");
            }
        });
    });

    // ---- ScrollTrigger ----
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        // Heading
        gsap.from(".faq-header-trigger > *", {
            scrollTrigger: {
                trigger: ".faq-header-trigger",
                start: "top 85%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: "power3.out"
        });

        // Left accordion items — from left, staggered
        gsap.from(".faq-list-col .faq-item", {
            scrollTrigger: {
                trigger: ".faq-grid-trigger",
                start: "top 82%",
                toggleActions: "play none none none"
            },
            x: -80,
            opacity: 0,
            duration: 1,
            stagger: 0.1,
            ease: "power3.out"
        });

        // Right CTA panel — from right
        gsap.from(".faq-cta-col", {
            scrollTrigger: {
                trigger: ".faq-grid-trigger",
                start: "top 82%",
                toggleActions: "play none none none"
            },
            x: 80,
            opacity: 0,
            duration: 1.2,
            ease: "power3.out"
        });

        ScrollTrigger.refresh();
    }
});
