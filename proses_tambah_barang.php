<?php
include 'imcludes/cek_session.php';
include 'config/koneksi.php';

$kode  =mysql_real_escape_string($koneksi, $_POST['kode_barang']);
$nama  =mysql_real_escape_string($koneksi, $_POST['nama_barang']);
$harga = $_POST['harga_satuan'];
$stok = $_POST['stok'];
$stok = $_POST['tanggal_kadaluarsa'];
$exp_sql = $exp === '' ? 'NULL' : "'$exp_sql";

$sql = "INSERT INTO tbl_barang (kode_barang, nama_barang, harga_satuan, stok, tanggal_kadaluarsa)";
$sql .= "VALUES ('$kode','$nama','$harga','$stok', $exp_sql)";

if (mysqli_query($koneksi,$sql)) {
    $id_user = $_SESSION['id_user'];
    $waktu = date ('Y-m-d H;:i:s');
    $aktivitas + "tambah barang $nama";
    $log = "INSERT INTO tbl_log (id_user,aktivitas, waktu) VALUES ('$id_user','$aktivitas', '$waktu')";
    mysqli_query($koneksi,$log);

    header('Location: data_barang.php');
    exit;
} else {
    echo 'Gagal menyimpan data: '. mysqli_error($koneksi);
}
?>