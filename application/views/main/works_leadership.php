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
                  <h1 class="contactextban text-center"><span class="concont">Leadership </span> <span class="uscon">  </span></h1>
               </div>
            </div>
         </div>
      </div>
       <div class="container-fluid event-whole sm-whole-all">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 heading-event text-center">
                  <h1 class="own-font">Leadership –ALLIANCE FOR REAL CHANGE (ARK)</h1>
               </div>
               <div class="col-md-12">
                    <p><b>L</b>eadership is the ability to move people to desired goals. People Oriented Leadership completely focuses on supporting, organizing and creating the people in a team. It requires participation of the leader and the led. ARK will encourage Kenyans to achieve set goals as a hardworking strong team with leaders completely involved. ARK will advise and help Kenyans whenever required in a friendly approach and pay attention to all involved in the tedious task of our nation’s building and productivity</p>
                   <p>DFI through ARK intends to partner with poor but potential Kenyans in supporting the young and the old to engage in being responsible through;</p>
                   <div class="pl-5">
                        <ul>
                            <li>
                                <p><b>Community Education  : </b>Community Education on the content of the constitution more so on the power of the citizens, their roles and responsibilities in nation building</p>
                            </li>
                            <li>
                                <p><b>Leadership Institutes : </b> Establishment of regional leadership institutes </p>
                            </li>
                            <li>
                                <p><b>Evaluatory conventions : </b> Hold annual evaluatory convention under BETCOM</p>
                            </li>
                            <li>
                                <p><b>Topical lectures  : </b> Topical lectures on leadership structure and levels under A Class with Dida     </p>
                            </li>
                        </ul>
                   </div>
                </div>
            </div>
         </div>
      </div>
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
  
   </body>
</html>
