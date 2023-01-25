<?php
include "../connect/koneksi.php";
$id = (isset($_POST['id'])?$_POST['id']: '');
$status = '1';

$data_permohonan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM formulir"));

if ($data_permohonan['statuspendaftaran'] == '0'){
    $sql = mysqli_query($koneksi, "UPDATE formulir SET statuspendaftaran = '$status' where id = $id)");
    if (!$sql){
        echo "<script>
        alert('Formulir gagal!');
        document.location='../adminpage/index.php';
        </script>";
    }else{
        echo "<script>
        alert('Eksekusi BERHASIL!');
        document.location='../adminpage/diterima.php';
        </script>";
    }
}
?>