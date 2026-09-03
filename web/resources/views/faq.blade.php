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
    ['Apakah melayani pengiriman ke negara saya?', 'Ya, hampir ke semua negara. Konfirmasi negara tujuanmu via WhatsApp atau email untuk memastikan.'],
    ['Berapa ongkir ke luar negeri?', 'Ongkir tergantung berat total pesanan dan negara tujuan. Kami berikan estimasi lengkap sebelum pembayaran — tanpa komitmen apa pun.'],
    ['Bagaimana cara pembayaran dari luar negeri?', 'Transfer bank internasional atau metode pembayaran online yang akan segera tersedia. Detail diberikan saat konfirmasi pesanan.'],
    ['Apakah produk tahan pengiriman jauh?', 'Ya. Kami hanya menjual produk tahan lama (shelf-stable) dan mengemasnya dengan kemasan kedap udara plus bubble wrap sesuai standar pengiriman internasional.'],
    ['Berapa lama pesanan diproses?', '1–2 hari kerja setelah pembayaran terkonfirmasi. Estimasi sampai: 2–5 hari domestik, 3–7 hari internasional.'],
    ['Apakah bisa pesan dalam jumlah besar (grosir)?', 'Bisa. Kami melayani suplai restoran diaspora dan toko retail Asia di mancanegara. Hubungi kami untuk harga khusus.'],
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
