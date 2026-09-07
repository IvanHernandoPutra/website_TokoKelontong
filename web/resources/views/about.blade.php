@extends('layouts.app')

@section('title', __('about.title'))

@section('content')
<div class="flex flex-col w-full">
<!-- Subtle Breadcrumb Bar -->
<section class="max-w-container-max mx-auto px-gutter-desktop w-full pt-space-md pb-space-xs">
  <div class="flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant">
    <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}">
      <span class="material-symbols-outlined text-[16px]">home</span> {{ __('common.home') }}
    </a>
    <span>/</span>
    <span class="text-primary font-semibold">{{ __('about.breadcrumb') }}</span>
  </div>
</section>

<!-- Section 1: Perjalanan & Cerita Toko (Story Hero) -->
<section class="max-w-container-max mx-auto px-gutter-desktop w-full pb-space-3xl pt-space-md">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-2xl items-center">
    <!-- Left Narrative Content -->
    <div class="lg:col-span-7 flex flex-col items-start">
      <div class="inline-flex items-center gap-space-2xs px-space-sm py-space-2xs bg-secondary-container text-on-secondary-container rounded-full font-label-sm uppercase tracking-wider font-bold mb-space-sm">
        <span class="material-symbols-outlined text-[16px]">storefront</span>
        <span>{!! __('about.badge_story') !!}</span>
      </div>
      <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight leading-tight mb-space-md">
        {{ __('about.h1') }}
      </h1>
      <p class="font-body-lg text-body-lg text-primary font-semibold mb-space-sm leading-relaxed">
        {{ __('about.intro') }}
      </p>
      <p class="font-body-md text-body-md text-on-surface-variant mb-space-md leading-relaxed">
        {{ __('about.p1') }}
      </p>
      <p class="font-body-md text-body-md text-on-surface-variant mb-space-lg leading-relaxed">
        {{ __('about.p2') }}
      </p>
      <!-- Mission Quote Banner -->
      <div class="w-full bg-surface-container-low rounded-xl p-space-lg flex items-start gap-space-md shadow-sm relative overflow-hidden">
        <div class="w-1.5 h-full absolute left-0 top-0 bottom-0 bg-primary"></div>
        <span class="material-symbols-outlined text-primary text-[36px] shrink-0 opacity-80">format_quote</span>
        <div class="flex flex-col">
          <p class="font-title-lg text-title-lg text-on-surface font-bold italic tracking-tight">
            {{ __('about.quote') }}
          </p>
          <span class="font-label-md text-label-md text-on-surface-variant mt-space-2xs">
            {{ __('about.quote_attribution') }}
          </span>
        </div>
      </div>
    </div>
    <!-- Right Visual Grid (Authentic Store & Product Display) -->
    <div class="lg:col-span-5 flex flex-col gap-space-md">
      <!-- Main Shop Visual -->
      <div class="relative rounded-xl overflow-hidden bg-surface-container shadow-md group">
        <img alt="Suasana Toko Kelontong Tradisional di Klaten" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/stitch_toko_klaten.jpg') }}"/>
        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-on-surface/90 via-on-surface/40 to-transparent p-space-md text-surface">
          <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary-fixed font-bold">{{ __('about.img_tradition_badge') }}</span>
          <p class="font-title-md text-title-md font-semibold text-surface">{{ __('about.img_tradition_text') }}</p>
        </div>
      </div>
      <!-- Packing & Shipping Showcase Card -->
      <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md">
        <img alt="Standardisasi Pengepakan Toko Kelontong" class="w-24 h-24 rounded-lg object-cover shrink-0" src="{{ asset('images/stitch_packaging_box.jpg') }}"/>
        <div class="flex flex-col">
          <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider flex items-center gap-1">
            <span class="material-symbols-outlined text-[14px]">package_2</span> {!! __('about.pack_badge') !!}
          </span>
          <h4 class="font-title-md text-title-md text-on-surface font-semibold mt-0.5">{{ __('about.pack_title') }}</h4>
          <p class="font-body-sm text-body-sm text-on-surface-variant leading-snug mt-1">
            {{ __('about.pack_desc') }}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Legalitas Resmi (Kredibilitas Bisnis) -->
<section class="w-full bg-surface-container-low py-space-2xl">
  <div class="max-w-container-max mx-auto px-gutter-desktop">
    <div class="bg-surface-container-lowest rounded-xl p-space-lg md:p-space-xl shadow-md">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
        <div class="lg:col-span-5 flex flex-col items-start">
          <div class="inline-flex items-center gap-1 text-secondary font-label-sm uppercase tracking-wider font-bold mb-space-2xs">
            <span class="material-symbols-outlined text-[18px]">verified_user</span> {!! __('about.legal_eyebrow') !!}
          </div>
          <h3 class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">
            {{ __('about.legal_title') }}
          </h3>
          <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs leading-relaxed">
            {{ __('about.legal_desc') }}
          </p>
        </div>
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-space-md">
          <!-- Entitas Bisnis -->
          <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col justify-between">
            <div>
              <span class="material-symbols-outlined text-primary text-[24px] mb-space-xs">corporate_fare</span>
              <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-bold">{{ __('about.legal_entity_label') }}</span>
              <p class="font-title-md text-title-md text-on-surface font-bold mt-1">{{ __('about.legal_entity_value') }}</p>
            </div>
            <span class="font-label-sm text-label-sm text-secondary font-semibold mt-space-sm flex items-center gap-1">
              <span class="material-symbols-outlined text-[14px]">check_circle</span> {{ __('about.legal_entity_status') }}
            </span>
          </div>
          <!-- NPWP Terdaftar -->
          <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col justify-between">
            <div>
              <span class="material-symbols-outlined text-primary text-[24px] mb-space-xs">badge</span>
              <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-bold">{{ __('about.legal_npwp_label') }}</span>
              <p class="font-title-md text-title-md text-on-surface font-bold mt-1 tracking-tight">41.890.342.1-525.000</p>
            </div>
            <span class="font-label-sm text-label-sm text-secondary font-semibold mt-space-sm flex items-center gap-1">
              <span class="material-symbols-outlined text-[14px]">check_circle</span> {!! __('about.legal_npwp_status') !!}
            </span>
          </div>
          <!-- Domisili Resmi -->
          <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col justify-between">
            <div>
              <span class="material-symbols-outlined text-primary text-[24px] mb-space-xs">location_city</span>
              <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-bold">{{ __('about.legal_address_label') }}</span>
              <p class="font-body-sm text-body-sm text-on-surface font-medium mt-1 leading-snug">
                {{ __('about.legal_address_value') }}
              </p>
            </div>
            <span class="font-label-sm text-label-sm text-secondary font-semibold mt-space-sm flex items-center gap-1">
              <span class="material-symbols-outlined text-[14px]">check_circle</span> {{ __('about.legal_address_status') }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 3: Nilai-Nilai Perusahaan (3 Pilar) -->
<section class="max-w-container-max mx-auto px-gutter-desktop w-full py-space-3xl">
  <div class="flex flex-col items-center text-center max-w-2xl mx-auto mb-space-2xl">
    <div class="inline-flex items-center gap-space-2xs px-space-sm py-space-2xs bg-surface-container rounded-full text-secondary font-label-sm uppercase tracking-wider mb-space-xs">
      <span class="material-symbols-outlined text-[16px]">stars</span>
      <span>{{ __('about.values_eyebrow') }}</span>
    </div>
    <h3 class="font-headline-lg text-headline-lg text-on-surface font-semibold">
      {{ __('about.values_title') }}
    </h3>
    <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
      {{ __('about.values_desc') }}
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
    <!-- Nilai 1: Kualitas Produk -->
    <div class="bg-surface-container-lowest rounded-2xl p-space-xl shadow-sm hover:shadow-2xl hover:-translate-y-2.5 transition-all duration-300 ease-out flex flex-col items-start relative overflow-hidden group border border-outline-variant/20 hover:border-secondary/30 cursor-default">
      <!-- Top Accent Bar -->
      <div class="absolute top-0 inset-x-0 h-1 bg-secondary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
      <!-- Ambient Glow Bloom -->
      <div class="absolute -right-8 -top-8 w-28 h-28 bg-secondary/15 rounded-full blur-xl group-hover:scale-150 transition-all duration-500 pointer-events-none opacity-0 group-hover:opacity-100"></div>

      <div class="w-14 h-14 rounded-2xl bg-secondary-container text-on-secondary-container flex items-center justify-center mb-space-md group-hover:scale-110 group-hover:rotate-6 group-hover:bg-secondary group-hover:text-on-secondary group-hover:shadow-md transition-all duration-300">
        <span class="material-symbols-outlined text-[32px]">workspace_premium</span>
      </div>
      <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1">{{ __('about.pillar1_no') }}</span>
      <h4 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary font-semibold mb-space-xs transition-colors duration-200">
        {{ __('about.pillar1_title') }}
      </h4>
      <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
        {{ __('about.pillar1_desc') }}
      </p>
      <div class="mt-space-md pt-space-sm w-full flex items-center gap-space-xs text-secondary font-label-md text-label-md font-semibold group-hover:translate-x-1.5 transition-transform duration-200">
        <span class="material-symbols-outlined text-[18px]">verified</span> {{ __('about.pillar1_foot') }}
      </div>
    </div>
    <!-- Nilai 2: Harga Wajar & Transparan -->
    <div class="bg-surface-container-lowest rounded-2xl p-space-xl shadow-sm hover:shadow-2xl hover:-translate-y-2.5 transition-all duration-300 ease-out flex flex-col items-start relative overflow-hidden group border border-outline-variant/20 hover:border-tertiary/30 cursor-default">
      <!-- Top Accent Bar -->
      <div class="absolute top-0 inset-x-0 h-1 bg-tertiary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
      <!-- Ambient Glow Bloom -->
      <div class="absolute -right-8 -top-8 w-28 h-28 bg-tertiary/15 rounded-full blur-xl group-hover:scale-150 transition-all duration-500 pointer-events-none opacity-0 group-hover:opacity-100"></div>

      <div class="w-14 h-14 rounded-2xl bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center mb-space-md group-hover:scale-110 group-hover:-rotate-6 group-hover:bg-tertiary group-hover:text-on-tertiary group-hover:shadow-md transition-all duration-300">
        <span class="material-symbols-outlined text-[32px]">handshake</span>
      </div>
      <span class="font-label-sm text-label-sm text-tertiary font-bold uppercase tracking-wider mb-1">{{ __('about.pillar2_no') }}</span>
      <h4 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-tertiary font-semibold mb-space-xs transition-colors duration-200">
        {!! __('about.pillar2_title') !!}
      </h4>
      <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
        {!! __('about.pillar2_desc') !!}
      </p>
      <div class="mt-space-md pt-space-sm w-full flex items-center gap-space-xs text-tertiary font-label-md text-label-md font-semibold group-hover:translate-x-1.5 transition-transform duration-200">
        <span class="material-symbols-outlined text-[18px]">payments</span> {!! __('about.pillar2_foot') !!}
      </div>
    </div>
    <!-- Nilai 3: Pelayanan Ramah & Personal -->
    <div class="bg-surface-container-lowest rounded-2xl p-space-xl shadow-sm hover:shadow-2xl hover:-translate-y-2.5 transition-all duration-300 ease-out flex flex-col items-start relative overflow-hidden group border border-outline-variant/20 hover:border-primary/30 cursor-default">
      <!-- Top Accent Bar -->
      <div class="absolute top-0 inset-x-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
      <!-- Ambient Glow Bloom -->
      <div class="absolute -right-8 -top-8 w-28 h-28 bg-primary/15 rounded-full blur-xl group-hover:scale-150 transition-all duration-500 pointer-events-none opacity-0 group-hover:opacity-100"></div>

      <div class="w-14 h-14 rounded-2xl bg-primary-fixed text-on-primary-fixed flex items-center justify-center mb-space-md group-hover:scale-110 group-hover:rotate-6 group-hover:bg-primary group-hover:text-on-primary group-hover:shadow-md transition-all duration-300">
        <span class="material-symbols-outlined text-[32px]">sentiment_satisfied</span>
      </div>
      <span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider mb-1">{{ __('about.pillar3_no') }}</span>
      <h4 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary font-semibold mb-space-xs transition-colors duration-200">
        {{ __('about.pillar3_title') }}
      </h4>
      <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
        {{ __('about.pillar3_desc') }}
      </p>
      <div class="mt-space-md pt-space-sm w-full flex items-center gap-space-xs text-primary font-label-md text-label-md font-semibold group-hover:translate-x-1.5 transition-transform duration-200">
        <span class="material-symbols-outlined text-[18px]">chat</span> {{ __('about.pillar3_foot') }}
      </div>
    </div>
  </div>
</section>

<!-- Section 4: Toko Kami (Outlet Fisik Klaten & Modular Branch Structure) -->
<section class="w-full bg-surface-container py-space-3xl" id="toko-kami">
  <div class="max-w-container-max mx-auto px-gutter-desktop">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-2xl gap-space-md">
      <div>
        <div class="inline-flex items-center gap-1 text-secondary font-label-sm uppercase tracking-wider font-bold mb-space-2xs">
          <span class="material-symbols-outlined text-[16px]">pin_drop</span> {{ __('stores.eyebrow') }}
        </div>
        <h3 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">
          {{ __('stores.h1') }}
        </h3>
        <p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-xl">
          {{ __('stores.desc') }}
        </p>
      </div>
      <div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md bg-surface-container-high px-space-md py-space-xs rounded-lg self-start md:self-auto">
        <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
        <span>{{ __('stores.status') }}</span>
      </div>
    </div>
    <!-- Outlet Modular Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
      <!-- Outlet 1: Klaten Pusat (Main Featured Card) -->
      <div class="lg:col-span-8 bg-surface-container-lowest rounded-xl shadow-md overflow-hidden flex flex-col md:flex-row">
        <!-- Outlet Image with Badge -->
        <div class="md:w-5/12 relative bg-surface-container shrink-0 min-h-[260px] md:min-h-full">
          <img alt="Toko Kelontong Pusat Klaten" class="w-full h-full object-cover absolute inset-0" src="{{ asset('images/stitch_outlet_fisik.jpg') }}"/>
          <div class="absolute top-space-sm left-space-sm bg-primary text-on-primary px-space-sm py-space-2xs rounded-lg font-label-sm uppercase tracking-wider font-bold shadow-sm">
            {!! __('stores.main_badge') !!}
          </div>
        </div>
        <!-- Outlet Details Body -->
        <div class="p-space-lg md:p-space-xl md:w-7/12 flex flex-col justify-between">
          <div>
            <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">
              {{ __('stores.main_title') }}
            </h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
              {{ __('stores.main_desc') }}
            </p>
            <!-- Operational Metadata List -->
            <div class="mt-space-md flex flex-col gap-space-sm">
              <!-- Location -->
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center shrink-0 mt-0.5 text-primary">
                  <span class="material-symbols-outlined text-[20px]">location_on</span>
                </div>
                <div>
                  <span class="font-label-sm text-label-sm text-on-surface-variant block font-bold uppercase tracking-wider">{{ __('stores.location_label') }}</span>
                  <span class="font-body-md text-body-md text-on-surface font-medium leading-snug">
                    {{ __('stores.location_value') }}
                  </span>
                </div>
              </div>
              <!-- Operating Hours -->
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center shrink-0 mt-0.5 text-secondary">
                  <span class="material-symbols-outlined text-[20px]">schedule</span>
                </div>
                <div>
                  <span class="font-label-sm text-label-sm text-on-surface-variant block font-bold uppercase tracking-wider">{{ __('stores.hours_label') }}</span>
                  <span class="font-body-md text-body-md text-on-surface font-medium">
                    {{ __('stores.hours_value') }}
                  </span>
                  <span class="font-body-sm text-body-sm text-on-surface-variant block">{!! __('stores.hours_note') !!}</span>
                </div>
              </div>
              <!-- Store Contact Person -->
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center shrink-0 mt-0.5 text-tertiary">
                  <span class="material-symbols-outlined text-[20px]">contact_phone</span>
                </div>
                <div>
                  <span class="font-label-sm text-label-sm text-on-surface-variant block font-bold uppercase tracking-wider">{{ __('stores.contact_label') }}</span>
                  <div class="flex flex-wrap gap-x-space-md gap-y-space-2xs mt-1 font-body-sm text-body-sm text-on-surface">
                    <a class="hover:text-primary transition-colors flex items-center gap-1 font-semibold" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode(__('stores.wa_budi')) }}" target="_blank" rel="noopener noreferrer">
                      <span class="material-symbols-outlined text-[15px] text-secondary">chat</span> Pak Budi
                    </a>
                    <span class="text-surface-dim">·</span>
                    <a class="hover:text-primary transition-colors flex items-center gap-1 font-semibold" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode(__('stores.wa_ivan')) }}" target="_blank" rel="noopener noreferrer">
                      <span class="material-symbols-outlined text-[15px] text-secondary">chat</span> Ivan
                    </a>
                    <span class="text-surface-dim">·</span>
                    <a class="hover:text-primary transition-colors flex items-center gap-1 font-semibold" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode(__('stores.wa_tesa')) }}" target="_blank" rel="noopener noreferrer">
                      <span class="material-symbols-outlined text-[15px] text-secondary">chat</span> Bu Tesa
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Action Buttons -->
          <div class="mt-space-lg pt-space-md flex flex-col sm:flex-row gap-space-sm items-center">
            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary px-space-md py-space-sm rounded-lg font-label-lg text-label-lg transition-colors shadow-sm" href="https://maps.google.com/?q=Trucuk+Klaten+Jawa+Tengah" rel="noopener noreferrer" target="_blank">
              <span class="material-symbols-outlined text-[18px]">map</span>
              {{ __('stores.maps_btn') }}
            </a>
            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface px-space-md py-space-sm rounded-lg font-label-lg text-label-lg transition-colors" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode(__('stores.wa_visit')) }}" rel="noopener noreferrer" target="_blank">
              <span class="material-symbols-outlined text-[18px] text-secondary">support_agent</span>
              {{ __('stores.stock_btn') }}
            </a>
          </div>
        </div>
      </div>
      <!-- Right Side: Store Map Card & Upcoming Branch Slot -->
      <div class="lg:col-span-4 flex flex-col gap-space-md">
        <!-- Google Maps Static View Target -->
        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-md flex flex-col">
          <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider mb-2 flex items-center gap-1">
            <span class="material-symbols-outlined text-[16px]">explore</span> {{ __('stores.nav_title') }}
          </span>
          <div class="w-full h-44 rounded-lg bg-cover bg-center shadow-inner relative flex items-center justify-center overflow-hidden" style="background-image: url('{{ asset('images/stitch_map_klaten.jpg') }}')">
            <div class="bg-surface/90 backdrop-blur-sm px-space-sm py-space-2xs rounded-full shadow flex items-center gap-1 text-on-surface font-label-sm text-label-sm">
              <span class="material-symbols-outlined text-primary text-[16px]">location_on</span> {{ __('stores.map_label') }}
            </div>
          </div>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
            {{ __('stores.map_desc') }}
          </p>
        </div>
        <!-- Upcoming Branch Expansion Placeholder -->
        <div class="bg-surface-container-low p-space-md rounded-xl flex items-start gap-space-sm">
          <div class="w-10 h-10 rounded-lg bg-secondary/10 text-secondary flex items-center justify-center shrink-0 mt-0.5">
            <span class="material-symbols-outlined text-[22px]">add_business</span>
          </div>
          <div>
            <span class="font-title-md text-title-md text-on-surface font-semibold block">{{ __('stores.expansion_title') }}</span>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5 leading-snug">
              {{ __('stores.expansion_desc') }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 5: Hubungi Kami & CTA Banner -->
<section class="max-w-container-max mx-auto px-gutter-desktop w-full py-space-3xl">
  <div class="bg-surface-container-lowest rounded-xl p-space-xl md:p-space-2xl shadow-lg relative overflow-hidden">
    <!-- Background Tone Accent -->
    <div class="absolute -right-16 -top-16 w-80 h-80 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -left-16 -bottom-16 w-80 h-80 bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
      <!-- CTA Text Content -->
      <div class="lg:col-span-8 flex flex-col items-start">
        <div class="inline-flex items-center gap-space-2xs px-space-sm py-space-2xs bg-primary-fixed text-on-primary-fixed rounded-full font-label-sm uppercase tracking-wider font-bold mb-space-sm">
          <span class="material-symbols-outlined text-[15px]">sentiment_very_satisfied</span>
          <span>{{ __('about.cta_badge') }}</span>
        </div>
        <h3 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight leading-tight mb-space-xs">
          {{ __('about.cta_title') }}
        </h3>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
          {{ __('about.cta_desc') }}
        </p>
      </div>
      <!-- CTA Action Buttons -->
      <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-space-sm w-full">
        <a class="w-full inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary py-space-sm px-space-lg rounded-xl font-label-lg text-label-lg transition-all shadow-md text-center" href="{{ route('products') }}">
          <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
          {{ __('about.cta_catalog') }}
        </a>
        <a class="w-full inline-flex items-center justify-center gap-space-xs bg-secondary hover:bg-on-secondary-container text-on-secondary py-space-sm px-space-lg rounded-xl font-label-lg text-label-lg transition-all shadow-sm text-center" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode(__('about.wa_consult')) }}" rel="noopener noreferrer" target="_blank">
          <span class="material-symbols-outlined text-[20px]">chat</span>
          {{ __('about.cta_wa') }}
        </a>
        <a class="w-full inline-flex items-center justify-center gap-space-2xs text-on-surface-variant hover:text-primary font-label-md text-label-md transition-colors py-1 text-center" href="{{ route('contact') }}">
          {{ __('about.cta_contact') }} <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
        </a>
      </div>
    </div>
  </div>
</section>
</div>
@endsection
