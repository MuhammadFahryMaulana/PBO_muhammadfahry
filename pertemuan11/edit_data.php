<?php
include('koneksi.php');
$db = new database();
$data_edit_barang = $db->tampil_edit_data($id_barang);
$d = $data_edit_barang; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
</head>
<body>
    <h3>Form Edit Data Barang</h3>
    <hr/>
    <form method="post" action="proses_barang.php?action=edit&id_barang=<?php echo $id_barang; ?>">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
                    <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td>
                    <input type="text" name="stok" value="<?php echo $d['stok']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>:</td>
                <td>
                    <input type="text" name="harga_beli" value="<?php echo $d['harga_beli']; ?>" />
                </td>
            </tr>
        </table>
        <input type="submit" value="Update">
    </form>
</body>
</html>
