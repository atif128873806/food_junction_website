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

// Keep the selected menu section visible in the horizontal mobile index without moving the page.
const menuCategories = document.querySelector('[data-menu-categories]');
const activeMenuCategory = menuCategories?.querySelector('[aria-current="page"]');
if (menuCategories && activeMenuCategory && menuCategories.scrollWidth > menuCategories.clientWidth) {
    menuCategories.scrollLeft = activeMenuCategory.getBoundingClientRect().left - menuCategories.getBoundingClientRect().left + menuCategories.scrollLeft - (menuCategories.clientWidth - activeMenuCategory.clientWidth) / 2;
}

// Preview the actual printed-menu photographs while keeping each category a normal link.
const homePreview = document.querySelector('[data-home-preview]');
if (homePreview) {
    const previewImages = [...homePreview.querySelectorAll('[data-preview-image]')];
    const previewLinks = [...homePreview.querySelectorAll('[data-preview-link]')];
    const showPreview = (name) => {
        previewImages.forEach((image) => image.classList.toggle('is-active', image.dataset.previewImage === name));
        previewLinks.forEach((link) => link.classList.toggle('is-active', link.dataset.previewLink === name));
    };
    previewLinks.forEach((link) => {
        link.addEventListener('pointerenter', () => showPreview(link.dataset.previewLink));
        link.addEventListener('focus', () => showPreview(link.dataset.previewLink));
    });
}
