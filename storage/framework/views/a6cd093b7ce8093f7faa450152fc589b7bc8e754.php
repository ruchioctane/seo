
        <?php echo e(Form::label('name', trans('validation.attributes.backend.blogcategories.title'), ['class' => 'col-lg-2 control-label required'])); ?>


        <div class="col-lg-10">
            <?php echo e(Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogcategories.title'), 'required' => 'required'])); ?>

        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('status', trans('validation.attributes.backend.blogcategories.is_active'), ['class' => 'col-lg-2 control-label'])); ?>


        <div class="col-lg-10">
            <div class="control-group">
                <label class="control control--checkbox">
                        <?php if(isset($blogcategory->status) && !empty ($blogcategory->status)): ?>
                            <?php echo e(Form::checkbox('status', 1, true)); ?>

                        <?php else: ?>
                            <?php echo e(Form::checkbox('status', 1, false)); ?>

                        <?php endif; ?>
                    <div class="control__indicator"></div>
                </label>
            </div>
        </div><!--col-lg-3-->
    </div>
