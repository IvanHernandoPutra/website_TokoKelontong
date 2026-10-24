import Link from 'next/link';
import Header from '@/components/Header';
import Footer from '@/components/Footer';

export const metadata = {
  title: 'Kisah Kami — Toko Kelontongku Klaten',
  description: 'Berawal dari rumah toko kelontong sendiri di Klaten dan sampai sekarang masih seperti itu. Dokumentasi kemasan dan kiriman paket ekspor.',
};

export default function AboutPage() {
  return (
    <div className="min-h-screen flex flex-col bg-brand-light text-brand-ink">
      <Header cartCount={1} />

      <main className="min-h-[80vh]">
        {/* TITLE & BACKSTORY */}
        <section className="max-w-[1140px] mx-auto px-4 sm:px-6 pt-8 sm:pt-12 pb-8">
          <nav className="flex items-center gap-2 text-xs font-semibold text-brand-muted mb-4" aria-label="Breadcrumb">
            <Link href="/" className="hover:text-brand-primary dark:hover:text-brand-primary transition-colors">
              Beranda
            </Link>
            <span className="material-symbols-outlined text-xs">chevron_right</span>
            <span className="text-brand-ink font-bold">Kisah Kami</span>
          </nav>

          <h1 className="font-display text-[clamp(2.2rem,5vw,3.6rem)] font-extrabold leading-tight text-brand-ink mb-4">
            Dari Toko Kelontong Rumah Sendiri di Klaten
          </h1>

          <div className="max-w-2xl space-y-3 text-brand-muted text-sm sm:text-base leading-relaxed">
            <p>
              Usaha ini berawal dari rumah toko kelontong kami sendiri di Klaten, Jawa Tengah, dan sampai sekarang operasionalnya masih tetap seperti itu.
            </p>
            <p>
              Awalnya kami cuma melayani tetangga sekitar, sampai ada saudara dan pelanggan yang bekerja di luar negeri minta dikirimkan camilan serta bumbu khas daerah yang sulit dicari di perantauan. Dari pesanan kecil beberapa dus, sekarang pengiriman paket dan karton kargo terus berjalan rutin setiap minggunya.
            </p>
          </div>
        </section>

        {/* GALLERY: LEFT RIGHT LEFT RIGHT GRID */}
        <section className="max-w-[1140px] mx-auto px-4 sm:px-6 pb-20">
          <div className="space-y-4 sm:space-y-6">
            {/* Row 1: Left large image, Right 2 images stacked */}
            <div className="grid grid-cols-1 md:grid-cols-12 gap-4 sm:gap-6">
              <div className="md:col-span-7 rounded-2xl sm:rounded-3xl overflow-hidden border border-line bg-surface-card aspect-[4/3] md:aspect-auto md:min-h-[420px]">
                <img
                  src="/images/history/1.webp"
                  alt="Sortir camilan makanan kering"
                  className="w-full h-full object-cover"
                />
              </div>
              <div className="md:col-span-5 grid grid-cols-2 md:grid-cols-1 gap-4 sm:gap-6">
                <div className="rounded-2xl sm:rounded-3xl overflow-hidden border border-line bg-surface-card aspect-[4/3]">
                  <img
                    src="/images/history/2.webp"
                    alt="Packing kardus double wall"
                    className="w-full h-full object-cover"
                  />
                </div>
                <div className="rounded-2xl sm:rounded-3xl overflow-hidden border border-line bg-surface-card aspect-[4/3]">
                  <img
                    src="/images/history/3.webp"
                    alt="Penyegelan dan label paket kargo"
                    className="w-full h-full object-cover"
                  />
                </div>
              </div>
            </div>

            {/* Row 2: Left 2 images stacked, Right large image */}
            <div className="grid grid-cols-1 md:grid-cols-12 gap-4 sm:gap-6">
              <div className="md:col-span-5 grid grid-cols-2 md:grid-cols-1 gap-4 sm:gap-6 order-2 md:order-1">
                <div className="rounded-2xl sm:rounded-3xl overflow-hidden border border-line bg-surface-card aspect-[4/3]">
                  <img
                    src="/images/history/4.webp"
                    alt="Strapping band penguat kardus"
                    className="w-full h-full object-cover"
                  />
                </div>
                <div className="rounded-2xl sm:rounded-3xl overflow-hidden border border-line bg-surface-card aspect-[4/3]">
                  <img
                    src="/images/history/5.webp"
                    alt="Tumpukan dus paket siap berangkat"
                    className="w-full h-full object-cover"
                  />
                </div>
              </div>
              <div className="md:col-span-7 rounded-2xl sm:rounded-3xl overflow-hidden border border-line bg-surface-card aspect-[4/3] md:aspect-auto md:min-h-[420px] order-1 md:order-2">
                <img
                  src="/images/history/6.webp"
                  alt="Paket diserahkan ke kurir logistik"
                  className="w-full h-full object-cover"
                />
              </div>
            </div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
}
