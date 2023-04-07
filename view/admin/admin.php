<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
    <h1>Selamat datang admin <?= $_SESSION['user'] ?></h1>
    <table class="table table-striped table-hover dtabel">
    <a class="btn btn-success" href="admin/tambah.php">tambah</a>
        <hr>
    <thead>
            <tr>
                <th>No</th>
                <th>username</th>
                <th>nama</th>	
                <th>email</th>
                <th>role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $query = "SELECT * FROM akun"; //memanggil file yang ada di table buku

                $result = mysqli_query($koneksi, $query); //perintah atau instruksi yang dapat digunakan untuk mengelola database atau tabel

            ?>

            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { //berfungsi untuk melakukan perulangan yang akan   menampilkan data di table
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['role']; ?></td>

                    <td>
                        <a href="admin/edit_form.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"  role="button">Edit</a>
                        <a href="admin/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin ingin men delete?')" role="button">Delete</a>
                    </td>
                </tr>

            <?php
            }
            mysqli_close($koneksi); //untuk mematikan queary atau memutuskan sinyal dari mysql
            ?>
        </tbody>
    </table>
    <hr>
    <a class="nav-link" href="../logout.php">LOG_OUT</a>
</div>