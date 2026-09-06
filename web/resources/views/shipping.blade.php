@extends('layouts.app')

@section('title', 'Cara Pemesanan — Toko Kelontong')

@section('content')
<div class="flex flex-col w-full">
<!-- Top Banner / Headline Overview -->
<section class="w-full bg-surface-container-low py-space-3xl px-gutter-desktop">
  <div class="max-w-container-max mx-auto flex flex-col md:flex-row items-center justify-between gap-space-2xl">
    <div class="max-w-2xl flex flex-col items-start gap-space-sm">
      <div class="inline-flex items-center gap-space-2xs px-space-sm py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm uppercase tracking-wider font-bold">
        <span class="material-symbols-outlined text-[15px]">shopping_cart</span>
        Belanja Gampang, Pelayanan Hangat
      </div>
      <h1 class="font-display text-display text-on-surface tracking-tight leading-tight">
        Cara Pemesanan
      </h1>
      <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
        Memesan di Toko Kelontong semudah ngobrol dengan tetangga. Lihat produk, chat kami via WhatsApp, dan pesanan langsung diproses dengan harga yang jujur.
      </p>
      <div class="flex flex-wrap items-center gap-space-md pt-space-xs font-label-md text-label-md text-on-surface-variant">
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-secondary text-[18px]">verified</span> Produk Kurasi Langsung</span>
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-primary text-[18px]">check_circle</span> Harga Transparan</span>
        <span class="flex items-center gap-1.5"><span class="material-symbols-outlined text-tertiary text-[18px]">security</span> Kemasan Aman &amp; Higienis</span>
      </div>
    </div>
    <!-- Quick Metrics Decorative Visual -->
    <div class="w-full md:w-auto shrink-0">
      <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-md flex flex-col gap-space-md min-w-[280px]">
        <div class="flex items-center justify-between gap-space-md pb-space-xs">
          <span class="font-title-md text-title-md text-on-surface font-semibold">Layanan Pesanan</span>
          <span class="material-symbols-outlined text-secondary text-[24px]">verified_user</span>
        </div>
        <div class="grid grid-cols-2 gap-space-md">
          <div class="flex flex-col bg-surface-container-low p-space-sm rounded-lg">
            <span class="font-display-mobile text-display-mobile text-primary font-bold">1–2</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Hari Proses Pesanan</span>
          </div>
          <div class="flex flex-col bg-surface-container-low p-space-sm rounded-lg">
            <span class="font-display-mobile text-display-mobile text-secondary font-bold">08–20</span>
            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">WIB Setiap Hari</span>
          </div>
        </div>
        <div class="flex items-center gap-space-xs pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
          <span class="material-symbols-outlined text-[16px] text-primary">storefront</span>
          <span>Siap melayani pesanan eceran &amp; grosir</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: 3 Langkah Mudah -->
<section class="w-full py-space-4xl px-gutter-desktop bg-surface">
  <div class="max-w-container-max mx-auto flex flex-col gap-space-2xl">
    <div class="flex flex-col items-center text-center max-w-2xl mx-auto gap-space-2xs">
      <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">Semudah Itu</span>
      <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">3 Langkah Mudah Berbelanja</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">
        Tidak perlu aplikasi, tidak perlu ribet. Cukup chat, bayar, dan pesanan Anda siap diambil.
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
        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Pilih Produk</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-space-2xs">
          Jelajahi katalog kami — dari camilan renyah, bumbu dapur, hingga stok grosir. Semua produk sudah dikurasi langsung dari mitra UMKM.
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
        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Chat via WhatsApp</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-space-2xs">
          Klik tombol pesan, sebutkan produk dan jumlah yang diinginkan. Admin kami bantu hitung total, stok, dan semua detail pesanan Anda.
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
        <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Bayar &amp; Ambil Pesanan</h3>
        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mt-space-2xs">
          Pembayaran via transfer bank atau tunai. Pesanan siap diambil di gerai kami — detailnya diatur langsung saat chat dengan admin.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section: Dua Cara Berbelanja -->
<section class="w-full py-space-4xl px-gutter-desktop bg-surface-container-low">
  <div class="max-w-container-max mx-auto flex flex-col gap-space-2xl">
    <div class="flex flex-col items-center text-center max-w-2xl mx-auto gap-space-2xs">
      <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">Pilih Yang Nyaman</span>
      <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">Dua Cara Berbelanja</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">
        Belanja dari rumah atau mampir langsung — keduanya sama mudahnya.
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
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Pesan Online via WhatsApp</h3>
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Cepat, Tanpa Ribet</span>
              </div>
            </div>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Pilih produk dari katalog, lalu chat admin. Kami bantu cek stok, hitung harga, dan atur segala detail pesanan Anda — semua dalam satu chat.
          </p>
          <div class="flex flex-col gap-space-sm bg-surface-container-low p-space-md rounded-lg">
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-secondary text-[18px]">schedule</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Balasan Cepat</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Admin aktif setiap hari 08.00–20.00 WIB.</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-primary text-[18px]">sell</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Harga Eceran &amp; Grosir</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Harga langsung dari admin, transparan tanpa biaya tersembunyi.</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-tertiary text-[18px]">help</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Bebas Tanya Dulu</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Belum yakin? Tanya produk, harga, atau rekomendasi dulu saja.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-space-lg pt-space-md flex items-center justify-between">
          <span class="font-label-md text-label-md text-on-surface-variant font-medium">Transfer Bank &amp; Tunai</span>
          <a class="inline-flex items-center gap-space-2xs text-secondary font-title-md hover:text-on-secondary-fixed-variant transition-colors" href="#form-pesan">
            Isi Form Pesanan <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
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
                <h3 class="font-headline-md text-headline-md text-on-surface font-semibold">Belanja Langsung di Gerai</h3>
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Mampir, Lihat, Beli</span>
              </div>
            </div>
          </div>
          <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Ingin melihat produk langsung? Mampir ke gerai pusat kami di Klaten. Bisa lihat, pegang, dan cek kualitas produk sebelum membeli.
          </p>
          <div class="flex flex-col gap-space-sm bg-surface-container-low p-space-md rounded-lg">
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-secondary text-[18px]">location_on</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Lokasi Gerai</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Klaten, Jawa Tengah — detail alamat lengkap ada di halaman Toko Kami.</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Jam Buka</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Setiap hari, 08.00–20.00 WIB.</p>
              </div>
            </div>
            <div class="flex items-start gap-space-sm">
              <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-tertiary text-[18px]">payments</span>
              </div>
              <div>
                <h4 class="font-title-md text-title-md text-on-surface font-semibold">Bayar Tunai di Tempat</h4>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Praktis — bayar langsung saat berbelanja di gerai.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-space-lg pt-space-md flex items-center justify-between">
          <span class="font-label-md text-label-md text-on-surface-variant font-medium">Parkir Luas, Mudah Diakses</span>
          <a class="inline-flex items-center gap-space-2xs text-secondary font-title-md hover:text-on-secondary-fixed-variant transition-colors" href="{{ route('stores') }}">
            Lihat Toko Kami <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
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
      <span class="font-label-md text-label-md text-primary font-bold uppercase tracking-widest">Mulai Pesanan</span>
      <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">Isi Form, Lanjut Chat</h2>
      <p class="font-body-md text-body-md text-on-surface-variant">
        Isi singkat kebutuhan Anda — kami sambungkan langsung ke WhatsApp admin.
      </p>
    </div>
    <div class="max-w-2xl mx-auto w-full">
      <div class="bg-surface-container-lowest rounded-xl p-space-xl shadow-md flex flex-col gap-space-md">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
          <div class="flex flex-col gap-space-2xs">
            <label for="nama" class="font-label-md text-label-md text-on-surface font-bold">Nama</label>
            <input type="text" id="nama" placeholder="Nama Anda" class="w-full bg-surface-container-low rounded-lg px-space-md py-space-sm font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary" />
          </div>
          <div class="flex flex-col gap-space-2xs">
            <label for="kategori" class="font-label-md text-label-md text-on-surface font-bold">Kategori Produk</label>
            <select id="kategori" class="w-full bg-surface-container-low rounded-lg px-space-md py-space-sm font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary">
              <option value="">— Pilih kategori —</option>
              <option value="Camilan &amp; Kerupuk">Camilan &amp; Kerupuk</option>
              <option value="Bumbu &amp; Sambal">Bumbu &amp; Sambal</option>
              <option value="Kopi &amp; Minuman">Kopi &amp; Minuman</option>
              <option value="Sembako &amp; Kebutuhan Dapur">Sembako &amp; Kebutuhan Dapur</option>
              <option value="Campuran / Belum Yakin">Campuran / Belum Yakin</option>
            </select>
          </div>
        </div>
        <div class="flex flex-col gap-space-2xs">
          <span class="font-label-md text-label-md text-on-surface font-bold">Skala Pembelian</span>
          <div class="grid grid-cols-3 gap-space-sm">
            <label class="flex items-center justify-center gap-space-2xs bg-surface-container-low rounded-lg px-space-sm py-space-sm font-body-md text-body-md text-on-surface cursor-pointer has-[:checked]:bg-secondary-container has-[:checked]:text-on-secondary-container transition-colors">
              <input type="radio" name="skala" value="Eceran (untuk sendiri)" class="accent-primary" checked /> Eceran
            </label>
            <label class="flex items-center justify-center gap-space-2xs bg-surface-container-low rounded-lg px-space-sm py-space-sm font-body-md text-body-md text-on-surface cursor-pointer has-[:checked]:bg-secondary-container has-[:checked]:text-on-secondary-container transition-colors">
              <input type="radio" name="skala" value="Sedang (untuk acara)" class="accent-primary" /> Sedang
            </label>
            <label class="flex items-center justify-center gap-space-2xs bg-surface-container-low rounded-lg px-space-sm py-space-sm font-body-md text-body-md text-on-surface cursor-pointer has-[:checked]:bg-secondary-container has-[:checked]:text-on-secondary-container transition-colors">
              <input type="radio" name="skala" value="Grosir (stok usaha)" class="accent-primary" /> Grosir
            </label>
          </div>
        </div>
        <div class="flex flex-col gap-space-2xs">
          <label for="catatan" class="font-label-md text-label-md text-on-surface font-bold">Catatan</label>
          <textarea id="catatan" rows="3" placeholder="Contoh: kerupuk tongkol 5 bungkus, sambal bawang 3 botol, kopi robusta 1 kg" class="w-full bg-surface-container-low rounded-lg px-space-md py-space-sm font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary resize-none"></textarea>
        </div>
        <button type="button" onclick="kirimPesan()" class="inline-flex items-center justify-center gap-space-2xs bg-secondary hover:bg-on-secondary-container text-on-secondary font-title-md px-space-lg py-space-md rounded-xl shadow-md transition-all text-center">
          <span class="material-symbols-outlined text-[20px]">chat</span>
          Kirim via WhatsApp
        </button>
        <p id="hasil-catatan" class="font-body-sm text-body-sm text-on-surface-variant text-center hidden">
          Tab WhatsApp baru terbuka? Tinggal tekan kirim — admin kami segera membalas.
        </p>
      </div>
    </div>
  </div>
</section>
</div>

<script>
  function kirimPesan() {
    const nama = document.getElementById('nama').value.trim();
    const kategori = document.getElementById('kategori').value;
    const skala = document.querySelector('input[name="skala"]:checked')?.value || '';
    const catatan = document.getElementById('catatan').value.trim();
    const waNumber = '{{ config('toko.wa_number') }}';

    let msg = 'Halo Toko Kelontong, saya ingin memesan.';
    if (nama) msg += `\nNama: ${nama}`;
    if (kategori) msg += `\nKategori: ${kategori}`;
    if (skala) msg += `\nSkala: ${skala}`;
    if (catatan) msg += `\nCatatan: ${catatan}`;

    window.open(`https://wa.me/${waNumber}?text=${encodeURIComponent(msg)}`, '_blank', 'noopener');
    document.getElementById('hasil-catatan').classList.remove('hidden');
  }
</script>
@endsection
