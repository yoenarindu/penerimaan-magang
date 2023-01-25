<?php
include "../connect/koneksi.php";
// digunakan untuk sesi setelah login agar tidak bisa kembali ke menu login
session_start();
if( !isset($_SESSION["email"]) and !isset($_SESSION["password"])){ //jika tidak di temukan session login
    include "loginAction.php";
    header("location: ../prosesLogin/login.php");
    exit;
}
