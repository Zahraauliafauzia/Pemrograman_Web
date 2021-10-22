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

  <title>Resume</title>
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
          <li><a class="active" href="resume.php">Resume</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
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

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Saya mahasiswa aktif Universitas Pembangunan Jaya program studi Informatika. Saat ini saya semester5 dalam menumpuh pendidikan S1.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item pb-0">
              <h4>Pendidikan dua jenjang terkini</h4>        
              <ul>
                <li>Universitas Pembangunan Jaya</li>
                <p>Mahasiswa aktif Program Studi Informatika tahun ajaran masuk 2019 sampai sekarang</p>
                <li>SMAN 6 Tangerang Selatan</li>
                <p>Lulusan tahun ajaran 2019/2021 Jurusan MIPA</p>
              </ul>
              </p>
            </div>
              <h3 class="resume-title">Prestasi</h3>
              <div class="resume-item">     
                <h4>Achievment dari 2019 - 2021</h4>        
                  
                  <h5><li>Mahasiswa Berprestasi TA 2020/2021</li></h5>
                  <p>Perai IPK tertinggi angkatan 2019 program studi Informatika UPJ TA 2020/2021 (IPK 3.75)</p>
                  <h5><li>Keikutsertaan Karya Ilmiah Nasional</li></h5>
                  <p>Mengikuti lomba karya ilmiah Gemastik taun 2019</p>
                  <h5><li>Fashion Show</li></h5>
                  <p>Juara 1 fashion show acar SUmpah Pemuda 26 Oktober 2019 Universitas Pembangunan Jaya</p>
                  <h5><li>Badminton</li></h5>
                  <p>Juara 3 badminton study program Championships UPJ 2019 kategori ganda campuran</p>              
            </div>   
            <h3 class="resume-title">Organisasi</h3>
            <div class="resume-item pb-0">
              <h4>Oragnisai yang pernah digeluti</h4>        
              <ul>
                <li>Wakil Himpunan Mahasiswa Informatika Periode 2021/2022</li>                
                <li>Kepala divisi Kreativitas dan Inovasi himpunan mahasiswainformatika Universitas Pembangunan Jaya periode2020/2021</li>
                <li>Wakil ketua 2 Ratoe Jaroe SMAN 6 Tangerang Selatan periode2019/2020</li>
              </ul>
              </p>
            </div>         
          </div>
          
          <div class="col-lg-6">
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>Magang Staf Marketing Universitas Pembangunan Jaya</h4>            
              <p>
              <ul>
              Staf Marketing Universitas Pembangunan Jaya Tim Luar Kota sejak Juni 2021 - Agustus 2021
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Asisten Dosen</h4>        
              <p>
              <ul>
                 Asisten Dosen dalam Pelatihan Gerakan Pandai Pada Sekolah BPK Penabur dan Sekolah Noah Jenjang Sekolah Dasar MataPelajaran Ilmu Pengethauan Alam, 3 Januari - 16 April 2021
              </ul>  
            </p>
            </div>
            <div class="resume-item">
              <h4>Student Ambassador</h4>        
              <p>
              <ul>
                  Student Ambassador Universitas Pembangunan Jaya sejak September 2019 - September 2020
              </ul>             
              </p>
            </div>
            <div class="resume-item">
              <h4>Model Makeup MUA</h4>        
              <p>
              <ul>
                 Model Make up untuk ajang lomba dengan Evianti Makeuppada 16 Agustus 2019
              </ul>             
              </p>
            </div>
            <div class="resume-item">
              <h4>Pelatih Tari Ratoe Jaroe</h4>        
              <p>
              <ul>
              Pelatih tari ratoe jaroe kepada karyawan PT BumitamaGunajaya Agro cabang Blok M pada 16 Juni - 16 Juli 2019
              </ul>             
              </p>
            </div>  
            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item pb-0">
              <h4>Pendidikan dua jenjang terkini</h4>        
              <ul>
                <li>Universitas Pembangunan Jaya</li>
                <p>Mahasiswa aktif Program Studi Informatika tahun ajaran masuk 2019 sampai sekarang</p>
                <li>SMAN 6 Tangerang Selatan</li>
                <p>Lulusan tahun ajaran 2019/2021 Jurusan MIPA</p>
              </ul>
              </p>
            </div>          
          </div>                           
        </div>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">      
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
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