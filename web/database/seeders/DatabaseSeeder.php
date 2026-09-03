<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categoriesData = [
            'Makanan Kering & Instan' => [
                'subtitle' => 'Baso aci, seblak, mie instan',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCKCtV05wLjWJq0YoyBaQC4XbiI9bazHg-tUi98MwMqa40VzkDflCW5MDHfJ56sRjNDuX787izk1kH-uNNBJ_voGIwee_KW7tw01J7XOLfWjUeUWY7J7O4y6zDxnfRew0SE6pOyfioZveVPUz_h1irQtz-Zy1qWMAKmFWNkMpj-wnEb7tSgMoqlXY1z4tfjwOnNCq0sNQANi4HTmV1XacrzLjtHQADXfWGoXHs8fQF-3mSwDpm1PTeT'
            ],
            'Snack & Camilan' => [
                'subtitle' => 'Basreng, kerupuk, keripik, biskuit',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC3Ym7k-Yv8aM1eJ1uB_2yH9oZqRtWuTfVdKsPnLmOpQvN8rXwYzA0B2C4D6E8F0G2H4I6J8K0L2M4N6P8Q0R2S4T6U8V0W2X4Y6Z8A0B2C4D6E8F0G2H4I6J8K0L2M4N6P8Q0R2S4T6U8V0W2X4Y6Z8A0B2C4D6E8F0G2H4I6J8K0L2M'
            ],
            'Kopi & Teh' => [
                'subtitle' => 'Kopi instan, Gayo, Toraja, teh melati',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCgL9xN3bQ5r7sT1vW2yZ4A6C8E0G2I4K6M8O0Q2S4U6W8Y0A2C4E6G8I0K2M4O6Q8S0U2W4Y6A8C0E2G4I6K8M0O2Q4S6U8W0Y2A4C6E8G0I2K4M6O8Q0S2U4W6Y8A0C2E4G6I8K0M2O4Q6S8U0W2Y4A6C8E0G2I4K6M8O0Q2S'
            ],
            'Minuman & Sereal' => [
                'subtitle' => 'Susu bubuk, cereal, sari jahe',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAbtUEdrBmlYRofNLVK98LQvZgd9fpMpdfQ-hpY0STT9Dwy8E5wgrrhxMNm37Ec4usLWDHhLR2Y5MyufXmltwi0Fta8kNSETJV869xQZW20Zq2RsIqC7XwL3kICJghVO6_cNzwfomyBD9gGTHO-SdScNs0TevJIxR59A-Emh6467i4ziWNKGRJJryfrWpFniQ-Z04dBUzWCRE2Y2pfyxviLTw5g4WF3B0yo3eAYHzzBC1vdjpFdQkQj'
            ],
            'Bumbu & Sambal' => [
                'subtitle' => 'Bumbu instan, sambal botol, cabai bubuk',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDBx0sG9hiuDMblxXCgZrP5PZp9TopzJny1PLzgGcq7rWO1kKx-7JppzUlzMM8S62WpSGKX2ZxuS2DgDtnrFN_iPnitYtrlBHlup4lnuXEPFJrR7QR8hOiDJAcKqVitUzQZ8cV8jVAmJVouCPnn22Icq1VPUBSaXHxAolQw3LDEI-YNqgKxIE_6vYLHQcKkNY6GtmvN_kZn0bNagz5YlZbfPgOgXsu7TuZ5f7YphhiHNe4Is2xPhASl'
            ],
        ];

        $cats = [];
        foreach ($categoriesData as $name => $info) {
            $cats[$name] = Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'subtitle' => $info['subtitle'],
                'image' => $info['image'],
            ]);
        }

        // 30 UNIQUE, DISTINCT PACKAGED EXPORT GOODS IMAGES (ZERO DUPLICATES)
        $uniqueImages = [
            1 => "https://images.unsplash.com/photo-1569718212165-3a8278d5f624?w=600&auto=format&fit=crop&q=80",
            2 => "https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?w=600&auto=format&fit=crop&q=80",
            3 => "https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=600&auto=format&fit=crop&q=80",
            4 => "https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=600&auto=format&fit=crop&q=80",
            5 => "https://images.unsplash.com/photo-1599490659213-e2b9527bd087?w=600&auto=format&fit=crop&q=80",
            6 => "https://images.unsplash.com/photo-1506368249639-73a05d6f6488?w=600&auto=format&fit=crop&q=80",
            7 => "https://images.unsplash.com/photo-1566478989037-eec170784d0b?w=600&auto=format&fit=crop&q=80",
            8 => "https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?w=600&auto=format&fit=crop&q=80",
            9 => "https://images.unsplash.com/photo-1551462147-ff29053bfc14?w=600&auto=format&fit=crop&q=80",
            10 => "https://images.unsplash.com/photo-1541592106381-b31e9677c0e5?w=600&auto=format&fit=crop&q=80",
            11 => "https://images.unsplash.com/photo-1509440159596-0249088772ff?w=600&auto=format&fit=crop&q=80",
            12 => "https://images.unsplash.com/photo-1606313564200-e75d5e30476c?w=600&auto=format&fit=crop&q=80",
            13 => "https://images.unsplash.com/photo-1590080875515-8a3a8dc5735e?w=600&auto=format&fit=crop&q=80",
            14 => "https://images.unsplash.com/photo-1601050690597-df0568f70950?w=600&auto=format&fit=crop&q=80",
            15 => "https://images.unsplash.com/photo-1559056199-641a0ac8b55e?w=600&auto=format&fit=crop&q=80",
            16 => "https://images.unsplash.com/photo-1610632380989-680fe40816c6?w=600&auto=format&fit=crop&q=80",
            17 => "https://images.unsplash.com/photo-1587734195503-904fca47e0e9?w=600&auto=format&fit=crop&q=80",
            18 => "https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=600&auto=format&fit=crop&q=80",
            19 => "https://images.unsplash.com/photo-1597481499750-3e6b22637e12?w=600&auto=format&fit=crop&q=80",
            20 => "https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600&auto=format&fit=crop&q=80",
            21 => "https://images.unsplash.com/photo-1550583724-b2692b85b150?w=600&auto=format&fit=crop&q=80",
            22 => "https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&auto=format&fit=crop&q=80",
            23 => "https://images.unsplash.com/photo-1542990253-0d0f5be5f0ed?w=600&auto=format&fit=crop&q=80",
            24 => "https://images.unsplash.com/photo-1589733955941-5eeaf752f6dd?w=600&auto=format&fit=crop&q=80",
            25 => "https://images.unsplash.com/photo-1622597467836-f3285f2131b8?w=600&auto=format&fit=crop&q=80",
            26 => "https://images.unsplash.com/photo-1588166524941-3bf61a9c41db?w=600&auto=format&fit=crop&q=80",
            27 => "https://images.unsplash.com/photo-1588252303782-cb80119abd6d?w=600&auto=format&fit=crop&q=80",
            28 => "https://images.unsplash.com/photo-1565557623262-b51c2513a641?w=600&auto=format&fit=crop&q=80",
            29 => "https://images.unsplash.com/photo-1615485290382-441e4d049cb5?w=600&auto=format&fit=crop&q=80",
            30 => "https://images.unsplash.com/photo-1590301157890-4810ed352733?w=600&auto=format&fit=crop&q=80",
        ];

        $products = [
            ['Makanan Kering & Instan', 'Mie Instan Cup Nusantara', 18500, '85g / cup', 'Mie instan cup bumbu gurih khas Nusantara. Paling digemari diaspora karena praktis dan cita rasa kampung halaman yang pekat.', $uniqueImages[1], 'TOP DEMAND', true],
            ['Makanan Kering & Instan', 'Seblak Instant Bandung Pedas Gurih', 22000, '200g', 'Paket komplit kerupuk, cuanki, bumbu kencur pedas autentik Jawa Barat. Kemasan standing pouch tahan lama.', $uniqueImages[2], 'BEST SELLER', true],
            ['Makanan Kering & Instan', 'Baso Aci Instant Garut Komplit', 25000, '220g', 'Baso aci kenyal khas Garut lengkap dengan cuanki tahu, siomay mini, pilus cikur, bumbu minyak bawang, dan cabai bubuk.', $uniqueImages[3], 'BEST SELLER', true],
            ['Makanan Kering & Instan', 'Bumbu Instan Rendang & Rawon', 16000, '100g', 'Bumbu pasta siap masak rempah otentik Padang dan Jawa Timur dalam kemasan sachet kedap udara.', $uniqueImages[4], null, false],
            ['Makanan Kering & Instan', 'Seblak Mix Crackers', 24000, '250g', 'Perpaduan kerupuk seblak aneka bentuk dalam standing pouch kedap udara.', $uniqueImages[5], null, false],
            ['Makanan Kering & Instan', 'Bumbu Instan Soto & Rawon Komplit', 17000, '120g', 'Bumbu basah rempah kluwek pilihan untuk rawon dan soto nusantara. Praktis untuk diaspora.', $uniqueImages[6], null, false],

            ['Snack & Camilan', 'Basreng Pedas Daun Jeruk', 28000, '200g', 'Keripik bakso goreng renyah bumbu cabai rawit pedas dan aroma segar daun jeruk dalam standing pouch ziplock.', $uniqueImages[7], 'PALING LARIS', true],
            ['Snack & Camilan', 'Kerupuk Pedas Tradisional Tasikmalaya', 20000, '150g', 'Kerupuk bantet renyah dalam standing pouch kedap udara khas Tasikmalaya.', $uniqueImages[8], null, false],
            ['Snack & Camilan', 'Keripik Singkong Renyah Balado', 18000, '250g', 'Keripik singkong tipis renyah bumbu balado pedas manis dalam standing pouch zipper.', $uniqueImages[9], null, true],
            ['Snack & Camilan', 'Makaroni Pedas Gurih', 15000, '150g', 'Makaroni goreng renyah bumbu tabur pedas asin gurih kemasan pouch praktis.', $uniqueImages[10], null, false],
            ['Snack & Camilan', 'Biskuit Kelapa Panggang', 22000, '300g', 'Biskuit renyah rasa kelapa gurih manis dalam kemasan foil kedap udara.', $uniqueImages[11], null, false],
            ['Snack & Camilan', 'Chocolate Bar Klasik', 34000, '100g', 'Cokelat batangan klasik premium dalam kemasan wrapper foil batik, camilan manis favorit.', $uniqueImages[12], 'TOP DEMAND', true],
            ['Snack & Camilan', 'Cheese Bar Renyah', 32000, '100g', 'Wafer cokelat salut keju lezat dalam kemasan bar retail kedap udara.', $uniqueImages[13], null, false],
            ['Snack & Camilan', 'Kerupuk Mentah Aneka Rasa', 26000, '500g', 'Kerupuk mentah aneka rasa dalam kemasan vacuum bag tebal transparan siap goreng.', $uniqueImages[14], null, false],

            ['Kopi & Teh', 'Kopi Instan Sachet Nusantara', 35000, '10 x 20g', 'Kopi instan sachet gula aren dalam box retail praktis.', $uniqueImages[15], 'TOP DEMAND', true],
            ['Kopi & Teh', 'Kopi Gayo Robusta 250g', 55000, '250g', 'Aroma kuat dengan body tebal khas Gayo Aceh dalam kemasan standing pouch kraft foil zipper valve.', $uniqueImages[16], 'GRADE 1 EXPORT', true],
            ['Kopi & Teh', 'Kopi Toraja Arabika Sachet', 42000, '10 x 15g', 'Kopi arabika Toraja dalam kemasan sachet drip siap seduh.', $uniqueImages[17], null, false],
            ['Kopi & Teh', 'Teh Melati Wangi Alami', 20000, '250g', 'Daun teh hijau rendaman kuntum melati segar dalam pouch kedap udara.', $uniqueImages[18], null, false],
            ['Kopi & Teh', 'Teh Instan Serbuk Melati', 28000, '300g', 'Teh serbuk instan aroma melati dalam kemasan pouch praktis.', $uniqueImages[19], null, false],
            ['Kopi & Teh', 'Kopi Lampung Robusta Bubuk', 38000, '200g', 'Kopi bubuk robusta Lampung dalam standing pouch kraft kedap udara.', $uniqueImages[20], null, false],

            ['Minuman & Sereal', 'Susu Bubuk Instant Full Cream', 48000, '400g', 'Susu bubuk full cream bernutrisi tinggi dalam kemasan sachet pouch aluminium foil.', $uniqueImages[21], null, false],
            ['Minuman & Sereal', 'Cereal Cokelat Renyah', 36000, '300g', 'Sereal sarapan cokelat dalam kemasan sachet pack kedap udara.', $uniqueImages[22], null, false],
            ['Minuman & Sereal', 'Minuman Serbuk Cokelat 3in1', 32000, '10 x 30g', 'Minuman cokelat creamy malt dalam kemasan sachet pack hangat.', $uniqueImages[23], null, false],
            ['Minuman & Sereal', 'Minuman Serbuk Sereal Vanila', 30000, '10 x 28g', 'Minuman serbuk sereal rasa vanila sachet praktis mengenyangkan.', $uniqueImages[24], null, false],
            ['Minuman & Sereal', 'Minuman Serbuk Aneka Rasa Buah', 25000, '10 sachet', 'Serbuk minuman aneka rasa buah segar dalam kemasan sachet pack.', $uniqueImages[25], null, false],

            ['Bumbu & Sambal', 'Sambal Bawang Botol Segar', 35000, '200g', 'Sambal bawang botol kaca dengan segel induksi aluminium foil anti bocor untuk kargo pesawat.', $uniqueImages[26], 'BEST SELLER', false],
            ['Bumbu & Sambal', 'Cabai Bubuk Ekstra Pedas', 22000, '100g', 'Cabai kering giling murni dalam botol bumbu segel kedap udara.', $uniqueImages[27], null, false],
            ['Bumbu & Sambal', 'Sambal Terasi Matang', 34000, '200g', 'Sambal terasi udang fermentasi matang dalam botol kaca segel induksi.', $uniqueImages[28], null, false],
            ['Bumbu & Sambal', 'Kunyit Bubuk Murni', 15000, '100g', 'Kunyit kuning asli giling halus dalam sachet bumbu kedap udara.', $uniqueImages[29], null, false],
            ['Bumbu & Sambal', 'Bumbu Pecel Kacang Klaten', 26000, '250g', 'Sambal pecel sangrai kacang tanah bumbu daun jeruk khas Klaten dalam kemasan pack vacuum.', $uniqueImages[30], 'KHAS KLATEN', false],
        ];

        foreach ($products as $p) {
            Product::create([
                'category_id' => $cats[$p[0]]->id,
                'name' => $p[1],
                'slug' => Str::slug($p[1]),
                'price' => $p[2],
                'weight_label' => $p[3],
                'description' => $p[4],
                'image' => $p[5],
                'badge' => $p[6],
                'is_featured' => $p[7],
            ]);
        }

        // Toko Klaten
        Store::create([
            'name' => 'Toko Kelontong — Klaten',
            'city' => 'Klaten',
            'address' => 'Griya Trucuk Indah No. 53, Jambon, Sabrang Lor, Trucuk',
            'phone' => '+62 858-7091-9026',
            'map_url' => 'https://maps.google.com/?q=Trucuk+Klaten',
            'is_main' => true,
        ]);
    }
}
