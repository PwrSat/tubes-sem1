<?php

//fungsi 1
//fungsi register
function register_user($user, $nama, $email, $pass)
{

    global $koneksi;

    //mencegah sql injection
    $user  = mysqli_real_escape_string($koneksi, $user);
    $pass  = mysqli_real_escape_string($koneksi, $pass);
    $nama  = mysqli_real_escape_string($koneksi, $nama);
    $email = mysqli_real_escape_string($koneksi, $email);

    //penerapan hash agar password didalam database disimpan dalam karakter random
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    //memmasukan data inputan register user ke dalam database
    $query = "INSERT INTO akun (username, password, nama, email) VALUES ('$user','$pass','$nama','$email')";

    if (mysqli_query($koneksi, $query)) {
        return true;
    } else {
        return false;
    }
}

//fungsi 2 
//mengguji username kembar
function register_cek_nama($user)
{

    global $koneksi;

    //mencegah sql injection
    $user  = mysqli_real_escape_string($koneksi, $user);

    $query = "SELECT * FROM akun WHERE username = '$user'";

    if ($result = mysqli_query($koneksi, $query)) {
        if (mysqli_num_rows($result) == 0) return true;
        else return false;
    }
}

//fungsi 3
//untuk login
function cek_data($user, $pass)
{

    global $koneksi;

    $user = mysqli_real_escape_string($koneksi, $user);
    $pass = mysqli_real_escape_string($koneksi, $pass);

    $query = "SELECT password FROM akun WHERE username = '$user'";
    $result = mysqli_query($koneksi, $query);
    $hash = mysqli_fetch_assoc($result)['password'];
    
    if (password_verify($pass, $hash)) {
        return true;
    } else {
        return false;
    }
}

//fungsi 4
//cek nama login
function login_cek_nama($user)
{

    global $koneksi;

    //mencegah sql injection
    $user  = mysqli_real_escape_string($koneksi, $user);

    $query = "SELECT * FROM akun WHERE username = '$user'";

    if ($result = mysqli_query($koneksi, $query)) {
        if (mysqli_num_rows($result) == 1) return true;
        else return false;
    }
}

//fungsi 5
//forgot
function forgot($email, $pass)
{

    global $koneksi;

    $user = mysqli_real_escape_string($koneksi, $email);
    $pass = mysqli_real_escape_string($koneksi, $pass);
 
    $query = "UPDATE akun SET ='$pass'";
    $result = mysqli_query($koneksi, $query);
    $hash = mysqli_fetch_assoc($result)['password'];

    
    if (password_verify($pass, $hash)) {
        return true;
    } else {
        return false;
    }
}

//menguji status user
function cek_status($user){

    global $koneksi;

    //mencegah sql injection
    $user  = mysqli_real_escape_string($koneksi, $user);

    $query = "SELECT role FROM akun WHERE username='$user'";

    $result = mysqli_query($koneksi, $query);
    $status = mysqli_fetch_assoc($result)['role'];

    if( $status == 1) return true;
    else return false;
}


//menguji status use(part2)
function cek_status2($user){

    global $koneksi;

    //mencegah sql injection
    $user  = mysqli_real_escape_string($koneksi, $user);

    $query = "SELECT role FROM akun WHERE username='$user'";

    $result = mysqli_query($koneksi, $query);
    $status = mysqli_fetch_assoc($result)['role'];

    if( $status == 0) return true;
    else return false;
}

//menguji status petugas
function cek_status3($user){

    global $koneksi;

    //mencegah sql injection
    $user  = mysqli_real_escape_string($koneksi, $user);

    $query = "SELECT role FROM akun WHERE username='$user'";

    $result = mysqli_query($koneksi, $query);
    $status = mysqli_fetch_assoc($result)['role'];

    if( $status == 2) return true;
    else return false;
}

?>