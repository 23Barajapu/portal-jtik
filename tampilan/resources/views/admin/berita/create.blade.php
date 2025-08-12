@extends('admin.layouts.app')

@section('title', 'Tambah Berita')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">
        <i class="fas fa-plus"></i> Tambah Berita Baru
    </h2>
    <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-8">
                    <!-- Judul -->
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                               id="judul" name="judul" value="{{ old('judul') }}" required>
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kategori -->
                    <div class="mb-3">
                        <label for="kategori_berita_id" class="form-label">Kategori <span class="text-danger">*</span></label>
                        <select class="form-select @error('kategori_berita_id') is-invalid @enderror"
                                id="kategori_berita_id" name="kategori_berita_id" required>
                            <option value="">Pilih Kategori</option>
                            @foreach($kategoris as $kategori)
                                <option value="{{ $kategori->id }}" {{ old('kategori_berita_id') == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_berita_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tanggal -->
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Publikasi <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                               id="tanggal" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}" required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Ringkasan -->
                    <div class="mb-3">
                        <label for="ringkasan" class="form-label">Ringkasan</label>
                        <textarea class="form-control @error('ringkasan') is-invalid @enderror"
                                  id="ringkasan" name="ringkasan" rows="3"
                                  placeholder="Ringkasan singkat berita (opsional)">{{ old('ringkasan') }}</textarea>
                        <div class="form-text">Maksimal 500 karakter</div>
                        @error('ringkasan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Isi Berita -->
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi Berita <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('isi') is-invalid @enderror"
                                  id="isi" name="isi" rows="15" required>{{ old('isi') }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Gambar -->
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Berita</label>
                        <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                               id="gambar" name="gambar" accept="image/*">
                        <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB</div>
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <!-- Preview Image -->
                        <div id="image-preview" class="mt-3" style="display: none;">
                            <img id="preview-img" src="" alt="Preview"
                                 class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                    </div>

                    <!-- Preview Card -->
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">
                                <i class="fas fa-eye"></i> Preview Berita
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
                <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Berita
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
// Image preview
document.getElementById('gambar').addEventListener('change', function(e) {
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
document.getElementById('judul').addEventListener('input', updatePreview);
document.getElementById('ringkasan').addEventListener('input', updatePreview);

function updatePreview() {
    const judul = document.getElementById('judul').value;
    const ringkasan = document.getElementById('ringkasan').value;

    let previewHtml = '';

    if (judul) {
        previewHtml += `<h6 class="fw-bold">${judul}</h6>`;
    }

    if (ringkasan) {
        previewHtml += `<p class="text-muted small">${ringkasan}</p>`;
    }

    if (!judul && !ringkasan) {
        previewHtml = '<p class="text-muted">Isi form untuk melihat preview</p>';
    }

    document.getElementById('preview-content').innerHTML = previewHtml;
}
</script>
@endpush
@endsection
