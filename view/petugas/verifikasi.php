<?php
include('../../fungsi/db.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <h1 class="text-center  text-white bg-dark col-md-12">PENDING LIST</h1>
        <table class="table table-bordered col-md-12">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nama</th>
                    <th scope="col">judul</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">isi_laporan</th>
                    <th scope="col">gambar</th>
                    <th scope="col">status</th>
                    <th scope="col">action</th>
                </tr>
            </thead>

            <?php

            $query = "SELECT * FROM  laporan WHERE status = 'pending' ORDER BY id ASC";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_array($result)) { ?>


                <tbody>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['judul']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['isi_laporan']; ?></td>
                        <td><?php echo "<img src='image/$row[gambar]' width='70' height='90' />";?></td>
                        <td><?php echo $row['status']; ?></td>


                        <td>
                            <form action="../petugas/verifikasi.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                <input type="submit" name="approve" value="approve">
                                <input type="submit" name="delete" value="delete">

                            </form>
                        </td>
                    </tr>

                </tbody>
            <?php } ?>
        </table>


        <!-- ================================================================== -->


        <h1 class="text-center  text-white bg-success col-md-12">APPROVED LIST </h1>

        <table class="table table-bordered col-md-12">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nama</th>
                    <th scope="col">judul</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">isi_laporan</th>
                    <th scope="col">gambar</th>
                    <th scope="col">status</th>


                </tr>
            </thead>

            <?php
            $query = "SELECT * FROM  laporan WHERE status = 'approved' ORDER BY id ASC";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_array($result)) { ?>


                <tbody>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['judul']; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['isi_laporan']; ?></td>
                        <td><?php echo "<img src='img/$row[gambar]' width='70' height='90' />";?></td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                </tbody>

            <?php } ?>

            <?php
            if (isset($_POST['approve'])) {

                $id = $_POST['id'];
                $select = "UPDATE laporan SET status = 'approved' WHERE id = '$id' ";
                $resut = mysqli_query($koneksi, $select);
                header("location:verifikasi.php");
            }


            if (isset($_POST['delete'])) {

                $id = $_POST['id'];
                $select = "DELETE  FROM laporan  WHERE id = '$id' ";
                $resut = mysqli_query($koneksi, $select);
                header("location:verifikasi.php");
            }

            ?>

        </table>
        <a href="../dashboard.php">kembali</a>
    </div>

</body>