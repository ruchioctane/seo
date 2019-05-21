<div class="box-body">
    <div class="form-group">
        <?php echo e(Form::label('name', trans('validation.attributes.backend.blogs.title'), ['class' => 'col-lg-2 control-label required'])); ?>


        <div class="col-lg-10">
            <?php echo e(Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.title'), 'required' => 'required'])); ?>

        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('categories', trans('validation.attributes.backend.blogs.category'), ['class' => 'col-lg-2 control-label required'])); ?>


        <div class="col-lg-10">
        <?php if(!empty($selectedCategories)): ?>
            <?php echo e(Form::select('categories[]', $blogCategories, $selectedCategories, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple'])); ?>

        <?php else: ?>
            <?php echo e(Form::select('categories[]', $blogCategories, null, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple'])); ?>

        <?php endif; ?>
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('publish_datetime', trans('validation.attributes.backend.blogs.publish'), ['class' => 'col-lg-2 control-label required'])); ?>


        <div class="col-lg-10">
            <?php if(!empty($blog->publish_datetime)): ?>
                <?php echo e(Form::text('publish_datetime', \Carbon\Carbon::parse($blog->publish_datetime)->format('m/d/Y h:i a'), ['class' => 'form-control datetimepicker1 box-size', 'placeholder' => trans('validation.attributes.backend.blogs.publish'), 'required' => 'required', 'id' => 'datetimepicker1'])); ?>

            <?php else: ?>
                <?php echo e(Form::text('publish_datetime', null, ['class' => 'form-control datetimepicker1 box-size', 'placeholder' => trans('validation.attributes.backend.blogs.publish'), 'required' => 'required', 'id' => 'datetimepicker1'])); ?>

            <?php endif; ?>
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('featured_image', trans('validation.attributes.backend.blogs.image'), ['class' => 'col-lg-2 control-label required'])); ?>

        <?php if(!empty($blog->featured_image)): ?>
            <div class="col-lg-1">
                <img src="<?php echo e(Storage::disk('public')->url('img/blog/' . $blog->featured_image)); ?>" height="80" width="80">
            </div>
            <div class="col-lg-5">
                <div class="custom-file-input">
                    <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                    <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                </div>
            </div>
        <?php else: ?>
            <div class="col-lg-5">
                <div class="custom-file-input">
                        <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                        <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                </div>
            </div>
        <?php endif; ?>
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('content', trans('validation.attributes.backend.blogs.content'), ['class' => 'col-lg-2 control-label required'])); ?>


        <div class="col-lg-10 mce-box">
            <?php echo e(Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.blogs.content')])); ?>

        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('tags', trans('validation.attributes.backend.blogs.tags'), ['class' => 'col-lg-2 control-label required'])); ?>


        <div class="col-lg-10">
        <?php if(!empty($selectedtags)): ?>
           <?php echo e(Form::select('tags[]', $blogTags, $selectedtags, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple'])); ?>

        <?php else: ?>
            <?php echo e(Form::select('tags[]', $blogTags, null, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple'])); ?>

        <?php endif; ?>
        </div><!--col-lg-3-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('meta_title', trans('validation.attributes.backend.blogs.meta-title'), ['class' => 'col-lg-2 control-label'])); ?>


        <div class="col-lg-10">
            <?php echo e(Form::text('meta_title', null, ['class' => 'form-control box-size ', 'placeholder' => trans('validation.attributes.backend.blogs.meta-title')])); ?>

        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('slug', trans('validation.attributes.backend.blogs.slug'), ['class' => 'col-lg-2 control-label'])); ?>


        <div class="col-lg-10">
            <?php echo e(Form::text('slug', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.slug'), 'disabled' => 'disabled'])); ?>

        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('cannonical_link', trans('validation.attributes.backend.blogs.cannonical_link'), ['class' => 'col-lg-2 control-label'])); ?>


        <div class="col-lg-10">
            <?php echo e(Form::text('cannonical_link', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.cannonical_link')])); ?>

        </div><!--col-lg-10-->
    </div><!--form control-->


    <div class="form-group">
        <?php echo e(Form::label('meta_keywords', trans('validation.attributes.backend.blogs.meta_keyword'), ['class' => 'col-lg-2 control-label'])); ?>


        <div class="col-lg-10">
            <?php echo e(Form::text('meta_keywords', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.meta_keyword')])); ?>

        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('meta_description', trans('validation.attributes.backend.blogs.meta_description'), ['class' => 'col-lg-2 control-label'])); ?>


        <div class="col-lg-10 mce-box">
            <?php echo e(Form::textarea('meta_description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.blogs.meta_description')])); ?>

        </div><!--col-lg-3-->
    </div><!--form control-->

    <div class="form-group">
        <?php echo e(Form::label('status', trans('validation.attributes.backend.blogs.status'), ['class' => 'col-lg-2 control-label required'])); ?>


        <div class="col-lg-10">
           <?php echo e(Form::select('status', $status, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.blogs.status'), 'required' => 'required'])); ?>

        </div><!--col-lg-3-->
    </div><!--form control-->
</div>

<?php $__env->startSection("after-scripts"); ?>
    <script type="text/javascript">
        Backend.Blog.init();

        //For Blog datetimepicker for publish_datetime
        $('#datetimepicker1').datetimepicker();

        //changing slug on blur event
        $("#name").on('blur',function()
        {
            url = $(this).val();
            console.log(url);
            if(url !== '')
            {
                $.ajax({
                    type:"POST",
                    url : "<?php echo e(route('admin.generate.slug')); ?>",
                    data : {text:url },
                    success : function(data) {
                      $('#slug').val( "<?php echo e(url('/')); ?>" + '/' + data);
                    }
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>