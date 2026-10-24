const motion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const config = { ease: 'power4.out', reveal: 0.8, stagger: 0.08 };

function initPreloader() {
    const preloader = document.querySelector('[data-preloader]');
    if (!preloader || !window.gsap) return;
    const counter = preloader.querySelector('[data-counter]');
    const value = { current: 0 };
    gsap.to(value, { current: 100, duration: motion ? 0.1 : 1.2, ease: 'power2.out', onUpdate: () => { counter.textContent = Math.round(value.current); }, onComplete: () => gsap.to(preloader, { yPercent: -100, duration: motion ? 0.1 : 1, ease: 'power4.inOut', onComplete: () => preloader.remove() }) });
}

function initHeader() {
    const header = document.querySelector('[data-header]');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const navTabs = document.querySelector('.nav-tabs');
    const menuIcon = menuToggle?.querySelector('.material-symbols-outlined');

    window.addEventListener('scroll', () => header?.classList.toggle('is-scrolled', window.scrollY > 30), { passive: true });

    if (menuToggle && navTabs) {
        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            const isOpen = navTabs.classList.toggle('is-mobile-open');
            menuToggle.setAttribute('aria-expanded', String(isOpen));
            if (menuIcon) menuIcon.textContent = isOpen ? 'close' : 'menu';
        });

        navTabs.querySelectorAll('.nav-tab').forEach((tab) => {
            tab.addEventListener('click', () => {
                navTabs.classList.remove('is-mobile-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                if (menuIcon) menuIcon.textContent = 'menu';
            });
        });

        document.addEventListener('click', (e) => {
            if (!header.contains(e.target)) {
                navTabs.classList.remove('is-mobile-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                if (menuIcon) menuIcon.textContent = 'menu';
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && navTabs.classList.contains('is-mobile-open')) {
                navTabs.classList.remove('is-mobile-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                if (menuIcon) menuIcon.textContent = 'menu';
            }
        });
    }
}

function initHero() {
    if (!window.gsap) return;
    const hero = document.querySelector('.hero-section');
    if (!hero) return;
    const split = document.querySelector('[data-split]');
    if (split) {
        split.querySelectorAll('em').forEach((node) => {
            node.innerHTML = node.textContent.split('').map((char) => `<span class="split-char">${char}</span>`).join('');
        });
        const textNodes = Array.from(split.childNodes).filter((node) => node.nodeType === Node.TEXT_NODE && node.textContent.trim().length);
        textNodes.forEach((node) => {
            const wrapper = document.createElement('span');
            wrapper.innerHTML = node.textContent.split('').map((char) => `<span class="split-char">${char === ' ' ? '&nbsp;' : char}</span>`).join('');
            node.replaceWith(wrapper);
        });
    }
    if (!motion) {
        gsap.from('.split-char', { yPercent: 110, rotate: 6, duration: .8, stagger: .03, delay: .5, ease: config.ease });
        gsap.from('.hero-image-wrap', { scale: .8, y: 120, rotate: -8, duration: 1.2, delay: .55, ease: 'elastic.out(1,.6)' });
        gsap.from('.hero-reveal', { y: 24, opacity: 0, duration: .7, stagger: .1, delay: .8, ease: config.ease });
        gsap.to('[data-blob]', { x: 30, y: -18, scale: 1.1, borderRadius: '55% 45% 38% 62%', duration: 8, repeat: -1, yoyo: true, ease: 'sine.inOut' });
        gsap.to('[data-chip-card]', { y: -12, rotation: 2, duration: 2.4, repeat: -1, yoyo: true, ease: 'sine.inOut' });
        gsap.to('[data-hero-bag] img', { y: -8, rotation: 1.5, duration: 2.2, repeat: -1, yoyo: true, ease: 'sine.inOut' });

        const poseTl = gsap.timeline({
            scrollTrigger: {
                trigger: '.hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: 1.2,
            }
        });
        poseTl
            .to('[data-hero-bag]', { y: -40, x: -30, rotate: -18, scale: 1.1, ease: 'power1.out' })
            .to('[data-hero-bag]', { y: -100, x: 40, rotate: 22, scale: 1.2, ease: 'power1.inOut' })
            .to('[data-hero-bag]', { y: -220, x: 10, rotate: -8, scale: 0.95, ease: 'power1.in' });
    }
    const price = document.querySelector('[data-price]');
    if (price && window.gsap) { const value = { n: 0 }; gsap.to(value, { n: Number(price.dataset.price), duration: motion ? .1 : 1.4, delay: 1.1, onUpdate: () => { price.textContent = `$${value.n.toFixed(2)}`; } }); }
}

function initScrollAnimations() {
    if (!window.gsap || !window.ScrollTrigger) return;
    if (!document.querySelector('.products-section')) return;
    gsap.registerPlugin(ScrollTrigger);
    if (motion) return;
    gsap.from('.reveal-title', { y: 45, opacity: 0, duration: .8, stagger: .1, scrollTrigger: { trigger: '.products-section', start: 'top 78%' } });
    gsap.from('.reveal-card', { y: 55, opacity: 0, rotateX: 8, duration: .7, stagger: config.stagger, scrollTrigger: { trigger: '.product-slider', start: 'top 82%', toggleActions: 'play none none reverse' } });
}

function initPromoSection() {
    const promo = document.querySelector('[data-promo]');
    if (!promo || !window.gsap || motion) return;
    gsap.to('.promo-bg', { clipPath: 'circle(150% at 50% 50%)', scrollTrigger: { trigger: promo, start: 'top 80%', end: 'top 25%', scrub: 1 } });
    gsap.from('.promo-word span', { xPercent: (_, target) => [-90, 0, 0, 90, 0][target], yPercent: (_, target) => [0, 90, -90, 0, 45][target], opacity: 0, stagger: .08, scrollTrigger: { trigger: promo, start: 'top 70%', end: 'top 30%', scrub: 1 } });
    gsap.from('.promo-bag', { scale: .5, rotation: -40, opacity: 0, scrollTrigger: { trigger: promo, start: 'top 65%', end: 'top 25%', scrub: 1 } });
    gsap.to('.promo-ribbon div', { xPercent: -50, duration: 18, repeat: -1, ease: 'none' });
    gsap.to('.deal-badge', { scale: 1.1, boxShadow: '0 0 30px var(--brand-accent)', duration: 1.1, repeat: -1, yoyo: true, ease: 'sine.inOut' });
}

function initCarousel() {
    const slider = document.querySelector('[data-product-slider]');
    if (!slider) return;
    const move = (direction) => slider.scrollBy({ left: direction * (slider.querySelector('.product-card')?.getBoundingClientRect().width + 24 || 300), behavior: 'smooth' });
    document.querySelector('[data-slider-prev]')?.addEventListener('click', () => move(-1));
    document.querySelector('[data-slider-next]')?.addEventListener('click', () => move(1));
}

function initCart() {
    let count = Number(document.querySelector('[data-cart-count]')?.textContent || 1);
    document.querySelectorAll('[data-add-cart]').forEach((button) => button.addEventListener('click', () => {
        count += 1;
        document.querySelectorAll('[data-cart-count]').forEach((node) => { node.textContent = count; });
        const toast = document.querySelector('[data-toast]');
        if (window.gsap) gsap.fromTo(toast, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: .35, onComplete: () => gsap.to(toast, { y: 20, opacity: 0, delay: 1.6, duration: .35 }) });
        if (window.gsap) gsap.fromTo('[data-cart-link]', { scale: 1.25 }, { scale: 1, duration: .65, ease: 'elastic.out(1,.4)' });
    }));
}

function initThemeToggle() {
    document.querySelector('[data-theme-toggle]')?.addEventListener('click', (event) => {
        const root = document.documentElement;
        const dark = root.dataset.theme === 'dark';
        root.dataset.theme = dark ? 'light' : 'dark';
        root.classList.toggle('dark', !dark);
        const icon = event.currentTarget.querySelector('.material-symbols-outlined');
        icon.textContent = dark ? 'dark_mode' : 'light_mode';
        if (window.gsap && !motion) gsap.fromTo(root, { opacity: .72 }, { opacity: 1, duration: .55, ease: 'power2.out' });
    });
}

function initCountdown() {
    const node = document.querySelector('[data-countdown]');
    if (!node) return;
    const end = Date.now() + 1000 * 60 * 60 * 7 + 1000 * 60 * 24;
    const tick = () => { const seconds = Math.max(0, Math.floor((end - Date.now()) / 1000)); node.textContent = [Math.floor(seconds / 3600), Math.floor(seconds / 60) % 60, seconds % 60].map((n) => String(n).padStart(2, '0')).join(':'); };
    tick(); setInterval(tick, 1000);
}

document.addEventListener('DOMContentLoaded', () => {
    initPreloader(); initHeader(); initHero(); initScrollAnimations(); initPromoSection(); initCarousel(); initCart(); initThemeToggle(); initCountdown();
});
