<!-- Section: inner-header -->

<?php $__env->startSection('content'); ?>

<?php 
$company_name =  (isset($company_detail->company_name) && !empty($company_detail->company_name) ) ? $company_detail->company_name :old("company_name");
$company_website =  (isset($company_detail->company_website) && !empty($company_detail->company_website) ) ? $company_detail->company_website :old("company_website");
$location =  (isset($company_detail->location) && !empty($company_detail->location) ) ? $company_detail->location :old("location");
$country =  (isset($company_detail->country) && !empty($company_detail->country) ) ? $company_detail->country :old("country");
$mobile =  (isset($company_detail->mobile) && !empty($company_detail->mobile) ) ? $company_detail->mobile :old("mobile");

$markets =  (isset($company_detail->markets) && !empty($company_detail->markets) ) ? $company_detail->markets :old("markets");
$technology =  (isset($company_detail->technology) && !empty($company_detail->technology) ) ? $company_detail->technology :old("technology");
$business_goal =  (isset($company_detail->business_goal) && !empty($company_detail->business_goal) ) ? $company_detail->business_goal :old("business_goal");
$startup = array();
if(isset($startupDetail) && !empty($startupDetail)){

   foreach($startupDetail as $start){
      $startup[] = $start->company_name;
   } 
}


?>
   


<input type="text" class="mobileinputshow" placeholder="Enter Search Keyword">
<!-- Start main-content -->
<div class="main-content">
   <!-- Section: home -->
   <section id="services" class="bg-silver-light fromstrat">
      <div class="container">
         <h2 class="text-center font-weight-400">Register Your Startup</h2>
         <h5 class="text-center">Join the world's largest online investment community.</h5>
         <div class="clearfix"></div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 whitebg mt-30">
            <div class="stepwizard">
               <div class="stepwizard-row setup-panel">
                  <div class="stepwizard-step">
                     <a href="#step-1" type="button" class="btn <?php echo $step==1 ? 'btn-primary' :"btn-default"; ?> btn-circle">1</a>
                     <p>Company Details</p>
                  </div>
                  <div class="stepwizard-step">
                     <a href="#step-2" type="button" class="btn <?php echo $step==2 ? 'btn-primary' :"btn-default"; ?> btn-circle" disabled="disabled">2</a>
                     <p>Activity</p>
                  </div>
                  <div class="stepwizard-step">
                     <a href="#step-3" type="button" class="btn <?php echo $step==3 ? 'btn-primary' :"btn-default"; ?> btn-circle" disabled="disabled">3</a>
                     <p>Fundraising</p>
                  </div>
               </div>
            </div>
            <?php echo e(Form::open(array('method'=>'post','id'=> 'startup_step2','class'=>'startupform','url' => 'saveCompanyInfo','files' => true,'class'=>'reservation-form'))); ?>

            <div class="row setup-content" id="step-1" <?php echo $step==1 ? 'style="display:block"' :'style="display:none"'; ?> >
               <div class="contantaftercheck newstart">
                  <div class="col-lg-12">
                     <h3 class="smfont">Company Details</h3>
                  </div>
                  <div class="devidedrow" id="startup_name">
                     <div   class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label for="tags" class="mifont">Startup Name: </label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-building" aria-hidden="true"></i>
                           <input placeholder="Startup Name" value="<?php echo e($company_name); ?>"  type="text" id="tags" name="company_name"  class="form-control">
                           <input type="hidden" value="0" name="status">
                        </div>
                     </div>
                  </div>
                  <div class="devidedrow" id="address">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Address</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-map-marker" aria-hidden="true"></i>
                           <input placeholder="Add Location" type="text" value="<?php echo e($location); ?>"  id="location" name="location"  class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="devidedrow" id="country">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Country</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-user"></i>
                           <div class="styled-select">
                              <select name="country" class="form-control" >
                                 <option value="">--Select Country -- </option>
                                 <?php
                                 if (isset($countries_list) && !empty($countries_list)){
                                 foreach($countries_list as $country_list){
                                  ?>
                                 <option <?php echo old('country') == $country_list->id ? "selected":""; ?> value="<?php echo e($country_list->id); ?>">
                                    <?php echo e($country_list->name); ?>

                                 </option>
                                 <?php }
                                    }
                                  ?>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>



                  <div class="devidedrow" id="mobile">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Telephone</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-phone" aria-hidden="true"></i>
                           <input placeholder="Telephone" type="text" value="<?php echo e($mobile); ?>" id="mobile" name="mobile"  class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="devidedrow" id="website">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Company Website</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-globe" aria-hidden="true"></i>
                           <input placeholder="Add Company Website" value="<?php echo e($company_website); ?>"  type="text" id="company_website" name="company_website"  class="form-control">
                        </div>
                     </div>
                  </div>
                                         <!-- section for choosing the role if founder company and member is created  -->
                  <div class="devidedrow" id="sub_role" style="display: none;">
                      <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Role</label>
                     </div>
                    <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-user"></i>
                           <div class="styled-select">
                              <select  name="sub_role"  class="form-control" >
                                 <option value="">--Select Role -- </option>
                              
                                 <option value="5">Co-Founder</option>
                                 <option value="6">Partner</option>
                                  <option value="7">Member</option>  
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                     <!-- @end  of section -->
                  <div class="clearfix"></div>
               </div>
             <div class="clearfix"></div>
               <button class="btn btn-colored btn-theme-colored  btn-lg pull-right" name="company_detail_submit" value="submit"  type="submit" >Next</button>
            </div>
            <?php echo e(Form::close()); ?>   
            <?php echo e(Form::open(array('method'=>'post','id'=> 'header_info','class'=>'startupform','url' => 'saveCompanyInfo','files' => true,'class'=>'reservation-form'))); ?>

            <div class="row setup-content" id="step-2"  <?php echo $step==2 ? 'style="display:block"' :'style="display:none"'; ?>>
               <div class="contantaftercheck newstart">
                  <div class="col-lg-12">
                     <h3 class="smfont">Activity</h3>
                  </div>
                  <div class="devidedrow">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Select Sector</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-user"></i>
                           <div class="styled-select">
                              <select name="markets[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                 <option value="">- Please Select  -</option>
                                 <?php 
                                 if(isset($sector) && !empty($sector)){
                                 foreach($sector as $sec){ ?>
                                    <option  value="<?php echo e($sec->id); ?>" <?php echo $sec->id==$markets ? 'selected' :""; ?> ><?php echo e($sec->name); ?></option>         
                                <?php } }?> 
                               
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="devidedrow">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Select Technology</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-user"></i>
                           <div class="styled-select">
                              <select name="technology[]" class="form-control js-example-basic-multiple" multiple="multiple">
                                 <option value="">- Please Select  -</option>
                                 <?php
                                       if(isset($technologies) && !empty($technologies)){
                                  foreach($technologies as $tech){ ?>
                                    <option value="<?php echo e($tech->id); ?>" <?php echo $tech->id==$technology ? 'selected' :""; ?> ><?php echo e($tech->name); ?></option>         
                                <?php 
                                 }
                             }?> 
                               
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="devidedrow">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Select Business Goal</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-user"></i>
                           <div class="styled-select">
                              <select name="business_goal[]" class="form-control js-example-basic-multiple" multiple="multiple" >
                                 <option value="">- Please Select  -</option>
                                  <?php
                                    if(isset($businessGoal) && !empty($businessGoal)){
                                   foreach($businessGoal as $goal){ ?>
                                    <option value="<?php echo e($goal->id); ?>" <?php echo $goal->id==$business_goal ? 'selected' :""; ?> >
                                       <?php echo e($goal->name); ?>

                                    </option>         
                                    <?php  } } ?>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="clearfix"></div>
               <button class="btn btn-colored btn-theme-colored  btn-lg pull-right" name="submit_activity" value="submit"  type="submit" >Next</button> 
            </div>
            <?php echo e(Form::close()); ?>   
            <?php echo e(Form::open(array('method'=>'post','id'=> 'header_info','class'=>'startupform','url' => 'saveCompanyInfo','files' => true,'class'=>'reservation-form'))); ?>

            <div class="row setup-content" id="step-3" <?php echo $step==3 ? 'style="display:block"' :'style="display:none"'; ?>>
               <div class="contantaftercheck newstart">
                  <div class="col-lg-12">
                     <h3 class="smfont">Fundraising</h3>
                  </div>
                  <div class="devidedrow">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Select Stage</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-user"></i>
                           <div class="styled-select">
                              <select name="round_type" class="form-control" >
                                 <option>- Please Select  -</option>
                                 <?php
                                 if(isset($round_type) && !empty($round_type)) {
                                     foreach($round_type as $round){
                                       ?>
                                          <option value="<?php echo e($round->id); ?>" ><?php echo e($round->name); ?></option> 
                                    <?php
                                       }  
                                    }  
                                  ?>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="devidedrow">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Amount</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-dollar" aria-hidden="true"></i>
                           <input placeholder="Add Amount" type="text" id="amount" name="amount"  class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="devidedrow">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Closing Date</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-calendar" aria-hidden="true"></i>
                           <input placeholder="Closing Date" type="text" id="closing_date" name="closing_date"  class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="devidedrow">
                     <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                        <label class="mifont">Link to deck</label>
                     </div>
                     <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                        <div class="form-group mb-10">
                           <i class="fa fa-link" aria-hidden="true"></i>
                           <input placeholder="Link to deck URL" type="text" id="deck_url" name="deck_url"  class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="clearfix"></div>
               <button class="btn btn-success btn-lg pull-right" type="submit" name="submit_fundraising" value="submit" onClick="newDoc()">Finish!</button>
            </div>
            <?php echo e(Form::close()); ?>   
         </div>
      </div>
   </section>
</div>
<!-- end main-content -->
<script>
   $( document ).ready(function() {    
   $('.mobileshow').click(function(){
     $(".mobileinputshow").toggle(00)});  
   }); 
</script>
<script>
   $(document).ready(function () {
   
       var navListItems = $('div.setup-panel div a'),
               allWells = $('.setup-content'),
               allNextBtn = $('.nextBtn');
   
       allWells.hide();
   
       navListItems.click(function (e) {
           e.preventDefault();
           var $target = $($(this).attr('href')),
                   $item = $(this);
   
           if (!$item.hasClass('disabled')) {
               navListItems.removeClass('btn-primary').addClass('btn-default');
               $item.addClass('btn-primary');
               allWells.hide();
               $target.show();
               $target.find('input:eq(0)').focus();
           }
       });
   
       allNextBtn.click(function(){
           var curStep = $(this).closest(".setup-content"),
               curStepBtn = curStep.attr("id"),
               nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
               curInputs = curStep.find("input[type='text'],input[type='url']"),
               isValid = true;
   
           $(".form-group").removeClass("has-error");
           for(var i=0; i<curInputs.length; i++){
               if (!curInputs[i].validity.valid){
                   isValid = false;
                   $(curInputs[i]).closest(".form-group").addClass("has-error");
               }
           }
   
           if (isValid)
               nextStepWizard.removeAttr('disabled').trigger('click');
       });
   
       $('div.setup-panel div a.btn-primary').trigger('click');
   });
</script>
<script>
   function newDoc() {
     window.location.assign("onboard.html")
   }
   
   
   function bs_input_file() {
     $(".input-file").before(
       function() {
         if ( ! $(this).prev().hasClass('input-ghost') ) {
           var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
           element.attr("name",$(this).attr("name"));
           element.change(function(){
             element.next(element).find('input').val((element.val()).split('\\').pop());
           });
           $(this).find("button.btn-choose").click(function(){
             element.click();
           });
           $(this).find("button.btn-reset").click(function(){
             element.val(null);
             $(this).parents(".input-file").find('input').val('');
           });
           $(this).find('input').css("cursor","pointer");
           $(this).find('input').mousedown(function() {
             $(this).parents('.input-file').prev().click();
             return false;
           });
           return element;
         }
       }
     );
   }
   $(function() {
     bs_input_file();
   });
</script>


<script>
 $(function() {
var availableTags = <?php echo json_encode($startup); ?>; 
$( "#tags" ).autocomplete({
source: availableTags,
select: function (event, ui) {
   $("#sub_role").show();

   /*to hide*/
   $("#startup_name").hide();
   $("#address").hide();
   $("#country").hide();
   $("#mobile").hide();
   $("#website").hide();

    $('#startup_step2').attr('action', 'http://investor.dnddemo.com/saveCompanyInfo');

}

   });
});
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>