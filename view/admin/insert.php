<?php
include('../../koneksi.php'); 

$user = $_POST['username'];
$name = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['password'];
$role = $_POST['role'];

$pass = password_hash($pass, PASSWORD_DEFAULT);

$query =  "INSERT INTO akun(username , nama , email , password , role ) VALUES('$user' , '$name' , '$email' , '$pass' , '$role')";

if (mysqli_query($koneksi , $query)) {

 header("location:tambah.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>