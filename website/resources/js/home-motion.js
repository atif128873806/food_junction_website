import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);
const page = document.querySelector('[data-motion-page]');
if (page && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const context = gsap.context(() => {
        const heroCopy = page.querySelector('.home-hero-copy');
        const heroPhoto = page.querySelector('.home-hero-photo');
        if (heroPhoto) {
            gsap.fromTo(heroPhoto, { clipPath: 'inset(0 0 100% 0)' }, { clipPath: 'inset(0 0 0% 0)', duration: 1.15, ease: 'expo.out', clearProps: 'clipPath' });
        }
        if (heroCopy) {
            gsap.fromTo(heroCopy.children, { y: 24, opacity: 0 }, { y: 0, opacity: 1, duration: .8, stagger: .12, ease: 'power3.out', clearProps: 'all' });
        }
        page.querySelectorAll('[data-reveal]').forEach((section) => {
            if (section === heroCopy) return;
            gsap.fromTo(section, { y: 34, opacity: .6 }, {
                y: 0, opacity: 1, duration: .9, ease: 'power2.out', clearProps: 'all',
                scrollTrigger: { trigger: section, start: 'top 92%', once: true },
            });
        });
        page.querySelectorAll('[data-image-reveal]').forEach((frame) => {
            if (frame === heroPhoto) return;
            const image = frame.querySelector('img');
            if (!image) return;
            gsap.fromTo(image, { scale: 1.08 }, {
                scale: 1, duration: 1.4, ease: 'power2.out', clearProps: 'transform',
                scrollTrigger: { trigger: frame, start: 'top 92%', once: true },
            });
        });
    }, page);
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    const stopMotion = () => context.revert();
    reduceMotion.addEventListener('change', (event) => { if (event.matches) stopMotion(); }, { once: true });
    window.addEventListener('pagehide', stopMotion, { once: true });
}
