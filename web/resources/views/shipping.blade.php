@extends('layouts.app')

@section('title', 'Pengiriman & Pemesanan — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Pengiriman &amp; Pemesanan</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Pengiriman &amp; Pemesanan</h1>
</div>
</section>
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-2xl">
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg">
<div class="p-space-xl rounded-xl bg-surface-container-low flex flex-col gap-space-sm shadow-[0_2px_12px_-3px_rgba(84,46,26,0.06)]">
<div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center"><span class="material-symbols-outlined text-[28px]">local_shipping</span></div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Domestik Indonesia</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Ekspedisi reguler ke seluruh Indonesia, estimasi 2–5 hari kerja. Ongkir dihitung berdasarkan berat dan kota tujuan.</p>
</div>
<div class="p-space-xl rounded-xl bg-surface-container-low flex flex-col gap-space-sm shadow-[0_2px_12px_-3px_rgba(84,46,26,0.06)]">
<div class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center"><span class="material-symbols-outlined text-[28px]">public</span></div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Internasional</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Pengiriman ekspres ke berbagai negara, estimasi 3–7 hari kerja. Ongkir dihitung berdasarkan berat dan negara tujuan — hubungi kami untuk estimasi sebelum memesan.</p>
</div>
</div>
<div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-xl flex flex-col gap-space-lg">
<h2 class="font-headline-md text-headline-md text-on-surface">Cara Pesan</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<div class="flex flex-col gap-space-xs">
<span class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-title-lg text-title-lg">1</span>
<h3 class="font-title-md text-title-md text-on-surface">Pilih Produk</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Jelajahi katalog, catat nama dan jumlah produk yang diinginkan.</p>
</div>
<div class="flex flex-col gap-space-xs">
<span class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-title-lg text-title-lg">2</span>
<h3 class="font-title-md text-title-md text-on-surface">Konfirmasi via WhatsApp</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Hubungi kami untuk konfirmasi stok dan estimasi ongkir ke alamatmu.</p>
</div>
<div class="flex flex-col gap-space-xs">
<span class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-title-lg text-title-lg">3</span>
<h3 class="font-title-md text-title-md text-on-surface">Pembayaran &amp; Kirim</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Lakukan pembayaran — pesanan langsung diproses dan dikirim 1–2 hari kerja.</p>
</div>
</div>
</div>
<div class="bg-secondary-container/40 border border-secondary-container rounded-xl p-space-lg flex items-start gap-space-md">
<span class="material-symbols-outlined text-secondary text-[28px]">inventory_2</span>
<div>
<h3 class="font-title-md text-title-md text-on-surface">Kemasan Standar Pengiriman Jarak Jauh</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-space-2xs">Semua produk dikemas dengan kemasan kedap udara, bubble wrap untuk produk rentan, dan kardus tebal. Kami hanya menjual produk tahan lama (shelf-stable) yang aman untuk pengiriman internasional.</p>
</div>
</div>
</div>
</section>
</div>
@endsection
