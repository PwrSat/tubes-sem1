<?php

require_once "../../core/inti3.php";

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>TUBES</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../../images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesoeet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>

    =
    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
    

        <form method="post" action="insert.php">

                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label>nama</label>
                    <input type="text" name="nama" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input type="email" name="email" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label>passowrd</label>
                    <input type="password" name="email" class="form-control" value="">
                </div>

                <button type="submit" name="" class="btn btn-success btn-block">tambah</button>

        </form>
    </div>
</body>

</html>