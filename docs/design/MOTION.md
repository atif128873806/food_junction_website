# Motion

Current direction: use GSAP selectively on the homepage, as newly requested on 2026-10-18. The light page remains static and calm; animate only real food imagery and the hero content, without delaying interaction or hiding essential content.

Load a small homepage-only motion module with a dynamic import. Use a short hero image settle, modest text entrance, and low-distance ScrollTrigger reveals for the homepage food images. Do not run scroll animation on the menu list or inner pages. No animation should require the visitor to wait for content. If GSAP fails to load, content remains visible in its natural layout. Skip the module entirely when `prefers-reduced-motion: reduce` is active; keep a CSS reduced-motion fallback.

Alpine.js remains responsible only for the mobile navigation disclosure and Escape-to-close behavior. GSAP and ScrollTrigger are already installed. Avoid global scroll hijacking, pinned sections, large parallax travel, repeated text animations, autoplay carousels and movement that competes with food or menu reading.
