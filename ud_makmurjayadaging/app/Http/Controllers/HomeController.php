<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            ['name' => 'Daging Bebek', 'slug' => 'daging-bebek'],
            ['name' => 'Daging Sapi', 'slug' => 'daging-sapi'],
            ['name' => 'Daging Kambing', 'slug' => 'daging-kambing'],
            ['name' => 'Olahan', 'slug' => 'olahan'],
        ];

        $products = [
            ['title' => 'Daging Sapi', 'price' => 'Rp 120.000/kg', 'image' => 'https://via.placeholder.com/600x400?text=Daging+Sapi'],
            ['title' => 'Daging Kerbau', 'price' => 'Rp 110.000/kg', 'image' => 'https://via.placeholder.com/600x400?text=Daging+Kerbau'],
            ['title' => 'Daging Kambing', 'price' => 'Rp 140.000/kg', 'image' => 'https://via.placeholder.com/600x400?text=Daging+Kambing'],
            ['title' => 'Daging Bebek Peking', 'price' => 'Rp 80.000/kg', 'image' => 'https://via.placeholder.com/600x400?text=Daging+Bebek+Peking'],
        ];

        $partners = [
            'Toko ritel',
            'Reseler',
            'Restoran',
            'Satuan pelayanan program gizi (SPPG)',
            'Catering',
            'Central kitchen',
        ];

        $contactPoints = [
            'Diskusikan kebutuhan anda',
            'Infokan pricelist & order retail',
            'Info kerjasama',
            'Info pengaduan',
            'Maps lokasi',
            'Temukan tips memilih daging hingga wawasan bisnis kuliner terbaru',
        ];

        // Replace with your WhatsApp number (country code, no +)
        $whatsapp = '6281234567890';

        return view('home', compact('categories', 'products', 'partners', 'contactPoints', 'whatsapp'));
    }
}
