<?php
include '../assets/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-10">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-50 col-xl-7" style="padding-top: 20px; padding-bottom: 30px;">
        <div class="card text-black" style="border-radius: 35px;">
          <div class="card-body p-md-10">
            <div class="row justify-content-center">
              <div class="col-md-9 col-lg-8 col-xl-10 order-5 order-lg-9">

                <p class="text-center h2 fw-bold mb-5 mx-3 mx-md-4 mt-2">Sign up</p>

                <form action="registAction.php" class="mx-1 mx-md-4" method="POST">

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="nim" class="form-control" placeholder="NIM / NISN" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="universitas" class="form-control" placeholder="Sekolah / Universitas" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" class="form-control" placeholder="Password" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                       <input type="hidden" name="level" class="form-control" />
                    </div>
                  </div>
                 
            
                  <p class="text-center h6 mb-5 mx-3 mx-md-4 mt-2">Sudah punya akun? <a href="login.php">Masuk</a></p>
                  
                  <div class="d-flex justify-content-center mx-4 mb-2 mb-lg-4">
                    <button type="submit" name="button" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include '../assets/footer.php';
?>

<!-- Vendor JS Files -->
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</div>
</body>
</html>