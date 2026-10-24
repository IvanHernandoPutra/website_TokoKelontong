'use client';

import { useState, useEffect } from 'react';

export default function Preloader() {
  const [count, setCount] = useState(0);
  const [isFinished, setIsFinished] = useState(false);

  useEffect(() => {
    let current = 0;
    const interval = setInterval(() => {
      current += 4;
      if (current >= 100) {
        current = 100;
        setCount(100);
        clearInterval(interval);
        setTimeout(() => setIsFinished(true), 400);
      } else {
        setCount(current);
      }
    }, 25);

    return () => clearInterval(interval);
  }, []);

  if (isFinished) return null;

  return (
    <div
      className={`fixed inset-0 z-50 grid place-content-center gap-4 bg-brand-primary text-brand-dark text-center transition-all duration-700 ease-[cubic-bezier(0.7,0,0.3,1)] ${
        count === 100 ? '-translate-y-full opacity-0 pointer-events-none' : 'translate-y-0 opacity-100'
      }`}
    >
      <div className="flex items-center gap-2 text-xs font-extrabold tracking-widest">
        <img className="w-8 h-8 rounded-lg object-contain" src="/images/logo-mark.png" alt="Toko Kelontongku logo" />
        <span>TOKO KELONTONGKU</span>
      </div>
      <span className="font-display text-5xl md:text-6xl font-extrabold">{count}</span>
    </div>
  );
}
