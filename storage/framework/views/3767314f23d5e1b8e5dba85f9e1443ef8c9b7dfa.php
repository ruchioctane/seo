<?php $__env->startSection('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.change_password')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.access.users.management')); ?>

        <small><?php echo e(trans('labels.backend.access.users.change_password')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::open(['route' => ['admin.access.user.change-password', $user], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'patch'])); ?>


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('labels.backend.access.users.change_password_for', ['user' => $user->name])); ?></h3>
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group">
                    <?php echo e(Form::label('old password', trans('validation.attributes.backend.access.users.old_password'), ['class' => 'col-lg-2 control-label required', 'placeholder' => trans('validation.attributes.backend.access.users.password')])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::password('old_password', ['class' => 'form-control  box-size'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    <?php echo e(Form::label('password', trans('validation.attributes.backend.access.users.password'), ['class' => 'col-lg-2 control-label required', 'placeholder' => trans('validation.attributes.backend.access.users.password')])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::password('password', ['class' => 'form-control  box-size'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('password_confirmation', trans('validation.attributes.backend.access.users.password_confirmation'), ['class' => 'col-lg-2 control-label', 'placeholder' => trans('validation.attributes.backend.access.users.password_confirmation')])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::password('password_confirmation', ['class' => 'form-control  box-size'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->
            </div><!-- /.box-body -->
        </div><!--box-->

        <div class="box box-info">
            <div class="box-body">
                <div class="pull-left">
                    <?php echo e(link_to_route('admin.access.user.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md'])); ?>

                </div><!--pull-left-->

                <div class="pull-right">
                    <?php echo e(Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md'])); ?>

                </div><!--pull-right-->

                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>