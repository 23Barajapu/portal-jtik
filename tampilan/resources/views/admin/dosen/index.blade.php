@extends('admin.layouts.app')

@section('title', 'Manajemen Dosen')

@section('content')
<style>
.table th {
    font-weight: 600;
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    padding: 12px 8px;
    font-size: 0.875rem;
    color: #495057;
}
.table td {
    vertical-align: middle;
    padding: 12px 8px;
    border-bottom: 1px solid #f1f3f4;
}
.table tbody tr:hover {
    background-color: #f8f9fa;
}
.table-responsive::-webkit-scrollbar {
    width: 8px;
}
.table-responsive::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}
.table-responsive::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 4px;
}
.table-responsive::-webkit-scrollbar-thumb:hover {
    background: #a8a8a8;
}
.badge {
    font-size: 0.75rem;
    padding: 0.5rem 0.75rem;
    border-radius: 6px;
    font-weight: 500;
    letter-spacing: 0.5px;
}
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
.dosen-photo {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border: 2px solid #e9ecef;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: all 0.2s ease;
}
.dosen-photo:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}
.dosen-photo-placeholder {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border: 2px solid #e9ecef;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.dosen-name {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 4px;
    line-height: 1.2;
    font-size: 0.95rem;
}
.dosen-specialty {
    font-size: 0.8rem;
    color: #6c757d;
    line-height: 1.3;
    font-style: italic;
}
.nip-text {
    font-family: 'Courier New', monospace;
    font-size: 0.85rem;
    color: #6c757d;
    background-color: #f8f9fa;
    padding: 4px 8px;
    border-radius: 4px;
    border: 1px solid #e9ecef;
}
</style>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">
            <i class="fas fa-chalkboard-teacher"></i> Manajemen Dosen
        </h2>
        <small class="text-muted">Total {{ $dosens->count() }} dosen</small>
    </div>
    <a href="{{ route('admin.dosen.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Dosen
    </a>
</div>

<div class="card">
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if($dosens->count() > 0)
            <div class="table-responsive" style="max-height: 600px; overflow-y: auto;">
                <table class="table table-hover align-middle">
                    <thead style="position: sticky; top: 0; background-color: #f8f9fa; z-index: 1;">
                        <tr>
                            <th width="60">No.</th>
                            <th width="80">Foto</th>
                            <th>Nama Lengkap</th>
                            <th width="150">NIP</th>
                            <th width="120">Jabatan</th>
                            <th width="120">Program Studi</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosens as $index => $dosen)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($dosen->foto)
                                    @if(str_starts_with($dosen->foto, 'data:image'))
                                        {{-- Tampilkan base64 image --}}
                                        <img src="{{ $dosen->foto }}"
                                             alt="{{ $dosen->nama }}"
                                             class="rounded-circle dosen-photo">
                                    @else
                                        {{-- Fallback untuk data lama --}}
                                        <img src="/storage/dosen/{{ $dosen->foto }}"
                                             alt="{{ $dosen->nama }}"
                                             class="rounded-circle dosen-photo">
                                    @endif
                                @else
                                    <div class="rounded-circle dosen-photo-placeholder d-flex align-items-center justify-content-center">
                                        <i class="fas fa-user text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <div class="dosen-name">{{ $dosen->nama }}</div>
                                    @if($dosen->bidang_keahlian)
                                        <div class="dosen-specialty">{{ $dosen->bidang_keahlian }}</div>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <span class="nip-text">{{ $dosen->nip ?? '-' }}</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">{{ $dosen->jabatan }}</span>
                            </td>
                            <td>
                                @if($dosen->prodi)
                                    <span class="badge bg-success">{{ $dosen->prodi }}</span>
                                @else
                                    <span class="badge bg-secondary">-</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.dosen.edit', $dosen->id) }}"
                                       class="btn btn-sm btn-outline-primary"
                                       title="Edit Dosen">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.dosen.destroy', $dosen->id) }}"
                                          method="POST"
                                          style="display: inline;"
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus data dosen ini? Tindakan ini tidak dapat dibatalkan.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                title="Hapus Dosen">
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


        @else
            <div class="text-center py-5">
                <i class="fas fa-chalkboard-teacher fa-4x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada data dosen</h5>
                <p class="text-muted">Mulai dengan menambahkan data dosen pertama</p>
                <a href="{{ route('admin.dosen.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Dosen Pertama
                </a>
            </div>
        @endif
    </div>
</div>

@push('scripts')
<script>
// Tambahkan event listener untuk memastikan script berjalan
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dosen management page loaded');

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
