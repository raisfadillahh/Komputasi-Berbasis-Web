<?php
// Panggil koneksi ke database
include 'koneksi.php';

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Persiapkan query untuk menyimpan data ke tabel kontak
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";

    // Siapkan statement
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Eksekusi query
    if ($stmt->execute()) {
        // Data berhasil disimpan
        $successMessage = "Data berhasil disimpan.<br><strong>Nama:</strong> " . htmlspecialchars($name) . "<br><strong>Email:</strong> " . htmlspecialchars($email) . "<br><strong>No. Telepon:</strong> " . htmlspecialchars($subject) . "<br><strong>Pesan:</strong> " . htmlspecialchars($message);
    } else {
        $errorMessage = "Terjadi kesalahan: " . $connect->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $connect->close();
} else {
    $errorMessage = "Permintaan tidak valid.";
}
?>

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
          <li><a href="about.php" class="  text-white">About</a></li>
          <li><a href="experience.php" class="  text-white">Experiences</a></li>
          <li><a href="projects.php"class="  text-white">Projects</a></li>
          <li><a href="contact.php" class="  text-white">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://www.instagram.com/raisfadillahh?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="instagram text-white"><i class="bi bi-instagram"></i></a>
        <a href="https://id.linkedin.com/in/rais-fadillah-hasani-082518286?trk=people-guest_people_search-card" target="_blank" class="linkedin text-white"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>



  <div class="container">
        <?php if (isset($successMessage)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php elseif (isset($errorMessage)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
    </div>



<footer id="footer" class="footer light-background">
    <div class="container">
    <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Rais</strong></p>
      </div>
      <div class="social-links d-flex justify-content-center">
          
        <a href="https://www.instagram.com/raisfadillahh?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" ><i class="bi bi-instagram"></i></a>
        <a href="https://id.linkedin.com/in/rais-fadillah-hasani-082518286?trk=people-guest_people_search-card" target="_blank"><i class="bi bi-linkedin"></i></a>
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