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

    <?php
    
    $id = $_GET['id'];
    include('../../koneksi.php');

   

    $result = mysqli_query($koneksi,"select * from akun where id='$id'");

    ?>

    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
    

        <form method="get" action="edit.php">
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
                </div>

                <div class="form-group">
                    <label>nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                </div>

                <div class="form-group">
                    <label>role</label>
                    <input type="text" name="role" class="form-control" value="<?php echo $row['role']; ?>">
                </div>

                <button type="submit" class="btn btn-success btn-block">Update</button>

            <?php
            }
            mysqli_close($koneksi);
            ?>
        </form>
    </div>
</body>

</html>