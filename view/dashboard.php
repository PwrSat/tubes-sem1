<?php

require_once "../core/inti2.php";

if (!isset($_SESSION['user'])) {
    header('Location:login.php');
}

$query = "SELECT * FROM akun, laporan"; //memanggil file yang ada di table data1

$result = mysqli_query($koneksi, $query);

?>

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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesoeet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>

<?php include("header.php");?>

    <!-- memanggil tampilan admin di folder admin-->
    <?php if (cek_status($_SESSION['user'])) {

        include("admin/admin.php");

    } else if (cek_status2($_SESSION['user'])) { //kondisi dua untuk menampilkan tampilan admin apabila user bukan admin
       
        include('user/user.php');

    } else if (cek_status3($_SESSION['user'])) {

        include('petugas/petugas.php');

    } else {

        header('Location: ../login/login.php');
        
    }
    ?>

<?php include("footer.php");?>

</body>

</html>