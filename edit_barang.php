<?php

include 'includes/cek_session.php';
include 'config/koneksi.php';

$id = $_GET ['id'];
$sql = "SELECT * FROM tbl_barang WHERE id_barang = $id'";
$hasil =mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html>
    <head><title>edit barang - warung ABC </title></head>
    <body>
        <body>
            <h1>Edit Barang </h1>
            <from action= "prpses_edit_barang.php" method="POST">
                <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
                <table></table>
            </from>
        </body>
    </body>
</html>