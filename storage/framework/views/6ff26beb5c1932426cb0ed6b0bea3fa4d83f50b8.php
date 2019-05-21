<?php $__env->startSection('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.create')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.access.users.management')); ?>

        <small><?php echo e(trans('labels.backend.access.users.create')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::open(['route' => 'admin.access.user.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post'])); ?>


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('labels.backend.access.users.create')); ?></h3>

                <div class="box-tools pull-right">
                    <?php echo $__env->make('backend.access.includes.partials.user-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">
                
                <div class="form-group">
                    <?php echo e(Form::label('First Name', trans('validation.attributes.backend.access.users.firstName'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('first_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.users.firstName'), 'required' => 'required'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('Last Name', trans('validation.attributes.backend.access.users.lastName'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('last_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.users.lastName'), 'required' => 'required'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('email', trans('validation.attributes.backend.access.users.email'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('email', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.users.email'), 'required' => 'required'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('password', trans('validation.attributes.backend.access.users.password'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::password('password', ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.users.password'), 'required' => 'required'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('password_confirmation', trans('validation.attributes.backend.access.users.password_confirmation'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::password('password_confirmation', ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.users.password_confirmation'), 'required' => 'required'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('status', trans('validation.attributes.backend.access.users.active'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-1">
                                <div class="control-group">
                                    <label class="control control--checkbox">
                                        <?php echo e(Form::checkbox('status', '1', true)); ?>

                                    <div class="control__indicator"></div>
                                    </label>
                                </div>
                    </div><!--col-lg-1-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('confirmed', trans('validation.attributes.backend.access.users.confirmed'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-1">
                         <div class="control-group">
                            <label class="control control--checkbox">
                                <?php echo e(Form::checkbox('confirmed', '1', true)); ?>

                                <div class="control__indicator"></div>
                            </label>
                        </div>
                    </div><!--col-lg-1-->
                </div><!--form control-->

                
                <div class="form-group">
                    <label class="col-lg-2 control-label"><?php echo e(trans('validation.attributes.backend.access.users.send_confirmation_email')); ?><br/>
                        <small><?php echo e(trans('strings.backend.access.users.if_confirmed_off')); ?></small>
                    </label>

                    <div class="col-lg-1">
                        <div class="control-group">
                            <label class="control control--checkbox">
                                <?php echo e(Form::checkbox('confirmation_email', '1')); ?>

                                <div class="control__indicator"></div>
                            </label>
                        </div>
                    </div><!--col-lg-1-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('status', trans('validation.attributes.backend.access.users.associated_roles'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-8">
                        <?php if(count($roles) > 0): ?>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                <label for="role-<?php echo e($role->id); ?>" class="control control--radio">
                                <input type="radio" value="<?php echo e($role->id); ?>" name="assignees_roles[]" id="role-<?php echo e($role->id); ?>" class="get-role-for-permissions" <?php echo e($role->id == 3 ? 'checked' : ''); ?> />  &nbsp;&nbsp;<?php echo $role->name; ?>

                                <div class="control__indicator"></div>
                                    <a href="#" data-role="role_<?php echo e($role->id); ?>" class="show-permissions small">
                                        (
                                            <span class="show-text"><?php echo e(trans('labels.general.show')); ?></span>
                                            <span class="hide-text hidden"><?php echo e(trans('labels.general.hide')); ?></span>
                                            <?php echo e(trans('labels.backend.access.users.permissions')); ?>

                                        )
                                    </a>
                                </label>
                                </div>
                                <div class="permission-list hidden" data-role="role_<?php echo e($role->id); ?>">
                                    <?php if($role->all): ?>
                                        <?php echo e(trans('labels.backend.access.users.all_permissions')); ?><br/><br/>
                                    <?php else: ?>
                                        <?php if(count($role->permissions) > 0): ?>
                                            <blockquote class="small"><?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($perm->display_name); ?><br/>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </blockquote>
                                        <?php else: ?>
                                            <?php echo e(trans('labels.backend.access.users.no_permissions')); ?><br/><br/>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div><!--permission list-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <?php echo e(trans('labels.backend.access.users.no_roles')); ?>

                        <?php endif; ?>
                    </div><!--col-lg-3-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('associated-permissions', trans('validation.attributes.backend.access.roles.associated_permissions'), ['class' => 'col-lg-2 control-label'])); ?>

                    <div class="col-lg-10">
                        <div id="available-permissions" class="hidden mt-20" style="width: 700px; height: 200px; overflow-x: hidden; overflow-y: scroll;">
                            <div class="row">
                                <div class="col-xs-12 get-available-permissions">

                                </div><!--col-lg-6-->
                            </div><!--row-->
                        </div><!--available permissions-->
                    </div><!--col-lg-3-->
                </div><!--form control-->

                
                <div class="edit-form-btn">
                    <?php echo e(link_to_route('admin.access.user.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md'])); ?>

                    <?php echo e(Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md'])); ?>

                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-body -->
        </div><!--box-->
    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-scripts'); ?>
    <?php echo e(Html::script('js/backend/access/users/script.js')); ?>

    <script type="text/javascript">
        $(document).ready(function() {

            Backend.Access.init();
            
            /**
             * This function is used to get clicked element role id and return required result
             */
            $('.get-role-for-permissions').click(function () {
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('admin.get.permission')); ?>",
                    dataType: "JSON",
                    data: {role_id: $(this).val()},
                    success: function (response) {
                        var p = response.permissions;
                        var q = response.rolePermissions;
                        var qAll = response.allPermissions;

                        $('.get-available-permissions').html('');
                        if (p.length == 0) {
                            ('.get-available-permissions').html('<p>There are no available permissions.</p>');
                        } else {
                            for (var key in p) {
                                var addChecked = '';
                                if (qAll == 1 && q.length == 0) {
                                    addChecked = 'checked="checked"';
                                } else {
                                    if (typeof q[key] !== "undefined") {
                                        addChecked = 'checked="checked"';
                                    }
                                }
                                $('<label class="control control--checkbox"> <input type="checkbox" name="permissions[' + key + ']" value="' + key + '" id="perm_' + key + '" ' + addChecked + ' /> <label for="perm_' + key + '">' + p[key] + '</label> <div class="control__indicator"></div> </label> <br>').appendTo('.get-available-permissions');
                            }
                        }
                        $('#available-permissions').removeClass('hidden');
                    }
                });
            });

            $("#role-3").click();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>