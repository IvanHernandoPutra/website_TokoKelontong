<header class="fixed top-0 left-0 right-0 z-50 bg-surface/95 backdrop-blur-md shadow-[0_1px_8px_rgba(84,46,26,0.06)]">
<!-- TOP ANNOUNCEMENT BAR (POLISHED PREMIUM TICKER) -->
<div class="bg-gradient-to-r from-[#7e2e0d] via-[#9f3c16] to-[#7e2e0d] text-white py-2 px-4 shadow-sm border-b border-black/10">
<div class="max-w-container-max mx-auto flex items-center justify-center gap-2.5 flex-wrap text-center text-[12px] sm:text-[13px] font-medium tracking-normal">
<span class="inline-flex items-center gap-1 bg-white/15 backdrop-blur-sm px-2 py-0.5 rounded-full text-[11px] font-bold tracking-wider uppercase text-white">
<span class="material-symbols-outlined text-[13px] text-secondary-fixed">verified</span>
<span>Ekspor Resmi</span>
</span>
<span class="flex items-center gap-1.5 opacity-95">
<span class="material-symbols-outlined text-[15px] opacity-90">public</span>
<span>Pengiriman ke Seluruh Dunia &bull; 100% Produk UMKM</span>
</span>
<span class="hidden sm:inline w-1 h-1 rounded-full bg-white/40"></span>
<a class="inline-flex items-center gap-1.5 hover:text-primary-fixed transition-colors" href="https://wa.me/{{ config('toko.wa_number') }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[15px] text-primary-fixed">chat</span>
<span class="opacity-95">CS WhatsApp:</span>
<span class="font-bold underline underline-offset-4 decoration-white/70 hover:decoration-white transition-all">+{{ config('toko.wa_number') }}</span>
</a>
</div>
</div>

<!-- MAIN NAVBAR -->
<div class="h-20 max-w-container-max mx-auto px-4 sm:px-gutter-desktop flex items-center justify-between gap-space-sm">
<!-- BRAND LOGO & TITLE -->
<a class="flex items-center gap-2.5 sm:gap-space-sm flex-shrink-0" href="{{ route('home') }}">
<img alt="Logo Toko Kelontong" class="h-12 w-12 sm:h-14 sm:w-14 object-contain" src="{{ asset('images/logo.png') }}"/>
<div class="flex flex-col">
<span class="font-headline-sm text-[19px] sm:text-headline-sm tracking-tight text-primary leading-none whitespace-nowrap font-bold">Toko Kelontong</span>
<span class="font-label-sm text-[10px] sm:text-[11px] text-on-surface-variant tracking-wider uppercase mt-0.5 whitespace-nowrap font-semibold">CV. Bertiga Tradexa</span>
</div>
</a>

<!-- DESKTOP NAV LINKS (Responsive from lg / 1024px upwards) -->
<nav class="hidden lg:flex items-center gap-1 xl:gap-1.5 flex-shrink-0">
@php
$nav = [
    ['home', 'Home'],
    ['products', 'Produk'],
    ['about', 'Tentang Kami'],
    ['stores', 'Toko Kami'],
    ['shipping', 'Pengiriman & Pemesanan'],
    ['faq', 'FAQ'],
    ['contact', 'Kontak'],
];
@endphp
@foreach ($nav as [$route, $label])
@php $active = request()->routeIs($route); @endphp
<a class="whitespace-nowrap px-2.5 py-1.5 xl:px-3 xl:py-2 rounded-lg transition-all text-[13px] xl:text-[14px] {{ $active ? 'bg-primary/10 text-primary font-semibold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container font-medium' }}" href="{{ route($route) }}">
{{ $label }}
</a>
@endforeach
</nav>

<!-- RIGHT ACTION CTA & MOBILE TOGGLE -->
<div class="flex items-center gap-2 sm:gap-space-sm flex-shrink-0">
<a class="hidden sm:inline-flex items-center gap-1.5 bg-primary hover:bg-primary-container text-on-primary px-3.5 py-2 rounded-xl text-[13px] xl:text-[14px] font-semibold whitespace-nowrap transition-all shadow-[0_2px_8px_-2px_rgba(84,46,26,0.15)]" href="{{ route('contact') }}">
<span class="material-symbols-outlined text-[17px]">support_agent</span>
<span>Tanya / Hubungi Kami</span>
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
@foreach ($nav as [$route, $label])
@php $active = request()->routeIs($route); @endphp
<a class="flex items-center justify-between px-3 py-2.5 rounded-lg text-[15px] transition-colors {{ $active ? 'bg-primary/10 text-primary font-semibold' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface font-medium' }}" href="{{ route($route) }}">
<span>{{ $label }}</span>
<span class="material-symbols-outlined text-[18px] opacity-40">chevron_right</span>
</a>
@endforeach
<div class="pt-3 mt-2 border-t border-surface-container flex flex-col gap-2">
<a class="w-full inline-flex items-center justify-center gap-2 bg-primary hover:bg-primary-container text-on-primary py-2.5 px-4 rounded-xl text-sm font-semibold shadow-sm transition-all" href="{{ route('contact') }}">
<span class="material-symbols-outlined text-[18px]">support_agent</span>
<span>Tanya / Hubungi Kami</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-2 bg-surface-container hover:bg-surface-container-high text-on-surface py-2.5 px-4 rounded-xl text-sm font-medium transition-all" href="https://wa.me/{{ config('toko.wa_number') }}" target="_blank" rel="noopener">
<span class="material-symbols-outlined text-[18px] text-secondary">chat</span>
<span>WhatsApp CS Langsung</span>
</a>
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
