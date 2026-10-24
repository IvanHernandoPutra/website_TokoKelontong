'use client';

import { useEffect, useRef, useState } from 'react';
import Link from 'next/link';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import Preloader from '@/components/Preloader';
import { PRODUCTS } from '@/data/products';
import { getWhatsAppOrderUrl } from '@/lib/whatsapp';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

const FEATURED_CATEGORIES = [
  {
    name: 'Makanan Instan',
    slug: 'makanan-kering-instan',
    highlight: 'Populer',
    items: 'Pop Mie • Seblak • Baso Aci',
    image: '/images/cat-makanan-instan.jpg',
  },
  {
    name: 'Snack & Camilan',
    slug: 'snack-camilan',
    highlight: 'Paling Laris',
    items: 'Basreng • Keripik Singkong',
    image: '/images/cat-snack.jpg',
  },
  {
    name: 'Kopi & Teh',
    slug: 'kopi-teh',
    highlight: 'Khas Nusantara',
    items: 'Kopi Gayo • Robusta • Melati',
    image: '/images/cat-kopi-teh.jpg',
  },
  {
    name: 'Minuman & Sereal',
    slug: 'minuman-sereal',
    highlight: 'Harian',
    items: 'Susu Bubuk • Sereal • Wedang',
    image: '/images/cat-minuman-sereal.jpg',
  },
  {
    name: 'Bumbu & Sambal',
    slug: 'bumbu-sambal',
    highlight: 'Resep Asli',
    items: 'Sambal Bu Rudy • Bumbu Pecel',
    image: '/images/cat-bumbu-sambal.jpg',
  },
];

const TESTIMONIALS = [
  {
    quote: 'Stok keripik singkong dan seblak dari Klaten selalu fresh dengan tanggal kedaluwarsa panjang. Pelanggan warung saya puas karena rasanya konsisten.',
    author: 'Budi Santoso',
    role: 'Pemilik Toko Sembako, Semarang',
    badge: 'Mitra Grosir',
  },
  {
    quote: 'Kangen basreng pedas daun jeruk asli kampung halaman. Pengemasan bubble wrap dan kardusnya rapi sekali, barang sampai tanpa remuk.',
    author: 'Siti Rahma',
    role: 'Diaspora Indonesia di Osaka, Jepang',
    badge: 'Pelanggan Setia',
  },
  {
    quote: 'Standar master carton double-wall dan penataan rapi mempermudah inspeksi kargo dan kalkulasi volume kubikasi pengiriman lintas wilayah.',
    author: 'Hendra Wijaya',
    role: 'Mitra Forwarder & Logistik Kargo',
    badge: 'Partner Logistik',
  },
];

const getBadgeClass = (badge?: string) => {
  if (!badge) return 'bg-emerald-600 text-white';
  const greenBadges = ['100% UMKM Asli', 'HALAL', 'GRADE 1 EXPORT', 'FOOD GRADE', 'Bukan reseller'];
  if (greenBadges.includes(badge)) {
    return 'bg-emerald-600 text-white';
  }
  return 'bg-rose-600 text-white';
};

const FAQ_HOMEPAGE_ITEMS = [
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

export default function HomePage() {
  const [cartCount, setCartCount] = useState(1);
  const [toastMessage, setToastMessage] = useState<string | null>(null);
  const [wishlist, setWishlist] = useState<number[]>([]);
  const [openFaqIndex, setOpenFaqIndex] = useState<number | null>(0);
  const sliderRef = useRef<HTMLDivElement>(null);

  // Toast auto-hide
  useEffect(() => {
    if (!toastMessage) return;
    const timer = setTimeout(() => setToastMessage(null), 3000);
    return () => clearTimeout(timer);
  }, [toastMessage]);

  // GSAP Animations
  useEffect(() => {
    gsap.registerPlugin(ScrollTrigger);

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    // Hero box float & scroll-driven pose animation
    const boxWrap = document.querySelector('[data-hero-bag]');
    const chipCard = document.querySelector('[data-chip-card]');
    const blob = document.querySelector('[data-blob]');

    if (blob) {
      gsap.to(blob, {
        x: 30,
        y: -18,
        scale: 1.1,
        borderRadius: '55% 45% 38% 62%',
        duration: 8,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut',
      });
    }

    if (chipCard) {
      gsap.to(chipCard, {
        y: -12,
        rotation: 2,
        duration: 2.4,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut',
      });
    }

    if (boxWrap) {
      // Idle floating
      gsap.to(boxWrap.querySelector('img'), {
        y: -8,
        rotation: 1.5,
        duration: 2.2,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut',
      });

      const chipCard = document.querySelector('[data-chip-card]');
      if (chipCard) {
        gsap.to(chipCard, {
          y: 10,
          rotation: -1.5,
          duration: 3,
          repeat: -1,
          yoyo: true,
          ease: 'sine.inOut',
        });
      }

      // 3-pose ScrollTrigger Scrub timeline
      const poseTl = gsap.timeline({
        scrollTrigger: {
          trigger: '.hero-section',
          start: 'top top',
          end: 'bottom top',
          scrub: 1.2,
        },
      });

      poseTl
        .to(boxWrap, { y: -40, x: -30, rotate: -18, scale: 1.1, ease: 'power1.out' })
        .to(boxWrap, { y: -100, x: 40, rotate: 22, scale: 1.2, ease: 'power1.inOut' })
        .to(boxWrap, { y: -220, x: 10, rotate: -8, scale: 0.95, ease: 'power1.in' });
    }

    // Product cards reveal
    const cards = document.querySelectorAll('.product-card');
    if (cards.length) {
      gsap.from(cards, {
        y: 45,
        opacity: 0,
        stagger: 0.08,
        duration: 0.8,
        scrollTrigger: {
          trigger: '.products-section',
          start: 'top 75%',
        },
      });
    }

    return () => {
      ScrollTrigger.getAll().forEach((t) => t.kill());
    };
  }, []);

  const handleAddToCart = (name: string) => {
    setCartCount((prev) => prev + 1);
    setToastMessage(`Produk ditambahkan ke pesanan: ${name}`);
  };

  const toggleWishlist = (id: number) => {
    setWishlist((prev) =>
      prev.includes(id) ? prev.filter((item) => item !== id) : [...prev, id]
    );
  };

  const scrollSlider = (direction: number) => {
    if (!sliderRef.current) return;
    const scrollAmount = (sliderRef.current.firstElementChild as HTMLElement)?.offsetWidth || 320;
    sliderRef.current.scrollBy({ left: direction * (scrollAmount + 24), behavior: 'smooth' });
  };

  return (
    <div className="relative overflow-x-clip max-w-[100vw]">
      <Preloader />
      <Header cartCount={cartCount} />

      <main>
        {/* HERO SECTION */}
        <section className="hero-section relative max-w-[1240px] mx-auto px-4 sm:px-8 py-6 sm:py-10 pb-16 grid grid-cols-1 lg:grid-cols-[1.05fr_0.95fr] items-center min-h-[calc(100vh-120px)]">
          <div
            className="absolute -bottom-52 -left-28 w-[600px] h-[430px] rounded-[48%_52%_64%_36%] bg-[radial-gradient(circle_at_40%_40%,color-mix(in_srgb,var(--brand-primary)_65%,transparent),transparent_68%)] blur-[26px] pointer-events-none"
            data-blob
          />

          <div className="col-span-full flex justify-center w-full mb-4 sm:mb-6 relative z-10">
            <span className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-line bg-brand-light/80 shadow-xs text-brand-muted text-[11px] font-extrabold tracking-widest uppercase">
              OLEH-OLEH KHAS NUSANTARA &bull; HARGA ECERAN &amp; GROSIR
            </span>
          </div>

          <div className="relative z-10 max-w-[650px]">
            <h1 className="my-3 sm:my-5 font-display font-extrabold tracking-tighter leading-[0.9] text-[clamp(2.5rem,6.5vw,6.5rem)] text-brand-ink">
              Rasa Asli Indonesia,<br />
              <em className="text-brand-accent not-italic">Langsung dari Klaten</em>
            </h1>
            <p className="max-w-md text-brand-muted text-sm sm:text-base leading-relaxed">
              Kami jualan camilan, bumbu dapur, dan makanan khas yang kami ambil langsung dari produsennya di Klaten dan sekitarnya. Dipilih yang paling enak, dikemas rapi, siap kirim ke mana saja.
            </p>

            <div className="mt-5 sm:mt-6 grid grid-cols-1 sm:grid-cols-3 gap-2.5">
              <span className="inline-block px-2 py-0.5 mb-1.5 rounded-full bg-emerald-600 text-white text-[9px] font-extrabold tracking-wide uppercase">
                100% UMKM Asli
              </span>
            </div>
          </div>

          <div className="relative min-h-[380px] sm:min-h-[480px] lg:min-h-[600px] mt-6 lg:mt-0">
            <div className="absolute top-[6%] sm:top-[10%] right-[6%] sm:right-[4%] w-[min(70vw,420px)] aspect-square rounded-full bg-brand-primary blur-[1px] opacity-90" />
            <div
              className="absolute z-10 top-0 left-[-5%] right-auto hero-breakout w-[110%] lg:w-[min(55vw,760px)] h-full lg:h-[105%] rotate-[-7deg] origin-center drop-shadow-[25px_35px_28px_rgba(23,35,34,0.22)] will-change-transform"
              data-hero-bag
            >
              <img className="w-full h-full object-contain" src="/images/box.png" alt="Kemasan Paket Toko Kelontongku" />
            </div>
          </div>
        </section>

        {/* SECTION: KATEGORI PILIHAN */}
        <section className="max-w-[1240px] mx-auto px-4 sm:px-8 py-12 sm:py-16 border-t border-line">
          <div className="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
            <div>
              <span className="inline-flex items-center gap-2 text-[11px] font-extrabold tracking-widest uppercase text-brand-secondary">
                <i className="w-1.5 h-1.5 rounded-full bg-brand-secondary inline-block" /> JELAJAH PRODUK KAMI
              </span>
              <h2 className="mt-2 font-display font-extrabold tracking-tighter leading-tight text-[clamp(2rem,4vw,3.5rem)] text-brand-ink">
                Kategori Pilihan
              </h2>
            </div>
            <Link
              href="/produk"
              className="inline-flex items-center gap-1.5 text-xs font-bold text-brand-ink hover:text-brand-primary dark:hover:text-brand-primary transition-colors self-start sm:self-end"
            >
              Lihat Semua Katalog <span className="material-symbols-outlined text-sm">arrow_forward</span>
            </Link>
          </div>

          <div className="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3.5 sm:gap-4">
            {FEATURED_CATEGORIES.map((cat, i) => (
              <Link
                key={i}
                href="/produk"
                className="group relative overflow-hidden rounded-2xl sm:rounded-3xl border border-line aspect-[3/4.2] flex flex-col justify-end p-4 text-white shadow-xs hover:shadow-xl transition-all duration-300 last:col-span-2 sm:last:col-span-1"
              >
                <img
                  loading="lazy"
                  src={cat.image}
                  alt={cat.name}
                  className="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-brand-dark/95 via-brand-dark/45 to-transparent pointer-events-none" />

                <div className="relative z-10">
                  <h3 className="font-display text-sm sm:text-base font-extrabold text-white leading-tight mt-0.5 mb-1 group-hover:text-brand-primary transition-colors">
                    {cat.name}
                  </h3>
                  <p className="text-[10.5px] text-white/75 font-medium line-clamp-1 leading-snug">
                    {cat.items}
                  </p>
                </div>

                <div className="absolute top-3 right-3 w-7 h-7 sm:w-8 sm:h-8 rounded-full bg-white/20 backdrop-blur-md grid place-items-center text-white group-hover:bg-brand-primary group-hover:text-brand-dark transition-colors">
                  <span className="material-symbols-outlined text-sm sm:text-base">arrow_outward</span>
                </div>
              </Link>
            ))}
          </div>
        </section>

        {/* SECTION 2: PRODUK UNGGULAN */}
        {/* <section className="products-section max-w-[1240px] mx-auto px-4 sm:px-8 py-12 sm:py-20" id="shop">
          <div className="flex flex-col sm:flex-row sm:items-end justify-between gap-4 sm:gap-6 mb-8 sm:mb-11">
            <div>
              <span className="inline-flex items-center gap-2 text-[11px] font-extrabold tracking-widest uppercase text-brand-muted">
                <i className="w-1.5 h-1.5 rounded-full bg-brand-accent inline-block" /> PALING SERING DICARI
              </span>
              <h2 className="mt-3 font-display font-extrabold tracking-tighter leading-[0.87] text-[clamp(2.2rem,5vw,5rem)] text-brand-ink">
                Produk Unggulan
              </h2>
            </div>
            <div className="flex gap-2 self-end sm:self-auto">
              <button
                className="grid place-items-center w-10 h-10 sm:w-12 sm:h-12 border border-line rounded-full bg-transparent text-brand-ink hover:scale-105 transition-transform cursor-pointer"
                onClick={() => scrollSlider(-1)}
                type="button"
                aria-label="Previous products"
              >
                <span className="material-symbols-outlined">arrow_back</span>
              </button>
              <button
                className="grid place-items-center w-10 h-10 sm:w-12 sm:h-12 border border-brand-accent rounded-full bg-brand-accent text-white hover:bg-brand-primary hover:border-brand-primary hover:text-brand-dark hover:scale-105 transition-transform cursor-pointer"
                onClick={() => scrollSlider(1)}
                type="button"
                aria-label="Next products"
              >
                <span className="material-symbols-outlined">arrow_forward</span>
              </button>
            </div>
          </div>

          <div
            className="grid grid-flow-col auto-cols-[min(84vw,300px)] md:auto-cols-[calc((100%-24px)/2)] lg:auto-cols-[calc((100%-48px)/3)] gap-4 sm:gap-6 overflow-x-auto lg:overflow-hidden scroll-smooth snap-x snap-mandatory no-scrollbar pb-2"
            ref={sliderRef}
          >
            {PRODUCTS.slice(0, 8).map((product) => (
              <article key={product.id} className="product-card group min-w-0 snap-start">
                <div className="relative aspect-[1/1.05] overflow-hidden rounded-3xl bg-surface-card">
                  <img loading="lazy" className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-108" src={product.image} alt={product.name} />
                  <span
                    className={`absolute top-3.5 left-3.5 px-2.5 py-1.5 rounded-full text-[9px] font-extrabold uppercase tracking-wide ${getBadgeClass(
                      product.badge
                    )}`}
                  >
                    <i className="inline-block w-1.5 h-1.5 mr-1 rounded-full bg-white" />
                    {product.badge || 'BEST SELLER'}
                  </span>
                  <button
                    className="absolute top-3.5 right-3.5 grid place-items-center w-9 h-9 rounded-full bg-[#fffaf1]/85 text-brand-ink hover:text-brand-accent hover:scale-110 transition-transform cursor-pointer border-0"
                    type="button"
                    onClick={() => toggleWishlist(product.id)}
                    aria-label={`Favoritkan ${product.name}`}
                  >
                    <span
                      className={`material-symbols-outlined text-lg ${wishlist.includes(product.id)
                          ? "[font-variation-settings:'FILL'_1] text-brand-accent"
                          : "[font-variation-settings:'FILL'_0]"
                        }`}
                    >
                      favorite
                    </span>
                  </button>
                </div>

                <div className="flex justify-between gap-3 px-1 py-4">
                  <div>
                    <h3 className="m-0 mb-1 text-sm font-bold text-brand-ink">{product.name}</h3>
                    <span className="text-[10px] text-brand-muted uppercase tracking-wider">{product.category}</span>
                  </div>
                  <strong className="whitespace-nowrap text-xs text-brand-accent font-extrabold">Rp {product.price.toLocaleString('id-ID')}</strong>
                </div>

                <a
                  className="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-full border border-brand-dark bg-transparent text-brand-ink text-xs font-extrabold hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition-colors"
                  href={getWhatsAppOrderUrl(product.name, product.price)}
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Pesan Sekarang <span className="material-symbols-outlined text-base">chat</span>
                </a>
              </article>
            ))}
          </div>
        </section> */}

        {/* SECTION 3: KISAH KAMI (CLEAN DARK SECTION) */}
        <section className="bg-brand-dark text-white py-16 sm:py-24 px-4 sm:px-8 border-y border-white/10">
          <div className="max-w-[1240px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div>
              <h2 className="my-4 font-display font-extrabold tracking-tighter leading-[0.95] text-[clamp(2.2rem,4.5vw,4.5rem)] text-white">
                Dari Rumah Toko Kelontong di Klaten ke Kiriman Ekspor
              </h2>
              <p className="text-white/80 text-sm sm:text-base leading-relaxed mb-6 max-w-xl">
                Usaha ini berawal dari rumah toko kelontong sendiri di Klaten, Jawa Tengah, dan sampai sekarang masih seperti itu. Kami menyortir langsung camilan renyah, jajanan khas, dan bumbu tradisional dari produsen rumahan sekitar, lalu dikemas dengan kardus tebal dan strapping band untuk pengiriman eceran maupun kargo ekspor.
              </p>

              <Link
                href="/tentang-kami"
                className="inline-flex items-center gap-2 py-3 px-6 rounded-full bg-brand-accent text-white text-xs font-extrabold hover:brightness-110 transition-all"
              >
                Baca Dokumentasi Lengkap <span className="material-symbols-outlined text-sm">arrow_forward</span>
              </Link>
            </div>

            <div className="relative">
              <div className="relative rounded-3xl overflow-hidden border border-white/10 bg-white/5 shadow-2xl aspect-[4/3]">
                <img
                  src="/images/history/6.webp"
                  alt="Paket kardus siap dikirim dari Klaten"
                  className="w-full h-full object-cover"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-transparent to-transparent pointer-events-none" />
                <div className="absolute bottom-4 left-4 right-4 flex items-center justify-between text-xs text-white/90">
                  <span className="font-bold">Paket pesanan siap jemput kurir</span>
                  <span className="text-[10px] text-white/60">Klaten, Jawa Tengah</span>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* SECTION 4: CERITA PELANGGAN KAMI */}
        {/* <section className="max-w-[1240px] mx-auto px-4 sm:px-8 py-12 sm:py-20">
          <div className="flex flex-col sm:flex-row sm:items-end justify-between gap-4 sm:gap-6 mb-8 sm:mb-11">
            <div>
              <span className="inline-flex items-center gap-2 text-[11px] font-extrabold tracking-widest uppercase text-brand-muted">
                <i className="w-1.5 h-1.5 rounded-full bg-brand-accent inline-block" /> KATA PEMBELI
              </span>
              <h2 className="mt-3 font-display font-extrabold tracking-tighter leading-[0.87] text-[clamp(2.2rem,5vw,5rem)] text-brand-ink">
                Cerita Pelanggan Kami
              </h2>
            </div>
            <p className="max-w-md text-xs sm:text-sm text-brand-muted leading-relaxed">
              Pembeli balik lagi kalau barangnya bagus. Sesederhana itu.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-5">
            {TESTIMONIALS.map((t, idx) => (
              <div
                key={idx}
                className="flex flex-col justify-between p-6 sm:p-7 rounded-3xl border border-line bg-surface-card/60 shadow-xs hover:shadow-md transition-shadow"
              >
                <div>
                  <div className="flex items-center justify-between mb-4">
                    <span className="text-brand-accent text-2xl font-serif leading-none">&ldquo;</span>
                    <span className="px-2.5 py-1 rounded-full bg-brand-light border border-line text-[10px] font-bold text-brand-muted">
                      {t.badge}
                    </span>
                  </div>
                  <p className="text-xs sm:text-sm text-brand-ink leading-relaxed mb-6 font-medium">
                    {t.quote}
                  </p>
                </div>
                <div className="pt-4 border-t border-line/60">
                  <strong className="block text-xs font-bold text-brand-ink">{t.author}</strong>
                  <small className="block text-[11px] text-brand-muted mt-0.5">{t.role}</small>
                </div>
              </div>
            ))}
          </div>
        </section> */}

        {/* SECTION 5: FAQ - PERTANYAAN YANG SERING DIAJUKAN */}
        <section className="max-w-[1240px] mx-auto px-4 sm:px-8 py-12 sm:py-20 border-t border-line" id="faq">
          <div className="flex flex-col sm:flex-row sm:items-end justify-between gap-4 sm:gap-6 mb-8 sm:mb-11">
            <div>
              <span className="inline-flex items-center gap-2 text-[11px] font-extrabold tracking-widest uppercase text-brand-muted">
                <i className="w-1.5 h-1.5 rounded-full bg-brand-accent inline-block" /> BELANJA KEBUTUHAN TETANGGA
              </span>
              <h2 className="mt-3 font-display font-extrabold tracking-tighter leading-[0.87] text-[clamp(2.2rem,5vw,5rem)] text-brand-ink">
                Pertanyaan yang Sering Diajukan
              </h2>
            </div>
            <div className="text-left sm:text-right">
              <span className="inline-block text-xs font-bold text-brand-secondary uppercase tracking-wider mb-1">
                Tanya-tanya Dulu Boleh
              </span>
              <p className="max-w-md text-xs sm:text-sm text-brand-muted leading-relaxed">
                Pelajari sistem pemesanan via WhatsApp, opsi kunjungan langsung ke Klaten, hingga pembelian partai besar.
              </p>
            </div>
          </div>

          <div className="max-w-[900px] mx-auto space-y-3.5">
            {FAQ_HOMEPAGE_ITEMS.map((item, index) => {
              const isOpen = openFaqIndex === index;
              return (
                <div
                  key={index}
                  className="rounded-2xl sm:rounded-3xl border border-line bg-surface-card/60 overflow-hidden transition-all duration-200 hover:border-brand-primary/60 shadow-xs"
                >
                  <button
                    type="button"
                    onClick={() => setOpenFaqIndex(isOpen ? null : index)}
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

          <div className="max-w-[900px] mx-auto mt-8 flex flex-col sm:flex-row items-center justify-between gap-4 p-5 rounded-2xl border border-line bg-brand-light/70 text-xs text-brand-muted">
            <span className="font-medium text-brand-ink">
              Masih ada hal lain yang ingin Anda pastikan?
            </span>
            <Link
              href="/faq"
              className="inline-flex items-center gap-1.5 font-extrabold text-brand-accent hover:text-brand-primary dark:hover:text-brand-primary hover:underline transition-colors"
            >
              Buka Halaman FAQ Lengkap <span className="material-symbols-outlined text-sm">arrow_forward</span>
            </Link>
          </div>
        </section>
      </main>

      <Footer />

      {/* Floating Toast */}
      {toastMessage && (
        <div className="fixed z-50 bottom-5 right-5 flex items-center gap-2 py-3 px-4.5 rounded-full bg-brand-dark text-white text-xs font-bold shadow-2xl">
          <span className="material-symbols-outlined text-brand-primary text-base">check_circle</span>
          {toastMessage}
        </div>
      )}
    </div>
  );
}
