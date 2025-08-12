@extends('admin.layouts.app')

@section('title', 'Tambah Dosen')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">
        <i class="fas fa-plus"></i> Tambah Data Dosen
    </h2>
    <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.dosen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-8">
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                               id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- NIP -->
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror"
                               id="nip" name="nip" value="{{ old('nip') }}"
                               placeholder="Contoh: 199104302019032000">
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jabatan -->
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan <span class="text-danger">*</span></label>
                        <select class="form-select @error('jabatan') is-invalid @enderror"
                                id="jabatan" name="jabatan" required>
                            <option value="">Pilih Jabatan</option>
                            <option value="Ketua Jurusan" {{ old('jabatan') == 'Ketua Jurusan' ? 'selected' : '' }}>Ketua Jurusan</option>
                            <option value="Sekretaris Jurusan" {{ old('jabatan') == 'Sekretaris Jurusan' ? 'selected' : '' }}>Sekretaris Jurusan</option>
                            <option value="Kaprodi SI" {{ old('jabatan') == 'Kaprodi SI' ? 'selected' : '' }}>Kaprodi SI</option>
                            <option value="Kaprodi TRPL" {{ old('jabatan') == 'Kaprodi TRPL' ? 'selected' : '' }}>Kaprodi TRPL</option>
                            <option value="Dosen" {{ old('jabatan') == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                            <option value="Ka Lab MDI" {{ old('jabatan') == 'Ka Lab MDI' ? 'selected' : '' }}>Ka Lab MDI</option>
                            <option value="Ka Lab JARKOM" {{ old('jabatan') == 'Ka Lab JARKOM' ? 'selected' : '' }}>Ka Lab JARKOM</option>
                            <option value="Ka Lab RPL" {{ old('jabatan') == 'Ka Lab RPL' ? 'selected' : '' }}>Ka Lab RPL</option>
                            <option value="Ka Lab UX" {{ old('jabatan') == 'Ka Lab UX' ? 'selected' : '' }}>Ka Lab UX</option>
                            <option value="Ka Lab SI" {{ old('jabatan') == 'Ka Lab SI' ? 'selected' : '' }}>Ka Lab SI</option>
                            <option value="TENDIK" {{ old('jabatan') == 'TENDIK' ? 'selected' : '' }}>TENDIK</option>
                        </select>
                        @error('jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Program Studi -->
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <select class="form-select @error('prodi') is-invalid @enderror"
                                id="prodi" name="prodi">
                            <option value="">Pilih Program Studi</option>
                            <option value="SI" {{ old('prodi') == 'SI' ? 'selected' : '' }}>Sistem Informasi (D3)</option>
                            <option value="TRPL" {{ old('prodi') == 'TRPL' ? 'selected' : '' }}>Teknologi Rekayasa Perangkat Lunak (D4)</option>
                            <option value="Akuntansi" {{ old('prodi') == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                        </select>
                        @error('prodi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Bidang Keahlian -->
                    <div class="mb-3">
                        <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                        <input type="text" class="form-control @error('bidang_keahlian') is-invalid @enderror"
                               id="bidang_keahlian" name="bidang_keahlian" value="{{ old('bidang_keahlian') }}"
                               placeholder="Contoh: Pemrograman Web, Database, AI/ML">
                        @error('bidang_keahlian')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Dosen</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
                               id="foto" name="foto" accept="image/*">
                        <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB</div>
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <!-- Preview Image -->
                        <div id="image-preview" class="mt-3" style="display: none;">
                            <img id="preview-img" src="" alt="Preview"
                                 class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Preview Card -->
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">
                                <i class="fas fa-eye"></i> Preview Data
                            </h6>
                        </div>
                        <div class="card-body">
                            <div id="preview-content">
                                <p class="text-muted">Isi form untuk melihat preview</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Data Dosen
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
// Image preview
document.getElementById('foto').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-img').src = e.target.result;
            document.getElementById('image-preview').style.display = 'block';
        }
        reader.readAsDataURL(file);
    } else {
        document.getElementById('image-preview').style.display = 'none';
    }
});

// Live preview
document.getElementById('nama').addEventListener('input', updatePreview);
document.getElementById('jabatan').addEventListener('change', updatePreview);
document.getElementById('prodi').addEventListener('change', updatePreview);
document.getElementById('bidang_keahlian').addEventListener('input', updatePreview);

function updatePreview() {
    const nama = document.getElementById('nama').value;
    const jabatan = document.getElementById('jabatan').value;
    const prodi = document.getElementById('prodi').value;
    const bidang = document.getElementById('bidang_keahlian').value;

    let previewHtml = '';

    if (nama) {
        previewHtml += `<h6 class="fw-bold">${nama}</h6>`;
    }

    if (jabatan) {
        previewHtml += `<p class="text-info mb-1"><i class="fas fa-user-tie"></i> ${jabatan}</p>`;
    }

    if (prodi) {
        previewHtml += `<p class="text-success mb-1"><i class="fas fa-graduation-cap"></i> ${prodi}</p>`;
    }

    if (bidang) {
        previewHtml += `<p class="text-muted small"><i class="fas fa-star"></i> ${bidang}</p>`;
    }

    if (!nama && !jabatan && !prodi && !bidang) {
        previewHtml = '<p class="text-muted">Isi form untuk melihat preview</p>';
    }

    document.getElementById('preview-content').innerHTML = previewHtml;
}
</script>
@endpush
@endsection
