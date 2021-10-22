<?php
session_start();

if ( isset ($_SESSION["login2"])) {
    header("Location: detail_contact.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.6.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <a href="index.php" class="logo"><img src="assets/img/logojoy.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          
          <li><a class="active" href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://twitter.com/rascalyxz" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.instagram.com/raracaly/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/Zahraauliafauzia" class="github"><i class="bi bi-github"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Beribut adalah beberapa portofolio saya yang saya jalani pada tahun 2020.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-lomba">Lomba</li>
              <li data-filter=".filter-kepanitiaan">Kepanitia</li>
            
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-lomba">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/lomba-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lomba 1</h4>
                <p>Lomba</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/lomba-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="lomba 1"><i class="bx bx-plus"></i></a>    
                </div>
              </div>
            </div>
          </div>           
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-lomba">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/lomba-3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lomba 3</h4>
                <p>Lomba</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/lomba-3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="lomba 1"><i class="bx bx-plus"></i></a>    
                </div>
              </div>
            </div>
          </div>
                                
          <div class="col-lg-4 col-md-6 portfolio-item filter-kepanitiaan">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kepanitiaan-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>kepanitiaan 1</h4>
                <p>kepanitiaan</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kepanitiaan-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="kepanitiaan 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>   
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-kepanitiaan">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kepanitiaan-2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>kepanitiaan 2</h4>
                <p>kepanitiaan</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kepanitiaan-2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="kepanitiaan 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>   

          <div class="col-lg-4 col-md-6 portfolio-item filter-kepanitiaan">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kepanitiaan.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>kepanitiaan 2</h4>
                <p>kepanitiaan</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kepanitiaan.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="kepanitiaan 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>  

          
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">    
      <div class="credits">
                Designed by <a href="https://www.instagram.com/raracaly/">Zahra Aulia</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>