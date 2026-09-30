<footer class="w-full bg-surface-container-low border-t border-surface-container">
<div class="max-w-container-max mx-auto px-4 sm:px-gutter-desktop py-space-2xl grid grid-cols-1 md:grid-cols-3 gap-space-xl">
<div class="flex flex-col gap-space-sm">
<a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
<img alt="Logo Toko Kelontongku" class="h-11 w-11 object-contain" src="{{ asset('images/logo-mark.png') }}"/>
<span class="font-headline-sm text-headline-sm font-extrabold tracking-tight">
<span class="text-primary">Toko</span><span class="text-primary">Kelontong</span><span class="text-tertiary">ku</span><span class="text-on-surface-variant text-[14px] font-semibold">.com</span>
</span>
</a>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('footer.tagline') }}</p>
<div class="flex items-center gap-space-sm pt-space-2xs">
<a href="{{ config('toko.instagram') }}" target="_blank" rel="noopener" aria-label="Instagram Toko Kelontongku" class="text-on-surface-variant hover:text-primary transition-colors">
<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
</a>
<a href="{{ config('toko.tiktok') }}" target="_blank" rel="noopener" aria-label="TikTok Toko Kelontongku" class="text-on-surface-variant hover:text-primary transition-colors">
<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
</a>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">{{ __('footer.contact') }}</span>
@if(config('toko.registered_address'))<span class="font-body-sm text-body-sm text-on-surface-variant">{{ config('toko.registered_address') }}</span>@endif
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ __('footer.location') }}</span>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="https://wa.me/{{ config('toko.wa_number') }}">WA: +{{ config('toko.wa_number') }}</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="mailto:{{ config('toko.email') }}">{{ config('toko.email') }}</a>
</div>
<div class="flex flex-col gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">{{ __('footer.menu') }}</span>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('products') }}">{{ __('footer.products') }}</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('about') }}">{{ __('footer.about') }}</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shipping') }}">{{ __('footer.shipping') }}</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('faq') }}">{{ __('footer.faq') }}</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('contact') }}">{{ __('footer.contact') }}</a>
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
