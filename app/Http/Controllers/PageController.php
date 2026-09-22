<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        // Data dummy portofolio
        $projects = [
            [
                'title' => 'Web Profile Laravel 12',
                'category' => 'Web Development',
                'description' => 'Website profil pribadi menggunakan framework Laravel 12 dan Bootstrap 5.',
            ],
            [
                'title' => 'Sistem Bahan Bakar Kayu',
                'category' => 'System Design / App',
                'description' => 'Aplikasi manajemen logistik dan kontrol inventaris bahan bakar kayu.',
            ],
            [
                'title' => 'Landing Page Toko Online',
                'category' => 'E-Commerce',
                'description' => 'Desain halaman depan dan katalog produk interaktif untuk toko ritel.',
            ],
        ];

        return view('portfolio', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }
}