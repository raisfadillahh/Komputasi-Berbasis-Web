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

 <style>
  .aset1 {
    position: absolute;
    top: 30%; /* Menempatkan rocket secara vertikal relatif terhadap tinggi layar */
    width: 15vw; /* Lebar rocket menggunakan satuan viewport width */
    max-width: 0px; /* Maksimal ukuran untuk rocket agar tidak terlalu besar di layar besar */
    animation: moveRocket 6s infinite ease-in-out;
     left: 5%;
    opacity: 0.8; /* Membuat rocket sedikit transparan */
    filter: blur(2px); /* Menambahkan efek blur */
}
.aset3 {
  position: absolute;
    top: 70%; /* Menempatkan rocket secara vertikal relatif terhadap tinggi layar */
    width: 15vw; /* Lebar rocket menggunakan satuan viewport width */
    max-width: 0px; /* Maksimal ukuran untuk rocket agar tidak terlalu besar di layar besar */
    animation: moveRocket 6s infinite ease-in-out;
     left: 15%;
    opacity: 0.8; /* Membuat rocket sedikit transparan */
    filter: blur(2px); /* Menambahkan efek blur */
}
.aset-2 {
    position: absolute;
    top: 60%; /* Menempatkan rocket secara vertikal relatif terhadap tinggi layar */
    width: 15vw; /* Lebar rocket menggunakan satuan viewport width */
    max-width: 150px; /* Maksimal ukuran untuk rocket agar tidak terlalu besar di layar besar */
    animation: moveRocket 6s infinite ease-in-out;
    padding-left: 55%;
    opacity: 0.8; /* Membuat rocket sedikit transparan */
    filter: blur(2px); /* Menambahkan efek blur */
    left: 25%;
}
.aset4 {
  position: absolute;
    top: 25%; /* Menempatkan rocket secara vertikal relatif terhadap tinggi layar */
    width: 15vw; /* Lebar rocket menggunakan satuan viewport width */
    max-width: 0px; /* Maksimal ukuran untuk rocket agar tidak terlalu besar di layar besar */
    animation: moveRocket 6s infinite ease-in-out;
     left: 75%;
    opacity: 0.8; /* Membuat rocket sedikit transparan */
    filter: blur(3px); /* Menambahkan efek blur */
}

.aset:nth-child(1) {
    left: 5vw; /* Jarak dari kiri dengan satuan vw agar dinamis */
    transform: rotate(-10deg);
}

.aset2:nth-child(2) {
    right: 5vw; /* Jarak dari kanan dengan satuan vw agar dinamis */
    transform: rotate(20deg);
}

/* Animasi tetap sama */
@keyframes moveRocket {
    0% {
        transform: translateY(0) rotate(20deg);
    }
    50% {
        transform: translateY(-40px) rotate(35deg);
    }
    100% {
        transform: translateY(0) rotate(10deg);
    }
}
 </style>
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
          
          <li><a href="index.php" class="active text-white">Home</a></li>
          <li><a href="about.php" class=" text-white">About</a></li>
          <li><a href="experience.php" class=" text-white">Experiences</a></li>
          <li><a href="projects.php"class=" text-white">Projects</a></li>
          <li><a href="contact.php" class="  text-white">Contact</a></li>
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
<div class="aset1" >
  <img src="star.png" alt="">
</div>
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/raiss.png" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2><?php echo titleHome(1)?></h2>
            <p><?php echo descriptionHome(1)?></p>
            <a href="about.php" class="btn-get-started" style="color:white; background-color:#0a0877;">About Me</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

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