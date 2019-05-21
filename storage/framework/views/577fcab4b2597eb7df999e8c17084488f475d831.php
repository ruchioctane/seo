<?php $__env->startSection('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.view')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(trans('labels.backend.access.users.management')); ?>

        <small><?php echo e(trans('labels.backend.access.users.view')); ?></small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(trans('labels.backend.access.users.view')); ?></h3>

            <div class="box-tools pull-right">
                <?php echo $__env->make('backend.access.includes.partials.user-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab"><?php echo e(trans('labels.backend.access.users.tabs.titles.overview')); ?></a>
                    </li>

                    <li role="presentation">
                        <a href="#history" aria-controls="history" role="tab" data-toggle="tab"><?php echo e(trans('labels.backend.access.users.tabs.titles.history')); ?></a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane mt-30 active" id="overview">
                        <?php echo $__env->make('backend.access.show.tabs.overview', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div><!--tab overview profile-->

                    <div role="tabpanel" class="tab-pane mt-30" id="history">
                        <?php echo $__env->make('backend.access.show.tabs.history', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div><!--tab panel history-->

                </div><!--tab content-->

            </div><!--tab panel-->

        </div><!-- /.box-body -->
    </div><!--box-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>