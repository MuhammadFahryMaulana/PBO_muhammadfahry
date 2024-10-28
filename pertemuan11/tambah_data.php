<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data Barang</title>
</head>
<body>
    <h3>Form Tambah Data Barang</h3>
    <hr/>
    <form method="post" action="proses_barang.php">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" required/></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" required/></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="number" name="harga_beli" required/></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="number" name="harga_jual" required/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="tombol" value="Simpan">
                    <input type="reset" value="Hapus">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
