<?php $__env->startSection('title', trans('labels.backend.access.roles.management') . ' | ' . trans('labels.backend.access.roles.edit')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.access.roles.management')); ?>

        <small><?php echo e(trans('labels.backend.access.roles.edit')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::model($role, ['route' => ['admin.access.role.update', $role], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role'])); ?>


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('labels.backend.access.roles.edit')); ?></h3>

                <div class="box-tools pull-right">
                    <?php echo $__env->make('backend.access.includes.partials.role-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group">
                    <?php echo e(Form::label('name', trans('validation.attributes.backend.access.roles.name'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.roles.name'), 'required' => 'required'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('associated_permissions', trans('validation.attributes.backend.access.roles.associated_permissions'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::select('associated_permissions', ['all' => 'All', 'custom' => 'Custom'], $role->all ? 'all' : 'custom', ['class' => 'form-control select2 box-size'])); ?>


                        <div id="available-permissions" class="hidden mt-20" style="width: 700px; height: 200px; overflow-x: hidden; overflow-y: scroll;">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php if($permissions->count()): ?>
                                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label class="control control--checkbox">
                                            <input type="checkbox" name="permissions[<?php echo e($perm->id); ?>]" value="<?php echo e($perm->id); ?>" id="perm_<?php echo e($perm->id); ?>" <?php echo e(is_array(old('permissions')) ? (in_array($perm->id, old('permissions')) ? 'checked' : '') : (in_array($perm->id, $rolePermissions) ? 'checked' : '')); ?> /> <label for="perm_<?php echo e($perm->id); ?>"><?php echo e($perm->display_name); ?></label>
                                            <div class="control__indicator"></div>
                                            </label>
                                            <br/>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <p>There are no available permissions.</p>
                                    <?php endif; ?>
                                </div><!--col-lg-6-->
                            </div><!--row-->
                        </div><!--available permissions-->
                    </div><!--col-lg-3-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('sort', trans('validation.attributes.backend.access.roles.sort'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('sort', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.roles.sort')])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="edit-form-btn">
                    <?php echo e(link_to_route('admin.access.role.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md'])); ?>

                    <?php echo e(Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md'])); ?>

                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-body -->
        </div><!--box-->
    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-scripts'); ?>
    <?php echo e(Html::script('js/backend/access/roles/script.js')); ?>

    <script type="text/javascript">
        $(document).ready(function() {
            Backend.Access.init();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>