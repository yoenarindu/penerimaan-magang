<?php
include "../connect/koneksi.php";
?>
<?php
include "../prosesLogin/session_login.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/img/desa.png" rel="icon">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Grafik -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
</head>

<body>
    <?php include "../assets/sidebar_admin.php"; ?>
    <?php include "../assets/navbar_admin.php"; ?>
    <?php
    if (isset($_SESSION["pesan"])) {
        if ($_SESSION["pesan"] == "sukses") { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>BERHASIL!!</strong> Permohonan Berhasil Di Terima
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php unset($_SESSION["pesan"]);
        } elseif ($_SESSION["pesan"] == "gagal") { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>GAGAL!!!</strong> Permohonan Gagal Di Terima
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
            unset($_SESSION["pesan"]);
        } elseif ($_SESSION["pesan"] == "sukses1") { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>BERHASIL!!</strong> Permohonan Berhasil Di Tolak
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php unset($_SESSION["pesan"]);
        } elseif ($_SESSION["pesan"] == "gagal1") { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>GAGAL!!!</strong> Permohonan Gagal Di Tolak
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php
            unset($_SESSION["pesan"]);
        }
    }
    $total_permohonan = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT COUNT(nim) AS total FROM formulir"));
    ?>
    <!-- Awal Isi Konten -->
        <!-- Content Row -->
        <div class="row container-fluid" >
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-5 col-md-7 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Permohonan Magang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_permohonan["total"] ?> Permohonan</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
    <!-- Awal Isi Konten -->
    <div class="container-fluid">
        <!-- Data Tabel -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">Permohonan Magang Terbaru</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Option</th>
                                <th>NIM/NISN</th>
                                <th>Nama Lengkap</th>
                                <th>Universitas/Sekolahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                            $permohonan = mysqli_query($koneksi, "SELECT * FROM formulir");
                            while ($row = mysqli_fetch_assoc($permohonan)):
                                if ($row["statuspendaftaran"] == "0") { ?>
                                <td>
                                    <a href="../update_data/terima_permohonan.php?id=<?= $row["id"] ?>"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Terima</button></a>
                                    <a href="../update_data/tolak_pengajuan.php?id_pengajuan=<?= $row["id_pengajuan"] ?>&kode_surat=<?= $row["kode_surat"] ?>&nik_user=<?= $row["nik"] ?>"><button type="button" class="btn btn-danger" style="margin-bottom: 10px;">Tolak</button></a> 
                                </td>
                                <td><?= $row["nim"]?></td>
                                <td><?= $row["namalengkap"]?></td>
                                <td><?= $row["universitas"]?></td>
                                <td>
                                <a href="../adminpage/detail_permohonan.php?id=<?= $row["id"] ?>"><button type="button" class="btn btn-warning" style="margin-bottom: 10px;">Detail</button></a>
                                </td>
                            </tr>
                            <?php
                             }
                            endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>2
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>&copy; Copyright 2022 by <a href="#">Dispendikbud kota mjk</a></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/js_sidebar.js"></script>
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>