@extends('frontend.layouts.app')

@section('content')

 <div class="main-content">
    <!-- Section: inner-header -->
    <section>
      <div class="container">
        <div class="row">
        <h3 class="text-center font-weight-400">{{ trans('labels.frontend.auth.login_box_title') }}</h3>
          <div class="col-md-8 col-md-push-2">
       <div class="loginform">
  
  <div class="clearfix"></div>
  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pr0">
  <div class="formdata">
            {{ Form::open(['route' => 'frontend.loginUser', 'class' => 'clearfix' ,'id'=>'loginform']) }}
              <div class="row">
                <div class="form-group col-md-12">
                     
                <i class="fa fa-envelope"></i>
                   {{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.email')]) }}
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                   
                <i class="fa fa-lock"></i>
                   {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.password')]) }}
                </div>
              </div>
              
              <div class="form-group mt-10 col-lg-4 col-md-4 col-sm-4 col-xs-12 pl0">
            <button type="submit" class="btn btn-dark btn-sm">Login</button>
              </div>
              <div class="text-center pt-10  col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <a class="text-theme-colored font-weight-400 font-14" href="#"> {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}</a>
              </div>
           {{ Form::close() }}
  </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pl0">
  <div class="lightwhite">
  <div class="clear text-center pt-0">
  <div class="clearfix"></div>
  <div class="logint">
  <div class="loginwit"><i class="fa fa-facebook"></i> Login with Facebook</div>
  </div>
  <div class="logint">
  <div class="loginwit"><i class="fa fa-twitter"></i> Login with Twitter</div>
  </div>
  
  <div class="logint">
  <div class="loginwit"><i class="fa fa-google"></i> Login with Google</div>
  </div>
  </div>
  </div>
  </div>
  </div>
            
          </div>
        </div>
        <div class="clearfix"></div>
        <p class="text-center mt-20">Need an account? <a href="#" class="text-theme-colored">Sign Up »</a></p>
        </div>
      </div>
    </section>
  </div>
@endsection