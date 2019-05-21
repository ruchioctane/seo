@extends('frontend.layouts.startup')
@section('content')
<?php 
     $currency  = isset($funding_details->currency) ? $funding_details->currency :"";
     $raising_amount = isset($funding_details->raising_amount)  ? $funding_details->raising_amount :"0";
     $equity_basis = isset($funding_details->equity_basis) ? $funding_details->equity_basis :"0";
     $prev_raised_amount = isset($funding_details->prev_raised_amount) ? $funding_details->prev_raised_amount:"0";
     $other_deal_terms = isset($funding_details->other_deal_terms) ? $funding_details->other_deal_terms :"";

   ?>
<style>
   .addhidden {
   display: block;
   clear: both;
   }
   .hidedataopen.font-12 {
   padding: 10px 0px;
   text-align: center;
   background: #f1f1f1;
   margin: 10px 0px;
   }
   .addmoredatabnt {
   position: relative;
   margin: 8px 0px;
   font-size: 12px;
   }
   .addmoredatabnt a span {
   background: #002060;
   height: 19px;
   width: 19px;
   display: inline;
   float: left;
   text-align: center;
   line-height: 16px;
   font-size: 14px;
   margin-right: 10px;
   color: #fff;
   border-radius: 50%;
   }
   span.editbtnright{ margin-bottom:10px}
   .roundbutnpuspop {
   height: 15px;
   width: 15px;
   background: #f00;
   text-align: center;
   color: #fff;
   line-height: 13px;
   margin: 10px 0px;
   border-radius: 50%;
   }
   textarea.maexdata {
   width: 100%;
   }
   .boxammoutndiv {
    padding: 8px;
    background: #f1f1f1;
}

.boxammoutndiv h5, .boxammoutndiv h3 {
    margin: 3px;
    padding: 2px;
}
</style>
<!-- Start main-content -->
<input type="text" class="mobileinputshow" placeholder="Enter Search Keyword">
<!-- Start main-content -->
<div class="startupnew">
   <div class="mid">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-0">
               <div class="row">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                     <div class="profilephoto">
                        <img src="https://brandmark.io/logo-rank/random/beats.png" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-left">
                     <div class="tableji">
                        <div class="middelji">
                           <div class="profilenamesat">Employee</div>
                           <div class="profilenameabt">Lorem Ipsum Dolor Shit</div>
                           <div class="profilenamecntry">India</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 unfollowbtn">
                     <button class="unfollow" value="Unfollow">Unfollow</button>
                     <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown">
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                           <li><a href="#">Profile Edit</a></li>
                           <li><a href="#">Recruit for eurabi</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-0">
         <div class="col-lg-12 col-md-12  visible-lg visible-md hidden-sm hidden-xs">
            <ul id="myTab" class="nav nav-tabs boot-tabs">
               <li class="active"><a href="#COMPANY" data-toggle="tab">COMPANY </a></li>
               <li><a href="#PEOPLE" data-toggle="tab">PEOPLE</a></li>
               <li><a href="#ACTIVITY" data-toggle="tab">ACTIVITY</a></li>
               <li><a href="#VISITORS" data-toggle="tab">VISITORS</a></li>
               <li><a href="#SETTINGS" data-toggle="tab">SETTINGS</a></li>
               <li><a href="#FOLLOWERS" data-toggle="tab">FOLLOWERS<sup>1</sup></a></li>
            </ul>
         </div>
         <div class="col-lg-sm col-xs-12 visible-xs visible-sm hidden-lg hidden-md">
            <div class="intro_text">
               <div class="form-group mb-0">
                  <i class="fa fa-building" aria-hidden="true"></i>
                  <div class="styled-select">
                     <select name="car_select" id=-"dynamic_select" class="form-control" required="">
                        <option value="">- Please Select  -</option>
                        <option value="#PEOPLE">PEOPLE</option>
                        <option value="#ACTIVITY">ACTIVITY</option>
                        <option value="#VISITORS">VISITORS</option>
                        <option value="#SETTINGS">SETTINGS</option>
                        <option value="#FOLLOWERS">FOLLOWERS</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>
         <div class="contantafterchecktabs">
            <div id="myTabContent" class="tab-content">
               <div class="tab-pane fade in active" id="COMPANY">
                  <div class="row">
                     <div class="col-lg-9">
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">FUNDRAISING INFO</h3>
                           </div>
                           <div class="contantaftercheck1 p-0">
                              <div class="maintopview">
                                 <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-lock"></i> Hidden
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                       <li><a href="#">All investors can view
                                          <span class="blockdata font-11">All investors can see your fundraising info.</span></a>
                                       </li>
                                       <li><a href="#">Recruit for eurabi</a></li>
                                    </ul>
                                 </div>
                                 <p>Only tagged investors or incubators you applied to can see your info.</p>
                              </div>
                              <div class="ionnsection">
                                 <div class="col-lg-12">
                                    <div class="rounds">DEAL TERMS</div>

                                    <?php if(isset($funding_details) && !empty($funding_details)){ ?>
                                    <div class="row">
                                       <div class="col-lg-4">
                                          <div class="boxammoutndiv">
                                        <h5>Raised as equity</h5>
                                        <h3>€{{$raising_amount}}</h3>
                                       </div>
                                    </div>
                                        <div class="col-lg-4">
                                          <div class="boxammoutndiv">
                                          <h5>Pre-Money Valuation</h5>
                                        <h3>€ 0</h3>
                                     </div>
                                       </div>
                                        <div class="col-lg-4">
                                          <div class="boxammoutndiv">

                                        <h5>Previous Funding</h5>
                                        <h3>€{{$prev_raised_amount}}</h3>
                                       </div>
                                     </div>
                                    </div>
                                 <?php } ?>
                                    <button id="_specify_round" class="add1">Specify round details</button>
                                    <div id="_invest_round" class="hiddendata" style="display:none" class="">
                                    <div class="save_specify_round">

                                      {{ Form::open(array('url' => '/saveSpecifyRound','id'=>'form','class'=>'startupform','files' => true)) }}
                                       <div class="col-lg-12">
                                          DEAL TERMS<a href="#" class="pull-right"><span id="_cancel_round" class="clcikc">Cancel</span> 
                                             <button type="submit"  name="submit" class="editbtnright clcikc">Save</button></a>
                                       </div>
                                       <div class="clearfix"></div>
                                          <div class="devidedrow">
                                             <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label class="mifont">Currency</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="form-group mb-10">
                                                   <i class="fa fa-dollar" aria-hidden="true"></i>
                                                   <input placeholder="Currency" type="text" id="reservation_name" name="funding_round[currency]" required="" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="devidedrow">
                                             <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label class="mifont">Raising</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="form-group mb-10">
                                                   <i class="fa fa-globe" aria-hidden="true"></i>
                                                   <input placeholder="Raising" type="text" id="reservation_name" name="funding_round[raising_amount]" required="" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="devidedrow">
                                             <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label class="mifont">Equity Basis</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="form-group mb-10">
                                                   <i class="fa fa-user"></i>
                                                   <div class="styled-select">
                                                      <select name="funding_round[equity_basis]" class="form-control" required="">
                                                         <option selected="selected" value="equity">Equity</option>
                                                         <option value="debt">Convertible Debt</option>
                                                         <option value="safe">SAFE</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="devidedrow">
                                             <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label class="mifont"> Previous Funding</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="form-group mb-10">
                                                   <i class="fa fa-dollar" aria-hidden="true"></i>
                                                   <input placeholder="Previous Funding" type="text" id="reservation_name" name="funding_round[prev_raised_amount]" required="" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="devidedrow">
                                             <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                <label class="mifont">Other Deal Terms</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                <div class="form-group mb-10">
                                                   <i class="fa fa-edit" aria-hidden="true"></i>
                                                   <textarea name="funding_round[other_deal_terms]"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                       {{ Form::close() }}
                                    </div>
                                    </div>
                                    <div  class="rounds1">INVESTORS IN THIS ROUND</div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                       <?php foreach($startup_role as $startup_investor){ ?>
                                       <div class="col-lg-4">
                                             <div class="text">
                                                <div class="name">
                                                <a class="profile-link" data-type="User" data-id="3565344" href="https://angel.co/assbs-dss">{{$startup_investor->invited_name}}</a>
                                                </div>
                                             <div class="role_title">${{$startup_investor->funding_round}}</div>
                                             <!-- <div class="bio"><p>Hshsh</p></div> -->
                                             <div class="editing">
                                             <span class="edit editing_link">Edit</span>
                                             · <span class="remove editing_link">Remove</span>
                                             </div>
                                             </div>
                                       </div>
                                        <?php } ?>  
                                    </div>

                                    <div id="accordion1" class="panel-group accordion">
                                       <div class="panel">
                                          <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>ADD A CURRENT INVESTOR</strong></a> </div>
                                          <div id="accordion11" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">

                                             <div class="panel-content save_round_investor">
                                             {{ Form::open(array('url' => '/saveRoundInvestor','id'=>'form','class'=>'startupform','files' => true)) }}
                                                <div class="intro_text">
                                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                      <label class="mifont">Name of current investor</label>
                                                   </div>
                                                   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                      <div class="form-group mb-0">
                                                         <i class="fa fa-user"></i>
                                                         <input placeholder="Name of current investor" type="text" id="invitee_name" name="startup_role[invited_name]"  class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="intro_text">
                                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                      <label class="mifont">Investment amount</label>
                                                   </div>
                                                   <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                      <div class="form-group mb-0">
                                                         <i class="fa fa-dollar"></i>
                                                         <input placeholder="Investment amount" type="text" id="reservation_name" name="startup_role[investment_amount]" class="form-control">
                                                         <div class="clearfix"></div>
                                                         <button type="submit" name="submit" class="add1">ADD</button> 
                                                         <button class="add2">Cancel</button>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <p class="blockdata linkcolor pull-right itlacfont pb-10"><a href="#">Add other people to ajaja's profile</a>
                                               {{ Form::close() }}
                                             </div>

                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="linedevided"></div>
                                      {{ Form::open(array('url' => '/saveTransactData','id'=>'form','class'=>'startupform','files' => true)) }}
                                    <div class="row mb-10">
                                       <div class="col-lg-12">
                                          TRACTION DATA<a class="pull-right"><span id="_add_transact" class="editbtnright clcikc">Add</span></a>
                                       </div>
                                       <div id="_show_transact" class="addhidden" style="display: none;">
                                          <div class="hidedataopen font-12">Stick to the facts, don't make forecasts · <a href="#">Learn more »</a></div>
                                          <div class="pusrow">
                                             <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                <input placeholder="Metric Name" type="text" id="reservation_name" name="startup_structured_traction[name]" required="" class="form-control">
                                             </div>
                                             <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                <div class="styled-select">
                                                   <select name="startup_structured_traction[as_of_month]" class="form-control" required="">
                                                      <option value="">- Select Month  -</option>
                                                      <option value="1">January</option>
                                                      <option value="2">February</option>
                                                      <option value="3">March</option>
                                                      <option value="4" selected="selected">April</option>
                                                      <option value="5">May</option>
                                                      <option value="6">June</option>
                                                      <option value="7">July</option>
                                                      <option value="8">August</option>
                                                      <option value="9">September</option>
                                                      <option value="10">October</option>
                                                      <option value="11">November</option>
                                                      <option value="12">December</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                <div class="styled-select">
                                                   <select name="startup_structured_traction[as_of_year]" class="form-control" required="">
                                                      <option value="">- Select Year  -</option>
                                                      <option value="2019">2019</option>
                                                      <option value="2020">2020</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                <input placeholder="Value" type="text" id="reservation_name" name="startup_structured_traction[traction]" required="" class="form-control">
                                             </div>
                                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="styled-select">
                                                   <select name="startup_structured_traction[traction_period]" class="form-control" required="">
                                                      <option value="">Total</option>
                                                      <option value="1">Monthly</option>
                                                      <option value="2">Yearly</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-lg-1 col-md-1 col-sm-3 col-xs-12">
                                                <div class="roundbutnpuspop">-</div>
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="addmoredatabnt"><a href="#"><span>+</span> Add More Data</a></div>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="col-lg-12">
                                          <p class="itlacfont pt-10 pb-10">What are your key metrics? Where are you now?</p>
                                       </div>
                                    </div>
                                    {{ Form::close() }}

                                    <div class="row mb-10">
                                       <div class="col-lg-12">
                                          OTHER TRACTION INFO<a href="#" class="pull-right"><span class="editbtnright clcikc" id="_other_transact">Edit</span></a>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="addhidden" style="display: none;" id="_show_other_transact">
                                          <div class="hidedataopen font-12">Stick to the facts, don't make forecasts · <a href="#">Learn more »</a></div>
                                          <div class="col-lg-12">
                                             <div class="mt-10 mb-10">
                                                <div class="row">
                                                   <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                      <div class="linehhh">Launched</div>
                                                   </div>
                                                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Select Month  -</option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>
                                                            <option value="3">March</option>
                                                            <option value="4">April</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">August</option>
                                                            <option value="9">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Select Year  -</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mt-0 mb-10">
                                                <div class="row">
                                                   <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                      <div class="linehhh">Graphs</div>
                                                   </div>
                                                   <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                      <div class="form-group">
                                                         <input type="file" class="input-ghost" style="visibility:hidden; height:0" name="Fichier1">
                                                         <div class="input-group input-file" name="Fichier1">
                                                            <span class="input-group-btn">
                                                            <button class="btn btn-default btn-choose" type="button">Choose</button>
                                                            </span>
                                                            <input type="text" class="form-control chooo" placeholder="Choose a file..." style="cursor: pointer;">
                                                            <span class="input-group-btn">
                                                            <button class="btn btn-warning btn-reset" type="button">Upload</button>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mt-0 mb-10">
                                                <div class="row">
                                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="linehhh">Customers </div>
                                                   </div>
                                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <textarea data-max="600" class="maexdata"></textarea>
                                                      <small>0 / 600</small>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="mt-0 mb-10">
                                                <div class="row">
                                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <div class="linehhh">Distribution  </div>
                                                   </div>
                                                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                      <textarea data-max="600" class="maexdata"></textarea>
                                                      <small>0 / 600</small>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="col-lg-12">
                                          <p class="itlacfont pt-10 pb-10">Who are your customers, and how many are there? How much money are you making? How will you reach new customers?</p>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="linedevided"></div>
                                    <div class="row mb-10">
                                       <div class="col-lg-12">PARTNERS</div>
                                    </div>
                                    <div id="accordion1" class="panel-group accordion">
                                       <div class="panel">
                                          <div class="panel-title"> <a data-parent="#accordion7" data-toggle="collapse" href="#accordion7" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>ADD A PARTNER</strong></a> </div>
                                          <div id="accordion7" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                             <div class="panel-content">
                                                <div class="intro_text">
                                                   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                      <label class="mifont">Name of partner</label>
                                                   </div>
                                                   <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                      <div class="form-group mb-0">
                                                         <i class="fa fa-user"></i>
                                                         <input placeholder="Name of partner" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                         <div class="clearfix"></div>
                                                         <button class="add1">ADD</button> <button class="add2">Cancel</button>
                                                      </div>
                                                   </div>
                                                </div>
                                                <p><a href="#" class="linkcolor itlacfont pull-right font-12">Add other people to ajaja's profile</a></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="linedevided"></div>
                                    <div class="row mb-10">
                                       <div class="col-lg-12">
                                          TECHNOLOGY<a href="#" class="pull-right"><span class="editbtnright clcikc">Edit</span></a>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="addhidden">
                                          <div class="mt-10 mb-10">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <textarea data-max="600" class="maexdata"></textarea>
                                                <small>0 / 600</small>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="col-lg-12">
                                          <p class="itlacfont pt-10 pb-10">Tell us about what you've built that makes your business stand out. Did you invent something? How are you getting leverage from technology?</p>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="linedevided"></div>
                                    <div class="row mb-10">
                                       <div class="col-lg-12">
                                          DECK AND DEMO<a href="#" class="pull-right"><span class="editbtnright clcikc">Edit</span></a>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="addhidden">
                                          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                             <div class="linehhh">Deck</div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                             <input placeholder="Link to your deck" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="mt-10"></div>
                                          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                             <div class="linehhh">Demo</div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                             <input placeholder="Link to your demo" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="mt-10"></div>
                                          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                             <div class="linehhh">Username</div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                             <input placeholder="Username" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                          </div>
                                          <div class="clearfix"></div>
                                          <div class="mt-10"></div>
                                          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                             <div class="linehhh">Password</div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                             <input placeholder="Password" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="col-lg-12">
                                          <p class="itlacfont pt-10 pb-10">Tell us about what you've built that makes your business stand out. Did you invent something? How are you getting leverage from technology?</p>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="linedevided"></div>
                                    <div class="row mb-10">
                                       <div class="col-lg-12">
                                          ADDITIONAL INFO<a href="#" class="pull-right"><span class="editbtnright clcikc">Edit</span></a>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="addhidden">
                                          <div class="mt-10 mb-10">
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <textarea data-max="600" class="maexdata"></textarea>
                                                <small>0 / 600</small>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="col-lg-12">
                                          <p class="itlacfont pt-10 pb-10">Tell us about what you've built that makes your business stand out. Did you invent something? How are you getting leverage from technology?</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">PRODUCT</h3>
                           </div>
                           <div class="contantaftercheck1">
                              <div class="row mb-10">
                                 <div class="col-lg-12">
                                    SCREENSHOTS AND VIDEO<a href="#" class="pull-right"><span class="editbtnright clcikc">Edit</span></a>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="addhidden">
                                    <div class="mt-10 mb-10">
                                       <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                          <div class="linehhh">Video</div>
                                       </div>
                                       <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                          <input placeholder="Enter link to Youtube, Vimeo, etc." type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mt-10 mb-10">
                                       <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                          <div class="linehhh">Images</div>
                                       </div>
                                       <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                          <div class="form-group">
                                             <input type="file" class="input-ghost" style="visibility:hidden; height:0" name="Fichier1">
                                             <div class="input-group input-file" name="Fichier1">
                                                <span class="input-group-btn">
                                                <button class="btn btn-default btn-choose" type="button">Choose</button>
                                                </span>
                                                <input type="text" class="form-control chooo" placeholder="Choose a file..." style="cursor: pointer;">
                                                <span class="input-group-btn">
                                                <button class="btn btn-warning btn-reset" type="button">Upload</button>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="col-lg-12">
                                    <p class="itlacfont pt-10 pb-10">Show off your product. Screenshots are the fastest way to show what you're building. Video walkthroughs of the product or pitch are too in-depth.</p>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="linedevided"></div>
                              <div class="row mb-10">
                                 <div class="col-lg-12">
                                    PRODUCT<a href="#" class="pull-right"><span class="editbtnright clcikc">Edit</span></a>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="addhidden">
                                    <div class="mt-10 mb-10">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <textarea data-max="600" class="maexdata"></textarea>
                                          <small>0 / 600</small>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="col-lg-12">
                                    <p class="itlacfont pt-10 pb-10">Show off your product. Screenshots are the fastest way to show what you're building. Video walkthroughs of the product or pitch are too in-depth.</p>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="linedevided"></div>
                              <h3 class="smfontnew">LAUNCHES</h3>
                              <div class="intro_text">
                                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <label class="mifont">ADD PRODUCT</label>
                                 </div>
                                 <div class="col-lg-7 col-md-7 col-sm-5 col-xs-12">
                                    <div class="form-group mb-0">
                                       <input placeholder="Add Product" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12"><button class="add">ADD</button> </div>
                              </div>
                           </div>
                        </div>
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">FOUNDER</h3>
                           </div>
                           <div class="contantaftercheck1">
                              <div class="tableji1">
                                 <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                       <div class="profilephoto">
                                          <img src="http://www.slipperelectrical.co.nz/wp-content/uploads/2015/12/dummy-image.jpg" class="img-responsive">
                                       </div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 text-left">
                                       <div class="tableji1">
                                          <div class="middelji">
                                             <div class="profilenamesat">Ajad Rawat</div>
                                             <div class="profilenameabt">Lorem Ipsum Dolor Shit</div>
                                             <div class="removeicon"><a href="#">Remove</a></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion8" data-toggle="collapse" href="#accordion8" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Add A Founder</strong></a> </div>
                                    <div id="accordion8" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                <label class="mifont">Name of partner</label>
                                             </div>
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-group mb-0">
                                                   <i class="fa fa-user"></i>
                                                   <input placeholder="Name of partner" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   <div class="clearfix"></div>
                                                   <button class="add1">ADD</button> <button class="add2">Cancel</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">FUNDING</h3>
                           </div>
                           <div class="contantaftercheck1">
                              <div class="rounds">ROUNDS</div>
                              <div class="clearfix"></div>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion2" data-toggle="collapse" href="#accordion2" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Add A Past Round</strong></a> </div>
                                    <div id="accordion2" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="devidedrow">
                                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                   <label class="mifont">Round Type</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                                                   <div class="form-group mb-0">
                                                      <i class="fa fa-building" aria-hidden="true"></i>
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Please Select  -</option>
                                                            <option value="Seed">Seed</option>
                                                            <option value="Series A">Series A</option>
                                                            <option value="Series B">Series B</option>
                                                            <option value="Series C">Series C</option>
                                                            <option value="Series D">Series D</option>
                                                            <option value="Series E">Series E</option>
                                                            <option value="Series F">Series F</option>
                                                            <option value="Closed">Closed</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="clearfix"></div>
                                             <div class="devidedrow">
                                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                   <label class="mifont">Round Type</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                                                   <div class="form-group mb-0">
                                                      <i class="fa fa-circle" aria-hidden="true"></i>
                                                      <input placeholder="$1,000,000" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="clearfix"></div>
                                             <div class="devidedrow">
                                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                   <label class="mifont">Press URL</label>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <div class="form-group mb-10">
                                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Select Year  -</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <div class="form-group mb-10">
                                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Select Year  -</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <div class="form-group mb-10">
                                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Select Year  -</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="devidedrow">
                                                   <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                      <label class="mifont">Press URL</label>
                                                   </div>
                                                   <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                                                      <div class="form-group mb-0">
                                                         <i class="fa fa-globe" aria-hidden="true"></i>
                                                         <input placeholder="http://techcrunch.com/our-announcement" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="devidedrow">
                                                   <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                      <label class="mifont">Participants</label>
                                                   </div>
                                                   <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                                                      <div class="form-group mb-0">
                                                         <i class="fa fa-users" aria-hidden="true"></i>
                                                         <input placeholder="Add an investor..." type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                      </div>
                                                      <div class="clearfix"></div>
                                                      <button class="add1">ADD</button><button class="add2">Cancel</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion3" data-toggle="collapse" href="#accordion3" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>REPORT EXIT</strong></a> </div>
                                    <div id="accordion3" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="devidedrow">
                                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                   <label class="mifont">Round Type</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                                                   <div class="form-group mb-0">
                                                      <i class="fa fa-building" aria-hidden="true"></i>
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Please Select  -</option>
                                                            <option value="Seed">Seed</option>
                                                            <option value="Series A">Series A</option>
                                                            <option value="Series B">Series B</option>
                                                            <option value="Series C">Series C</option>
                                                            <option value="Series D">Series D</option>
                                                            <option value="Series E">Series E</option>
                                                            <option value="Series F">Series F</option>
                                                            <option value="Closed">Closed</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="clearfix"></div>
                                             <div class="devidedrow">
                                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                   <label class="mifont">Round Type</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                                                   <div class="form-group mb-0">
                                                      <i class="fa fa-circle" aria-hidden="true"></i>
                                                      <input placeholder="$1,000,000" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="clearfix"></div>
                                             <div class="devidedrow">
                                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                   <label class="mifont">Press URL</label>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <div class="form-group mb-10">
                                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Select Year  -</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <div class="form-group mb-10">
                                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Select Year  -</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <div class="form-group mb-10">
                                                      <i class="fa fa-calendar" aria-hidden="true"></i>
                                                      <div class="styled-select">
                                                         <select name="car_select" class="form-control" required="">
                                                            <option value="">- Select Year  -</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="devidedrow">
                                                   <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                      <label class="mifont">Press URL</label>
                                                   </div>
                                                   <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                                                      <div class="form-group mb-0">
                                                         <i class="fa fa-globe" aria-hidden="true"></i>
                                                         <input placeholder="http://techcrunch.com/our-announcement" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="devidedrow">
                                                   <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                      <label class="mifont">Participants</label>
                                                   </div>
                                                   <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
                                                      <div class="form-group mb-0">
                                                         <i class="fa fa-users" aria-hidden="true"></i>
                                                         <input placeholder="Add an investor..." type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                      </div>
                                                      <div class="clearfix"></div>
                                                      <button class="add1">ADD</button><button class="add2">Cancel</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <p class="font-13 blockdata">INVESTORS from previous rounds</p>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion4" data-toggle="collapse" href="#accordion4" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>ADD A PAST INVESTOR</strong></a> </div>
                                    <div id="accordion4" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                <label class="mifont">Name of past investor</label>
                                             </div>
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-group mb-0">
                                                   <i class="fa fa-user"></i>
                                                   <input placeholder="Name of past investor" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   <div class="clearfix"></div>
                                                   <button class="add1">ADD</button> <button class="add2">Cancel</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="rounds">INCUBATOR</div>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion5" data-toggle="collapse" href="#accordion5" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>ADD AN INCUBATOR</strong></a> </div>
                                    <div id="accordion5" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="mifont">Name of past incubator</label>
                                             </div>
                                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-group mb-0">
                                                   <i class="fa fa-user"></i>
                                                   <input placeholder="Name of incubator" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   <div class="clearfix"></div>
                                                   <button class="add1">ADD</button> <button class="add2">Cancel</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">TEAM</h3>
                           </div>
                           <div class="contantaftercheck1">
                              <div class="rounds">EMPLOYEES</div>
                              <div class="clearfix"></div>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion13" data-toggle="collapse" href="#accordion13" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Add A Past Round</strong></a> </div>
                                    <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                <label class="mifont">ADD AN EMPLOYEE</label>
                                             </div>
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-group mb-0">
                                                   <i class="fa fa-user"></i>
                                                   <input placeholder="Name of employee" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   <div class="clearfix"></div>
                                                   <button class="add1">ADD</button> <button class="add2">Cancel</button>
                                                </div>
                                             </div>
                                          </div>
                                          <p><a href="#" class="linkcolor itlacfont pull-right font-12">Add other people to ajaja's profile</a></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="rounds1">PAST EMPLOYEES</div>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="rounds">ADVISORS</div>
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion14" data-toggle="collapse" href="#accordion14" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>ADD AN ADVISOR</strong></a> </div>
                                    <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                <label class="mifont">Name of advisor</label>
                                             </div>
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-group mb-0">
                                                   <i class="fa fa-user"></i>
                                                   <input placeholder="Name of advisor" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   <div class="clearfix"></div>
                                                   <button class="add1">ADD</button> <button class="add2">Cancel</button>
                                                </div>
                                             </div>
                                          </div>
                                          <p><a href="#" class="linkcolor itlacfont pull-right font-12">Add other people to ajaja's profile</a></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="rounds">ATTORNEYS</div>
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion15" data-toggle="collapse" href="#accordion15" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>ADD AN ATTORNEY</strong></a> </div>
                                    <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                <label class="mifont">Name of attorney</label>
                                             </div>
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-group mb-0">
                                                   <i class="fa fa-user"></i>
                                                   <input placeholder="Name of Attorney" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   <div class="clearfix"></div>
                                                   <button class="add1">ADD</button> <button class="add2">Cancel</button>
                                                </div>
                                             </div>
                                          </div>
                                          <p><a href="#" class="linkcolor itlacfont pull-right font-12">Add other people to ajaja's profile</a></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="rounds">BOARD MEMBERS</div>
                              <div id="accordion1" class="panel-group accordion">
                                 <div class="panel">
                                    <div class="panel-title"> <a data-parent="#accordion16" data-toggle="collapse" href="#accordion16" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>ADD A BOARD MEMBER</strong></a> </div>
                                    <div id="accordion16" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                       <div class="panel-content">
                                          <div class="intro_text">
                                             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                <label class="mifont">Name of board member</label>
                                             </div>
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-group mb-0">
                                                   <i class="fa fa-user"></i>
                                                   <input placeholder="Name of board member" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                   <div class="clearfix"></div>
                                                   <button class="add1">ADD</button> <button class="add2">Cancel</button>
                                                </div>
                                             </div>
                                          </div>
                                          <p><a href="#" class="linkcolor itlacfont pull-right font-12">Add other people to ajaja's profile</a></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="rightsidestrat">
                           <ul class="font-13">
                              <li><i class="fa fa-map-marker"></i> <a href="#">New York City<span class="pull-right">Edit</span></a></li>
                              <li><i class="fa fa-tags"></i> <a href="#">Social Media</a></li>
                              <li><i class="fa fa-users"></i> <a href="#">1-10 employees</a></li>
                              <li><i class="fa fa-globe"></i> <a href="#">www.eurabi.com</a></li>
                           </ul>
                           <h2>Over 4,400 companies have hired on AngelList</h2>
                           <button class="add">Post Job</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade in " id="PEOPLE">
                  <div class="row">
                     <div class="col-lg-9">
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">PEOPLE</h3>
                           </div>
                           <div class="contantaftercheck1">
                              <ul id="myTab2" class="nav nav-pills boot-tabs">
                                 <li class="active"><a href="#home2" data-toggle="tab">All</a></li>
                                 <li><a href="#profile2" data-toggle="tab">Founders<sup>1</sup></a></li>
                              </ul>
                              <div id="myTabContent2" class="tab-content">
                                 <div class="tab-pane fade in active" id="home2">
                                    <div class="row mb-10">
                                       <div class="col-lg-12 font-16"><a href="#">eurabi's</a> Connections</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="mb-20 itlacfont">Add, edit, confirm and remove eurabi's connections. Connections give you greater access to investors, expand your recruiting network, and, in general, boost your ranking on AngelList.</p>
                                    <div class="clearfix"></div>
                                    <div class="intro_text">
                                       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                          <div class="form-group mb-10">
                                             <i class="fa fa-user"></i>
                                             <div class="styled-select">
                                                <select name="car_select" class="form-control" required="">
                                                   <option value="">- Please Select Role -</option>
                                                   <option value="employee">Team Member</option>
                                                   <option value="founder">Founder</option>
                                                   <option value="past_investor">Past Investor</option>
                                                   <option value="current_investor">Current Investor</option>
                                                   <option value="incubator">Incubator</option>
                                                   <option value="advisor">Advisor</option>
                                                   <option value="attorney">Attorney</option>
                                                   <option value="board_member">Board Member</option>
                                                   <option value="partner">Partner</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                          <div class="form-group mb-0">
                                             <i class="fa fa-link"></i>
                                             <input placeholder="Add Connection" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12"><button class="add">ADD</button> </div>
                                       <div class="clearfix"></div>
                                       <table class="table table-responsive table-hover">
                                          <thead>
                                             <tr>
                                                <th>Connection</th>
                                                <th>Role</th>
                                                <th class="optional">Other Info</th>
                                                <th></th>
                                             </tr>
                                          </thead>
                                          <tr>
                                             <td><img src="http://www.slipperelectrical.co.nz/wp-content/uploads/2015/12/dummy-image.jpg" class="img-responsive"> Amit</td>
                                             <td>Founder</td>
                                             <td></td>
                                             <td><a href="#" class="pull-right"><span class="editbtnright">X</span></a>  <a href="#" class="pull-right"><span class="editbtnright">Edit</span></a> </td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="profile2">
                                    <div class="row mb-10">
                                       <div class="col-lg-12 font-16"><a href="#">eurabi's</a> Connections</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="mb-20 itlacfont">Add, edit, confirm and remove eurabi's connections. Connections give you greater access to investors, expand your recruiting network, and, in general, boost your ranking on AngelList.</p>
                                    <div class="clearfix"></div>
                                    <div class="intro_text">
                                       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                          Role<br/>
                                          Founder
                                       </div>
                                       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                          <div class="form-group mb-0">
                                             <i class="fa fa-link"></i>
                                             <input placeholder="Add Connection" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12"><button class="add">ADD</button> </div>
                                       <div class="clearfix"></div>
                                       <table class="table table-responsive table-hover">
                                          <thead>
                                             <tr>
                                                <th>Connection</th>
                                                <th>Role</th>
                                                <th class="optional">Other Info</th>
                                                <th></th>
                                             </tr>
                                          </thead>
                                          <tr>
                                             <td><img src="http://www.slipperelectrical.co.nz/wp-content/uploads/2015/12/dummy-image.jpg" class="img-responsive"> Amit</td>
                                             <td>Founder</td>
                                             <td></td>
                                             <td><a href="#" class="pull-right"><span class="editbtnright">X</span></a>  <a href="#" class="pull-right"><span class="editbtnright">Edit</span></a> </td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <p class="font-13 blockdata itlacfont">A 'Current Investor' is an investor in an open funding round. Unless you are fundraising publicly, they will not be shown to the public on your profile.</p>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="rightsidestrat">
                           <ul class="font-13">
                              <li><i class="fa fa-map-marker"></i> <a href="#">New York City<span class="pull-right">Edit</span></a></li>
                              <li><i class="fa fa-tags"></i> <a href="#">Social Media</a></li>
                              <li><i class="fa fa-users"></i> <a href="#">1-10 employees</a></li>
                              <li><i class="fa fa-globe"></i> <a href="#">www.eurabi.com</a></li>
                           </ul>
                           <h2>Over 4,400 companies have hired on AngelList</h2>
                           <button class="add">Post Job</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade in" id="ACTIVITY">
                  <div class="row">
                     <div class="col-lg-9">
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">ACTIVITY</h3>
                           </div>
                           <div class="contantaftercheck1">
                              <ul id="myTab3" class="nav nav-pills boot-tabs">
                                 <li class="active"><a href="#alll" data-toggle="tab">All</a></li>
                                 <li><a href="#persons" data-toggle="tab">People</a></li>
                                 <li><a href="#comentshere" data-toggle="tab">Comments</a></li>
                              </ul>
                              <div id="myTabContent3" class="tab-content">
                                 <div class="tab-pane fade in active" id="alll">
                                    <div class="intro_text">
                                       <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-2 col-xs-12">
                                             <div class="form-group mb-0">
                                                <i class="fa fa-link"></i>
                                                <input placeholder="Write An Update or Paste a URL..." type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="col-lg-3 col-sm-3 col-xs-12">
                                          <div class="centerpara">
                                             Feb 26, 2019
                                          </div>
                                       </div>
                                       <div class="col-lg-9 col-sm-9 col-xs-12">
                                          <img src="http://www.slipperelectrical.co.nz/wp-content/uploads/2015/12/dummy-image.jpg" class="img-responsive smimage">
                                          <div class="pt-5">
                                             <a href="#" class="linkcolor">amit yadav</a> was added as a founder of <a href="#" class="linkcolor">amit</a>
                                             <span class="blockdata font-11">sdfafsadfdsafdsafdsafdsafsafsdafdsf</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="persons">
                                    <div class="intro_text">
                                       <div class="col-lg-3 col-sm-3 col-xs-12">
                                          <div class="centerpara">
                                             Feb 26, 2019
                                          </div>
                                       </div>
                                       <div class="col-lg-9 col-sm-9 col-xs-12">
                                          <img src="http://www.slipperelectrical.co.nz/wp-content/uploads/2015/12/dummy-image.jpg" class="img-responsive smimage">
                                          <div class="pt-5">
                                             <a href="#" class="linkcolor">amit yadav</a> was added as a founder of <a href="#" class="linkcolor">amit</a>
                                             <span class="blockdata font-11">sdfafsadfdsafdsafdsafdsafsafsdafdsf</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br/>
                                    <div class="col-lg-12">
                                       <p class="blockdata font-13"> No More</p>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="comentshere">
                                    <div class="intro_text">
                                       <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-2 col-xs-12">
                                             <div class="form-group mb-0">
                                                <i class="fa fa-link"></i>
                                                <input placeholder="Write An Update or Paste a URL..." type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br/>
                                    <div class="col-lg-12">
                                       <p class="blockdata font-13"> No More</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="rightsidestrat">
                           <ul class="font-13">
                              <li><i class="fa fa-map-marker"></i> <a href="#">New York City<span class="pull-right">Edit</span></a></li>
                              <li><i class="fa fa-tags"></i> <a href="#">Social Media</a></li>
                              <li><i class="fa fa-users"></i> <a href="#">1-10 employees</a></li>
                              <li><i class="fa fa-globe"></i> <a href="#">www.eurabi.com</a></li>
                           </ul>
                           <h2>Over 4,400 companies have hired on AngelList</h2>
                           <button class="add">Post Job</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade in" id="VISITORS">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="product1">
                           <div class="col-lg-9">
                              <h3 class="smfontnew">PROFILE VISITORS</h3>
                           </div>
                           <div class="col-lg-3">
                              <div class="stats"><i class="fa fa-signal" aria-hidden="true"></i> STATS</div>
                           </div>
                           <div class="contantaftercheck1">
                              <p class="p-20">Nobody has visited amit's profile yet.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade in" id="SETTINGS">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">SETTINGS</h3>
                           </div>
                           <div class="contantaftercheck1">
                              <div class="col-lg-9">
                                 <h3 class="smfontnew">Amit Setting</h3>
                              </div>
                              <div class="col-lg-3"><button class="add1 pull-right">Save</button> <button class="add4 pull-right">Cancel</button></div>
                              <form class="startupform">
                                 <div class="devidedrow">
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                       <label class="mifont">Profile URL</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                       <div class="form-group mb-10">
                                          <i class="fa fa-link" aria-hidden="true"></i>
                                          <input placeholder="Add Another School" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="linedevided"></div>
                                 <div class="devidedrow">
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                       <label class="mifont">Primary Contact</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                       <div class="form-group mb-10">
                                          <i class="fa fa-user"></i>
                                          <div class="styled-select">
                                             <select name="car_select" class="form-control" required="">
                                                <option value="">- Please Select  -</option>
                                                <option value="Amit YAdav">Aamit Yadav</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="devidedrow">
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                       <label class="mifont">Recruiting Contact</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                       <div class="form-group mb-10">
                                          <i class="fa fa-user"></i>
                                          <div class="styled-select">
                                             <select name="car_select" class="form-control" required="">
                                                <option value="">- Please Select  -</option>
                                                <option value="Amit YAdav">Aamit Yadav</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="linedevided"></div>
                                 <div class="devidedrow">
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                       <label class="mifont"> Profile Editors</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
                                       <div class="form-group mb-10">
                                          <a href="#" class="linkcolor midalign">amit yadav</a>
                                       </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
                                       <div class="form-group mb-10">
                                          <a href="#" class="linkcolor midalign">Founder</a>
                                       </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-md-offset-4 col-ms-offset-4 font-11">Someone missing? Make sure they are a confirmed employee</div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="linedevided"></div>
                                 <div class="devidedrow">
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                       <label class="mifont"> Meeting investors</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                       Your fundraising profile is off. 
                                       <span class="blockdata font-11">Would you like to enable investors to contact you?</span>
                                    </div>
                                 </div>
                                 <div class="col-md-8 col-sm-8 col-md-offset-4 col-ms-offset-4">
                                    <input type="submit" name="commit" value="Turn on your fundraising profile" class="c-button c-button--gray s-vgTop1">
                                 </div>
                                 <p class="blockdata font-12 itlacfont pull-right">Delete Startup Profile</p>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade in" id="FOLLOWERS">
                  <div class="row">
                     <div class="col-lg-9">
                        <div class="product1">
                           <div class="col-lg-12">
                              <h3 class="smfontnew">FOLLOWERS</h3>
                           </div>
                           <div class="contantaftercheck1">
                              <div id="myTabContent3" class="tab-content">
                                 <div class="new">
                                    <div class="intro_text">
                                       <div class="col-lg-12 col-sm-12 col-xs-12">
                                          <img src="http://www.slipperelectrical.co.nz/wp-content/uploads/2015/12/dummy-image.jpg" class="img-responsive smimage">
                                          <div class="pt-5">
                                             <a href="#" class="linkcolor">amit yadav</a> was added as a founder of <a href="#" class="linkcolor">amit</a>
                                             <span class="blockdata font-11">sdfafsadfdsafdsafdsafdsafsafsdafdsf</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br/>
                                    <div class="col-lg-12">
                                       <p class="blockdata font-13"> No More</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="rightsidestrat">
                           <ul class="font-13">
                              <li><i class="fa fa-map-marker"></i> <a href="#">New York City<span class="pull-right">Edit</span></a></li>
                              <li><i class="fa fa-tags"></i> <a href="#">Social Media</a></li>
                              <li><i class="fa fa-users"></i> <a href="#">1-10 employees</a></li>
                              <li><i class="fa fa-globe"></i> <a href="#">www.eurabi.com</a></li>
                           </ul>
                           <h2>Over 4,400 companies have hired on AngelList</h2>
                           <button class="add">Post Job</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end main-content -->
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

      $("#_specify_round").click(function(){
          $("#_invest_round").css('display','block');
      });
      $("#_cancel_round").click(function(){
         $("#_invest_round").css('display','none');
      }); 
      $("#_add_transact").click(function(){
        $("#_show_transact").css("display","block");
      });
      $("#_other_transact").click(function(){
        $("#_show_other_transact").css("display","block");
      });
   });
</script>
<script>
   function newDoc() {
     window.location.assign("onboard.html")
   }
</script>
<script >
   
$(function() {

      var availableTags = <?php echo json_encode($getAllInvestorsList); ?>; 
      $( "#invitee_name" ).autocomplete({
         source: availableTags,
      });

});
</script>

@endsection