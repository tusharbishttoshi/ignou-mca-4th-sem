<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Dida Foundation International</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="shortcut icon" href="<?= base_url('assets/img/fevicon.png'); ?>">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,300i,400,400i,500,600,700,800"  rel="stylesheet">
      <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
      <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.min.css">
      <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/hover-min.css">
      <!--counter number plugin-->
      <script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
      <script src="<?= base_url('assets/'); ?>js/waypoints.min.js"></script> 
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
      <!--avoid position div-->
      <div class="avoid-pos f-pos s-pos"></div>
      <div class="avoid-pos-two t-pos fo-pos"></div>
      <!--close avoid positin div-->
      <!-- whole donate part-->
      <!--poster-->
      <!--close poster-->
      <div class="container-fluid donateonesec">
         <div class="container">
            <div class="row">
               <div class="col-sm-4 texbodonate">
                  <h1 class="gallerytextban text-center"><span class="co-donate"> GIVE </span> <span class="usdonate"> DONATION </span></h1>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid donationtwosec">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 donationform text-center">
                  <h2 class="donationhead text-center  wow slideInRight" style="visibility: visible; animation-name: slideInRight;"> Donation <span class="lokknow"> Form </span> </h2>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <p class="donationpado  wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                     Help us by giving stationery , newpaper, computer &amp; furniture , clothes , medicines, food items for rural development, special/handicapped childrens , senior citizens &amp; education for poor children in our socitey.
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <form action="<?= site_url('contact/enquiry'); ?>" method="post" id="contact_form_donate" class="form-submit">
                     <div class="col-sm-12 left-sno part-col-left-sm media-mar-all-bottom do-only" id="donate-only">
                        <div class="input-group sm-input-g donate-on">
                           <span class="input-group-addon sm-addon"><i class="fa fa-user sm-icon"></i></span>
                           <input type="text" class="form-control sm-input-text" name="form_name" placeholder="Enter Your Name">
                        </div>
                     </div>
                     <div class="col-sm-12 left-sno part-col-left-sm media-mar-all-bottom" id="donate-only">
                        <div class="input-group sm-input-g donate-on">
                           <span class="input-group-addon sm-addon"><i class="fa fa-mobile sm-icon"></i></span>
                           <input type="text" class="form-control sm-input-text" name="form_phone" placeholder="Enter Mobile No.">
                        </div>
                     </div>
                     <div class="col-sm-12 left-sno part-col-left-sm media-mar-all-bottom" id="donate-only">
                        <div class="input-group sm-input-g donate-on">
                           <span class="input-group-addon sm-addon"><i class="fa fa-home sm-icon"></i></span>
                           <input type="text" class="form-control sm-input-text" name="form_address" placeholder="Enter Address">
                        </div>
                     </div>
                     <div class="col-sm-12 left-sno part-col-left-sm media-mar-all-bottom" id="donate-only">
                        <div class="input-group sm-input-g donate-on">
                           <span class="input-group-addon sm-addon"><i class="fa fa-paper-plane-o sm-icon"></i></span>
                           <input type="text" class="form-control sm-input-text" name="form_email" placeholder="Enter Email">
                        </div>
                     </div>
                     <div class="col-sm-12 form-pad-own don-form-pad donate-on wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                        <div class="form-group">
                           <label for="email"> I want to donate :</label>
                           <span class="radio_btn">Financial help - <input type="radio" name="d_type" checked="" value="F"> </span> 
                           <span class="radio_btn">Goods like clothes, food, books etc. - <input type="radio" name="d_type" value="C"></span>
                        </div>
                     </div>
                      <input type="hidden" value="Enquiry for donation " name="enq_type">
                     <div class="col-sm-12 left-sno part-col-left-sm media-mar-all-bottom" id="donate-only">
                        <div class="input-group sm-input-g donate-on">
                           <span class="input-group-addon sm-addon"><i class="fa fa-pencil sm-icon"></i></span>
                           <input type="text" class="form-control sm-input-text" name="form_message" placeholder="Enter Feedback">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <button type="submit" class="btn btn-form-own btn-don-own hvr-float-shadow">Submit</button>
                     </div>
                  </form>
               </div>
               <div class="col-md-5 mar-bot">
                  <img src="<?= base_url('assets/'); ?>img/donats.jpg">
               </div>
            </div>
         </div>
      </div>
      <!--close whole donate part-->
      <!--footer-->
      <?php include('common/footer.php'); ?>
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
