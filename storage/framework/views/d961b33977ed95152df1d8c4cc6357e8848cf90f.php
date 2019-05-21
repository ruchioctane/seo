<?php $__env->startSection('title', trans('labels.backend.blogcategories.management') . ' | ' . trans('labels.backend.blogcategories.edit')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.blogcategories.management')); ?>

        <small><?php echo e(trans('labels.backend.blogcategories.edit')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::model($blogcategory, ['route' => ['admin.blogCategories.update', $blogcategory], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role'])); ?>


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('labels.backend.blogcategories.edit')); ?></h3>

                <div class="box-tools pull-right">
                    <?php echo $__env->make('backend.blogcategories.partials.blogcategories-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            
            <div class="box-body">
                <div class="form-group">
                    <?php echo $__env->make("backend.blogcategories.form", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="edit-form-btn">
                    <?php echo e(link_to_route('admin.blogCategories.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md'])); ?>

                    <?php echo e(Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md'])); ?>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!--box-->
    </div>
<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>