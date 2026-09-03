# Toko Kelontong — Website E-Commerce & Retail Makanan Nusantara

Website katalog ritel makanan khas Indonesia untuk pasar domestik dan ekspor diaspora, dinaungi oleh **CV. Bertiga Tradexa**.

## Tech Stack
- **Framework:** Laravel 13.x (PHP 8.2+)
- **Styling:** Tailwind CSS (Tactile Warm Modernity — Nusantara Heritage Trade)
- **Admin Panel:** Filament 5.x (`/admin`)
- **Database:** SQLite (default) / PostgreSQL (Supabase ready)
- **Deployment:** Docker / Vercel / Railway / VPS

---

## Menjalankan Secara Lokal (Docker)
```bash
# Clone repository
git clone https://github.com/IvanHernandoPutra/website_TokoKelontong.git
cd website_TokoKelontong

# Jalankan container
docker compose up -d
```
Akses di browser:
- Website: `http://localhost:8085`
- Admin Filament: `http://localhost:8085/admin` (User: `admin@tokokelontong.id` / Pass: `AdminToko2026`)

---

## Panduan Deploy ke Vercel

### 1. Import Repository di Vercel
1. Buka [vercel.com](https://vercel.com) dan login dengan akun GitHub kamu.
2. Klik **"Add New..."** → **"Project"**.
3. Cari dan pilih repository `IvanHernandoPutra/website_TokoKelontong`.

### 2. Pengaturan Project (Project Settings)
1. **Root Directory:** Pilih folder `web` (klik *Edit*, pilih `web`, lalu *Save*).
2. **Framework Preset:** Pilih `Other`.
3. **Build & Output Settings:** Biarkan default (file `vercel.json` sudah mengatur routing otomatis).

### 3. Environment Variables di Vercel
Tambahkan variabel berikut di tab **Environment Variables**:
- `APP_KEY` : *(Salin nilai APP_KEY dari file `.env` lokal kamu)*
- `APP_URL` : `https://nama-project-kamu.vercel.app`
- `TOKO_WA_NUMBER` : `6281234567890` *(ganti nomor WhatsApp asli)*
- `TOKO_EMAIL` : `info@tokokelontong.id`
- `TOKO_NPWP` : *(opsional)*
- `TOKO_REGISTERED_ADDRESS` : *(opsional)*

> **Catatan Penting mengenai Database di Vercel (Serverless):**
> Vercel adalah platform serverless dengan sistem file *read-only* (ephemeral). SQLite default hanya bisa dibaca (*read-only*).
> Untuk fitur simpan pesan kontak dan update data di admin panel secara permanen, sambungkan ke database PostgreSQL cloud gratis seperti **Supabase**:
> 1. Buat project gratis di [supabase.com](https://supabase.com).
> 2. Di Vercel Environment Variables, tambahkan:
>    - `DB_CONNECTION` = `pgsql`
>    - `DB_HOST` = `db.xxx.supabase.co`
>    - `DB_PORT` = `5432`
>    - `DB_DATABASE` = `postgres`
>    - `DB_USERNAME` = `postgres`
>    - `DB_PASSWORD` = *(password supabase kamu)*
