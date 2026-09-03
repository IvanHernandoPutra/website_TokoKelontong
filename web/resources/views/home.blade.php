@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
<!-- HERO -->
<section class="relative w-full overflow-hidden bg-surface-container-low -mt-28 pt-28">
<div class="max-w-container-max mx-auto px-gutter-desktop py-space-3xl lg:py-space-4xl relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-2xl items-center">
<div class="lg:col-span-7 flex flex-col items-start gap-space-md">
<div class="inline-flex items-center gap-space-xs bg-surface-container px-space-sm py-space-2xs rounded-full">
<span class="inline-block w-2 h-2 rounded-full bg-secondary"></span>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest">Oleh-oleh Khas Nusantara &bull; Global Export</span>
</div>
<h1 class="font-display text-display lg:text-[54px] lg:leading-[62px] text-on-surface font-bold tracking-tight">
Rasa Asli Indonesia, <span class="text-primary">Dikirim ke Seluruh Dunia</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
Oleh-oleh khas Nusantara pilihan — snack, bumbu rempah, kopi, dan makanan kering terbaik dari produsen lokal.
</p>
<div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
<a class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(159,60,22,0.35)]" href="{{ route('products') }}">
<span>Lihat Produk</span>
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface px-space-lg py-space-md rounded-xl font-label-lg text-label-lg transition-all" href="{{ route('shipping') }}">
<span class="material-symbols-outlined text-secondary text-[20px]">local_shipping</span>
<span>Info Pengiriman</span>
</a>
</div>
<div class="grid grid-cols-3 gap-space-md pt-space-lg w-full max-w-lg">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-primary font-bold">100%</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">UMKM Asli</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-secondary font-bold">35+</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Negara Tujuan</span>
</div>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-tertiary font-bold">Food Grade</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Standar Ekspor</span>
</div>
</div>
</div>
<div class="lg:col-span-5 relative">
<div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden shadow-[0_20px_40px_-15px_rgba(84,46,26,0.18)] bg-surface-container">
<img class="w-full h-full object-cover" alt="Meja rempah dan kemasan ekspor Toko Kelontong" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKCtV05wLjWJq0YoyBaQC4XbiI9bazHg-tUi98MwMqa40VzkDflCW5MDHfJ56sRjNDuX787izk1kH-uNNBJ_voGIwee_KW7tw01J7XOLfWjUeUWY7J7O4y6zDxnfRew0SE6pOyfioZveVPUz_h1irQtz-Zy1qWMAKmFWNkMpj-wnEb7tSgMoqlXY1z4tfjwOnNCq0sNQANi4HTmV1XacrzLjtHQADXfWGoXHs8fQF-3mSwDpm1PTeT"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
<div class="absolute bottom-4 left-4 right-4 p-space-sm bg-surface/95 backdrop-blur-md rounded-xl shadow-md flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-secondary/15 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">verified</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface leading-tight">Kurasi Terjamin</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Langsung dari produsen Nusantara</span>
</div>
</div>
<span class="font-label-sm text-label-sm px-space-xs py-space-2xs bg-secondary-container text-on-secondary-container rounded font-bold">Resmi CV</span>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- KEUNGGULAN -->
<section class="w-full bg-surface py-space-3xl">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<div class="p-space-xl rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col gap-space-sm shadow-[0_2px_12px_-3px_rgba(84,46,26,0.06)]">
<div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[28px]">storefront</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Produk Asli Indonesia</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Dikurasi langsung dari produsen dan UMKM lokal, menjaga keaslian cita rasa kampung halaman.</p>
</div>
<div class="p-space-xl rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col gap-space-sm shadow-[0_2px_12px_-3px_rgba(84,46,26,0.06)]">
<div class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-[28px]">public</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Pengiriman Internasional</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Melayani pembeli di berbagai negara dengan pengiriman ekspres terpercaya hingga ke pintu rumah Anda.</p>
</div>
<div class="p-space-xl rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col gap-space-sm shadow-[0_2px_12px_-3px_rgba(84,46,26,0.06)]">
<div class="w-12 h-12 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined text-[28px]">inventory_2</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Kemasan Standar Ekspor</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Dikemas aman untuk perjalanan jarak jauh menggunakan kemasan kedap udara, bubble-wrap, dan kardus tebal.</p>
</div>
</div>
</div>
</section>

<!-- KATEGORI -->
<section class="w-full bg-surface-container-low py-space-3xl">
<div class="max-w-container-max mx-auto px-4 sm:px-gutter-desktop flex flex-col gap-space-xl">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Jelajah Nusantara</span>
<div class="flex items-center justify-between gap-2">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Kategori Pilihan</h2>
<span class="md:hidden text-xs text-on-surface-variant flex items-center gap-1 font-medium bg-surface-container px-2.5 py-1 rounded-full"><span class="material-symbols-outlined text-[15px] text-primary">swipe</span> Geser</span>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">Pilih ragam santapan khas dari lima kelompok komoditas favorit diaspora dan pecinta kuliner Indonesia.</p>
</div>
<!-- Carousel on mobile (< md), grid on tablet & desktop (>= md) -->
<div class="flex md:grid md:grid-cols-3 lg:grid-cols-5 gap-space-md overflow-x-auto md:overflow-visible snap-x snap-mandatory pb-4 md:pb-0 -mx-4 px-4 sm:mx-0 sm:px-0">
@foreach ($categories as $cat)
<a class="group relative aspect-[3/4] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-end p-space-md bg-surface-container shrink-0 w-[68vw] sm:w-[45vw] md:w-auto snap-start" href="{{ route('products', ['kategori' => $cat->slug]) }}">
@if($cat->image)
<img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $cat->name }}" src="{{ $cat->image }}"/>
@endif
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
<div class="relative z-10 flex flex-col">
<span class="font-title-md text-title-md text-white font-bold group-hover:text-primary-fixed transition-colors">{{ $cat->name }}</span>
<span class="font-label-sm text-label-sm text-surface-dim">{{ $cat->subtitle }}</span>
</div>
</a>
@endforeach
</div>
</div>
</section>

<!-- PRODUK UNGGULAN -->
<section class="w-full bg-surface py-space-3xl">
<div class="max-w-container-max mx-auto px-4 sm:px-gutter-desktop flex flex-col gap-space-2xl">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Koleksi Paling Dicari</span>
<div class="flex items-center justify-between gap-2">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Produk Unggulan</h2>
<span class="sm:hidden text-xs text-on-surface-variant flex items-center gap-1 font-medium bg-surface-container px-2.5 py-1 rounded-full"><span class="material-symbols-outlined text-[15px] text-secondary">swipe</span> Geser</span>
</div>
</div>
<a class="inline-flex items-center gap-space-2xs font-title-md text-title-md text-primary hover:text-primary-container font-semibold transition-colors" href="{{ route('products') }}">
<span>Lihat Seluruh Katalog</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
<!-- Carousel on mobile (< sm), grid on tablet & desktop (>= sm) -->
<div class="flex sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-space-lg overflow-x-auto sm:overflow-visible snap-x snap-mandatory pb-4 sm:pb-0 -mx-4 px-4 sm:mx-0 sm:px-0">
@foreach ($featured as $product)
<div class="shrink-0 w-[78vw] sm:w-auto snap-start flex">
@include('partials.product-card')
</div>
@endforeach
</div>
</div>
</section>

<!-- TENTANG SINGKAT -->
<section class="w-full bg-surface-container-low py-space-3xl">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-2xl items-center">
<div class="lg:col-span-6 flex flex-col items-start gap-space-md">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">Kisah Kami</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Dari Klaten untuk Nusantara &amp; Dunia</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
Berawal dari toko kelontong di Klaten, Jawa Tengah, kami kini melayani pelanggan produk makanan Indonesia hingga ke luar negeri.
</p>
<p class="font-body-md text-body-md text-on-surface-variant">
Unit usaha dari <strong>CV. Bertiga Tradexa</strong> ini hadir menjawab kerinduan perantau dan komunitas diaspora akan cita rasa otentik tanah air, dengan kepatuhan standar kemasan internasional.
</p>
<div class="pt-space-xs">
<a class="inline-flex items-center gap-space-xs bg-secondary hover:bg-on-secondary-container text-on-secondary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(68,103,68,0.3)]" href="{{ route('about') }}">
<span>Kenali Kami</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<div class="lg:col-span-6">
<div class="relative rounded-2xl overflow-hidden shadow-[0_16px_36px_-10px_rgba(84,46,26,0.12)] bg-surface-container">
<img class="w-full h-96 lg:h-[450px] object-cover" alt="Interior Toko Kelontong Klaten" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7Y5EgI0mppZi5F76fJBDSU07AaT3ihhDi9WxBPr1Bekc3yn04e9An5-VRhXumYY-E8al34OfCeWSY9do10-6iWuPtwfhhiu2gNrTvah3IQnBeuCHQ6xTbAqDP5J3U6oM8iJKROjnhQ9HETSxS_LKnoxlrA6MnnnaA2T7LgsMfO8-fjI52lI0If-KVfdgxp9KJukPxqCZnUHSQnVd6W_aghZt1-pIyEiigbsp496-vXZ2ycAXUPxrF"/>
<div class="absolute inset-0 bg-gradient-to-tr from-black/60 via-transparent to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6 p-space-md bg-surface/90 backdrop-blur-md rounded-xl flex items-center justify-between">
<div>
<span class="font-title-md text-title-md text-on-surface font-bold block">Toko Kelontong &bull; Klaten</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Pusat Kurasi &amp; Pengiriman CV. Bertiga Tradexa</span>
</div>
<a class="p-space-xs rounded-lg bg-surface-container hover:bg-surface-container-high text-primary transition-colors" href="{{ route('stores') }}">
<span class="material-symbols-outlined text-[22px]">store</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- SECTION 6: TESTIMONI PEMBELI DIASPORA -->
<section class="w-full bg-surface py-space-3xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-2xl">
<div class="text-center max-w-2xl mx-auto flex flex-col items-center gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Rasa Rumah di Rantau</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Cerita Diaspora Nusantara</h2>
<p class="font-body-md text-body-md text-on-surface-variant">
Mengobati rindu aroma masakan ibu dan jajanan masa kecil dari ribuan kilometer jauhnya.
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<!-- Testi 1: Australia -->
<div class="p-space-xl bg-surface-container-low rounded-xl flex flex-col justify-between shadow-[0_2px_8px_-2px_rgba(84,46,26,0.04)]">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center gap-1 text-tertiary">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface italic">
“Sudah 4 tahun tinggal di Melbourne, kangen baso aci dan seblak asli Garut terobati lewat Toko Kelontong. Paket sampai mulus tanpa ada bungkus yang bocor.”
</p>
</div>
<div class="mt-space-lg flex items-center gap-space-sm pt-space-sm">
<div class="w-10 h-10 rounded-full bg-primary/15 text-primary flex items-center justify-center font-bold font-title-md">
RA
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-semibold leading-tight">Riana Anggraini</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Melbourne, Australia 🇦🇺</span>
</div>
</div>
</div>
<!-- Testi 2: Taiwan -->
<div class="p-space-xl bg-surface-container-low rounded-xl flex flex-col justify-between shadow-[0_2px_8px_-2px_rgba(84,46,26,0.04)]">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center gap-1 text-tertiary">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface italic">
“Pesanan kopi Gayo dan aneka sambal bawang untuk teman-teman kerja di Taipei selalu aman. Estimasi pengiriman ekspresnya tepat dan admin sangat responsif via WhatsApp.”
</p>
</div>
<div class="mt-space-lg flex items-center gap-space-sm pt-space-sm">
<div class="w-10 h-10 rounded-full bg-secondary/15 text-secondary flex items-center justify-center font-bold font-title-md">
HW
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-semibold leading-tight">Hendra Wijaya</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Taipei, Taiwan 🇹🇼</span>
</div>
</div>
</div>
<!-- Testi 3: Belanda -->
<div class="p-space-xl bg-surface-container-low rounded-xl flex flex-col justify-between shadow-[0_2px_8px_-2px_rgba(84,46,26,0.04)]">
<div class="flex flex-col gap-space-sm">
<div class="flex items-center gap-1 text-tertiary">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface italic">
“Bumbu rendang instan dan keripik singkongnya juara! Kemasan ekspornya benar-benar tebal, lolos inspeksi bea cukai Schiphol tanpa kendala sama sekali.”
</p>
</div>
<div class="mt-space-lg flex items-center gap-space-sm pt-space-sm">
<div class="w-10 h-10 rounded-full bg-tertiary/15 text-tertiary flex items-center justify-center font-bold font-title-md">
DS
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-semibold leading-tight">Dewi Soekarno</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Amsterdam, Belanda 🇳🇱</span>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- CTA PENGIRIMAN -->
<section class="w-full bg-surface-container-low py-space-3xl mb-0">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="relative overflow-hidden rounded-2xl bg-primary text-on-primary p-space-2xl lg:p-space-3xl shadow-[0_12px_32px_-6px_rgba(159,60,22,0.35)]">
<div class="absolute -right-16 -top-16 w-80 h-80 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
<div class="absolute -left-16 -bottom-16 w-80 h-80 rounded-full bg-black/10 blur-2xl pointer-events-none"></div>
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-space-xl">
<div class="flex flex-col items-start gap-space-xs max-w-2xl">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed font-bold bg-white/10 px-space-sm py-0.5 rounded-full">
Layanan Ekspor Langsung
</span>
<h2 class="font-headline-lg text-headline-lg font-bold text-white tracking-tight">
Tinggal di luar negeri dan kangen rasa rumah? Kami kirim ke negara kamu.
</h2>
<p class="font-body-lg text-body-lg text-primary-fixed/90 max-w-xl">
Hubungi tim pengiriman kami untuk konsultasi daftar komoditas yang diperbolehkan di negara tujuan, regulasi custom, serta estimasi ongkos kirim transparan.
</p>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-sm">
<a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-lowest text-primary hover:bg-surface-container font-label-lg text-label-lg px-space-xl py-space-md rounded-xl transition-all shadow-md" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ rawurlencode('Halo Toko Kelontong, saya ingin konsultasi pengiriman internasional') }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>Konsultasi via WhatsApp</span>
</a>
</div>
</div>
</div>
</div>
</section>
</div>
@endsection
