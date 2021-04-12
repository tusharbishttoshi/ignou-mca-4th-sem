<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Dida Foundation International</title>
      <meta charset="utf-8">
       <link rel="shortcut icon" href="<?= base_url('assets/img/fevicon.png'); ?>">
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
      <!--close navgation-->
      <?php include('common/header.php'); ?>
      <!--avoid position div-->
      <div class="avoid-pos f-pos s-pos"></div>
      <div class="avoid-pos-two t-pos fo-pos"></div>
      <!--close avoid positin div-->
      <!--whole content -->
      <!--contact banner-->
      <div class="container-fluid contactonesec">
         <div class="container">
            <div class="row">
               <div class="col-sm-4 texbocontact">
                  <h1 class="contactextban text-center"><span class="concont">CONTACT </span> <span class="uscon"> US </span></h1>
               </div>
            </div>
         </div>
      </div>
      <!--close contact banner-->
      <!--contact form section-->
      <div class="container-fluid contactformmain" id="contact-page">
         <div class="container animated fadeIn">
            <div class="row">
               <div class="text-center">
                  <h1 class="same-all-heading contact-heading-content-own text-center wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Get in Touch <span class="same-all-span webzag-contact wow slideInDown" style="visibility: visible; animation-name: slideInDown;">With Us</span></h1>
               </div>
               <p class="contact-head-p text-center wow slideInDown" style="visibility: visible; animation-name: slideInDown;">If you have any kind of clarification, don’t hesitate to contact us.</p>
               <hr style="margin-top:21px;margin-bottom:32px;">
               <div class="col-sm-12" id="parent">
                  <div class="col-sm-6 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8171113.995226977!2d33.40791929425772!3d0.16510305956450197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182780d08350900f%3A0x403b0eb0a1976dd9!2sKenya!5e0!3m2!1sen!2sin!4v1554944178805!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                  <div class="col-sm-6 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                     <form action="<?= site_url('contact/enquiry'); ?>" class="contact-form form-submit" method="post">
                        <div class="form-group">
                           <input type="text" class="form-control s topmar" id="name" name="form_name" placeholder="Name">
                        </div>
                        <div class="form-group form_left">
                           <input type="email" class="form-control s" id="email" name="form_email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control s" id="phone" name="form_phone"  placeholder="Mobile No." required="">
                        </div>
                         <div class="form-group form_left">
                           <input type="text" class="form-control s" name="form_address" placeholder="Address" required="">
                        </div>
                         <input type="hidden" value="Enquiry from contact page" name="enq_type">
                        <div class="form-group">
                           <textarea class="form-control textarea-contact sa" rows="5" id="comment" name="form_message" placeholder="Type Your Message/Feedback here..." required=""></textarea>
                           <br>
                        </div>
                        <button class="btn btn-default btn-send" type="submit"> <span class="glyphicon glyphicon-send"></span> Send </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid contactformmain-two wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
         <div class="row">
            <div class="container second-portion">
               <!-- Boxes de Acoes --> 
               <script>
                  $(document).ready(function(){
                      $("#pick-first").click(function(){
                          $(".text-own-first-first.item.active").hide();
                         $(".text-own-first-sec.item").show();
                      });
                  });
               </script>
               <script>
                  $(document).ready(function(){
                      $("#reverse-first").click(function(){
                          $(".text-own-first-first.item.active").show();
                         $(".text-own-first-sec.item").hide();
                      });
                    
                  });
               </script>
               <script>
                  $(document).ready(function(){
                      $("#pick-sec").click(function(){
                          $(".text-own-sec-first.item.active").hide();
                         $(".text-own-sec-sec.item").show();
                      });
                    
                  });
               </script>
               <script>
                  $(document).ready(function(){
                      $("#reverse-sec").click(function(){
                          $(".text-own-sec-sec.item").hide();
                         $(".text-own-sec-first.item.active").show();
                      });
                    
                  });
               </script>
               <script>
                  $(document).ready(function(){
                      $("#pick-third").click(function(){
                          $(".text-own-third-first.item.active").hide();
                         $(".text-own-third-sec.item").show();
                      });
                    
                  });
               </script>
               <script>
                  $(document).ready(function(){
                      $("#reverse-third").click(function(){
                          $(".text-own-third-sec.item").hide();
                         $(".text-own-third-first.item.active").show();
                      });
                    
                  });
               </script>
               <div class="col-xs-12 col-sm-6 col-lg-4">
                  <div class="box">
                     <div class="icon">
                        <div class="info">
                           <img src="<?= base_url('assets/'); ?>img/contact/phone.png" class="img-responsive same-contact-row phone-own-contact">
                        </div>
                        <div class="carousel-inner" style="min-height: 0px;">
                           <div class="text-own-first-first item active" id="pick-first">
                              <p>CLICK HERE
                              </p>
                           </div>
                           <div class="text-own-first-sec item">
                              <p class="phone-same phone-first"> +1 6124 23 9367</p>
                              <p class="phone-same phone-first"> +254 729 22 6674</p>
                           </div>
                        </div>
                     </div>
                     <div class="space"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-lg-4">
                  <div class="box">
                     <div class="icon">
                        <div class="info">
                           <img src="<?= base_url('assets/'); ?>img/contact/mail.png" class="img-responsive same-contact-row phone-own-contact">
                        </div>
                        <div class="carousel-inner">
                           <div class="text-own-sec-first item active" id="pick-sec" style="">
                              <p>CLICK HERE
                              </p>
                           </div>
                           <div class="text-own-sec-sec item" style="display: none;">
                              <p class="phone-same phone-first"> didafoundationinternational@gmail.com</p>
                           </div>
                        </div>
                     </div>
                     <div class="space"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-lg-4">
                  <div class="box">
                     <div class="icon">
                        <div class="info">
                           <img src="<?= base_url('assets/'); ?>img/contact/office.png" class="img-responsive same-contact-row phone-own-contact">
                        </div>
                        <div class="carousel-inner">
                           <div class="text-own-third-first item active" id="pick-third">
                              <p>CLICK HERE
                              </p>
                           </div>
                           <div class="text-own-third-sec item">
                              <p class="phone-same phone-third">222 S 9th Street, Suite 1600 Mineapolis, MN 55402 USA</p>
                               <p class="phone-same phone-third">78943 - 006200, Suite 1 Optimum House, General Wairuigu Street, Nairobi 
Kenya</p>
                           </div>
                        </div>
                     </div>
                     <div class="space"></div>
                  </div>
               </div>
               <!-- /Boxes de Acoes -->
               <!--My Portfolio  dont Copy this --> 
            </div>
         </div>
      </div>
      <!--close contact form section -->
      <!--close whole content0-->
      <!--footer-->
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
      $("video").prop('muted', true);
      
        $("#home").click( function (){
          if( $("video").prop('muted') ) {
                $("video").prop('muted', false);
          } else {
            $("video").prop('muted', true);
          }
        });
   </script>
   </body>
</html>
