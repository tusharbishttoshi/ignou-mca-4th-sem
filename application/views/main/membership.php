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
      <!--close laoder-->
      <!--avoid position div-->
      <div class="avoid-pos f-pos s-pos"></div>
      <div class="avoid-pos-two t-pos fo-pos"></div>
      <!--close avoid positin div-->
      <!-- banner section -->
      <div class="container-fluid memberonesec">
         <div class="container">
            <div class="row">
               <div class="col-sm-4 texbomember">
                  <h1 class="memotextban text-center"><span class="co-an">JOIN </span> <span class="usmemb"> MEMBERSHIP </span></h1>
               </div>
            </div>
         </div>
      </div>
      <!--close banner section -->
      <!-- write below banner-->
      <div class="container-fluid membertwosec">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 memform text-center">
                  <h2 class="memberhead text-center wow slideInRight" style="visibility: visible; animation-name: slideInRight;"> Apply For <span class="lokknow"> Membership </span> </h2>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">
                  <p>To,</p>
                  <p>RESPECTED PRESIDENT<br>DIDA FOUNDATION INTERNATIONAL</p>
                  <p>Sir,</p>
                  <p>I have understood through the good conduct of the constitution rules,bye-laws,table and code of conduct and direction of the organization you have provided and I belive in the full faith of the Organization Of Constitution and give me the assurance that I will honor the dignity of my post. Below according the Organization.</p>
                  <p>I also assure you that I will loyal to the Organization if any doubt in my conduct is found then you will have complete right to disciplinary action as per the Constitution of the Organization</p>
                  <p class="pado">So Please give me a chance to be a Member Of the Organization.</p>
               </div>
            </div>
         </div>
      </div>
      <!--close write below banner-->
      <!-- only form section-->
      <div class="container-fluid form-pad-use">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 inner-whole no-padding">
                  <form action="<?= base_url('joinus/formsub'); ?>" method="post" id="myform" class="form-submit">
                     <div class="title-form one-t">
                        <h1><i class="fa fa-envelope"></i> MEMBERSHIP FORM</h1>
                     </div>
                     <!--whole first row-->
                     <div class="col-sm-12 sno-col inner-main-sm-one">
                        <div class="col-sm-6 left-sno part-col-left-sm media-mar-all-bottom">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-user sm-icon"></i></span>
                              <input type="text" class="form-control sm-input-text" name="name" placeholder="Applicant Name" required>
                           </div>
                        </div>
                        <div class="col-sm-6 right-sno part-col-right-sm">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-user sm-icon"></i></span>
                              <input type="text" class="form-control sm-input-text" name="father" placeholder="Enter Father's/Mother's/Husband Name" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 sno-col inner-main-sm-one sm-top-mar">
                        <div class="col-sm-6 left-sno part-col-left-sm media-mar-all-bottom">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-mobile sm-icon"></i></span>
                              <input type="text" name="mobile" class="form-control sm-input-text" placeholder="Enter Mobile No." required>
                           </div>
                        </div>
                        <div class="col-sm-6 right-sno part-col-right-sm media-mar-all-bottom ee">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-paper-plane-o sm-icon"></i></span>
                              <input type="text" name="email" class="form-control sm-input-text" placeholder="Enter Email Id">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 sno-col inner-main-sm-one sm-top-mar">
                        <div class="col-sm-6 left-sno part-col-left-sm media-mar-all-bottom">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-street-view sm-icon"></i></span>
                              <select class="form-control form-sm-drop ap-type" name="gender">
                                 <option value="">Select Gender</option>
                                 <option value="MALE">Male</option>
                                  <option value="FEMALE">Female</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6 right-sno part-col-right-sm">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-list sm-icon"></i></span>
                              <input type="text" class="form-control sm-input-text" name="ssn" placeholder="Enter SSN or/ ID No.">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 sno-col inner-main-sm-one sm-top-mar">
                        <div class="col-sm-6 left-sno part-col-left-sm media-mar-all-bottom">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-calendar sm-icon"></i></span>
                              <input type="date" name="dob" class="form-control form-sm-drop ap-type dob-own" placeholder="DOB">
                           </div>
                        </div>
                        <div class="col-sm-6 right-sno part-col-right-sm">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-home sm-icon"></i></span>
                              <input type="text" class="form-control sm-input-text" name="address" placeholder="Residential Address" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 sno-col inner-main-sm-one sm-top-mar">
                        <div class="col-sm-6 left-sno part-col-left-sm media-mar-all-bottom">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-book sm-icon"></i></span>
                              <input type="text" class="form-control sm-input-text" placeholder="Highest Qualication - 10th/12th/Graduation(BBA,BCA,BSC,BA etc)" name="quali" required="">
                           </div>
                        </div>
                        <div class="col-sm-6 right-sno part-col-right-sm">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-briefcase sm-icon"></i></span>
                              <input type="text" class="form-control sm-input-text" name="ocupation" placeholder="Occupation" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 sno-col inner-main-sm-one sm-top-mar">
                        <div class="col-sm-6 left-sno part-col-left-sm media-mar-all-bottom">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-pencil sm-icon"></i></span>
                              <input type="text" class="form-control sm-input-text" name="feedback" placeholder="Give us feeback" required="">
                           </div>
                        </div>
                        <div class="col-sm-6 right-sno part-col-right-sm">
                           <div class="input-group sm-input-g">
                              <span class="input-group-addon sm-addon"><i class="fa fa-user sm-icon"></i></span>
                              <select class="form-control form-sm-drop ap-type" name="from2">
                                 <option value="" selected="">Are you with any other society</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 mar-two">
                        <ul class="list-inline brown">
                           <li style="color:grey;font-size:15px;font-weight:bold;">Upload image</li>
                           <li><input type="file" class="btn btn-own" name="image"></li>
                        </ul>
                     </div>
                     <div class="col-sm-12 both-btn a-l-f-one">
                        <div class="col-sm-6 a-l-f">
                           <br>
                           <button type="submit" class="btn btn-form-own hvr-float-shadow">Submit</button>
                        </div>
                        <div class="col-sm-6 text-right a-l-f-two">
                           <br>
                           <a type="button" class="btn btn-form-own hvr-float-shadow" href="membership.pdf" target="_blank">Download</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!--close only form section -->
      <!-- payment details-->
      <div class="container-fluid aimloksec">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 aimsec text-center">
                  <h2 class="aimsechead text-center wow slideInUp" style="visibility: visible; animation-name: slideInUp;"> Payment <span class="lokknow"> Details </span> </h2>
               </div>
               <div class="col-sm-12 wow slideInLeft text-center" style="visibility: visible; animation-name: slideInLeft;">
                  <div class="row">
                     <p>By becoming a lifetime member, you become a part of DFI life lifting works all over India&amp; Globally. You can start any Social work with this Membership. Congratulations and start lifting lives today!!!</p>
                  </div>
                  <div class="col-sm-3 payd a">
                     <p class="paydet a"> Monthly Membership <span class="rup a"> 500 $ </span> </p>
                     <div class="text-center">
                        <a class="btn btn-form-own hvr-float-shadow" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WUQVPDL3KX4AL&source=url">Join now</a>
                     </div>
                  </div>
                  <div class="col-sm-3 payd a">
                     <p class="paydet a"> One Year Membership <span class="rup a"> 5100 $ </span> </p>
                     <div class="text-center">
                        <a class="btn btn-form-own hvr-float-shadow" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WUQVPDL3KX4AL&source=url">Join now</a>
                     </div>
                  </div>
                  <div class="col-sm-3 payd b">
                     <p class="paydet b">   Five Year Membership <span class="rup b"> 21000 $  </span> </p>
                     <div class="text-center">
                        <a class="btn btn-form-own hvr-float-shadow" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WUQVPDL3KX4AL&source=url">Join now</a>
                     </div>
                  </div>
                  <div class="col-sm-3 payd c">
                     <p class="paydet c">  Life Time Membership <span class="rup c">  51000 $ </span> </p>
                     <div class="text-center">
                        <a class="btn btn-form-own hvr-float-shadow" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WUQVPDL3KX4AL&source=url">Join now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--close payment details-->
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
