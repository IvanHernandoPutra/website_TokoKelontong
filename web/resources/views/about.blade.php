@extends('layouts.app')

@section('title', 'Tentang Kami — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Tentang Kami</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Tentang Toko Kelontong</h1>
</div>
</section>
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-container-max mx-auto px-gutter-desktop grid grid-cols-1 lg:grid-cols-12 gap-space-2xl items-start">
<div class="lg:col-span-7 flex flex-col gap-space-md">
<p class="font-body-lg text-body-lg text-on-surface leading-relaxed">
<strong>Toko Kelontong</strong> adalah unit usaha ritel makanan khas Indonesia di bawah <strong>CV. Bertiga Tradexa</strong>, badan usaha resmi yang berkedudukan di {{ config('toko.registered_address') ?: '[alamat sesuai NPWP]' }}.
</p>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
Kami berawal dari sebuah toko kelontong di Klaten, Jawa Tengah — melayani kebutuhan harian warga sekitar. Dari permintaan keluarga dan kerabat di luar negeri yang rindu produk Indonesia, kami berkembang melayani pengiriman makanan khas Nusantara ke berbagai negara.
</p>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
Pelanggan kami: perantau Indonesia, komunitas diaspora, hingga pecinta kuliner Nusantara di mancanegara.
</p>
<p class="font-body-md text-body-md text-on-surface font-semibold leading-relaxed">
Misi kami sederhana: membuat rasa rumah bisa dinikmati di mana pun.
</p>
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col gap-space-xs">
<span class="font-title-md text-title-md text-on-surface">Legalitas</span>
<span class="font-body-md text-body-md text-on-surface-variant">Badan Usaha: CV. Bertiga Tradexa</span>
@if(config('toko.npwp'))<span class="font-body-md text-body-md text-on-surface-variant">NPWP: {{ config('toko.npwp') }}</span>@endif
@if(config('toko.registered_address'))<span class="font-body-md text-body-md text-on-surface-variant">Alamat Terdaftar: {{ config('toko.registered_address') }}</span>@endif
</div>
</div>
<div class="rounded-2xl overflow-hidden shadow-[0_16px_36px_-10px_rgba(84,46,26,0.12)] bg-surface-container aspect-[4/3]">
<img class="w-full h-full object-cover" alt="Toko Kelontong Klaten" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7Y5EgI0mppZi5F76fJBDSU07AaT3ihhDi9WxBPr1Bekc3yn04e9An5-VRhXumYY-E8al34OfCeWSY9do10-6iWuPtwfhhiu2gNrTvah3IQnBeuCHQ6xTbAqDP5J3U6oM8iJKROjnhQ9HETSxS_LKnoxlrA6MnnnaA2T7LgsMfO8-fjI52lI0If-KVfdgxp9KJukPxqCZnUHSQnVd6W_aghZt1-pIyEiigbsp496-vXZ2ycAXUPxrF"/>
</div>
<div class="grid grid-cols-3 gap-space-sm">
<div class="p-space-md bg-surface-container-low rounded-xl text-center">
<span class="material-symbols-outlined text-primary text-[28px]">workspace_premium</span>
<p class="font-label-sm text-label-sm text-on-surface-variant mt-space-2xs">Kualitas Produk</p>
</div>
<div class="p-space-md bg-surface-container-low rounded-xl text-center">
<span class="material-symbols-outlined text-secondary text-[28px]">handshake</span>
<p class="font-label-sm text-label-sm text-on-surface-variant mt-space-2xs">Harga Wajar</p>
</div>
<div class="p-space-md bg-surface-container-low rounded-xl text-center">
<span class="material-symbols-outlined text-tertiary text-[28px]">sentiment_satisfied</span>
<p class="font-label-sm text-label-sm text-on-surface-variant mt-space-2xs">Pelayanan Ramah</p>
</div>
</div>
</div>
</div>
</section>
</div>
@endsection
