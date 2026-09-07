@extends('layouts.app')

@section('title', __('contact.title'))

@section('content')
<div class="flex flex-col w-full">
<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
<nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}"><span class="material-symbols-outlined text-[16px]">home</span> {{ __('common.home') }}</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">{{ __('contact.breadcrumb') }}</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">{{ __('contact.h1') }}</h1>
</div>
</section>
<section class="w-full py-space-3xl bg-surface">
<div class="max-w-container-max mx-auto px-gutter-desktop grid grid-cols-1 lg:grid-cols-2 gap-space-2xl">
<div class="flex flex-col gap-space-md">
<h2 class="font-headline-md text-headline-md text-on-surface">{{ __('contact.info_title') }}</h2>
<div class="flex flex-col gap-space-sm">
@if(config('toko.registered_address'))
<span class="flex items-start gap-space-sm font-body-md text-body-md text-on-surface-variant"><span class="material-symbols-outlined text-primary">home_work</span> {{ __('contact.registered_address') }}: {{ config('toko.registered_address') }}</span>
@endif
<span class="flex items-start gap-space-sm font-body-md text-body-md text-on-surface-variant"><span class="material-symbols-outlined text-primary">store</span> {{ __('contact.store') }}</span>
<a class="flex items-center gap-space-sm font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="https://wa.me/{{ config('toko.wa_number') }}"><span class="material-symbols-outlined text-primary">chat</span> {{ __('contact.whatsapp') }}: +{{ config('toko.wa_number') }}</a>
<a class="flex items-center gap-space-sm font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="mailto:{{ config('toko.email') }}"><span class="material-symbols-outlined text-primary">mail</span> {{ config('toko.email') }}</a>
<span class="flex items-center gap-space-sm font-body-md text-body-md text-on-surface-variant"><span class="material-symbols-outlined text-primary">schedule</span> {{ __('contact.hours') }}</span>
</div>
<a class="inline-flex items-center justify-center gap-space-xs bg-secondary hover:bg-on-secondary-container text-on-secondary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(68,103,68,0.3)] self-start" href="https://wa.me/{{ config('toko.wa_number') }}" rel="noopener" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span> {{ __('common.whatsapp_now') }}
</a>
</div>
<div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-xl">
<h2 class="font-headline-md text-headline-md text-on-surface mb-space-md">{{ __('contact.form_title') }}</h2>
@if (session('success'))
<div class="mb-space-md p-space-md bg-secondary-container text-on-secondary-container rounded-lg font-body-md text-body-md">{{ session('success') }}</div>
@endif
<form method="POST" action="{{ route('contact.store') }}" class="flex flex-col gap-space-md">
@csrf
<div>
<label class="font-label-md text-label-md text-on-surface block mb-space-2xs">{{ __('contact.name') }}</label>
<input name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 bg-surface border border-surface-container rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary font-body-md" placeholder="{{ __('contact.name_placeholder') }}"/>
@error('name')<span class="text-error font-body-sm">{{ $message }}</span>@enderror
</div>
<div>
<label class="font-label-md text-label-md text-on-surface block mb-space-2xs">{{ __('contact.email') }}</label>
<input name="email" type="email" value="{{ old('email') }}" required class="w-full px-4 py-3 bg-surface border border-surface-container rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary font-body-md" placeholder="{{ __('contact.email_placeholder') }}"/>
@error('email')<span class="text-error font-body-sm">{{ $message }}</span>@enderror
</div>
<div>
<label class="font-label-md text-label-md text-on-surface block mb-space-2xs">{{ __('contact.city') }}</label>
<input name="country" value="{{ old('country') }}" class="w-full px-4 py-3 bg-surface border border-surface-container rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary font-body-md" placeholder="{{ __('contact.city_placeholder') }}"/>
</div>
<div>
<label class="font-label-md text-label-md text-on-surface block mb-space-2xs">{{ __('contact.message') }}</label>
<textarea name="message" rows="4" required class="w-full px-4 py-3 bg-surface border border-surface-container rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary font-body-md" placeholder="{{ __('contact.message_placeholder') }}">{{ old('message') }}</textarea>
@error('message')<span class="text-error font-body-sm">{{ $message }}</span>@enderror
</div>
<button type="submit" class="inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary px-space-xl py-space-md rounded-xl font-label-lg text-label-lg transition-all shadow-[0_4px_16px_-4px_rgba(159,60,22,0.35)]">
<span class="material-symbols-outlined text-[20px]">send</span> {{ __('contact.submit') }}
</button>
</form>
</div>
</div>
</section>
</div>
@endsection
