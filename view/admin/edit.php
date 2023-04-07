<?php

include('../../fungsi/db.php'); 

$id = $_GET['id'];
$username = $_GET['username'];
$nama = $_GET['nama'];
$email = $_GET['email'];
$role = $_GET['role'];

$query = "UPDATE akun SET username='$username' , nama='$nama' , email='$email' , role='$role' WHERE id='$id' ";

if (mysqli_query($koneksi, $query)) {
 
 header("location: ../dashboard.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>