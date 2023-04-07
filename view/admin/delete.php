<?php 

$id = $_GET['id'];


include('../../fungsi/db.php');


$query = "DELETE FROM akun WHERE id = '$id' ";

if (mysqli_query($koneksi , $query)) {

 header("location:../dashboard.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
}

mysqli_close($conn);
?>
