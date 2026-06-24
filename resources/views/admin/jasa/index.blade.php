@extends('layouts.app')

@section('title', 'Daftar Jasa')
@section('page_title', 'Daftar Jasa')
@section('page_description', 'Daftar jasa/layanan yang ditawarkan beserta harga dan estimasi pengerjaan.')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="fs-4 mb-1">List Jasa</h2>
            <p class="text-muted mb-0">Kelola jasa: harga, lama pengerjaan, dan apa saja yang didapat client.</p>
        </div>
        <a href="{{ route('jasa.create') }}" class="btn btn-success">Tambah Jasa</a>
    </div>

    @if($jasa->isEmpty())
        <div class="alert alert-info">Belum ada jasa. Silakan tambah jasa baru.</div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama Jasa</th>
                        <th>Harga</th>
                        <th>Lama Pekerjaan</th>
                        <th>Yang Didapat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jasa as $item)
                        <tr>
                            <td>{{ $loop->iteration + ($jasa->currentPage() - 1) * $jasa->perPage() }}</td>
                            <td>{{ $item->nama_jasa }}</td>
                            <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{ $item->lama_pekerjaan }}</td>
                            <td style="max-width: 280px; white-space: pre-line;">{{ $item->yang_didapat }}</td>
                            <td class="text-nowrap">
                                <a href="{{ route('jasa.edit', $item) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                                <form action="{{ route('jasa.destroy', $item) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Hapus jasa ini?');">
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
            {{ $jasa->links() }}
        </div>
    @endif
@endsection
