<?php $__env->startSection('page-header'); ?>
    <h1>
        <?php echo e(app_name()); ?>

        <small>Notifications</small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Notifications</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <ul class="timeline notification-list">
                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $currentTime     = \carbon\Carbon::now();
                    $notificationTime = $notification->created_at;
                ?> 
                <li>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> <?php echo e($notificationTime->diffForHumans($currentTime)); ?></span>
                        <h3 class="timeline-header">
                            <?php echo e($notification->message); ?>

                        </h3>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div><!-- /.box-body -->
    </div><!--box box-info-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>