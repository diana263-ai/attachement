<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-topbar="light" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?> | Fuel card system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="poscloud" name="poscloud" />
    <meta content="cm" name="author" />
    <!-- Zuva icon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/zuva/iconzuva.png')); ?>">
    <?php echo $__env->make('layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<style>
    body {
        background-color: #009933;
    }

    .button-custom {
        background-color: #009933;
        color: white;
    }

    .button-custom:hover {
        background-color: #337348;
        color: white;
    }
</style>

<!-- <?php echo $__env->yieldContent('body'); ?> -->

<body>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /home/vinscent/Documents/poscloud/themeforest-gERV9z9D-velzon-aspnet-core-admin-dashboard-template/Velzon_v1.9.0/Laravel (1)/card-admin-v2/resources/views/layouts/master-without-nav.blade.php ENDPATH**/ ?>