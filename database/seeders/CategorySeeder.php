<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Daging Bebek',
                'slug' => 'daging-bebek',
                'description' => 'Daging bebek dengan berbagai macam jenis potongan. Dapat menyesuaikan kebutuhan bisnis Anda',
                'order' => 1,
                'is_active' => true
            ],
            [
                'name' => 'Daging Sapi',
                'slug' => 'daging-sapi',
                'description' => 'Tersedia slice, saikoro, shabu, yakiniku, dan berbagai olahan siap masak.',
                'order' => 2,
                'is_active' => true
            ],
            [
                'name' => 'Daging Kambing',
                'slug' => 'daging-kambing',
                'description' => 'Pilih bagian favorit: iga, paha, daging tanpa tulang, dan lainnya.',
                'order' => 3,
                'is_active' => true
            ],
            [
                'name' => 'Daging Kerbau',
                'slug' => 'daging-kerbau',
                'description' => 'Daging kerbau berkualitas dengan protein tinggi dan lemak rendah, cocok untuk berbagai olahan.',
                'order' => 4,
                'is_active' => true
            ],
            
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}