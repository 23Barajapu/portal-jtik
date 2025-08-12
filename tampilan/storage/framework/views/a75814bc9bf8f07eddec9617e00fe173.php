<?php $__env->startSection('title', 'Manajemen Berita'); ?>

<?php $__env->startSection('content'); ?>
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
    <a href="<?php echo e(route('admin.berita.create')); ?>" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Berita
    </a>
</div>

<div class="card">
    <div class="card-body">
        <?php if($beritas->count() > 0): ?>
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
                        <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1 + ($beritas->currentPage() - 1) * $beritas->perPage()); ?></td>
                            <td>
                                <?php if($berita->gambar): ?>
                                    <?php if(str_starts_with($berita->gambar, 'data:image')): ?>
                                        
                                        <img src="<?php echo e($berita->gambar); ?>"
                                             alt="<?php echo e($berita->judul); ?>"
                                             class="rounded"
                                             style="width: 60px; height: 60px; object-fit: cover;">
                                    <?php else: ?>
                                        
                                        <?php
                                            $imagePath = '/storage/berita/' . $berita->gambar;
                                            $storagePath = storage_path('app/public/berita/' . $berita->gambar);
                                            $fileExists = file_exists($storagePath);
                                        ?>

                                        <?php if($fileExists): ?>
                                            <img src="<?php echo e($imagePath); ?>"
                                                 alt="<?php echo e($berita->judul); ?>"
                                                 class="rounded"
                                                 style="width: 60px; height: 60px; object-fit: cover;">
                                        <?php else: ?>
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                                 style="width: 60px; height: 60px;"
                                                 title="Gambar tidak tersedia">
                                                <i class="fas fa-image text-muted"></i>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                         style="width: 60px; height: 60px;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div>
                                    <strong><?php echo e($berita->judul); ?></strong>
                                    <?php if($berita->ringkasan): ?>
                                        <br><small class="text-muted"><?php echo e(Str::limit($berita->ringkasan, 80)); ?></small>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary"><?php echo e($berita->kategori->nama ?? 'Tanpa Kategori'); ?></span>
                            </td>
                            <td><?php echo e($berita->tanggal->format('d/m/Y')); ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="<?php echo e(route('admin.berita.edit', $berita->id)); ?>"
                                       class="btn btn-sm btn-outline-primary"
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.berita.destroy', $berita->id)); ?>"
                                          method="POST"
                                          style="display: inline;"
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini? Tindakan ini tidak dapat dibatalkan.');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                <?php echo e($beritas->links()); ?>

            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-4x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada berita</h5>
                <p class="text-muted">Mulai dengan menambahkan berita pertama Anda</p>
                <a href="<?php echo e(route('admin.berita.create')); ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Berita Pertama
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
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
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\web_jtik\portal-jtik-main\tampilan\resources\views/admin/berita/index.blade.php ENDPATH**/ ?>