import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

// Default content is visible. Motion only settles the two major food photographs.
const motion = gsap.matchMedia();
motion.add('(prefers-reduced-motion: no-preference)', () => {
    gsap.fromTo('.hero-photograph img', { scale: 1.025 }, {
        scale: 1, duration: 1.1, ease: 'expo.out', clearProps: 'transform',
    });
    gsap.utils.toArray('[data-scroll-image]').forEach((image) => {
        gsap.fromTo(image, { scale: 1.035 }, {
            scale: 1, duration: 1.1, ease: 'expo.out', clearProps: 'transform',
            scrollTrigger: { trigger: image, start: 'top 90%', once: true },
        });
    });
});
