<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed admin user
        $this->call(AdminUserSeeder::class);

        // Seed Sample Projects
        Project::create([
            'namaProject' => 'E-Commerce Marketplace',
            'technology' => 'Laravel, Vue.js, Tailwind CSS, MySQL',
            'keterangan' => 'Sebuah platform e-commerce lengkap dengan dukungan multi-vendor, integrasi payment gateway, dan manajemen inventori real-time.',
            'link' => 'https://github.com/dicotriyadi/ecommerce',
            'gambar' => 'assets/media/stock/600x600/img-20.jpg',
        ]);

        Project::create([
            'namaProject' => 'Company Profile Portal',
            'technology' => 'Laravel, Bootstrap 5, MySQL',
            'keterangan' => 'Website profil perusahaan modern dengan sistem manajemen konten (CMS) untuk berita, portofolio, dan layanan jasa verifikasi izin.',
            'link' => 'https://github.com/dicotriyadi/verified-license',
            'gambar' => 'assets/media/stock/600x600/img-19.jpg',
        ]);

        Project::create([
            'namaProject' => 'IoT Dashboard Smart Farm',
            'technology' => 'Node.js, Express, React, MongoDB, MQTT',
            'keterangan' => 'Sistem monitoring pertanian cerdas secara real-time yang memantau kelembaban tanah, suhu, dan kelembaban udara menggunakan sensor IoT.',
            'link' => 'https://github.com/dicotriyadi/iot-agriculture',
            'gambar' => 'assets/media/stock/600x600/img-18.jpg',
        ]);
    }
}
