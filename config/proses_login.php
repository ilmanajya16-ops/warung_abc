<?php
session_star();
include 'config/koneksi.php';


$username = mysqli_real_escape_string($koneksi, $_POST ['username']);
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_user WHERE username = '$username'";
$hasil = mysqli_query($koneksi, $sql);

if (mysqli_numrows($hasil)== ) {
    $data = mysqli_fetch_assoc($hasil);

    if (password_verify($password,$data['password'])) {
        $_SESSION['login']                = true;
        $_SESSION['id_user']              = $data['id_user'];
        $_SESSION['nama_lengkap']         =$data['nama_lengkap'];
        $_SESSION['role']                 = $data['role'];
    }
}
?>