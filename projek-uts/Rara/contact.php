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

  <title>Contact</title>
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
          

          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
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

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Me !</h2>
          <p>Teman-teman semua jika kalian mempunyai pertanyaan atau request terkait konten yang akan aku buat, kali silakan memberi pendapat dengan mengisi kolom di bawah ini ya.
            Nanti aku baca semua dan semoga aku bisa realisasikan saran kalian kalian. 
          </p>
        </div>
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">   
          
          <?php
            include "koneksi.php";
            include "fungsi.php";

            $nAma = $eMail = $sUbjek= $pEsan = "";
           

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              //$id = bersihkan_input($_POST['id']);
              $nAma = bersihkan_input($_POST['nama']);
              $eMail= bersihkan_input($_POST['email']);
              $sUbjek = bersihkan_input($_POST['subjek']);
              $pEsan = bersihkan_input($_POST['pesan']);

              $strSQL = "INSERT INTO datamessage (nama, email, subjek, pesan) 
              VALUES ('$nAma', '$eMail', '$sUbjek', '$pEsan')";

              //echo "Query = ".$strSQL;  //mengecek datanya sudah masuk database atau belum
              $execStrSQL = mysqli_query($conn,$strSQL);
              if ($execStrSQL) {
          ?>
              <div class = "alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b>Massagemu sudah terkirim.</b>
             </div>

          <?php 

              }
              else {
          ?>
               <div class = "alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <b>Kamu gagal mengirim pesan.</b>
                  <?php echo "<br>Error: ".$execStrSQL. "<br>".mysqli_error($conn); ?>
               </div>
          <?php               
              }
            }

          ?>
          
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" role="form" >
              <div class="row">  
                    
                  <div class="col-md-6 form-group">
                    <input type="text" name="nama" class="form-control"  placeholder="Your Name">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="email" placeholder="Your Email">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <textarea type="text" class="form-control" name="subjek" placeholder="Subject" ></textarea>
                </div>
                <div class="form-group mt-3">
                  <textarea type="text" class="form-control" name="pesan" placeholder="Massage"></textarea>
                </div>
                

                <div class="col-sm-12">    
                  <span class="m-1">   
                    <br>             
                      <button type="submit" class="btn btn-primary"> 
                          Send Message
                      </button>
                      <a href="login.php" > Detail</a> 
                  </span>
              </div>  
                                    
            </form>            
            
            

          </div>

          

      </div>
    </section><!-- End Contact Section -->

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