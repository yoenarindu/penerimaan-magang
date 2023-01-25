<?php
include "../connect/koneksi.php";
$id = (isset($_POST['id'])?$_POST['id']: '');
$nim = $_POST['nim'];
$namalengkap = $_POST['namalengkap'];
$tempatlahir = $_POST['tempatlahir'];
$tgllahir = $_POST['tgllahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$universitas = $_POST['universitas'];
$jurusan = $_POST['jurusan'];
$alamatuniv = $_POST['alamatuniv'];
$tglmulai = $_POST['tglmulai'];
$tglselesai = $_POST['tglselesai'];
$notelp = $_POST['notelp'];
$status = $_POST['statuspendaftaran'];

$sql = "INSERT INTO formulir (id, nim, namalengkap, tempatlahir, tgllahir, jeniskelamin, alamat, universitas, jurusan, alamatuniv, tglmulai, tglselesai, notelp, statuspendaftaran) VALUES ('', '$nim','$namalengkap','$tempatlahir','$tgllahir','$jeniskelamin', '$alamat','$universitas', '$jurusan', '$alamatuniv','$tglmulai', '$tglselesai', '$notelp', '')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    $_SESSION["pesan"] = "gagal";
    echo "Gagal";
    header("location: ../userpage/index.php");
}else{
    $_SESSION["pesan"] = "sukses";
    echo 'Sukses';
    header("location: ../userpage/index.php");
}

?>