@extends('layouts.app')

@section('title', 'Daftar Project')
@section('page_title', 'Daftar Project')
@section('page_description', 'Daftar project yang disimpan dalam database.')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="fs-4 mb-1">List Project</h2>
            <p class="text-muted mb-0">Kelola project, lengkapi data, dan lakukan update atau hapus.</p>
        </div>
        <a href="{{ route('projects.create') }}" class="btn btn-success">Tambah Project</a>
    </div>

    @if($projects->isEmpty())
        <div class="alert alert-info">Belum ada project. Silakan tambah project baru.</div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama Project</th>
                        <th>Technology</th>
                        <th>Link</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration + ($projects->currentPage() - 1) * $projects->perPage() }}</td>
                            <td>{{ $project->namaProject }}</td>
                            <td>{{ $project->technology }}</td>
                            <td>
                                @if($project->link)
                                    <a href="{{ $project->link }}" target="_blank" rel="noreferrer">Lihat</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                @if($project->gambar)
                                    <img src="{{ asset('storage/' . $project->gambar) }}" alt="{{ $project->namaProject }}" style="max-width: 120px; max-height: 80px; object-fit: cover;" />
                                @else
                                    <span class="text-muted">Tidak ada</span>
                                @endif
                            </td>
                            <td class="text-nowrap">
                                <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-outline-primary">Detail</a>
                                <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Hapus project ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $projects->links() }}
        </div>
    @endif
@endsection
