'use client';

import { useState, useMemo } from 'react';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import { PRODUCTS, CATEGORIES } from '@/data/products';
import { getWhatsAppOrderUrl } from '@/lib/whatsapp';

export default function ProductsPage() {
  const [selectedCategory, setSelectedCategory] = useState('all');
  const [search, setSearch] = useState('');
  const [cartCount, setCartCount] = useState(1);
  const [toastMessage, setToastMessage] = useState<string | null>(null);

  const filteredProducts = useMemo(() => {
    return PRODUCTS.filter((p) => {
      const matchCat = selectedCategory === 'all' || p.categorySlug === selectedCategory;
      const matchSearch =
        !search.trim() ||
        p.name.toLowerCase().includes(search.toLowerCase()) ||
        p.description.toLowerCase().includes(search.toLowerCase());
      return matchCat && matchSearch;
    });
  }, [selectedCategory, search]);

  const handleAddToCart = (name: string) => {
    setCartCount((c) => c + 1);
    setToastMessage(`Produk ditambahkan ke pesanan: ${name}`);
    setTimeout(() => setToastMessage(null), 3000);
  };

  const getBadgeClass = (badge?: string) => {
    if (!badge) return 'bg-emerald-600 text-white';
    const greenBadges = ['100% UMKM Asli', 'HALAL', 'GRADE 1 EXPORT', 'FOOD GRADE', 'Bukan reseller'];
    if (greenBadges.includes(badge)) {
      return 'bg-emerald-600 text-white';
    }
    return 'bg-rose-600 text-white';
  };

  return (
    <div className="min-h-screen flex flex-col bg-brand-light text-brand-ink">
      <Header cartCount={cartCount} />

      <main className="min-h-[80vh]">
        <section className="bg-surface-card py-12 px-5 border-b border-line">
          <div className="max-w-[1240px] mx-auto">
            <span className="inline-flex items-center gap-2 text-xs font-extrabold uppercase tracking-widest text-brand-secondary">
              <i className="w-1.5 h-1.5 rounded-full bg-brand-secondary inline-block" /> OLEH-OLEH KHAS NUSANTARA &bull; HARGA ECERAN &amp; GROSIR
            </span>
            <h1 className="font-display text-[clamp(2.5rem,6vw,4.5rem)] my-3 font-extrabold leading-tight text-brand-ink">
              Katalog Produk Pilihan
            </h1>
            <p className="max-w-[640px] text-brand-muted text-sm sm:text-base leading-relaxed">
              Kami jualan camilan, bumbu dapur, dan makanan khas yang kami ambil langsung dari produsennya di Klaten dan sekitarnya. Dipilih yang paling enak, harga jujur, dan bergaransi keasliannya.
            </p>

            <div className="mt-6 flex gap-3 flex-wrap">
              <input
                type="text"
                value={search}
                onChange={(e) => setSearch(e.target.value)}
                placeholder="Cari camilan, kopi, sambal, atau bumbu..."
                className="py-2.5 px-5 rounded-full border border-line bg-brand-light text-brand-ink text-sm w-full max-w-sm outline-none focus:border-brand-primary"
              />
            </div>
          </div>
        </section>

        <section className="max-w-[1240px] mx-auto px-4 sm:px-8 py-10">
          {/* Categories Pill Nav */}
          <div className="flex gap-2 overflow-x-auto pb-4 mb-8 no-scrollbar">
            {CATEGORIES.map((cat) => (
              <button
                key={cat.slug}
                onClick={() => setSelectedCategory(cat.slug)}
                type="button"
                className={`py-2 px-5 rounded-full border text-xs font-bold whitespace-nowrap transition-colors cursor-pointer ${
                  selectedCategory === cat.slug
                    ? 'bg-brand-dark text-white border-brand-dark dark:bg-white/20 dark:text-white dark:border-white/20'
                    : 'bg-transparent text-brand-muted border-line hover:border-brand-ink dark:hover:text-white'
                }`}
              >
                {cat.slug === 'all' ? 'Semua Produk' : cat.name}
              </button>
            ))}
          </div>

          {/* Product Grid */}
          <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            {filteredProducts.map((product) => (
              <article
                key={product.id}
                className="group flex flex-col justify-between p-4 rounded-3xl border border-line bg-surface-card/60 hover:bg-surface-card hover:shadow-xl transition-all"
              >
                <div className="relative aspect-square rounded-2xl overflow-hidden bg-brand-light/50 mb-3">
                  <img
                    loading="lazy"
                    src={product.image}
                    alt={product.name}
                    className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                  />
                  <span
                    className={`absolute top-3 left-3 inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-[9.5px] font-extrabold uppercase shadow-sm ${getBadgeClass(
                      product.badge
                    )}`}
                  >
                    <i className="w-1.5 h-1.5 rounded-full bg-white inline-block" />
                    {product.badge || 'BEST SELLER'}
                  </span>
                </div>

                <div className="flex justify-between items-start gap-2 mb-2">
                  <div>
                    <h3 className="text-sm font-bold text-brand-ink mb-1">{product.name}</h3>
                    <span className="text-[10px] text-brand-muted uppercase tracking-wider">
                      {product.category} · {product.weight}
                    </span>
                  </div>
                  <strong className="text-xs font-extrabold text-brand-accent whitespace-nowrap">
                    Rp {product.price.toLocaleString('id-ID')}
                  </strong>
                </div>

                <p className="text-xs text-brand-muted line-clamp-2 leading-relaxed mb-4">
                  {product.description}
                </p>

                <a
                  className="w-full mt-auto inline-flex items-center justify-center gap-2 py-2.5 px-4 rounded-full border border-brand-dark bg-transparent text-brand-ink text-xs font-extrabold hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition-colors"
                  href={getWhatsAppOrderUrl(product.name, product.price)}
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Pesan Sekarang <span className="material-symbols-outlined text-base">chat</span>
                </a>
              </article>
            ))}
          </div>

          {filteredProducts.length === 0 && (
            <div className="text-center py-16 px-5 text-brand-muted text-sm">
              Tidak ada produk yang cocok dengan pencarian Anda.
            </div>
          )}
        </section>
      </main>

      <Footer />

      {toastMessage && (
        <div className="fixed bottom-6 right-6 z-50 flex items-center gap-3 py-3.5 px-5 rounded-2xl bg-brand-dark text-white shadow-2xl">
          <span className="material-symbols-outlined text-brand-secondary">check_circle</span>
          <span className="text-xs font-bold">{toastMessage}</span>
        </div>
      )}
    </div>
  );
}
