<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
    <h1>Selamat petugas <?= $_SESSION['user'] ?></h1>
    <table class="table table-striped table-hover dtabel">
    <a class="nav-link" href="../logout.php">LOG_OUT</a>
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>judul</th>
                <th>tanggal</th>
                <th>laporan</th>
                <th>gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $query = "SELECT * FROM  laporan WHERE status = 'approved' ORDER BY id ASC"; //memanggil file yang ada di table buku

                $result = mysqli_query($koneksi, $query); //perintah atau instruksi yang dapat digunakan untuk mengelola database atau tabel

            ?>

            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { //berfungsi untuk melakukan perulangan yang akan   menampilkan data di table
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo $row['isi_laporan']; ?></td>
                    <td><?php echo "<img src='img/$row[gambar]' width='70' height='90' />";?></td>

                    <td>
                        <a href="petugas/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin ingin men delete?')" role="button">Delete</a>
                    </td>
                </tr>

            <?php
            }
            mysqli_close($koneksi); //untuk mematikan queary atau memutuskan sinyal dari mysql
            ?>
        </tbody>
    </table>
    <a href="petugas/verifikasi.php" class="btn btn-success"  role="button">verifikasi</a>
</div>