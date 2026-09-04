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
    <div class="bg-surface-container-low rounded-2xl p-space-lg md:p-space-3xl shadow-lg flex flex-col lg:flex-row gap-space-2xl lg:gap-space-3xl items-start">
      <!-- CTA Copy & Direct Contact Info (Left Column) -->
      <div class="w-full lg:w-5/12 flex flex-col gap-space-md lg:sticky lg:top-32">
        <div class="inline-flex items-center gap-space-2xs px-space-sm py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm uppercase tracking-wider font-bold w-fit">
          <span class="material-symbols-outlined text-[16px]">calculate</span>
          <span>Kalkulasi Cepat &amp; Akurat</span>
        </div>
        <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold leading-tight">
          Cek Estimasi Biaya &amp; Durasi Pengiriman
        </h2>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
          Pilih jalur pengiriman Anda — baik distribusi domestik antar kota di Indonesia maupun pengiriman udara ekspres internasional untuk keluarga atau diaspora di luar negeri.
        </p>

        <!-- Guarantee Checklist -->
        <div class="flex flex-col gap-space-xs py-space-xs">
          <div class="flex items-center gap-2 text-on-surface font-body-sm">
            <span class="material-symbols-outlined text-secondary text-[18px]">verified</span>
            <span>Bebas tanya &amp; konsultasi tarif tanpa komitmen</span>
          </div>
          <div class="flex items-center gap-2 text-on-surface font-body-sm">
            <span class="material-symbols-outlined text-secondary text-[18px]">package_2</span>
            <span>Standar kardus ganda tebal &amp; proteksi vakum</span>
          </div>
          <div class="flex items-center gap-2 text-on-surface font-body-sm">
            <span class="material-symbols-outlined text-secondary text-[18px]">receipt_long</span>
            <span>Deklarasi bea cukai resmi CV. Bertiga Tradexa</span>
          </div>
        </div>

        <!-- Quick Contacts -->
        <div class="flex flex-col sm:flex-row lg:flex-col gap-space-sm pt-space-xs">
          <a class="inline-flex items-center justify-center gap-space-2xs bg-secondary hover:bg-secondary-container text-on-secondary hover:text-on-secondary-container font-title-md px-space-lg py-space-sm rounded-xl shadow-md transition-all text-center" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode('Halo Admin Toko Kelontong, saya ingin konsultasi seputar pengiriman produk.') }}" rel="noopener noreferrer" target="_blank">
            <span class="material-symbols-outlined text-[20px]">chat</span>
            Hubungi CS WhatsApp
          </a>
          <a class="inline-flex items-center justify-center gap-space-2xs bg-surface-container-highest hover:bg-surface-container text-on-surface font-title-md px-space-lg py-space-sm rounded-xl transition-all text-center" href="mailto:{{ config('toko.email') }}?subject=Inquiry%20Pengiriman%20Toko%20Kelontong">
            <span class="material-symbols-outlined text-[20px]">mail</span>
            Kirim Email
          </a>
        </div>
      </div>

      <!-- Simulator Form Card (Right Column) -->
      <div class="w-full lg:w-7/12 bg-surface-container-lowest rounded-2xl p-space-md sm:p-space-xl shadow-md border border-outline-variant/30 flex flex-col gap-space-md">
        <!-- Form Header -->
        <div class="flex items-center justify-between pb-space-2xs border-b border-outline-variant/20">
          <div>
            <h3 class="font-title-lg text-title-lg text-on-surface font-bold">Simulasi Pengiriman</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Pilih jenis tujuan untuk melihat formulir spesifik</p>
          </div>
          <span class="material-symbols-outlined text-primary text-[28px]">local_shipping</span>
        </div>

        <!-- Segmented Tab Selector (Domestik vs Internasional) -->
        <div class="grid grid-cols-2 gap-space-2xs bg-surface-container-low p-1 rounded-xl border border-outline-variant/20">
          <button type="button" id="tabDomestikBtn" onclick="switchShippingTab('domestic')" class="flex items-center justify-center gap-2 py-space-xs px-space-sm rounded-lg font-title-md text-title-md transition-all duration-200 bg-secondary text-on-secondary shadow-sm">
            <span class="text-xl">🇮🇩</span>
            <span class="font-bold text-sm sm:text-base">Domestik RI</span>
          </button>
          <button type="button" id="tabIntlBtn" onclick="switchShippingTab('intl')" class="flex items-center justify-center gap-2 py-space-xs px-space-sm rounded-lg font-title-md text-title-md transition-all duration-200 text-on-surface-variant hover:text-on-surface hover:bg-surface-container">
            <span class="text-xl">🌏</span>
            <span class="font-bold text-sm sm:text-base">Internasional</span>
          </button>
        </div>

        <!-- FORM 1: DOMESTIK INDONESIA -->
        <form id="formDomestik" onsubmit="event.preventDefault(); calcDomestic();" class="flex flex-col gap-space-md">
          <!-- Info Asal Pengiriman -->
          <div class="bg-surface-container-low px-space-md py-space-xs rounded-xl flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm border border-outline-variant/20">
            <span class="material-symbols-outlined text-secondary text-[18px]">store</span>
            <span><strong>Asal Kirim:</strong> Hub Pusat Toko Kelontong, Klaten, Jawa Tengah (57467)</span>
          </div>

          <!-- Wilayah Tujuan Domestik -->
          <div class="flex flex-col gap-1">
            <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between" for="domRegion">
              <span>Provinsi / Wilayah Tujuan</span>
              <span class="text-secondary font-normal text-xs">Pilih jangkauan pulau</span>
            </label>
            <select id="domRegion" class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface outline-none focus:ring-2 focus:ring-secondary border border-outline-variant/30">
              <option value="jawa_tengah">Jawa Tengah &amp; DI Yogyakarta (Semarang, Solo, Jogja, dll.)</option>
              <option value="jabodetabek">Jabodetabek &amp; Banten (Jakarta, Bogor, Depok, Tangerang, Bekasi)</option>
              <option value="jawa_barat">Jawa Barat (Bandung, Cirebon, Tasikmalaya, dll.)</option>
              <option value="jawa_timur">Jawa Timur (Surabaya, Malang, Sidoarjo, Jember, dll.)</option>
              <option value="bali_nt">Bali &amp; Nusa Tenggara (Denpasar, Mataram, Kupang)</option>
              <option value="sumatera">Sumatera (Medan, Palembang, Pekanbaru, Bandar Lampung, Padang)</option>
              <option value="kalimantan">Kalimantan (Balikpapan, Pontianak, Samarinda, Banjarmasin)</option>
              <option value="sulawesi">Sulawesi (Makassar, Manado, Palu, Kendari)</option>
              <option value="maluku_papua">Maluku &amp; Papua (Ambon, Jayapura, Sorong)</option>
            </select>
          </div>

          <!-- Kota / Kecamatan Presisi -->
          <div class="flex flex-col gap-1">
            <label class="font-label-md text-label-md text-on-surface font-semibold" for="domCity">Kota / Kabupaten / Kecamatan Penerima</label>
            <input type="text" id="domCity" placeholder="Contoh: Surabaya Gubeng, Jakarta Selatan, atau Medan Baru" required class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface placeholder:text-outline outline-none focus:ring-2 focus:ring-secondary border border-outline-variant/30"/>
          </div>

          <!-- Pilihan Layanan & Berat (Stacked on Mobile, 2 Col on Tablet+) -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
            <div class="flex flex-col gap-1">
              <label class="font-label-md text-label-md text-on-surface font-semibold" for="domService">Pilihan Layanan</label>
              <select id="domService" class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface outline-none focus:ring-2 focus:ring-secondary border border-outline-variant/30">
                <option value="reguler">⚡ Reguler Kilat (1 – 3 Hari)</option>
                <option value="cargo">📦 Kargo Hemat (&ge; 5 Kg Partai Besar)</option>
              </select>
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-label-md text-label-md text-on-surface font-semibold" for="domWeight">Perkiraan Berat Total</label>
              <select id="domWeight" class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface outline-none focus:ring-2 focus:ring-secondary border border-outline-variant/30">
                <option value="1">1 – 2 Kg (Camilan &amp; Bumbu)</option>
                <option value="3">3 – 5 Kg (Paket Sedang)</option>
                <option value="7">6 – 10 Kg (Stok Keluarga)</option>
                <option value="15">&gt; 10 Kg (Grosir / Reseller)</option>
              </select>
            </div>
          </div>

          <!-- Kategori Makanan -->
          <div class="flex flex-col gap-1">
            <label class="font-label-md text-label-md text-on-surface font-semibold" for="domProduct">Kategori Makanan</label>
            <select id="domProduct" class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface outline-none focus:ring-2 focus:ring-secondary border border-outline-variant/30">
              <option value="Camilan Kering &amp; Kerupuk">Camilan Kering &amp; Kerupuk Renyah</option>
              <option value="Bumbu Masak &amp; Sambal Botol">Bumbu Masak &amp; Sambal Kemasan</option>
              <option value="Kopi &amp; Minuman Tradisional">Kopi Nusantara &amp; Minuman Tradisional</option>
              <option value="Campuran Aneka Produk">Campuran Aneka Produk</option>
            </select>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="w-full bg-secondary hover:bg-secondary-container hover:text-on-secondary-container text-on-secondary font-title-md py-space-sm rounded-xl transition-all flex items-center justify-center gap-space-2xs shadow-md">
            <span class="material-symbols-outlined text-[20px]">calculate</span>
            <span>Hitung Estimasi Domestik</span>
          </button>
        </form>

        <!-- FORM 2: INTERNASIONAL (EKSPOR / DIASPORA) -->
        <form id="formIntl" onsubmit="event.preventDefault(); calcIntl();" class="hidden flex-col gap-space-md">
          <!-- Info Eksportir Resmi -->
          <div class="bg-surface-container-low px-space-md py-space-xs rounded-xl flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm border border-outline-variant/20">
            <span class="material-symbols-outlined text-primary text-[18px]">verified_user</span>
            <span><strong>Eksportir Resmi:</strong> CV. Bertiga Tradexa (Free Dokumen Bea Cukai &amp; Pabean)</span>
          </div>

          <!-- Negara Destinasi Utama -->
          <div class="flex flex-col gap-1">
            <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between" for="intlCountry">
              <span>Negara Tujuan Ekspor</span>
              <span class="text-primary font-normal text-xs">Pintu gerbang global</span>
            </label>
            <select id="intlCountry" class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface outline-none focus:ring-2 focus:ring-primary border border-outline-variant/30">
              <option value="Malaysia &amp; Singapura">🇲🇾 Malaysia &amp; 🇸🇬 Singapura (Asia Tenggara)</option>
              <option value="Taiwan &amp; Hong Kong">🇹🇼 Taiwan &amp; 🇭🇰 Hong Kong (Asia Timur)</option>
              <option value="Australia &amp; Selandia Baru">🇦🇺 Australia &amp; 🇳🇿 Selandia Baru</option>
              <option value="Jepang &amp; Korea Selatan">🇯🇵 Jepang &amp; 🇰🇷 Korea Selatan</option>
              <option value="Amerika Serikat &amp; Kanada">🇺🇸 Amerika Serikat &amp; 🇨🇦 Kanada</option>
              <option value="Eropa (Belanda, Jerman, UK, dll)">🇪🇺 Eropa (Belanda, Jerman, Inggris, dll.)</option>
              <option value="Timur Tengah (Saudi, UAE, Qatar)">🇸🇦 Timur Tengah (Arab Saudi, UAE, Qatar)</option>
              <option value="Negara Lainnya">🌍 Negara Lainnya di Seluruh Dunia</option>
            </select>
          </div>

          <!-- Kota & Kode Pos Tujuan -->
          <div class="flex flex-col gap-1">
            <label class="font-label-md text-label-md text-on-surface font-semibold" for="intlCity">Kota &amp; Kode Pos (Postal Code) Penerima</label>
            <input type="text" id="intlCity" placeholder="Contoh: Melbourne 3000, Tokyo 100-0001, atau Frankfurt 60311" required class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface placeholder:text-outline outline-none focus:ring-2 focus:ring-primary border border-outline-variant/30"/>
          </div>

          <!-- Berat & Kategori Pangan (Stacked on Mobile) -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
            <div class="flex flex-col gap-1">
              <label class="font-label-md text-label-md text-on-surface font-semibold" for="intlWeight">Estimasi Berat Ekspor</label>
              <select id="intlWeight" class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface outline-none focus:ring-2 focus:ring-primary border border-outline-variant/30">
                <option value="1">1 – 2 Kg (Camilan / Bumbu Dapur)</option>
                <option value="3">3 – 5 Kg (Paket Rindu Rumah)</option>
                <option value="7">6 – 10 Kg (Stok Bulanan Diaspora)</option>
                <option value="15">&gt; 10 Kg (Pasokan Grosir Resto)</option>
              </select>
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-label-md text-label-md text-on-surface font-semibold" for="intlProduct">Kategori Pangan Ekspor</label>
              <select id="intlProduct" class="w-full bg-surface-container-low p-space-sm rounded-xl font-body-md text-on-surface outline-none focus:ring-2 focus:ring-primary border border-outline-variant/30">
                <option value="Makanan Kering / Vacuum">Makanan Kering &amp; Segel Kedap Udara</option>
                <option value="Bumbu Masak &amp; Sambal Matang">Bumbu Olahan &amp; Sambal Botol Matang</option>
                <option value="Kopi Biji &amp; Bubuk Rempah">Kopi Nusantara &amp; Rempah Alami</option>
                <option value="Paket Campuran Diaspora">Paket Campuran Titipan Diaspora</option>
              </select>
            </div>
          </div>

          <!-- Standar Proteksi Ekspor Checkmarks -->
          <div class="bg-primary/5 p-space-sm rounded-xl flex flex-col gap-1 border border-primary/20 text-on-surface font-body-sm">
            <span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">Fasilitas Ekspor Resmi Termasuk:</span>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-space-sm gap-y-1 text-xs text-on-surface-variant mt-1">
              <span class="flex items-center gap-1"><span class="material-symbols-outlined text-secondary text-[16px]">check_circle</span> Vacuum sealed kedap udara</span>
              <span class="flex items-center gap-1"><span class="material-symbols-outlined text-secondary text-[16px]">check_circle</span> Bubble wrap tebal berlapis</span>
              <span class="flex items-center gap-1"><span class="material-symbols-outlined text-secondary text-[16px]">check_circle</span> Kardus ganda kokoh (double-wall)</span>
              <span class="flex items-center gap-1"><span class="material-symbols-outlined text-secondary text-[16px]">check_circle</span> Dokumen invoice bea cukai resmi</span>
            </div>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="w-full bg-primary hover:bg-primary-container text-on-primary font-title-md py-space-sm rounded-xl transition-all flex items-center justify-center gap-space-2xs shadow-md">
            <span class="material-symbols-outlined text-[20px]">flight_takeoff</span>
            <span>Hitung Estimasi Internasional</span>
          </button>
        </form>

        <!-- Dynamic Results Card (Smooth Reveal) -->
        <div id="resultCard" class="hidden flex-col gap-space-sm bg-surface-container-low p-space-md sm:p-space-lg rounded-xl border border-outline-variant/30">
          <div class="flex items-center justify-between">
            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-bold tracking-wider flex items-center gap-1">
              <span class="material-symbols-outlined text-[16px]">verified</span>
              <span>Hasil Estimasi Logistik</span>
            </span>
            <span id="resultBadge" class="px-2.5 py-0.5 rounded-full text-xs font-bold bg-secondary-container text-on-secondary-container">
              Reguler Domestik
            </span>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm pt-space-2xs">
            <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
              <span class="font-label-sm text-label-sm text-on-surface-variant">Estimasi Waktu Tiba</span>
              <span id="resultDuration" class="font-title-lg text-title-lg text-primary font-bold mt-0.5">2 – 4 Hari Kerja</span>
              <span id="resultSubDuration" class="font-body-sm text-xs text-on-surface-variant">Door-to-door langsung ke alamat</span>
            </div>
            <div class="bg-surface-container-lowest p-space-sm rounded-lg flex flex-col">
              <span class="font-label-sm text-label-sm text-on-surface-variant">Jalur Pengiriman</span>
              <span id="resultCourier" class="font-title-lg text-title-lg text-secondary font-bold mt-0.5">Ekspedisi Prioritas</span>
              <span id="resultSubCourier" class="font-body-sm text-xs text-on-surface-variant">Kardus tebal &amp; kode resi instan</span>
            </div>
          </div>

          <p id="resultNote" class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed bg-surface-container-lowest p-space-sm rounded-lg border border-outline-variant/10">
            Perhitungan estimasi ongkos kirim presisi dan ketersediaan stok akan langsung diverifikasi oleh admin Toko Kelontong via WhatsApp.
          </p>

          <!-- WhatsApp Direct Dispatch CTA -->
          <a id="resultWaBtn" href="#" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary py-space-sm px-space-md rounded-xl font-title-md text-title-md transition-all shadow-md text-center">
            <span class="material-symbols-outlined text-[20px]">send</span>
            <span>Konfirmasi Rincian &amp; Pesan via WhatsApp</span>
          </a>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  let currentTab = 'domestic';

  function switchShippingTab(mode) {
    currentTab = mode;
    const tabDom = document.getElementById('tabDomestikBtn');
    const tabIntl = document.getElementById('tabIntlBtn');
    const formDom = document.getElementById('formDomestik');
    const formIntl = document.getElementById('formIntl');
    const resultCard = document.getElementById('resultCard');

    if (mode === 'domestic') {
      tabDom.className = 'flex items-center justify-center gap-2 py-space-xs px-space-sm rounded-lg font-title-md text-title-md transition-all duration-200 bg-secondary text-on-secondary shadow-sm';
      tabIntl.className = 'flex items-center justify-center gap-2 py-space-xs px-space-sm rounded-lg font-title-md text-title-md transition-all duration-200 text-on-surface-variant hover:text-on-surface hover:bg-surface-container';
      formDom.classList.remove('hidden');
      formDom.classList.add('flex');
      formIntl.classList.add('hidden');
      formIntl.classList.remove('flex');
    } else {
      tabIntl.className = 'flex items-center justify-center gap-2 py-space-xs px-space-sm rounded-lg font-title-md text-title-md transition-all duration-200 bg-primary text-on-primary shadow-sm';
      tabDom.className = 'flex items-center justify-center gap-2 py-space-xs px-space-sm rounded-lg font-title-md text-title-md transition-all duration-200 text-on-surface-variant hover:text-on-surface hover:bg-surface-container';
      formIntl.classList.remove('hidden');
      formIntl.classList.add('flex');
      formDom.classList.add('hidden');
      formDom.classList.remove('flex');
    }
    resultCard.classList.add('hidden');
    resultCard.classList.remove('flex');
  }

  function calcDomestic() {
    const regionEl = document.getElementById('domRegion');
    const region = regionEl.options[regionEl.selectedIndex].text;
    const city = document.getElementById('domCity').value.trim();
    const service = document.getElementById('domService').value;
    const weight = document.getElementById('domWeight').value;
    const product = document.getElementById('domProduct').value;
    const waNumber = "{{ config('toko.wa_number') }}";

    const resultCard = document.getElementById('resultCard');
    const resultBadge = document.getElementById('resultBadge');
    const resultDuration = document.getElementById('resultDuration');
    const resultSubDuration = document.getElementById('resultSubDuration');
    const resultCourier = document.getElementById('resultCourier');
    const resultSubCourier = document.getElementById('resultSubCourier');
    const resultNote = document.getElementById('resultNote');
    const resultWaBtn = document.getElementById('resultWaBtn');

    resultCard.classList.remove('hidden');
    resultCard.classList.add('flex');

    resultBadge.innerText = service === 'cargo' ? '🇮🇩 Kargo Hemat Domestik' : '🇮🇩 Reguler Kilat Domestik';
    resultBadge.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-secondary-container text-on-secondary-container';

    if (service === 'cargo') {
      resultDuration.innerText = '3 – 6 Hari Kerja';
      resultSubDuration.innerText = 'Kargo hemat via jalur darat/laut';
      resultCourier.innerText = 'Kargo Nusantara';
      resultSubCourier.innerText = 'Tarif ekonomis untuk paket besar';
    } else {
      resultDuration.innerText = '1 – 3 Hari Kerja';
      resultSubDuration.innerText = 'Jalur kilat antar kota langsung';
      resultCourier.innerText = 'JNE / J&T / SiCepat';
      resultSubCourier.innerText = 'Kardus tebal & kode resi instan';
    }

    resultNote.innerText = `Pengiriman dari Hub Klaten ke ${city || region}. Estimasi berat sekitar ${weight} Kg (${product}). Biaya ongkir akurat & ketersediaan stok siap dicekkan admin via WhatsApp.`;

    const msg = `Halo Toko Kelontong, saya ingin cek ongkos kirim domestik:
- Asal: Hub Klaten, Jawa Tengah
- Tujuan: ${city ? city + ', ' : ''}${region}
- Layanan: ${service === 'cargo' ? 'Kargo Hemat (Partai Besar)' : 'Reguler Kilat'}
- Estimasi Berat: ±${weight} Kg
- Jenis Produk: ${product}

Mohon info ketersediaan produk dan total ongkos kirimnya. Terima kasih!`;

    resultWaBtn.href = `https://wa.me/${waNumber}?text=${encodeURIComponent(msg)}`;
    resultWaBtn.className = 'w-full inline-flex items-center justify-center gap-space-xs bg-secondary hover:bg-secondary-container text-on-secondary hover:text-on-secondary-container py-space-sm px-space-md rounded-xl font-title-md text-title-md transition-all shadow-md text-center';
  }

  function calcIntl() {
    const country = document.getElementById('intlCountry').value;
    const city = document.getElementById('intlCity').value.trim();
    const weight = document.getElementById('intlWeight').value;
    const product = document.getElementById('intlProduct').value;
    const waNumber = "{{ config('toko.wa_number') }}";

    const resultCard = document.getElementById('resultCard');
    const resultBadge = document.getElementById('resultBadge');
    const resultDuration = document.getElementById('resultDuration');
    const resultSubDuration = document.getElementById('resultSubDuration');
    const resultCourier = document.getElementById('resultCourier');
    const resultSubCourier = document.getElementById('resultSubCourier');
    const resultNote = document.getElementById('resultNote');
    const resultWaBtn = document.getElementById('resultWaBtn');

    resultCard.classList.remove('hidden');
    resultCard.classList.add('flex');

    resultBadge.innerText = '🌏 Priority Air Express Ekspor';
    resultBadge.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary-fixed text-on-primary-fixed-variant';

    resultDuration.innerText = '3 – 7 Hari Kerja';
    resultSubDuration.innerText = 'Jalur udara door-to-door internasional';
    resultCourier.innerText = 'CV. Bertiga Tradexa';
    resultSubCourier.innerText = 'Lolos pabean & packing vacuum sealed';

    resultNote.innerText = `Pengiriman internasional dari Indonesia ke ${city || country}. Estimasi berat ${weight} Kg (${product}). Termasuk packing bubble wrap ganda dan dokumen deklarasi kepabeanan pangan resmi.`;

    const msg = `Halo Tim Ekspor Toko Kelontong (CV. Bertiga Tradexa), saya ingin simulasi pengiriman internasional:
- Negara Tujuan: ${country}
- Kota / Kode Pos: ${city || '-'}
- Kategori Makanan: ${product}
- Estimasi Berat: ±${weight} Kg

Mohon bantuan rincian ongkos kirim internasional dan panduan pemesanannya. Terima kasih!`;

    resultWaBtn.href = `https://wa.me/${waNumber}?text=${encodeURIComponent(msg)}`;
    resultWaBtn.className = 'w-full inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary py-space-sm px-space-md rounded-xl font-title-md text-title-md transition-all shadow-md text-center';
  }
</script>
@endsection
