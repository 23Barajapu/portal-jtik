
<?php $__env->startSection('content'); ?>
    <h1>Program</h1>
    <p>Silakan pilih program:</p>
    <ul>
        <li><a href="<?php echo e(route('program.polsub')); ?>">Polsub</a></li>
        <li><a href="<?php echo e(route('program.elearning')); ?>">Elearning</a></li>
        <li><a href="<?php echo e(route('program.berita')); ?>">Berita</a></li>
        <li><a href="<?php echo e(route('program.siakad')); ?>">Siakad</a></li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title', 'Program'); ?>

<?php echo $__env->make('layouts.landing', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Jurusan\jtik\tampilan\resources\views/program/index.blade.php ENDPATH**/ ?>