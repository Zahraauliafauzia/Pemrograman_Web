<?php
session_start();

if ( isset ($_SESSION["login2"])) {
    header("Location: detail_contact.php");
    exit;
}



require 'fungsi.php';

    if (isset($_POST["login"])) {

        $usernamelogin = $_POST["usernamelogin"];
        $passwordlogin = $_POST["passwordlogin"];
      
        $result = mysqli_query ($conn, "SELECT * FROM user WHERE usernamelogin='$usernamelogin'");

        if( mysqli_num_rows ($result) === 1 ) {
           
            // Cek password 
            // Untuk password sendiri karna saya gunakan hash untuk pengacakkan password
            /* admin 1 - username : raracaly , password : 1234
               admin 2 - username : hallobiru, password : 4321*/  
            $row = mysqli_fetch_assoc($result);  // cek password
            if ( password_verify($passwordlogin, $row["passwordlogin"])) { // kalau match sama password yang sudah diacak maka akan ke detail_contact.php
                // set session 
                $_SESSION["login2"] = true;

                header("Location: detail_contact.php");
                exit;
            }
        }

        $error = true;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back Admin!</h3>

              <?php 
                if( isset ($error)) :
              ?>

                <p style= "color : red; font-style: italic;"> Username atau Password salah !</p>

              <?php
                endif;
              ?>

              <!-- Sign In Form -->
              

              <form action ="" method="post">
                <div class="form-floating mb-3">
                  <label for="usernamelogin">Username</label>
                  <input type="text" class="form-control" name="usernamelogin" id="usernamelogin" placeholder="Username">                  
                </div>

                <div class="form-floating mb-3">
                  <label for="passwordlogin">Password</label>
                  <input type="password" class="form-control" name= "passwordlogin" id="passwordlogin" placeholder="Password">                 
                </div>                             

                <div class="d-grid">
                  <button class="btn btn-lg btn-info btn-login text-uppercase " type="submit" name="login">Sign in</button>
                  <a href="contact.php" class=" btn btn btn-lg btn-outline-info text-uppercase ">Kembali</a>
                  <div class="text-center">                   
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
</body>
</html>