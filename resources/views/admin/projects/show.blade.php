@extends('layouts.app')

@section('title', 'Detail Project')
@section('page_title', $project->namaProject)
@section('page_description', 'Detail informasi project')

@section('content')
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
        <div class="d-flex gap-2">
            <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">
                <i class="bi bi-pencil"></i> Edit
            </a>
            <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Yakin ingin menghapus project ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Gambar -->
            <div class="card mb-4">
                <div class="card-body">
                    @if ($project->gambar)
                        <img src="{{ asset('storage/' . $project->gambar) }}" alt="{{ $project->namaProject }}"
                            class="img-fluid rounded" style="max-height: 400px; object-fit: cover; width: 100%;">
                    @else
                        <div class="bg-light d-flex align-items-center justify-content-center rounded"
                            style="height: 300px; color: #999;">
                            <i class="bi bi-image" style="font-size: 3rem;"></i>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">Deskripsi</h5>
                </div>
                <div class="card-body">
                    <p>{{ $project->keterangan }}</p>
                </div>
            </div>

            <!-- Technology Stack -->
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">Technology Stack</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2">
                        @foreach (explode(',', $project->technology) as $tech)
                            <span class="badge bg-primary">{{ trim($tech) }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Project Info -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">Informasi Project</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Project</label>
                        <p class="text-muted">{{ $project->namaProject }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Technology</label>
                        <p class="text-muted">{{ $project->technology }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Link Project</label>
                        @if ($project->link)
                            <p>
                                <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                                    class="text-decoration-none">
                                    {{ $project->link }}
                                </a>
                            </p>
                        @else
                            <p class="text-muted">-</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Dibuat</label>
                        <p class="text-muted">{{ $project->created_at->format('d M Y H:i') }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Update Terakhir</label>
                        <p class="text-muted">{{ $project->updated_at->format('d M Y H:i') }}</p>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="d-grid gap-2">
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">
                    Edit Project
                </a>
                <a href="{{ route('projects.index') }}" class="btn btn-light">
                    Kembali ke Daftar
                </a>
            </div>
        </div>
    </div>
@endsection
