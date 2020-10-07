<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php if(isset($page->meta_tag) && isset($page->meta_description)): ?>
    <meta name="keywords" content="<?php echo e($page->meta_tag); ?>">
    <meta name="description" content="<?php echo e($page->meta_description); ?>">
    <title><?php echo e($gs->title); ?></title>
    <?php else: ?>
    <meta name="keywords" content="<?php echo e($seo->meta_keys); ?>">
    <meta name="author" content="Eshop">
    <title><?php echo e($gs->title); ?></title>
    <?php endif; ?>
    <!-- favicon -->
    <link rel="icon"  type="image/x-icon" href="<?php echo e(asset('assets/images/'.$gs->favicon)); ?>"/> 
    <link href="<?php echo e(asset('assets/images/'.$gs->favicon)); ?>" rel="apple-touch-icon">   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/bootstrap.min.css?v='.rand())); ?>">   
    <!-- custom style -->    
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/style.css?v='.rand())); ?>">  
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/dashboard.css?v='.rand())); ?>">    
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/fontFamily.css?v='.rand())); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/responsive.css?v='.rand())); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/aos.css?v='.rand())); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/css/custom.css?v='.rand())); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/plugin/toasty/toasty.css')); ?>"> 
    <script src="<?php echo e(asset('public/assets/js/jquery.min.js')); ?>"></script>
</head>
<body>
    
    <input type="hidden" value="<?php echo e(url('/')); ?>" id="base_url">

    <div id="ajaxloader" class="fa fa-circle-o-notch fa-spin"  style="display: none;"></div>
    <div id="ajaxcover" style="display: none;"></div> 
    
    <!-- start header -->
    <?php echo $__env->make('includes.user.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- end header -->
    
    <?php echo $__env->yieldContent('content'); ?>
    
    
    <!-- start footer -->
    <?php echo $__env->make('includes.user.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- end footer -->

    

    <script src="<?php echo e(asset('public/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('public/plugin/toasty/toasty.js')); ?>"></script>    
    <script src="<?php echo e(asset('public/assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom-functon.js?v='.rand())); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
