import Alpine from 'alpinejs';

Alpine.data('siteNavigation', () => ({
    closeNavigation() {
        this.$refs.navigation?.removeAttribute('open');
        this.$refs.navigation?.querySelector('summary')?.focus();
    },
}));
window.Alpine = Alpine;
Alpine.start();

if (document.querySelector('[data-motion-page]') && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    import('./home-motion.js');
}
