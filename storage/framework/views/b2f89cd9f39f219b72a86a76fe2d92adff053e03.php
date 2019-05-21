<?php $__env->startSection('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.edit')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.access.users.edit-profile')); ?>

    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php echo e(Form::model($logged_in_user, ['route' => 'admin.profile.update', 'class' => 'form-horizontal', 'method' => 'PATCH'])); ?>


     <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(trans('labels.backend.access.users.edit-profile')); ?></h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <?php echo e(Form::label('first_name', trans('validation.attributes.frontend.register-user.firstName'), ['class' => 'col-lg-2 control-label'])); ?>

                <div class="col-lg-10">
                    <?php echo e(Form::input('text', 'first_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.frontend.register-user.firstName')])); ?>

                </div>
            </div>

            <div class="form-group">
                <?php echo e(Form::label('last_name', trans('validation.attributes.frontend.register-user.lastName'), ['class' => 'col-lg-2 control-label'])); ?>

                <div class="col-lg-10">
                    <?php echo e(Form::input('text', 'last_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.frontend.register-user.firstName')])); ?>

                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-md-offset-4">
                    <?php echo e(Form::submit(trans('labels.general.buttons.update'), ['class' => 'btn btn-primary', 'id' => 'update-profile'])); ?>

                </div>
            </div>
        </div>
    </div>
<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('after-scripts'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        Backend.Profile.init();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>