'use client';

import { useState } from 'react';
import Link from 'next/link';
import Header from '@/components/Header';
import Footer from '@/components/Footer';

const FAQ_ITEMS = [
  {
    q: 'Bagaimana cara memesan?',
    a: 'Pilih produk favorit di katalog, klik tombol WhatsApp pada produk, lalu chat kami untuk konfirmasi stok dan harga. Tim kami akan memandu sampai pesanan selesai.',
  },
  {
    q: 'Apakah bisa belanja langsung di toko?',
    a: 'Bisa! Gerai kami di Klaten, Jawa Tengah buka Senin–Sabtu, 08.00–20.00 WIB. Lihat halaman Kisah Kami untuk informasi toko dan kontak kami.',
  },
  {
    q: 'Metode pembayaran apa saja yang diterima?',
    a: 'Transfer bank atau tunai langsung di toko. Detail pembayaran diberikan saat konfirmasi pesanan via WhatsApp.',
  },
  {
    q: 'Apakah produknya asli dan berkualitas?',
    a: 'Ya. Semua produk dikurasi langsung dari produsen dan UMKM lokal terpercaya, dikemas kedap udara agar tetap segar sampai tangan Anda.',
  },
  {
    q: 'Apakah bisa pesan dalam jumlah besar (grosir)?',
    a: 'Bisa. Warung, rumah makan, kantor, sampai kebutuhan acara kami layani. Chat kami untuk harga grosir.',
  },
  {
    q: 'Berapa lama pesanan diproses?',
    a: 'Pesanan diproses 1–2 hari kerja setelah konfirmasi. Detail selanjutnya diatur langsung saat chat dengan tim kami.',
  },
  {
    q: 'Apakah ada toko fisik?',
    a: 'Ada, di Klaten, Jawa Tengah. Lihat halaman Kisah Kami untuk alamat dan jam operasional.',
  },
];

export default function FAQPage() {
  const [openIndex, setOpenIndex] = useState<number | null>(0);

  const toggleAccordion = (index: number) => {
    setOpenIndex(openIndex === index ? null : index);
  };

  return (
    <div className="min-h-screen flex flex-col bg-brand-light text-brand-ink">
      <Header cartCount={1} />

      <main className="min-h-[80vh]">
        {/* HERO / BREADCRUMB SECTION */}
        <section className="bg-surface-card py-12 px-5 border-b border-line">
          <div className="max-w-[1240px] mx-auto">
            {/* Breadcrumb */}
            <nav className="flex items-center gap-2 text-xs font-semibold text-brand-muted mb-4" aria-label="Breadcrumb">
              <Link href="/" className="hover:text-brand-primary dark:hover:text-brand-primary transition-colors">
                Beranda
              </Link>
              <span className="material-symbols-outlined text-xs">chevron_right</span>
              <span className="text-brand-ink font-bold">FAQ</span>
            </nav>

            <span className="inline-flex items-center gap-2 text-xs font-extrabold uppercase tracking-widest text-brand-secondary">
              <i className="w-1.5 h-1.5 rounded-full bg-brand-secondary inline-block" /> BELANJA KEBUTUHAN TETANGGA
            </span>

            <h1 className="font-display text-[clamp(2.5rem,6vw,4.5rem)] my-3 font-extrabold leading-tight text-brand-ink">
              Pertanyaan yang Sering Diajukan
            </h1>

            <p className="max-w-[640px] text-brand-muted text-sm sm:text-base leading-relaxed">
              Tanya-tanya Dulu Boleh. Temukan jawaban seputar cara pemesanan, ketersediaan produk UMKM asli Klaten, opsi belanja langsung, dan pengiriman grosir maupun eceran.
            </p>
          </div>
        </section>

        {/* ACCORDION SECTION */}
        <section className="max-w-[860px] mx-auto px-4 sm:px-6 py-14 sm:py-20">
          <div className="space-y-4">
            {FAQ_ITEMS.map((item, index) => {
              const isOpen = openIndex === index;
              return (
                <div
                  key={index}
                  className="rounded-2xl sm:rounded-3xl border border-line bg-surface-card/60 overflow-hidden transition-all duration-200 hover:border-brand-primary/60 shadow-xs"
                >
                  <button
                    type="button"
                    onClick={() => toggleAccordion(index)}
                    aria-expanded={isOpen}
                    className="w-full flex items-center justify-between gap-4 p-5 sm:p-6 text-left cursor-pointer select-none group"
                  >
                    <h3 className="text-sm sm:text-base font-bold text-brand-ink group-hover:text-brand-primary dark:group-hover:text-brand-primary transition-colors leading-snug">
                      {item.q}
                    </h3>
                    <span
                      className={`grid place-items-center w-8 h-8 rounded-full border border-line bg-brand-light shrink-0 text-brand-ink transition-transform duration-300 ${
                        isOpen ? 'rotate-180 bg-brand-dark text-white border-brand-dark dark:bg-brand-dark dark:text-white dark:border-white/20' : ''
                      }`}
                    >
                      <span className="material-symbols-outlined text-base text-inherit">expand_more</span>
                    </span>
                  </button>

                  {isOpen && (
                    <div className="px-5 sm:px-6 pb-6 pt-1 text-xs sm:text-sm text-brand-muted leading-relaxed border-t border-line/40">
                      <p>{item.a}</p>
                    </div>
                  )}
                </div>
              );
            })}
          </div>

          {/* Quick CS Contact Card */}
          <div className="mt-12 p-6 sm:p-8 rounded-3xl bg-brand-dark text-white flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-xl">
            <div>
              <span className="text-[10px] font-extrabold tracking-widest uppercase text-brand-primary">
                TANYA-TANYA DULU BOLEH
              </span>
              <h4 className="text-base sm:text-lg font-bold text-white mt-1">
                Punya pertanyaan lain yang belum terjawab?
              </h4>
              <p className="text-xs text-white/75 mt-1">
                Customer service kami di Klaten siap membantu konfirmasi stok &amp; pesanan Anda.
              </p>
            </div>
            <a
              href="https://wa.me/62895385877877?text=Halo%20Toko%20Kelontongku%2C%20saya%20mau%20tanya-tanya%20seputar%20produk%20dan%20pemesanan"
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center gap-2 py-3 px-6 rounded-full bg-emerald-600 text-white text-xs font-extrabold hover:bg-emerald-500 transition-colors shrink-0"
            >
              <span className="material-symbols-outlined text-base">chat</span>
              Chat WhatsApp CS
            </a>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
}
