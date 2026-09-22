<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder {
    public function run(): void {
        $portfolios = [
            ['title' => 'Website Company Profile', 'category' => 'Web', 'is_featured' => true],
            ['title' => 'Sistem Informasi Kasir', 'category' => 'Web', 'is_featured' => true],
            ['title' => 'Aplikasi Mobile Delivery', 'category' => 'Mobile', 'is_featured' => false],
            ['title' => 'UI Design Dashboard', 'category' => 'Design', 'is_featured' => true],
            ['title' => 'REST API E-Commerce', 'category' => 'Backend', 'is_featured' => false],
        ];

        foreach ($portfolios as $p) {
            Portfolio::create([
                'title' => $p['title'],
                'slug' => Str::slug($p['title']),
                'description' => 'Deskripsi lengkap tentang ' . $p['title'],
                'category' => $p['category'],
                'is_featured' => $p['is_featured'],
            ]);
        }
    }
}