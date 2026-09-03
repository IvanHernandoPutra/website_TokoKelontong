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
            1 => '/images/products/1-pop-mie.jpg',
            2 => '/images/products/2-seblak-maicih.jpg',
            3 => '/images/products/3-baso-aci.jpg',
            4 => '/images/products/4-kobe-rendang.jpg',
            5 => '/images/products/5-indomie.jpg',
            6 => '/images/products/6-kokita-rawon.jpg',
            7 => '/images/products/7-basreng.jpg',
            8 => '/images/products/8-kerupuk-merah.jpg',
            9 => '/images/products/9-keripik-singkong.jpg',
            10 => '/images/products/10-makaroni.jpg',
            11 => '/images/products/11-roma-kelapa.jpg',
            12 => '/images/products/12-silverqueen.jpg',
            13 => '/images/products/13-tango.jpg',
            14 => '/images/products/14-kerupuk-mentah.jpg',
            15 => '/images/products/15-kapal-api.jpg',
            16 => '/images/products/16-kopi-gayo.jpg',
            17 => '/images/products/17-kopi-toraja.jpg',
            18 => '/images/products/18-sariwangi.jpg',
            19 => '/images/products/19-teh-cap-botol.jpg',
            20 => '/images/products/20-abc-white-coffee.jpg',
            21 => '/images/products/21-dancow.jpg',
            22 => '/images/products/22-koko-krunch.jpg',
            23 => '/images/products/23-milo.jpg',
            24 => '/images/products/24-energen.jpg',
            25 => '/images/products/25-nutrisari.jpg',
            26 => '/images/products/26-sambal-bawang.jpg',
            27 => '/images/products/27-boncabe.jpg',
            28 => '/images/products/28-sambal-terasi.jpg',
            29 => '/images/products/29-kunyit.jpg',
            30 => '/images/products/30-pecel.jpg',
            ];

        $products = [
            ['Makanan Kering & Instan', 'Pop Mie Ayam Bawang Cup 75g', 18500, '85g / cup', 'Mie instan cup bumbu gurih khas Nusantara. Paling digemari diaspora karena praktis dan cita rasa kampung halaman yang pekat.', $uniqueImages[1], 'TOP DEMAND', true],
            ['Makanan Kering & Instan', 'Seblak Instan Maicih 100g', 22000, '200g', 'Paket komplit kerupuk, cuanki, bumbu kencur pedas autentik Jawa Barat. Kemasan standing pouch tahan lama.', $uniqueImages[2], 'BEST SELLER', true],
            ['Makanan Kering & Instan', 'Baso Aci Instan Mang Dedi 120g', 25000, '220g', 'Baso aci kenyal khas Garut lengkap dengan cuanki tahu, siomay mini, pilus cikur, bumbu minyak bawang, dan cabai bubuk.', $uniqueImages[3], 'BEST SELLER', true],
            ['Makanan Kering & Instan', 'Kobe Bumbu Racik Rendang 55g', 16000, '100g', 'Bumbu pasta siap masak rempah otentik Padang dan Jawa Timur dalam kemasan sachet kedap udara.', $uniqueImages[4], null, false],
            ['Makanan Kering & Instan', 'Indomie Goreng Original 85g', 24000, '250g', 'Perpaduan kerupuk seblak aneka bentuk dalam standing pouch kedap udara.', $uniqueImages[5], null, false],
            ['Makanan Kering & Instan', 'Kokita Bumbu Rawon 50g', 17000, '120g', 'Bumbu basah rempah kluwek pilihan untuk rawon dan soto nusantara. Praktis untuk diaspora.', $uniqueImages[6], null, false],

            ['Snack & Camilan', 'Krisbar Basreng Pedas Daun Jeruk 200g', 28000, '200g', 'Keripik bakso goreng renyah bumbu cabai rawit pedas dan aroma segar daun jeruk dalam standing pouch ziplock.', $uniqueImages[7], 'PALING LARIS', true],
            ['Snack & Camilan', 'Kerupuk Merah Pedas 150g', 20000, '150g', 'Kerupuk bantet renyah dalam standing pouch kedap udara khas Tasikmalaya.', $uniqueImages[8], null, false],
            ['Snack & Camilan', 'Victory Keripik Singkong Balado 200g', 18000, '250g', 'Keripik singkong tipis renyah bumbu balado pedas manis dalam standing pouch zipper.', $uniqueImages[9], null, true],
            ['Snack & Camilan', 'Makaroni Gembira Pedas 160g', 15000, '150g', 'Makaroni goreng renyah bumbu tabur pedas asin gurih kemasan pouch praktis.', $uniqueImages[10], null, false],
            ['Snack & Camilan', 'Roma Biskuit Kelapa 300g', 22000, '300g', 'Biskuit renyah rasa kelapa gurih manis dalam kemasan foil kedap udara.', $uniqueImages[11], null, false],
            ['Snack & Camilan', 'SilverQueen Dark Chocolate 65g', 34000, '100g', 'Cokelat batangan klasik premium dalam kemasan wrapper foil batik, camilan manis favorit.', $uniqueImages[12], 'TOP DEMAND', true],
            ['Snack & Camilan', 'Tango Wafer Cheese 130g', 32000, '100g', 'Wafer cokelat salut keju lezat dalam kemasan bar retail kedap udara.', $uniqueImages[13], null, false],
            ['Snack & Camilan', 'Kerupuk Mentah Aneka Bentuk 500g', 26000, '500g', 'Kerupuk mentah aneka rasa dalam kemasan vacuum bag tebal transparan siap goreng.', $uniqueImages[14], null, false],

            ['Kopi & Teh', 'Kapal Api Special Mix 165g', 35000, '10 x 20g', 'Kopi instan sachet gula aren dalam box retail praktis.', $uniqueImages[15], 'TOP DEMAND', true],
            ['Kopi & Teh', 'Kopi Gayo Robusta Kapal Api 250g', 55000, '250g', 'Aroma kuat dengan body tebal khas Gayo Aceh dalam kemasan standing pouch kraft foil zipper valve.', $uniqueImages[16], 'GRADE 1 EXPORT', true],
            ['Kopi & Teh', 'Kopi Toraja Toarco Arabika 200g', 42000, '10 x 15g', 'Kopi arabika Toraja dalam kemasan sachet drip siap seduh.', $uniqueImages[17], null, false],
            ['Kopi & Teh', 'Sariwangi Teh Melati 100g', 20000, '250g', 'Daun teh hijau rendaman kuntum melati segar dalam pouch kedap udara.', $uniqueImages[18], null, false],
            ['Kopi & Teh', 'Teh Celup Cap Botol 50g', 28000, '300g', 'Teh serbuk instan aroma melati dalam kemasan pouch praktis.', $uniqueImages[19], null, false],
            ['Kopi & Teh', 'ABC White Coffee Latte 180g', 38000, '200g', 'Kopi bubuk robusta Lampung dalam standing pouch kraft kedap udara.', $uniqueImages[20], null, false],

            ['Minuman & Sereal', 'Dancow Full Cream 400g', 48000, '400g', 'Susu bubuk full cream bernutrisi tinggi dalam kemasan sachet pouch aluminium foil.', $uniqueImages[21], null, false],
            ['Minuman & Sereal', 'Nestle Koko Krunch 300g', 36000, '300g', 'Sereal sarapan cokelat dalam kemasan sachet pack kedap udara.', $uniqueImages[22], null, false],
            ['Minuman & Sereal', 'Milo Activ-Go 300g', 32000, '10 x 30g', 'Minuman cokelat creamy malt dalam kemasan sachet pack hangat.', $uniqueImages[23], null, false],
            ['Minuman & Sereal', 'Energen Vanila 30g x 8', 30000, '10 x 28g', 'Minuman serbuk sereal rasa vanila sachet praktis mengenyangkan.', $uniqueImages[24], null, false],
            ['Minuman & Sereal', 'Nutrisari Jeruk Peras 300g', 25000, '10 sachet', 'Serbuk minuman aneka rasa buah segar dalam kemasan sachet pack.', $uniqueImages[25], null, false],

            ['Bumbu & Sambal', 'Sambal Bawang Botol 200g', 35000, '200g', 'Sambal bawang botol kaca dengan segel induksi aluminium foil anti bocor untuk kargo pesawat.', $uniqueImages[26], 'BEST SELLER', false],
            ['Bumbu & Sambal', 'BonCabe Level 10 Botol 30g', 22000, '100g', 'Cabai kering giling murni dalam botol bumbu segel kedap udara.', $uniqueImages[27], null, false],
            ['Bumbu & Sambal', 'Sambal Terasi ABC 135g', 34000, '200g', 'Sambal terasi udang fermentasi matang dalam botol kaca segel induksi.', $uniqueImages[28], null, false],
            ['Bumbu & Sambal', 'Kunyit Bubuk Murni 100g', 15000, '100g', 'Kunyit kuning asli giling halus dalam sachet bumbu kedap udara.', $uniqueImages[29], null, false],
            ['Bumbu & Sambal', 'Bumbu Pecel Klaten 250g', 26000, '250g', 'Sambal pecel sangrai kacang tanah bumbu daun jeruk khas Klaten dalam kemasan pack vacuum.', $uniqueImages[30], 'KHAS KLATEN', false],
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
