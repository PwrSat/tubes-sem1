<?php 
    require_once "core/inti.php";
    if (isset($_POST['btnsb'])) {

        $email  = $_POST['lupa_email'];
        $pass   = $_POST['lupa_password'];

        
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM akun WHERE email = '{$email}'";
        $pemeriksaan_email = mysqli_query($koneksi, $sql);

        if(!$pemeriksaan_email){
            echo"<h4>email anda tidak terdaftar</h4>";
        }else{
            $ubah = "UPDATE akun SET PASSWORD = '$pass' WHERE email = '$email'";

            if($koneksi->query($ubah)==TRUE){
                echo"<script>alert('password berhasil diubah '); window.location='login.php'</script>";
            }else{
                echo"terjadi sebuah kesalahan: ";
            }
        }
        $koneksi->close();
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
        <form method="POST" action="" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input id="" type="text" name="lupa_email" placeholder="email" value="" required autofocus>
                <div class="invalid-feedback">
                    Email is invalid
                </div>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input id="password" type="password" name="lupa_password" placeholder="reset" required data-eye>
                <div class="invalid-feedback">
                    Password is required
                </div>
            </div>
            <button type="submit" class="btn mt-3" name="btnsb">reset</button>

        </form>
        <div class="text-center fs-6">
            <p>sudah punya akun?<a href="login.php">login</a></p>
        </div>
    </div>
</body>

</html>