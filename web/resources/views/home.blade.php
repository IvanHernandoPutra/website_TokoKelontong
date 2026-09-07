@extends('layouts.app')

@section('title', __('home.hero_title_highlight') . ' — Toko Kelontong')
@section('meta_description', __('home.hero_tagline'))

@section('content')
<div class="flex flex-col w-full">
<!-- HERO -->
<section class="relative w-full overflow-hidden bg-surface-container-low -mt-28 pt-28">
<div class="max-w-container-max mx-auto px-gutter-desktop py-space-3xl lg:py-space-4xl relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-2xl items-center">
<div class="lg:col-span-7 flex flex-col items-start gap-space-md">
<div class="inline-flex items-center gap-space-xs bg-secondary/10 border border-secondary/20 px-space-sm py-space-2xs rounded-full">
<span class="inline-block w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">{!! __('home.badge_hero') !!}</span>
</div>
<h1 class="font-display text-display lg:text-[52px] lg:leading-[60px] text-on-surface font-black tracking-tight">
{!! __('home.hero_title', ['highlight' => '<span class="text-primary">'.__('home.hero_title_highlight').'</span>']) !!}
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed max-w-xl">
{{ __('home.hero_tagline') }}
</p>
<div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
<a class="inline-flex items-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(159,60,22,0.35)]" href="{{ route('products') }}">
<span>{{ __('home.hero_cta_products') }}</span>
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface px-space-lg py-space-md rounded-xl font-label-lg text-label-lg transition-all" href="{{ route('shipping') }}">
<span class="material-symbols-outlined text-secondary text-[20px]">shopping_cart</span>
<span>{{ __('home.hero_cta_shipping') }}</span>
</a>
</div>
<div class="mt-space-lg w-full max-w-xl rounded-2xl bg-surface/95 backdrop-blur-md border border-outline-variant/40 shadow-[0_6px_24px_-6px_rgba(84,46,26,0.08)] p-3 sm:p-5">
<div class="grid grid-cols-3 divide-x divide-outline-variant/30">
<div class="flex flex-col justify-center px-2 sm:px-4 first:pl-0">
<div class="flex items-center gap-1">
<span class="font-display text-2xl sm:text-3xl lg:text-[34px] text-primary font-black tracking-tight leading-none">100%</span>
<span class="material-symbols-outlined text-[17px] text-primary hidden sm:inline">verified</span>
</div>
<span class="text-[12px] sm:text-[13px] font-bold text-on-surface mt-1.5 leading-tight">{{ __('home.stat1_value') }}</span>
<span class="text-[10px] sm:text-[11px] text-on-surface-variant leading-none mt-0.5 hidden sm:inline">{{ __('home.stat1_sub') }}</span>
</div>
<div class="flex flex-col justify-center px-2 sm:px-4">
<div class="flex items-center gap-1">
<span class="font-display text-2xl sm:text-3xl lg:text-[34px] text-secondary font-black tracking-tight leading-none">35+</span>
<span class="material-symbols-outlined text-[17px] text-secondary hidden sm:inline">storefront</span>
</div>
<span class="text-[12px] sm:text-[13px] font-bold text-on-surface mt-1.5 leading-tight">{{ __('home.stat2_value') }}</span>
<span class="text-[10px] sm:text-[11px] text-on-surface-variant leading-none mt-0.5 hidden sm:inline">{{ __('home.stat2_sub') }}</span>
</div>
<div class="flex flex-col justify-center px-2 sm:px-4 last:pr-0">
<div class="flex items-center gap-1">
<span class="font-display text-[16px] sm:text-2xl lg:text-[24px] text-tertiary font-black tracking-tight leading-none uppercase">Food Grade</span>
</div>
<span class="text-[12px] sm:text-[13px] font-bold text-on-surface mt-1.5 leading-tight">{{ __('home.stat3_value') }}</span>
<span class="text-[10px] sm:text-[11px] text-on-surface-variant leading-none mt-0.5 hidden sm:inline">{{ __('home.stat3_sub') }}</span>
</div>
</div>
</div>
</div>
<div class="lg:col-span-5 relative">
<div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden shadow-[0_20px_40px_-15px_rgba(84,46,26,0.18)] bg-surface-container">
<img class="w-full h-full object-cover" alt="Meja rempah dan kemasan produk Toko Kelontong" src="{{ asset('images/hero-home.jpg') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
<div class="absolute bottom-4 left-4 right-4 p-space-sm bg-surface/95 backdrop-blur-md rounded-xl shadow-md flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-secondary/15 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">verified</span>
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface leading-tight">{{ __('home.hero_card_title') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ __('home.hero_card_sub') }}</span>
</div>
</div>
<span class="font-label-sm text-label-sm px-space-xs py-space-2xs bg-secondary-container text-on-secondary-container rounded font-bold">{{ __('home.hero_card_badge') }}</span>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- KEUNGGULAN -->
<section class="w-full bg-surface py-space-3xl relative">
<div class="max-w-container-max mx-auto px-4 sm:px-gutter-desktop">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
<!-- Keunggulan 1: Terracotta -->
<div class="group relative p-7 sm:p-8 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 hover:border-primary/50 transition-all duration-300 flex flex-col justify-between gap-space-md shadow-[0_4px_20px_-6px_rgba(84,46,26,0.05)] hover:shadow-[0_16px_36px_-10px_rgba(159,60,22,0.18)] hover:-translate-y-2 hover:bg-gradient-to-b hover:from-white hover:to-[#fff5f1] overflow-hidden">
<div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary to-primary-container opacity-90 group-hover:h-2 transition-all"></div>
<div class="flex items-center justify-between gap-2">
<div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-symbols-outlined text-[30px]">storefront</span>
</div>
<span class="inline-flex items-center gap-1 font-label-sm text-[11px] font-bold uppercase tracking-wider text-primary bg-primary/10 px-3 py-1 rounded-full group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-[13px]">verified</span>
<span>{{ __('home.feat1_badge') }}</span>
</span>
</div>
<div class="flex flex-col gap-1.5">
<h3 class="font-headline-sm text-[21px] text-on-surface font-bold group-hover:text-primary transition-colors">{{ __('home.feat1_title') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ __('home.feat1_desc') }}</p>
</div>
<div class="flex items-center gap-1 text-primary text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300">
<span>{{ __('home.feat1_foot') }}</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</div>
</div>

<!-- Keunggulan 2: Forest Green -->
<div class="group relative p-7 sm:p-8 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 hover:border-secondary/50 transition-all duration-300 flex flex-col justify-between gap-space-md shadow-[0_4px_20px_-6px_rgba(84,46,26,0.05)] hover:shadow-[0_16px_36px_-10px_rgba(68,103,68,0.20)] hover:-translate-y-2 hover:bg-gradient-to-b hover:from-white hover:to-[#f2f8f2] overflow-hidden">
<div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-secondary to-[#2c472c] opacity-90 group-hover:h-2 transition-all"></div>
<div class="flex items-center justify-between gap-2">
<div class="w-14 h-14 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-110 group-hover:bg-secondary group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-symbols-outlined text-[30px]">sell</span>
</div>
<span class="inline-flex items-center gap-1 font-label-sm text-[11px] font-bold uppercase tracking-wider text-secondary bg-secondary/10 px-3 py-1 rounded-full group-hover:bg-secondary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-[13px]">local_offer</span>
<span>{{ __('home.feat2_badge') }}</span>
</span>
</div>
<div class="flex flex-col gap-1.5">
<h3 class="font-headline-sm text-[21px] text-on-surface font-bold group-hover:text-secondary transition-colors">{{ __('home.feat2_title') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ __('home.feat2_desc') }}</p>
</div>
<div class="flex items-center gap-1 text-secondary text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300">
<span>{!! __('home.feat2_foot') !!}</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</div>
</div>

<!-- Keunggulan 3: Warm Gold -->
<div class="group relative p-7 sm:p-8 rounded-2xl bg-surface-container-lowest border border-outline-variant/30 hover:border-tertiary/50 transition-all duration-300 flex flex-col justify-between gap-space-md shadow-[0_4px_20px_-6px_rgba(84,46,26,0.05)] hover:shadow-[0_16px_36px_-10px_rgba(133,79,0,0.18)] hover:-translate-y-2 hover:bg-gradient-to-b hover:from-white hover:to-[#fff9f0] overflow-hidden">
<div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-tertiary to-[#5c3700] opacity-90 group-hover:h-2 transition-all"></div>
<div class="flex items-center justify-between gap-2">
<div class="w-14 h-14 rounded-2xl bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-110 group-hover:bg-tertiary group-hover:text-white transition-all duration-300 shadow-sm">
<span class="material-symbols-outlined text-[30px]">inventory_2</span>
</div>
<span class="inline-flex items-center gap-1 font-label-sm text-[11px] font-bold uppercase tracking-wider text-tertiary bg-tertiary/10 px-3 py-1 rounded-full group-hover:bg-tertiary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-[13px]">shield</span>
<span>{{ __('home.feat3_badge') }}</span>
</span>
</div>
<div class="flex flex-col gap-1.5">
<h3 class="font-headline-sm text-[21px] text-on-surface font-bold group-hover:text-tertiary transition-colors">{{ __('home.feat3_title') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ __('home.feat3_desc') }}</p>
</div>
<div class="flex items-center gap-1 text-tertiary text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300">
<span>{{ __('home.feat3_foot') }}</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</div>
</div>
</div>
</div>
</section>

<!-- KATEGORI -->
<section class="w-full bg-surface-container-low py-space-3xl">
<div class="max-w-container-max mx-auto px-4 sm:px-gutter-desktop flex flex-col gap-space-xl">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">{{ __('home.cat_eyebrow') }}</span>
<div class="flex items-center justify-between gap-2">
<h2 class="font-headline-lg text-headline-lg text-on-surface">{{ __('home.cat_title') }}</h2>
<span class="md:hidden text-xs text-on-surface-variant flex items-center gap-1 font-medium bg-surface-container px-2.5 py-1 rounded-full"><span class="material-symbols-outlined text-[15px] text-primary">swipe</span> {{ __('common.swipe') }}</span>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">{{ __('home.cat_desc') }}</p>
</div>
<!-- Carousel on mobile (< md), grid on tablet & desktop (>= md) -->
<div class="flex md:grid md:grid-cols-3 lg:grid-cols-5 gap-4 overflow-x-auto md:overflow-visible snap-x snap-mandatory pb-4 md:pb-0 -mx-4 px-[12.5vw] md:mx-0 md:px-0 scrollbar-none">
@foreach ($categories as $cat)
<a class="group relative aspect-[3/4] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-end p-space-md bg-surface-container shrink-0 w-[75vw] sm:w-[45vw] md:w-auto snap-center" href="{{ route('products', ['kategori' => $cat->slug]) }}">
@if($cat->image)
<img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $cat->name }}" src="{{ $cat->image }}"/>
@endif
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
<div class="relative z-10 flex flex-col">
<span class="font-title-md text-title-md text-white font-bold group-hover:text-primary-fixed transition-colors">{{ __('products.category.'.$cat->slug) }}</span>
<span class="font-label-sm text-label-sm text-surface-dim">{{ __('products.category_sub.'.$cat->slug) }}</span>
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
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">{{ __('home.featured_eyebrow') }}</span>
<div class="flex items-center justify-between gap-2">
<h2 class="font-headline-lg text-headline-lg text-on-surface">{{ __('home.featured_title') }}</h2>
<span class="sm:hidden text-xs text-on-surface-variant flex items-center gap-1 font-medium bg-surface-container px-2.5 py-1 rounded-full"><span class="material-symbols-outlined text-[15px] text-secondary">swipe</span> {{ __('common.swipe') }}</span>
</div>
</div>
<a class="inline-flex items-center gap-space-2xs font-title-md text-title-md text-primary hover:text-primary-container font-semibold transition-colors" href="{{ route('products') }}">
<span>{{ __('home.featured_link') }}</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
<!-- Carousel on mobile (< sm), grid on tablet & desktop (>= sm) -->
<div class="flex sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-space-lg overflow-x-auto sm:overflow-visible snap-x snap-mandatory pb-4 sm:pb-0 -mx-4 px-[12vw] sm:mx-0 sm:px-0 scrollbar-none">
@foreach ($featured as $product)
<div class="shrink-0 w-[76vw] sm:w-auto snap-center flex">
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
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary font-bold">{{ __('home.about_eyebrow') }}</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface">{{ __('home.about_title') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
{{ __('home.about_p1') }}
</p>
<p class="font-body-md text-body-md text-on-surface-variant">
{{ __('home.about_p2') }}
</p>
<div class="pt-space-xs">
<a class="inline-flex items-center gap-space-xs bg-secondary hover:bg-on-secondary-container text-on-secondary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(68,103,68,0.3)]" href="{{ route('about') }}">
<span>{{ __('home.about_cta') }}</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
</div>
<div class="lg:col-span-6">
<div class="relative rounded-2xl overflow-hidden shadow-[0_16px_36px_-10px_rgba(84,46,26,0.12)] bg-surface-container">
<img class="w-full h-96 lg:h-[450px] object-cover" alt="Interior Toko Kelontong Klaten" src="{{ asset('images/interior-toko.jpg') }}"/>
<div class="absolute inset-0 bg-gradient-to-tr from-black/60 via-transparent to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6 p-space-md bg-surface/90 backdrop-blur-md rounded-xl flex items-center justify-between">
<div>
<span class="font-title-md text-title-md text-on-surface font-bold block">{!! __('home.about_card_title') !!}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ __('home.about_card_sub') }}</span>
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

<!-- SECTION 6: TESTIMONI PELANGGAN -->
<section class="w-full bg-surface py-space-3xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-2xl">
<div class="text-center max-w-2xl mx-auto flex flex-col items-center gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">{{ __('home.testi_eyebrow') }}</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface">{{ __('home.testi_title') }}</h2>
<p class="font-body-md text-body-md text-on-surface-variant">
{{ __('home.testi_desc') }}
</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<!-- Testi 1: Klaten -->
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
“{{ __('home.testi1_quote') }}”
</p>
</div>
<div class="mt-space-lg flex items-center gap-space-sm pt-space-sm">
<div class="w-10 h-10 rounded-full bg-primary/15 text-primary flex items-center justify-center font-bold font-title-md">
SW
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-semibold leading-tight">{{ __('home.testi1_author') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ __('home.testi1_role') }}</span>
</div>
</div>
</div>
<!-- Testi 2: Yogyakarta -->
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
“{{ __('home.testi2_quote') }}”
</p>
</div>
<div class="mt-space-lg flex items-center gap-space-sm pt-space-sm">
<div class="w-10 h-10 rounded-full bg-secondary/15 text-secondary flex items-center justify-center font-bold font-title-md">
HW
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-semibold leading-tight">{{ __('home.testi2_author') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ __('home.testi2_role') }}</span>
</div>
</div>
</div>
<!-- Testi 3: Semarang -->
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
“{{ __('home.testi3_quote') }}”
</p>
</div>
<div class="mt-space-lg flex items-center gap-space-sm pt-space-sm">
<div class="w-10 h-10 rounded-full bg-tertiary/15 text-tertiary flex items-center justify-center font-bold font-title-md">
DS
</div>
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface font-semibold leading-tight">{{ __('home.testi3_author') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ __('home.testi3_role') }}</span>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- CTA PESAN -->
<section class="w-full bg-surface-container-low py-space-3xl mb-0">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="relative overflow-hidden rounded-2xl bg-primary text-on-primary p-space-2xl lg:p-space-3xl shadow-[0_12px_32px_-6px_rgba(159,60,22,0.35)]">
<div class="absolute -right-16 -top-16 w-80 h-80 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
<div class="absolute -left-16 -bottom-16 w-80 h-80 rounded-full bg-black/10 blur-2xl pointer-events-none"></div>
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-space-xl">
<div class="flex flex-col items-start gap-space-xs max-w-2xl">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-primary-fixed font-bold bg-white/10 px-space-sm py-0.5 rounded-full">
{{ __('home.cta_badge') }}
</span>
<h2 class="font-headline-lg text-headline-lg font-bold text-white tracking-tight">
{{ __('home.cta_title') }}
</h2>
<p class="font-body-lg text-body-lg text-primary-fixed/90 max-w-xl">
{{ __('home.cta_desc') }}
</p>
</div>
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-sm">
<a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-lowest text-primary hover:bg-surface-container font-label-lg text-label-lg px-space-xl py-space-md rounded-xl transition-all shadow-md" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ rawurlencode(__('home.wa_greeting')) }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>{{ __('home.cta_button') }}</span>
</a>
</div>
</div>
</div>
</div>
</section>
</div>
@endsection
