<?php
session_start();
include "../connect/koneksi.php";

if (isset($_POST["button"])) {
    $username = $_POST["email"];
    $password = md5($_POST["password"]);
    $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT user.level, user.nim FROM user WHERE user.email = '$username' AND user.password='$password'"));
    if ($username and $password) {
        if ($data) {
            if ($data['level'] == "admin") {
                $_SESSION["email"] = $username;
                header("location: ../adminpage/");
            } else {
                $_SESSION["nim"] = $data['nim'];
                $_SESSION["email"] = $username;
                header("location: ../userpage/index.php");
            }
        } else { ?>
            <div style="color: red; margin: 5px;"><i><?= "Username atau Password tidak sesuai"; ?></i></div>
        <?php }
    } else { ?>
        <div style="color: red; margin: 5px;"><i><?= "Username Atau Password Tidak Boleh Kosong"; ?></i></div>
<?php }
} ?>