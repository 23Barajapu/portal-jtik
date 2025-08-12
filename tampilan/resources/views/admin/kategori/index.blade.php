@extends('admin.layouts.app')

@section('title', 'Manajemen Kategori')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">
        <i class="fas fa-tags"></i> Manajemen Kategori Berita
    </h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addKategoriModal">
        <i class="fas fa-plus"></i> Tambah Kategori
    </button>
</div>

<div class="card">
    <div class="card-body">
        @if($kategoris->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="50">#</th>
                            <th>Nama Kategori</th>
                            <th>Jumlah Berita</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategoris as $index => $kategori)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <span class="badge bg-primary fs-6">{{ $kategori->nama }}</span>
                            </td>
                            <td>
                                <span class="badge bg-info">{{ $kategori->beritas->count() }} berita</span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button"
                                            class="btn btn-sm btn-outline-primary"
                                            onclick="editKategori({{ $kategori->id }}, '{{ $kategori->nama }}')"
                                            title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    @if($kategori->beritas->count() == 0)
                                        <button type="button"
                                                class="btn btn-sm btn-outline-danger"
                                                onclick="confirmDelete({{ $kategori->id }})"
                                                title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @else
                                        <button type="button"
                                                class="btn btn-sm btn-outline-secondary"
                                                disabled
                                                title="Tidak dapat dihapus karena masih digunakan">
                                            <i class="fas fa-lock"></i>
                                        </button>
                                    @endif
                                </div>

                                <!-- Delete Form -->
                                <form id="delete-form-{{ $kategori->id }}"
                                      action="{{ route('admin.kategori.destroy', $kategori->id) }}"
                                      method="POST"
                                      style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-tags fa-4x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada kategori</h5>
                <p class="text-muted">Mulai dengan menambahkan kategori pertama</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addKategoriModal">
                    <i class="fas fa-plus"></i> Tambah Kategori Pertama
                </button>
            </div>
        @endif
    </div>
</div>

<!-- Add Kategori Modal -->
<div class="modal fade" id="addKategoriModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-plus"></i> Tambah Kategori Baru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('admin.kategori.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama" name="nama" required
                               placeholder="Contoh: Berita Kampus, Event, Prestasi">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Kategori Modal -->
<div class="modal fade" id="editKategoriModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-edit"></i> Edit Kategori
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editKategoriForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit_nama" class="form-label">Nama Kategori <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="edit_nama" name="nama" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
function editKategori(id, nama) {
    document.getElementById('edit_nama').value = nama;
    document.getElementById('editKategoriForm').action = '{{ route("admin.kategori.update", ":id") }}'.replace(':id', id);
    new bootstrap.Modal(document.getElementById('editKategoriModal')).show();
}

function confirmDelete(id) {
    if (confirm('Apakah Anda yakin ingin menghapus kategori ini? Tindakan ini tidak dapat dibatalkan.')) {
        document.getElementById('delete-form-' + id).submit();
    }
}
</script>
@endpush
@endsection
