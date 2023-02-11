<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables-select.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <title><?php echo $__env->yieldContent('title'); ?>
    </title>
    <!-- ✅ Load CSS file for jQuery ui  -->
    <link
        href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css"
        rel="stylesheet"
    />

    <!-- ✅ load jQuery ✅ -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>

    <!-- ✅ load jquery UI ✅ -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>

<body>




<div class="container-fluid">
    <?php echo $__env->make('backend.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('backend.common.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
</div>



<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatables-select.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/axios.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.toast.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>





<?php echo $__env->yieldContent('script'); ?>


</body>

</html>
<?php /**PATH D:\New folder (3)\sanzid_shihab\resources\views/backend/index.blade.php ENDPATH**/ ?>