 

<?php $__env->startSection('content'); ?>

<?php
$f_name = isset($user_details->first_name) ? $user_details->first_name :"";
$l_name = isset($user_details->last_name) ? $user_details->last_name :"";
?>

<div class="main-content">
    <!-- Section: inner-header -->
    
<div class="fullbg">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
<div class="buttonbda"><i class="fa fa-edit"></i><a data-toggle="modal" data-target="#myModal"> Post an update to your network...</a></div>
</div>
</div>
</div>
</div>
<section class="mainsectionstartup">
<div class="container">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<div class="profilefeed">
<div class="flexdivcenter">
<div class="imgicon">
<input type="file" id="file1" name="image" accept="image/*" capture style="display:none"/>
<img src="<?php echo e(url('/')); ?>/images/camera.png" id="upfile1" style="cursor:pointer" />
</div>
<div class="profilepercent">Profile 0%</div>
</div>
<div class="clearfix"></div>
<div class="profilename"><?php echo e($f_name." ".$l_name); ?></div>
<div class="profiletitle">Title<span><a href="#">Add Now</a></span></div>
<div class="completeprolie"><a href="<?php echo e(url('/profile_setting')); ?>">Complete Now</a></div>
</div>

<div class="profilefeed">
<div class="profilename">Your Activity</div>
<div class="profiletitle"><span><a href="#">Earn Reward</a></span></div>
<div class="maindivfilter">
<ul>
<li>Polls <span class="valueshow">110</span></li>
<li>My Post <span class="valueshow">60</span></li>
</ul>
</div>
<div class="completeprolie"><a href="#">View Leader Board</a></div>
</div>
</div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
<div class="profilefeedmid">
<div class="infobutoongol">
<span></span>
<span></span>
<span></span>
</div>
<div class="tooglewaladiv">
<a href="#"><i class="fa fa-flag"></i> Flag</a>
</div>
<div class="profilefeedmidtop">Status Update</div>
<div class="profilrimag">
<div class="profileimageleft"><img src="<?php echo e(url('/')); ?>/images/map.png"></div> <span class="anme"><a href="#">Investorhain</a></span>
<a href="#" class="pull-right daysleft">10 Days Left</a>
</div>
<div class="discriptip">
<p>Lorem ipsum dolor sit amet,<a href="#"> consectetur adipisi</a> cing elit. Molestias eius <a href="#">illum</a> libero dolor nobis</p>
</div>
<div class="iamgesection">
<img src="<?php echo e(url('/')); ?>/images/banner_2.jpg" class="img-responsive mb-10">
<h5 class="xsMargTop primary"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisi cing elit.</a></h5>
<p class="black">xconomy.com</p>
</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-lg-6 col-md-6">
<button class="inlinebutton">Like</button> <button class="inlinebutton">comment</button>
</div>
<div class="col-lg-6 col-md-6">
<div class="linklikecomment"><a href="#">2 Likes</a><a href="#">0 Comments</a>
</div>
</div>
</div>
</div>
<div class="profilefeedmid">
<div class="infobutoongol">
<span></span>
<span></span>
<span></span>
</div>
<div class="tooglewaladiv">
<a href="#"><i class="fa fa-flag"></i> Flag</a>
</div>
<div class="profilefeedmidtop">Status Update</div>
<div class="profilrimag">
<div class="profileimageleft"><img src="<?php echo e(url('/')); ?>/images/map.png"></div> <span class="anme"><a href="#">Investorhain</a></span>
<a href="#" class="pull-right daysleft">10 Days Left</a>
</div>
<div class="discriptip">
<p>Lorem ipsum dolor sit amet,<a href="#"> consectetur adipisi</a> cing elit. Molestias eius <a href="#">illum</a> libero dolor nobis</p>
</div>
<div class="iamgesection">
<img src="<?php echo e(url('/')); ?>/images/banner.png" class="img-responsive mb-10">
<h5 class="xsMargTop primary"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisi cing elit.</a></h5>
<p class="black">xconomy.com</p>
</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-lg-6 col-md-6">
<button class="inlinebutton">Like</button> <button class="inlinebutton">comment</button>
</div>
<div class="col-lg-6 col-md-6">
<div class="linklikecomment"><a href="#">2 Likes</a><a href="#">0 Comments</a>
</div>
</div>
</div>
</div>
<div class="profilefeedmid">
<div class="infobutoongol">
<span></span>
<span></span>
<span></span>
</div>
<div class="tooglewaladiv">
<a href="#"><i class="fa fa-flag"></i> Flag</a>
</div>
<div class="profilefeedmidtop">Status Update</div>
<div class="profilrimag">
<div class="profileimageleft"><img src="<?php echo e(url('/')); ?>/images/map.png"></div> <span class="anme"><a href="#">Investorhain</a></span>
<a href="#" class="pull-right daysleft">10 Days Left</a>
</div>
<div class="discriptip">
<p>Lorem ipsum dolor sit amet,<a href="#"> consectetur adipisi</a> cing elit. Molestias eius <a href="#">illum</a> libero dolor nobis</p>
</div>
<div class="iamgesection">
<img src="img/banner_1.png" class="img-responsive mb-10">
<h5 class="xsMargTop primary"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisi cing elit.</a></h5>
<p class="black">xconomy.com</p>
</div>

<div class="clearfix"></div>
<div class="row">
<div class="col-lg-6 col-md-6">
<button class="inlinebutton">Like</button> <button class="inlinebutton">comment</button>
</div>
<div class="col-lg-6 col-md-6">
<div class="linklikecomment"><a href="#">2 Likes</a><a href="#">0 Comments</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="rightsidetags">
<div class="profilename">Popular Topics</div>
<div class="tagslist">
<ul>
<li><a href="#">Logistics</a></li>
<li><a href="#">Sector</a></li>
<li><a href="#">Business Goal</a></li>
<li><a href="#">Technologies</a></li>
<li><a href="#">Other</a></li>
</ul>
</div>
<div class="profilefeed">
<div class="ref"><i class="fa fa-refresh" aria-hidden="true"></i></div>
<h3>Startup Polls</h3>
<p>Reveal the most promising startups.</p>
<br/>
<p>You are all caught up</p>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
  <!-- end main-content -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.startup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>