<?php
// Panggil koneksi dan function
include 'koneksi.php';
include 'function.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Rais</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="  text-white">Home</a></li>
          <li><a href="about.php" class="active text-white">About</a></li>
          <li><a href="experience.php" class="  text-white">Experiences</a></li>
          <li><a href="projects.php" class="  text-white">Projects</a></li>
          
          <li><a href="contact.php"class="  text-white">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list" style="color:white;"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://www.instagram.com/raisfadillahh?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram text-white"><i class="bi bi-instagram"></i></a>
        <a href="https://id.linkedin.com/in/rais-fadillah-hasani-082518286?trk=people-guest_people_search-card" target="_blank" class="linkedin text-white"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-white"><?php echo titleAbout(1)?></h2>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/rass.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2 class="text-white"><?php echo descriptionAbout(1)?>.</h2>
  <br><br>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right text-white"></i> <strong class="text-white">Birthday:</strong> <span class="text-white"><?php echo titleAbout(2)?></span></li>
                  <li><i class="bi bi-chevron-right text-white"></i> <strong class="text-white">Phone:</strong> <span class="text-white"><?php echo descriptionAbout(2)?></span></li>
                  <li><i class="bi bi-chevron-right text-white"></i> <strong class="text-white">City:</strong> <span class="text-white"><?php echo quoteAbout(2)?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right text-white"></i> <strong class="text-white">Age:</strong> <span class="text-white" ><?php echo titleAbout(3)?></span></li>
                  <li><i class="bi bi-chevron-right text-white"></i> <strong class="text-white">Email:</strong> <span class="text-white"><?php echo descriptionAbout(3)?></span></li>
           
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    
  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
    <div class="copyright text-center ">
        <p class="text-white">© <span class="text-white">Copyright</span> <strong class="px-1 sitename text-white">Rais</strong></p>
      </div>
      <div class="social-links d-flex justify-content-center">
          
        <a href="https://www.instagram.com/raisfadillahh?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" ><i class="bi bi-instagram text-white"></i></a>
        <a href="https://id.linkedin.com/in/rais-fadillah-hasani-082518286?trk=people-guest_people_search-card" target="_blank"><i class="bi bi-linkedin text-white"></i></a>
      </div>
       
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>