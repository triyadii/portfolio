# Portfolio Website

Website portfolio personal berbasis Laravel untuk menampilkan profil, layanan, dan koleksi project. Dilengkapi panel admin untuk mengelola data project.

## Fitur

### Halaman Publik (Landing Page)

- **Hero Section** — Menampilkan nama, role dengan animasi teks berganti (Software Engineer, Full Stack Developer, Freelancer), serta efek visual partikel dan aurora.
- **Tautan Sosial** — Akses cepat ke GitHub, LinkedIn, dan email langsung dari halaman utama.
- **About Me** — Profil singkat beserta daftar keahlian yang dikelompokkan per kategori (Backend, Frontend, dan Mobile Development).
- **Tombol Kontak Cepat** — Hubungi langsung melalui Email, WhatsApp, dan LinkedIn.
- **Services** — Daftar layanan yang ditawarkan: Web Development, Mobile Development, Backend Engineering, dan System Integration.
- **Portfolio** — Galeri project dinamis dalam bentuk kartu yang menampilkan gambar, nama, deskripsi, daftar teknologi (badge), dan tautan ke project. Data diambil langsung dari database.
- **Desain Responsif** — Tampilan menyesuaikan layar desktop maupun mobile, dilengkapi animasi scroll dan navigasi mobile.

### Panel Admin

- **Login Admin** — Halaman login terpisah dengan proteksi autentikasi untuk mengakses dashboard.
- **Dashboard Project** — Menampilkan seluruh data project dalam bentuk daftar dengan paginasi.
- **Tambah Project** — Form untuk menambahkan project baru beserta validasi input.
- **Edit Project** — Memperbarui data project yang sudah ada.
- **Detail Project** — Melihat detail lengkap dari sebuah project.
- **Hapus Project** — Menghapus project disertai konfirmasi sebelum data dihapus.
- **Upload Gambar** — Mengunggah gambar project (format JPG, JPEG, PNG, WebP, maksimal 2MB). Gambar lama otomatis dihapus saat diganti.
- **Validasi Form** — Validasi setiap input (nama project, teknologi, keterangan, link, dan gambar) dengan pesan error berbahasa Indonesia.
- **Notifikasi** — Pesan sukses setelah menambah, memperbarui, atau menghapus project.

## Data Project

Setiap project menyimpan informasi berikut:

| Field | Keterangan |
|-------|------------|
| Nama Project | Judul project |
| Technology | Daftar teknologi yang digunakan (dipisah koma) |
| Keterangan | Deskripsi project |
| Link | Tautan menuju project (opsional) |
| Gambar | Gambar pratinjau project (opsional) |
