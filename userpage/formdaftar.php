<?php
include "../prosesLogin/session_login.php";
include "../connect/koneksi.php";
$username = $_SESSION["email"];
$tb_user = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user where email='$username'"));
$nama = $tb_user["namalengkap"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Daftar Magang</title>
          <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">L0g0</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="pengumuman.php">Pengumuman</a></li>
          <li class="dropdown"><a class="getstarted scrollto" href="#"><span>Hi, <?= $tb_user["namalengkap"] ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../prosesLogin/session_logout.php">Log Out</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<div class="fix"> 
      <div class="container" style="margin-top: 80px; margin-bottom: 50px;">
        <h4 class="text-center">Formulir Pendaftaran Magang</h4>
        <hr>
        <form action="../tambahdata/formdaftarAction.php" method="POST">

              <br>
              <h3>Data Diri</h3>
              <label for="" style="margin-bottom: 5px;">NIM/NISN</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-user" ></i></div>
                </div>
                <input type="text" name="nim" class="form-control" placeholder="NIM / NISN" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">Nama Lengkap</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-user" ></i></div>
                </div>
                <input type="text" name="namalengkap" class="form-control" placeholder="Masukan Nama" style="margin-bottom: 5px;" required>
              </div>
          
              <label for="" style="margin-bottom: 5px;">Tempat Lahir</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="tempatlahir" class="form-control" placeholder="Masukan Tempat Lahir" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">Tanggal Lahir</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="date" name="tgllahir" class="form-control" placeholder="Masukan Tanggal Lahir" style="margin-bottom: 5px;" required>
              </div>
            
              <label for="" style="margin-bottom: 5px;">Jenis Kelamin</label>
              <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                  </div>
                  <select class="form-control form-control" name="jeniskelamin">
                      <option selected>Pilih</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                  </select>
              </div>

              <label for="" style="margin-bottom: 5px;">Alamat</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">Sekolah/Universitas</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-user" ></i></div>
                </div>
                <input type="text" name="universitas" class="form-control" placeholder="Masukan Sekolah/Universitas" style="margin-bottom: 5px;" required>
              </div>
            
              <label for="" style="margin-bottom: 5px;">Jurusan</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">Alamat Sekolah/Universitas</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="text" name="alamatuniv" class="form-control" placeholder="Masukan Alamat Sekolah" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">Tanggal Mulai Magang</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fa fa-address-card"></i></div>
                </div>
                <input type="date" name="tglmulai" class="form-control" placeholder="Masukan Tanggal Mulai Magang" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">Tanggal Selesai Magang</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="date" name="tglselesai" class="form-control" placeholder="Masukan Tanggal Selesai Magang" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">No Telp</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="number" name="notelp" class="form-control" placeholder="Masukan No Telepon Aktif" style="margin-bottom: 5px;" required>
              </div>
              <button type="submit" name="button" class="btn btn-primary btn-md" style="margin-top: 5px;">Submit</button>
            </div>
        </form>
      </div>
    </div>
</body>
</html>