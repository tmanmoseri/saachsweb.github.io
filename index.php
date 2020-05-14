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

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-md-flex">
          <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/about.jpg);">
          </div>
          <div class="col-md-6 ftco-animate p-md-5">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">Mission</a>

                  <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Vission</a>

                  <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Objective</a>
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">

                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                    <div>
                      <h2 class="mb-4">Mission statement</h2>
                      <p>This association of health services supporting academic activities at tertiary educational institutions in South Africa, strives to:
                    <ul>
                      <li>initiate, promote, encourage, organise and foster a liaison between members in the interest of campus health care.</li>
                      <li>effectively promote and facilitate comprehensive primary health care using a patient-centred,multi-disciplinary approach.</li>
                      <li>make an academic contribution through research of an individual or collective nature.</li>
                      <li>encourage and promote cost effective practice management, and service excellence through ongoing evaluation.</li>
                    </ul>
                    </p>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                    <div>
                      <h2 class="mb-4">Vission statement</h2>
                      <p>To be recognized nationally and internationally as a professional health care association that aspire to promote the provision of accessible, equitable and holistic health care to communities with the universities.</p>

                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                    <div>
                      <p>Ohe main objectives of these association are, and shall be:
                    <ol>
                      <li>To initiate, promote, encourage, organise foster a liaison between its members and othe professional organizations with similar interest in campus health care.</li>
                      <li>To encourage the exchange of ideas among members with regards to campus health care.</li>
                      <li>To undertake and report on research projects of an individual or collectivenature.</li>
                      <li>To implement evidence based and best practises.</li>
                    </ol>
                    </p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Team members</span>
            <h2 class="mb-4">NEC MEMBERS</h2>
            <p>The national executive committee is elected at the Annual General meeting(AGM) tha takes place at the Congress of the Association in January of each year. The period of service each commitee serve is two years. however, the position of treasurer is held by one elected member for as long as possible for the sake of continuity. One member is elected from the institution hosting the next conference.</p>
          </div>
        </div>

        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">

              <div class="item">
                <div class="testimony-wrap p-6 pb-6">
                  <div class="user-img mb-6" style="background-image: url(images/d.jpeg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <p class="name">MS Molimo Geya</p>
                    <span class="position">SAACHS - Chairperson</span>
                  <div class="text">
                    <p class="mb-4">Ms Molimo Geya is a Manager: Primary Health Care Service at University of Johannesburg focusing on students’ health and well-being. She is passionate about young people and hope to bring health services as close to them as possible.<br><br>
                  In 2020 she was elected as a chairperson of SAACHS, where her responsibilities includes providing leadership and ensure the Committee functions properly.</p>

                  <p class="name">Contact details</p>
                  <p>Tell: +27 (0)11 559 3800</p>
                  <p>Email: Molimig@uj.ac.za</p>

                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap p-6 pb-6">
                  <div class="user-img mb-6" style="background-image: url(images/f.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <p class="name">Ms Mapeete Rasoaisi</p>
                    <span class="position">SAACHS - Deputy Chairperson</span>
                  <div class="text">
                    <p class="mb-4">Ms Mapeete Rasoaisi is a Head of Department at Campus Health Care Center in North West University Vanderbijlpark, Gauteng. She is passionate about assisting young people living with mental health and HIV/AIDS in accessing help within the campus and therefore finishing their studies<br><br>
                  In 2020 she was elected as a deputy chairperson of SAACHS, where her responsibilities includes providing leadership, ensure the Committee functions properly and perform all chairperson duties in her absentia or delegated.</p>

                  <p class="name">Contact details</p>
                  <p>Tell: +27 (0)11 112 3455</p>
                  <p>Email: Mapeeterasoaisi@gmail.com</p>

                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap p-6 pb-6">
                  <div class="user-img mb-6" style="background-image: url(images/a.jpeg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <p class="name">MS Mahlodi Maphakela</p>
                    <span class="position">SAACHS - Secretary</span>
                  <div class="text">
                   <p class="mb-5">Ms Mahlodi Maphakela is an Occupational Health Nurse currently working as Clinical Nurse Practitioner at University of Limpopo. She is also a co-supervisor and co-coder for MPH students. She is aspire to start PHD in 2021.
</p><p>In 2020 she was elected as a Secretary of SAACHS, where her responsibilities includes writing memos, file and retrieve corporate documents, records and reports
</p>

                  <p class="name">Contact details</p>
                  <p>Tell: +27 (0)15 268 3561</p>
                  <p>Email: mahlodi.maphakela@ul.ac.za</p>

                  </div>
                </div>
              </div>


              <div class="item">
                <div class="testimony-wrap p-6 pb-6">
                  <div class="user-img mb-6" style="background-image: url(images/e.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <p class="name">Mr Mxolelwa mthethwa</p>
                    <span class="position">SAACHS - Deputy Secretary General</span>
                  <div class="text">
                    <p class="mb-5">Mr Mxolelwa mthethwa is a clinical nurse practitioner currently working as HAST co-ordinator HIV/AIDS at Unizulu campus. he is passionate about wellbeing of young communities</p>

                    <p>in 2020 he was elected as a debuty secretaty of SAACHS, where his responsibilities include writing memos , file and retrieve corporate documents, records and reports assisting the secretory. </p>

                  <p class="name">Contact details</p>
                  <p>Tell: +27 (0)</p>
                  <p>Email: .ac.za</p>

                  </div>
                </div>
              </div>


              <div class="item">
                <div class="testimony-wrap p-6 pb-6">
                  <div class="user-img mb-6" style="background-image: url(images/c.jpeg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <p class="name">Dr Annah Sefolosha</p>
                    <span class="position">SAACHS - Treasure</span>
                  <div class="text">
                   <p class="mb-5">Dr Annah Sefolosha is a R/N, RM and OHN. She is currently working as Head of Department, Directorate of Health and Wellness at Tshwane University of Technology. Her responsibility being managing PHC services including HIV and counselling services. Her interest is in sexual and reproductive health of the youth.
</p><p>In 2020 she was elected as a treasurer of SAACHS, where her responsibilities includes providing financial advice to executive, reporting financial expenditures/statements and etc.
</p>

                  <p class="name">Contact details</p>
                  <p>Tell: +27 (0)12 382 4414</p>
                  <p>Email: annah.sefolosha@tut.ac.za</p>

                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap p-6 pb-6">
                  <div class="user-img mb-6" style="background-image: url(images/b.jpeg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <p class="name">Mr Tshidiso Ntshabele</p>
                    <span class="position">SAACHS - Editor in chief</span>
                  <div class="text">
                    <p class="mb-5">Mr Tshidiso Ntshabele is a PHC Nurse Practitioner at University of Johannesburg. He is currently serving as a board member of South African Nursing Council (SANC) and studying MPH at University of Johannesburg. He is passionate about the nursing profession.
</p><p>In 2020 he was elected as an editor in chief of SAACHS, where his responsibilities includes Editing content (articles, photographs), Setting Editorial guidelines(tone or voice for SAACHS), representing the publication and etc.
</p>

                  <p class="name">Contact details</p>
                  <p>Tell: +27 (0)11 559 3837</p>
                  <p>Email: tshidison@uj.ac.za</p>

                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
    			<div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">New feeds</span>
            <h2 class="mb-4">Learn more about us</h2>
          </div>
    		</div>
    		<div class="row">
          <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
            <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab" aria-controls="v-pills-nextgen" aria-selected="true">Conference</a>

              <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">News letters</a>

              <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab" aria-controls="v-pills-effect" aria-selected="false">Events</a>
            </div>
          </div>

          <div class="col-md-12 align-items-center ftco-animate">
            <div class="tab-content ftco-animate" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
								<?php
					          $i=1;
					          $sql="select * from `conference`";
					          $qry=mysqli_query($con,$sql) or die(mysqli_error($con));

					          while($row=mysqli_fetch_array($qry))
					          {

					      ?>
								<div class="slider-item" >
										<div class="home-slider owl-carousel">
								<div class="d-md-flex">
	              	<div class="one-forth align-self-center">
	              	<img src="upload/<?php echo $row['file'];?>" class="img-fluid" alt="" />
	              	</div>
	              	<div class="one-half ml-md-5 align-self-center">
		                <h2 class="mb-4">  <?php echo  $row['fname'] ?></h2>
		              	<p>  <?php echo $row['content'] ?></p>
		              </div>
	              </div>
							 </div>
							 </div>
							 <?php
				            $i++;
				          }
				       ?>
              </div>



              <div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                <div class="d-md-flex">

	         <div class=" mr-md-10 align-self-center">
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
	              </div>
              </div>
							</div>

              <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                <div class="d-md-flex">
	              	<div class="ml-md-5 align-self-center">
		                <h2 class="mb-4">Our events</h2>
		        	<div class="row">
								<?php
										$i=1;
										$sql="select * from `event`";
										$qry=mysqli_query($con,$sql) or die(mysqli_error($con));

										while($row=mysqli_fetch_array($qry))
										{

								?>

              <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
							<img src="upload/<?php echo $row['file'];?>" class="img-fluid" alt="" />

              <div class="text d-flex py-4">
                <div class="meta mb-3">

                  <div><a href="#"><?php echo  $row['fname'] ?></a></div>
                </div>
                <div class="desc pl-3">
                  <p class="heading"><?php echo $row['content'] ?></p>
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


			  </div>
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
