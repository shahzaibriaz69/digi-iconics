// ==========================================================================
// 02 HERO SECTION - ULTRA-SMOOTH LIQUID PHYSICS FLOATING ENGINE
// ==========================================================================
document.addEventListener("DOMContentLoaded", function () {

    if (typeof gsap !== "undefined") {

        // Pure page par perspective set karein taake 3D rotation natural lage
        gsap.set(".animation-container-wrapper", { perspective: 1000 });

        // Function: Har card ko organic, random aur super-smooth drift dene ke liye
        function applyPremiumFloat(element, xMax, yMax, rMax, duration) {
            // Horizontal Dynamic Drift
            gsap.to(element, {
                x: `random(${-xMax}, ${xMax})`,
                duration: duration,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });

            // Vertical Liquid Floating
            gsap.to(element, {
                y: `random(${-yMax}, ${yMax})`,
                duration: duration * 1.2,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });

            // 3D Rotation Shift (Slick Micro-Interaction)
            gsap.to(element, {
                rotationZ: `random(${-rMax}, ${rMax})`,
                rotationY: `random(${-rMax * 1.5}, ${rMax * 1.5})`,
                duration: duration * 1.5,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
        }

        // ==========================================================================
        // EACH CARD GETS UNIQUE PHYSICS DYNAMICS (X-Drift, Y-Drift, 3D-Rot, Speed)
        // ==========================================================================
        applyPremiumFloat(".tech-laravel", 15, 25, 4, 4.5);
        applyPremiumFloat(".tech-php", 20, 18, 5, 5.2);
        applyPremiumFloat(".tech-uiux", 12, 28, 3, 4.8);
        applyPremiumFloat(".tech-seo", 18, 22, 4, 5.5);
        applyPremiumFloat(".tech-marketing", 10, 15, 3, 4.2);

    }
});
