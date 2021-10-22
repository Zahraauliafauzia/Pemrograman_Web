<?php
session_start();

if ( !isset($_SESSION["login2"])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>



<div class="container">
  <h2>Konfirmasi Penghapusan</h2>
  <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">
            <a href="detail_contact.php" class="btn btn-outline-info" role="button">Kembali</a>
            </span>
        </div> 
  </div>   
 
  <?php
    include "koneksi.php";
    include "fungsi.php";
    $conn = mysqli_connect($namaServer,$username,$password,$namaDatabse);


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = bersihkan_input($_POST['id']);
        $strSQL = "DELETE FROM datamessage WHERE id='$id'";
        $execStrSQL = mysqli_query($conn,$strSQL);
        if ($execStrSQL) {
  ?>
        <div class = "alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <b>Data Berhasil</b> Dihapus dari database.
        </div>
  <?php
        }
        else {
  ?>
        <div class = "alert alert-warning alert-dismissible">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <b>Data Tidak Berhasil</b> Dihapus dari database.
        </div>
  <?php
        }
    }
    else if (isset($_GET['id'])) {
      $id = bersihkan_input($_GET['id']);
    }

    

    $strSQL = "SELECT * FROM  datamessage WHERE id='$id' ";
    $execStrSQL = mysqli_query($conn,$strSQL);
    if (mysqli_num_rows($execStrSQL)) {
      while ($row = mysqli_fetch_assoc($execStrSQL)) {
  ?>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th><?= $row["id"] ?></th>       
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>Nama Pengirim</td>        
        <td><?= $row["nama"] ?></td>       
    </tr>
      <tr>
        <td>Email</td>        
        <td><?= $row["email"] ?></td>       
      </tr>
      <tr>
        <td>Subject</td>        
        <td><?= $row["subjek"] ?></td>       
      </tr>
      <tr>
        <td>Message</td>        
        <td><?= $row["pesan"] ?></td>       
      </tr>
    </tbody>
  </table>  
  <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">  
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" class="btn btn-danger">
                    Hapus
                </button>
            </form>
            </span>
        </div> 
   </div> 
   <?php
      }
    }
  ?> 
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>

