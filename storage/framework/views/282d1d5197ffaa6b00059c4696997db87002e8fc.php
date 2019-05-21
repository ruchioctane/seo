<?php $__env->startSection('content'); ?>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <div class="panel panel-default">

                <div class="panel-heading"><?php echo e(trans('labels.frontend.passwords.reset_password_box_title')); ?></div>

                <div class="panel-body">

                    <?php echo e(Form::open(['route' => 'frontend.auth.password.email', 'class' => 'form-horizontal'])); ?>


                    <div class="form-group">
                        <?php echo e(Form::label('email', trans('validation.attributes.frontend.register-user.email'), ['class' => 'col-md-4 control-label'])); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.email')])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <?php echo e(Form::submit(trans('labels.frontend.passwords.send_password_reset_link_button'), ['class' => 'btn btn-primary'])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <?php echo e(Form::close()); ?>


                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>