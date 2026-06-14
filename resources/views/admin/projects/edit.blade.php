@extends('layouts.app')

@section('title', 'Edit Project')
@section('page_title', 'Edit Project')
@section('page_description', 'Form untuk mengedit data project.')

@section('content')
    <div class="mb-4">
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-8">
                <!-- Nama Project -->
                <div class="mb-3">
                    <label for="namaProject" class="form-label">Nama Project <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('namaProject') is-invalid @enderror" id="namaProject"
                        name="namaProject" value="{{ old('namaProject', $project->namaProject) }}"
                        placeholder="Masukkan nama project" required>
                    @error('namaProject')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Technology -->
                <div class="mb-3">
                    <label for="technology" class="form-label">Technology Stack <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('technology') is-invalid @enderror" id="technology"
                        name="technology" value="{{ old('technology', $project->technology) }}"
                        placeholder="Misal: Laravel, Vue.js, Tailwind CSS, MySQL" required>
                    <small class="text-muted">Pisahkan dengan koma jika lebih dari satu teknologi</small>
                    @error('technology')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Keterangan -->
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Deskripsi Project <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan"
                        rows="5" maxlength="200" placeholder="Jelaskan detail project ini" required>{{ old('keterangan', $project->keterangan) }}</textarea>
                    <small class="text-muted">Maksimal 200 karakter.</small>
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Link Project -->
                <div class="mb-3">
                    <label for="link" class="form-label">Link Project</label>
                    <input type="url" class="form-control @error('link') is-invalid @enderror" id="link"
                        name="link" value="{{ old('link', $project->link) }}"
                        placeholder="Misal: https://github.com/username/project">
                    <small class="text-muted">Opsional. Berikan link ke repository atau demo project</small>
                    @error('link')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Project</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                        name="gambar" accept="image/*">
                    <small class="text-muted">Format: JPG, JPEG, PNG, WEBP. Maksimal 2MB. Biarkan kosong untuk tidak
                        mengubah</small>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check"></i> Update Project
                    </button>
                    <a href="{{ route('projects.index') }}" class="btn btn-light">Batal</a>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Preview Gambar -->
                @if ($project->gambar)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="card-title">Preview Gambar</h6>
                            <img src="{{ asset('storage/' . $project->gambar) }}" alt="{{ $project->namaProject }}"
                                class="img-fluid rounded">
                            <small class="text-muted d-block mt-2">Upload gambar baru untuk mengubah</small>
                        </div>
                    </div>
                @endif

                <div class="card bg-light">
                    <div class="card-body">
                        <h6 class="card-title">Informasi Project</h6>
                        <ul class="small">
                            <li><strong>Dibuat:</strong> {{ $project->created_at->format('d M Y H:i') }}</li>
                            <li><strong>Update Terakhir:</strong> {{ $project->updated_at->format('d M Y H:i') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
