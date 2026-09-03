@extends('layouts.app')

@section('title', 'Pengiriman & Pemesanan — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<!-- Top Banner / Headline Overview -->
<section class="w-full bg-surface-container-low py-space-3xl px-gutter-desktop">
  <div class="max-w-container-max mx-auto flex flex-col md:flex-row items-center justify-between gap-space-2xl">
    <div class="max-w-2xl flex flex-col items-start gap-space-sm">
      <div class="inline-flex items-center gap-space-2xs px-space-sm py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm uppercase tracking-wider font-bold">
        <span class="material-symbols-outlined text-[15px]">local_shipping</span>
        Jaminan Keamanan Kirim Nusantara &amp; Mancanegara
      </div>
      <h1 class="font-display text-display text-on-surface tracking-tight leading-tight">
        Pengiriman &amp; Pemesanan
      </h1>
      <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
        Panduan lengkap dan transparan memesan panganan otentik nusantara. Mulai dari kiriman harian domestik antarkota hingga distribusi ekspres ke seluruh penjuru dunia dengan standar kemasan ekspor terverifikasi.
      </p>
      <div class="flex flex-wrap items-center gap-space-md pt-space-xs font-label-md text-label-md text-on-surface-variant">
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-secondary text-[18px]">verified</span> Legalitas Ekspor CV. Bertiga Tradexa</span>
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Tanpa Biaya Tersembunyi</span>
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-tertiary text-[18px]">security</span> Proteksi Double-Wall Box</span>
      </div>
    </div>
    <!-- Quick Metrics Decorative Visual -->
    <div class="w-full md:w-auto shrink-0">
      <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-md flex flex-col gap-space-md min-w-[280px]">
        <div class="flex items-center justify-between gap-space-md pb-space-xs">
          <span class="font-title-md text-title-md text-on-surface font-semibold">Statistik Pemenuhan</span>
          <span class="material-symbols-outlined text-secondary text-[24px]">verified_user</span>
        </div>
        <div class="grid grid-cols-2 gap-space-md">
          <div class="flex flex-col bg-surface-container-low p-space-sm rounded-lg">
            <span class="font-display-mobile text-display-mobile text-primary font-bold">99.8%</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Kemasan Utuh Lolos Custom</span>
          </div>
          <div class="flex flex-col bg-surface-container-low p-space-sm rounded-lg">
            <span class="font-display-mobile text-display-mobile text-secondary font-bold">3-7</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Hari Kerja Pengiriman Global</span>
          </div>
        </div>
        <div class="flex items-center gap-space-xs pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
          <span class="material-symbols-outlined text-[16px] text-primary">pin_drop</span>
          <span>Rute aktif: Asia, AUS, Eropa &amp; Amerika Utara</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Perbandingan Layanan (2 Kolom Berdampingan) -->
<section class="w-full py-space-4xl px-gutter-desktop bg-surface">
  <div class="max-w-container-max mx-auto flex flex-col gap-space-2xl">
    <div class="flex flex-col items-center text-center max-w-2xl mx-auto gap-space-2xs">
      <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">Rute Distribusi</span>
      <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">Pilih Jangkauan Pengiriman Anda</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">
        Kami mengintegrasikan sistem logistik terpercaya untuk memastikan setiap bumbu basah, sambal botol, kerupuk, maupun kopi nusantara sampai dalam kualitas puncak.
      </p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-space-xl">
      <!-- Kolom 1: Domestik Indonesia -->
      <div class="flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-xl shadow-md transition-all hover:shadow-xl">
        <div class="flex flex-col gap-space-md">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-space-sm">
              <span class="text-3xl">🇮🇩</span>
              <div class="flex flex-col">
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Domestik Indonesia</h3>
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Seluruh Wilayah Kepulauan RI</span>
              </div>
            </div>
            <span class="px-space-sm py-1 bg-secondary-container text-on-secondary-container rounded-lg font-label-sm text-label-sm font-semibold">Reguler &amp; Kargo</span>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Solusi pengiriman antar pulau dan antar kota di Indonesia. Ideal untuk kebutuhan camilan keluarga, stok bumbu dapur, maupun pasokan usaha kuliner lokal.
          </p>
          <div class="flex flex-col gap-space-sm bg-surface-container-low p-space-md rounded-lg">
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-secondary text-[18px]">schedule</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Estimasi Waktu</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">2 – 5 hari kerja tergantung kota penerima di pulau Jawa, Sumatera, Bali, Kalimantan, Sulawesi, hingga Papua.</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-primary text-[18px]">calculate</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Tarif Transparan &amp; Otomatis</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Ongkos kirim dihitung langsung sesuai berat timbangan aktual &amp; dimensi volumetrik standar ekspedisi.</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-secondary text-[18px]">track_changes</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Resi Resmi &amp; Garansi Aman</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Layanan pelacakan langsung real-time via kode resi yang kami infokan pasca pengiriman paket dari hub Klaten.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-space-lg pt-space-md flex items-center justify-between bg-surface-container-lowest">
          <span class="font-label-md text-label-md text-on-surface-variant font-medium">Melayani COD &amp; Transfer Bank Mandiri / BCA</span>
          <a class="inline-flex items-center gap-space-2xs text-secondary font-title-md hover:text-on-secondary-fixed-variant transition-colors" href="#form-cek-ongkir">
            Pesan Domestik <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
          </a>
        </div>
      </div>
      <!-- Kolom 2: Internasional (Ekspor / Diaspora) -->
      <div class="flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-xl shadow-md transition-all hover:shadow-xl relative overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full blur-2xl pointer-events-none"></div>
        <div class="flex flex-col gap-space-md">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-space-sm">
              <span class="text-3xl">🌏</span>
              <div class="flex flex-col">
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Internasional</h3>
                <span class="font-label-sm text-label-sm text-primary uppercase tracking-wider font-bold">Ekspor &amp; Komunitas Diaspora</span>
              </div>
            </div>
            <span class="px-space-sm py-1 bg-primary-fixed text-on-primary-fixed-variant rounded-lg font-label-sm text-label-sm font-semibold">Priority Air Express</span>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Pengiriman ekspres terpercaya ke berbagai negara di Asia, Australia, Eropa, dan Amerika. Melepas rindu kuliner kampung halaman tanpa repot urusan kepabeanan.
          </p>
          <div class="flex flex-col gap-space-sm bg-surface-container-low p-space-md rounded-lg">
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-primary text-[18px]">flight_takeoff</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Estimasi Waktu Ekspres</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Hanya 3 – 7 hari kerja langsung ke alamat pintu Anda (door-to-door delivery) dengan jalur udara prioritas.</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-tertiary text-[18px]">scale</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Kalkulasi Fleksibel Tanpa Komitmen</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Ongkir dihitung presisi berdasarkan volume, berat bersih, serta regulasi pabean negara tujuan sebelum pembayaran diproses.</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-secondary text-[18px]">assignment_turned_in</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Kepatuhan Bea Cukai &amp; Deklarasi Ekspor</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Dokumen invoice ekspor resmi, packing list, serta label kepabeanan disiapkan lengkap oleh tim kami.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-space-lg pt-space-md flex items-center justify-between bg-surface-container-lowest">
          <span class="font-label-md text-label-md text-on-surface-variant font-medium">Dokumen Ekspor Disiapkan Lengkap</span>
          <a class="inline-flex items-center gap-space-2xs text-primary font-title-md hover:text-on-primary-fixed-variant transition-colors" href="#form-cek-ongkir">
            Simulasi Ekspor <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: 3 Langkah Mudah Berbelanja -->
<section class="w-full py-space-4xl px-gutter-desktop bg-surface-container-low">
  <div class="max-w-container-max mx-auto flex flex-col gap-space-2xl">
    <div class="flex flex-col items-center text-center max-w-2xl mx-auto gap-space-2xs">
      <span class="font-label-md text-label-md text-secondary font-bold uppercase tracking-widest">Alur Transaksi</span>
      <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">3 Langkah Mudah Berbelanja</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">
        Proses pemesanan yang sederhana, aman, dan langsung dipandu oleh tim kami dari Klaten.
      </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
      <!-- Step 1 -->
      <div class="flex flex-col bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm hover:shadow-2xl hover:-translate-y-2.5 transition-all duration-300 ease-out relative overflow-hidden group border border-outline-variant/20 hover:border-primary/30">
        <div class="absolute top-0 inset-x-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
        <div class="flex items-center justify-between mb-space-md">
          <span class="w-12 h-12 rounded-xl bg-primary-fixed text-on-primary-fixed font-headline-md flex items-center justify-center font-bold group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
            01
          </span>
          <span class="material-symbols-outlined text-outline text-[28px] group-hover:text-primary transition-colors">search</span>
        </div>
        <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs font-semibold group-hover:text-primary transition-colors duration-200">Pilih Produk di Katalog</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
          Jelajahi 30+ pilihan makanan kering, bumbu rempah, snack nusantara, hingga kopi pilihan. Catat varian produk dan perkiraan jumlah yang diinginkan.
        </p>
        <div class="mt-auto pt-space-sm flex items-center gap-space-2xs font-label-sm text-label-sm text-primary font-semibold group-hover:translate-x-1 transition-transform">
          <span class="material-symbols-outlined text-[16px]">check_circle</span>
          <span>Bebas pilih tanpa minimum order</span>
        </div>
      </div>
      <!-- Step 2 -->
      <div class="flex flex-col bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm hover:shadow-2xl hover:-translate-y-2.5 transition-all duration-300 ease-out relative overflow-hidden group border border-outline-variant/20 hover:border-secondary/30">
        <div class="absolute top-0 inset-x-0 h-1 bg-secondary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
        <div class="flex items-center justify-between mb-space-md">
          <span class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container font-headline-md flex items-center justify-center font-bold group-hover:scale-110 group-hover:-rotate-6 transition-transform duration-300">
            02
          </span>
          <span class="material-symbols-outlined text-outline text-[28px] group-hover:text-secondary transition-colors">chat</span>
        </div>
        <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs font-semibold group-hover:text-secondary transition-colors duration-200">Hubungi WhatsApp / Email</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
          Kirimkan daftar pesanan dan alamat tujuan Anda. Tim kami segera memverifikasi ketersediaan stok, menghitung ongkos kirim termurah, dan menerbitkan rincian invoice.
        </p>
        <div class="mt-auto pt-space-sm flex items-center gap-space-2xs font-label-sm text-label-sm text-secondary font-semibold group-hover:translate-x-1 transition-transform">
          <span class="material-symbols-outlined text-[16px]">schedule</span>
          <span>Respon cepat dalam hitungan menit</span>
        </div>
      </div>
      <!-- Step 3 -->
      <div class="flex flex-col bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm hover:shadow-2xl hover:-translate-y-2.5 transition-all duration-300 ease-out relative overflow-hidden group border border-outline-variant/20 hover:border-tertiary/30">
        <div class="absolute top-0 inset-x-0 h-1 bg-tertiary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
        <div class="flex items-center justify-between mb-space-md">
          <span class="w-12 h-12 rounded-xl bg-tertiary-fixed text-on-tertiary-fixed font-headline-md flex items-center justify-center font-bold group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
            03
          </span>
          <span class="material-symbols-outlined text-outline text-[28px] group-hover:text-tertiary transition-colors">inventory_2</span>
        </div>
        <h3 class="font-title-lg text-title-lg text-on-surface mb-space-xs font-semibold group-hover:text-tertiary transition-colors duration-200">Pembayaran &amp; Pengiriman</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
          Selesaikan pembayaran via transfer bank atau kartu. Paket Anda langsung dipacking dengan proteksi vakum dan double-wall box lalu diserahkan ke kurir ekspres.
        </p>
        <div class="mt-auto pt-space-sm flex items-center gap-space-2xs font-label-sm text-label-sm text-tertiary font-semibold group-hover:translate-x-1 transition-transform">
          <span class="material-symbols-outlined text-[16px]">qr_code_scanner</span>
          <span>Nomor resi otomatis diberikan</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Standar Kemasan Ekspor -->
<section class="w-full py-space-4xl px-gutter-desktop bg-surface">
  <div class="max-w-container-max mx-auto flex flex-col lg:flex-row items-center gap-space-3xl">
    <!-- Media / Packaging Showcase -->
    <div class="w-full lg:w-1/2 flex flex-col gap-space-md">
      <div class="relative rounded-xl overflow-hidden shadow-lg aspect-4/3 bg-surface-container">
        <img class="w-full h-full object-cover" alt="Standar Kemasan Ekspor Toko Kelontong" src="{{ asset('images/stitch_shipping_box.jpg') }}"/>
        <div class="absolute bottom-4 left-4 bg-surface-container-lowest/90 backdrop-blur-md px-space-md py-space-xs rounded-lg shadow-sm flex items-center gap-space-xs">
          <span class="material-symbols-outlined text-secondary text-[20px]">shield</span>
          <span class="font-label-sm text-label-sm text-on-surface font-bold">Inspeksi Mutu &amp; Fragile Protection Ready</span>
        </div>
      </div>
    </div>
    <!-- Description Content -->
    <div class="w-full lg:w-1/2 flex flex-col gap-space-lg">
      <div class="flex flex-col gap-space-xs">
        <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">Kualitas Tanpa Kompromi</span>
        <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">Standar Kemasan Ekspor Kelas Internasional</h2>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
          Perjalanan antar benua menuntut proteksi berlipat. Makanan Indonesia seperti kerupuk renyah, sambal botol kaca, hingga bubuk rempah dikemas khusus agar rasa, aroma, dan bentuknya tetap utuh saat unboxing.
        </p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col gap-space-2xs">
          <div class="w-10 h-10 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center">
            <span class="material-symbols-outlined text-[20px]">air</span>
          </div>
          <h4 class="font-title-md text-title-md text-on-surface font-semibold">Vacuum Sealed</h4>
          <p class="font-body-sm text-body-sm text-on-surface-variant">Kemasan kedap udara anti lembap memperpanjang kesegaran makanan tanpa bahan pengawet kimiawi tambahan.</p>
        </div>
        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col gap-space-2xs">
          <div class="w-10 h-10 rounded-lg bg-primary-fixed text-on-primary-fixed flex items-center justify-center">
            <span class="material-symbols-outlined text-[20px]">layers</span>
          </div>
          <h4 class="font-title-md text-title-md text-on-surface font-semibold">Bubble Wrap Tebal</h4>
          <p class="font-body-sm text-body-sm text-on-surface-variant">Multi-layer peredam benturan khusus untuk toples sambal, bumbu basah, dan kerupuk yang rentan remuk.</p>
        </div>
        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col gap-space-2xs">
          <div class="w-10 h-10 rounded-lg bg-surface-container-highest text-on-surface flex items-center justify-center">
            <span class="material-symbols-outlined text-[20px]">package_2</span>
          </div>
          <h4 class="font-title-md text-title-md text-on-surface font-semibold">Kardus Ganda</h4>
          <p class="font-body-sm text-body-sm text-on-surface-variant">Double-wall corrugated carton tangguh menahan tekanan kargo kabin pesawat maupun ekspedisi laut.</p>
        </div>
      </div>
      <div class="p-space-md rounded-xl bg-surface-container-low flex items-start gap-space-sm">
        <span class="material-symbols-outlined text-secondary text-[24px] shrink-0 mt-0.5">verified</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant">
          Setiap paket internasional disertai lembar deklarasi pabean resmi berstempel <strong>CV. Bertiga Tradexa</strong> untuk memastikan kelancaran inspeksi karantina pangan di bandara kedatangan.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Interactive Shipping Calculator & CTA Section -->
<section class="w-full py-space-4xl px-gutter-desktop bg-surface-container-lowest" id="form-cek-ongkir">
  <div class="max-w-container-max mx-auto">
    <div class="bg-surface-container-low rounded-2xl p-space-xl md:p-space-3xl shadow-lg flex flex-col lg:flex-row gap-space-3xl items-center">
      <!-- CTA Copy & Direct WhatsApp Link -->
      <div class="w-full lg:w-1/2 flex flex-col gap-space-md">
        <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">Kalkulasi Cepat &amp; Akurat</span>
        <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">Cek Estimasi Biaya Kirim ke Negara Anda</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
          Ingin memesan partai eceran keluarga atau pasokan grosir untuk restoran Indonesia di luar negeri? Tim kami siap memberikan simulasi ongkos kirim paling ekonomis tanpa ikatan transaksi.
        </p>
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-sm pt-space-xs">
          <a class="inline-flex items-center justify-center gap-space-2xs bg-primary hover:bg-primary-container text-on-primary font-title-md px-space-xl py-space-sm rounded-xl shadow-md transition-all text-center" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode('Halo Admin Toko Kelontong, saya ingin konsultasi pengiriman dan cek ongkos kirim.') }}" rel="noopener noreferrer" target="_blank">
            <span class="material-symbols-outlined text-[22px]">chat</span>
            Konsultasi Pengiriman via WhatsApp
          </a>
          <a class="inline-flex items-center justify-center gap-space-2xs bg-surface-container-highest hover:bg-surface-container text-on-surface font-title-md px-space-lg py-space-sm rounded-xl transition-all text-center" href="mailto:{{ config('toko.email') }}?subject=Inquiry%20Pengiriman%20Toko%20Kelontong">
            <span class="material-symbols-outlined text-[20px]">mail</span>
            Kirim Email
          </a>
        </div>
        <div class="flex items-center gap-space-md pt-space-sm text-on-surface-variant font-label-sm text-label-sm">
          <span class="flex items-center gap-1">
            <span class="material-symbols-outlined text-secondary text-[16px]">check</span> Bebas Tanya
          </span>
          <span class="flex items-center gap-1">
            <span class="material-symbols-outlined text-secondary text-[16px]">check</span> Respon Ramah
          </span>
          <span class="flex items-center gap-1">
            <span class="material-symbols-outlined text-secondary text-[16px]">check</span> Dukungan Bahasa ID &amp; EN
          </span>
        </div>
      </div>
      <!-- Quick Estimation Simulator Form -->
      <div class="w-full lg:w-1/2 bg-surface-container-lowest rounded-xl p-space-xl shadow-md flex flex-col gap-space-md">
        <div class="flex items-center justify-between pb-space-xs">
          <div>
            <h3 class="font-title-lg text-title-lg text-on-surface font-semibold">Simulasi Estimasi Biaya</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Hitung perkiraan durasi &amp; layanan pengiriman</p>
          </div>
          <span class="material-symbols-outlined text-primary text-[28px]">local_shipping</span>
        </div>
        <form class="flex flex-col gap-space-sm" id="shippingSimulator" onsubmit="event.preventDefault(); calculateShipping();">
          <div class="flex flex-col gap-1">
            <label class="font-label-md text-label-md text-on-surface font-medium" for="destType">Tipe Tujuan Pengiriman</label>
            <select class="bg-surface-container-low p-space-sm rounded-lg font-body-md text-on-surface outline-none focus:ring-2 focus:ring-primary" id="destType" onchange="updateCountryOptions()">
              <option value="domestic">🇮🇩 Domestik Indonesia (Antar Kota / Pulau)</option>
              <option value="intl">🌏 Internasional (Asia, Eropa, Australia, AS)</option>
            </select>
          </div>
          <div class="flex flex-col gap-1" id="countryWrapper">
            <label class="font-label-md text-label-md text-on-surface font-medium" for="destLocation">Negara / Kota Tujuan</label>
            <input class="bg-surface-container-low p-space-sm rounded-lg font-body-md text-on-surface placeholder:text-outline outline-none focus:ring-2 focus:ring-primary" id="destLocation" placeholder="Contoh: Surabaya, Jakarta Barat, Medan, Denpasar" required="" type="text"/>
          </div>
          <div class="grid grid-cols-2 gap-space-sm">
            <div class="flex flex-col gap-1">
              <label class="font-label-md text-label-md text-on-surface font-medium" for="weightKg">Perkiraan Berat Total</label>
              <select class="bg-surface-container-low p-space-sm rounded-lg font-body-md text-on-surface outline-none focus:ring-2 focus:ring-primary" id="weightKg">
                <option value="1">1 - 2 Kg (Camilan / Bumbu)</option>
                <option value="3">3 - 5 Kg (Paket Sedang)</option>
                <option value="6">6 - 10 Kg (Stok Bulanan)</option>
                <option value="10">&gt; 10 Kg (Grosir / Resto)</option>
              </select>
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-label-md text-label-md text-on-surface font-medium" for="productType">Kategori Makanan</label>
              <select class="bg-surface-container-low p-space-sm rounded-lg font-body-md text-on-surface outline-none focus:ring-2 focus:ring-primary" id="productType">
                <option value="dry">Makanan Kering / Snack</option>
                <option value="sauce">Bumbu / Sambal Botol</option>
                <option value="coffee">Kopi / Teh / Minuman</option>
                <option value="mixed">Campuran Beragam</option>
              </select>
            </div>
          </div>
          <button class="mt-space-xs w-full bg-secondary hover:bg-secondary-container hover:text-on-secondary-container text-on-secondary font-title-md py-space-sm rounded-lg transition-all flex items-center justify-center gap-space-2xs shadow-sm" type="submit">
            <span class="material-symbols-outlined text-[20px]">calculate</span>
            Hitung Estimasi Waktu &amp; Ongkir
          </button>
        </form>
        <!-- Result Box -->
        <div class="hidden flex-col gap-space-xs bg-surface-container-low p-space-md rounded-lg" id="resultBox">
          <div class="flex items-center justify-between">
            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold tracking-wider">Hasil Perkiraan Logistik</span>
            <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-secondary-container text-on-secondary-container" id="estBadge">Aktif</span>
          </div>
          <div class="flex items-baseline justify-between mt-1">
            <span class="font-body-md text-body-md text-on-surface">Estimasi Waktu Tiba:</span>
            <span class="font-title-md text-title-md text-primary font-bold" id="estDuration">2 - 5 Hari Kerja</span>
          </div>
          <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mt-1" id="estNote">
            Ongkos kirim akurat bergantung pada alamat kode pos presisi. Klik tombol WhatsApp di bawah untuk konfirmasi tarif real-time langsung dengan data pesanan Anda.
          </p>
          <a class="mt-2 inline-flex items-center justify-center gap-1 bg-primary text-on-primary py-2 px-3 rounded text-label-md font-semibold hover:bg-primary-container transition-all" href="https://wa.me/{{ config('toko.wa_number') }}" id="waDirectBtn" rel="noopener noreferrer" target="_blank">
            <span class="material-symbols-outlined text-[16px]">send</span> Lanjut Konfirmasi ke WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script>
  function calculateShipping() {
    const type = document.getElementById('destType').value;
    const loc = document.getElementById('destLocation').value.trim();
    const weight = document.getElementById('weightKg').value;
    const resultBox = document.getElementById('resultBox');
    const estDuration = document.getElementById('estDuration');
    const estBadge = document.getElementById('estBadge');
    const estNote = document.getElementById('estNote');
    const waBtn = document.getElementById('waDirectBtn');
    const waNumber = "{{ config('toko.wa_number') }}";

    resultBox.classList.remove('hidden');
    resultBox.classList.add('flex');

    if (type === 'domestic') {
      estDuration.innerText = '2 - 4 Hari Kerja';
      estBadge.innerText = 'Reguler Domestik';
      estBadge.className = 'px-2 py-0.5 rounded text-[11px] font-bold bg-secondary-container text-on-secondary-container';
      estNote.innerText = `Pengiriman dari Klaten ke ${loc || 'tujuan Anda'}. Estimasi ongkir sangat terjangkau dengan proteksi kardus standar. Hubungi admin untuk resi instan.`;
    } else {
      estDuration.innerText = '3 - 7 Hari Kerja';
      estBadge.innerText = 'Air Express Ekspor';
      estBadge.className = 'px-2 py-0.5 rounded text-[11px] font-bold bg-primary-fixed text-on-primary-fixed-variant';
      estNote.innerText = `Pengiriman internasional door-to-door ke ${loc || 'mancanegara'}. Termasuk proteksi vacuum sealed, bubble tebal, dan invoice bea cukai resmi.`;
    }

    const message = encodeURIComponent(`Halo Toko Kelontong, saya ingin konfirmasi ongkos kirim ke: ${loc} (${type === 'domestic' ? 'Domestik' : 'Internasional'}) untuk estimasi berat sekitar ${weight} Kg.`);
    waBtn.href = `https://wa.me/${waNumber}?text=${message}`;
  }

  function updateCountryOptions() {
    const type = document.getElementById('destType').value;
    const input = document.getElementById('destLocation');
    if (type === 'domestic') {
      input.placeholder = 'Contoh: Surabaya, Jakarta Barat, Medan, Denpasar';
    } else {
      input.placeholder = 'Contoh: Melbourne (AUS), Tokyo (JPN), Frankfurt (GER), California (USA)';
    }
  }
</script>
@endsection
