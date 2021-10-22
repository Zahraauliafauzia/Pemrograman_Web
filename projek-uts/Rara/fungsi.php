<?php
require 'koneksi.php';
$conn = mysqli_connect($namaServer,$username,$password,$namaDatabse);

 
function bersihkan_input($data) {
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;    
}

function hapus($id) {
    mysqli_query($conn,"DELETE  FROM datamessage WHERE id=$id");
    return mysqli_affected_rows($conn);
}

/*function registrasi($data) {
    global $conn;

    $usernamelogin = strtolower (stripslashes ($data["usernamelogin"]));
    $passwordlogin = mysqli_real_escape_string ($conn, $data["passwordlogin"]);
    $passwordlogin2 = mysqli_real_escape_string ($conn, $data["passwordlogin2"]);

    //cek konfirmasi password 
    if ($passwordlogin !== $passwordlogin2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
                </script>";
        return false;
    }

    // Enkripsi Password 
    $passwordlogin = password_hash($passwordlogin, PASSWORD_DEFAULT);
    var_dump($passwordlogin); die;

} */

?>