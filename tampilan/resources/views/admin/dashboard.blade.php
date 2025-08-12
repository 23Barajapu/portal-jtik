@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </h2>
    <div class="text-muted">
        <i class="fas fa-calendar"></i> {{ now()->format('d F Y') }}
    </div>
</div>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-primary bg-gradient rounded-circle p-3">
                            <i class="fas fa-newspaper text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="card-title mb-1">Total Berita</h5>
                        <h3 class="mb-0 text-primary">{{ $totalBerita }}</h3>
                        <small class="text-muted">Artikel yang dipublikasikan</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-success bg-gradient rounded-circle p-3">
                            <i class="fas fa-chalkboard-teacher text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="card-title mb-1">Total Dosen & Tendik</h5>
                        <h3 class="mb-0 text-success">{{ $totalDosen }}</h3>
                        <small class="text-muted">Dosen & Tendik Aktif</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="bg-info bg-gradient rounded-circle p-3">
                            <i class="fas fa-users text-white"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="card-title mb-1">Total Tendik</h5>
                        <h3 class="mb-0 text-info">{{ $totalTendik }}</h3>
                        <small class="text-muted">Tenaga kependidikan</small>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<!-- Quick Actions -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-bolt"></i> Aksi Cepat
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-2">
                        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary w-100">
                            <i class="fas fa-plus"></i> Tambah Berita
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="{{ route('admin.dosen.create') }}" class="btn btn-success w-100">
                            <i class="fas fa-plus"></i> Tambah Dosen
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="{{ route('admin.kategori.index') }}" class="btn btn-info w-100">
                            <i class="fas fa-tags"></i> Kelola Kategori
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="{{ route('root') }}" target="_blank" class="btn btn-secondary w-100">
                            <i class="fas fa-external-link-alt"></i> Lihat Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent News -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fas fa-newspaper"></i> Berita Terbaru
                </h5>
                <a href="{{ route('admin.berita.index') }}" class="btn btn-sm btn-outline-primary">
                    Lihat Semua
                </a>
            </div>
            <div class="card-body">
                @if($beritaTerbaru->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($beritaTerbaru as $berita)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($berita->gambar)
                                                @if(str_starts_with($berita->gambar, 'data:image'))
                                                    {{-- Tampilkan base64 image --}}
                                                    <img src="{{ $berita->gambar }}"
                                                         alt="{{ $berita->judul }}"
                                                         class="rounded me-2"
                                                         style="width: 40px; height: 40px; object-fit: cover;">
                                                @else
                                                    {{-- Fallback untuk data lama dari storage --}}
                                                    <img src="/storage/berita/{{ $berita->gambar }}"
                                                         alt="{{ $berita->judul }}"
                                                         class="rounded me-2"
                                                         style="width: 40px; height: 40px; object-fit: cover;">
                                                @endif
                                            @else
                                                <div class="bg-light rounded me-2 d-flex align-items-center justify-content-center"
                                                     style="width: 40px; height: 40px;">
                                                    <i class="fas fa-image text-muted"></i>
                                                </div>
                                            @endif
                                            <div>
                                                <strong>{{ Str::limit($berita->judul, 50) }}</strong>
                                                @if($berita->ringkasan)
                                                    <br><small class="text-muted">{{ Str::limit($berita->ringkasan, 60) }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">{{ $berita->kategori->nama ?? 'Tanpa Kategori' }}</span>
                                    </td>
                                    <td>{{ $berita->tanggal->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.berita.edit', $berita->id) }}"
                                           class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                        <h6 class="text-muted">Belum ada berita</h6>
                        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Berita Pertama
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
