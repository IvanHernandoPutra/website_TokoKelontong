@extends('layouts.app')

@section('title', 'Tentang Kami — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<!-- Breadcrumb Header -->
<section class="w-full bg-surface-container-low py-space-xl">
  <div class="max-w-container-max mx-auto px-gutter-desktop flex flex-col gap-space-xs">
    <nav class="flex items-center gap-space-2xs font-label-md text-label-md text-on-surface-variant">
      <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}">
        <span class="material-symbols-outlined text-[16px]">home</span> Beranda
      </a>
      <span class="material-symbols-outlined text-[14px]">chevron_right</span>
      <span class="text-on-surface font-semibold">Tentang Kami</span>
    </nav>
    <h1 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Tentang Toko Kelontong</h1>
  </div>
</section>

<!-- Section 1: Perjalanan & Cerita Toko (Story Hero) -->
<section class="max-w-container-max mx-auto px-gutter-desktop w-full py-space-3xl">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-2xl items-center">
    <!-- Left Narrative Content -->
    <div class="lg:col-span-7 flex flex-col items-start">
      <div class="inline-flex items-center gap-space-2xs px-space-sm py-space-2xs bg-secondary-container text-on-secondary-container rounded-full font-label-sm uppercase tracking-wider font-bold mb-space-sm">
        <span class="material-symbols-outlined text-[16px]">storefront</span>
        <span>Akar Nilai &amp; Perjalanan</span>
      </div>
      <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight leading-tight mb-space-md">
        Dari Sudut Klaten untuk Rindu Nusantara di Seluruh Belahan Dunia.
      </h2>
      <p class="font-body-lg text-body-lg text-primary font-semibold mb-space-sm leading-relaxed">
        Toko Kelontong adalah unit usaha ritel makanan khas Indonesia di bawah naungan resmi CV. Bertiga Tradexa.
      </p>
      <p class="font-body-md text-body-md text-on-surface-variant mb-space-md leading-relaxed">
        Perjalanan kami berakar sederhana dari sebuah toko kelontong di Klaten, Jawa Tengah — setia memenuhi kebutuhan harian bahan pangan tetangga dan masyarakat sekitar. Melalui interaksi hangat dari meja kasir kayu, kami menyaksikan kerinduan mendalam dari sanak famili dan diaspora Indonesia di luar negeri yang merindukan cita rasa tanah air: aroma seduhan kopi khas lereng gunung, renyahnya basreng kampung halaman, dan racikan rempah bumbu dapur otentik.
      </p>
      <p class="font-body-md text-body-md text-on-surface-variant mb-space-lg leading-relaxed">
        Menjawab rindu tersebut, kami mentransformasi kelontong tradisional menjadi pusat distribusi makanan Indonesia berkualitas ekspor. Kini kami melayani diaspora Indonesia, perantau, mahasiswa luar negeri, hingga penggemar kuliner Nusantara global dengan standar ketat dan pengepakan berkelas dunia.
      </p>
      <!-- Mission Quote Banner -->
      <div class="w-full bg-surface-container-low rounded-xl p-space-lg flex items-start gap-space-md shadow-sm relative overflow-hidden">
        <div class="w-1.5 h-full absolute left-0 top-0 bottom-0 bg-primary"></div>
        <span class="material-symbols-outlined text-primary text-[36px] shrink-0 opacity-80">format_quote</span>
        <div class="flex flex-col">
          <p class="font-title-lg text-title-lg text-on-surface font-bold italic tracking-tight">
            “Misi kami sederhana: membuat rasa rumah bisa dinikmati di mana pun.”
          </p>
          <span class="font-label-md text-label-md text-on-surface-variant mt-space-2xs">
            — Komitmen CV. Bertiga Tradexa kepada setiap perantau Indonesia
          </span>
        </div>
      </div>
    </div>
    <!-- Right Visual Grid (Authentic Store & Export Grade Packing) -->
    <div class="lg:col-span-5 flex flex-col gap-space-md">
      <!-- Main Shop Visual -->
      <div class="relative rounded-xl overflow-hidden bg-surface-container shadow-md group">
        <img alt="Suasana Toko Kelontong Tradisional di Klaten" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500" src="{{ asset('images/stitch_toko_klaten.jpg') }}"/>
        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-on-surface/90 via-on-surface/40 to-transparent p-space-md text-surface">
          <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary-fixed font-bold">Akar Tradisi</span>
          <p class="font-title-md text-title-md font-semibold text-surface">Toko Ritel Fisik Klaten, Jawa Tengah</p>
        </div>
      </div>
      <!-- Packing & Shipping Showcase Card -->
      <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md">
        <img alt="Standardisasi Pengepakan Ekspor Toko Kelontong" class="w-24 h-24 rounded-lg object-cover shrink-0" src="{{ asset('images/stitch_packaging_box.jpg') }}"/>
        <div class="flex flex-col">
          <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider flex items-center gap-1">
            <span class="material-symbols-outlined text-[14px]">package_2</span> Standar Ekspor Aman
          </span>
          <h4 class="font-title-md text-title-md text-on-surface font-semibold mt-0.5">Pengepakan Kedap Udara</h4>
          <p class="font-body-sm text-body-sm text-on-surface-variant leading-snug mt-1">
            Setiap produk dikurasi higienis dan disegel kedap udara dengan bantalan tebal untuk pengiriman antar benua.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Legalitas Resmi (Kredibilitas Bisnis & Ekspor) -->
<section class="w-full bg-surface-container-low py-space-2xl">
  <div class="max-w-container-max mx-auto px-gutter-desktop">
    <div class="bg-surface-container-lowest rounded-xl p-space-lg md:p-space-xl shadow-md">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
        <div class="lg:col-span-5 flex flex-col items-start">
          <div class="inline-flex items-center gap-1 text-secondary font-label-sm uppercase tracking-wider font-bold mb-space-2xs">
            <span class="material-symbols-outlined text-[18px]">verified_user</span> Transparansi &amp; Kepatuhan Hukum
          </div>
          <h3 class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">
            Legalitas Resmi Perusahaan
          </h3>
          <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs leading-relaxed">
            Kepercayaan pelanggan dan mitra internasional dibangun di atas fondasi legalitas yang tertib, terdaftar secara sah pada otoritas Republik Indonesia.
          </p>
        </div>
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-space-md">
          <!-- Entitas Bisnis -->
          <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col justify-between">
            <div>
              <span class="material-symbols-outlined text-primary text-[24px] mb-space-xs">corporate_fare</span>
              <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-bold">Badan Usaha</span>
              <p class="font-title-md text-title-md text-on-surface font-bold mt-1">CV. Bertiga Tradexa</p>
            </div>
            <span class="font-label-sm text-label-sm text-secondary font-semibold mt-space-sm flex items-center gap-1">
              <span class="material-symbols-outlined text-[14px]">check_circle</span> Akta Notaris Sah
            </span>
          </div>
          <!-- NPWP Terdaftar -->
          <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col justify-between">
            <div>
              <span class="material-symbols-outlined text-primary text-[24px] mb-space-xs">badge</span>
              <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-bold">Nomor Pokok Wajib Pajak</span>
              <p class="font-title-md text-title-md text-on-surface font-bold mt-1 tracking-tight">41.890.342.1-525.000</p>
            </div>
            <span class="font-label-sm text-label-sm text-secondary font-semibold mt-space-sm flex items-center gap-1">
              <span class="material-symbols-outlined text-[14px]">check_circle</span> NPWP Aktif &amp; Valid
            </span>
          </div>
          <!-- Domisili Resmi -->
          <div class="bg-surface-container-low p-space-md rounded-lg flex flex-col justify-between">
            <div>
              <span class="material-symbols-outlined text-primary text-[24px] mb-space-xs">location_city</span>
              <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider block font-bold">Alamat Terdaftar</span>
              <p class="font-body-sm text-body-sm text-on-surface font-medium mt-1 leading-snug">
                Pusat Distribusi Klaten, Jawa Tengah, Indonesia 57411
              </p>
            </div>
            <span class="font-label-sm text-label-sm text-secondary font-semibold mt-space-sm flex items-center gap-1">
              <span class="material-symbols-outlined text-[14px]">check_circle</span> Terverifikasi Sesuai NPWP
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
      <span>Prinsip Layanan Kami</span>
    </div>
    <h3 class="font-headline-lg text-headline-lg text-on-surface font-semibold">
      Tiga Nilai yang Menjaga Keaslian Rasa
    </h3>
    <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
      Membawa kehangatan pelayanan toko kelontong tradisional ke dalam ekosistem perdagangan modern berdaya saing tinggi.
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
    <!-- Nilai 1: Kualitas Produk -->
    <div class="bg-surface-container-lowest rounded-xl p-space-xl shadow-sm hover:shadow-md transition-shadow flex flex-col items-start relative overflow-hidden group">
      <div class="w-14 h-14 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center mb-space-md group-hover:scale-110 transition-transform">
        <span class="material-symbols-outlined text-[32px]">workspace_premium</span>
      </div>
      <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1">Pilar 01</span>
      <h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
        Kualitas Produk Terbaik
      </h4>
      <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
        Kurasi ketat komoditas pilihan, bumbu olahan matang, dan camilan lokal yang memenuhi standar higienitas ekspor dan ketahanan simpan internasional.
      </p>
      <div class="mt-space-md pt-space-sm w-full flex items-center gap-space-xs text-secondary font-label-md text-label-md font-semibold">
        <span class="material-symbols-outlined text-[18px]">verified</span> 100% Asli Nusantara
      </div>
    </div>
    <!-- Nilai 2: Harga Wajar & Transparan -->
    <div class="bg-surface-container-lowest rounded-xl p-space-xl shadow-sm hover:shadow-md transition-shadow flex flex-col items-start relative overflow-hidden group">
      <div class="w-14 h-14 rounded-xl bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center mb-space-md group-hover:scale-110 transition-transform">
        <span class="material-symbols-outlined text-[32px]">handshake</span>
      </div>
      <span class="font-label-sm text-label-sm text-tertiary font-bold uppercase tracking-wider mb-1">Pilar 02</span>
      <h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
        Harga Wajar &amp; Transparan
      </h4>
      <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
        Standar harga grosir &amp; eceran wajar tanpa biaya tersembunyi. Simulasi ongkos kirim dihitung transparan berdasarkan berat bersih dan regulasi pabean tujuan.
      </p>
      <div class="mt-space-md pt-space-sm w-full flex items-center gap-space-xs text-tertiary font-label-md text-label-md font-semibold">
        <span class="material-symbols-outlined text-[18px]">payments</span> Jujur &amp; Kompetitif
      </div>
    </div>
    <!-- Nilai 3: Pelayanan Ramah & Personal -->
    <div class="bg-surface-container-lowest rounded-xl p-space-xl shadow-sm hover:shadow-md transition-shadow flex flex-col items-start relative overflow-hidden group">
      <div class="w-14 h-14 rounded-xl bg-primary-fixed text-on-primary-fixed flex items-center justify-center mb-space-md group-hover:scale-110 transition-transform">
        <span class="material-symbols-outlined text-[32px]">sentiment_satisfied</span>
      </div>
      <span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider mb-1">Pilar 03</span>
      <h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
        Pelayanan Ramah &amp; Personal
      </h4>
      <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
        Semangat toko kelontong di mana setiap pembeli dikenal layaknya tetangga sendiri. Layanan pelanggan kami sigap membantu konsultasi produk, pemilihan ekspedisi tercepat, hingga penyesuaian pesanan khusus.
      </p>
      <div class="mt-space-md pt-space-sm w-full flex items-center gap-space-xs text-primary font-label-md text-label-md font-semibold">
        <span class="material-symbols-outlined text-[18px]">chat</span> Respons Cepat via WhatsApp
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
          <span class="material-symbols-outlined text-[16px]">pin_drop</span> Titik Temu Fisik
        </div>
        <h3 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">
          Kunjungi Toko Kami
        </h3>
        <p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-xl">
          Ingin belanja langsung, memilih sendiri oleh-oleh favorit, atau berkonsultasi rencana titipan ekspor? Pintu gerai fisik kami selalu terbuka hangat menyambut Anda.
        </p>
      </div>
      <div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md bg-surface-container-high px-space-md py-space-xs rounded-lg self-start md:self-auto">
        <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
        <span>Outlet Pusat Beroperasi Normal</span>
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
            Gerai Pusat &amp; Gudang
          </div>
        </div>
        <!-- Outlet Details Body -->
        <div class="p-space-lg md:p-space-xl md:w-7/12 flex flex-col justify-between">
          <div>
            <h4 class="font-headline-sm text-headline-sm text-on-surface font-bold">
              Toko Kelontong — Klaten (Pusat)
            </h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
              Pusat kurasi ritel, stok komoditas makanan kering, dan layanan pengemasan paket luar negeri.
            </p>
            <!-- Operational Metadata List -->
            <div class="mt-space-md flex flex-col gap-space-sm">
              <!-- Location -->
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center shrink-0 mt-0.5 text-primary">
                  <span class="material-symbols-outlined text-[20px]">location_on</span>
                </div>
                <div>
                  <span class="font-label-sm text-label-sm text-on-surface-variant block font-bold uppercase tracking-wider">Lokasi Outlet</span>
                  <span class="font-body-md text-body-md text-on-surface font-medium leading-snug">
                    Griya Trucuk Indah No. 53, Jambon, Sabrang Lor, Trucuk, Klaten, Jawa Tengah 57467
                  </span>
                </div>
              </div>
              <!-- Operating Hours -->
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center shrink-0 mt-0.5 text-secondary">
                  <span class="material-symbols-outlined text-[20px]">schedule</span>
                </div>
                <div>
                  <span class="font-label-sm text-label-sm text-on-surface-variant block font-bold uppercase tracking-wider">Jam Operasional</span>
                  <span class="font-body-md text-body-md text-on-surface font-medium">
                    Senin – Sabtu: 08.00 – 20.00 WIB
                  </span>
                  <span class="font-body-sm text-body-sm text-on-surface-variant block">(Minggu &amp; Libur Nasional: Konfirmasi Tim via WA)</span>
                </div>
              </div>
              <!-- Store Contact Person -->
              <div class="flex items-start gap-space-sm">
                <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center shrink-0 mt-0.5 text-tertiary">
                  <span class="material-symbols-outlined text-[20px]">contact_phone</span>
                </div>
                <div>
                  <span class="font-label-sm text-label-sm text-on-surface-variant block font-bold uppercase tracking-wider">Layanan Pelanggan &amp; Store Direct</span>
                  <div class="flex flex-wrap gap-x-space-md gap-y-space-2xs mt-1 font-body-sm text-body-sm text-on-surface">
                    <a class="hover:text-primary transition-colors flex items-center gap-1 font-semibold" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode('Halo Pak Budi, saya ingin bertanya seputar produk Toko Kelontong') }}" target="_blank" rel="noopener noreferrer">
                      <span class="material-symbols-outlined text-[15px] text-secondary">chat</span> Pak Budi
                    </a>
                    <span class="text-surface-dim">·</span>
                    <a class="hover:text-primary transition-colors flex items-center gap-1 font-semibold" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode('Halo Ivan, saya ingin bertanya seputar pengiriman Toko Kelontong') }}" target="_blank" rel="noopener noreferrer">
                      <span class="material-symbols-outlined text-[15px] text-secondary">chat</span> Ivan
                    </a>
                    <span class="text-surface-dim">·</span>
                    <a class="hover:text-primary transition-colors flex items-center gap-1 font-semibold" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode('Halo Bu Tesa, saya ingin bertanya seputar pesanan Toko Kelontong') }}" target="_blank" rel="noopener noreferrer">
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
              Buka di Google Maps
            </a>
            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface px-space-md py-space-sm rounded-lg font-label-lg text-label-lg transition-colors" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode('Halo Toko Kelontong, saya ingin berkunjung ke outlet Klaten') }}" rel="noopener noreferrer" target="_blank">
              <span class="material-symbols-outlined text-[18px] text-secondary">support_agent</span>
              Tanya Stok Outlet
            </a>
          </div>
        </div>
      </div>
      <!-- Right Side: Store Map Card & Upcoming Branch Slot -->
      <div class="lg:col-span-4 flex flex-col gap-space-md">
        <!-- Google Maps Static View Target -->
        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-md flex flex-col">
          <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider mb-2 flex items-center gap-1">
            <span class="material-symbols-outlined text-[16px]">explore</span> Navigasi Rute
          </span>
          <div class="w-full h-44 rounded-lg bg-cover bg-center shadow-inner relative flex items-center justify-center overflow-hidden" style="background-image: url('{{ asset('images/stitch_map_klaten.jpg') }}')">
            <div class="bg-surface/90 backdrop-blur-sm px-space-sm py-space-2xs rounded-full shadow flex items-center gap-1 text-on-surface font-label-sm text-label-sm">
              <span class="material-symbols-outlined text-primary text-[16px]">location_on</span> Area Klaten Kota
            </div>
          </div>
          <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
            Lokasi strategis di Klaten, mudah diakses roda dua maupun kendaraan angkut kargo.
          </p>
        </div>
        <!-- Upcoming Branch Expansion Placeholder -->
        <div class="bg-surface-container-low p-space-md rounded-xl flex items-start gap-space-sm">
          <div class="w-10 h-10 rounded-lg bg-secondary/10 text-secondary flex items-center justify-center shrink-0 mt-0.5">
            <span class="material-symbols-outlined text-[22px]">add_business</span>
          </div>
          <div>
            <span class="font-title-md text-title-md text-on-surface font-semibold block">Ekspansi Cabang Baru</span>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5 leading-snug">
              Kami terus bersiap memperluas hub fisik ke kota-kota strategis di Jawa &amp; Bali untuk mempermudah distribusi lokal Anda.
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
          <span>Mampir Langsung atau Kirim ke Mancanegara</span>
        </div>
        <h3 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight leading-tight mb-space-xs">
          Rindu Kuliner Rumah? Kami Hadir Membawa Hangatnya Indonesia.
        </h3>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
          Silakan mampir ke gerai kami di Klaten untuk berbelanja langsung, atau pesan online dari belahan dunia mana pun. Tim kami siap mengemas dan mengirimkan pesanan Anda dengan aman sampai ke depan pintu.
        </p>
      </div>
      <!-- CTA Action Buttons -->
      <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-space-sm w-full">
        <a class="w-full inline-flex items-center justify-center gap-space-xs bg-primary hover:bg-primary-container text-on-primary py-space-sm px-space-lg rounded-xl font-label-lg text-label-lg transition-all shadow-md text-center" href="{{ route('products') }}">
          <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
          Jelajahi Katalog Produk
        </a>
        <a class="w-full inline-flex items-center justify-center gap-space-xs bg-secondary hover:bg-on-secondary-container text-on-secondary py-space-sm px-space-lg rounded-xl font-label-lg text-label-lg transition-all shadow-sm text-center" href="https://wa.me/{{ config('toko.wa_number') }}?text={{ urlencode('Halo Toko Kelontong, saya ingin konsultasi pemesanan makanan khas Indonesia') }}" rel="noopener noreferrer" target="_blank">
          <span class="material-symbols-outlined text-[20px]">chat</span>
          Konsultasi Ekspor via WhatsApp
        </a>
        <a class="w-full inline-flex items-center justify-center gap-space-2xs text-on-surface-variant hover:text-primary font-label-md text-label-md transition-colors py-1 text-center" href="{{ route('contact') }}">
          Lihat kontak lengkap &amp; form pesan <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
        </a>
      </div>
    </div>
  </div>
</section>
</div>
@endsection
