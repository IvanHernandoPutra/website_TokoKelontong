import Link from 'next/link';
import Header from '@/components/Header';
import Footer from '@/components/Footer';

export const metadata = {
  title: 'Alur Pemesanan & Standar Pengiriman — Toko Kelontongku',
  description: 'Alur jelas pemesanan dari Klaten: pilih produk, konfirmasi WhatsApp, quality control & packing kardus corrugated, hingga kirim ke tujuan.',
};

const FLOW_STEPS = [
  {
    step: '01',
    title: 'Pilih Produk',
    subtitle: 'Katalog & Jumlah',
    desc: 'Buka katalog dan pilih camilan atau bumbu yang diinginkan. Tersedia paket eceran maupun kuantiti karton grosir.',
    icon: 'format_list_bulleted',
    badge: 'LANGKAH AWAL',
  },
  {
    step: '02',
    title: 'Chat WhatsApp CS',
    subtitle: 'Konfirmasi Stok & Ongkir',
    desc: 'Klik "Pesan Sekarang" untuk terhubung langsung ke CS Klaten. Kami hitungkan total berat volume dan diskon ongkir.',
    icon: 'chat',
    badge: 'RESPON CEPAT',
  },
  {
    step: '03',
    title: 'Pembayaran Aman',
    subtitle: 'Transfer Bank / Tunai',
    desc: 'Lakukan pembayaran via transfer bank resmi atau tunai jika ambil langsung di gerai kami di Klaten.',
    icon: 'account_balance_wallet',
    badge: 'TRANSPARAN',
  },
  {
    step: '04',
    title: 'QC & Kemas Higienis',
    subtitle: 'Kardus Double-Wall',
    desc: 'Pengecekan tanggal expired, penyegelan kedap udara, bubble wrap, dan packing kardus tebal tahan tumpuk.',
    icon: 'inventory_2',
    badge: 'FOOD GRADE',
  },
  {
    step: '05',
    title: 'Kirim & Lacak Resi',
    subtitle: 'Reguler, Kargo, Ekspor',
    desc: 'Pesanan dijemput ekspedisi atau kargo rekanan. Nomor resi langsung dibagikan untuk pelacakan real-time.',
    icon: 'local_shipping',
    badge: 'AMAN SAMPAI TUJUAN',
  },
];

const PACKAGING_SPECS = [
  {
    title: 'Kardus Double-Wall Tebal',
    tag: 'FLUTE K150/M125/K150',
    detail: 'Menahan beban tumpukan kargo logistik tanpa meremukkan keripik dan biskuit.',
  },
  {
    title: 'Segel Kedap Udara & Zipper',
    tag: 'MOISTURE BARRIER',
    detail: 'Menjaga kerenyahan bumbu dan makanan kering tetap gurih sampai di tangan pelanggan.',
  },
  {
    title: 'Label Expired & Izin Edar',
    tag: 'P-IRT & HALAL RESMI',
    detail: 'Masa simpan minimal 6–12 bulan ke depan, aman untuk konsumsi keluarga maupun display warung.',
  },
];

export default function ShippingPage() {
  return (
    <div className="min-h-screen flex flex-col bg-brand-light text-brand-ink">
      <Header cartCount={1} />

      <main className="min-h-[80vh]">
        {/* HEADER SECTION - CENTERED */}
        <section className="bg-surface-card py-14 sm:py-16 px-4 border-b border-line text-center">
          <div className="max-w-[760px] mx-auto flex flex-col items-center">
            {/* Breadcrumb */}
            <nav className="inline-flex items-center gap-2 text-xs font-semibold text-brand-muted mb-4" aria-label="Breadcrumb">
              <Link href="/" className="hover:text-brand-primary dark:hover:text-brand-primary transition-colors">
                Beranda
              </Link>
              <span className="material-symbols-outlined text-xs">chevron_right</span>
              <span className="text-brand-ink font-bold">Standar Pengiriman</span>
            </nav>

            

            <h1 className="font-display text-[clamp(2.4rem,5.5vw,4.2rem)] my-4 font-extrabold leading-[1] text-brand-ink">
              Dari Toko di Klaten Sampai ke Meja Anda
            </h1>

            <p className="text-brand-muted text-sm sm:text-base leading-relaxed max-w-[620px]">
              Setiap pesanan kami tangani dengan alur terstruktur: mulai dari konsultasi stok via WhatsApp, pemilihan kemasan pelindung ekstra tebal, hingga pengiriman terpercaya.
            </p>
          </div>
        </section>

        {/* FLOW DIAGRAM SECTION - CENTERED DIAGRAM */}
        <section className="max-w-[1180px] mx-auto px-4 sm:px-8 py-16 sm:py-20">
          <div className="text-center max-w-[600px] mx-auto mb-12 sm:mb-16">
            <span className="text-[11px] font-extrabold tracking-widest uppercase text-brand-accent">
              DIAGRAM ALUR PELANGGAN
            </span>
            <h2 className="font-display text-[clamp(1.8rem,3.5vw,2.8rem)] font-extrabold text-brand-ink mt-1">
              5 Tahap Sederhana Pemesanan
            </h2>
            <p className="text-xs sm:text-sm text-brand-muted mt-2">
              Tidak ribet, transparan, dan selalu didampingi staf toko kami.
            </p>
          </div>

          {/* DESKTOP DIAGRAM FLOW (HORIZONTAL CONNECTED NODES) */}
          <div className="hidden lg:grid grid-cols-5 gap-3 relative items-stretch">
            {/* Connecting horizontal rail behind cards */}
            <div
              className="absolute top-[48px] left-[10%] right-[10%] h-[3px] bg-line z-0"
              aria-hidden="true"
            />

            {FLOW_STEPS.map((s, idx) => (
              <div
                key={idx}
                className="relative z-10 flex flex-col items-center text-center p-5 rounded-3xl border border-line bg-surface-card/75 hover:bg-surface-card transition-all duration-300 hover:shadow-lg group"
              >
                {/* Node Circle */}
                <div className="relative mb-4">
                  <div className="w-14 h-14 rounded-full bg-brand-light border-2 border-brand-accent group-hover:bg-brand-accent group-hover:text-white transition-colors flex items-center justify-center text-brand-ink shadow-md">
                    <span className="material-symbols-outlined text-2xl">{s.icon}</span>
                  </div>
                  <span className="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-brand-dark text-white text-[9px] font-extrabold grid place-items-center">
                    {s.step}
                  </span>
                </div>

                <span className="text-[9px] font-extrabold uppercase tracking-wider text-brand-muted mb-1">
                  {s.badge}
                </span>

                <h3 className="text-sm font-extrabold text-brand-ink mb-0.5">
                  {s.title}
                </h3>
                <small className="text-[11px] font-bold text-brand-accent mb-2.5">
                  {s.subtitle}
                </small>

                <p className="text-[11px] text-brand-muted leading-relaxed mt-auto">
                  {s.desc}
                </p>
              </div>
            ))}
          </div>

          {/* MOBILE & TABLET FLOW (VERTICAL STEPPER WITH CONNECTING LINE) */}
          <div className="lg:hidden relative max-w-lg mx-auto">
            {/* Vertical connector line */}
            <div
              className="absolute top-6 bottom-6 left-[27px] sm:left-[31px] w-[3px] bg-line z-0"
              aria-hidden="true"
            />

            <div className="space-y-6">
              {FLOW_STEPS.map((s, idx) => (
                <div key={idx} className="relative z-10 flex items-start gap-4 sm:gap-5">
                  {/* Step node */}
                  <div className="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-brand-light border-2 border-brand-accent shrink-0 grid place-items-center text-brand-ink shadow-md">
                    <span className="material-symbols-outlined text-2xl">{s.icon}</span>
                  </div>

                  {/* Card Content */}
                  <div className="flex-1 p-5 rounded-2xl border border-line bg-surface-card/80">
                    <div className="flex items-center justify-between gap-2 mb-1.5">
                      <span className="text-[9px] font-extrabold uppercase px-2 py-0.5 rounded-full bg-brand-dark text-white">
                        Tahap {s.step}
                      </span>
                      <span className="text-[9px] font-bold uppercase text-brand-accent">
                        {s.badge}
                      </span>
                    </div>
                    <h3 className="text-sm sm:text-base font-extrabold text-brand-ink">
                      {s.title}
                    </h3>
                    <div className="text-[11px] font-bold text-brand-secondary mb-2">
                      {s.subtitle}
                    </div>
                    <p className="text-xs text-brand-muted leading-relaxed">
                      {s.desc}
                    </p>
                  </div>
                </div>
              ))}
            </div>
          </div>

          {/* SPECIFICATION COMPARISON CARDS - CENTERED CONTAINER */}
          <div className="mt-16 sm:mt-24 pt-12 border-t border-line">
            <div className="text-center max-w-[620px] mx-auto mb-10">
              <span className="text-[11px] font-extrabold tracking-widest uppercase text-brand-secondary">
                KEAMANAN PAKET MAKANAN
              </span>
              <h2 className="font-display text-[clamp(1.7rem,3vw,2.4rem)] font-extrabold text-brand-ink mt-1">
                Standar Proteksi Kami
              </h2>
              <p className="text-xs sm:text-sm text-brand-muted mt-2">
                Makanan kering dan bumbu memerlukan perhatian khusus agar tidak remuk atau bocor dalam perjalanan jauh.
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-3 gap-5 max-w-4xl mx-auto">
              {PACKAGING_SPECS.map((spec, i) => (
                <div
                  key={i}
                  className="p-6 rounded-2xl border border-line bg-surface-card/60 flex flex-col justify-between text-center items-center"
                >
                  <span className="px-2.5 py-1 rounded-full bg-emerald-600 text-white text-[9px] font-extrabold uppercase tracking-wide mb-3">
                    {spec.tag}
                  </span>
                  <h3 className="text-sm font-extrabold text-brand-ink mb-2">
                    {spec.title}
                  </h3>
                  <p className="text-xs text-brand-muted leading-relaxed">
                    {spec.detail}
                  </p>
                </div>
              ))}
            </div>
          </div>

          {/* CALL TO ACTION - CENTERED CARD */}
          <div className="mt-14 max-w-3xl mx-auto p-8 sm:p-10 rounded-3xl bg-brand-dark text-white text-center flex flex-col items-center gap-5 shadow-2xl">
            <span className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accent/20 text-brand-accent text-[11px] font-extrabold uppercase tracking-widest">
              KONSULTASI EKSPEDISI GRATIS
            </span>
            <h2 className="font-display text-[clamp(1.8rem,3.2vw,2.6rem)] font-bold leading-tight max-w-xl text-white">
              Punya pesanan besar atau kiriman ke luar pulau?
            </h2>
            <p className="text-white/80 text-xs sm:text-sm max-w-lg leading-relaxed">
              Hubungi staf kami di Klaten. Kami bantu hitungkan kubikasi terbaik, pilih ekspedisi kargo termurah, dan siapkan surat jalan resmi.
            </p>
            <div className="flex flex-wrap items-center justify-center gap-3 pt-2">
              <a
                href="https://wa.me/62895385877877?text=Halo%20Toko%20Kelontongku%2C%20saya%20mau%20konsultasi%20pengiriman%20kargo%20dan%20ongkos%20kirim."
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex items-center gap-2 py-3 px-6 rounded-full bg-emerald-600 text-white text-xs font-extrabold hover:bg-emerald-500 transition-colors shadow-lg"
              >
                <span className="material-symbols-outlined text-base">chat</span>
                Konsultasi WhatsApp CS
              </a>
              <Link
                href="/produk"
                className="inline-flex items-center gap-1.5 py-3 px-6 rounded-full border border-white/20 text-white text-xs font-bold hover:bg-white/10 transition-colors"
              >
                Lihat Katalog Produk
              </Link>
            </div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
}
