<?php
session_start();

if ( !isset($_SESSION["login2"])) {
  header("Location: login.php");
  exit;
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>


<div class="container">
  <h2>Kumpulan Pesan Dari Mereka !</h2>
  <div class="row mb-2">
  <div class="col-sm-12">    
    <span class="m-1">
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </span>
  </div> 
</div>          
  <table id="example" class="table">
    <thead class= "thead-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Choice</th>
      </tr>
    </thead>
    <tbody>
<?php
 $strSQL = "SELECT * FROM datamessage";    //SELECT nim,namadepan,namabelakang,email FROM mahasiswa
 $execStrSQL = mysqli_query($conn,$strSQL);

 if (mysqli_num_rows($execStrSQL) > 0) {  // ini untuk cek data di database
    while ($row = mysqli_fetch_assoc($execStrSQL)) {  // Untuk melooping data. Menampilkan array yang asosiatif.                 
 
?>
      <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["subjek"] ?></td>
        <td><?= $row["pesan"] ?></td>
        <td>
          <a href="edit.php?id=<?= $row["id"] ?>" class="btn btn-outline-info">Edit</a>
          <a href="hapus.php?id=<?= $row["id"] ?>" class="btn btn-outline-danger">Hapus</a> 
        </td>
      </tr>
<?php
    }
 }
?>
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();   // id nya "example" *di line 28
    } );
  </script>
</body>
</html>
