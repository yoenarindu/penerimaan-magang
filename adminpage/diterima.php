<?php
include "../connect/koneksi.php";
?>

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
</head>

<body>
<?php include "../assets/sidebar_admin.php"; ?>
    <?php include "../assets/navbar_admin.php"; ?>
    <?php
    if (isset($_SESSION["pesan"])) {
        if ($_SESSION["pesan"] == "sukses") { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>BERHASIL!!</strong> Surat Berhasil Di Upload
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php unset($_SESSION["pesan"]);
        } elseif ($_SESSION["pesan"] == "gagal") { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>GAGAL!!!</strong> Surat Gagal Di Upload
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php
            unset($_SESSION["pesan"]);
        }
    } ?>
    <!-- Awal Isi Konten -->
    <div class="container-fluid">
        <!-- Halaman kepala -->
        <h1 class="h3 mb-2 text-gray-800">Pengajuan Yang Di Terima</h1>
        <!-- Data Tabel -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Permohonan Yang Di Terima</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                            <tr>
                                <th>Option</th>
                                <th>NIM/NISN</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Universitas/Sekolahan</th>
                                <th>Jurusan</th>
                                <th>Alamat Universitas/Sekolah</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>No Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                            $permohonan = mysqli_query($koneksi, "SELECT * FROM formulir");
                            while ($row = mysqli_fetch_assoc($permohonan)):
                                if ($row["statuspendaftaran"] == "1") { ?>
                                <td>
                                    <a href="../update_data/terima_pengajuan.php?id_pengajuan=<?= $row["id_pengajuan"] ?>&kode_surat=<?= $row["kode_surat"] ?>&nik_user=<?= $row["nik"] ?>"><button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Upload</button></a>
                                </td>
                                <td><?= $row["nim"]?></td>
                                <td><?= $row["namalengkap"]?></td>
                                <td><?= $row["tempatlahir"]?></td>
                                <td><?= $row["tgllahir"]?></td>
                                <td><?= $row["jeniskelamin"]?></td>
                                <td><?= $row["alamat"]?></td>
                                <td><?= $row["universitas"]?></td>
                                <td><?= $row["jurusan"]?></td>
                                <td><?= $row["alamatuniv"]?></td>
                                <td><?= $row["tglmulai"]?></td>
                                <td><?= $row["tglselesai"]?></td>
                                <td><?= $row["notelp"]?></td>
                            </tr>
                            <?php
                             }
                            endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>&copy; Copyright 2022 by <a href="#">mjk</a></span>
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