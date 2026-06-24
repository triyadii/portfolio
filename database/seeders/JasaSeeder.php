<?php

namespace Database\Seeders;

use App\Models\Jasa;
use Illuminate\Database\Seeder;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jasa::create([
            'nama_jasa'      => 'Pembuatan Website Company Profile',
            'harga'          => 2500000,
            'lama_pekerjaan' => '2 minggu',
            'yang_didapat'   => "Desain responsif (mobile & desktop)\nMaksimal 6 halaman\nForm kontak & integrasi WhatsApp\nOptimasi SEO dasar\nHosting & domain 1 tahun\nGratis revisi 2x",
            'keterangan'     => 'Cocok untuk UMKM dan perusahaan yang ingin tampil profesional di internet.',
        ]);

        Jasa::create([
            'nama_jasa'      => 'Pembuatan Sistem Informasi / Web Aplikasi',
            'harga'          => 8000000,
            'lama_pekerjaan' => '1 - 2 bulan',
            'yang_didapat'   => "Analisis kebutuhan sistem\nDashboard admin & manajemen data\nMulti-level user & hak akses\nLaporan / export data\nSource code\nGaransi maintenance 1 bulan",
            'keterangan'     => 'Dibangun dengan Laravel & MySQL. Harga dapat menyesuaikan kompleksitas fitur.',
        ]);

        Jasa::create([
            'nama_jasa'      => 'Pembuatan Aplikasi Mobile (Flutter)',
            'harga'          => 10000000,
            'lama_pekerjaan' => '1 - 3 bulan',
            'yang_didapat'   => "Aplikasi Android (opsional iOS)\nIntegrasi REST API / backend\nDesain UI/UX modern\nSplash screen & ikon aplikasi\nFile build (APK)\nGaransi bug fixing 1 bulan",
            'keterangan'     => 'Cross-platform menggunakan Flutter. Estimasi harga final tergantung jumlah fitur.',
        ]);

        Jasa::create([
            'nama_jasa'      => 'Pembuatan Landing Page',
            'harga'          => 1000000,
            'lama_pekerjaan' => '3 - 5 hari',
            'yang_didapat'   => "1 halaman landing page menarik\nDesain responsif\nTombol call-to-action (WhatsApp/Form)\nOptimasi kecepatan\nGratis revisi 1x",
            'keterangan'     => 'Ideal untuk promosi produk, event, atau jasa tertentu.',
        ]);

        Jasa::create([
            'nama_jasa'      => 'Integrasi & Pembuatan REST API',
            'harga'          => 3500000,
            'lama_pekerjaan' => '2 - 3 minggu',
            'yang_didapat'   => "Desain endpoint API\nAutentikasi (token/JWT)\nDokumentasi API\nIntegrasi dengan sistem yang ada\nSource code",
            'keterangan'     => 'Untuk menghubungkan aplikasi web/mobile dengan backend atau layanan pihak ketiga.',
        ]);
    }
}
