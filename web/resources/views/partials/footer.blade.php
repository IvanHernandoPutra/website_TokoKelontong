<footer class="w-full bg-surface-container-low border-t border-surface-container">
<div class="max-w-container-max mx-auto px-4 sm:px-gutter-desktop py-space-2xl grid grid-cols-1 md:grid-cols-3 gap-space-xl">
<div class="flex flex-col gap-space-sm">
<span class="font-headline-sm text-headline-sm text-primary">Toko Kelontong</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Belanja kebutuhan harian, harga tetangga.</p>
</div>
<div class="flex flex-col gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Kontak</span>
@if(config('toko.registered_address'))<span class="font-body-sm text-body-sm text-on-surface-variant">{{ config('toko.registered_address') }}</span>@endif
<span class="font-body-sm text-body-sm text-on-surface-variant">Klaten, Jawa Tengah, Indonesia</span>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="https://wa.me/{{ config('toko.wa_number') }}">WA: +{{ config('toko.wa_number') }}</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="mailto:{{ config('toko.email') }}">{{ config('toko.email') }}</a>
</div>
<div class="flex flex-col gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Menu</span>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('products') }}">Produk</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('about') }}">Tentang Kami</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shipping') }}">Cara Pemesanan</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('faq') }}">FAQ</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('contact') }}">Kontak</a>
</div>
</div>
<div class="border-t border-surface-container">
<div class="max-w-container-max mx-auto px-gutter-desktop py-space-md text-center font-body-sm text-body-sm text-on-surface-variant">
&copy; {{ date('Y') }} Toko Kelontong
@if(config('toko.npwp'))
&middot; NPWP {{ config('toko.npwp') }}
@endif
</div>
</div>
</footer>
