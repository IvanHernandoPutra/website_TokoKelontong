export const STORE_PHONE_NUMBER = '62895385877877';
export const STORE_PHONE_DISPLAY = '+62895385877877';

export function getWhatsAppOrderUrl(productName: string, price?: number) {
  const priceFormatted = price ? ` (Rp ${price.toLocaleString('id-ID')})` : '';
  const message = `Halo Toko Kelontongku, saya ingin pesan produk: *${productName}*${priceFormatted}. Apakah stok masih tersedia?`;
  return `https://wa.me/${STORE_PHONE_NUMBER}?text=${encodeURIComponent(message)}`;
}

export function getWhatsAppInquiryUrl(params: {
  name: string;
  company?: string;
  contact: string;
  topic?: string;
  destination: string;
  message: string;
}) {
  const lines = [
    `*Halo Toko Kelontongku, saya ingin konsultasi/pesan:*`,
    `• *Nama:* ${params.name}`,
    params.company ? `• *Usaha/Toko:* ${params.company}` : '',
    params.topic ? `• *Kebutuhan:* ${params.topic}` : '',
    `• *Kontak:* ${params.contact}`,
    `• *Tujuan Kirim:* ${params.destination}`,
    `• *Pesan:* ${params.message}`,
  ].filter(Boolean);

  return `https://wa.me/${STORE_PHONE_NUMBER}?text=${encodeURIComponent(lines.join('\n'))}`;
}
