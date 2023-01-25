
<?php
include "../connect/koneksi.php";
$nim = $_POST["nim"];
$namalengkap = $_POST["namalengkap"];
$universitas = $_POST["universitas"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$level = $_POST["level"];

$sql = "INSERT INTO user (nim,namalengkap,universitas,email,password, level) VALUES('$nim','$namalengkap','$universitas','$email','$password', '')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    document.location='register.php';
    </script>";
}else{
    echo "<script>
    document.location='../userpage/index.php';
    </script>";
}

?>