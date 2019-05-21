<!doctype html>
<html class="no-js" lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <title><?php echo $__env->yieldContent('title', app_name()); ?></title>

        <!-- Meta -->
        <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Default Description'); ?>">
        <meta name="author" content="<?php echo $__env->yieldContent('meta_author', 'Viral Solani'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' rel="stylesheet"></link>
        <?php echo $__env->yieldContent('meta'); ?>

        <!-- Styles -->
        <?php echo $__env->yieldContent('before-styles'); ?>

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        <?php if (session()->has('lang-rtl')): ?>
            <?php echo e(Html::style(getRtlCss(mix('css/backend.css')))); ?>

        <?php else: ?>
            <?php echo e(Html::style(mix('css/backend.css'))); ?>

        <?php endif; ?>
        <?php echo e(Html::style(mix('css/backend-custom.css'))); ?>

        <?php echo $__env->yieldContent('after-styles'); ?>

        <!-- Html5 Shim and Respond.js IE8 support of Html5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <?php echo e(Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')); ?>

        <?php echo e(Html::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')); ?>

        <![endif]-->

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body class="skin-<?php echo e(config('backend.theme')); ?> <?php echo e(config('backend.layout')); ?>">
        <?php echo $__env->make('includes.partials.logged-in-as', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="wrapper">
            <?php echo $__env->make('backend.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('backend.includes.sidebar-dynamic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <?php echo $__env->yieldContent('page-header'); ?>
                    <!-- Breadcrumbs would render from routes/breadcrumb.php -->
                    <?php if(Breadcrumbs::exists()): ?>
                        <?php echo Breadcrumbs::render(); ?>

                    <?php endif; ?>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php echo $__env->make('includes.partials.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->yieldContent('content'); ?>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <?php echo $__env->make('backend.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div><!-- ./wrapper -->

        <!-- JavaScripts -->
        <?php echo $__env->yieldContent('before-scripts'); ?>
        <?php echo e(Html::script(mix('js/backend.js'))); ?>

        <?php echo e(Html::script(mix('js/backend-custom.js'))); ?>

        <?php echo $__env->yieldContent('after-scripts'); ?>
    </body>
</html>