<div class="form-group">
    <?php echo e(Form::label('name', trans('validation.attributes.backend.access.permissions.name'), ['class' => 'col-lg-2 control-label required'])); ?>


    <div class="col-lg-10">
        <?php echo e(Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.permissions.name'), 'required' => 'required'])); ?>

    </div><!--col-lg-10-->
</div><!--form control-->

<div class="form-group">
    <?php echo e(Form::label('display_name', trans('validation.attributes.backend.access.permissions.display_name'), ['class' => 'col-lg-2 control-label required'])); ?>


    <div class="col-lg-10">
        <?php echo e(Form::text('display_name', null,['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.permissions.display_name'), 'required' => 'required'])); ?>

    </div><!--col-lg-3-->
</div><!--form control-->

<div class="form-group">
    <?php echo e(Form::label('sort', trans('validation.attributes.backend.access.permissions.sort'), ['class' => 'col-lg-2 control-label'])); ?>


    <div class="col-lg-10">
        <?php echo e(Form::text('sort', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.access.permissions.sort')])); ?>

    </div><!--col-lg-10-->
</div><!--form control-->