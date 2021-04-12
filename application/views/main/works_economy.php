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
                  <h1 class="contactextban text-center"><span class="concont">Economy </span> <span class="uscon">  </span></h1>
               </div>
            </div>
         </div>
      </div>
       <div class="container-fluid event-whole sm-whole-all">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 heading-event text-center">
                  <h1 class="own-font">Economy- SUNRISE SERVICES LIMITED (SSL)</h1>
               </div>
               <div class="col-md-12">
                    <p><b>F</b>or economy to growth, Kenyans must increase in their capacity to produce goods and services within a specific period of time. Economic growth is a long-term expansion in the productive potential of the economy to satisfy the wants of individuals in the society. Sustained economic growth of a country’ has a positive impact on the national income and level of employment, which further results in higher living standards. <br>
For poverty to be eradicated, all Kenya must focus on production; when each one of us can produce what he/she needs, poverty will be history and when we can produce more than our needs, then Kenya can export which is a good economic indicator</p>
                   <p>Sunrise Services Limited is a company limited by shares and incorporated in Kenya under the companies act; it acts as an Umbrella Company to several businesses registered under different names, providing numerous services geared towards empowering communities from many angles. We are dedicated to and passionate about the opportunity to serve our clients. The company’s pride is to perform a variety of services, for Institutional, Public and Private Owners, competently and competitively. We combine the knowledge, experience, innovation, and skills of our own staff to make every job efficient and we ensure it is executed to the best quality. </p>
                   <p>Sunrise is bent on improving various local and regional market performances by providing oriented management, problem solving and finding new and better ways of doing things, to realize that we offer the following services independently under affiliate business names: - </p>
                   <p>DFI through BETCOM & SSL intends to partner with poor but potential Kenyans in supporting the young and the old to engage in production in the following areas;</p>
                   <div class="pl-5">
                        <ul>
                            <li>
                                <p><b>Agriculture : </b> we will grow and increase the efficiency of the Agricultural Sector. Expanding and Improving this Sector Increases Food Output, Drives Food Security, Increases Employment, Drives Sustainability, Increases Exports, Strengthens our Financial Standing and Improves the Health of the Population by leasing of land, hiring of machinery, provision of seeds and fertilizers.  The startup is to be refunded without interest. Profit and loss is usually shared on agreed %.</p>
                            </li>
                            <li>
                                <p><b>Livestock : </b> buying of dairy cattle, dairy goats, securing and raising structures, buying grass, availing of enough animals for Abrahamic annual sacrifices on affordable terms for low income earners </p>
                            </li>
                            <li>
                                <p><b>Mining : </b> Helping communities with mining opportunities in provision of necessary tools for the trade </p>
                            </li>
                            <li>
                                <p><b>Tourism : </b> Assisting civil servants and teachers tour & travel to inevitable historic sites on a check off system, promote local tourism  </p>
                            </li>
                            <li>
                                <p><b>Construction : </b> Construction of project houses for poor land owners on pay to own program </p>
                            </li>
                            <li>
                                <p><b>Bee Keeping : </b> Provision hives, provision of protective gears, training on bee management </p>
                            </li>
                            <li>
                                <p><b>Environmental conservation activities : </b> tree planting, use of solar energy instead of cutting trees for charcoal burning, community campaign programs on climate change</p>
                            </li><li>
                                <p><b>The cultivation of new markets in emerging Counties or interested nations : </b> as production increases, new markets must be sorted </p>
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
