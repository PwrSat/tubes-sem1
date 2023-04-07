<?php

require_once "core/inti.php";

//redirect kalau user sudah login
if ( isset($_SESSION['user'])){
    header('Location: view/dashboard.php');
}



//validasi register
if (isset($_POST['btnsb'])) {

    $user   = $_POST['username'];
    $pass   = $_POST['password'];

    if (!empty(trim($user)) && !empty(trim($pass))) {

        if (login_cek_nama($user)) {
           if(cek_data($user, $pass)){
                $_SESSION['user'] = $user;
                header('Location: view/dashboard.php');
           } else {
                echo 'data ada yang salah ';
           }

        } else {
            echo 'namanya tidak ada';
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
    <link rel="stylesheet" href="asset/css/login.css">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="asset/image/usu1.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            PENGADUAN
        </div>
        <form method="POST" action="login.php" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input id="" type="text" name="username" placeholder="username" value="" required autofocus>
                <div class="invalid-feedback">
                    Email is invalid
                </div>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input id="password" type="password" name="password" placeholder="password" required data-eye>
                <div class="invalid-feedback">
                    Password is required
                </div>
            </div>
            <button type="submit" class="btn mt-3" name="btnsb">Login</button>

        </form>
        <div class="text-center fs-6">
            <p><a href="forgot.php">forgot password </a>/<a href="register.php"> Register</a></p>
        </div>
    </div>
</body>

</html>