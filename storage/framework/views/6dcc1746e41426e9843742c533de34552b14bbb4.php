<?php $__env->startSection('title', trans('labels.backend.blogtags.management')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1><?php echo e(trans('labels.backend.blogtags.management')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(trans('labels.backend.blogtags.management')); ?></h3>

            <div class="box-tools pull-right">
                <?php echo $__env->make('backend.blogtags.partials.blogtags-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="blogtags-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('labels.backend.blogtags.table.title')); ?></th>
                            <th><?php echo e(trans('labels.backend.blogtags.table.status')); ?></th>
                            <th><?php echo e(trans('labels.backend.blogtags.table.createdby')); ?></th>
                            <th><?php echo e(trans('labels.backend.blogtags.table.createdat')); ?></th>
                            <th><?php echo e(trans('labels.general.actions')); ?></th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                            <th>
                                <?php echo Form::text('title', null, ["class" => "search-input-text form-control", "data-column" => 0, "placeholder" => trans('labels.backend.blogtags.table.title')]); ?>

                                    <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                            </th>
                            <th>
                                <?php echo Form::select('status', [0 => "InActive", 1 => "Active"], null, ["class" => "search-input-select form-control", "data-column" => 1, "placeholder" => trans('labels.backend.blogtags.table.all')]); ?>

                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

    <!--<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(trans('history.backend.recent_history')); ?></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            
        </div><!-- /.box-body -->
    </div><!--box box-info-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('after-scripts'); ?>
    
    <?php echo e(Html::script(mix('js/dataTable.js'))); ?>


    <script>
        $(function() {
            var dataTable = $('#blogtags-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '<?php echo e(route("admin.blogTags.get")); ?>',
                    type: 'post'
                },
                columns: [
                    {data: 'name', name: '<?php echo e(config('module.blog_tags.table')); ?>.name'},
                    {data: 'status', name: '<?php echo e(config('module.blog_tags.table')); ?>.status'},
                    {data: 'created_by', name: '<?php echo e(config('module.blog_tags.table')); ?>.created_by'},
                    {data: 'created_at', name: '<?php echo e(config('module.blog_tags.table')); ?>.created_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[3, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'copyButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }},
                        { extend: 'csv', className: 'csvButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }},
                        { extend: 'excel', className: 'excelButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }},
                        { extend: 'pdf', className: 'pdfButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }},
                        { extend: 'print', className: 'printButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }}
                    ]
                }
            });

            Backend.DataTableSearch.init(dataTable);
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>