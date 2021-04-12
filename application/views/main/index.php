<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Dida Foundation International</title>
       <link rel="shortcut icon" href="<?= base_url('assets/img/fevicon.png'); ?>">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,300i,400,400i,500,600,700,800"  rel="stylesheet">
      <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
      <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.min.css">
      <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/hover-min.css">
  
      <!--counter number plugin-->
      <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/waypoints.min.js"></script> <!--this viewport is used only when its scroll top to down....not work on bottom to top-->
      <script src="<?= base_url('assets/'); ?>js/jquery.counterup.min.js"></script>
      <script>
        jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
         });
         });
         
      </script>
    <script>
    $(window).load(function(){
    $('#loader').fadeIn('fast').delay('slow').fadeOut('fast');

    });
</script>
      <!--close counter number plugin-->
   </head>
   <body>
      <?php include('common/header.php'); ?>

      <!--video part-->
      <div class="container-fluid first-main-sec" id="home">
         <div class="overlay"></div>
         <video id="video" autoplay muted loop>
            <source src="<?= base_url('assets/'); ?>video/video.mp4" type="video/mp4">

         </video>
       <div class="col-sm-4 overl">
               <h1><a href="#rules" class="cust-h-g" onclick="toggleMute()" id="vol"><i class="fa fa-volume-down"></i></a></h1>
           <!---->
            <div></div></div>


      </div>
      <!--close video part-->
      <div class="col-sm-12 extra-div" id="un-extra">
      </div>
      <!--about part-->
      <section id="about-home">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 about-home-head wow fadeInLeft">
                  <h1>
                     Dida Foundation International (DFI)
                  </h1>
                  <p class="pwelcomeone-a text-justify">DFI is an International Charity registered in Minnesota and is under the Internal Revenue Service (IRS) in the United States of America.</p>
                   <p  class="pwelcomeone-a text-justify">
                       <b>Purpose within IRS Publication 557 Section 501(c) (3)</b>: Community Economic Empowerment, Human Rights Advocacy, Science & Research, Technology, Education & Morality through Scouting, Leadership & Advocacy, Society & Social works, Preventive Medicine & Health Care (Religious & Scientific Perspective) and Conflict Resolution.


                  </p>
                  <p class="pwelcometwo-b text-justify">Doubtless, education is the most powerful catalyst for social transformation. But child education cannot be done in isolation. A child will go to school only if the family, particularly the mother, is assured of healthcare and empowered. Moreover, when an elder sibling is relevantly skilled to be employable and begins earning, the journey of empowerment continues beyond the present generation.
                  </p>
                  <a class="btn btn-about-home hvr-float-shadow" href="<?= base_url('about'); ?>">Read more</a>
               </div>
               <div class="col-sm-3 h-e wow fadeInDown">
                  <div class="thumb thumbone">
                     <img src="<?= base_url('assets/img/'); ?>aboutus.jpg" alt="" class="img-responsive">
                  </div>
                  <h4 class="h-e-h">Our History</h4>
                  <p class="h-e-p">While the  most countries in the world is on the path to economic growth, poverty alleviation remains a challenge in a good number of countries in the globe, in Kenya for example, a country I was born, has nearly half of ..</p>
                    <a class="btn btn-about-home hvr-float-shadow" href="<?= base_url('about'); ?>">Read more</a>
               </div>
               <div class="col-sm-3 h-e wow fadeInRight animation-delay" style="visibility: visible;">
                  <div class="thumb thumbone">
                     <img src="<?= base_url('assets/img/'); ?>supporforchild.jpg" alt="" class="img-responsive">            
                  </div>
                  <h4 class="h-e-h">Support for Children</h4>
                  <p class="h-e-p">We provide talented, disadvantaged Kenyan youth with high school and university scholarships, intensive mentoring, leadership training and career preparation with the importance of quality education for Children </p>
                    <a class="btn btn-about-home hvr-float-shadow" href="<?= base_url('about'); ?>">Read more</a>
               </div>
            </div>
         </div>
      </section>
      <!--close about part-->
      <!--events-->
      <div class="container-fluid event-whole sm-whole-all">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 heading-event text-center">
                  <h1 class="own-font">Upcoming & Recent Events</h1>
               </div>
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators event">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" style="min-height: 300px;">
                      <?php $events = array_chunk($events, 2); $sn = 1;  foreach($events as $evn){  ?>
                     <div class="item <?= ($sn == 1)?'active':'';?>">
                         <?php foreach($evn as $ev){?>
                        <div class="col-sm-6 event-item wow fadeInRight animated" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight; opacity: 500;">
                           <div class="inner">
                              <div class="left-col">
                                 <img src="<?= base_url('assets/img/events/'.$ev->image); ?>" alt="">
                              </div>
                              <div class="right-col">
                                 <span class="date"><?= date('d', strtotime($ev->event_date));?></span>
                                 <span class="month"><?= date('F', strtotime($ev->event_date));?></span>
                                 <span class="time"><?= date('H:i a', strtotime($ev->event_date));?></span>
                              </div>
                           </div>
                           <div class="desc">
                              <a href="<?= site_url('events'); ?>">
                                 <h3><?= $ev->title; ?></h3>
                              </a>
                              <span class="text"><?= substr($ev->details, 0,50); ?>...
                              </span>
                           </div>
                        </div>
                         <?php } ?>
                     </div>
                      <?php $sn++; } ?>
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--close events-->
      <!-- why us-->
      <div class="container-fluid whyus-whole sm-whole-all">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 whole-event text-center sm-heading-all">
                  <h1>Where We Work</h1>
               </div>
               <div class="col-sm-12 inner-p">
                  <div class="sec-title text-center m-bottom4 wow slideInDown  animated" style="visibility: visible; animation-name: slideInDown;">
                     <p>We do whatever it takes to save the humanity. We can only ensure a quality education for 10 million children through the efforts of our partners. </p>
                  </div>
                  <div class="col-sm-12 wow fadeInDown   animated animated" data-wow-duration="1500ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInDown;">
                     <div class="col-sm-2">
                     </div>
                     <div class="col-sm-8">
                        <p class="whyheadpone text-center">
                        </p>
                     </div>
                     <div class="col-sm-2">
                     </div>
                  </div>
                  <div class="col-sm-3 wow fadeInLeft   animated animated" data-wow-duration="1500ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInLeft;">
                     <div class="col-sm-12 fea-col text-center m-bottom3">
                        <a href="#"> <img src="<?= base_url('assets/img/'); ?>onwhy.png" class="img-responsive" style="margin:auto;"></a>
                        <h3 class="whyheadone text-center">Fundraising for Welfare</h3>
                        <p class="whyheadpone text-center a"></p>
                     </div>
                     <div class="col-sm-12 fea-col text-center">
                        <img src="<?= base_url('assets/img/'); ?>twowhy.png" class="img-responsive" style="margin:auto;">
                        <h3 class="whyheadone text-center">Relief for Flood Affected People</h3>
                        <p class="whyheadpone text-center a">  </p>
                     </div>
                  </div>
                  <div class="col-sm-6 text-center single-center">     
                     <img class="img-responsive" src="<?= base_url('assets/img/'); ?>elec.png" style="padding-top:48px;">      
                  </div>
                  <div class="col-sm-3 wow fadeInRight   animated animated" data-wow-duration="1500ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInRight;">
                     <div class="col-sm-12 fea-col text-center m-bottom3">
                        <img src="<?= base_url('assets/img/'); ?>threewhy.png" class="img-responsive" style="margin:auto;">
                        <h3 class="whyheadone text-center">Social Helps</h3>
                        <p class="whyheadpone text-center a"> </p>
                     </div>
                     <div class="col-sm-12 fea-col text-center">
                        <div class="iconbox"><span class="icon-cloud-upload font25"></span></div>
                        <img src="<?= base_url('assets/img/'); ?>fourwhy.png" class="img-responsive" style="margin:auto;">
                        <h3 class="whyheadone text-center">Health & Medical Helps</h3>
                        <p class="whyheadpone text-center a"></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <!--close why us -->
         <!--causes-->
         <div class="container-fluid cause-whole sm-whole-all">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 heading-cause text-center">
                     <h1>Our Programs</h1>
                  </div>
                  <div class="col-sm-12 inner-cause-whole Rcent-Causes-Item-Wrapper">
                     <div class="row">
                         <?php foreach($program as $prm){?>
                        <div class="col-sm-4">
                           <div class="Causes-Item Causes-Item-margin">
                              <div class="Causes-Img"><img style="height:300px;" src="<?= base_url('assets/img/events/'.$prm->images); ?>" alt="image"></div>
                              <!-- /.Causes-Img -->
                              <div class="Causes-Text">
                                 <h3><?= $prm->title; ?></h3>
                                 <p><?= substr(strip_tags($prm->details),0,70); ?></p>
                                 <a href="<?= base_url('programs/detail/'.$prm->id); ?>" class="">Know More</a>
                              </div>
                              <!-- /.Causes-Text -->
                           </div>
                           <!-- /.Causes-Item -->
                        </div>
                         <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--close causes-->
         <!--counter plugin-->
         <div class="container-fluid counter-whole sm-whole-all company-history-containt-opac company-history-section ">
            <div class="company-history-shape-img-top"><img src="<?= base_url('assets/img/'); ?>shape-1.png" alt="shape-img"></div>
            <div class="row">
               <div class="company-history-containt-opact">
                  <div class="col-sm-3 f s text-center ">
                     <div class="ib">		
                        <img src="<?= base_url('assets/img/'); ?>fundrising.png">
                     </div>
                     <h1 class="hown"><span class="counter">1425</span></h1>
                     <h2>Fundrising</h2>
                  </div>
                  <div class="col-sm-3 f s text-center">
                     <div class="ib">
                        <img src="<?= base_url('assets/img/'); ?>volunteer.png">
                     </div>
                     <h1 class="hown"><span class="counter" style="padding-top:20px;">1200</span></h1>
                     <h3>Volunteer</h3>
                  </div>
                  <div class="col-sm-3 f s text-center">
                     <a href="#" class="hvr-float-shadow">
                        <div class="ib">
                           <img src="<?= base_url('assets/img/'); ?>donator.png">
                        </div>
                     </a>
                     <h1 class="hown"><span class="counter">201</span></h1>
                     <h3>Donator</h3>
                  </div>
                  <div class="col-sm-3 f s text-center">
                     <a href="#" class="hvr-float-shadow">
                        <div class="ib">
                           <img src="<?= base_url('assets/img/'); ?>raisefunds.png">
                        </div>
                     </a>
                     <h1 class="hown"><span class="counter">2000</span></h1>
                     <h3>Raised Funds</h3>
                  </div>
               </div>
               <div class="company-history-shape-img-bottom"><img src="<?= base_url('assets/img/'); ?>shape-2.png" alt="shape-img"></div>
            </div>
         </div>
         <!--close counter plugin-->
         <!-- testimonial-->
         <div class="container-fluid test-whole sm-all-whole">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 heading-test heading-sm-all text-center">
                     <h1>What Our Supporters Say</h1>
                  </div>
                  <div class="col-sm-12 wow zoomInDown">
                     <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                           </li>
                           <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                           </li>
                           <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                           </li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">
                           <!-- Quote 1 -->
                           <div class="item active">
                              <blockquote>
                                 <div class="row">
                                    <div class="testi-s-m col-sm-8 col-sm-offset-2">
                                       <p>A huge thanks to Dida foundation international for the continued support over the years. So honored to be part of DFI and its efforts to support amazing!</p>
                                       <small>Generation Rwanda</small>
                                    </div>
                                 </div>
                              </blockquote>
                           </div>
                           <!-- Quote 2 -->
                           <div class="item">
                              <blockquote>
                                 <div class="row">
                                    <div class="testi-s-m col-sm-8 col-sm-offset-2">
                                       <p>>A huge thanks to Dida foundation international for the continued support over the years. So honored to be part of DFI and its efforts to support amazing!</</p>
                                       <small>Someone famous</small>
                                    </div>
                                 </div>
                              </blockquote>
                           </div>
                           <!-- Quote 3 -->
                           <div class="item">
                              <blockquote>
                                 <div class="row">
                                    <div class="testi-s-m col-sm-8 col-sm-offset-2">
                                       <p>>A huge thanks to Dida foundation international for the continued support over the years. So honored to be part of DFI and its efforts to support amazing!</.</p>
                                       <small>Someone famous</small>
                                    </div>
                                 </div>
                              </blockquote>
                           </div>
                        </div>
                        <!-- Carousel Buttons Next/Prev -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--close testimonial-->
         <!-- video gallery-->
         <div class="container-fluid video-whole sm-all-whole">
            <div class="container">
               <div class="col-sm-12 heading-video heading-sm-all text-center">
                  <h1>Our Gallery</h1>
               </div>
               <div class="row">
                <?php foreach($gallery_img as $img){?>
                  <div class="col-sm-4 nopadding-gal">
                     <div class="embed-responsive embed-responsive-16by9" style="margin-top:20px;margin-bottom:20px;">
                        <img src="<?= base_url('assets/img/gallery/'.$img->img_path); ?>">
                     </div>
                  </div>
                <?php } ?>
                 
               </div>
                <hr>
               
               <div class="col-sm-12 text-center btn-video">
                  <a type="button" class="btn btn-v hvr-float-shadow" href="<?= base_url('gallery'); ?>">See More</a>
               </div>
            </div>
         </div>
      </div>
      <!--close video gallery-->
      <!-- volunterss-->
      <section id="last-uni">
         <div class="container pb-50">
            <div class="section-t text-center">
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 col-sm-12 col-xs-12 volunt">
                     <h2 class="volunty">Become a Volunteer</h2>
                     <p>Only charities meeting specific tests of fiscal accountability, governance, and programmatic impact may participate in the Dida Foundation International</p>
                  </div>
               </div>
            </div>
            <div class="section-content">
               <div class="row">
                  <div class="col-sm-6 sm-text-center wow slideInLeft">
                     <a href="membership.php"><img src="<?= base_url('assets/img/'); ?>volunt.png" alt=""></a>
                  </div>
                  <div class="col-sm-6 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                     <h3 class="formbecvol bg-theme-colored p-15 pl-30 mb-0 text-white">Become a Volunteer</h3>
                     <form id="contact_form" class="bg-light p-30 pb-15 form-submit" method="post" enctype="multipart/form-data" action="<?= site_url('contact/enquiry'); ?>">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Name <small>*</small></label>
                                 <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control only-border">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Address <small>*</small></label>
                                  <input type="hidden" value="Enquiry from home page" name="enq_type">
                                 <input name="form_address" class="form-control required only-border" type="text" placeholder="Enter Address">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Mobile <small>*</small></label>
                                 <input name="form_phone" type="text" placeholder="Enter Mobile" required="" class="form-control only-border">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <label>Email <small>*</small></label>
                                 <input name="form_email" class="form-control required email only-border" type="email" placeholder="Enter Email">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Message <small>*</small></label>
                           <textarea name="form_message" class="form-control last-text required" rows="5" placeholder="Enter your message only-border"></textarea>
                        </div>
                       
                        <div class="form-group">
                           <input name="form_botcheck" class="form-control" type="hidden" value="">
                           <button type="submit" class="btn btn-become-form btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--close volunters-->
  <!--our partners-->
<div class="container-fluid icon-s" id="swipe_s">
         <div class="container">
            <div class="row">
             <div class="cl-home-head col-sm-12">
                  <h1 class="cl-e text-center wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">Our <span class="same-all-span webzag-contact">Partners</span></h1>
               </div>
               <div class="col-sm-12">
                  <div id="exampleSlider" class="ms-animating">
                     <div class="MS-content"><div class="item" style="margin-left: -119.399px;">
                           <img src="<?= base_url('assets/img/'); ?>client8.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client9.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client10.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client1.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client2.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client3.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client4.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client5.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client6.png" class="book_l">
                        </div><div class="item">
                           <img src="<?= base_url('assets/img/'); ?>client7.png" class="book_l">
                        </div></div>
                     <!-- <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        </div>-->
                  </div>
               </div>
            </div>
         </div>
      </div>


  <?php include('common/footer.php'); ?>
      <!--close scroll-->
      <!--close footer-->
   </body>
   <!-- js files-->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



   <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>

   <script src="<?= base_url('assets/'); ?>js/wow.min.js"></script>
    <!-- our partners-->  <script src="<?= base_url('assets/'); ?>js/multislider.min.js"></script> <!--close our parnters-->
   <script>
      new WOW().init();
      
   </script>
   <script>
      $(function(){
      
         $(document).on( 'scroll', function(){
      
       
      
            if ($(window).scrollTop() > 100) {
      
               $('.scroll-top-wrapper').addClass('show');
      
            } else {
      
               $('.scroll-top-wrapper').removeClass('show');
      
            }
      
         });
      
       
      
         $('.scroll-top-wrapper').on('click', scrollToTop);
      
      });
      
       
      
      function scrollToTop() {
      
         verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
      
         element = $('body');
      
         offset = element.offset();
      
         offsetTop = offset.top;
      
         $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
      
      }
      
   </script>

   <!--our partnes-->
     <script>
         $('#exampleSlider').multislider({
             interval: 4000,
             slideAll: true,
         continuous: true,
             duration: 1500
         });
      </script>

      <!--our partners-->
   <script>
      $('.dropdown-menu').click(function(e) {
      
          e.stopPropagation();
      
      });
      
            
      
   </script>
   <script>
      $(function(){
       
        $(document).on( 'scroll', function(){
       
          if ($(window).scrollTop() > 100) {
            $('.scroll-top-wrapper').addClass('show');
          } else {
            $('.scroll-top-wrapper').removeClass('show');
          }
        });
       
        $('.scroll-top-wrapper').on('click', scrollToTop);
      });
       
      function scrollToTop() {
        verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
        element = $('body');
        offset = element.offset();
        offsetTop = offset.top;
        $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
      }
   </script>
   <script>
      jQuery(document).ready(function($) {
      
       $(window).scroll(function() {
      
         var scrollPos = $(window).scrollTop(),
      
             navbar = $('.navbar-default');
      
      
      
         if (scrollPos > 200) {
      
           navbar.addClass('change-color');
      
         } else {
      
           navbar.removeClass('change-color');
      
         }
      
       });
      
      });
      
   </script>
   <script>
      jQuery(document).ready(function($) {
      
       $(window).scroll(function() {
      
         var scrollPos = $(window).scrollTop(),
      
             color = $('.navbar-default .navbar-nav > li > a');
      
      
      
         if (scrollPos > 200) {
      
           color.addClass('change-colora');
      
         } else {
      
           color.removeClass('change-colora');
      
         }
      
       });
      
      });
      
   </script>
   <script>
      jQuery(document).ready(function($) {
      
       $(window).scroll(function() {
      
         var scrollPos = $(window).scrollTop(),
      
             color = $('.dropdown-menu.nav-drop-cust');
      
      
      
         if (scrollPos > 200) {
      
           color.addClass('change-dropback');
      
         } else {
      
           color.removeClass('change-dropback');
      
         }
      
       });
      
      });
      
   </script>
   <script>
      jQuery(document).ready(function($) {
      
       $(window).scroll(function() {
      
         var scrollPos = $(window).scrollTop(),
      
             color = $('.dropdown-menu.nav-drop-cust > li > a');
      
      
      
         if (scrollPos > 200) {
      
           color.addClass('change-dropa');
      
         } else {
      
           color.removeClass('change-dropa');
      
         }
      
       });
      
      });
      
   </script>
   <script>
      jQuery(document).ready(function($) {
      
       $(window).scroll(function() {
      
         var scrollPos = $(window).scrollTop(),
      
             color = $('.dropdown-menu.nav-drop-cust > li > a:hover');
      
      
      
         if (scrollPos > 100) {
      
           color.addClass('change-dropah');
      
         } else {
      
           color.removeClass('change-dropah');
      
         }
      
       });
      
      });
      
   </script>
   <script>
      jQuery(document).ready(function($) {
      
       $(window).scroll(function() {
      
         var scrollPos = $(window).scrollTop(),
      
             toph = $('.container.toph');
      
      
      
         if (scrollPos > 50) {
      
           toph.addClass('change-toph');
      
         } else {
      
           toph.removeClass('change-toph');
      
         }
      
       });
      
      });
      
   </script>
   <script>
      jQuery(document).ready(function($) {
      
       $(window).scroll(function() {
      
         var scrollPos = $(window).scrollTop(),
      
             navbrand = $('.navbar-brand > img');
      
      
      
         if (scrollPos > 200) {
      
           navbrand.addClass('change-navb');
      
         } else {
      
           navbrand.removeClass('change-navb');
      
         }
      
       });
      
      });
      
   </script>
   <!--close navbar first n used for both menu and <a> color change on scroll-->
   <!--collapsed button-->
   <script>
      $(document).ready(function(){
       $("#click").click(function(){
          $(".container-fluid.countown").slideToggle('slow');
         $("i", this).toggleClass("fa fa-caret-down fa fa-caret-up");
      
       });
      }); 
       
   </script>
   <!--close collapsed button--->

   <!--change audio button-->
  <script>
      $(document).ready(function(){
       $("#vol").click(function(){
         $("i", this).toggleClass("fa fa-volume-down fa fa-volume-up");
      
       });
      }); 
       
   </script>
   <!--close change audio button -->
   <!-- slide dropdown code-->
   <script>
      $(document).ready(function(){
      
          $(".dropdown").hover(            
      
              function() {
      
                  $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("fast");
      
                  $(this).toggleClass('open');        
      
              },
      
              function() {
      
                  $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("fast");
      
                  $(this).toggleClass('open');       
      
              }
      
          );
      
      });
      
   </script> 
   <script>
      document.getElementById('video').play();
      
               
   </script>
   <script>
      var vids = $("video"); 
      
      $.each(vids, function(){
      
             this.controls = false; 
      
      }); 
      
   </script>
  
      <script>
      function myFunction(x) {
      
          x.classList.toggle("change");
      
      }
      
   </script>
 
<script>
function toggleMute() {

  var video=document.getElementById("video");

  if(video.muted){
    video.muted = false;
  } else {
    debugger;
    video.muted = true;
    video.play()
  }

}
      </script>


   </body>
</html>