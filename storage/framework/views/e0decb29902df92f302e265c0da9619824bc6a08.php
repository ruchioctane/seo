<?php $__env->startSection('title', trans('labels.backend.access.permissions.management') . ' | ' . trans('labels.backend.access.permissions.edit')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.access.permissions.management')); ?>

        <small><?php echo e(trans('labels.backend.access.permissions.edit')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::model($permission, ['route' => ['admin.access.permission.update', $permission], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role'])); ?>


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('labels.backend.access.permissions.edit')); ?></h3>

                <div class="box-tools pull-right">
                    <?php echo $__env->make('backend.access.includes.partials.permission-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">

                
                <?php echo $__env->make("backend.access.permissions.form", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="edit-form-btn">
                    <?php echo e(link_to_route('admin.access.permission.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md'])); ?>

                    <?php echo e(Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md'])); ?>

                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-body -->
        </div><!--box-->
    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>