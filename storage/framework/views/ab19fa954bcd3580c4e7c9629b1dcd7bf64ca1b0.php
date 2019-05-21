<?php $__env->startSection('title', trans('labels.backend.access.permissions.management')); ?>

<?php $__env->startSection('page-header'); ?>
    <h1><?php echo e(trans('labels.backend.access.permissions.management')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo e(trans('labels.backend.access.permissions.management')); ?></h3>

            <div class="box-tools pull-right">
                <?php echo $__env->make('backend.access.includes.partials.permission-header-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="permissions-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo e(trans('labels.backend.access.permissions.table.permission')); ?></th>
                            <th><?php echo e(trans('labels.backend.access.permissions.table.display_name')); ?></th>
                            <th><?php echo e(trans('labels.backend.access.permissions.table.sort')); ?></th>
                            <th><?php echo e(trans('labels.general.actions')); ?></th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                            <th>
                                <?php echo Form::text('permission', null, ["class" => "search-input-text form-control", "data-column" => 0, "placeholder" => trans('labels.backend.access.permissions.table.permission')]); ?>

                                    <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                            </th>
                            <th>
                                <?php echo Form::text('display_name', null, ["class" => "search-input-text form-control", "data-column" => 1, "placeholder" => trans('labels.backend.access.permissions.table.display_name')]); ?>

                                    <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                            </th>
                            <th>
                            <?php echo Form::text('sort', null, ["class" => "search-input-text form-control", "data-column" => 2, "placeholder" => trans('labels.backend.access.roles.table.sort')]); ?>

                                <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                            </th>
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
            var dataTable = $('#permissions-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '<?php echo e(route("admin.access.permission.get")); ?>',
                    type: 'post'
                },
                columns: [
                    {data: 'name', name: '<?php echo e(config('access.permissions_table')); ?>.name'},
                    {data: 'display_name', name: '<?php echo e(config('access.permissions_table')); ?>.display_name', sortable: false},
                    {data: 'sort', name: '<?php echo e(config('access.permissions_table')); ?>.sort'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[3, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'copyButton',  exportOptions: {columns: [ 0, 1, 2 ]  }},
                        { extend: 'csv', className: 'csvButton',  exportOptions: {columns: [ 0, 1, 2 ]  }},
                        { extend: 'excel', className: 'excelButton',  exportOptions: {columns: [ 0, 1, 2 ]  }},
                        { extend: 'pdf', className: 'pdfButton',  exportOptions: {columns: [ 0, 1, 2 ]  }},
                        { extend: 'print', className: 'printButton',  exportOptions: {columns: [ 0, 1, 2 ]  }}
                    ]
                }
            });

            Backend.DataTableSearch.init(dataTable);


        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>