<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-topbar="light" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?> | DGT PAY ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="poscloud" name="poscloud" />
    <meta content="cm" name="author" />
    <!-- Zuva icon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/nmbz/logo-1.png')); ?>">
    <?php echo $__env->make('layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<style>
    body {
        background-color:#1a3561;
    }

    .button-custom {
        background-color: #1a3561;
        color: white;
    }

    .button-custom:hover {
        background-color:#1a3561;
        color: white;
    }

    .form-check-input:checked {
        background-color:#1a3561;
        border-color:#1a3561;
    }
</style>

<!-- <?php echo $__env->yieldContent('body'); ?> -->

<body>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/tinashe/Documents/PHP/test/attachement/switching-admin-frontend/resources/views/layouts/master-without-nav.blade.php ENDPATH**/ ?>