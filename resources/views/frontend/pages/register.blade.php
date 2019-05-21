
@extends('frontend.layouts.app')

@section('content')
<div class="main-content">
    <section>
        <div class="container">
            <div class="row">
                <div class="marginauto mb-15"><img src="images/logo-wide.png" class="text-center"></div>
                <h2 class="text-center">Get started with a free account</h2>
                <h5 class="text-center font-weight-400">Join the largest logistics & supply chain investment community</h5>

                <div class="col-md-8 col-md-push-2">
                    <div class="clearfix"></div>
                    <div class="row">

                        <div class="col-md-12 col-sm-12">
                            <button class="linkedinbutton">
                                <div class="row center-xs middle-xs">
                                    <img src="images/linkedin.svg" alt="LinkedIn" style="width: 32px; padding-right: 3px;">Sign Up With LinkedIn</div>
                            </button>
                            <div class="clearfix"></div>
                            <p class="text-center">Or sign up with email</p>
                            {{ Form::open(array('method'=>'post','id'=> 'header_info','url' => 'saveUser','files' => true,'class'=>'reservation-form')) }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>*First NAME</label>
                                        <div class="form-group mb-15">
                                            <i class="fa fa-user"></i>
                                            <input placeholder="First Name" value="{{old('first_name')}}" type="text" id="reservation_name" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>* Last NAME</label>
                                        <div class="form-group mb-15">
                                            <i class="fa fa-user"></i>
                                            <input placeholder="Last Name" value="{{old('last_name')}}" type="text" id="reservation_name" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>* Email</label>
                                        <div class="form-group mb-15">
                                            <i class="fa fa-envelope"></i>
                                            <input placeholder="Email" value="{{old('email')}}" type="text" id="reservation_email" name="email" class="form-control" >
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
                                                            <option <?php echo  old("country")==$country->id ? "selected":""; ?> value="{{$country->id}}">{{$country->name}}</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>* CREATE A PASSWORD</label>
                                        <div class="form-group mb-15">
                                            <i class="fa fa-lock"></i>
                                            <input type="password" placeholder="CREATE A PASSWORD" type="text" id="reservation_email" name="password" class="form-control" >
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
                                    <div class="col-sm-12  mb-15"><small>Password must have at least 8 characters</small></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-12 mb-15">
                                        <label>* MEMBER ROLE</label>
                                    </div>
                                    <div class="col-sm-4 mb-10">
                                        <label class="checkcontainer">Startup Founder
                                            <input <?php echo old("role_id")==3 ?"checked":"";  ?> type="radio" value="3"  name="role_id">
                                            <span class="radiobtn"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-4 mb-15">
                                        <label class="checkcontainer"> Investor
                                            <input <?php echo old("role_id")==2 ?"checked":"";  ?> type="radio" value="2"  name="role_id">
                                            <span class="radiobtn"></span>
                                        </label>
                                    </div>

                                    <div class="col-sm-4 mb-15">
                                        <label class="checkcontainer"> Advisor
                                            <input type="radio" <?php echo old("role_id")==4 ?"checked":"";  ?> value="4"  name="role_id">
                                            <span class="radiobtn"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-0">
                                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px full" data-loading-text="Please wait...">Create An Account</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="text-center mt-10 mb-10 terms">You agree with our<a href="#"> Terms of Service</a> and <a href="#">Privacy Policy</a></p>
                                <p class="text-center mt-10 mb-10 terms1"> Already have an account? <a href="login.html">Log In</a></p>

                            {{ Form::close() }}	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection