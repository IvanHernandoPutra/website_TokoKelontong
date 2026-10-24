@extends('layouts.app')

@section('title', __('shipping.title'))

@section('content')
<div class="flex flex-col w-full">
<!-- Top Banner / Headline Overview -->
<section class="w-full bg-surface-container-low py-space-3xl px-gutter-desktop">
  <div class="max-w-container-max mx-auto flex flex-col md:flex-row items-center justify-between gap-space-2xl">
    <div class="max-w-2xl flex flex-col items-start gap-space-sm">
      <div class="inline-flex items-center gap-space-2xs px-space-sm py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm uppercase tracking-wider font-bold">
        <span class="material-symbols-outlined text-[15px]">shopping_cart</span>
        {{ __('shipping.hero_badge') }}
      </div>
      <h1 class="font-display text-display text-on-surface tracking-tight leading-tight">
        {{ __('shipping.hero_title') }}
      </h1>
      <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
        {{ __('shipping.hero_desc') }}
      </p>
      <div class="flex flex-wrap items-center gap-space-md pt-space-xs font-label-md text-label-md text-on-surface-variant">
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-secondary text-[18px]">verified</span> {{ __('shipping.hero_chip1') }}</span>
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> {{ __('shipping.hero_chip2') }}</span>
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-tertiary text-[18px]">security</span> {!! __('shipping.hero_chip3') !!}</span>
      </div>
    </div>
    <!-- Quick Metrics Decorative Visual -->
    <div class="w-full md:w-auto shrink-0">
      <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-md flex flex-col gap-space-md min-w-[280px]">
        <div class="flex items-center justify-between gap-space-md pb-space-xs">
          <span class="font-title-md text-title-md text-on-surface font-semibold">{{ __('shipping.metric_title') }}</span>
          <span class="material-symbols-outlined text-secondary text-[24px]">verified_user</span>
        </div>
        <div class="grid grid-cols-2 gap-space-md">
          <div class="flex flex-col bg-surface-container-low p-space-sm rounded-lg">
            <span class="font-display-mobile text-display-mobile text-primary font-bold">1–2</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">{{ __('shipping.metric1_label') }}</span>
          </div>
          <div class="flex flex-col bg-surface-container-low p-space-sm rounded-lg">
            <span class="font-display-mobile text-display-mobile text-secondary font-bold">08–20</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">{{ __('shipping.metric2_label') }}</span>
          </div>
        </div>
        <div class="flex items-center gap-space-xs pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
          <span class="material-symbols-outlined text-[16px] text-primary">storefront</span>
          <span>{!! __('shipping.metric_foot') !!}</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: 3 Langkah Mudah -->
<section class="w-full py-space-4xl px-gutter-desktop bg-surface">
  <div class="max-w-container-max mx-auto flex flex-col gap-space-2xl">
    <div class="flex flex-col items-center text-center max-w-2xl mx-auto gap-space-2xs">
      <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">{{ __('shipping.steps_eyebrow') }}</span>
      <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">{{ __('shipping.steps_title') }}</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">
        {{ __('shipping.steps_desc') }}
      </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-xl">
      <!-- Langkah 1 -->
      <div class="flex flex-col bg-surface-container-lowest rounded-xl p-space-xl shadow-md">
        <div class="flex items-center justify-between pb-space-md">
          <div class="w-12 h-12 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center">
            <span class="material-symbols-outlined text-[26px]">storefront</span>
          </div>
          <span class="font-display-mobile text-display-mobile text-surface-container-highest font-bold">01</span>
        </div>
        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">{{ __('shipping.step1_title') }}</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-space-2xs">
          {{ __('shipping.step1_desc') }}
        </p>
      </div>
      <!-- Langkah 2 -->
      <div class="flex flex-col bg-surface-container-lowest rounded-xl p-space-xl shadow-md">
        <div class="flex items-center justify-between pb-space-md">
          <div class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center">
            <span class="material-symbols-outlined text-[26px]">chat</span>
          </div>
          <span class="font-display-mobile text-display-mobile text-surface-container-highest font-bold">02</span>
        </div>
        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">{{ __('shipping.step2_title') }}</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-space-2xs">
          {{ __('shipping.step2_desc') }}
        </p>
      </div>
      <!-- Langkah 3 -->
      <div class="flex flex-col bg-surface-container-lowest rounded-xl p-space-xl shadow-md">
        <div class="flex items-center justify-between pb-space-md">
          <div class="w-12 h-12 rounded-xl bg-tertiary-container text-on-tertiary-container flex items-center justify-center">
            <span class="material-symbols-outlined text-[26px]">payments</span>
          </div>
          <span class="font-display-mobile text-display-mobile text-surface-container-highest font-bold">03</span>
        </div>
        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">{!! __('shipping.step3_title') !!}</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-space-2xs">
          {{ __('shipping.step3_desc') }}
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section: Dua Cara Berbelanja -->
<section class="w-full py-space-4xl px-gutter-desktop bg-surface-container-low">
  <div class="max-w-container-max mx-auto flex flex-col gap-space-2xl">
    <div class="flex flex-col items-center text-center max-w-2xl mx-auto gap-space-2xs">
      <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">{{ __('shipping.ways_eyebrow') }}</span>
      <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">{{ __('shipping.ways_title') }}</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">
        {{ __('shipping.ways_desc') }}
      </p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-space-xl">
      <!-- Cara 1: Pesan Online -->
      <div class="flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-xl shadow-md transition-all hover:shadow-xl">
        <div class="flex flex-col gap-space-md">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-space-sm">
              <div class="w-11 h-11 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center">
                <span class="material-symbols-outlined text-[24px]">smartphone</span>
              </div>
              <div class="flex flex-col">
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">{{ __('shipping.way1_title') }}</h3>
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">{{ __('shipping.way1_sub') }}</span>
              </div>
            </div>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            {{ __('shipping.way1_desc') }}
          </p>
          <div class="flex flex-col gap-space-sm bg-surface-container-low p-space-md rounded-lg">
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-secondary text-[18px]">schedule</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{{ __('shipping.way1_p1_title') }}</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('shipping.way1_p1_desc') }}</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-primary text-[18px]">sell</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{!! __('shipping.way1_p2_title') !!}</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('shipping.way1_p2_desc') }}</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-tertiary text-[18px]">help</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{{ __('shipping.way1_p3_title') }}</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('shipping.way1_p3_desc') }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-space-lg pt-space-md flex items-center justify-between">
          <span class="font-label-md text-label-md text-on-surface-variant font-medium">{!! __('shipping.way1_foot') !!}</span>
          <a class="inline-flex items-center gap-space-2xs text-secondary font-title-md hover:text-on-secondary-fixed-variant transition-colors" href="#form-pesan">
            {{ __('shipping.way1_link') }} <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
          </a>
        </div>
      </div>
      <!-- Cara 2: Belanja Langsung -->
      <div class="flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-xl shadow-md transition-all hover:shadow-xl relative overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full blur-2xl pointer-events-none"></div>
        <div class="flex flex-col gap-space-md">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-space-sm">
              <div class="w-11 h-11 rounded-xl bg-primary-container text-on-primary-container flex items-center justify-center">
                <span class="material-symbols-outlined text-[24px]">storefront</span>
              </div>
              <div class="flex flex-col">
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">{{ __('shipping.way2_title') }}</h3>
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">{{ __('shipping.way2_sub') }}</span>
              </div>
            </div>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            {{ __('shipping.way2_desc') }}
          </p>
          <div class="flex flex-col gap-space-sm bg-surface-container-low p-space-md rounded-lg">
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-secondary text-[18px]">location_on</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{{ __('shipping.way2_p1_title') }}</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('shipping.way2_p1_desc') }}</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{{ __('shipping.way2_p2_title') }}</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('shipping.way2_p2_desc') }}</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-tertiary text-[18px]">payments</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">{{ __('shipping.way2_p3_title') }}</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">{{ __('shipping.way2_p3_desc') }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-space-lg pt-space-md flex items-center justify-between">
          <span class="font-label-md text-label-md text-on-surface-variant font-medium">{{ __('shipping.way2_foot') }}</span>
          <a class="inline-flex items-center gap-space-2xs text-secondary font-title-md hover:text-on-secondary-fixed-variant transition-colors" href="{{ route('stores') }}">
            {{ __('shipping.way2_link') }} <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Form Pesanan Simpel -->
<section id="form-pesan" class="w-full py-space-4xl px-gutter-desktop bg-surface scroll-mt-24">
  <div class="max-w-container-max mx-auto flex flex-col gap-space-2xl">
    <div class="flex flex-col items-center text-center max-w-2xl mx-auto gap-space-2xs">
      <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">{{ __('shipping.form_eyebrow') }}</span>
      <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">{{ __('shipping.form_title') }}</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">
        {{ __('shipping.form_desc') }}
      </p>
    </div>
    <div class="max-w-2xl mx-auto w-full">
      <div class="bg-surface-container-lowest rounded-xl p-space-xl shadow-md flex flex-col gap-space-md">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
          <div class="flex flex-col gap-space-2xs">
            <label for="nama" class="font-label-md text-label-md text-on-surface font-bold">{{ __('shipping.form_name') }}</label>
            <input type="text" id="nama" placeholder="{{ __('shipping.form_name_placeholder') }}" class="w-full bg-surface-container-low rounded-lg px-space-md py-space-sm font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary" />
          </div>
          <div class="flex flex-col gap-space-2xs">
            <label for="kategori" class="font-label-md text-label-md text-on-surface font-bold">{{ __('shipping.form_category') }}</label>
            <select id="kategori" class="w-full bg-surface-container-low rounded-lg px-space-md py-space-sm font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary">
              <option value="">{{ __('shipping.form_category_placeholder') }}</option>
              <option value="{{ __('shipping.form_cat1') }}">{{ __('shipping.form_cat1') }}</option>
              <option value="{{ __('shipping.form_cat2') }}">{{ __('shipping.form_cat2') }}</option>
              <option value="{{ __('shipping.form_cat3') }}">{{ __('shipping.form_cat3') }}</option>
              <option value="{{ __('shipping.form_cat4') }}">{{ __('shipping.form_cat4') }}</option>
              <option value="{{ __('shipping.form_cat5') }}">{{ __('shipping.form_cat5') }}</option>
            </select>
          </div>
        </div>
        <div class="flex flex-col gap-space-2xs">
          <span class="font-label-md text-label-md text-on-surface font-bold">{{ __('shipping.form_scale') }}</span>
          <div class="grid grid-cols-3 gap-space-sm">
            <label class="flex items-center justify-center gap-space-2xs bg-surface-container-low rounded-lg px-space-sm py-space-sm font-body-md text-body-md text-on-surface cursor-pointer has-[:checked]:bg-secondary-container has-[:checked]:text-on-secondary-container transition-colors">
              <input type="radio" name="skala" value="{{ __('shipping.form_scale_retail') }}" class="accent-primary" checked /> {{ __('shipping.form_scale_retail') }}
            </label>
            <label class="flex items-center justify-center gap-space-2xs bg-surface-container-low rounded-lg px-space-sm py-space-sm font-body-md text-body-md text-on-surface cursor-pointer has-[:checked]:bg-secondary-container has-[:checked]:text-on-secondary-container transition-colors">
              <input type="radio" name="skala" value="{{ __('shipping.form_scale_medium') }}" class="accent-primary" /> {{ __('shipping.form_scale_medium') }}
            </label>
            <label class="flex items-center justify-center gap-space-2xs bg-surface-container-low rounded-lg px-space-sm py-space-sm font-body-md text-body-md text-on-surface cursor-pointer has-[:checked]:bg-secondary-container has-[:checked]:text-on-secondary-container transition-colors">
              <input type="radio" name="skala" value="{{ __('shipping.form_scale_wholesale') }}" class="accent-primary" /> {{ __('shipping.form_scale_wholesale') }}
            </label>
          </div>
        </div>
        <div class="flex flex-col gap-space-2xs">
          <label for="catatan" class="font-label-md text-label-md text-on-surface font-bold">{{ __('shipping.form_notes') }}</label>
          <textarea id="catatan" rows="3" placeholder="{{ __('shipping.form_notes_placeholder') }}" class="w-full bg-surface-container-low rounded-lg px-space-md py-space-sm font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary resize-none"></textarea>
        </div>
        <button type="button" onclick="kirimPesan()" class="inline-flex items-center justify-center gap-space-2xs bg-secondary hover:bg-on-secondary-container text-on-secondary font-title-md px-space-lg py-space-md rounded-xl shadow-md transition-all text-center">
          <span class="material-symbols-outlined text-[20px]">chat</span>
          {{ __('shipping.form_submit') }}
        </button>
        <p id="hasil-catatan" class="font-body-sm text-body-sm text-on-surface-variant text-center hidden">
          {{ __('shipping.form_success') }}
        </p>
      </div>
    </div>
  </div>
</section>
</div>

<script>
  function kirimPesan() {
    const i18n = @json(__('shipping.js_labels'));
    const nama = document.getElementById('nama').value.trim();
    const kategori = document.getElementById('kategori').value;
    const skala = document.querySelector('input[name="skala"]:checked')?.value || '';
    const catatan = document.getElementById('catatan').value.trim();
    const waNumber = '{{ config('toko.wa_number') }}';

    let msg = i18n.greeting;
    if (nama) msg += `\n${i18n.name}: ${nama}`;
    if (kategori) msg += `\n${i18n.category}: ${kategori}`;
    if (skala) msg += `\n${i18n.scale}: ${skala}`;
    if (catatan) msg += `\n${i18n.notes}: ${catatan}`;

    window.open(`https://wa.me/${waNumber}?text=${encodeURIComponent(msg)}`, '_blank', 'noopener');
    document.getElementById('hasil-catatan').classList.remove('hidden');
  }
</script>
@endsection
