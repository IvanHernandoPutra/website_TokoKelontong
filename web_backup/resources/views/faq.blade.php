@extends('layouts.app')

@section('title', __('faq.title'))

@section('content')
<div class="flex flex-col w-full">
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> {{ __('common.home') }}</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">{{ __('faq.breadcrumb') }}</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">{{ __('faq.h1') }}</h1>
</div>
</section>
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-3xl mx-auto px-gutter-desktop flex flex-col gap-space-sm">
@foreach (range(1, 7) as $i)
@php [$q, $a] = [__("faq.q{$i}"), __("faq.a{$i}")]; @endphp
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
