<?php
include("db_connection.php");
$sql = 'SELECT announcement_name FROM announcement ORDER BY announcement_id DESC LIMIT 1;';
$sql1 = 'SELECT * FROM circular ORDER BY circular_id DESC;';

$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>S.B.O.A | Home</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/SBOA_logo - Copy.png" type="image/x-icon">

  <!-- Font awesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

  <!-- Main style sheet -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet'
    type='text/css'>
  

</head>

<body>
  <!-- PreLoader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
<!-- PreLoader -->
  <!-- modal strt -->
  <div id="myModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content"
        style="background-color: #01BAFD; width:auto;border:3px solid #3066BE ;border-radius:10px;">
        <div class="modal-header">
          <h5 class="modal-title"><b style="color: #fff;">Dear All,</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
         <?php 
         if($result->num_rows > 0){
           while ($row = $result1->fetch_assoc()){
             echo "<h5 style='color:#fffffff; text-transform: capitalize;'>". $row['title']. "</h5>";
             echo "<hp style='color:#fffffff;'>". $row['description']. "</p> <hr style='background-color: #ffffff;'>";
           }
           } else {
             echo " No Circulars available";
           }
         ?>
        </div>
      </div>
    </div>
  </div>

  <!-- modal end -->
  <!--START SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header" style="background-color: #2D0320;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i style="color: #fff;" class="fa fa-envelope"></i>
                    <span style="color: #fff;">sboa.abad@gmail.com</span>
                  </div>
                  <div class="mu-top-phone">
                    <i style="color: #fff;" class="fa fa-phone"></i>
                    <span style="color: #fff;">0240 2382003 , 2382004</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a style="color: #fff;" href="#"><span class="fa fa-facebook"></span></a></li>
                      <!-- <li><a style="color: #fff;" href="#"><span class="fa fa-twitter"></span></a></li> -->
                      <!-- <li><a style="color: #fff;" href="#"><span class="fa fa-google-plus"></span></a></li> -->
                      <li><a style="color: #fff;" href="#"><span class="fa fa-linkedin"></span></a></li>
                      <li><a style="color: #fff;" href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->

  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default navbar-light bg-light sticky-top" style="background-color: #e3f2fd;"
      role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" style="font-size: 20px; padding-bottom: none;" href="index.html"> S.B.O.A Public School, A.bad </a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img height="42" src="assets/img/SBOA_logo.jpg" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span
                  class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="principledesk.html">Principle Desk</a></li>
                <li><a href="trustees.html">Trustee</a></li>
                <li><a href="faculty.html">Faculty</a></li>
                <li><a href="studentcouncil.html">Student Council</a></li>
                <li><a href="helpinghands.html">Helping Hands</a></li>
                <li><a href="ptamembers.html">PTA Members</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facilities<span
                  class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="sciencelab.html">Science Lab</a></li>
                <li><a href="computerlab.html">Computer Lab</a></li>
                <li><a href="library.html">Library</a></li>
                <li><a href="playarea.html">Play Area</a></li>
                <li><a href="smartclasses.html">Smart Classes</a></li>
                <li><a href="smsoftware.html">School Management Software</a></li>
                <li><a href="rtefacility.html">RTE Facility</a></li>
                <li><a href="busfacility.html">BUS Facility</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Achievements<span
                  class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="academics.html">Academics</a></li>
                <li><a href="cocurricular.html">Co-curricular</a></li>
              </ul>
            </li>

            <li><a href="gallery.html">Gallery</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="textbooklist.html">Text Book List</a></li>
                <li><a href="admission.html">Admission</a></li>
                <!-- <li><a href="ncc.html">NCC</a></li>
                <li><a href="trustees.html">Trustees</a></li>
                <li><a href="aboutschool.html">About School</a></li>
                <li><a href="teachers.html">Our Teachers</a></li>
                <li><a href="classroom.html">Classrooms</a></li>
                <li><a href="sports.html">Sports</a></li> -->
              </ul>
            </li>
            <!-- <li><a href="activities.html">Activities</a></li> -->
            <li><a href="#">Login</a></li>
            <!-- <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li> -->
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <header id="mu-header" style="background-color: #3066BE;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <marquee style="color: #fff; padding: 8px;">
<?php 
$res = mysqli_fetch_array($result, MYSQLI_NUM);
echo $res[0];
?>
        </marquee>
        </div>
      </div>
    </div>
  </header>
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/gallery/big/bg.JPG" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <img src="assets/img/SBOA_logo.png" style="width: 200px; height: 136px;">
        <h4>Welcome To S.B.O.A</h4>
        <span></span>
        <h2>Opening Doors Through Literacy</h2>
        <p>Together we create a loving community of purposeful learning that focuses on the whole child; body, mind, and
          spirit.</p>

      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/gallery/big/bg1.JPG" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Center For Excellence</h4>
        <span></span>
        <h2>Dedicated To Excellence</h2>
        <p>We teach, model, and encourage a love of learning, collaboration, and compassion for others.</p>

      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/gallery/big/bg3.JPG" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Center For Pride</h4>
        <span></span>
        <h2>Soaring To Digital Excellence</h2>
        <p>Engaging all students in partnership with family and community to become informed, aware and digitally
          learned citizens.</p>

      </div>
    </div>
    <!-- Start single slider item -->
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service"
    style="background-image: url(assets/img/bg.png); background-size: 300px 195px;  background-position: right; background-repeat: no-repeat; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single" style="background-color: #3066BE; margin-bottom: 2px;">
              <span class="fa fa-building"></span>
              <h3> <b>School </b></h3>
              <p style=" font-style: italic;"> “The School is the place that grooms the little kids into the successful
                Leaders of Tomorrow" <br><br> </p>
              <p><a class="btn btn-primary btn-lg" style="background-color:transparent; border:2px solid #000;"
                  href="aboutus.html">School</a></p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single" style="background-color: #FFD23F;">
              <span style="color: #000;" class="fa fa-users"></span>
              <h3 style="color: #000;"><b>Teachers</b></h3>
              <p style="color: #000; font-style: italic;">"Committed to educating and nurturing all students so they may
                grow towards responsible global citenzenship"</p>
              <p><a class="btn btn-dark btn-lg" href="faculty.html"
                  style="background-color:transparent; border:2px solid #000;"> Teacher</a></p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single" style="background-color: #3BCEAC;">
              <span class="fa fa-user"></span>
              <h3><b>Students</b></h3>
              <p style=" font-style: italic;">"Let's be the good reader, better writers and best problem solvers."
                <br><br>
              </p>
              <p><a class="btn btn-primary btn-lg" href="sciencelab.html"
                  style="background-color: transparent; border:2px solid #000;">Students</a></p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us" style="margin-top: 12px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left" style="color: #000;">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <!-- <h2 style="color: #000;">About Us</h2> -->
                  </div>
                  <!-- End Title -->
                  <h3 style="font-weight: 500;">Welcome to the <br> <p style="font-weight: 600;"> S.B.O.A. PUBLIC SCHOOL AURANGABAD </p></h3>

                  <div class="text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 600; background-color: #EF476F; border-radius: 12px; color: #fff; padding: 8px;">
                  <h3>Our Vision </h3>
                  <p>   To make the students Emotionally, Mentally and Physically strong for new India. 
                  </P>
                </div>
                <div class="text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 600; margin: 8px; background-color: #FFD166; border-radius: 12px; color: #000; padding: 8px;">
                  <h3>Our Motto </h3>
                  <p> "Educate and illuminate" </P>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6" style="border-color: #2D0320;">
                <div class="mu-about-us-right">
                  <a id="mu-abtus-video" href="https://www.youtube.com/embed/qgn9dF3vTKU" target="mutube-video">
                    <img src="assets/img/gallery/big/videoimg.JPG" alt="img" style="border-radius: 12px;">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row ">
        <div class="col-md-8" style="background-color: #2a9d8f; border-radius: 18px;">
              <h1>
                <i style="color: #000;" class="fa fa-quote-left"></i>
              </h1>
              <h1 style="padding-bottom: 4px;
             font-size: 22px;
             font-weight: 600;
             font-style: italic; color: #fff;">Principal’s Message…</h1>
              <h3 style="padding-bottom: 5px;
             font-size: 22px;
             font-weight: 600;
             font-style: italic; color: #fff;">It is a great pleasure to welcome you to SBOA PUBLIC SCHOOL.</h3>
              <p style="padding-bottom: 15px;
             font-size: 22px;
             font-weight: 600;
             line-height: 1.6;
             font-style: italic; color: #fff;">
                Every student has lot of potential which needs to be let out. Sometimes they just need a little nudge, a
                little direction, a little support, a little coaching, and the greatest things can happen which can
                create history.&nbsp;&nbsp;&nbsp;
                <img class="float-right"><i style="color: #000;"
                  class="fa fa-quote-right"></i></img>
              </p>
              <p style="margin-top: -65px;"> <b>
                  <h1 style="color: #000;"> _____________ </h1>
                </b></p>
        </div>
        <div class="col-md-4" style="padding-top: 10px;">
          <img src="assets/img/principal.jpg" width="100%" class="text-center" alt="Principal- Surekha Mam"
            style="border: 3px solid #000; border-radius: 8px; padding: none; ">
        </div>

      </div>
    </div>
  </section>
  <!-- End about us counter -->

  <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Our Features</h2>
              <p>Our vision is every child known, safe, inspired, challenged, empowered. We provide the best and
                convinient facilities to students and help them enrich themselves in every aspect of life.</p>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature text-center">
                    <span class="fa fa-book"></span>
                    <h4 style="color: #000;">Teachers</h4>
                    <p style="color: #000;">The best teachers teach from the heart, not from the book.</p>
                    <a href="faculty.html">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature text-center">
                    <span class="fa fa-users"></span>
                    <h4 style="color: #000;">Sports</h4>
                    <p style="color: #000;">A true champion is someone who is bent over, drenched in sweat at the point of exhaustion.</p>
                    <a href="cocurricular.html">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature text-center">
                    <span class="fa fa-laptop"></span>
                    <h4 style="color: #000;">N C C</h4>
                    <p style="color: #000;">NCC was introduced from 2002-03 academic year for Girls students for Std. 8th to 10th.</p>
                    <a href="cocurricular.html">Read More</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- End features content -->
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End features section -->
  </div>
  </div>
  </div>
  </div>
  </section>
  <!-- End latest course section -->

  <!-- Start from blog -->
  <section id="mu-from-blog" style="background-color: #f8edeb;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>Our Toppers</h2>
              <p>We try to bring out the best in our students, so they can stand tall and high in today's world!</p>
            </div>
            <!-- end title -->
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">
                <div class="col-md-3 col-sm-3 text-center">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="assets/img/Arnavee Sudhir Gite.jpg"
                          style="border-radius: 50%; border: 4px solid #000;" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3>
                          <p style="color: #000;">ARNAVEE S. GITE</p>
                        </h3>
                      </figcaption>
                    </figure>
                    <div class="">
                      <p style="color: #000;">X STD Year 2019-2020</p>

                    </div>
                    <div class="mu-blog-description">
                      <p style="color: #000;">She was one of our brightest students who scored <b
                          style="font-style: bold;font-weight: 500;">98.60% </b></p>

                    </div>
                  </article>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="assets/img/Arpan Jawahar Shitre.jpg"
                          style="border-radius: 50%; border: 4px solid #000;" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3>
                          <p style="color: #000;"> ARPAN J. SHITRE</p>
                        </h3>
                      </figcaption>
                    </figure>
                    <div>
                      <p style="color: #000;">X STD Year 2019-2020</p>
                    </div>
                    <div class="mu-blog-description">
                      <p style="color: #000;">He was hardworking and smart student who scored <b style="font-style: bold;font-weight: 500;">
                          98.20% </b></p>
                    </div>
                  </article>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="assets/img/Kush Rahul Mahajan.jpg"
                          style="border-radius: 50%; border: 4px solid #000;" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3>
                          <p style="color: #000;">Kush R. Mahajan</p>
                        </h3>
                      </figcaption>
                    </figure>
                    <p style="color: #000;">X STD Year 2019-2020</p>

                    <div class="mu-blog-description">
                      <p style="color: #000;">He was intelligent and have competitive sprit and scored <b
                          style="font-style: bold;font-weight: 500;"> 98%.</b> </p>
                    </div>
                  </article>
                </div>
                <div class="col-md-3 col-sm-3 text-center">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="assets/img/ANUSHKA RAVINDRAKUMAR GUTHE.jpg"
                          style="border-radius: 50%; border: 4px solid #000;" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3>
                          <p style="color: #000;">ANUSHKA R. GUTHE</p>
                        </h3>
                      </figcaption>
                    </figure>

                    <p style="color: #000;">X STD Year 2019-2020</p>
                    <p> </p>

                    <div class="mu-blog-description">
                      <p style="color: #000;">She was intelligent and have competitive sprit and scored <b
                          style="font-style: bold;font-weight: 500;"> 98%. </b> </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <!-- end from blog content   -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog -->

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="aboutus.html">About Us</a></li>
                  <li><a href="faculty.html">Faculty</a></li>
                  <li><a href="ptamembers.html">PTA Members</a></li>
                  <li><a href="studentcouncil.html">Student Council</a></li>

                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>More</h4>
                <ul>
                  <li><a href="admission.html">Contact Us</a></li>
                  <li><a href="trustees.html">Trustees</a></li>
                  <li><a href="textbooklist.html">Text Books</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p> <i class="fa fa-building"></i> Jalgaon Rd, Hudco, Mayur Nagar, N 11, Cidco, Aurangabad,
                    Maharashtra 431003</p>
                  <p><i class="fa fa-phone"></i> 0240 2382003, 2382004</p>
                  <p><i class="fa fa-envelope"></i> sboa.abad@gmail.com</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved 2020. Powered by <a href="https://erstellen.tech" target="_blank">Erstellen Tech </a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>

  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>


  <!-- Custom js -->
  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
  <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Preloader -->
  <script>

$(window).ready(function() {
 setTimeout(function(){
     $('body').addClass('loaded');
 }, 2000);
 setTimeout(function(){
  $("#myModal").modal('show');
 });
});  
  </script>
<!-- PreLoader -->
  <!-- Modal -->
  <script>
    $(window).ready(function () {
      
    }, 5000);
  </script>
  <!-- Modal -->
</body>

</html>