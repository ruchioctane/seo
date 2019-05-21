<!-- Section: inner-header -->
@extends('frontend.layouts.startup')
@section('content')

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
                        <li class="active"><a href="{{'/profile_setting'}}">User Profile</a></li>
                        <li><a href="{{url('/myInterest')}}">My Interests</a></li>
                        <li class="active"><a href="{{'/account_setting'}}">Account Setting</a></li>
                        <li><a href="social-media-network.html">Social Networks</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 update_password">
               <div class="profileuserki">
                  <h2></h2>
                  <div class="row">
                     <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <h4>Account Settings</h4>
                     </div>
                    <!--  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <label class="switch pull-right">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                        </label>
                     </div> -->
                  </div>
               </div>
                 {{ Form::open(array('url' => '/changePassword','id'=>'form','class'=>'reservation-form','files' => true)) }}
         
               
                  <div class="row">

                      <div class="col-sm-12">
                        <label>Email</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-book" aria-hidden="true"></i>
                           <input placeholder="email" type="text" id="email" name="email" class="form-control" >
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label>* PASSWORD</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-lock"></i>
                           <input placeholder="CREATE A PASSWORD" type="password" id="current_password" name="password" class="form-control" >
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label>* CONFIRM PASSWORD</label>
                        <div class="form-group mb-15">
                           <i class="fa fa-lock"></i>
                           <input placeholder="CONFIRM PASSWORD" type="password" name="password_confirmation" class="form-control" >
                        </div>
                     </div>
                  </div>
                  
                <div class="row">
                  <div class="col-sm-12">
                     <div class="form-group mb-0 mt-0">
                        <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px full" data-loading-text="Please wait...">Save Change</button>
                     </div>
                  </div>
               </div>
                  <div class="clearfix"></div>
      
                {{ Form::close() }}
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 save_profile_image">
                 {{ Form::open(array('url' => '/saveProfileImage','id'=>'form','class'=>'reservation-form','files' => true)) }}
               <div class="profilefeed porfilest">
                  <h3 class="text-center">Profile Photo</h3>
                  <br/>
                  <div class="clearfix"></div>
                  <p class="text-center">Put a face to a name and help people recognize you on Investchain.</p>
                  <br/>
                  <div class="flexdivcenter">
                     <div class="imgicon">
                        <input type="file" id="file1" name="image" accept="image/*" capture style="display:none"/>
                        <img src="" id="upfile1" style="cursor:pointer" />
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <button type="submit" name="submit" class="uploadphotobtn">Upload Photo</button>
               </div>
                {{ Form::close() }}
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
@endsection