@extends('layouts.app')

@section('title', 'Tambah Jasa')
@section('page_title', 'Tambah Jasa Baru')
@section('page_description', 'Form untuk menambah jasa/layanan baru ke dalam database.')

@section('content')
    <div class="mb-4">
        <a href="{{ route('jasa.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <form action="{{ route('jasa.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-lg-8">
                <!-- Nama Jasa -->
                <div class="mb-3">
                    <label for="nama_jasa" class="form-label">Nama Jasa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nama_jasa') is-invalid @enderror" id="nama_jasa"
                        name="nama_jasa" value="{{ old('nama_jasa') }}" placeholder="Misal: Pembuatan Website Company Profile" required>
                    @error('nama_jasa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Harga -->
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga (Rupiah) <span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                        name="harga" value="{{ old('harga') }}" min="0" placeholder="Misal: 2000000" required>
                    <small class="text-muted">Masukkan angka tanpa titik/koma. Contoh: 2000000</small>
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Lama Pekerjaan -->
                <div class="mb-3">
                    <label for="lama_pekerjaan" class="form-label">Lama Pekerjaan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('lama_pekerjaan') is-invalid @enderror" id="lama_pekerjaan"
                        name="lama_pekerjaan" value="{{ old('lama_pekerjaan') }}" placeholder="Misal: 2 minggu" required>
                    @error('lama_pekerjaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Yang Didapat -->
                <div class="mb-3">
                    <label for="yang_didapat" class="form-label">Yang Didapat <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('yang_didapat') is-invalid @enderror" id="yang_didapat" name="yang_didapat"
                        rows="5" placeholder="Tuliskan satu item per baris, misal:&#10;- Desain responsif&#10;- 5 halaman&#10;- Hosting 1 tahun" required>{{ old('yang_didapat') }}</textarea>
                    <small class="text-muted">Tulis satu deliverable per baris.</small>
                    @error('yang_didapat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Keterangan -->
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan"
                        rows="3" placeholder="Deskripsi tambahan (opsional)">{{ old('keterangan') }}</textarea>
                    <small class="text-muted">Opsional.</small>
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check"></i> Simpan Jasa
                    </button>
                    <a href="{{ route('jasa.index') }}" class="btn btn-light">Batal</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h6 class="card-title">Panduan Pengisian</h6>
                        <ul class="small">
                            <li>Isi semua field yang bertanda <span class="text-danger">*</span></li>
                            <li>Harga ditulis berupa angka saja (tanpa Rp/titik)</li>
                            <li>Lama pekerjaan bebas, misal "2 minggu" atau "1 bulan"</li>
                            <li>"Yang Didapat" sebaiknya satu item per baris</li>
                            <li>Data ini akan dibaca oleh chat AI untuk menjawab client</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
