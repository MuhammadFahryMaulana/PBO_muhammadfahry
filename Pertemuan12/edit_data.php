<?php
include("koneksi.php");
$db = new database();
$id_barang = $_GET['id_barang'];
$data_edit_barang = $db->tampil_edit_data($id_barang);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
    <style type="text/css">
        body {
            background-color: #eee;
            margin: 0px 250px;
            color: black;
        }
        .formprint_satuan {
            margin: 0px 250px;
            color: white;
        }
        .posisi_tombol {
            margin-top: 20px;
        }
        .tombol_login {
            background: #47c0db;
            color: white;
            font-size: 11pt;
            border: none;
            padding: 5px 20px;
        }
    </style>
 
    <style type="text/css">
        body {
            font-family: "Trebuchet MS";
        }
        h1 {
            text-transform: uppercase;
            color: #47c0db;
        }
        table {
            border: solid 1px #ddeeee;
            border-collapse: collapse;
            border-spacing: 0;
            width: 40%;
            margin: 10px auto 10px auto;
        }
        table thead th {
            background-color: #ddefff;
            border: solid 1px #b8b8b8;
            color: #888888;
            padding: 15px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
        }
        table tbody td {
            border: solid 1px #ddeeee;
            color: #333333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }
        a {
            background-color: #47c0db;
            color: #fff;
            padding: 7px;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>
 
<body>
<h3><center>Form Edit Data Barang</center></h3>
<hr>
<form method="post" action="proses_barang.php?action=edit&id_barang=<?php echo $id_barang; ?>" enctype="multipart/form-data">
    <?php foreach ($data_edit_barang as $d): ?>
    <table>
        <tr>
            <td>Kode Barang</td>
            <td>:</td>
            <td>
                <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>" />
                <input type="text" name="kd_barang" value="<?php echo $d['kd_barang']; ?>" readonly />
            </td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>" /></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="text" name="stok" value="<?php echo $d['stok']; ?>" /></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td>:</td>
            <td><input type="text" name="harga_beli" value="<?php echo $d['harga_beli']; ?>" /></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>:</td>
            <td><input type="text" name="harga_jual" value="<?php echo $d['harga_jual']; ?>" /></td>
        </tr>
        <tr>
            <td>Gambar Barang</td>
            <td>:</td>
            <td>
                <input type="file" name="gambar_produk" />
                <img src="gambar/<?php echo $d['gambar_produk']; ?>" style="width: 120px; float: left; margin-bottom: 5px;">
                <i style="float: left; font-size: 11px; color: red;">Abaikan jika tidak merubah gambar produk</i>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" class="tombol_login" name="tombol" value="Ubah" />
                <a href="tampil_data.php"><input type="submit" class="tombol_login" name="tombol" value="Kembali" /></a>
            </td>
        </tr>
    </table>
    <?php endforeach; ?>
</form>
</body>
</html>