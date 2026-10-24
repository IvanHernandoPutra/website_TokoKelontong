import type { Metadata } from 'next';
import './globals.css';

export const metadata: Metadata = {
  title: 'Toko Kelontongku — Rasa Asli Indonesia, Langsung dari Klaten',
  description: 'Camilan, bumbu dapur, dan makanan khas Nusantara langsung dari produsen lokal di Klaten, Jawa Tengah. Melayani eceran, grosir, dan pengiriman ekspor.',
  icons: {
    icon: '/images/logo-mark.png',
  },
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="en" data-theme="light">
      <head>
        <link rel="preconnect" href="https://api.fontshare.com" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
        <link
          href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@400,500,700,800,900&f[]=satoshi@400,500,700,900&display=swap"
          rel="stylesheet"
        />
        <link
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1"
          rel="stylesheet"
        />
      </head>
      <body>{children}</body>
    </html>
  );
}
