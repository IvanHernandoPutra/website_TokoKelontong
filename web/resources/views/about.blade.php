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
<strong>Toko Kelontong</strong> adalah unit usaha ritel makanan khas Indonesia di bawah <strong>CV. Bertiga Tradexa</strong>, badan usaha resmi yang berkedudukan di {{ config('toko.registered_address') ?: '[alamat sesuai NPWP]' }}. Kami adalah perusahaan yang bergerak di bidang <strong>pengiriman makanan Indonesia</strong> — bukan jasa ekspedisi umum.
</p>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
Kisah kami berawal dari sebuah toko kelontong di Klaten, Jawa Tengah. Toko kecil yang melayani kebutuhan harian warga — dari bumbu dapur, mi instan, kopi, sampai camilan anak. Sehari-hari kami mengenal betul produk mana yang benar-benar dicari orang: yang rasanya otentik, kemasannya rapi, dan harganya wajar.
</p>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
Dari permintaan keluarga dan kerabat yang merantau di luar negeri, kami melihat satu hal yang sama selalu muncul: <em>kangen rasa rumah</em>. Maka dari itu, CV. Bertiga Tradexa mengambil peran sebagai kurator — memilih makanan khas Nusantara terbaik, mengemasnya dengan aman untuk pengiriman jarak jauh, dan mengantarnya sampai ke tangan perantau Indonesia serta pecinta kuliner Nusantara di berbagai negara.
</p>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
Setiap produk di katalog kami melewati seleksi yang sama seperti di toko kami sendiri: kami hanya menjual yang kami konsumsi sendiri. Kemasan dicek satu per satu sebelum dikirim — standing pouch kedap udara untuk camilan, segel induksi untuk sambal botol, dan kemasan kokoh untuk produk rapuh — supaya sampai tujuan dalam kondisi terbaik.
</p>
<p class="font-body-md text-body-md text-on-surface font-semibold leading-relaxed">
Misi kami sederhana: membuat rasa rumah bisa dinikmati di mana pun Anda berada.
</p>
<div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col gap-space-2xs mt-space-2xs">
<span class="font-title-md text-title-md text-on-surface">Legalitas</span>
<span class="font-body-md text-body-md text-on-surface-variant">Badan Usaha: CV. Bertiga Tradexa</span>
@if(config('toko.npwp'))<span class="font-body-md text-body-md text-on-surface-variant">NPWP: {{ config('toko.npwp') }}</span>@endif
@if(config('toko.registered_address'))<span class="font-body-md text-body-md text-on-surface-variant">Alamat Terdaftar: {{ config('toko.registered_address') }}</span>@endif
</div>
</div>
<div class="lg:col-span-5 flex flex-col gap-space-md lg:sticky lg:top-24">
<div class="rounded-2xl overflow-hidden shadow-[0_16px_36px_-10px_rgba(84,46,26,0.12)] bg-surface-container aspect-[4/5]">
<img class="w-full h-full object-cover" alt="Interior Toko Kelontong Klaten" src="{{ asset('images/interior-toko.jpg') }}"/>
</div>
<div class="flex flex-col gap-space-sm">
<div class="p-space-md bg-surface-container-low rounded-xl flex items-start gap-space-sm">
<span class="material-symbols-outlined text-primary text-[28px]">workspace_premium</span>
<div><span class="font-title-sm text-title-sm text-on-surface font-semibold block">Kurasi, Bukan Sekadar Jual</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-2xs">Produk dipilih satu per satu dari yang terbukti dicari — bukan sekadar mengisi etalase.</p></div>
</div>
<div class="p-space-md bg-surface-container-low rounded-xl flex items-start gap-space-sm">
<span class="material-symbols-outlined text-secondary text-[28px]">handshake</span>
<div><span class="font-title-sm text-title-sm text-on-surface font-semibold block">Harga Wajar</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-2xs">Harga eceran toko kelontong — tanpa mark-up berlebihan hanya karena dikirim jauh.</p></div>
</div>
<div class="p-space-md bg-surface-container-low rounded-xl flex items-start gap-space-sm">
<span class="material-symbols-outlined text-tertiary text-[28px]">inventory_2</span>
<div><span class="font-title-sm text-title-sm text-on-surface font-semibold block">Kemasan Aman Kirim</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-2xs">Pouch kedap udara, segel induksi, dan pelindung anti pecah untuk perjalanan internasional.</p></div>
</div>
<div class="p-space-md bg-surface-container-low rounded-xl flex items-start gap-space-sm">
<span class="material-symbols-outlined text-primary text-[28px]">sentiment_satisfied</span>
<div><span class="font-title-sm text-title-sm text-on-surface font-semibold block">Pelayanan Personal</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-2xs">Ditangani langsung oleh keluarga kami di Klaten — tanya apa saja via WhatsApp.</p></div>
</div>
</div>
</div>
</div>
</section>
</div>
@endsection
