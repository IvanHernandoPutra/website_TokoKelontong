'use client';

import { useState, useEffect } from 'react';
import Link from 'next/link';
import { usePathname } from 'next/navigation';

interface HeaderProps {
  cartCount?: number;
}

export default function Header({ cartCount = 0 }: HeaderProps) {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileOpen, setIsMobileOpen] = useState(false);
  const [isDark, setIsDark] = useState(false);
  const pathname = usePathname();

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 30);
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const toggleTheme = () => {
    const nextDark = !isDark;
    setIsDark(nextDark);
    if (nextDark) {
      document.documentElement.setAttribute('data-theme', 'dark');
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.setAttribute('data-theme', 'light');
      document.documentElement.classList.remove('dark');
    }
  };

  const navLinks = [
    { href: '/produk', label: 'Katalog Produk', active: pathname.startsWith('/produk') },
    { href: '/tentang-kami', label: 'Kisah Kami', active: pathname === '/tentang-kami' },
    { href: '/pengiriman-dan-pemesanan', label: 'Standar Pengiriman', active: pathname === '/pengiriman-dan-pemesanan' },
    { href: '/faq', label: 'FAQ', active: pathname === '/faq' },
    { href: '/kontak', label: 'Hubungi Kami', active: pathname === '/kontak' },
  ];

  return (
    <div className="fixed top-0 left-0 right-0 z-50 flex flex-col items-center">
      {/* Top Bar Tagline */}
      <div className="w-full bg-brand-dark text-white/90 text-[10px] sm:text-[11px] py-1.5 px-3 text-center border-b border-white/10 font-medium tracking-wide">
        <span className="font-bold text-brand-accent">TOKO KLATEN</span>
        <span className="mx-2 opacity-40">•</span>
        <span>Produk UMKM • Harga Eceran &amp; Grosir</span>
        <span className="mx-2 opacity-40">•</span>
        <a
          href="https://wa.me/62895385877877"
          target="_blank"
          rel="noopener noreferrer"
          className="font-bold text-brand-primary hover:underline inline-flex items-center gap-1"
        >
          CS WhatsApp: +62895385877877
        </a>
      </div>

      <header
        className={`w-[calc(100%-16px)] sm:w-[min(1240px,calc(100%-32px))] mt-2 flex items-center justify-between gap-2 sm:gap-4 py-2 sm:py-2.5 px-3 sm:px-4.5 rounded-full transition-all duration-300 border ${
          isScrolled
            ? 'bg-brand-light/90 border-line shadow-lg backdrop-blur-md'
            : 'bg-brand-light/75 border-line backdrop-blur-sm'
        }`}
      >
        <Link href="/" className="inline-flex items-center gap-2 text-[11px] sm:text-xs font-extrabold tracking-wider whitespace-nowrap shrink-0 text-brand-ink" aria-label="Toko Kelontongku home">
          <img className="w-7 h-7 sm:w-8 sm:h-8 rounded-lg object-contain shrink-0" src="/images/logo-mark.png" alt="Toko Kelontongku logo" />
          <span>TOKO KELONTONGKU</span>
        </Link>

        <nav
          className={`${
            isMobileOpen
              ? 'flex flex-col absolute top-[calc(100%+10px)] left-2 right-2 p-3 rounded-2xl bg-brand-light/95 border border-line shadow-2xl backdrop-blur-xl gap-1 z-50'
              : 'hidden lg:flex'
          } items-center gap-1 p-1 rounded-full border border-line bg-brand-light/65 backdrop-blur-sm`}
          aria-label="Main navigation"
        >
          {navLinks.map((link) => (
            <Link
              key={link.href}
              href={link.href}
              onClick={() => setIsMobileOpen(false)}
              className={`px-3.5 py-2 rounded-full text-xs font-bold whitespace-nowrap transition-colors duration-200 ${
                link.active
                  ? 'bg-brand-dark text-white dark:bg-white/20 dark:text-white'
                  : 'text-brand-muted hover:bg-brand-dark hover:text-white dark:hover:bg-white/10 dark:hover:text-white'
              }`}
            >
              {link.label}
            </Link>
          ))}
        </nav>

        <div className="flex items-center gap-1.5 sm:gap-2 shrink-0">
          <button
            className="grid place-items-center w-8 h-8 sm:w-8.5 sm:h-8.5 rounded-full text-brand-ink hover:scale-110 transition-transform cursor-pointer"
            type="button"
            onClick={toggleTheme}
            aria-label="Toggle dark mode"
          >
            <span className="material-symbols-outlined text-lg sm:text-xl">
              {isDark ? 'light_mode' : 'dark_mode'}
            </span>
          </button>

          <Link
            className="hidden sm:grid place-items-center w-8.5 h-8.5 rounded-full text-brand-ink hover:scale-110 transition-transform"
            href="/tentang-kami"
            aria-label="Business location"
          >
            <span className="material-symbols-outlined text-xl">location_on</span>
          </Link>

          <Link
            className="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-extrabold text-brand-ink bg-brand-accent/15 hover:bg-brand-accent/25 transition-colors"
            href="/kontak"
            data-cart-link
          >
          </Link>

          <button
            className="grid lg:hidden place-items-center w-8 h-8 rounded-full text-brand-ink hover:scale-110 transition-transform cursor-pointer"
            type="button"
            onClick={() => setIsMobileOpen(!isMobileOpen)}
            aria-label={isMobileOpen ? 'Close menu' : 'Open menu'}
            aria-expanded={isMobileOpen}
          >
            <span className="material-symbols-outlined text-xl">
              {isMobileOpen ? 'close' : 'menu'}
            </span>
          </button>
        </div>
      </header>
    </div>
  );
}
