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
// 9. PROCESS SECTION - INTERACTIVE FUNNEL + SCROLLTRIGGER
// ==========================================================================
document.addEventListener("DOMContentLoaded", function () {

    // ---- Interactive Funnel ----
    var labelEl  = document.getElementById("processStepLabel");
    var titleEl  = document.getElementById("processTitle");
    var descEl   = document.getElementById("processDesc");
    var arrowGrp = document.getElementById("processArrowGroup");
    var layers   = document.querySelectorAll(".funnel-layer");

    var defaultState = {
        label : "STEP 01",
        title : "Discovery",
        desc  : "Understanding your goals, audience and market position before any work begins.",
        color : "#818cf8",
        arrowY: "88"
    };

    function setActive(label, title, desc, color, arrowY) {
        labelEl.textContent  = label;
        labelEl.style.color  = color;
        titleEl.textContent  = title;
        descEl.textContent   = desc;
        // CSS transition on #processArrowGroup handles smooth move
        arrowGrp.setAttribute("transform", "translate(0," + arrowY + ")");
    }

    if (layers.length && labelEl && titleEl && descEl && arrowGrp) {
        layers.forEach(function (layer) {
            layer.addEventListener("mouseenter", function () {
                setActive(
                    layer.getAttribute("data-label"),
                    layer.getAttribute("data-title"),
                    layer.getAttribute("data-desc"),
                    layer.getAttribute("data-color"),
                    layer.getAttribute("data-arrow-y")
                );
                layers.forEach(function (l) {
                    l.style.opacity   = "0.5";
                    l.style.transform = "scale(1)";
                });
                layer.style.opacity   = "1";
                layer.style.transform = "scale(1.04)";
            });

            layer.addEventListener("mouseleave", function () {
                layers.forEach(function (l) {
                    l.style.opacity   = "1";
                    l.style.transform = "scale(1)";
                });
                setActive(
                    defaultState.label,
                    defaultState.title,
                    defaultState.desc,
                    defaultState.color,
                    defaultState.arrowY
                );
            });
        });
    }

    // ---- ScrollTrigger Entrance Animation ----
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        gsap.from(".process-content-block", {
            scrollTrigger: {
                trigger: ".process-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            x: -100,
            opacity: 0,
            duration: 1.4,
            ease: "power4.out"
        });

        gsap.from(".process-funnel-block", {
            scrollTrigger: {
                trigger: ".process-grid-trigger",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            x: 100,
            scale: 0.9,
            opacity: 0,
            duration: 1.4,
            ease: "power4.out"
        });

        gsap.from(".funnel-layer", {
            scrollTrigger: {
                trigger: ".process-funnel-block",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 0,
            scale: 0.8,
            duration: 0.8,
            stagger: 0.15,
            delay: 0.4,
            ease: "power3.out"
        });

        ScrollTrigger.refresh();
    }
});
