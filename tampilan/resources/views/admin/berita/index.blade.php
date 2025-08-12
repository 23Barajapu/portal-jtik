@extends('admin.layouts.app')

@section('title', 'Manajemen Berita')

@section('content')
<style>
.btn-group .btn {
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    border-radius: 6px;
    transition: all 0.2s ease;
    cursor: pointer;
    position: relative;
    z-index: 1;
}
.btn-group .btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.btn-group .btn:active {
    transform: translateY(0);
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}
.btn-outline-danger:hover {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
}

/* Memastikan tombol dapat diklik */
.btn-group {
    position: relative;
    z-index: 10;
}

.btn-group .btn {
    position: relative;
    z-index: 11;
    pointer-events: auto;
}

/* Memastikan form inline berfungsi dengan baik */
form[style*="display: inline"] {
    margin: 0;
    padding: 0;
}

form[style*="display: inline"] button {
    border: none;
    background: none;
    padding: inherit;
    font-size: inherit;
    border-radius: inherit;
}
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">
        <i class="fas fa-newspaper"></i> Manajemen Berita
    </h2>
    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Berita
    </a>
</div>

<div class="card">
    <div class="card-body">
        @if($beritas->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="50">#</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($beritas as $index => $berita)
                        <tr>
                            <td>{{ $index + 1 + ($beritas->currentPage() - 1) * $beritas->perPage() }}</td>
                            <td>
                                @if($berita->gambar)
                                    @if(str_starts_with($berita->gambar, 'data:image'))
                                        {{-- Tampilkan base64 image --}}
                                        <img src="{{ $berita->gambar }}"
                                             alt="{{ $berita->judul }}"
                                             class="rounded"
                                             style="width: 60px; height: 60px; object-fit: cover;">
                                    @else
                                        {{-- Fallback untuk data lama yang masih menggunakan path file --}}
                                        @php
                                            $imagePath = '/storage/berita/' . $berita->gambar;
                                            $storagePath = storage_path('app/public/berita/' . $berita->gambar);
                                            $fileExists = file_exists($storagePath);
                                        @endphp

                                        @if($fileExists)
                                            <img src="{{ $imagePath }}"
                                                 alt="{{ $berita->judul }}"
                                                 class="rounded"
                                                 style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                                 style="width: 60px; height: 60px;"
                                                 title="Gambar tidak tersedia">
                                                <i class="fas fa-image text-muted"></i>
                                            </div>
                                        @endif
                                    @endif
                                @else
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                         style="width: 60px; height: 60px;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div>
                                    <strong>{{ $berita->judul }}</strong>
                                    @if($berita->ringkasan)
                                        <br><small class="text-muted">{{ Str::limit($berita->ringkasan, 80) }}</small>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary">{{ $berita->kategori->nama ?? 'Tanpa Kategori' }}</span>
                            </td>
                            <td>{{ $berita->tanggal->format('d/m/Y') }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.berita.edit', $berita->id) }}"
                                       class="btn btn-sm btn-outline-primary"
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.berita.destroy', $berita->id) }}"
                                          method="POST"
                                          style="display: inline;"
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini? Tindakan ini tidak dapat dibatalkan.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $beritas->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-4x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada berita</h5>
                <p class="text-muted">Mulai dengan menambahkan berita pertama Anda</p>
                <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Berita Pertama
                </a>
            </div>
        @endif
    </div>
</div>

@push('scripts')
<script>
// Tambahkan event listener untuk memastikan script berjalan
document.addEventListener('DOMContentLoaded', function() {
    console.log('Berita management page loaded');

    // Tambahkan event listener untuk tombol hapus
    document.querySelectorAll('.btn-outline-danger').forEach(function(button) {
        button.addEventListener('click', function(e) {
            console.log('Delete button clicked');
        });
    });
});
</script>
@endpush
@endsection
