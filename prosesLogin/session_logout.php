<?php
include "../connect/koneksi.php";
session_start();
$user = $_SESSION["nim"];
session_destroy();
header('location: login.php');
?>