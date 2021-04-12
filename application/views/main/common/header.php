<nav class="navbar navbar-default">
     <div class="container toph">
        <div class="row">
           <div class="col-sm-3 left-details">
              <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm flip sm-pull-none sm-text-center mt-sm-15">
                 <li><a href="https://www.facebook.com/didafoundation/" class="socialabc" target="_blank"><i class="fa fa-facebook s-header-social text-white"></i></a></li>
                 <li><a href="https://twitter.com/DidaFoundation" class="socialabc" target="_blank"><i class="fa fa-twitter s-header-social text-white"></i></a></li>
                 <li><a href="https://www.youtube.com/channel/UC4nszP9rpt_iC1_6d1jBevA" class="socialabc" target="_blank"><i class="fa fa-youtube s-header-social text-white"></i></a></li>
                 <li><a href="#" class="socialabc" target="_blank"><i class="fa fa-instagram s-header-social text-white"></i></a></li>
                 <li><a href="#" class="socialabc" target="_blank"><i class="fa fa-linkedin s-header-social text-white"></i></a></li>
              </ul>
           </div>
           <span class="before"></span>
           <div class="col-sm-9 right-details">
              <ul class="list-inline adjust-text">
                 <li>
                    <p class="text-white left-t-w"><span class="cont"><span class="s-hide">HELPLINE -</span>  <i class="fa fa-phone sm-h-all"></i> +1 6124 23 9367 </span> </p>
                 </li>
                 <li>
                    <p class="text-white"><i class="fa fa-envelope sm-h-all"></i>didafoundationinternational@gmail.com  </p>
                 </li>
              </ul>
           </div>
        </div>
     </div>
     <div class="container-fluid">
        <div class="navbar-header">
           <button type="button" onclick="myFunction(this)" id="button-nav-cust" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
           </button>
           <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url('assets/'); ?>img/logo.png" alt="logo missing" title="logo" style="height:auto"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav navbar-right nav-own-a">
              <li><a class="btn btn-default btn-navownbone a" href="<?= base_url('joinus')?>">Join Us</a></li>
              <li></li>
              <li><a class="btn btn-default btn-navownbone b" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WUQVPDL3KX4AL&source=url" target="_blank">Donation</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-menu-own">
              <li class="active"><a href="<?= base_url(); ?>" class="anchor-a">Home</a></li>
              <li><a href="<?= base_url('about'); ?>">About</a></li>
              <li class="dropdown dropdown-large">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">OUR WORK<span class="caret"></span></a>
                 <ul class="dropdown-menu own-menu-drop">
                    <li><a href="<?= site_url('ourworks/economy'); ?>" class="hvr-sweep-to-right">Economy</a></li>
                    <li><a href="<?= site_url('ourworks/leadership'); ?>" class="hvr-sweep-to-right">Leadership</a></li>
                    <li><a href="<?= site_url('ourworks/technology'); ?>" class="hvr-sweep-to-right">Technology</a></li>
                    <li><a href="<?= site_url('ourworks/deathrights'); ?>" class="hvr-sweep-to-right">Death Rights</a></li>
                    <li><a href="<?= site_url('ourworks/sociallife'); ?>" class="hvr-sweep-to-right">Social Life</a></li>
                    <li><a href="<?= site_url('ourworks/educationandmorality'); ?>" class="hvr-sweep-to-right">Education & Morality</a></li>
                    <li><a href="<?= site_url('ourworks/scienceandresearch'); ?>" class="hvr-sweep-to-right">Science & Research</a></li>
                    <li><a href="<?= site_url('ourworks/healthandmedical'); ?>" class="hvr-sweep-to-right">Health & Medical</a></li>
                    <li><a href="<?= site_url('ourworks/conflictresolution'); ?>" class="hvr-sweep-to-right">Conflict Resolution</a></li>
                 </ul>
              </li>
              <!--<li><a href="""" class="hvr-underline-from-left">Our Placement</a></li>-->
              <li><a href="<?= base_url('gallery'); ?>">Gallery</a></li>
              <li><a href="<?= base_url('events'); ?>">EVENTS</a></li>
              <li><a href="<?= base_url('programs'); ?>">PROGRAMS</a></li>
              <!--<li><a href="""" class="hvr-underline-from-left">Events</a></li>-->
              <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
           </ul>
        </div>
     </div>
  </nav>
  <!--close navgation-->
  <!--loader part-->
 <!--<div id="loader"> </div>-->
 <!--close laoder-->