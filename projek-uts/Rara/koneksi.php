<?php 
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabse = "webpribadi";

//Buat Koneksi
$conn = mysqli_connect($namaServer,$username,$password,$namaDatabse);

//Cek Koneksi
if (!$conn) {
    die("Koneksi Gagal: ".mysqli_connect_error());
}

?>