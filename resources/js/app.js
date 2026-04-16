import "./bootstrap";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import Alpine, { trigger } from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

gsap.registerPlugin(ScrollTrigger);

// gsap.to(".mover", {
//     ScrollTrigger: {
//         trigger: ".mover",
//         start: "top center",
//         end: "top 100px",
//         scrub: 1,
//         markers: true,
//     },
//     x: 400,
//     rotation: 360,
//     ease: "none",
//     duration: 3,
// });

document.addEventListener("DOMContentLoaded", () => {
    const tl = gsap.timeline(); //

    tl.from(".hero-tagline", {
        y: -20,
        opacity: 0,
        duration: 0.6,
    })
        .from(
            ".hero-title-1",
            {
                y: 40,
                opacity: 0,
                duration: 0.8,
            },
            "-=0.3",
        )
        .from(
            ".hero-title-2",
            {
                y: 40,
                opacity: 0,
                duration: 0.8,
            },
            "-=0.6",
        )
        .from(
            ".hero-desc",
            {
                opacity: 0,
                duration: 0.6,
            },
            "-=0.4",
        )
        .from(
            ".hero-btn",
            {
                scale: 0.9,
                opacity: 0,
                duration: 0.5,
                rotationX: 360,
                duration: 1.2,
            },
            "-=0.3",
        );
});
