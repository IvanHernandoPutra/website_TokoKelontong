@extends('layouts.app')

@section('title', 'Katalog Produk — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<!-- PAGE HEADER -->
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Produk</span>
</nav>
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mt-space-2xs">
<div class="max-w-2xl">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold inline-block mb-1">Katalog Retail Nusantara</span>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Katalog Produk Nusantara</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-2xs">Koleksi snack, bumbu, kopi, dan makanan instan khas Nusantara siap kirim ke seluruh dunia.</p>
</div>
<div class="flex flex-wrap items-center gap-space-xs bg-surface-container-lowest p-space-xs rounded-xl shadow-sm">
<div class="flex items-center gap-1.5 px-space-xs py-1 rounded-lg bg-surface-container text-on-surface font-label-sm text-label-sm">
<span class="material-symbols-outlined text-secondary text-[16px]">verified</span><span>100% Asli Indonesia</span>
</div>
<div class="flex items-center gap-1.5 px-space-xs py-1 rounded-lg bg-surface-container text-on-surface font-label-sm text-label-sm">
<span class="material-symbols-outlined text-primary text-[16px]">air</span><span>Kedap Udara</span>
</div>
<div class="flex items-center gap-1.5 px-space-xs py-1 rounded-lg bg-surface-container text-on-surface font-label-sm text-label-sm">
<span class="material-symbols-outlined text-tertiary text-[16px]">local_shipping</span><span>Kirim Global</span>
</div>
</div>
</div>
</div>
</section>

<!-- MAIN CATALOG -->
<section class="w-full py-space-2xl bg-surface">
<div class="max-w-container-max mx-auto px-gutter-desktop grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
<!-- SIDEBAR -->
<aside class="lg:col-span-3 flex flex-col gap-space-lg">
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<h3 class="font-title-md text-title-md text-on-surface flex items-center gap-space-2xs"><span class="material-symbols-outlined text-primary text-[20px]">category</span> Kategori Produk</h3>
<a class="font-label-sm text-label-sm text-primary hover:underline" href="{{ route('products') }}">Reset</a>
</div>
<ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface-variant">
<li>
<a class="flex items-center justify-between group py-1 {{ !request('kategori') ? 'text-on-surface font-semibold' : '' }}" href="{{ route('products') }}">
<span class="group-hover:text-primary transition-colors">Semua Kategori</span>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface">{{ $categories->sum('products_count') }}</span>
</a>
</li>
@foreach ($categories as $cat)
<li>
<a class="flex items-center justify-between group py-1 {{ request('kategori') === $cat->slug ? 'text-on-surface font-semibold' : '' }}" href="{{ route('products', ['kategori' => $cat->slug]) }}">
<span class="group-hover:text-primary transition-colors">{{ $cat->name }}</span>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">{{ $cat->products_count }}</span>
</a>
</li>
@endforeach
</ul>
</div>
<!-- Grosir banner -->
<div class="bg-gradient-to-br from-secondary to-[#2c472c] text-on-secondary p-space-lg rounded-xl shadow-md flex flex-col gap-space-sm relative overflow-hidden">
<div class="absolute -right-6 -bottom-6 w-24 h-24 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
<div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center"><span class="material-symbols-outlined text-[24px]">inventory_2</span></div>
<h4 class="font-title-lg text-title-lg text-white font-bold leading-snug">Butuh Kirim Partai Besar / Grosir?</h4>
<p class="font-body-sm text-body-sm text-white/90 leading-relaxed">Melayani suplai restoran diaspora, toko retail Asia di mancanegara, dan pesanan dalam jumlah besar.</p>
<a class="mt-space-xs inline-flex items-center justify-center gap-space-xs bg-primary-container hover:bg-primary text-white py-2.5 px-space-md rounded-lg font-label-lg text-label-lg transition-all shadow-sm" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ rawurlencode('Halo Toko Kelontong, saya ingin konsultasi pesanan grosir') }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[18px]">chat</span> Konsultasi via WhatsApp
</a>
</div>
</aside>

<!-- RIGHT: TOOLBAR & GRID -->
<div class="lg:col-span-9 flex flex-col gap-space-lg">
<form method="GET" action="{{ route('products') }}" class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex items-center gap-space-xs">
<span class="font-body-sm text-body-sm text-on-surface-variant">Menampilkan <span class="font-bold text-on-surface">{{ $products->count() }}</span> dari <span class="font-bold text-on-surface">{{ $products->total() }}</span> produk terkurasi</span>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-sm">
@if(request('kategori'))<input type="hidden" name="kategori" value="{{ request('kategori') }}"/>@endif
<div class="relative flex-1 min-w-0 sm:min-w-[200px]">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
<input name="cari" value="{{ request('cari') }}" class="w-full pl-9 pr-3 py-2 text-body-sm bg-surface rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Cari nama produk..." type="text"/>
</div>
<div class="flex items-center gap-space-2xs bg-surface px-3 py-1.5 rounded-lg">
<span class="material-symbols-outlined text-[18px] text-on-surface-variant">sort</span>
<select name="urutkan" onchange="this.form.submit()" class="bg-transparent text-body-sm font-label-md text-on-surface focus:outline-none cursor-pointer">
<option value="populer" @selected(request('urutkan') === 'populer' || !request('urutkan'))>Urutkan: Paling Populer</option>
<option value="terbaru" @selected(request('urutkan') === 'terbaru')>Urutkan: Produk Terbaru</option>
<option value="harga-rendah" @selected(request('urutkan') === 'harga-rendah')>Harga: Rendah ke Tinggi</option>
<option value="harga-tinggi" @selected(request('urutkan') === 'harga-tinggi')>Harga: Tinggi ke Rendah</option>
</select>
</div>
<button type="submit" class="bg-primary hover:bg-primary-container text-on-primary px-space-md py-2 rounded-lg font-label-md text-label-md transition-colors">Cari</button>
</div>
</form>

<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-space-lg">
@forelse ($products as $product)
@include('partials.product-card')
@empty
<p class="col-span-full text-center font-body-md text-body-md text-on-surface-variant py-space-2xl">Tidak ada produk yang cocok. Coba kata kunci lain.</p>
@endforelse
</div>

<div class="mt-space-md">
{{ $products->links() }}
</div>
</div>
</div>
</section>
</div>
@endsection
