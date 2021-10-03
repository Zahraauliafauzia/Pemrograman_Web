<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if (isset($_POST['submit'])) {
            $nFirst = $_POST['nama_depan'];
            $nLast = $_POST['nama_belakang'];
            $nTgl_Lahir = $_POST['tgl_lahir'];
            $nJns_Kel = $_POST['gender'];
            $nMail = $_POST['email'];
            $nN_Phone = $_POST['phone'];
            $nAgama = $_POST['agama'];
            $nAlamat = $_POST['alamat'];
            $nKode_Pos = $_POST['kodePos'];
            $nStatus_ = $_POST['status'];
            $nAsal_Sekolah = $_POST['asal_sekolah'];
            $nTahun_Lulus = $_POST['tahun_lulus'];
            $nJurusan = $_POST['prodi'];
            $nGelombang = $_POST['gelombang'];
            $nSumber_Informasi = $_POST['sumber_infor'];

            echo "<br> Nama Depan : " .$nFirst;
            echo "<br> Nama Belakang : " .$nLast;
            echo "<br> Tanggal Lahir : " .$nTgl_Lahir;
            echo "<br> Jenis Kelamin : " .$nJns_Kel;
            echo "<br> E-mail Aktif : " .$nMail;
            echo "<br> Nomor Handphone : " .$nN_Phone;
            echo "<br> Agama : " .$nAgama;
            echo "<br> Alamat : " .$nAlamat;
            echo "<br> Kode Pos : " .$nKode_Pos;
            echo "<br> Status : " .$nStatus_;

            echo "<br> <br> DATA SEKOLAH ASAL CALON MAHASISWA";
            echo "<br> Asal Sekolah : " .$nAsal_Sekolah;
            echo "<br> Tahun Lulus : " .$nTahun_Lulus;

            echo "<br> <br> PEMINATAN PROGRAM STUDI";
            echo "<br> Program Studi yang Dipilih : " .$nJurusan;

            echo "<br> <br> UJIAN SARINGAN MASUK";
            echo "<br> Pilihan Gelombang : " .$nGelombang;
            echo "<br> Sumber Informasi : " .$nSumber_Informasi;
             


        }
    ?>
</body>
</html>
