<!--Action Button-->
    <?php if(Active::checkUriPattern('admin/pages')): ?>
        <div class="btn-group">
          <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">Export
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li id="copyButton"><a href="#"><i class="fa fa-clone"></i> Copy</a></li>
            <li id="csvButton"><a href="#"><i class="fa fa-file-text-o"></i> CSV</a></li>
            <li id="excelButton"><a href="#"><i class="fa fa-file-excel-o"></i> Excel</a></li>
            <li id="pdfButton"><a href="#"><i class="fa fa-file-pdf-o"></i> PDF</a></li>
            <li id="printButton"><a href="#"><i class="fa fa-print"></i> Print</a></li>
          </ul>
        </div>
    <?php endif; ?>
<!--Action Button-->
<div class="btn-group">
  <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">Action
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="<?php echo e(route('admin.pages.index')); ?>"><i class="fa fa-list-ul"></i> <?php echo e(trans('menus.backend.pages.all')); ?></a></li>
    <?php if (access()->allow('create-page')): ?>
    <li><a href="<?php echo e(route('admin.pages.create')); ?>"><i class="fa fa-plus"></i> <?php echo e(trans('menus.backend.pages.create')); ?></a></li>
    <?php endif; ?>
  </ul>
</div>
<div class="clearfix"></div>
