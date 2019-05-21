<!-- Section: inner-header -->
@extends('frontend.layouts.startup')
@section('content')
<style>
   .interser .tagslist ul li input[type="checkbox"] {
   visibility: hidden;
   }
   li.sanpandon {
   background: #002060 !important;
   color: #fff;
   }
   .interser .tagslist ul li{ cursor:pointer}
</style>
<!-- Start main-content -->
<div class="main-content">
   <!-- Section: inner-header -->
   <section class="editprofiledivmaintop">
      <div class="container">
         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
               <div class="userprofilesetting">
                  <div class="profilename">Account Setting</div>
                  <div class="settingsprofile">
                     <ul>
                        <li><a href="profile-setting.html">User Profile</a></li>
                        <li class="active"><a href="my-interests.html">My Interests</a></li>
                        <li><a href="social-media-network.html">Social Networks</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 save_options">
               <div class="profileuserki">
                  <h2>Khaled ABOU ZAHR</h2>
               </div>
               {{ Form::open(array('url' => '/saveMyInterestOptions','id'=>'form','class'=>'','files' => true)) }}
               <div class="interser">
                  <div class="tagslist">
                     <h3>Sector</h3>
                     <hr/>
                     <ul>
                        <?php foreach($sectors as $sec){ ?>
                        <li class=" <?php echo in_array($sec->id,$selected_sector) ? "sanpandon" :""; ?>">  
                           <div class="inputs">
                              <div class="area">
                                 <span class="input">
                                 <label for="checkbox-4">{{$sec->name}}</label>
                                 <input class="sector_checkbox" type="checkbox"  <?php echo in_array($sec->id,$selected_sector) ? "checked" :""; ?> name="markets[]" value="{{$sec->id}}" id="checkbox-4">
                                 </span>
                              </div>
                           </div>
                        </li>
                     <?php } ?>
                       
                     </ul>
                  </div>
                  <div class="clearfix"></div>
                  <br/>
                  <div class="tagslist">
                     <h3>Technologies</h3>
                     <hr/>
                     <ul>
                       <?php foreach($technology as $tech){ ?>
                        <li class='<?php echo in_array($tech->id,$selected_technology) ? "sanpandon" :""; ?>'>
                           <div class="inputs">
                              <div class="area">
                                 <span class="input">
                                 <label for="checkbox-4">{{$tech->name}}</label>
                                 <input class="technology_checkbox" type="checkbox" name="technology[]" <?php echo in_array($tech->id,$selected_technology) ? "checked" :""; ?> value="{{$tech->id}}" id="checkbox-4">
                                 </span>
                              </div>
                           </div>
                        </li>
                     <?php } ?>
                     </ul>
                  </div>
                  <div class="clearfix"></div>
                  <br/>
                  <div class="tagslist">
                     <h3>Business Goal</h3>
                     <hr/>
                     <ul>
                        <?php foreach($business_goal as $goal){ ?>
                        <li class="<?php echo in_array($goal->id,$selected_goal) ? "sanpandon" :""; ?>">
                           <div class="inputs">
                              <div class="area">
                                 <span class="input">
                                 <label for="checkbox-4">{{$goal->name}}</label>
                                 <input class="goal_checkbox" type="checkbox" <?php echo in_array($goal->id,$selected_goal) ? "checked" :""; ?> name="business_goal[]" value="{{$goal->id}}" id="checkbox-4">
                                 </span>
                              </div>
                           </div>
                        </li>
                     <?php } ?>
                     </ul>
                  </div>
               </div>
               {{ Form::close() }}
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
               <div class="profilefeed porfilest">
                  <h3 class="text-center">Profile Photo</h3>
                  <br/>
                  <div class="clearfix"></div>
                  <p class="text-center">Put a face to a name and help people recognize you on Investchain.</p>
                  <br/>
                  <div class="flexdivcenter">
                     <div class="imgicon">
                        <input type="file" id="file1" name="image" accept="image/*" capture style="display:none"/>
                        <img src="img/camera.png" id="upfile1" style="cursor:pointer" />
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <button class="uploadphotobtn">Upload Photo</button>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
</div>
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script>
   $(document).ready(function(){
      $(".infobutoongol").click(function(){
         $(".tooglewaladiv").slideToggle();
         })
      
      })
</script>
<script>
   $('.interser .tagslist ul li').click(function ()
   {
       var checkbox = $(this).find('input[type=checkbox]');
      checkbox.prop("checked", !checkbox.prop("checked"));
      $(this).toggleClass("sanpandon")
   });
   
   $('input[type=checkbox]').click(function (e)
   {
        e.stopPropagation();
            return true;
   })
         
</script>
@endsection