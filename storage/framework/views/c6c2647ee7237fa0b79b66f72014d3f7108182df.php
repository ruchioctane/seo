<ul class="timeline">
    <?php echo $__env->renderEach('backend.history.partials.item', $history, 'historyItem'); ?>
</ul>

<?php if($paginate): ?>
    <div class="pull-right">
        <?php echo e($history->links()); ?>

    </div><!--pull-right-->

    <div class="clearfix"></div>
<?php endif; ?>