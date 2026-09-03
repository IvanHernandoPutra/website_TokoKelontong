@extends('layouts.app')

@section('title', $product->name . ' — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<a class="hover:text-primary transition-colors" href="{{ route('products') }}">Produk</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold line-clamp-1">{{ $product->name }}</span>
</nav>
</div>
</section>
<section class="w-full py-space-2xl bg-surface">
<div class="max-w-container-max mx-auto px-gutter-desktop grid grid-cols-1 lg:grid-cols-2 gap-space-2xl">
<div class="relative aspect-square rounded-xl bg-[#FAF6F0] overflow-hidden">
@if($product->image)
<img class="w-full h-full object-cover" alt="{{ $product->name }}" src="{{ $product->image }}"/>
@else
<div class="w-full h-full flex items-center justify-center text-surface-dim"><span class="material-symbols-outlined text-[96px]">fastfood</span></div>
@endif
</div>
<div class="flex flex-col gap-space-md">
<div class="flex flex-wrap items-center gap-space-xs">
<span class="px-2 py-0.5 rounded bg-secondary text-on-secondary font-label-sm text-label-sm uppercase font-bold">{{ $product->category->name }}</span>
@if($product->badge)
<span class="px-2 py-0.5 rounded bg-primary text-on-primary font-label-sm text-label-sm uppercase font-bold">{{ $product->badge }}</span>
@endif
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface">{{ $product->name }}</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">{{ $product->description }}</p>
<div class="flex items-baseline gap-space-sm">
<span class="font-display text-display text-primary font-bold">{{ $product->formatted_price }}</span>
<span class="font-body-md text-body-md text-on-surface-variant">{{ $product->usd_price }}</span>
</div>
<div class="flex flex-col gap-space-2xs bg-surface-container-low p-space-md rounded-xl">
@if($product->weight_label)<span class="font-body-md text-body-md text-on-surface flex items-center gap-space-xs"><span class="material-symbols-outlined text-[18px] text-secondary">scale</span> Berat kemasan: {{ $product->weight_label }}</span>@endif
<span class="font-body-md text-body-md text-on-surface flex items-center gap-space-xs"><span class="material-symbols-outlined text-[18px] text-secondary">air</span> Kemasan kedap udara standar pengiriman jarak jauh</span>
<span class="font-body-md text-body-md text-on-surface flex items-center gap-space-xs"><span class="material-symbols-outlined text-[18px] text-secondary">public</span> Siap kirim domestik &amp; internasional</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(159,60,22,0.35)]" href="{{ $product->wa_url }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span> Pesan via WhatsApp
</a>
</div>
</div>
</section>
@if($related->isNotEmpty())
<section class="w-full pb-space-3xl bg-surface">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xl">
<h2 class="font-headline-md text-headline-md text-on-surface">Produk Serupa</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-lg">
@foreach ($related as $product)
@include('partials.product-card')
@endforeach
</div>
</div>
</section>
@endif
</div>
@endsection
