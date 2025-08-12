<?php $__env->startSection('title', 'Manajemen Tendik'); ?>

<?php $__env->startSection('content'); ?>
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
.tendik-photo {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border: 2px solid #e9ecef;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: all 0.2s ease;
}
.tendik-photo:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}
.tendik-photo-placeholder {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border: 2px solid #e9ecef;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.tendik-name {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 4px;
    line-height: 1.2;
    font-size: 0.95rem;
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
            <i class="fas fa-users-cog"></i> Manajemen Tendik
        </h2>
        <small class="text-muted">Total <?php echo e($tendiks->count()); ?> tendik</small>
    </div>
    <a href="<?php echo e(route('admin.tendik.create')); ?>" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Tendik
    </a>
</div>

<div class="card">
    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>
                <?php echo e(session('error')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        <?php if($tendiks->count() > 0): ?>
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
                        <?php $__currentLoopData = $tendiks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tendik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td>
                                <?php if($tendik->foto): ?>
                                    <?php if(str_starts_with($tendik->foto, 'data:image')): ?>
                                        
                                        <img src="<?php echo e($tendik->foto); ?>"
                                             alt="<?php echo e($tendik->nama); ?>"
                                             class="rounded-circle tendik-photo">
                                    <?php else: ?>
                                        
                                        <img src="/storage/tendik/<?php echo e($tendik->foto); ?>"
                                             alt="<?php echo e($tendik->nama); ?>"
                                             class="rounded-circle tendik-photo">
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="rounded-circle tendik-photo-placeholder d-flex align-items-center justify-content-center">
                                        <i class="fas fa-user text-muted"></i>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <div class="tendik-name"><?php echo e($tendik->nama); ?></div>
                                </div>
                            </td>
                            <td>
                                <span class="nip-text"><?php echo e($tendik->nip ?? '-'); ?></span>
                            </td>
                            <td>
                                <span class="badge bg-primary"><?php echo e($tendik->jabatan); ?></span>
                            </td>
                            <td>
                                <?php if($tendik->prodi): ?>
                                    <span class="badge bg-success"><?php echo e($tendik->prodi); ?></span>
                                <?php else: ?>
                                    <span class="badge bg-secondary">-</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="<?php echo e(route('admin.tendik.edit', $tendik->id)); ?>"
                                       class="btn btn-sm btn-outline-primary"
                                       title="Edit Tendik">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.tendik.destroy', $tendik->id)); ?>"
                                          method="POST"
                                          style="display: inline;"
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus data tendik ini? Tindakan ini tidak dapat dibatalkan.');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                                title="Hapus Tendik">
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


        <?php else: ?>
            <div class="text-center py-5">
                <i class="fas fa-users-cog fa-4x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada data tendik</h5>
                <p class="text-muted">Mulai dengan menambahkan data tendik pertama</p>
                <a href="<?php echo e(route('admin.tendik.create')); ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Tendik Pertama
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
// Tambahkan event listener untuk memastikan script berjalan
document.addEventListener('DOMContentLoaded', function() {
    console.log('Tendik management page loaded');

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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\web_jtik\portal-jtik-main\tampilan\resources\views/admin/tendik/index.blade.php ENDPATH**/ ?>