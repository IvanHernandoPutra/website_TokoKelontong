import Link from 'next/link';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import { STORE_PHONE_DISPLAY, STORE_PHONE_NUMBER } from '@/lib/whatsapp';

export const metadata = {
  title: 'Kontak & Lokasi - Toko Kelontongku',
  description: 'Hubungi Toko Kelontongku dan lokasi kargo Yasui Cargo di Klaten, Jawa Tengah.',
};

export default function ContactPage() {
  const directWaUrl = `https://wa.me/${STORE_PHONE_NUMBER}?text=${encodeURIComponent('Halo Toko Kelontongku, saya ingin tanya informasi produk dan pengiriman.')}`;
  const gmapsUrl = 'https://www.google.com/maps/search/?api=1&query=-7.703234477000717,110.65879094815047';

  return (
    <div className="min-h-screen flex flex-col bg-brand-light text-brand-ink">
      <Header />

      <main className="flex-1 max-w-[1140px] w-full mx-auto px-4 sm:px-6 py-10 sm:py-14">
        {/* BREADCRUMB */}
        <nav className="inline-flex items-center gap-2 text-xs text-brand-muted mb-4" aria-label="Breadcrumb">
          <Link href="/" className="hover:text-brand-primary dark:hover:text-brand-primary transition-colors">
            Beranda
          </Link>
          <span className="material-symbols-outlined text-xs">chevron_right</span>
          <span className="text-brand-ink font-semibold">Kontak</span>
        </nav>

        {/* PAGE TITLE */}
        <div className="max-w-xl mb-8 sm:mb-10">
          <h1 className="font-display text-3xl sm:text-4xl font-extrabold tracking-tight text-brand-ink">
            Kontak &amp; Lokasi
          </h1>
          <p className="text-brand-muted text-sm sm:text-base mt-2 leading-relaxed">
            Untuk tanya stok, order eceran, grosir warung, atau pengiriman kargo, langsung hubungi kami via WhatsApp atau kunjungi lokasi toko.
          </p>
        </div>

        {/* 2-COLUMN: CONTACT DETAILS & MAP */}
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
          {/* CONTACT INFO (5 COLS) */}
          <div className="lg:col-span-5 space-y-5">
            {/* WHATSAPP ACTION CARD */}
            <div className="p-6 rounded-2xl border border-line bg-surface-card">
              <div className="text-xs font-bold uppercase tracking-wider text-brand-muted mb-1">
                Layanan Pelanggan
              </div>
              <h2 className="text-xl font-bold text-brand-ink mb-1">
                WhatsApp CS
              </h2>
              <p className="text-xs text-brand-muted mb-4">
                Respon cepat untuk pemesanan barang dan cek ongkos kirim.
              </p>
              <div className="text-base font-bold text-brand-ink mb-4">
                {STORE_PHONE_DISPLAY}
              </div>
              <a
                href={directWaUrl}
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex items-center justify-center gap-2 w-full py-3 px-5 rounded-full bg-emerald-600 text-white text-xs font-bold hover:bg-emerald-500 transition-colors cursor-pointer"
              >
                <span className="material-symbols-outlined text-base">chat</span>
                Chat via WhatsApp
              </a>
            </div>

            {/* LOCATION DETAILS */}
            <div className="p-6 rounded-2xl border border-line bg-surface-card space-y-4 text-xs">
              <div>
                <div className="font-bold text-brand-muted uppercase tracking-wider mb-1">
                  Alamat &amp; Titik Kargo
                </div>
                <div className="font-bold text-brand-ink text-sm">
                  Yasui Cargo / Toko Kelontongku
                </div>
                <p className="text-brand-muted mt-1 leading-relaxed">
                  Klaten, Jawa Tengah 57411, Indonesia.
                </p>
              </div>

              <div className="pt-3 border-t border-line">
                <div className="font-bold text-brand-muted uppercase tracking-wider mb-1">
                  Jam Operasional
                </div>
                <p className="text-brand-ink font-semibold">
                  Senin – Sabtu: 08.00 – 20.00 WIB
                </p>
                <p className="text-brand-muted mt-0.5">
                  Minggu &amp; Hari Libur: Tutup (chat WA tetap kami layani berkala)
                </p>
              </div>

              <div className="pt-3 border-t border-line">
                <div className="font-bold text-brand-muted uppercase tracking-wider mb-1">
                  Pengiriman &amp; Ambil di Tempat
                </div>
                <p className="text-brand-muted leading-relaxed">
                  Melayani pembelian langsung di gerai, kurir lokal, ekspedisi kargo darat/laut, hingga kargo ekspor.
                </p>
              </div>
            </div>
          </div>

          {/* MAP (7 COLS) */}
          <div className="lg:col-span-7 rounded-2xl overflow-hidden border border-line bg-surface-card flex flex-col">
            <div className="px-5 py-3.5 border-b border-line bg-surface-card flex items-center justify-between">
              <div>
                <span className="text-[11px] font-bold uppercase tracking-wider text-brand-muted">
                  Titik Google Maps
                </span>
                <div className="text-sm font-bold text-brand-ink">
                  Yasui Cargo &bull; Klaten
                </div>
              </div>
              <a
                href={gmapsUrl}
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex items-center gap-1.5 text-xs font-bold text-brand-secondary hover:text-brand-primary dark:hover:text-brand-primary transition-colors"
              >
                <span>Buka di Google Maps</span>
                <span className="material-symbols-outlined text-sm">open_in_new</span>
              </a>
            </div>

            <div className="relative w-full aspect-[4/3] sm:aspect-[16/11] min-h-[380px] bg-neutral-100">
              <iframe
                title="Peta Lokasi Yasui Cargo"
                src="https://maps.google.com/maps?q=-7.703234477000717,110.65879094815047+(Yasui+Cargo)&t=&z=16&ie=UTF8&iwloc=B&output=embed"
                className="w-full h-full border-0 absolute inset-0"
                loading="lazy"
                referrerPolicy="no-referrer-when-downgrade"
              />
            </div>
          </div>
        </div>
      </main>

      <Footer />
    </div>
  );
}
