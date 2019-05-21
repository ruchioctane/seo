@extends('frontend.layouts.app')
@section('content')
      <?php
      $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
       ?>

       <?php 

         $investor_type = isset($investor_details->investor_type) ?$investor_details->investor_type:"";
         $firm_name = isset($investor_details->firm_name) ?$investor_details->firm_name:"";
         $country_id = isset($investor_details->country_id) ?$investor_details->country_id:"";
         $firm_accredition = isset($investor_details->firm_accredition) ?$investor_details->firm_accredition:"";   

       ?>
         <div class="main-content">
            <!-- Section: home -->
            <section id="services" class="bg-silver-light fromstrat">
               <div class="container">
                  <h2 class="text-center font-weight-400">Apply for investor access</h2>
                  <h5 class="text-center">Join the world's largest online investment community.</h5>
                  <div class="clearfix"></div>
                  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 whitebg mt-30">
                     <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                           <div class="stepwizard-step">
                              <a href="/investor" type="button" class="btn btn-circle btn-primary">1</a>                           
                              <p>Accreditation</p>
                           </div>
                           <div class="stepwizard-step">
                              <a href="/experience" type="button" class="btn btn-circle btn-default">2</a>
                              <p>Experience</p>
                           </div>
                           <div class="stepwizard-step">
                              <a href="/details" type="button" class="btn btn-circle btn-default">3</a>
                              <p>Details</p>
                           </div>
                        </div>
                     </div>
                    {{ Form::open(array('method'=>'post','id'=> 'header_info','url' => 'saveAccreditation','files' => true,'class'=>'reservation-form')) }}
                        <div class="row setup-content" id="step-1" <?php if($active_tab=="accred"){echo "style='display:block;'"; } ?> >
                           <div class="col-xs-12">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-sm-3">
                                       <label class="checkcontainer">Corporate Investor  
                                       <input type="radio" value="1"  <?php if($investor_type==1){echo "checked";}else{echo "";} ?> name="investor_type">
                                       <span class="radiobtn"></span>
                                       </label>
                                    </div>
                                    <div class="col-sm-3">
                                       <label class="checkcontainer"> Financial Investor
                                       <input type="radio" value="2"  <?php if($investor_type==2){echo "checked='checked'";}else{echo "";} ?> name="investor_type">
                                       <span class="radiobtn"></span>
                                       </label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="contantaftercheck">
                                       <div class="col-sm-12">
                                          <label>* What is the legal name of your firm/fund?</label>
                                          <div class="form-group mb-10">
                                             <i class="fa fa-briefcase" aria-hidden="true"></i>
                                             <input placeholder="" value="{{$firm_name}}" type="text" id="firm_name" name="firm_name"  class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-sm-12">
                                          <label>* Where are you based?</label>
                                          <div class="form-group mb-10">
                                             <i class="fa fa-globe"></i>
                                             <div class="styled-select">
                                                <select name="country_id" class="form-control">
                                                   <option value="">- Choose Country -</option>
                                                   <?php foreach($countries as $key=>$country_list){ ?>
                                                      <option <?php if($key==$country_id){echo 'selected';}else{echo '';}?> value="{{$key}}">{{$country_list}}</option>

                                                   <?php } ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="col-lg-12">
                                          <p>How is your firm/fund accredited?</p>
                                       </div>
                                       <br/>
                                       <div class="col-sm-12">
                                          <label class="checkcontainer"> My firm/fund has $5-25M in assets
                                          <input type="radio" <?php if($firm_accredition==1){echo "checked='checked'";}else{echo '';} ?> value="1" name="firm_accredition">
                                          <span class="radiobtn"></span>
                                          </label>  
                                       </div>
                                       <div class="col-sm-12">
                                          <label class="checkcontainer"> My firm/fund has over $25M in assets
                                          <input type="radio" value="2" <?php if($firm_accredition==2){echo "checked='checked'";}else{echo '';} ?>  name="firm_accredition">
                                          <span class="radiobtn"></span>
                                          </label>  
                                       </div>
                                       <div class="col-sm-12">
                                          <label class="checkcontainer">  All owners of my firm/fund are individually accredited
                                          <input type="radio" value="3" <?php if($firm_accredition==3){echo "checked='checked'";}else{echo '';} ?> name="firm_accredition">
                                          <span class="radiobtn"></span>
                                          </label>  
                                       </div>
                                       <div class="col-sm-12">
                                          <label class="checkcontainer">All owners of my firm/fund are individually qualified purchasers
                                          <input type="radio" value="4" <?php if($firm_accredition==4){echo "checked='checked'";}else{echo '';} ?> name="firm_accredition">
                                          <span class="radiobtn"></span>
                                          </label>  
                                       </div>
                                       <div class="col-sm-12">
                                          <label class="checkcontainer">None of the above
                                          <input type="radio" value="0" <?php if($firm_accredition==0){echo "checked='checked'";}else{echo '';} ?> name="firm_accredition">
                                          <span class="radiobtn"></span>
                                          </label>  
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-colored btn-theme-colored btn-lg pull-right" type="submit" >Next</button>
                              </div>
                           </div>
                        </div>

                          {{ Form::close() }}     
                  </div>
               </div>
            </section>
         </div>


<!--       <script>
         /*auto complete suggestion*/
         $(function(){
            var startup = ["Baseball","Tennis","Golf","Cricket","Football","Hockey","Badminton","Volleyball","Boxing","Kabaddi","Chess","Long Jump","High Jump","Racing","Handball","Swimming","Wrestling"];
            $("#autocomplete").autocomplete({
              source: startup
            });
         });

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
      </script> -->
@endsection

