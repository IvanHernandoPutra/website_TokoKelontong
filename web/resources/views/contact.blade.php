@extends('layouts.app')

@section('title', 'Kontak — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Kontak</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Hubungi Kami</h1>
</div>
</section>
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-container-max mx-auto px-gutter-desktop grid grid-cols-1 lg:grid-cols-2 gap-space-2xl">
<div class="flex flex-col gap-space-md">
<h2 class="font-headline-md text-headline-md text-on-surface">Informasi Kontak</h2>
<div class="flex flex-col gap-space-sm">
@if(config('toko.registered_address'))
<span class="flex items-start gap-space-sm font-body-md text-body-md text-on-surface-variant"><span class="material-symbols-outlined text-primary">home_work</span> Alamat Terdaftar: {{ config('toko.registered_address') }}</span>
@endif
<span class="flex items-start gap-space-sm font-body-md text-body-md text-on-surface-variant"><span class="material-symbols-outlined text-primary">store</span> Store: Klaten, Jawa Tengah</span>
<a class="flex items-center gap-space-sm font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="https://wa.me/{{ config('toko.wa_number') }}"><span class="material-symbols-outlined text-primary">chat</span> WhatsApp: +{{ config('toko.wa_number') }}</a>
<a class="flex items-center gap-space-sm font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="mailto:{{ config('toko.email') }}"><span class="material-symbols-outlined text-primary">mail</span> {{ config('toko.email') }}</a>
<span class="flex items-center gap-space-sm font-body-md text-body-md text-on-surface-variant"><span class="material-symbols-outlined text-primary">schedule</span> Senin–Sabtu, 08.00–20.00 WIB</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-secondary hover:bg-on-secondary-container text-on-secondary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(68,103,68,0.3)] self-start" href="https://wa.me/{{ config('toko.wa_number') }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span> Chat WhatsApp Sekarang
</a>
</div>
<div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-xl">
<h2 class="font-headline-md text-headline-md text-on-surface mb-space-md">Kirim Pesan</h2>
@if (session('success'))
<div class="mb-space-md p-space-md bg-secondary-container text-on-secondary-container rounded-lg font-body-md text-body-md">{{ session('success') }}</div>
@endif
<form method="POST" action="{{ route('contact.store') }}" class="flex flex-col gap-space-md">
@csrf
<div>
<label class="font-label-md text-label-md text-on-surface block mb-space-2xs">Nama</label>
<input name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 bg-surface border border-surface-container rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary font-body-md" placeholder="Nama lengkap"/>
@error('name')<span class="text-error font-body-sm">{{ $message }}</span>@enderror
</div>
<div>
<label class="font-label-md text-label-md text-on-surface block mb-space-2xs">Email</label>
<input name="email" type="email" value="{{ old('email') }}" required class="w-full px-4 py-3 bg-surface border border-surface-container rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary font-body-md" placeholder="email@contoh.com"/>
@error('email')<span class="text-error font-body-sm">{{ $message }}</span>@enderror
</div>
<div>
<label class="font-label-md text-label-md text-on-surface block mb-space-2xs">Negara (opsional)</label>
<input name="country" value="{{ old('country') }}" class="w-full px-4 py-3 bg-surface border border-surface-container rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary font-body-md" placeholder="Negara tempat tinggal"/>
</div>
<div>
<label class="font-label-md text-label-md text-on-surface block mb-space-2xs">Pesan</label>
<textarea name="message" rows="4" required class="w-full px-4 py-3 bg-surface border border-surface-container rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary font-body-md" placeholder="Tulis pertanyaan atau pesananmu...">{{ old('message') }}</textarea>
@error('message')<span class="text-error font-body-sm">{{ $message }}</span>@enderror
</div>
<button type="submit" class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(159,60,22,0.35)]">
<span class="material-symbols-outlined text-[20px]">send</span> Kirim Pesan
</button>
</form>
</div>
</div>
</section>
</div>
@endsection
