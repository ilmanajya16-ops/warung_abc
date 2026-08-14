<?php
include 'includes/cek_session.php';
include 'config/koneksi.php';

$id = $_POST['id_pelanggan'];
$nama = mysqli_real_escape_string($koneksi, $_POST ['nama_pelanggan']);
$