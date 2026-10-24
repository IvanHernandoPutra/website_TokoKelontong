'use client';

import { useState } from 'react';
import Link from 'next/link';
import { STORE_PHONE_NUMBER } from '@/lib/whatsapp';

export default function Footer() {
  const [inquiry, setInquiry] = useState('');

  const handleFooterSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!inquiry.trim()) return;
    const msg = `Halo Toko Kelontongku, saya tertarik info kerja sama grosir/pesanan: "${inquiry.trim()}"`;
    window.open(`https://wa.me/${STORE_PHONE_NUMBER}?text=${encodeURIComponent(msg)}`, '_blank', 'noopener,noreferrer');
  };

  return (
    <footer className="w-full border-t border-line bg-surface-card/30 text-brand-ink">
      <div className="max-w-[1240px] mx-auto px-4 sm:px-8 py-8 sm:py-10 flex flex-col lg:flex-row items-center justify-between gap-6 lg:gap-8">
        {/* Brand & Tagline in single row */}
        <div className="flex flex-col sm:flex-row items-center gap-3 sm:gap-6 text-center sm:text-left">
          <Link
            href="/"
            className="inline-flex items-center gap-2 text-xs font-extrabold tracking-wider whitespace-nowrap shrink-0"
            aria-label="Toko Kelontongku home"
          >
            <img className="w-8 h-8 rounded-lg object-contain shrink-0" src="/images/logo-mark.png" alt="Toko Kelontongku logo" />
            <span>TOKO KELONTONGKU</span>
          </Link>
          <div className="hidden sm:block h-4 w-px bg-line" />
          <p className="text-xs text-brand-muted max-w-sm">
            Klaten, Jawa Tengah &bull; Belanja kebutuhan harian, harga tetangga.
          </p>
        </div>

        {/* Elongated horizontal contact bar */}
        <form
          onSubmit={handleFooterSubmit}
          className="w-full sm:w-auto flex-1 max-w-md flex items-center gap-2 p-1.5 pl-4 rounded-full border border-line bg-brand-light/75 shadow-xs"
        >
          <span className="material-symbols-outlined text-brand-muted text-base shrink-0 hidden xs:inline-block">
            chat
          </span>
          <input
            id="newsletter-email"
            type="text"
            value={inquiry}
            onChange={(e) => setInquiry(e.target.value)}
            placeholder="Tulis pesan / tanya kerja sama grosir..."
            className="min-w-0 flex-1 bg-transparent text-xs text-brand-ink outline-none placeholder:text-brand-muted"
          />
          <button
            className="inline-flex items-center justify-center px-4.5 py-2 rounded-full bg-brand-dark text-white text-xs font-bold hover:bg-emerald-600 hover:text-white transition-colors cursor-pointer shrink-0"
            type="submit"
          >
            Kirim WA
          </button>
        </form>

        {/* Copyright */}
        <small className="text-[11px] text-brand-muted shrink-0 text-center sm:text-right whitespace-nowrap">
          &copy; 2026 Toko Kelontongku &bull; Klaten
        </small>
      </div>
    </footer>
  );
}
