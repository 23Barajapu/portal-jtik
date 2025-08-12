<?php $__env->startSection('title', 'Edit Dosen'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">
        <i class="fas fa-edit"></i> Edit Data Dosen
    </h2>
    <a href="<?php echo e(route('admin.dosen.index')); ?>" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="<?php echo e(route('admin.dosen.update', $dosen->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="row">
                <div class="col-md-8">
                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               id="nama" name="nama" value="<?php echo e(old('nama', $dosen->nama)); ?>" required>
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- NIP -->
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               id="nip" name="nip" value="<?php echo e(old('nip', $dosen->nip)); ?>"
                               placeholder="Contoh: 199104302019032000">
                        <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Jabatan -->
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan <span class="text-danger">*</span></label>
                        <select class="form-select <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="jabatan" name="jabatan" required>
                            <option value="">Pilih Jabatan</option>
                            <option value="Ketua Jurusan" <?php echo e(old('jabatan', $dosen->jabatan) == 'Ketua Jurusan' ? 'selected' : ''); ?>>Ketua Jurusan</option>
                            <option value="Sekretaris Jurusan" <?php echo e(old('jabatan', $dosen->jabatan) == 'Sekretaris Jurusan' ? 'selected' : ''); ?>>Sekretaris Jurusan</option>
                            <option value="Kaprodi SI" <?php echo e(old('jabatan', $dosen->jabatan) == 'Kaprodi SI' ? 'selected' : ''); ?>>Kaprodi SI</option>
                            <option value="Kaprodi TRPL" <?php echo e(old('jabatan', $dosen->jabatan) == 'Kaprodi TRPL' ? 'selected' : ''); ?>>Kaprodi TRPL</option>
                            <option value="Dosen" <?php echo e(old('jabatan', $dosen->jabatan) == 'Dosen' ? 'selected' : ''); ?>>Dosen</option>
                            <option value="Ka Lab MDI" <?php echo e(old('jabatan', $dosen->jabatan) == 'Ka Lab MDI' ? 'selected' : ''); ?>>Ka Lab MDI</option>
                            <option value="Ka Lab JARKOM" <?php echo e(old('jabatan', $dosen->jabatan) == 'Ka Lab JARKOM' ? 'selected' : ''); ?>>Ka Lab JARKOM</option>
                            <option value="Ka Lab RPL" <?php echo e(old('jabatan', $dosen->jabatan) == 'Ka Lab RPL' ? 'selected' : ''); ?>>Ka Lab RPL</option>
                            <option value="Ka Lab UX" <?php echo e(old('jabatan', $dosen->jabatan) == 'Ka Lab UX' ? 'selected' : ''); ?>>Ka Lab UX</option>
                            <option value="Ka Lab SI" <?php echo e(old('jabatan', $dosen->jabatan) == 'Ka Lab SI' ? 'selected' : ''); ?>>Ka Lab SI</option>
                        </select>
                        <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Program Studi -->
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <select class="form-select <?php $__errorArgs = ['prodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="prodi" name="prodi">
                            <option value="">Pilih Program Studi</option>
                            <option value="SI" <?php echo e(old('prodi', $dosen->prodi) == 'SI' ? 'selected' : ''); ?>>Sistem Informasi (D3)</option>
                            <option value="TRPL" <?php echo e(old('prodi', $dosen->prodi) == 'TRPL' ? 'selected' : ''); ?>>Teknologi Rekayasa Perangkat Lunak (D4)</option>
                            <option value="Akuntansi" <?php echo e(old('prodi', $dosen->prodi) == 'Akuntansi' ? 'selected' : ''); ?>>Akuntansi</option>
                        </select>
                        <?php $__errorArgs = ['prodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Bidang Keahlian -->
                    <div class="mb-3">
                        <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['bidang_keahlian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               id="bidang_keahlian" name="bidang_keahlian"
                               value="<?php echo e(old('bidang_keahlian', $dosen->bidang_keahlian)); ?>"
                               placeholder="Contoh: Pemrograman Web, Database, AI/ML">
                        <?php $__errorArgs = ['bidang_keahlian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Dosen</label>
                        <input type="file" class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               id="foto" name="foto" accept="image/*">
                        <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB</div>
                        <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <!-- Current Image -->
                        <?php if($dosen->foto): ?>
                            <div class="mt-3">
                                <label class="form-label">Foto Saat Ini:</label>
                                <?php if(str_starts_with($dosen->foto, 'data:image')): ?>
                                    
                                    <img src="<?php echo e($dosen->foto); ?>"
                                         alt="<?php echo e($dosen->nama); ?>"
                                         class="img-fluid rounded-circle"
                                         style="width: 150px; height: 150px; object-fit: cover;">
                                <?php else: ?>
                                    
                                    <img src="/storage/dosen/<?php echo e($dosen->foto); ?>"
                                         alt="<?php echo e($dosen->nama); ?>"
                                         class="img-fluid rounded-circle"
                                         style="width: 150px; height: 150px; object-fit: cover;">
                                <?php endif; ?>
                                <div class="form-text">Upload foto baru untuk mengganti</div>
                            </div>
                        <?php endif; ?>

                        <!-- Preview New Image -->
                        <div id="image-preview" class="mt-3" style="display: none;">
                            <label class="form-label">Preview Foto Baru:</label>
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
                                <h6 class="fw-bold"><?php echo e($dosen->nama); ?></h6>
                                <?php if($dosen->jabatan): ?>
                                    <p class="text-info mb-1"><i class="fas fa-user-tie"></i> <?php echo e($dosen->jabatan); ?></p>
                                <?php endif; ?>
                                <?php if($dosen->prodi): ?>
                                    <p class="text-success mb-1"><i class="fas fa-graduation-cap"></i> <?php echo e($dosen->prodi); ?></p>
                                <?php endif; ?>
                                <?php if($dosen->bidang_keahlian): ?>
                                    <p class="text-muted small"><i class="fas fa-star"></i> <?php echo e($dosen->bidang_keahlian); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="d-flex justify-content-end gap-2">
                <a href="<?php echo e(route('admin.dosen.index')); ?>" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Data Dosen
                </button>
            </div>
        </form>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
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
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\web_jtik\portal-jtik-main\tampilan\resources\views/admin/dosen/edit.blade.php ENDPATH**/ ?>