<?php $__env->startSection('content'); ?>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e(trans('labels.frontend.auth.register_box_title')); ?></div>

                <div class="panel-body">

                    <?php echo e(Form::open(['route' => 'frontend.auth.register', 'class' => 'form-horizontal'])); ?>


                    <div class="form-group">
                        <?php echo e(Form::label('first_name', trans('validation.attributes.frontend.register-user.firstName').'*', ['class' => 'col-md-4 control-label'])); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::input('name', 'first_name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.firstName')])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <?php echo e(Form::label('last_name', trans('validation.attributes.frontend.register-user.lastName').'*', ['class' => 'col-md-4 control-label'])); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::input('name', 'last_name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.lastName')])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <?php echo e(Form::label('email', trans('validation.attributes.frontend.register-user.email').'*', ['class' => 'col-md-4 control-label'])); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.email')])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <?php echo e(Form::label('password', trans('validation.attributes.frontend.register-user.password').'*', ['class' => 'col-md-4 control-label'])); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.password')])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                        <?php echo e(Form::label('password_confirmation', trans('validation.attributes.frontend.register-user.password_confirmation').'*', ['class' => 'col-md-4 control-label'])); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::input('password', 'password_confirmation', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.password_confirmation')])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <div class="form-group">
                            <div class="col-xs-7">
                               <label class="col-md-12 control-label">
                                 <?php echo Form::checkbox('is_term_accept',1,false); ?>

                                 I accept <?php echo link_to_route('frontend.pages.show', trans('validation.attributes.frontend.register-user.terms_and_conditions').'*', ['page_slug'=>'terms-and-conditions']); ?> </label>

                         </div><!--form-group-->
                    </div><!--col-md-6-->

                    <?php if(config('access.captcha.registration')): ?>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <?php echo Form::captcha(); ?>

                                <?php echo e(Form::hidden('captcha_status', 'true')); ?>

                            </div><!--col-md-6-->
                        </div><!--form-group-->
                    <?php endif; ?>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <?php echo e(Form::submit(trans('labels.frontend.auth.register_button'), ['class' => 'btn btn-primary'])); ?>

                        </div><!--col-md-6-->
                    </div><!--form-group-->

                    <?php echo e(Form::close()); ?>


                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-scripts'); ?>
    <?php if(config('access.captcha.registration')): ?>
        <?php echo Captcha::script(); ?>

    <?php endif; ?>

    <script type="text/javascript">

        $(document).ready(function() {
            // To Use Select2
            Backend.Select2.init();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>