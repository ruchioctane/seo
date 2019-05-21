<?php $__env->startSection('content'); ?>
    <?php echo $page->description; ?>                    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>