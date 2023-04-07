<?php

require_once "core/inti.php";

//validasi register
if (isset($_POST['btnsb'])) {

    $user     = $_POST['username'];
    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $pass     = $_POST['password'];

    if (!empty(trim($user)) && !empty(trim($nama)) && !empty(trim($email)) && !empty(trim($pass))) {

        //memanggil fungsi untuk memastikan penamaan username tidak boleh double
        if (register_cek_nama($user)) {

            //memanggil fungsi untuk memasukan data ke database
            if (register_user($user, $nama, $email, $pass)) {
                echo
                "<script>
                    alert('Registrasi Akun Berhasil');
                    document.location.href = 'login.php';
                </script>";
            } else {
                echo 'gagal';
            }
        } else {
            echo 'username sudah diambil';
        }
    } else {
        echo
        "<script>
            alert('Tidak boleh kosong');
         </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/register.css">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <form action="register.php" method="post" class="p-3 mt-3">

            <div class="logo">
                <img src="asset/image/usu1.png" alt="">
            </div>

            <div class="text-center mt-4 name">
                PENGADUAN
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="username" id="username" placeholder="username">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="nama" id="nama" placeholder="nama">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="email" placeholder="email">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>

            <button type="submit" name="btnsb" class="btn mt-3">Register</button>

        </form>
        <div class="text-center fs-6">
            <a href="login.php">Sudah punya akun?</a>
        </div>
    </div>
</body>

</html>