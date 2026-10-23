import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);
const page = document.querySelector('[data-motion-page]');
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

if (page && !reduceMotion.matches) {
    const context = gsap.context(() => {
        const home = page.classList.contains('home-main');

        if (home) {
            const photo = page.querySelector('.home-hero-photo');
            const photoImage = photo?.querySelector('img');
            const copy = page.querySelector('.home-hero-copy');
            if (photo && photoImage && copy) {
                const opening = gsap.timeline({ defaults: { ease: 'power3.out' } });
                opening
                    .fromTo(photo, { clipPath: 'inset(0 0 100% 0)' }, { clipPath: 'inset(0 0 0% 0)', duration: 1.05, clearProps: 'clipPath' }, 0)
                    .fromTo(photoImage, { scale: 1.07 }, { scale: 1, duration: 1.35, clearProps: 'transform' }, 0)
                    .fromTo(copy.children, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: .7, stagger: .1, clearProps: 'transform,opacity' }, .12);
            }

            const intro = page.querySelector('.intro-layout');
            if (intro) {
                gsap.fromTo(intro.children, { y: 24, opacity: .75 }, {
                    y: 0, opacity: 1, duration: .8, stagger: .12, clearProps: 'transform,opacity',
                    scrollTrigger: { trigger: intro, start: 'top 88%', once: true },
                });
            }

            const preview = page.querySelector('.home-menu-preview');
            if (preview) {
                gsap.fromTo(preview, { y: 22, opacity: .8 }, {
                    y: 0, opacity: 1, duration: .8, clearProps: 'transform,opacity',
                    scrollTrigger: { trigger: preview, start: 'top 88%', once: true },
                });
            }

            const services = page.querySelector('.service-rows');
            if (services) {
                gsap.fromTo(services.children, { x: 16, opacity: .7 }, {
                    x: 0, opacity: 1, duration: .55, stagger: .08, clearProps: 'transform,opacity',
                    scrollTrigger: { trigger: services, start: 'top 88%', once: true },
                });
            }
        } else {
            page.querySelectorAll('[data-reveal]').forEach((section) => {
                gsap.fromTo(section, { y: 24, opacity: .75 }, {
                    y: 0, opacity: 1, duration: .75, clearProps: 'transform,opacity',
                    scrollTrigger: { trigger: section, start: 'top 90%', once: true },
                });
            });
            page.querySelectorAll('[data-image-reveal] img').forEach((image) => {
                gsap.fromTo(image, { scale: 1.04 }, {
                    scale: 1, duration: 1, clearProps: 'transform',
                    scrollTrigger: { trigger: image, start: 'top 90%', once: true },
                });
            });
        }
    }, page);

    const stopMotion = () => context.revert();
    reduceMotion.addEventListener('change', (event) => { if (event.matches) stopMotion(); }, { once: true });
    window.addEventListener('pagehide', stopMotion, { once: true });
}
