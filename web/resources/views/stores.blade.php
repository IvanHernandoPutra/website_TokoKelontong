@extends('layouts.app')

@section('title', 'Toko Kami — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Toko Kami</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Toko Kami</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Kunjungi toko fisik kami atau hubungi untuk pemesanan.</p>
</div>
</section>
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-container-max mx-auto px-gutter-desktop grid grid-cols-1 md:grid-cols-2 gap-space-lg">
@foreach ($stores as $store)
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<div class="aspect-[16/9] bg-surface-container overflow-hidden">
<img class="w-full h-full object-cover" alt="{{ $store->name }}" src="{{ asset('images/interior-toko.jpg') }}"/>
</div>
<div class="p-space-lg flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<h2 class="font-headline-sm text-headline-sm text-on-surface">{{ $store->name }}</h2>
@if($store->is_main)<span class="px-2 py-0.5 rounded bg-secondary text-on-secondary font-label-sm text-label-sm uppercase font-bold">Pusat</span>@endif
</div>
<span class="font-body-md text-body-md text-on-surface-variant flex items-start gap-space-xs"><span class="material-symbols-outlined text-[18px] text-primary mt-0.5">location_on</span> {{ $store->address }}, {{ $store->city }}</span>
@if($store->hours)<span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-space-xs"><span class="material-symbols-outlined text-[18px] text-primary">schedule</span> {{ $store->hours }}</span>@endif
@if($store->phone)<span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-space-xs"><span class="material-symbols-outlined text-[18px] text-primary">call</span> {{ $store->phone }}</span>@endif
@if($store->maps_url)
<a class="mt-space-xs inline-flex items-center gap-space-xs bg-secondary hover:bg-on-secondary-container text-on-secondary px-space-md py-space-xs rounded-lg font-label-md text-label-md transition-all self-start" href="{{ $store->maps_url }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[18px]">map</span> Lihat di Google Maps
</a>
@endif
</div>
</div>
@endforeach
</div>
</section>
</div>
@endsection
