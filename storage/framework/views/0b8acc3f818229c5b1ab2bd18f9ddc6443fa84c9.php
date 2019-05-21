<!-- Section: inner-header -->

<?php $__env->startSection('content'); ?>
<?php 
   $first_name = isset($user_data->first_name) ? $user_data->first_name:old("first_name");
   $last_name  = isset($user_data->last_name)  ? $user_data->last_name:old("last_name");
   $email = isset($user_data->email)  ? $user_data->email :old("email");
   $country_option = isset($user_data->country) ? $user_data->country :old("country");

   $education = isset($profile_info->education) ? $profile_info->education:old("education");
   $bio =       isset($profile_info->bio) ? $profile_info->bio:old("bio");
   $image =     isset($profile_info->image) ? $profile_info->image:old("image");

  ?>
<input type="text" class="mobileinputshow" placeholder="Enter Search Keyword">
<!-- Start main-content -->
<div class="main-content">
   <!-- Section: inner-header -->
   <section class="editprofiledivmaintop">
      <div class="container">
         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
               <div class="userprofilesetting">
                  <div class="profilename">Setting</div>
                  <div class="settingsprofile">
                     <ul>
                    <li class="active"><a href="<?php echo e('/profile_setting'); ?>">User Profile</a></li>
                        <li><a href="<?php echo e(url('/myInterest')); ?>">My Interests</a></li>
                        <li class="active"><a href="<?php echo e('/account_setting'); ?>">Account Setting</a></li>
                        <li><a href="social-media-network.html">Social Networks</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 profile_submit">
               <div class="profileuserki">
                  <h2><?php echo e($first_name." ".$last_name); ?></h2>
                  <div class="row">
                     <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <h4>Profile Privacy Settings</h4>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <label class="switch pull-right">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                        </label>
                     </div>
                  </div>
               </div>
                 <?php echo e(Form::open(array('url' => '/saveProfileData','id'=>'form','class'=>'reservation-form','files' => true))); ?>

                  <div class="row">
                     <div class="col-sm-6">
                        <label>*First NAME</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-user"></i>
                           <input placeholder="First Name" value="<?php echo e($first_name); ?>" type="text" id="first_name" name="first_name"  class="form-control">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label>* Last NAME</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-user"></i>
                           <input placeholder="Last Name" value="<?php echo e($last_name); ?>" type="text" id="last_name" name="last_name"  class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <label>* Email</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-envelope"></i>
                           <input placeholder="Email" type="text" value="<?php echo e($email); ?>" id="email" name="email" class="form-control" >
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label>* Country </label>
                        <div class="form-group mb-15">
                           <div class="form-group mb-10">
                              <i class="fa fa-globe"></i>
                              <div class="styled-select">
                                 <select name="country" class="form-control" >
                                    <option value="">- Select Country -</option>
                                    <?php 
                                       foreach($countries_list as $country){
                                       ?>
                                    <option <?php echo $country_option==$country->id ? "selected" :""; ?> value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
<!--                   <div class="row">
                     <div class="col-sm-6">
                        <label>* Current PASSWORD</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-lock"></i>
                           <input placeholder="CREATE A PASSWORD" type="text" id="current_password" name="reservation_email" class="form-control" >
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label>* CONFIRM PASSWORD</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-lock"></i>
                           <input placeholder="CONFIRM PASSWORD" type="text" name="confirm_password" class="form-control" >
                        </div>
                     </div>
                  </div> -->
                  <div class="row">
                     <div class="col-sm-12">
                        <label>Education</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-book" aria-hidden="true"></i>
                           <input placeholder="Education" value="<?php echo e($education); ?>" type="text" id="education" name="education" class="form-control" >
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <label>BIO</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-edit"></i>
                           <input placeholder="Bio" value="<?php echo e($bio); ?>"  type="text" id="bio" name="bio" class="form-control" >
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="form-group mb-0 mt-0">
                           <input name="form_botcheck" class="form-control" type="hidden" value="">
                           <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px full" data-loading-text="Please wait...">Save Change</button>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                <?php echo e(Form::close()); ?>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 save_profile_image">
                 <?php echo e(Form::open(array('url' => '/saveProfileImage','id'=>'form','class'=>'reservation-form','files' => true))); ?>

               <div class="profilefeed porfilest">
                  <h3 class="text-center">Profile Photo</h3>
                  <br/>
                  <div class="clearfix"></div>
                  <p class="text-center">Put a face to a name and help people recognize you on Investchain.</p>
                  <br/>
                  <div class="flexdivcenter">
                     <div class="imgicon">
                        <input type="file" id="file1" name="image" accept="image/*" capture style="display:none"/>
                        <img src="<?php echo e($image); ?>" id="upfile1" style="cursor:pointer" />
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <button type="submit" name="submit" class="uploadphotobtn">Upload Photo</button>
               </div>
                <?php echo e(Form::close()); ?>

            </div>
         </div>
      </div>
   </section>
</div>
<!-- end main-content -->
<script type="text/javascript">
   function displayAsImage(file) {
   var imgURL = URL.createObjectURL(file),
      img = document.createElement('img');
   
   img.onload = function() {
    URL.revokeObjectURL(imgURL);
   };
   
   img.src = imgURL;
   document.body.appendChild(img);
   }
   
   $("#upfile1").click(function () {
    $("#file1").trigger('click');
   });
   $("#upfile2").click(function () {
    $("#file2").trigger('click');
   });
   $("#upfile3").click(function () {
    $("#file3").trigger('click');
   });
</script>
<script>
   $(document).ready(function(){
    $(".infobutoongol").click(function(){
      $(".tooglewaladiv").slideToggle();
      })
    
    })
     
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.startup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>