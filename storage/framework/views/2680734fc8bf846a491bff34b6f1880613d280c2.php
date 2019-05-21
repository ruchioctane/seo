<table class="table table-striped table-hover">
    <tr>
        <th><?php echo e(trans('labels.backend.access.users.tabs.content.overview.name')); ?></th>
        <td><?php echo e($user->first_name .' '. $user->last_name); ?></td>
    </tr>

    <tr>
        <th><?php echo e(trans('labels.backend.access.users.tabs.content.overview.email')); ?></th>
        <td><?php echo e($user->email); ?></td>
    </tr>

    <tr>
        <th><?php echo e(trans('labels.backend.access.users.tabs.content.overview.status')); ?></th>
        <td><?php echo $user->status_label; ?></td>
    </tr>

    <tr>
        <th><?php echo e(trans('labels.backend.access.users.tabs.content.overview.confirmed')); ?></th>
        <td><?php echo $user->confirmed_label; ?></td>
    </tr>

    <tr>
        <th><?php echo e(trans('labels.backend.access.users.tabs.content.overview.created_at')); ?></th>
        <td><?php echo e($user->created_at); ?> (<?php echo e($user->created_at->diffForHumans()); ?>)</td>
    </tr>

    <tr>
        <th><?php echo e(trans('labels.backend.access.users.tabs.content.overview.last_updated')); ?></th>
        <td><?php echo e($user->updated_at); ?> (<?php echo e($user->updated_at->diffForHumans()); ?>)</td>
    </tr>

    <?php if($user->trashed()): ?>
        <tr>
            <th><?php echo e(trans('labels.backend.access.users.tabs.content.overview.deleted_at')); ?></th>
            <td><?php echo e($user->deleted_at); ?> (<?php echo e($user->deleted_at->diffForHumans()); ?>)</td>
        </tr>
    <?php endif; ?>
</table>