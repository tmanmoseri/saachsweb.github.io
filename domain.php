<?php
include('submit.php');
include('DB.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="images/jpg" href="logo.jpg">
    <title>SAACHS &mdash; South African Association of Campus Health Services </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

      <div class="bg-div">
        <img class="logo-img" src="images/logo.jpg" width="70" height="70" ALT="align box" ALIGN=CENTER>
         </div>
      <div class="container">



        <a class="navbar-brand" href="index.php">SAACHS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About-us</a></li>
            <li class="nav-item"><a href="domain.html" class="nav-link">News-letters</a></li>
            <li class="nav-item"><a class="nav-link" href="https://sacoronavirus.co.za">Covid-19</a></li>

            <li class="nav-item"><a href="contact.html" class="nav-link">Contact-us</a></li>
            <li class="nav-item cta"><a href="uploadevents.html" class="nav-link"><span>Get started</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <?php
          $i=1;
          $sql="select * from `images`";
          $qry=mysqli_query($con,$sql) or die(mysqli_error($con));

          while($row=mysqli_fetch_array($qry))
          {

      ?>
      <div class="slider-item" style="background-image: url(images/logo.jpg);">
        <div class="overlay"></div>
        <div class="container-fluid">

          <div class="row slider-text align-items-center" data-scrollax-parent="true">


            <div class="col-md-5 wrap col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '10%' }">
              <h2 class="mb-4 mt-5" data-scrollax="properties: { translateY: '10%', opacity: 1.6 }">
            <?php echo  $row['fname'] ?></h2>
              <p class="mb-4 mb-md-5 sub-p" data-scrollax="properties: { translateY: '20%', opacity: 1.4 }">
          <?php echo $row['content'] ?>  </p>

          </p>
            </div>

            <div class="col-md-7 ftco-animate">

            <img src="upload/<?php echo $row['file'];?>" class="img-fluid" alt="" />
              </div>


            </div>
        </div>
      </div>
      <?php
           $i++;
         }
      ?>
		</section>


    <section id="publication" class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Publications</h2>
            <p>If you would like a copy of a publication, please use the contact form on the <a href="contact.html">Contact us</a> page.</p>
          </div>
        </div>


    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row">


                  <?php
                      $i=1;
                      $sql="select * from `news`";
                      $qry=mysqli_query($con,$sql) or die(mysqli_error($con));

                      while($row=mysqli_fetch_array($qry))
                      {

                  ?>

                   <div class="col-md-12">
                     <div class="card">
                      <div class="card-header">
                      <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">
                        <?php echo  $row['fname'] ?> <span class="collapsed">
                          <i class="icon-plus-circle"></i></span>
                          <span class="expanded"><i class="icon-minus-circle">
                          </i>
                        </span>
                      </a>
                    </div>
                    <div id="menuone" class="collapse show">
                      <div class="card-body">
                        <p> <?php echo $row['content'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                     $i++;
                   }
                ?>


				    </div>
    			</div>
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
       <div class="container">
         <div class="row mb-5">
           <div class="col-md">
             <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2">SAACHS</h2>
               <p>We are an association of tertiary institutions in South Africa providing primary and occupational health care on our campuses.
    </p>
               <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                 <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                 <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                 <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
               </ul>
             </div>
           </div>
           <div class="col-md">
             <div class="ftco-footer-widget mb-4 ml-md-5">
               <h2 class="ftco-heading-2">Unseful Links</h2>
               <ul class="list-unstyled">
                 <li><a href="#" class="py-2 d-block">Home</a></li>
                 <li><a href="#" class="py-2 d-block">About</a></li>
                 <li><a href="#" class="py-2 d-block">Covid-19</a></li>
                 <li><a href="#" class="py-2 d-block">News-letter</a></li>
                 <li><a href="#" class="py-2 d-block">Contact</a></li>

               </ul>
             </div>
           </div>

           <div class="col-md">
             <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2">Office</h2>
               <div class="block-23 mb-3">
                 <ul>
                   <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                   <li><a href="#"><span class="icon icon-phone"></span><span class="text">27 (0)31 2604506</span></a></li>
                   <li><a href="#"><span class="icon icon-envelope"></span><span class="text">cheevers@ukzn.ac.za</span></a></li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-12 text-center">

             <p><
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://androseriesdev.ml" target="_blank">Andro series Developers</a>
    </p>
           </div>
         </div>
       </div>
     </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    </body>
    </html>
