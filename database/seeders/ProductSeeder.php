<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();

        $products = [
            ['Totebag Kanvas Ecoprint Daun Jati', 'Tas', 85000,
             'Totebag kanvas tebal dengan cetakan daun jati yang memberi semburat merah kecokelatan alami. Muat laptop 14 inci.', true],
            ['Kain Mori Ecoprint Eksotis (2 meter)', 'Kain', 175000,
             'Kain mori primissima dengan motif daun dan bunga hasil teknik kukus. Cocok dijahit menjadi blus, kerudung, atau taplak.', true],
            ['Outer Ecoprint Botanikal', 'Pakaian', 285000,
             'Outer longgar berbahan katun dengan motif daun jarak dan kenikir. Setiap potong punya pola berbeda.', true],
            ['Syal Ecoprint Bunga Kenikir', 'Aksesori', 135000,
             'Syal ringan dengan warna kuning kehijauan dari bunga kenikir. Nyaman dipakai harian maupun sebagai hadiah.', true],
            ['Taplak Meja Ecoprint Pounding', 'Kain', 120000,
             'Taplak meja dengan teknik pounding: daun dipukul hingga warnanya meresap ke serat kain. Ukuran 100 x 100 cm.', true],
            ['Pouch Ecoprint Daun Lanang', 'Tas', 55000,
             'Pouch kecil dengan resleting untuk dompet, kosmetik, atau alat tulis. Stok sedang diproduksi ulang.', false],
        ];

        foreach ($products as $i => [$name, $category, $price, $description, $available]) {
            Product::create([
                'name' => $name,
                'category' => $category,
                'price' => $price,
                'description' => $description,
                'image' => 'images/products/product-' . ($i + 1) . '.jpg',
                'is_available' => $available,
            ]);
        }
    }
}
