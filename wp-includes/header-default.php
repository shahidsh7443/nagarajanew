<?php

$rurl=is_home()?"":site_url();
?>

<div class="header-wrapper navbar-fixed-top">
    <?php

     if (nominee_option('header-top-visibility', false, true)) : ?>
      <style>
      @media screen and (max-width:480px){
        .navbar
        {
          height: 40px;
        }
        }
        </style>
        <nav class="navbar navbar-default" style="background-color:white !important;padding-bottom: 0px;padding-top: 5px;">
            <div class="container-fluid" >
              <div class="row" style="color: #a9b2b1;">
<div class="col-lg-1 col-md-2 col-sm-2 col-xs-2" style="display:inline-block;float:left;">
                   <a href="<?php echo $rurl?>" title="Nagaraja Rao">
                           <img class="hidden-xs img4" src="<?php echo $rurl?>/wp-content/uploads/2015/12/NGr.png" data-at2x="<?php echo $rurl?>/wp-content/uploads/2015/12/NGr.png" alt="Nagaraja Rao">
                         <img style="height: 51px;width:auto;padding-top:5px;margin-left: -20px;margin-top: -8px;" class="visible-xs" src="<?php echo $rurl?>/wp-content/uploads/2015/12/NGr.png" data-at2x="<?php echo $rurl?>/wp-content/uploads/2015/12/NGr.png" alt="Nagaraja Rao" width="62" height="50">
</a>
       </div>
       <div class="col-lg-2 col-md-3 col-sm-4 col-xs-5" style="display:inline-block;float:left;">
                              <a href="<?php echo $rurl?>" title="Nagaraja Rao">
                                      <img class="hidden-xs img1" src="<?php echo $rurl?>/wp-content/uploads/2015/12/trplogo.png" data-at2x="<?php echo $rurl?>/wp-content/uploads/2015/12/trplogo.png" alt="Nagaraja Rao">
                                    <img style="height: 35px;width:auto;padding-top: 10px;margin-top: 0px;" class="visible-xs trp" src="<?php echo $rurl?>/wp-content/uploads/2015/12/trplogo.png" data-at2x="<?php echo $rurl?>/wp-content/uploads/2015/12/trplogo.png" alt="Nagaraja Rao">
     </a>
                  </div>
       <div class="col-lg-9 col-md-7 col-sm-6  col-xs-5 text-right" style="padding-right:8px;">
         <img class="lg2 hidden-xs" style="display:block;float:right" src="<?php echo $rurl?>/wp-content/uploads/2015/12/nagaraj_logo2.jpg" data-at2x="<?php echo $rurl?>/wp-content/uploads/2015/12/nagaraj_logo2.jpg" alt="Nagaraja Rao" class="hidden-xs">
<img class="visible-xs" style="height: 50px;width:auto;display:block;float:right;padding-top: 5px;margin-top: -8px;margin-left:5px;" src="<?php echo $rurl?>/wp-content/uploads/2015/12/nagaraj_logo2.jpg" data-at2x="<?php echo $rurl?>/wp-content/uploads/2015/12/nagaraj_logo2.jpg" alt="Nagaraja Rao" width="55" height="50">

         <div class="hidden-xs  status" style="padding-right:125px;margin-top: -17px;height: 0px;">
<h4 style="color:#004165;font-family: sans-serif !important;"><b style="line-height:5px !important;">Nagaraja Rao, DTM</b><br><p style="font-size:12pt !important;">Candidate for Second Vice President<br>Toastmasters International.</p></h4>
</div>

</div>
</div>
                 <!-- .navbar-brand -->
            </div> <!-- .container -->
       <!-- .header-top-wrapper -->
    <?php endif; ?>
</nav>
    <nav class="navbar navbar-default" style="background-color:#a9b2b1;height:5px;">
        <div class="container-fluid"  style="background-color:#a9b2b1;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                                    <div class="mobile-donate-button pull-right visible-xs">
                        <a class="btn btn-primary" href="<?php echo $rurl?>/index.php/coming-soon/"><i class="fa fa-usd"></i></a>
                    </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".mobile-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="hidden-lg hidden-md hidden-sm" style="display:block;padding:0px;height:auto;">
                <p style="color:Black;font-size:9px;line-height:15px;padding-top:10px;padding-left:10px;"><b>Nagaraja Rao, DTM </b></br style="line-height:10px;">Candidate for Second Vice President</br style="line-height:10px;">Toastmasters Intl.</b></p>
</div>
<!-- .navbar-brand -->
            </div> <!-- .navbar-header -->
            <div class="hidden-xs" style="display:block;">
                <div class="main-menu">
                                            <div class="donate-button pull-right hidden-md hidden-sm">
                                                            <a href="<?php echo $rurl?>/index.php/coming-soon/">Appointment </a>
                                                    </div>
<div class="collapse navbar-collapse">
                    <ul id="menu-primary-menu" class="menu nav navbar-nav navbar-right">
<?php


if (is_front_page()){?>
<li id="menu-item-3325" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2320 current_page_item menu-item-3324  has-menu-child  scroll"><a title="Home" href="<?php echo $rurl ?>/#home" style="font-size:16px;font-weight:bold;color:black !important;">Home</a></li>
<?php }else{?>
  <li id="menu-item-3325" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2320 current_page_item menu-item-3324  has-menu-child  scroll"><a title="Home" href="<?php echo $rurl ?>" style="font-size:16px;font-weight:bold;color:black !important;">Home</a></li>

<?php }?>
<li id="menu-item-3325" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3325   has-menu-child scroll"><a title="About" href="<?php echo $rurl?>/#about" style="font-size:16px;font-weight:bold;color:black;">About</a></li>
<li id="menu-item-3326" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3326   has-menu-child scroll"><a title="Why_Nagaraj" href="<?php echo $rurl?>/#why_naga" style="font-size:16px;font-weight:bold;color:black;">Why Nagaraja?</a></li>
<li id="menu-item-3331" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3331  has-menu-child scroll"><a title="Career_history" href="<?php echo $rurl?>/#career_history" style="font-size:16px;font-weight:bold;color:black;">Leadership Journey</a></li>
<li id="menu-item-3327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3327   has-menu-child scroll"><a title="Achievements" href="<?php echo $rurl?>/#achievements" style="font-size:16px;font-weight:bold;color:black;">Achievements</a></li>
<li id="menu-item-3328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3328  has-menu-child scroll"><a title="Testimonials" href="<?php echo $rurl?>/#testimonials" style="font-size:16px;font-weight:bold;color:black;">Testimonials</a></li>
<li id="menu-item-3329" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3329  has-menu-child scroll"><a title="Resources" href="<?php echo $rurl?>/#resources" style="font-size:16px;font-weight:bold;color:black;">Resources</a></li>

<li id="menu-item-3332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3332  has-menu-child scroll"><a title="Contact" href="<?php echo $rurl?>/#contact" style="font-size:16px;font-weight:bold;color:black;">Contact</a></li>
<li id="menu-item-3339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3334  has-menu-child scroll donate-button pull-right hidden-lg" style="
    position: relative;  margin-top: -2px;margin-left:0px;"><a href="<?php echo $rurl?>/index.php/coming-soon/" style="padding-left:10px;padding-right:10px;">Appointment </a></li>

</ul>

</div> </div>
            </div> <!-- /navbar-collapse -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="visible-xs">
                <div class="mobile-menu collapse navbar-collapse mobile-toggle">
                    <ul id="menu-primary-menu-1" class="menu nav navbar-nav">
                      <?php
if (is_front_page()){?>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2320 current_page_item menu-item-3384   has-menu-child scroll"><a title="Home" href="<?php echo $rurl ?>/#home" style="font-size:16px;color:black !important;">Home</a></li>
<?php }else{?>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2320 current_page_item menu-item-3384   has-menu-child scroll"><a title="Home" href="<?php echo $rurl ?>" style="font-size:16px;color:black !important;">Home</a></li>
<?php }?>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3325  has-menu-child scroll"><a title="About" href="<?php echo $rurl?>/#about" style="font-size:16px;color:black !important;">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3383  has-menu-child scroll"><a title="Why nagaraj" href="<?php echo $rurl?>/#why_naga" style="font-size:16px;color:black !important;">Why Nagaraja?</a></li>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3386  has-menu-child scroll"><a title="Career_history" href="<?php echo $rurl?>/#career_history" style="font-size:16px;color:black !important;">Leadership Journey</a></li>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3382  has-menu-child scroll"><a title="ACHIVEMENT" href="<?php echo $rurl?>/#achievements" style="font-size:16px;color:black !important;">Achievements</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3384  has-menu-child scroll"><a title="Testimonial" href="<?php echo $rurl?>/#testimonials" style="font-size:16px;color:black !important;">Testimonials</a></li>
      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3385  has-menu-child scroll"><a title="Resources" href="<?php echo $rurl?>/#resources" style="font-size:16px;color:black !important;">Resources</a></li>                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3387  has-menu-child scroll"><a title="Contact" href="<?php echo $rurl?>/#contact" style="font-size:16px;color:black !important;">Contact</a></li>
</ul>                </div> <!-- /.navbar-collapse -->
            </div>
        </div><!-- .container-->

    </nav>
</div> <!-- .header-wrapper -->
