<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name'          => 'Bapak Hendra S.',
                'business_name' => 'Resto Soto Pak Hendra',
                'business_type' => 'Restoran',
                'testimonial'   => 'Sudah lebih dari 2 tahun langganan di sini. Dagingnya selalu segar, potongannya rapi, dan pengiriman selalu tepat waktu. Sangat direkomendasikan untuk usaha kuliner.',
                'message'       => 'Sudah lebih dari 2 tahun langganan di sini. Dagingnya selalu segar, potongannya rapi, dan pengiriman selalu tepat waktu. Sangat direkomendasikan untuk usaha kuliner.',
                'rating'        => 5,
                'is_active'     => true,
            ],
            [
                'name'          => 'Ibu Sari W.',
                'business_name' => 'Catering Bu Sari',
                'business_type' => 'Catering',
                'testimonial'   => 'Untuk kebutuhan catering acara besar, UD Makmur Jaya selalu bisa memenuhi pesanan dalam jumlah banyak dengan kualitas yang konsisten. Pelayanannya juga ramah.',
                'message'       => 'Untuk kebutuhan catering acara besar, UD Makmur Jaya selalu bisa memenuhi pesanan dalam jumlah banyak dengan kualitas yang konsisten. Pelayanannya juga ramah.',
                'rating'        => 5,
                'is_active'     => true,
            ],
            [
                'name'          => 'Mas Rizky P.',
                'business_name' => 'Warung Mbok Ijah',
                'business_type' => 'Warung Makan',
                'testimonial'   => 'Harga bersaing dan daging berkualitas. Proses halal-nya terjamin, jadi pelanggan warung saya pun lebih tenang. Tidak perlu khawatir soal kesegaran.',
                'message'       => 'Harga bersaing dan daging berkualitas. Proses halal-nya terjamin, jadi pelanggan warung saya pun lebih tenang. Tidak perlu khawatir soal kesegaran.',
                'rating'        => 4,
                'is_active'     => true,
            ],
        ];

        foreach ($data as $item) {
            Testimonial::firstOrCreate(
                ['name' => $item['name']],
                $item
            );
        }
    }
}
