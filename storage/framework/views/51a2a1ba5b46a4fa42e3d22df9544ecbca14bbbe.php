<li>
    <i class="fa fa-<?php echo e($historyItem->icon); ?> <?php echo e($historyItem->class); ?>"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> <?php echo e($historyItem->created_at->diffForHumans()); ?></span>

        <h3 class="timeline-header no-border"><strong><?php echo e($historyItem->user->name); ?></strong> <?php echo history()->renderDescription($historyItem->text, $historyItem->assets); ?></h3>
    </div><!--timeline-item-->
</li>