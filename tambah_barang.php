<!-- tambah_barang.php -->
 <? include 'includes/cek_session.php'; ?>
 <!DOCTYPE html>
 <html>
    <head><title>Tambah Barang - warung ABC </title></head>
    <body>
        <h1>Tambah barang</h1>
        <form action = "pross_tambah_barang.php" method="POST">
            <table>
             <tr><td>Kode Barang </td><td>:</td>
                <td><input type="text" name="kode_barang" required></td></tr>
            <tr><td>Nama Barang </td><td>:</td>
                <td><input type="text" name="nama_barang" required></td></tr>
            <tr><td>Harga satuan</td><td>:</td>
                <td><input type="number" name="harga_satuan" step="0.01" required></td></tr>
            <tr><td>Stok </td><td>:</td>
                <td><input type="number" name="stok" required></td></tr>
            <tr><td>Tanggal Kadaluarsa </td><td>:</td>
                <td><input type="date" name="tanggal_kadaluarsa" required></td></tr>
            <tr><td colspan="3"><input type="submit" value="simpan"> </td></tr>
            </table> 
        </form>
        <p><a href="data_barang.php">kembali</a><p>
    </body>
 </html>