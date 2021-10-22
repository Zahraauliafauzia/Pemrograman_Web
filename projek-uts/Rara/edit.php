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
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>



<div class="container">
 
    <h2>Edit Penulisan</h2>
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

$id = $nAma = $eMail = $sUbjek= $pEsan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = bersihkan_input($_POST['id']);
    $nAma = bersihkan_input($_POST['nama']);
    $eMail= bersihkan_input($_POST['email']);
    $sUbjek = bersihkan_input($_POST['subjek']);
    $pEsan = bersihkan_input($_POST['pesan']);

    $strSQL = "UPDATE datamessage SET 
    subjek='$sUbjek', 
    pesan='$pEsan' 
    WHERE id='$id'"; 

    //echo "Query = ".$strSQL;  //mengecek datanya sudah masuk database atau belum
    $execStrSQL = mysqli_query($conn,$strSQL);
    if ($execStrSQL) {
?>
        <div class = "alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Data berhasil diubah.</b>
         </div>
<?php    
    }
    else {
?>
        <div class = "alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Data Tidak Berhasil diubah :( </b>
            <?php echo "<br>Error: ".$execStrSQL. "<br>".mysqli_error($conn); ?>
         </div>
<?php
    }
}
else {
    if(isset($_GET['id'])) {
        $id = bersihkan_input ($_GET['id']);
        $strSQL = "SELECT * FROM datamessage WHERE id='$id'";    //SELECT nim,namadepan,namabelakang,email FROM mahasiswa
        $execStrSQL = mysqli_query($conn,$strSQL);
        if (mysqli_num_rows($execStrSQL)) {
          while ($row = mysqli_fetch_assoc($execStrSQL)) {
              $nAma = $row['nama'];
              $eMail = $row['email'];
              $sUbjek = $row['subjek'];
              $pEsan = $row['pesan'];
             }                
         }
     }
 }
  
 
?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">        
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th><input type="text" class="form-control" name="id" value="<?= $id ?>"
                     readonly ></th>       
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama</td>        
                    <td><input type="text" class="form-control" name="nama" value="<?= $nAma ?>"></td>       
                </tr>
                <tr>
                    <td>Email</td>        
                    <th><input type="text" class="form-control" name="email" value="<?= $eMail ?>"
                     readonly ></th>      
                </tr>
                <tr>
                    <td>Subjek</td>        
                    <td><input type="text" class="form-control" name="subjek" value="<?= $sUbjek ?>"></td>       
                </tr>
                <tr>
                    <td>Pesan</td>        
                    <td><input type="text" class="form-control" name="pesan" value="<?= $pEsan ?>"></td>       
                </tr>
            </tbody>
        </table>
    <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">                
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </span>
        </div> 
    </div>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>
