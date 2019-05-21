<?php $__env->startSection('title', trans('labels.backend.pages.management') . ' | ' . trans('labels.backend.pages.edit')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.pages.management')); ?>

        <small><?php echo e(trans('labels.backend.pages.edit')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo e(Form::model($page, ['route' => ['admin.pages.update', $page], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role'])); ?>


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(trans('labels.backend.pages.edit')); ?></h3>

                <div class="box-tools pull-right">
                    <?php echo $__env->make('backend.pages.partials.pages-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group">
                    <?php echo e(Form::label('title', trans('validation.attributes.backend.pages.title'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('title', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.pages.title'), 'required' => 'required'])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('description', trans('validation.attributes.backend.pages.description'), ['class' => 'col-lg-2 control-label required'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::textarea('description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.pages.description')])); ?>

                    </div><!--col-lg-3-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('cannonical_link', trans('validation.attributes.backend.pages.cannonical_link'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('cannonical_link', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.pages.cannonical_link')])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('seo_title', trans('validation.attributes.backend.pages.seo_title'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('seo_title', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.pages.seo_title')])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('seo_keyword', trans('validation.attributes.backend.pages.seo_keyword'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::text('seo_keyword', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.pages.seo_keyword')])); ?>

                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('seo_description', trans('validation.attributes.backend.pages.seo_description'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-10">
                        <?php echo e(Form::textarea('seo_description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.pages.seo_description')])); ?>

                    </div><!--col-lg-3-->
                </div><!--form control-->

                <div class="form-group">
                    <?php echo e(Form::label('status', trans('validation.attributes.backend.pages.is_active'), ['class' => 'col-lg-2 control-label'])); ?>


                    <div class="col-lg-10">
                        <div class="control-group">
                            <label class="control control--checkbox">
                                <?php echo e(Form::checkbox('status', 1, ($page->status == 1) ? true : false )); ?>

                                <div class="control__indicator"></div>
                            </label>
                        </div>
                    </div><!--col-lg-3-->
                </div><!--form control-->
                <div class="edit-form-btn">
                    <?php echo e(link_to_route('admin.pages.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md'])); ?>

                    <?php echo e(Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md'])); ?>

                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-body -->
        </div><!--box-->
    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("after-scripts"); ?>
    <script type="text/javascript">
        Backend.Pages.init();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>