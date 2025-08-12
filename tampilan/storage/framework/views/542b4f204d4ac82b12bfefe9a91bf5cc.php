<?php $__env->startSection('title', 'Edit Tendik'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">
        <i class="fas fa-edit"></i> Edit Data Tendik
    </h2>
    <a href="<?php echo e(route('admin.tendik.index')); ?>" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="<?php echo e(route('admin.tendik.update', $tendik->id)); ?>" method="POST" enctype="multipart/form-data">
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
                               id="nama" name="nama" value="<?php echo e(old('nama', $tendik->nama)); ?>" required>
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
                               id="nip" name="nip" value="<?php echo e(old('nip', $tendik->nip)); ?>"
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
                            <option value="Kepala Tata Usaha" <?php echo e(old('jabatan', $tendik->jabatan) == 'Kepala Tata Usaha' ? 'selected' : ''); ?>>Kepala Tata Usaha</option>
                            <option value="Staff Tata Usaha" <?php echo e(old('jabatan', $tendik->jabatan) == 'Staff Tata Usaha' ? 'selected' : ''); ?>>Staff Tata Usaha</option>
                            <option value="Staff Akademik" <?php echo e(old('jabatan', $tendik->jabatan) == 'Staff Akademik' ? 'selected' : ''); ?>>Staff Akademik</option>
                            <option value="Staff Keuangan" <?php echo e(old('jabatan', $tendik->jabatan) == 'Staff Keuangan' ? 'selected' : ''); ?>>Staff Keuangan</option>
                            <option value="Staff Umum" <?php echo e(old('jabatan', $tendik->jabatan) == 'Staff Umum' ? 'selected' : ''); ?>>Staff Umum</option>
                            <option value="Staff Perpustakaan" <?php echo e(old('jabatan', $tendik->jabatan) == 'Staff Perpustakaan' ? 'selected' : ''); ?>>Staff Perpustakaan</option>
                            <option value="Staff Laboratorium" <?php echo e(old('jabatan', $tendik->jabatan) == 'Staff Laboratorium' ? 'selected' : ''); ?>>Staff Laboratorium</option>
                            <option value="Teknisi" <?php echo e(old('jabatan', $tendik->jabatan) == 'Teknisi' ? 'selected' : ''); ?>>Teknisi</option>
                            <option value="Driver" <?php echo e(old('jabatan', $tendik->jabatan) == 'Driver' ? 'selected' : ''); ?>>Driver</option>
                            <option value="Security" <?php echo e(old('jabatan', $tendik->jabatan) == 'Security' ? 'selected' : ''); ?>>Security</option>
                            <option value="Cleaning Service" <?php echo e(old('jabatan', $tendik->jabatan) == 'Cleaning Service' ? 'selected' : ''); ?>>Cleaning Service</option>
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
                            <option value="SI" <?php echo e(old('prodi', $tendik->prodi) == 'SI' ? 'selected' : ''); ?>>Sistem Informasi (D3)</option>
                            <option value="TRPL" <?php echo e(old('prodi', $tendik->prodi) == 'TRPL' ? 'selected' : ''); ?>>Teknologi Rekayasa Perangkat Lunak (D4)</option>
                            <option value="Akuntansi" <?php echo e(old('prodi', $tendik->prodi) == 'Akuntansi' ? 'selected' : ''); ?>>Akuntansi</option>
                            <option value="Umum" <?php echo e(old('prodi', $tendik->prodi) == 'Umum' ? 'selected' : ''); ?>>Umum</option>
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
                </div>

                <div class="col-md-4">
                    <!-- Foto -->
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Tendik</label>
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
                        <?php if($tendik->foto): ?>
                            <div class="mt-3">
                                <label class="form-label">Foto Saat Ini:</label>
                                <?php if(str_starts_with($tendik->foto, 'data:image')): ?>
                                    <img src="<?php echo e($tendik->foto); ?>" alt="Current Photo"
                                         class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                <?php else: ?>
                                    <img src="/storage/tendik/<?php echo e($tendik->foto); ?>" alt="Current Photo"
                                         class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Preview Image -->
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
                                <h6 class="fw-bold"><?php echo e($tendik->nama); ?></h6>
                                <?php if($tendik->jabatan): ?>
                                    <p class="text-info mb-1"><i class="fas fa-user-tie"></i> <?php echo e($tendik->jabatan); ?></p>
                                <?php endif; ?>
                                <?php if($tendik->prodi): ?>
                                    <p class="text-success mb-1"><i class="fas fa-graduation-cap"></i> <?php echo e($tendik->prodi); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="d-flex justify-content-end gap-2">
                <a href="<?php echo e(route('admin.tendik.index')); ?>" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Data Tendik
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

function updatePreview() {
    const nama = document.getElementById('nama').value;
    const jabatan = document.getElementById('jabatan').value;
    const prodi = document.getElementById('prodi').value;

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

    if (!nama && !jabatan && !prodi) {
        previewHtml = '<p class="text-muted">Isi form untuk melihat preview</p>';
    }

    document.getElementById('preview-content').innerHTML = previewHtml;
}
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\web_jtik\portal-jtik-main\tampilan\resources\views/admin/tendik/edit.blade.php ENDPATH**/ ?>