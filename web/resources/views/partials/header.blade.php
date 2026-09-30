<header class="fixed top-0 left-0 right-0 z-50 bg-surface/95 backdrop-blur-md shadow-[0_1px_8px_rgba(84,46,26,0.06)]">
<!-- TOP ANNOUNCEMENT BAR -->
<div class="bg-primary text-on-primary py-2 px-4">
<div class="max-w-container-max mx-auto flex items-center justify-center gap-2.5 flex-wrap text-center text-[12px] sm:text-[13px] font-medium">
<span class="inline-flex items-center gap-1 bg-white/15 px-2 py-0.5 rounded-full text-[11px] font-bold tracking-wider uppercase">
<span class="material-symbols-outlined text-[13px] text-primary-fixed" aria-hidden="true">verified</span>
<span>{{ __('nav.announcement_store') }}</span>
</span>
<span class="flex items-center gap-1.5 opacity-95">
<span class="material-symbols-outlined text-[15px] opacity-90" aria-hidden="true">shopping_cart</span>
<span>{!! __('nav.announcement_tagline') !!}</span>
</span>
<span class="hidden sm:inline w-1 h-1 rounded-full bg-white/40"></span>
<a class="inline-flex items-center gap-1.5 hover:text-primary-fixed transition-colors" href="https://wa.me/{{ config('toko.wa_number') }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[15px] text-primary-fixed" aria-hidden="true">chat</span>
<span class="opacity-95">{{ __('nav.announcement_cs') }}</span>
<span class="font-bold underline underline-offset-4 decoration-white/70 hover:decoration-white transition-all">+{{ config('toko.wa_number') }}</span>
</a>
</div>
</div>

<!-- MAIN NAVBAR -->
<div class="h-20 max-w-container-max mx-auto px-4 sm:px-gutter-desktop flex items-center justify-between gap-space-sm">
<!-- BRAND LOGO & TITLE -->
<a class="flex items-center gap-2.5 sm:gap-space-sm flex-shrink-0 group" href="{{ route('home') }}">
<img alt="Logo Toko Kelontongku" class="h-12 w-12 sm:h-14 sm:w-14 object-contain transition-transform group-hover:scale-105" src="{{ asset('images/logo-mark.png') }}"/>
<div class="flex flex-col">
<span class="font-headline-sm text-[19px] sm:text-headline-sm tracking-tight leading-none whitespace-nowrap font-extrabold">
<span class="text-primary">Toko</span><span class="text-primary">Kelontong</span><span class="text-tertiary">ku</span><span class="text-on-surface-variant text-[14px] sm:text-[15px] font-semibold">.com</span>
</span>
<span class="text-[10px] sm:text-[11px] font-semibold text-primary/75 tracking-wider uppercase mt-1 hidden sm:block">Belanja Kebutuhan Tetangga</span>
</div>
</a>

<!-- DESKTOP NAV LINKS (Responsive from lg / 1024px upwards) -->
<nav class="hidden lg:flex items-center gap-1 xl:gap-1.5 flex-shrink-0">
@foreach (['home', 'products', 'about', 'stores', 'shipping', 'faq', 'contact'] as $route)
@php $active = request()->routeIs($route); @endphp
<a class="whitespace-nowrap px-2.5 py-1.5 xl:px-3 xl:py-2 rounded-lg transition-all text-[13px] xl:text-[14px] {{ $active ? 'bg-primary/10 text-primary font-semibold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container font-medium' }}" href="{{ route($route) }}">
{{ __("nav.{$route}") }}
</a>
@endforeach
</nav>

<!-- RIGHT ACTION CTA & MOBILE TOGGLE -->
<div class="flex items-center gap-2 sm:gap-space-sm flex-shrink-0">
<!-- Language Toggle -->
<div class="inline-flex items-center bg-surface-container rounded-full p-0.5 shadow-inner" title="{{ __('nav.toggle_language') }}">
<span class="material-symbols-outlined text-[15px] text-on-surface-variant pl-1.5 hidden sm:block">translate</span>
<a href="{{ route('locale.switch', 'id') }}" aria-label="Bahasa Indonesia" class="px-2 py-0.5 rounded-full text-[12px] font-bold transition-all {{ app()->getLocale() === 'id' ? 'bg-primary text-on-primary shadow-sm' : 'text-on-surface-variant hover:text-primary' }}">ID</a>
<a href="{{ route('locale.switch', 'en') }}" aria-label="English" class="px-2 py-0.5 rounded-full text-[12px] font-bold transition-all {{ app()->getLocale() === 'en' ? 'bg-primary text-on-primary shadow-sm' : 'text-on-surface-variant hover:text-primary' }}">EN</a>
</div>
<a class="hidden sm:inline-flex items-center gap-1.5 bg-primary hover:bg-primary-container text-on-primary px-3.5 py-2 rounded-xl text-[13px] xl:text-[14px] font-semibold whitespace-nowrap transition-all shadow-[0_2px_8px_-2px_rgba(84,46,26,0.15)]" href="{{ route('contact') }}">
<span class="material-symbols-outlined text-[17px]">support_agent</span>
<span>{{ __('nav.cta') }}</span>
</a>
<!-- Mobile Menu Button (Below 1024px) -->
<button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg text-on-surface hover:bg-surface-container transition-colors focus:outline-none flex items-center justify-center" aria-label="Toggle Menu">
<span id="mobile-menu-icon" class="material-symbols-outlined text-[26px]">menu</span>
</button>
</div>
</div>

<!-- MOBILE DRAWER MENU (Tablets & Phones) -->
<div id="mobile-menu" class="hidden lg:hidden bg-surface border-t border-surface-container px-4 sm:px-gutter-desktop py-4 shadow-xl">
<div class="flex flex-col gap-1">
@foreach (['home', 'products', 'about', 'stores', 'shipping', 'faq', 'contact'] as $route)
@php $active = request()->routeIs($route); @endphp
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-[15px] transition-colors {{ $active ? 'bg-primary/10 text-primary font-semibold' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface font-medium' }}" href="{{ route($route) }}">
<span>{{ __("nav.{$route}") }}</span>
<span class="material-symbols-outlined text-[18px] opacity-40">chevron_right</span>
</a>
@endforeach
<div class="pt-3 mt-2 border-t border-surface-container flex flex-col gap-2">
<a class="w-full inline-flex items-center justify-center gap-2 bg-primary hover:bg-primary-container text-on-primary py-2.5 px-4 rounded-xl text-sm font-semibold shadow-sm transition-all" href="{{ route('contact') }}">
<span class="material-symbols-outlined text-[18px]">support_agent</span>
<span>{{ __('nav.cta') }}</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-2 bg-surface-container hover:bg-surface-container-high text-on-surface py-2.5 px-4 rounded-xl text-sm font-medium transition-all" href="https://wa.me/{{ config('toko.wa_number') }}" target="_blank" rel="noopener">
<span class="material-symbols-outlined text-[18px] text-secondary">chat</span>
<span>{{ __('nav.wa_cs') }}</span>
</a>
<div class="flex items-center justify-center gap-1.5 py-1">
<span class="material-symbols-outlined text-[16px] text-on-surface-variant" aria-hidden="true">translate</span>
<a href="{{ route('locale.switch', 'id') }}" class="px-2.5 py-1 rounded-full text-[13px] font-bold transition-all {{ app()->getLocale() === 'id' ? 'bg-primary text-on-primary' : 'text-on-surface-variant bg-surface-container' }}">ID</a>
<a href="{{ route('locale.switch', 'en') }}" class="px-2.5 py-1 rounded-full text-[13px] font-bold transition-all {{ app()->getLocale() === 'en' ? 'bg-primary text-on-primary' : 'text-on-surface-variant bg-surface-container' }}">EN</a>
</div>
<div class="flex items-center justify-center gap-3 pt-1">
<a href="{{ config('toko.instagram') }}" target="_blank" rel="noopener" aria-label="Instagram Toko Kelontongku" class="text-on-surface-variant hover:text-primary transition-colors">
<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
</a>
<a href="{{ config('toko.tiktok') }}" target="_blank" rel="noopener" aria-label="TikTok Toko Kelontongku" class="text-on-surface-variant hover:text-primary transition-colors">
<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
</a>
</div>
</div>
</div>
</div>

<script>
(function(){
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  const icon = document.getElementById('mobile-menu-icon');
  if (btn && menu && icon) {
    btn.addEventListener('click', function() {
      const isHidden = menu.classList.toggle('hidden');
      icon.textContent = isHidden ? 'menu' : 'close';
    });
  }
})();
</script>
</header>
