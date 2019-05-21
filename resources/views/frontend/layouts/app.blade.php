<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<!-- Page Title -->
<title>Welcome To Our Website</title>

<!-- Stylesheet -->
<link href="/css-front/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css-front/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="/css-front/animate.css" rel="stylesheet" type="text/css">
<link href="/css-front/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css-front/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="/css-front/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="/css-front/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="/scss-front/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="/css-front/responsive.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="/css-front/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="/css-front/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="/css-front/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="/css-front/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">
<link href="/css-front/icon-font.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- external javascripts -->

<script src="/frontjs/jquery-2.2.4.min.js"></script>
<script src="/frontjs/jquery-ui.min.js"></script>
<script src="/frontjs/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="/frontjs/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="/frontjs/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="/frontjs/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


<script>
$( document ).ready(function() {    
$('.desktopserch').click(function(){
  $(".maininputdesktop").toggle(00)
  });  
}); 
</script>

</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">



@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        {{ implode('', $errors->all(':message')) }}
  </div>
@endif
<div id="wrapper" class="clearfix">
@include("frontend.partials.header")

@yield('content')

@include("frontend.partials.footer")

     <!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->   
<script src="/frontjs/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/frontjs/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


<script>
$( document ).ready(function() {    
$('.mobileshow').click(function(){
  $(".mobileinputshow").toggle(00)});  
}); 

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>
</body>
</html>