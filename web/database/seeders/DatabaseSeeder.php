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
        // 5 Kategori dengan foto referensi
        $categoriesData = [
            'Makanan Kering & Instan' => [
                'subtitle' => 'Baso aci, seblak, mie instan',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCT8guOJx0EHiMaANGvRkFAegKN1mCsvv_h6qvqnUUyqCtBATja2aiKul2gtsKycAMq5KTEwhrX1lm5s4ofD-UxDfoTRyC1WbR7Kc0WT-Vpvb51CzuKph33wN4Lx8vw0nJOhCEl1ROzpiceDMoR4G_dsWi-CJ7Us_F29jDZ1A-CRAK9XsapcAE_NoggpdGmod5mO5j6xBAbD2ZQP1-MCAiwee7lx6DXGvpsjmtTrcemD-iob7Mlnzrn'
            ],
            'Snack & Camilan' => [
                'subtitle' => 'Basreng, kerupuk, keripik, biskuit',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBYksjnOBaqVrvDzLxcYtYhd6FG5jfyjSW9wnakEn_yvOPCcc6Yht1Vzvv-BvianjOnI1tv1FrYC5aCROeqjHhVji3G1RhdpllOo1D9K0Ew5iUypL0_mvoOb4nxhrBEf55eGBcELZr6lC_MneMl59tWyoEIjm4KYSkB2340gJMEZKKglv9fM8A7iZTmgcPGvbhUQMp_w0q2cW2tp95Prggj7vw7UZONQsJOxi1z4rW_d9P64YmEcz0q'
            ],
            'Kopi & Teh' => [
                'subtitle' => 'Kopi instan, Gayo, Toraja, teh melati',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB2XkA51Gl5gzjeCNtnmm1ZuhcbpDcXzOwyjTXzTD2ZsH7Z2eJqTU4BTgXVnmh184qBYQKbKxhbon3N5zIBy66yLeDMml7bu21TjPArcTn0hptmMmBZkvhd-hm0err3x2ANlsZrMIth-9Kq6y5wKcVN2TKKVm_fuvSGz4WKxeNZjFvKDZAZA52IPi9kAAxUAJ-evGtcG1hcdPCy9kONF8m9bZ2kQj1OidfHYyGsFgG17rxiUGExCouN'
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

        // Mapping foto dari referensi
        $imgNoodle = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCyzklUxOnHqG3r3eDaLiO9k7Betj8maR9NrQkM1aqWTWBEJEVMvOjLwJihibHEdo8MaJEZ0uFw4dDpvDG34lonhTFYZYy56DlI3DbWY9lt1yPAKLF_bkj8pPUPE9zrpkT3txzvTE7k-qgFR3gCZeOLco6DbCTdFQulP-Xm-_Ek2Co1sw0jPNOyGZHErp2OixMd1dPmOiCZgcpvWhG-2IZ50rpn_2PzTnx7uJwlHm8AVoZ3-GNohyuR';
        $imgSeblak = 'https://lh3.googleusercontent.com/aida-public/AB6AXuBuVHDwzY8usTU10Luq-EYZ7CamF5be5i1GhAX2A4a7YUXKb_JP7fr_DqL5h5TRcRTtaILBAjtB7SqyUFMBuop1QkMXbPyO0PWdLVFOV42DSSJxBZRSDO9Op4IkoecJzuBPFs_nUT1hmeVbDGV5HF_C84ZXjTeoCEMzRzJ8jxZbI2qvkgBi35-GHqZPmA9xFeyBXt91G-PtZ1b0ZNAPNex1uO5p_SFH_LItuUNFlluEb74UUNwNiWQ7';
        $imgBasoAci = 'https://lh3.googleusercontent.com/aida-public/AB6AXuAA4B-s1qhOeWpTn-1WF8hxTLHiUtyb51GQogIwA8SAlQV0O0fUUpwJSUFZSVqu2MHtSK8lsEj5Za80xKxAhx14-NJzoSwJ7FUKjyimXp5GpLWrSOzcBPdYm64orsvyOerZII7L2qm0-U3cL5UlRrE7LPXMJj6M0uquSff3m2Au_whcoOULEg_gtOTK-6q0ez22-rZihTjud9QaabPr8GuE3TaSZogm2_l0NJDslnMNCHEezPjfQIJI';
        $imgBumbu = 'https://lh3.googleusercontent.com/aida-public/AB6AXuALR246yLEL1DuuzTbKyu5JV_i-A5QX2j6gGGYDbzdpMPGIFztWm-a5VOGLvjciBVU8Wpqzg_at4rYautJn-6R7Opb4BEplewxigzRklpcDvmyxLdFisjdmUakHuVX46xB96ocEhKshm_da1MMq8XQw9lW4KUtgzxsosKQSUXJgqjepEeABmIFSkx9AdBjwP1T5hqwD6cToIHGCKEajF92cJZ2WD1z7isPfVV_uSFgtqzhtAIpTupPF';
        $imgBasreng = 'https://lh3.googleusercontent.com/aida-public/AB6AXuAwa--oAz3XcuPXuKe6RSG8x8PPFuuHZiFcJ5QL1EybBj9jN6cf9gVoYBXInIurMGr9zKV9-CfVuLHPu_JTOx4A5CJmKrMpYiza_bcm3deCi9g5GD2wPjNS8sLmV4YmyoGPp9xY01_nWCIiqZpmGK589sm00_nMoZdPFn21eAjYe_ApeWa8nQ58AFXxyQPOB9oZAk3zcH5TJ9Q7JtPKue4IradWLTTQ_jzAYq9EIz7Mc8JKD2-CupLd';
        $imgSpicyCracker = 'https://lh3.googleusercontent.com/aida-public/AB6AXuA-6_S4pmWnTjprrkzxuRUVmeuC-OiAfoNLFnWIHU1OMSKEAYZHGPk3wtJYw2LYWGQf0sEe2fTQmVzjOaiIlzHpHUEoSfuLzXYI2BAJNyf0kAZd36NnPnKj51hbbXFs617gKYVN9CoHkgd927IBI2wB-ydXvwlQ28_oiIg_lx165nxakP7MkadzCLoE-vKGsBKd1Y7XGSwxCcsMI_uHlgSmnMBtKrUugSAUzh0eSqyMFyNNX1yng7u5';
        $imgSingkong = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCwYJkSmtRO5_fZZvPpolLZxI_qzMn6pwJYCizicWkxaAJPZ0weMq9OwwZv2G-dL54ovW2y4g0Lu4IkQ2nVc_cEa_NletJbgRyKD2pJ-RJDZ4a6nKTscGVWvhVWmS8pZxsEXKkGdZTyrFLVdMiQIVMS_Upa948EKbCrcTkwNCYF0qUJjrNKQ4FAqkmbt9irwn3Yx4pRcLjbrwQIs7uv7n7o5RaH4Yi0fGY-H6KEkYWcEyncrDxSr37t';
        $imgKopiSachet = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNU3P_CP2MX3O7UkYm9BQwdf34WsfBnkeQ9GkDdUJVPpVh28jsFTOgkyheB1nWkxRO9Ns3rhZv65B2OsRIKz3Qd1OqNytKYWZIli6Ass7yA6vN3FbFFuhJNLvnss-KkPAaUHUe22OgnUt3uo-nvwGVnviGYZYqnnEbBUBEGJxp9L3RGtFCmhvTjiaVy1LBm8TYGiYy_uPPHHSJ9ThejxWgYBJIPuaeptY_62VRP-gZSRQPa3q5_Vzc';
        $imgKopiGayo = 'https://lh3.googleusercontent.com/aida-public/AB6AXuAF-YPDjQtZyg1sAjtbz8KerLeFv7s7i8DsUICMy6IpHl2cwnKFeKsHRym9JBLsJIopHSLGoqLuPINdM7Erd8IdsY-t8HTH3chc6_VCGfI7xKEvPU1p_T2SXn6GpVUhB1Y6huMhOQAD5UzXs9wtc3uFM0erzCRAoVNUw9n8Tx03CKlsz5lS3NbT_kYJclEk8mBNiACFNUF0t10Ugv9fCxXAxY8PUQmunNFT7Qz4ICNlj4YW_zb3bM5n';
        $imgKopiToraja = 'https://lh3.googleusercontent.com/aida-public/AB6AXuD3neONLmvyEN-YxNErMHgDYxZVynY_tuMik-2QQpwe0OX733iFUs0xQViqwBhtMSoR2YwBC0l9J1YvNLGJKWh1Nezce4Xi0mCigV6yj8aZRAk76OlZ1LWNSOvoitXSbW1kK0M3mJgbXfQWyJSN6Du5sN8cIvjWrdimfrCKxfKugO8kKfwjsSfksUbrKFhd7qCEActvqrps7DoyrIvThxjmNAVVoBAMuyO_B-4MF45oDs0d-zuMJKAi';
        $imgTehMelati = 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFHiIwnuV6NorVD-s01sCfzDLae0OA97NY8Z4-EIbO_jN_6Z7aEEgzEcCzXfeDX2FmxCs7AmymE-wDVrwO5BUrVhek6Dy4pCP1dxiYEz8V4tIT2-9ZOvfd4kbuJnaFRpiVadCNQNd4V_YTfAuB1ShmfQBmAkMVAz_vxdeYKA5xp50x6Ofys8VLaaglxHVejv365B-syHEMQ4P8Kw-vv_HKym_Oklbr0G7XOKP1B4SUIuVXXpe69iXq';
        $imgSambal = 'https://lh3.googleusercontent.com/aida-public/AB6AXuD-ra2pIXe4zKqZ4cHtK2tPLU92hgI-mGBZ8pXft_mjWh7XEOG_SRfJshaKEwq9DfRXqmk0hyovV-g4U-6s9T_3op2AFozC5RunKWnwqkxjxswMiM7YHzv6C9eBSvXpNiBJaEy6QaQvFmnxhfeBRx777___jyLlJros0mkxcBxnhbLp_DEVPcB8treyI5MPOufk-TfgR5Kx-DEcVhTM4Ax8147eXt4ININaWWnBvUnin8l6tSzZinr5';
        $imgChocolate = 'https://lh3.googleusercontent.com/aida-public/AB6AXuBVLCggNCcs8SjqSbvKm5Qo0zxohYBVlcdo5mQC7cIetFwOa988dEa2r_J1FqQ3n_3838_Q1g_51_38-W98jHwWw';
        $imgCereal = 'https://lh3.googleusercontent.com/aida-public/AB6AXuB_cWce38ha7FvGmZwOwc7jnzkHu9qde0XweMTKFdo9WAAEYU3_773g5g27d3h-d37_g3271';
        $imgKerupukMentah = 'https://lh3.googleusercontent.com/aida-public/AB6AXuDR_tfG5zVWk_84je9x8VM_g6IUTu1WJj-tLsbvOO42tDdwCQ9g7_33-e78328';

        // 30 Produk Lengkap
        $products = [
            // Makanan Kering & Instan
            ['Mie Instan Cup Nusantara', 'Makanan Kering & Instan', 18500, '85g / cup', 85, 'Top Demand', 24, true, 'Mie instan cup bumbu gurih khas Nusantara. Paling digemari diaspora Indonesia untuk santap praktis di rantau.', $imgNoodle],
            ['Seblak Instant Bandung Pedas Gurih', 'Makanan Kering & Instan', 22000, '200g', 200, 'Best Seller', 15, true, 'Paket komplit kerupuk, cuanki, bumbu kencur pedas autentik Jawa Barat. Kemasan tahan lama 8 bulan.', $imgSeblak],
            ['Baso Aci Instant Garut Komplit', 'Makanan Kering & Instan', 25000, '220g', 220, 'Best Seller', 19, true, 'Baso aci kenyal khas Garut lengkap dengan cuanki tahu, siomay mini, pilus cikur, minyak bawang, dan bubuk cabai.', $imgBasoAci],
            ['Bumbu Instan Rendang & Rawon', 'Makanan Kering & Instan', 16000, '100g / sachet', 100, null, 24, false, 'Pasta bumbu masak tradisional kaya rempah alami. Siap olah tanpa repot ulek bumbu.', $imgBumbu],
            ['Seblak Mix Crackers', 'Makanan Kering & Instan', 20000, '180g', 180, null, 8, false, 'Kerupuk seblak aneka bentuk dengan bumbu kencur pedas gurih, siap goreng atau siap santap.', $imgSeblak],
            ['Bumbu Instan Soto & Rawon Komplit', 'Makanan Kering & Instan', 15000, '90g', 90, null, 10, false, 'Bumbu soto ayam dan rawon daging autentik, tinggal tumis dan masak.', $imgBumbu],

            // Snack & Camilan
            ['Basreng Pedas Daun Jeruk', 'Snack & Camilan', 28000, '200g', 200, 'Paling Laris', 18, true, 'Keripik bakso goreng renyah bumbu cabai rawit pedas dan aroma segar daun jeruk.', $imgBasreng],
            ['Kerupuk Pedas Tradisional Tasikmalaya', 'Snack & Camilan', 24500, '250g', 250, 'Export Grade', 16, false, 'Kerupuk renyah bantet khas Tasikmalaya berbalut rempah cabai merah gurih pedas.', $imgSpicyCracker],
            ['Keripik Singkong Renyah Balado', 'Snack & Camilan', 18000, '250g', 250, null, 14, true, 'Keripik singkong tipis renyah bumbu balado pedas manis, favorit sepanjang masa.', $imgSingkong],
            ['Makaroni Pedas Gurih', 'Snack & Camilan', 17000, '150g', 150, null, 8, false, 'Makaroni goreng kering taburan bumbu pedas gurih, tekstur renyah bikin nagih.', $imgBasreng],
            ['Biskuit Kelapa Panggang', 'Snack & Camilan', 21000, '300g', 300, null, 19, false, 'Biskuit kelapa panggang renyah dengan manis gurih alami, teman terbaik secangkir teh.', $imgChocolate],
            ['Chocolate Bar Klasik', 'Snack & Camilan', 24000, '100g', 100, 'Top Demand', 26, true, 'Cokelat batangan klasik premium, camilan manis paling sering dipesan pelanggan luar negeri.', $imgChocolate],
            ['Cheese Bar Renyah', 'Snack & Camilan', 19500, '120g', 120, null, 7, false, 'Stik keju panggang renyah dengan taburan keju asli, gurih tanpa pengawet.', $imgChocolate],
            ['Kerupuk Mentah Aneka Rasa', 'Snack & Camilan', 12000, '500g', 500, null, 6, false, 'Kerupuk mentah aneka bentuk siap goreng, stok wajib dapur diaspora.', $imgKerupukMentah],

            // Kopi & Teh
            ['Kopi Instan Sachet Nusantara', 'Kopi & Teh', 25000, '10 x 20g', 200, 'Top Demand', 28, true, 'Kopi instan sachet gula aren, praktis diseduh kapan saja. Paling sering dikirim ke luar negeri.', $imgKopiSachet],
            ['Kopi Gayo Robusta 250g', 'Kopi & Teh', 55000, '250g', 250, 'Grade 1 Export', 10, true, 'Aroma kuat dengan body tebal khas perkebunan Gayo Aceh. Kemasan zipper foil kedap udara.', $imgKopiGayo],
            ['Kopi Toraja Arabika Sachet', 'Kopi & Teh', 45000, '10 x 10g', 100, 'Single-Origin', 8, false, 'Biji kopi pilihan dataran tinggi Tana Toraja dengan profil rasa rempah manis dan keasaman seimbang.', $imgKopiToraja],
            ['Teh Melati Wangi Alami', 'Kopi & Teh', 16500, '100g', 100, 'Wangi Alami', 8, false, 'Teh melati tradisional wangi alami dari bunga melati asli, seduhan klasik khas Jawa.', $imgTehMelati],
            ['Teh Instan Serbuk Melati', 'Kopi & Teh', 14000, '10 x 25g', 250, null, 8, false, 'Teh instan serbuk aroma melati, tinggal seduh air panas atau dingin.', $imgTehMelati],
            ['Kopi Lampung Robusta Bubuk', 'Kopi & Teh', 38000, '200g', 200, null, 6, false, 'Kopi robusta Lampung sangrai medium, pahit mantap cocok untuk kopi tubruk.', $imgKopiGayo],

            // Minuman & Sereal
            ['Susu Bubuk Instant Full Cream', 'Minuman & Sereal', 42000, '400g', 400, null, 16, false, 'Susu bubuk full cream instant, larut cepat untuk campuran kopi dan teh.', $imgCereal],
            ['Cereal Cokelat Renyah', 'Minuman & Sereal', 35000, '300g', 300, null, 19, false, 'Sereal cokelat renyah untuk sarapan praktis, favorit keluarga diaspora.', $imgCereal],
            ['Minuman Serbuk Cokelat 3in1', 'Minuman & Sereal', 22000, '10 x 30g', 300, null, 3, false, 'Minuman serbuk cokelat 3in1, manis creamy tinggal seduh.', $imgCereal],
            ['Minuman Serbuk Sereal Vanila', 'Minuman & Sereal', 20000, '10 x 28g', 280, null, 3, false, 'Minuman serbuk sereal rasa vanila, pengganti sarapan praktis dan mengenyangkan.', $imgCereal],
            ['Minuman Serbuk Aneka Rasa Buah', 'Minuman & Sereal', 15000, '10 x 25g', 250, null, 8, false, 'Minuman serbuk aneka rasa buah tropis, segar diseduh dingin.', $imgCereal],

            // Bumbu & Sambal
            ['Sambal Bawang Botol Segar', 'Bumbu & Sambal', 32000, '150g', 150, 'Pedas Autentik', 4, true, 'Sambal bawang segar dengan lapisan minyak kelapa, segel induksi aman untuk pengiriman jarak jauh.', $imgSambal],
            ['Cabai Bubuk Ekstra Pedas', 'Bumbu & Sambal', 18000, '100g', 100, null, 3, false, 'Cabai bubuk dari cabai rawit asli, pedas murni tanpa campuran.', $imgSambal],
            ['Sambal Terasi Matang', 'Bumbu & Sambal', 30000, '150g', 150, null, 2, false, 'Sambal terasi matang gurih pedas, teman wajib lalapan dan ayam goreng.', $imgSambal],
            ['Kunyit Bubuk Murni', 'Bumbu & Sambal', 12000, '100g', 100, null, 2, false, 'Kunyit bubuk murni untuk jamu dan masakan, warna kuning alami.', $imgBumbu],
            ['Bumbu Pecel Kacang Klaten', 'Bumbu & Sambal', 20000, '200g', 200, 'Khas Klaten', 3, false, 'Bumbu pecel kacang khas Klaten, tinggal seduh air hangat. Rasa kampung halaman.', $imgBumbu],
        ];

        foreach ($products as [$name, $cat, $price, $wl, $wg, $badge, $ci, $featured, $desc, $img]) {
            Product::create([
                'category_id' => $cats[$cat]->id,
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $desc,
                'price_idr' => $price,
                'weight_label' => $wl,
                'weight_grams' => $wg,
                'badge' => $badge,
                'ci_frequency' => $ci,
                'is_featured' => $featured,
                'image' => $img,
            ]);
        }

        // Toko Klaten dengan foto referensi
        Store::create([
            'name' => 'Toko Kelontong — Klaten',
            'city' => 'Klaten, Jawa Tengah',
            'address' => 'Griya Trucuk Indah No. 53, Jambon, Sabrang Lor, Trucuk',
            'phone' => '+62 858-7091-9026',
            'hours' => 'Senin–Sabtu, 08.00–20.00 WIB',
            'maps_url' => 'https://maps.google.com/?q=Trucuk+Klaten+Jawa+Tengah',
            'is_main' => true,
        ]);
    }
}
