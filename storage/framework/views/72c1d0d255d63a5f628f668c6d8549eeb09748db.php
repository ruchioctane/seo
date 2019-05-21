<?php $__env->startSection('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.edit')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.access.users.management')); ?>

        <small><?php echo e(trans('labels.backend.access.users.edit')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::model($user, ['route' => ['admin.access.user.update', $user], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH'])); ?>


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('labels.backend.access.users.edit')); ?></h3>

                <div class="box-tools pull-right">
                    <?php echo $__env->make('backend.access.includes.partials.user-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">
                
                <div class="form-group">
                    <?php echo e(Form::label('name', trans('validation.attributes.backend.access.users.firstName'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('first_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.users.firstName'), 'required' => 'required'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                
                <div class="form-group">
                    <?php echo e(Form::label('name', trans('validation.attributes.backend.access.users.lastName'), ['class' => 'col-lg-2 control-label required'])); ?>


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

                
                <?php if($user->id != 1): ?>
                    <div class="form-group">
                        <?php echo e(Form::label('status', trans('validation.attributes.backend.access.users.active'), ['class' => 'col-lg-2 control-label'])); ?>

                        <div class="col-lg-1">
                                <div class="control-group">
                                    <label class="control control--checkbox">
                                         <?php echo e(Form::checkbox('status', '1', $user->status == 1)); ?>

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
                                    <?php echo e(Form::checkbox('confirmed', '1', $user->confirmed == 1)); ?>

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
                                    <input type="radio" value="<?php echo e($role->id); ?>" name="assignees_roles[]" <?php echo e(is_array(old('assignees_roles')) ? (in_array($role->id, old('assignees_roles')) ? 'checked' : '') : (in_array($role->id, $userRoles) ? 'checked' : '')); ?> id="role-<?php echo e($role->id); ?>" class="get-role-for-permissions" />  &nbsp;&nbsp;<?php echo $role->name; ?>

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
                                            <?php echo e(trans('labels.backend.access.users.all_permissions')); ?>

                                        <?php else: ?>
                                            <?php if(count($role->permissions) > 0): ?>
                                                <blockquote class="small">
                                                    <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($perm->display_name); ?>

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
                            <div id="available-permissions" style="width: 700px; height: 200px; overflow-x: hidden; overflow-y: scroll;">
                                <div class="row">
                                    <div class="col-xs-12 get-available-permissions">
                                        <?php if($permissions): ?>

                                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $display_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="control-group">
                                                <label class="control control--checkbox" for="perm_<?php echo e($id); ?>">
                                                    <input type="checkbox" name="permissions[<?php echo e($id); ?>]" value="<?php echo e($id); ?>" id="perm_<?php echo e($id); ?>" <?php echo e(isset($userPermissions) && in_array($id, $userPermissions) ? 'checked' : ''); ?> /> <label for="perm_<?php echo e($id); ?>"><?php echo e($display_name); ?></label>
                                                    <div class="control__indicator"></div>
                                                </label>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <p>There are no available permissions.</p>
                                        <?php endif; ?>
                                    </div><!--col-lg-6-->
                                </div><!--row-->
                            </div><!--available permissions-->
                        </div><!--col-lg-3-->
                    </div><!--form control-->

                <?php endif; ?>
                <div class="edit-form-btn">
                    <?php echo e(link_to_route('admin.access.user.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md'])); ?>

                    <?php echo e(Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md'])); ?>

                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-body -->
        </div><!--box-->

        <?php if($user->id == 1): ?>
            <?php echo e(Form::hidden('status', 1)); ?>

            <?php echo e(Form::hidden('confirmed', 1)); ?>

            <?php echo e(Form::hidden('assignees_roles[]', 1)); ?>

        <?php endif; ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-scripts'); ?>
    <?php echo e(Html::script('js/backend/access/users/script.js')); ?>


    <script type="text/javascript">
        jQuery(document).ready(function() {
            Backend.Access.init();
            /**
             * This function is used to get clicked element role id and return required result
             */
            jQuery('.get-role-for-permissions').click(function () {
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
                                $('<label class="control control--checkbox"> <input type="checkbox" name="permissions[' + key + ']" value="' + key + '" id="perm_' + key + '" ' + addChecked + ' /> <label for="perm_' + key + '">' + p[key] + '</label> <div class="control__indicator"></div> </label><br>').appendTo('.get-available-permissions');
                            }
                        }
                        $('#available-permissions').removeClass('hidden');
                    }
                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>