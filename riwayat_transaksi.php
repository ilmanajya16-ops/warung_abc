<?php

include 'includes/cek_session.php';
include 'config/koneksi.php';

$sql = "SELECT t.no_transaksi, t.tanggal, t.total_bayar, u.nama_lengkap AS nama_kasir
        FROM tbl_transaksi t 
        JOIN tbl_user u ON t.id_kasir = u.id_user 
        ORDER BY t.tanggal DESC";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
 <html>
    <head><title>Riwayat Transaksi - warung ABC </title></head>
    <body>
    <h1>Riwayat Transaksi </h1>
    <table border="1" cellpadding ="6">
        <tr><th>No. Transaksi</th><th>tanggal</th><th>Kasir</th><th>Total bayar</th></tr>
        <th>Total Bayar</th><th>aksi</th></tr>
        <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
    <tr>
        <td><?php echo $row['no_transaksi']; ?></td>
         <td><?php echo $row['tanggal']; ?></td>
          <td><?php echo $row['nama_kasir']; ?></td>
           <td><?php echo number_format($row['total_bayar'],0, ',', '.'); ?></td>
           <td><a href="struk.php?id=<?php echo $row['id_transaksi']; ?>">Cetak</a></td>
        </tr>
        <?php } ?>
        </table>
        <p><a href= "dashboard.php">kembali ke dashboard </a></p
</body>
</html