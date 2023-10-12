<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Cadaskertajaya</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/feather/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vertical-layout-light/style.css')); ?>">
    <link href="https://karawangkab.go.id/sites/default/files/krw-icon.png" rel="shortcut icon">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        <?php echo $__env->make('admin.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid page-body-wrapper">
            <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('contentAdmin'); ?>
        </div>
    </div>

    <script src="<?php echo e(asset('assets/vendor/js/vendor.bundle.base.js')); ?>"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="<?php echo e(asset('assets/vendor/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/template.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/todolist.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/Chart.roundedBarCharts.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\cadas\resources\views/admin/layouts/main.blade.php ENDPATH**/ ?>