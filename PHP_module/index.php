<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="healthcare_red.png">
  <title>Smart_Care</title>
  <meta name="description" content="An initiative to improve accessibility of healthcare systems.">
  <meta name="keywords" content="Smart_Care, digital health, convenient health">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="aquamarine.css" type="text/css">
  <link rel="stylesheet" href="css/modalcss.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="http://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link text-light" href="#"><b>Smart_Care</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#motto"><b>Motto</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#reviews"><b>Reviews</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#venue"><b>About</b></a>
          </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#all_events"><b>Events</b></a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-secondary mx-2" href="#book"><b>Contact</b></a>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="align-items-center d-flex cover section-aquamarine py-5" style="	background-image: url(&quot;assets/unsplashdoc/doctor_thumbsup.jpg&quot;);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center text-lg-left text-center">
          <h1 class="mb-0 mt-5 display-4">Smart_Care</h1>
          <p class="mb-5">We Care for You</p>
        </div>
        <div class="col-lg-5 p-3">
          <form class="p-4 bg-light" method="post" action="verify_login.php">
            <div class="form-group"> <label>Username</label>
              <input class="form-control" placeholder="Type username" name="username" required="required"> </div>
            <div class="form-group"> <label>Password<br></label>
              <input class="form-control" placeholder="Type Password" name="password" required="required" type="password"> </div>
		<div class="g-recaptcha" style="display: flex; /* or grid */
  justify-content: center;
  align-items: center;" data-sitekey="6LfDA9ofAAAAANbTzRl5oqlOgzdqGQLR0dKcaNIs"></div>


<button type="submit" name="adminlogin" value="adminlogin" class="btn mt-4 btn-block p-2 btn-primary"><b>Login_Admin</b></button>
<button type="submit" name="userlogin" value="userlogin" class="btn mt-4 btn-block p-2 btn-primary"><b>Login_User</b></button>

<?php
session_start();
        if(isset($_SESSION["error"])){
         $error = $_SESSION["error"];
          echo "<span style='font-weight: bold; color: red;'>$error</span>";
      }
?> 


</form>
	</div>
      </div>
    </div>
  </div>
  <!-- Intro -->
  <div class="py-5" id="motto" style="background-image: url(&quot;assets/restaurant/cover_light_3.jpg&quot;);">
    <div class="container">
      <div class="row my-5 bg-primary">
        <div class="p-4 col-md-6">
          <p class="m-0">Our Motoo</p>
          <h2 class="mb-3">Say yes to your good health!</h2> <i class="fa d-inline-block fa-star text-white"></i><i class="fa d-inline-block fa-star mx-2 text-white"></i><i class="fa d-inline-block fa-star text-white"></i>
          <p class="my-4">We at Smart_Care are dedicated for bringing the inovations in IT industry to the healthcare systems.<br></p>
          <img class="img-fluid d-block" src="assets/unsplashdoc/signature.png" width="300">
        </div>
        <div class="p-0 col-md-6 d-none d-md-block">
          <img class="img-fluid d-block mt-4" src="assets/unsplashdoc/doctor_stethoscope.jpg" style=""> </div>
      </div>
    </div>
  </div>
  <!-- Gallery -->
  <div class="">
    <div class="container-fluid">
      <div class="row">
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
        <div class="p-0 col-md-2 col-4">
          <img src="assets/unsplashdoc/eye_machine.jpg" class="img-fluid"> </div>
      </div>
    </div>
  </div>
  <!-- Menu -->
  <div class="py-5 text-center" id="menu" style="background-image: url(&quot;assets/restaurant/cover_light_4.jpg&quot;);">
    <div class="container">
      <div class="row p-4 bg-aquamarine animate-in-down">
        <div class="col-md-12">
          <h2>Today's Appointment<br></h2>
          <p class="mb-5">Week #26</p>
          <div class="row">
            <div class="col-md-4">
              <h5>For Child</h5>
              <ul class="list-unstyled">
                <li class="my-4">Query &nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">General Physician&nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">Specialist&nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">trauma <br>&nbsp;updating soon <br>unavailable</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>For Young</h5>
              <ul class="list-unstyled">
                <li class="my-4">Query &nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">General Physician&nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">Specialist&nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">trauma <br>&nbsp;updating soon <br>unavailable</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5>For Old</h5>
              <ul class="list-unstyled">
                <li class="my-4">Query &nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">General Physician&nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">Specialist&nbsp; <br>updating soon <br>unavailable</li>
                <li class="my-4">trauma <br>&nbsp;updating soon <br>unavailable</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel reviews -->
  <div class="py-5 text-center photo-overlay" id="reviews" style="background-image: url(&quot;assets/restaurant/testimonal_background_light.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-12 p-3 section-light col-lg-5">
          <div class="carousel slide" data-ride="carousel" id="carouselTestimonial">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <img class="d-block img-fluid rounded-circle mx-auto" src="assets/restaurant/testimonial_1_light.jpg" data-holder-rendered="true" width="200">
                <p class="my-3">So good and super staff. <br>The doctors are very friendly!.</p> <i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i><i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i><i class="fa fa-star-o d-inline"></i>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid rounded-circle mx-auto" src="assets/restaurant/testimonial_2_light.jpg" data-holder-rendered="true" width="200">
                <p class="my-3">Less waiting time for getting an appointment. <br>It felt like another home.</p> <i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i><i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i> <i class="fa fa-star d-inline"></i>
              </div>
              <div class="carousel-item active">
                <img class="d-block img-fluid rounded-circle mx-auto" src="assets/restaurant/testimonial_3_light.jpg" data-holder-rendered="true" width="200">
                <p class="my-3">It was such a nice experience. <br>I am now going to keep this in my top list.</p> <i class="fa fa-star d-inline"></i><i class="fa fa-star mx-1 d-inline"></i><i class="fa fa-star d-inline"></i><i class="fa fa-star-half-o mx-1 d-inline"></i><i class="fa fa-star-o d-inline"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel venue -->
  <div class="py-5" style="background-image: url(&quot;assets/restaurant/cover_light_2.jpg&quot;);" id="venue">
    <div class="container">
      <div class="row bg-primary animate-in-down">
        <div class="p-4 col-md-6 align-self-center">
          <p class="m-0">Feel comfortable, like home</p>
          <h2>Discover the venue</h2>
          <p class="my-4">An appealing healthcare system which focuses on patient comfort and their accessiblity for the system in any way possible. </p>
          <a href="#" class="btn mb-3 p-2 btn-light">View the gallery</a>
        </div>
        <div class="p-0 col-md-6">
          <div class="carousel slide" data-ride="carousel" id="carousel1">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="assets/unsplashdoc/vaccine_bottle.jpg" alt="first slide">
                <div class="carousel-caption">
                  <h3>Facilities</h3>
                  <p>Good architecture, hygenic and accessible.</p>
                </div>
              </div>
              <div class="carousel-item active">
                <img class="d-block img-fluid w-100" src="assets/unsplashdoc/negative_ortho_xray.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>Surroundings</h3>
                  <p>Good staff and mostly incampus facilities</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="assets/unsplashdoc/patienton_bed.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>In Ward</h3>
                  <p>Treated Well.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="assets/unsplashdoc/pink_stethoscope.jpg" data-holder-rendered="true">
                <div class="carousel-caption">
                  <h3>Relax area</h3>
                  <p>Take the time to chill</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Events -->
  <div class="py-5 bg-light" id="all_events">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="m-0 text-center">We gladly invite you to our happenings.</p>
          <h2 class="mb-4 text-primary text-center">Upcoming events</h2>
          <div class="row">
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="assets/unsplashdoc/eye_slitlamp.jpg">
              <p class="lead text-muted mb-1">14th June, 2022</p>
              <h5 class="text-dark"><b>Vision &amp; Eye Camp</b></h5>
              <p class="mb-3">We are organizing a mega Healthy Eye campaign where individuals can consult a opthalmoligist about their queries of general eye care and for any king of suggestions for the same.</p>
              <a href="#" class="btn btn-outline-primary"><b class="">Show Interest!</b></a>
            </div>
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="assets/unsplashdoc/child_earcheck.jpg">
              <p class="lead text-muted mb-1">23rd June, 2022</p>
              <h5 class=""><b>Smile Please</b></h5>
              <p class="mb-3">A campaign for parents who wish to inhance their knowledge .</p>
              <a href="#" class="btn btn-outline-primary"><b class="">Show Interest!</b></a>
            </div>
            <div class="col-md-4 p-3">
              <img class="img-fluid d-block w-100 mb-3" src="assets/unsplashdoc/spine_onpad.jpg">
              <p class="lead text-muted mb-1">1st July, 2022 </p>
              <h5 class=""><b>Orthopedic Drive &nbsp;</b></h5>
              <p class="mb-3">A campaign to teach people about correct posture and to spread awareness about the challanges to which people live and advancement of orthopedic department.</p>
              <a href="#" class="btn btn-outline-primary"><b class="">Show Interest!e</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Parallax section -->
  <div class="py-5 photo-overlay section-parallax" id="book" style="background-image: url(&quot;assets/unsplashdoc/negative_ortho_xray.jpg&quot;);">
    <div class="container">
      <div class="row my-5">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
          <form class="p-4 bg-light" method="post" action="contact.php">
            <h4 class="mb-4 text-center">Reach Us</h4>
            <p align="center" class="my-4">We are open for suggestions from our visitors. We often find the feedbacks to be more precise required for the system.</p>
            <div class="form-group"> <label>Name</label>
              <input class="form-control" type="text" name="txtName" placeholder="Type Name"> </div>
            <div class="form-group"> <label>Email</label>
              <input type="email" name="txtEmail" class="form-control" placeholder="Type Email"> </div>
            <div class="form-group"> <label>Phone</label>
              <input type="tel" name="txtPhone" class="form-control" placeholder="Type Mobile"> </div>
	    
		<div class="col-md-6">
                        <div class="form-group" >
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width:auto; height: 150px;" required></textarea>
                        </div>
                    </div>
		<button type="submit" name="btnSubmit" value="Send Message" class="btn mt-4 btn-block p-2 btn-primary"><b>Send Message</b></button>
		
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div class="text-center bg-dark pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 p-3">
          <h2 class="mb-4">Contact</h2>
          <p class="m-0">
            <a href="tel:+91 7631 35 4071" class="text-white">+</a>91 62 00 163 161</p>
          <p>
            <a href="mailto:bkumarmukund@gmail.com" class="text-white"></a>bkumarmukund@gmail.com</p>
        </div>
        <div class="col-md-4 p-3">
          <h2 class="mb-4">Location</h2>
          <p>Room Number 153, Shri Aurobindo Hostel, Pondicherry University<br></p>
        </div>
        <div class="col-md-4 p-3">
          <h2 class="mb-4">Openings</h2>
          <p>11:00 - 15:00 &amp; 19:00 - 00:00 Tue/Fri <br>11:00 - 15:00 &amp; 19:00 - 02:00 Sat/Sun</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-muted">Project: 20352014_MCA_2020-2022</p>
        </div>
      </div>
    </div>
  </div>
  

<!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
<!--  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
-->
</script>
</body>

</html>
<?php
		        unset($_SESSION["error"]);
?>
