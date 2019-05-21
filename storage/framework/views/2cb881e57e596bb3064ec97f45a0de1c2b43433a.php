<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<!-- Page Title -->
<title>Welcome To Our Website</title>

<!-- Stylesheet -->
<link href="css-front/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css-front/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css-front/animate.css" rel="stylesheet" type="text/css">
<link href="css-front/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css-front/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css-front/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css-front/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css-front/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css-front/responsive.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="css-front/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="css-front/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="css-front/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css-front/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">
<link href="css-front/icon-font.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- external javascripts -->

<script src="frontjs/jquery-2.2.4.min.js"></script>
<script src="frontjs/jquery-ui.min.js"></script>
<script src="frontjs/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="frontjs/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="frontjs/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="frontjs/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="frontjs/domain.ete.js"></script>
<script src="frontjs/notify.min.js"></script>
<script src="frontjs/jquery-ui-1.10.3.custom.js"></script>



<script>
$( document ).ready(function() {    
$('.desktopserch').click(function(){
  $(".maininputdesktop").toggle(00)
  });  
}); 
</script>


<style>
.fade:not(.show) {
    opacity: 1;
}
.loader {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('/images/loading.gif') 50% 50% no-repeat rgb(249,249,249);
}
</style>
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">



<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>


<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <?php echo e(implode('', $errors->all(':message'))); ?>

  </div>
<?php endif; ?>
<div id="wrapper" class="clearfix">
<!-- Header -->
  <header id="header" class="header">
    
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed redbg">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-7 col-sm-7 col-xs-7 mobilezero">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip xs-pull-center" href="index.html">
              <img src="images/logo-wide.png" alt="">
            </a>
            <ul class="menuzord-menu">
              <!-- <li><a href="#">Investchain</a></li> -->
              <li><a href="#">Feed</a>
              <ul class="dropdown">
                  <li><a href="#">News</a></li>           
                  <li><a href="#">Event</a></li>
                </ul>
              </li>           
              <li><a href="#">Invest</a></li> 
              
              
              <li><a href="#">Browse</a>
                <ul class="dropdown">
                  <li><a href="#">Open </a></li>           
                  <li><a href="#">investments</a></li>
                  <li><a href="startup.html">Startups</a></li>
                  <li><a href="#">Investor</a></li>
                </ul>
              </li>
               <li><a href="#">Network</a></li>
            
              </li>           
              

            </ul>
          </nav>
          </div>
          <div class="col-lg-5 col-sm-5 col-sx-5 mobilezero">
          
          <div class="search-form hidden-sm hidden-xs visible-lg visible-md">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input maininputdesktop">
                      <span class="input-group-btn">
                      <button type="button" class="btn search-button desktopserch"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
                 <button type="submit" class="btn search-button hidden-lg hidden-md visible-sm visible-xs mobileshow"><i class="fa fa-search"></i></button>
                 <!--<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="fa fa-bars font-24 text-gray"></i></a></div>-->
           <div class="afterlogin"><a href="dashboard.html"><img src="<?php echo e(asset('images/discover.png')); ?>" alt="Discover" title="Discover"></a></div>
           <div class="afterlogin"><div class="usericongol"><i class="fa fa-user"></i></div></div>
            <div class="dropdownprofile">
            <ul>
            <li><a href="profile-setting.html">Account Settings</a></li>
 <li><a href="profile_page.html">Profile</a></li>
 <li><a href="startup-registration.html">Add Company Profile</a></li>
 <li><a href="#">Help Center</a></li>
            </ul>
            </div>
              
          </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<div class="tloader">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="loading-text">Loading..</div>
</div>
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make("frontend.partials.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

     <!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->   
<script src="frontjs/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="frontjs/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<script>
$( document ).ready(function() {    
$('.mobileshow').click(function(){
  $(".mobileinputshow").toggle(00)});  
}); 
</script>
</body>
</html>