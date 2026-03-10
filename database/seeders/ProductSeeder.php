<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Create Categories
        $categories = [
            [
                'name' => 'Daging Sapi',
                'slug' => 'daging-sapi',
                'description' => 'Daging sapi berkualitas premium dari sumber terpercaya',
                'is_active' => true,
            ],
            [
                'name' => 'Daging Ayam',
                'slug' => 'daging-ayam',
                'description' => 'Daging ayam segar dan bersih',
                'is_active' => true,
            ],
            [
                'name' => 'Daging Bebek',
                'slug' => 'daging-bebek',
                'description' => 'Daging bebek premium dengan kualitas terjamin',
                'is_active' => true,
            ],
            [
                'name' => 'Daging Kambing',
                'slug' => 'daging-kambing',
                'description' => 'Daging kambing segar pilihan',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        // Create Products for each category
        $products = [
            // Daging Sapi
            [
                'category_id' => 1,
                'name' => 'Daging Sapi Premium 1 kg',
                'slug' => 'daging-sapi-premium-1kg',
                'description' => 'Daging sapi premium berkualitas tinggi, cocok untuk berbagai masakan. Potongan bersih dan segar.',
                'price' => 150000,
                'weight' => 1,
                'is_active' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Daging Sapi Tanpa Lemak 500gr',
                'slug' => 'daging-sapi-tanpa-lemak-500gr',
                'description' => 'Daging sapi pilihan tanpa lemak, cocok untuk diet protein tinggi.',
                'price' => 85000,
                'weight' => 0.5,
                'is_active' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Sapi Giling 1 kg',
                'slug' => 'sapi-giling-1kg',
                'description' => 'Daging sapi giling 100% murni, ideal untuk membuat burger, bakso, atau meatball.',
                'price' => 120000,
                'weight' => 1,
                'is_active' => true,
            ],
            // Daging Ayam
            [
                'category_id' => 2,
                'name' => 'Ayam Utuh 1.5 kg',
                'slug' => 'ayam-utuh-1-5kg',
                'description' => 'Ayam segar utuh siap masak. Dijamin halal dan berkualitas baik.',
                'price' => 65000,
                'weight' => 1.5,
                'is_active' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Fillet Ayam Tanpa Kulit 500gr',
                'slug' => 'fillet-ayam-tanpa-kulit-500gr',
                'description' => 'Fillet ayam premium tanpa kulit, cocok untuk berbagai masakan modern.',
                'price' => 55000,
                'weight' => 0.5,
                'is_active' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Ceker Ayam 500gr',
                'slug' => 'ceker-ayam-500gr',
                'description' => 'Ceker ayam bersih dan segar. Cocok untuk membuat masakan kaki ayam lezat.',
                'price' => 25000,
                'weight' => 0.5,
                'is_active' => true,
            ],
            // Daging Bebek
            [
                'category_id' => 3,
                'name' => 'Bebek Utuh 2 kg',
                'slug' => 'bebek-utuh-2kg',
                'description' => 'Bebek segar utuh berkualitas premium. Cocok untuk membuat bebek goreng atau masakan lainnya.',
                'price' => 180000,
                'weight' => 2,
                'is_active' => true,
            ],
            [
                'category_id' => 3,
                'name' => 'Daging Bebek Tanpa Lemak 1 kg',
                'slug' => 'daging-bebek-tanpa-lemak-1kg',
                'description' => 'Daging bebek pilihan dengan lemak minimal. Cocok untuk berbagai hidangan berkualitas.',
                'price' => 120000,
                'weight' => 1,
                'is_active' => true,
            ],
            [
                'category_id' => 3,
                'name' => 'Bebek Cacah 1 kg',
                'slug' => 'bebek-cacah-1kg',
                'description' => 'Bebek sudah dicacah/dipotong kecil, memudahkan proses memasak.',
                'price' => 140000,
                'weight' => 1,
                'is_active' => true,
            ],
            // Daging Kambing
            [
                'category_id' => 4,
                'name' => 'Daging Kambing Premium 1 kg',
                'slug' => 'daging-kambing-premium-1kg',
                'description' => 'Daging kambing premium young lamb. Cocok untuk berbagai masakan istimewa.',
                'price' => 160000,
                'weight' => 1,
                'is_active' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Kambing Giling 1 kg',
                'slug' => 'kambing-giling-1kg',
                'description' => 'Daging kambing giling murni. Ideal untuk membuat bakso, soto, atau masakan lainnya.',
                'price' => 135000,
                'weight' => 1,
                'is_active' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Kambing Ribs 500gr',
                'slug' => 'kambing-ribs-500gr',
                'description' => 'Tulang iga kambing premium. Cocok untuk membuat sop atau masakan berkuah.',
                'price' => 85000,
                'weight' => 0.5,
                'is_active' => true,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
