@extends('frontend.layouts.app')
@section('content')
       <div class="startupnew">
        <div class="mid">Company Registration</div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-0">
            <div class="contantaftercheck">
              <div class="col-lg-12">
                <h3 class="smfont">Company Info</h3>
              </div>
              {{ Form::open(array('method'=>'post','id'=> 'header_info','class'=>'startupform','url' => 'saveCompanyInfo','files' => true,'class'=>'reservation-form')) }}
                <div class="devidedrow">
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <label class="mifont">Company Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="form-group mb-10">
                      <i class="fa fa-building" aria-hidden="true"></i>
                      <input placeholder="Add Company Name" type="text" id="company_name" name="company_name" required="" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="devidedrow">
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <label class="mifont">Company Website</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="form-group mb-10">
                      <i class="fa fa-globe" aria-hidden="true"></i>
                      <input placeholder="Add Company Website" type="text" id="company_website" name="company_website" required="" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="devidedrow">
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <label class="mifont">Location</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="form-group mb-10">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <input placeholder="Add Location" type="text" id="location" name="location" required="" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="devidedrow">
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <label class="mifont">Number of employees</label>
                  </div>
                  <div class="fcol-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="form-group mb-10">
                      <i class="fa fa-user"></i>
                      <div class="styled-select">
                        <select name="number_of_employees" class="form-control" required="">
                          <option value="">- Please Select  -</option>
                          <option value="1-10">1-10</option>
                          <option value="11-50">11-50</option>
                          <option value="51-200">51-200</option>
                          <option value="201-500">201-500</option>
                          <option value="501-1000">501-1000</option>
                          <option value="1001-5000">1001-5000</option>
                          <option value="5000+">5000+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="linedevided"></div>
                <div class="devidedrow">
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <label class="mifont"> Markets</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="form-group mb-10 autocomplete">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      <input placeholder="Add Market" type="text" id="markets" name="markets" required="" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="devidedrow">
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <label class="mifont"> High-Concept Pitch</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="form-group mb-10">
                      <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                      <input placeholder="Add Another School" type="text" id="high_concept_pitch" name="high_concept_pitch" required="" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="devidedrow">
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <label class="mifont">Product</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="form-group mb-10">
                      <i class="fa fa-cube" aria-hidden="true"></i>
                      <textarea name="product" required="required"></textarea>
                      <small>0 / 1000}</small>
                    </div>
                  </div>
                </div>
                <div class="devidedrow">
                  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                    <label class="mifont">Logo</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                    <div class="form-group mb-10">
                      <div class="file-upload">
                        <div class="file-select">
                          <div class="file-select-button" id="fileName">Choose File</div>
                          <div class="file-select-name" id="noFile">No file chosen...</div>
                          <input type="file" name="logo" id="logo">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-0">
              <div class="contantaftercheck">
                <div class="col-lg-12">
                  <h3 class="smfont">Company Info</h3>
                </div>
                <div class="clearfix"></div>
                <div class="linedevided"></div>
                <div class="devidedrow">
                  <div class="col-lg-12">
                    <div class="mt-10 mb-10 terms">
                      <label class="checkcontainer mb-0">Investing
                      <input type="checkbox" name="investing" value="1" id="investing" required>
                      <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="intro_text">
                      A new job matching service. No recruiters. High-quality talent. Fun.
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="linedevided"></div>
                <div class="devidedrow">
                  <div class="col-lg-12">
                    <div class="mt-10 mb-10 terms">
                      <label class="checkcontainer mb-0">Meeting investors
                      <input type="checkbox" name="meeting_investors" value="1" id="meeting_investors">
                      <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-0">
              <div class="contantaftercheck">
                <div class="col-lg-12">
                  <h3 class="smfont">Terms of Service</h3>
                </div>
                <div class="devidedrow">
                  <div class="col-lg-12">
                    <div class="mt-10 mb-10 terms">
                      <label class="checkcontainer mb-0">I have read and accepted the <a href="#">Terms of Service</a>
                      <input type="checkbox">
                      <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <button class="btn btn-colored btn-theme-colored nextBtn btn-lg marginauto mb-20" type="submit">Next</button>
              </div>
            </div>
          </div>
          {{ Form::close() }}   
        </div>
      </div>

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
      </script>
@endsection

