<?php
include '../assets/header.php';
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

<div class="fix"> 
      <div class="container" style="margin-top: 80px; margin-bottom: 50px;">
        <h4 class="text-center">Formulir Pendaftaran Magang</h4>
        <hr>
        <form action="../tambahdata/uploadAction.php" method="POST">

              <br>
              <h3>Berkas-berkas</h3>
              <label for="" style="margin-bottom: 5px;">Surat Magang</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-user" ></i></div>
                </div>
                <input type="file" name="suratmagang" class="form-control" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">Surat Bakesbangpol</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-user" ></i></div>
                </div>
                <input type="file" name="suratbakesbangpol" class="form-control" style="margin-bottom: 5px;" required>
              </div>
          
              <label for="" style="margin-bottom: 5px;">Surat Balasan</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="file" name="suratbalasan" class="form-control" placeholder="Masukan Tempat Lahir" style="margin-bottom: 5px;" required>
              </div>

              <label for="" style="margin-bottom: 5px;">KTM/Kartu Pelajar</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                </div>
                <input type="file" name="ktm" class="form-control" placeholder="Masukan Tanggal Lahir" style="margin-bottom: 5px;" required>
              </div>
              <button type="submit" name="button" class="btn btn-primary btn-md" style="margin-top: 5px;">Submit</button>
            </div>
        </form>
      </div>
    </div>
</body>
</html>