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

        // Standing Pouch & Export Retail Pack Images
        $imgNoodle = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCyzklUxOnHqG3r3eDaLiO9k7Betj8maR9NrQkM1aqWTWBEJEVMvOjLwJihibHEdo8MaJEZ0uFw4dDpvDG34lonhTFYZYy56DlI3DbWY9lt1yPAKLF_bkj8pPUPE9zrpkT3txzvTE7k-qgFR3gCZeOLco6DbCTdFQulP-Xm-_Ek2Co1sw0jPNOyGZHErp2OixMd1dPmOiCZgcpvWhG-2IZ50rpn_2PzTnx7uJwlHm8AVoZ3-GNohyuR';
        $imgSeblak = 'https://lh3.googleusercontent.com/aida-public/AB6AXuAAZvFfyQA5V5uoqxuengYaLbRkjwDj8ZFtCAXWRLGYFaMCgN5jCt6yrjr_F85Pb5AZmvESLQqzxWt-a3XPdm2QpPrZbduN36HpLY53gk8NiSq64wknaepu5QtG66w1YRby28WRfCHPJjKBM6Q6JODX2ePw1FhtUPFDlUuieSlsZxjdYg3UazcC0UNqTcD9MmCy9bbPCcyX7BR6BHh_9KV3y9eZPT34It1ISNK8GRp6uN1k0riSYIcd';
        $imgBasoAci = 'https://lh3.googleusercontent.com/aida-public/AB6AXuDx7e5pvv4XG7Ze9SU99yFqDmoi7PtGc1tGZN3L9V3_vt42IlW2_8tPRdE6wVgg6OApIQF531gv1DkhRUmSeroRyI3PIam2SOc_yFLO1y8R4GUzqH16rqBHniytC4ZjmpuLvkemmVWRKjP6ugaSswDIQ6Y3wgkq_HILlnAP85eESoT0fWqq5T1JAkcefshZKTCeRS-XKY1pOguUu3yzNj2Mx9WPq6oA7Pu49ODvIqZT6cpX538qzM23';
        $imgBumbu = 'https://lh3.googleusercontent.com/aida-public/AB6AXuDe7sd2vNtQLW8QIogpf6EgP53BLEa9yYJK-TPaBJHwsDozLmyTPyWJlyZBlGhL6rLliJdX_dBGg-VcmrqGhrtCqQsw1k1gi2ODfuVsuG2oDcd9xUKEnenbGzvRUqZcviOifueHcrD44nA9fzKPFNs1fYCKyr-tC7ANNdMADRezU3ItEd01AB3i3ZEfFnzzBeHr5luIXLpJnpu4PqV80MvLt5GMcUnoYmaPhYdONuxVRaGDb8tNsDsD';
        $imgBasreng = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCEwmxFPSeZKyzDCREeTI8pbpZiouIKrG-WF670nufg0mFt9TnVyw2nEXhNcoMUQiaZpvGXtMZJw0KGowtAT3OQuDXwI8-Qyd3mXLL_lefJkms_z1G9tceTQ5abkACMocRZZnKWg1_o1_XnXc25Q5iDDaEGikksg1W19tt10hNBBw4Uu7L_-F2Dz4ZIbawRthuPqqdDhcnUvCVqdoHXZdqi2Xi1GUypQ3MVv6wvThKR-4CKT4Ma1O1R';
        $imgSpicyCracker = 'https://lh3.googleusercontent.com/aida-public/AB6AXuA-6_S4pmWnTjprrkzxuRUVmeuC-OiAfoNLFnWIHU1OMSKEAYZHGPk3wtJYw2LYWGQf0sEe2fTQmVzjOaiIlzHpHUEoSfuLzXYI2BAJNyf0kAZd36NnPnKj51hbbXFs617gKYVN9CoHkgd927IBI2wB-ydXvwlQ28_oiIg_lx165nxakP7MkadzCLoE-vKGsBKd1Y7XGSwxCcsMI_uHlgSmnMBtKrUugSAUzh0eSqyMFyNNX1yng7u5';
        $imgSingkong = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCwYJkSmtRO5_fZZvPpolLZxI_qzMn6pwJYCizicWkxaAJPZ0weMq9OwwZv2G-dL54ovW2y4g0Lu4IkQ2nVc_cEa_NletJbgRyKD2pJ-RJDZ4a6nKTscGVWvhVWmS8pZxsEXKkGdZTyrFLVdMiQIVMS_Upa948EKbCrcTkwNCYF0qUJjrNKQ4FAqkmbt9irwn3Yx4pRcLjbrwQIs7uv7n7o5RaH4Yi0fGY-H6KEkYWcEyncrDxSr37t';
        $imgChocolate = 'https://lh3.googleusercontent.com/aida-public/AB6AXuBVLCggNCcs8SjqSbvKm5Qo0zxohYBVlcdo5mQC7cIetFwOa9SRWpE3sVABTNAKPuHHUWmMNT5ziydoRU9EqCMDoBl-8jrs8r38sbOKD5zgfYIe0i4xPEbC3tMUuqr-Jdq9kfBiDYINitZ_MhPCNAm1qVzFnGJNARE1R2pOdevJDRVBel797P_Ht3rcRiEPpd2JjTI2BEp2L_f3hqR4cSqWgxPZG9XEDECPzItJDNzGxwTLGIoEcUlD';
        $imgKerupukMentah = 'https://lh3.googleusercontent.com/aida-public/AB6AXuDR_tfG5zVWk_84je9x8VM_g6IUTu1WJj-tLsbvOO42tDdwCQ-PT0mLyKUYpiDN6QK9Wt1rNejEQfnaZTY8KHFkNpEVdBReJ6sat_YnTsVHbExX4ashXxTb9oAKnR2GdjoBSiylEaTgAxo0xj5Sr6phms2BeczCLg0F54ZnYbCzCrkpZXofd94ev_kIrYwxRvDYXIvHEnwVHqxTXgHxfVeF04KZbbtHuc2Xtw7dGQ4wXwyhSVNPeuL5';
        $imgKopiSachet = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCNU3P_CP2MX3O7UkYm9BQwdf34WsfBnkeQ9GkDdUJVPpVh28jsFTOgkyheB1nWkxRO9Ns3rhZv65B2OsRIKz3Qd1OqNytKYWZIli6Ass7yA6vN3FbFFuhJNLvnss-KkPAaUHUe22OgnUt3uo-nvwGVnviGYZYqnnEbBUBEGJxp9L3RGtFCmhvTjiaVy1LBm8TYGiYy_uPPHHSJ9ThejxWgYBJIPuaeptY_62VRP-gZSRQPa3q5_Vzc';
        $imgKopiGayo = 'https://lh3.googleusercontent.com/aida-public/AB6AXuAF-YPDjQtZyg1sAjtbz8KerLeFv7s7i8DsUICMy6IpHl2cwnKFeKsHRym9JBLsJIopHSLGoqLuPINdM7Erd8IdsY-t8HTH3chc6_VCGfI7xKEvPU1p_T2SXn6GpVUhB1Y6huMhOQAD5UzXs9wtc3uFM0erzCRAoVNUw9n8Tx03CKlsz5lS3NbT_kYJclEk8mBNiACFNUF0t10Ugv9fCxXAxY8PUQmunNFT7Qz4ICNlj4YW_zb3bM5n';
        $imgKopiToraja = 'https://lh3.googleusercontent.com/aida-public/AB6AXuD3neONLmvyEN-YxNErMHgDYxZVynY_tuMik-2QQpwe0OX733iFUs0xQViqwBhtMSoR2YwBC0l9J1YvNLGJKWh1Nezce4Xi0mCigV6yj8aZRAk76OlZ1LWNSOvoitXSbW1kK0M3mJgbXfQWyJSN6Du5sN8cIvjWrdimfrCKxfKugO8kKfwjsSfksUbrKFhd7qCEActvqrps7DoyrIvThxjmNAVVoBAMuyO_B-4MF45oDs0d-zuMJKAi';
        $imgTehMelati = 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFHiIwnuV6NorVD-s01sCfzDLae0OA97NY8Z4-EIbO_jN_6Z7aEEgzEcCzXfeDX2FmxCs7AmymE-wDVrwO5BUrVhek6Dy4pCP1dxiYEz8V4tIT2-9ZOvfd4kbuJnaFRpiVadCNQNd4V_YTfAuB1ShmfQBmAkMVAz_vxdeYKA5xp50x6Ofys8VLaaglxHVejv365B-syHEMQ4P8Kw-vv_HKym_Oklbr0G7XOKP1B4SUIuVXXpe69iXq';
        $imgDrinkPack = 'https://lh3.googleusercontent.com/aida-public/AB6AXuB_cWce38ha7FvGmZwOwc7jnzkHu9qde0XweMTKFdo9WAAEYUw8LwXDXbg4SkWzC4vqkFsoq0beBR7XbF6KPXWENEJngy2zohCH3XuEpO8PYMzFjQ_XCz0ej9h74XJ1XFzp4WgV4EmDQI_1jvMGpAz-LVd-P4YvhCpW0xMjy-6qjQ33I03o2IOmajRVhJ142aIgMWZzf_Yuq2Hh4G2tJZCjxNpDShGIRjOmL7I9eeJcFzCxypMVYeGm';
        $imgSambal = 'https://lh3.googleusercontent.com/aida-public/AB6AXuBybnk6gH3iW0iGsgVczPvrH_0PDaQ8BPrQpSxo8IaT1Np1tdvoV19KRxMQ--c9kHceoXpWqPiUfqM9XhKeE7KRK5SzkCf-zXdvucFSd8hfEEiyTJDISzW4s-sPk8EzCypEh-UQb6c91SGyt-v3Mbyl004JQajq5VcMoN7kBb1flJpj-L0MO51hOnq45xdvVWLxbaV86obyiU44ARQdkuUM_Ma-EaeBJVAEaAdI8UFKdCQ23NHMGBsQ';

        $products = [
            ['Makanan Kering & Instan', 'Mie Instan Cup Nusantara', 18500, '85g / cup', 'Mie instan cup bumbu gurih khas Nusantara. Paling digemari diaspora karena praktis dan cita rasa kampung halaman yang pekat.', $imgNoodle, 'TOP DEMAND', true],
            ['Makanan Kering & Instan', 'Seblak Instant Bandung Pedas Gurih', 22000, '200g', 'Paket komplit kerupuk, cuanki, bumbu kencur pedas autentik Jawa Barat. Kemasan standing pouch tahan lama.', $imgSeblak, 'BEST SELLER', true],
            ['Makanan Kering & Instan', 'Baso Aci Instant Garut Komplit', 25000, '220g', 'Baso aci kenyal khas Garut lengkap dengan cuanki tahu, siomay mini, pilus cikur, bumbu minyak bawang, dan cabai bubuk.', $imgBasoAci, 'BEST SELLER', true],
            ['Makanan Kering & Instan', 'Bumbu Instan Rendang & Rawon', 16000, '100g', 'Bumbu pasta siap masak rempah otentik Padang dan Jawa Timur dalam kemasan sachet kedap udara.', $imgBumbu, null, false],
            ['Makanan Kering & Instan', 'Seblak Mix Crackers', 24000, '250g', 'Perpaduan kerupuk seblak aneka bentuk dalam standing pouch kedap udara.', $imgSeblak, null, false],
            ['Makanan Kering & Instan', 'Bumbu Instan Soto & Rawon Komplit', 17000, '120g', 'Bumbu basah rempah kluwek pilihan untuk rawon dan soto nusantara. Praktis untuk diaspora.', $imgBumbu, null, false],

            ['Snack & Camilan', 'Basreng Pedas Daun Jeruk', 28000, '200g', 'Keripik bakso goreng renyah bumbu cabai rawit pedas dan aroma segar daun jeruk dalam standing pouch ziplock.', $imgBasreng, 'PALING LARIS', true],
            ['Snack & Camilan', 'Kerupuk Pedas Tradisional Tasikmalaya', 20000, '150g', 'Kerupuk bantet renyah dalam standing pouch kedap udara khas Tasikmalaya.', $imgSpicyCracker, null, false],
            ['Snack & Camilan', 'Keripik Singkong Renyah Balado', 18000, '250g', 'Keripik singkong tipis renyah bumbu balado pedas manis dalam standing pouch zipper.', $imgSingkong, null, true],
            ['Snack & Camilan', 'Makaroni Pedas Gurih', 15000, '150g', 'Makaroni goreng renyah bumbu tabur pedas asin gurih kemasan pouch praktis.', $imgBasreng, null, false],
            ['Snack & Camilan', 'Biskuit Kelapa Panggang', 22000, '300g', 'Biskuit renyah rasa kelapa gurih manis dalam kemasan foil kedap udara.', $imgChocolate, null, false],
            ['Snack & Camilan', 'Chocolate Bar Klasik', 34000, '100g', 'Cokelat batangan klasik premium dalam kemasan wrapper foil batik, camilan manis favorit.', $imgChocolate, 'TOP DEMAND', true],
            ['Snack & Camilan', 'Cheese Bar Renyah', 32000, '100g', 'Wafer cokelat salut keju lezat dalam kemasan bar retail kedap udara.', $imgChocolate, null, false],
            ['Snack & Camilan', 'Kerupuk Mentah Aneka Rasa', 26000, '500g', 'Kerupuk mentah aneka rasa dalam kemasan vacuum bag tebal transparan siap goreng.', $imgKerupukMentah, null, false],

            ['Kopi & Teh', 'Kopi Instan Sachet Nusantara', 35000, '10 x 20g', 'Kopi instan sachet gula aren dalam box retail praktis.', $imgKopiSachet, 'TOP DEMAND', true],
            ['Kopi & Teh', 'Kopi Gayo Robusta 250g', 55000, '250g', 'Aroma kuat dengan body tebal khas Gayo Aceh dalam kemasan standing pouch kraft foil zipper valve.', $imgKopiGayo, 'GRADE 1 EXPORT', true],
            ['Kopi & Teh', 'Kopi Toraja Arabika Sachet', 42000, '10 x 15g', 'Kopi arabika Toraja dalam kemasan sachet drip siap seduh.', $imgKopiToraja, null, false],
            ['Kopi & Teh', 'Teh Melati Wangi Alami', 20000, '250g', 'Daun teh hijau rendaman kuntum melati segar dalam pouch kedap udara.', $imgTehMelati, null, false],
            ['Kopi & Teh', 'Teh Instan Serbuk Melati', 28000, '300g', 'Teh serbuk instan aroma melati dalam kemasan pouch praktis.', $imgTehMelati, null, false],
            ['Kopi & Teh', 'Kopi Lampung Robusta Bubuk', 38000, '200g', 'Kopi bubuk robusta Lampung dalam standing pouch kraft kedap udara.', $imgKopiGayo, null, false],

            ['Minuman & Sereal', 'Susu Bubuk Instant Full Cream', 48000, '400g', 'Susu bubuk full cream bernutrisi tinggi dalam kemasan sachet pouch aluminium foil.', $imgDrinkPack, null, false],
            ['Minuman & Sereal', 'Cereal Cokelat Renyah', 36000, '300g', 'Sereal sarapan cokelat dalam kemasan sachet pack kedap udara.', $imgDrinkPack, null, false],
            ['Minuman & Sereal', 'Minuman Serbuk Cokelat 3in1', 32000, '10 x 30g', 'Minuman cokelat creamy malt dalam kemasan sachet pack hangat.', $imgDrinkPack, null, false],
            ['Minuman & Sereal', 'Minuman Serbuk Sereal Vanila', 30000, '10 x 28g', 'Minuman serbuk sereal rasa vanila sachet praktis mengenyangkan.', $imgDrinkPack, null, false],
            ['Minuman & Sereal', 'Minuman Serbuk Aneka Rasa Buah', 25000, '10 sachet', 'Serbuk minuman aneka rasa buah segar dalam kemasan sachet pack.', $imgDrinkPack, null, false],

            ['Bumbu & Sambal', 'Sambal Bawang Botol Segar', 35000, '200g', 'Sambal bawang botol kaca dengan segel induksi aluminium foil anti bocor untuk kargo pesawat.', $imgSambal, 'BEST SELLER', false],
            ['Bumbu & Sambal', 'Cabai Bubuk Ekstra Pedas', 22000, '100g', 'Cabai kering giling murni dalam botol bumbu segel kedap udara.', $imgSambal, null, false],
            ['Bumbu & Sambal', 'Sambal Terasi Matang', 34000, '200g', 'Sambal terasi udang fermentasi matang dalam botol kaca segel induksi.', $imgSambal, null, false],
            ['Bumbu & Sambal', 'Kunyit Bubuk Murni', 15000, '100g', 'Kunyit kuning asli giling halus dalam sachet bumbu kedap udara.', $imgBumbu, null, false],
            ['Bumbu & Sambal', 'Bumbu Pecel Kacang Klaten', 26000, '250g', 'Sambal pecel sangrai kacang tanah bumbu daun jeruk khas Klaten dalam kemasan pack vacuum.', $imgBumbu, 'KHAS KLATEN', false],
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
