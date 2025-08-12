<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </h2>
    <div class="text-muted">
        <i class="fas fa-calendar"></i> <?php echo e(now()->format('d F Y')); ?>

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
                        <h3 class="mb-0 text-primary"><?php echo e($totalBerita); ?></h3>
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
                        <h3 class="mb-0 text-success"><?php echo e($totalDosen); ?></h3>
                        <small class="text-muted">Dosen & Tendik Aktif</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
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
                        <a href="<?php echo e(route('admin.berita.create')); ?>" class="btn btn-primary w-100">
                            <i class="fas fa-plus"></i> Tambah Berita
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="<?php echo e(route('admin.dosen.create')); ?>" class="btn btn-success w-100">
                            <i class="fas fa-plus"></i> Tambah Dosen
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="<?php echo e(route('admin.kategori.index')); ?>" class="btn btn-info w-100">
                            <i class="fas fa-tags"></i> Kelola Kategori
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="<?php echo e(route('root')); ?>" target="_blank" class="btn btn-secondary w-100">
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
                <a href="<?php echo e(route('admin.berita.index')); ?>" class="btn btn-sm btn-outline-primary">
                    Lihat Semua
                </a>
            </div>
            <div class="card-body">
                <?php if($beritaTerbaru->count() > 0): ?>
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
                                <?php $__currentLoopData = $beritaTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <?php if($berita->gambar): ?>
                                                <?php if(str_starts_with($berita->gambar, 'data:image')): ?>
                                                    
                                                    <img src="<?php echo e($berita->gambar); ?>"
                                                         alt="<?php echo e($berita->judul); ?>"
                                                         class="rounded me-2"
                                                         style="width: 40px; height: 40px; object-fit: cover;">
                                                <?php else: ?>
                                                    
                                                    <img src="/storage/berita/<?php echo e($berita->gambar); ?>"
                                                         alt="<?php echo e($berita->judul); ?>"
                                                         class="rounded me-2"
                                                         style="width: 40px; height: 40px; object-fit: cover;">
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="bg-light rounded me-2 d-flex align-items-center justify-content-center"
                                                     style="width: 40px; height: 40px;">
                                                    <i class="fas fa-image text-muted"></i>
                                                </div>
                                            <?php endif; ?>
                                            <div>
                                                <strong><?php echo e(Str::limit($berita->judul, 50)); ?></strong>
                                                <?php if($berita->ringkasan): ?>
                                                    <br><small class="text-muted"><?php echo e(Str::limit($berita->ringkasan, 60)); ?></small>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary"><?php echo e($berita->kategori->nama ?? 'Tanpa Kategori'); ?></span>
                                    </td>
                                    <td><?php echo e($berita->tanggal->format('d/m/Y')); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.berita.edit', $berita->id)); ?>"
                                           class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="text-center py-4">
                        <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                        <h6 class="text-muted">Belum ada berita</h6>
                        <a href="<?php echo e(route('admin.berita.create')); ?>" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Berita Pertama
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\web_jtik\portal-jtik-main\tampilan\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>