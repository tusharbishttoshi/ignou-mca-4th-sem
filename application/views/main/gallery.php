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
      <link rel="stylesheet" href="<?=base_url('assets/'); ?>css/style.css">
      <link rel="stylesheet" href="<?=base_url('assets/'); ?>css/animate.min.css">
      <link rel="stylesheet" href="<?=base_url('assets/'); ?>css/hover-min.css">
      <!--gallery-->
<link href='<?=base_url('assets/'); ?>css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
   <link href='<?=base_url('assets/'); ?>css/demo.css' rel='stylesheet' type='text/css'>
      <!--close gallery-->
      <!--counter number plugin-->
      <script src="<?=base_url('assets/'); ?>js/jquery.min.js"></script>
      <script src="<?=base_url('assets/'); ?>js/waypoints.min.js"></script> <!--this viewport is used only when its scroll top to down....not work on bottom to top-->
      <script src="<?=base_url('assets/'); ?>js/jquery.counterup.min.js"></script>
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




   <!--whole gallery-->
<div class="container-fluid galleryonesec">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 texbogallery">
                    <h1 class="gallerytextban text-center"><span class="co-gal">OUR </span> <span class="usgal"> GALLERY </span></h1>
                </div>
            </div>
        </div>
    </div>
    <!--close whole gallery-->


    <!--only gallery part-->
<div class="container-fluid maingallery">
        <div class="container">
            <div class="row">
                <!-- <div class="col-sm-12 galform text-center">
                    <h2 class="galhead text-center wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;"> IMAGE <span class="maingalown"> GALLERY </span> </h2>
                </div> -->
                
                <div class="col-sm-12 tabgal wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel with-nav-tabs panel-default nav-tan-own">
                                
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <!-- medical camp -->
                                        <!-- <div class="tab-pane fade in active" id="tab1default"> -->
                                            <div class="row">
                                            <?php foreach($gallery_img as $img){ ?>
                                             <div class="col-sm-3">
                                                    <img src="<?= base_url('assets/img/gallery/'.$img->img_path); ?>" width="300" height="200" style='margin-top:20px'>
                                             </div>
                                             <?php } ?>
                                            </div>
                                            
                                        <!-- </div> -->
                                        </div>

                                        <!-- close medical camp-->
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     
                  <!-- lightbox code-->


            </div>
        </div>
    </div>

    <!--close only gallery part-->

<?php include('common/footer.php'); ?>
      <!--close scroll-->
      <!--close footer-->
   </body>
   <!-- js files-->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
   <script src="<?= base_url('assets/'); ?>js/wow.min.js"></script>
   <!--gallery-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/simple-lightbox.js"></script>
   <script src="<?= base_url('assets/'); ?>js/custom.js"></script>
   <!--close gallery-->
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

  <!-- <script>
      var vids = $("video"); 
      
      $.each(vids, function(){
      
             this.controls = false; 
      
      }); 
      
   </script>-->
   <script>
      function myFunction(x) {
      
          x.classList.toggle("change");
      
      }
      
   </script>
<!-- <script>
      $("video").prop('muted', true);
      
        $("#home").click( function (){
          if( $("video").prop('muted') ) {
                $("video").prop('muted', false);
          } else {
            $("video").prop('muted', true);
          }
        });
   </script>-->
   </body>
</html>
