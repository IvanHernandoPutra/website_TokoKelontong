@extends('layouts.app')

@section('title', 'FAQ — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">FAQ</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Pertanyaan yang Sering Diajukan</h1>
</div>
</section>
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-3xl mx-auto px-gutter-desktop flex flex-col gap-space-sm">
@php
$faqs = [
    ['Bagaimana cara memesan?', 'Pilih produk favorit di katalog, klik tombol WhatsApp pada produk, lalu chat kami untuk konfirmasi stok dan harga. Tim kami akan memandu sampai pesanan selesai.'],
    ['Apakah bisa belanja langsung di toko?', 'Bisa! Gerai kami di Klaten, Jawa Tengah buka Senin–Sabtu, 08.00–20.00 WIB. Lihat halaman Toko Kami untuk alamat lengkap.'],
    ['Metode pembayaran apa saja yang diterima?', 'Transfer bank atau tunai langsung di toko. Detail pembayaran diberikan saat konfirmasi pesanan via WhatsApp.'],
    ['Apakah produknya asli dan berkualitas?', 'Ya. Semua produk dikurasi langsung dari produsen dan UMKM lokal terpercaya, dikemas kedap udara agar tetap segar sampai tangan Anda.'],
    ['Apakah bisa pesan dalam jumlah besar (grosir)?', 'Bisa. Kami melayani kebutuhan warung, rumah makan, kantor, hingga acara — hubungi kami untuk harga khusus grosir.'],
    ['Berapa lama pesanan diproses?', 'Pesanan diproses 1–2 hari kerja setelah konfirmasi. Detail selanjutnya diatur langsung saat chat dengan tim kami.'],
    ['Apakah ada toko fisik?', 'Ada, di Klaten, Jawa Tengah. Lihat halaman Toko Kami untuk alamat dan jam operasional.'],
];
@endphp
@foreach ($faqs as [$q, $a])
<details class="group bg-surface-container-lowest rounded-xl shadow-sm border border-surface-container overflow-hidden">
<summary class="flex items-center justify-between cursor-pointer p-space-lg font-title-md text-title-md text-on-surface hover:text-primary transition-colors list-none">
{{ $q }}
<span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="px-space-lg pb-space-lg font-body-md text-body-md text-on-surface-variant">{{ $a }}</div>
</details>
@endforeach
</div>
</section>
</div>
@endsection
