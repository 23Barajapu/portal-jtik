<!DOCTYPE html>
<html lang="en" <?php echo $__env->yieldContent('html_attribute'); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(isset($title) ? $title : 'O-Tech'); ?></title>

    <?php if(isset($logo2)): ?>
        <link rel="shortcut icon" href="/img/icons/polsub.ico">
    <?php elseif(isset($logo3)): ?>
        <link rel="shortcut icon" href="/img/icons/vl-fav-ic-1.3.svg">
    <?php else: ?>
        <link rel="shortcut icon" href="/img/icons/vl-fav-ic-1.1.svg">
    <?php endif; ?>


    <!--===== CSS LINK =======-->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/main.scss']); ?>

    <?php echo $__env->yieldContent('css'); ?>

</head>

<body <?php echo $__env->yieldContent('body_attribute'); ?>>

    <?php echo $__env->yieldContent('header'); ?>

    <?php echo $__env->yieldContent('content'); ?>


    <?php echo $__env->yieldContent('scripts'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/main.js']); ?>

</body>

</html>
<?php /**PATH D:\web_jtik\portal-jtik-main\tampilan\resources\views/layouts/base.blade.php ENDPATH**/ ?>