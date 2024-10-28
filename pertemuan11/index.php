<?php
include('koneksi.php');
$db = new Database();
$data_barang = $db->tampil_data();
$koneksi=mysqli_connect(hostname: "localhost",username: "root",password: "",database: "belajaroop");
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Barang</title>
        <style type="text/css">
            form#background_border{
                margin: 0px 230px;
                color: white;
            }
        </style>
    </head>
    <body>
        <a href="tambah_data.php">tambah_data</a>
        <form id="background_border" method="get">
            <input type="text" name="cari" placeholder="Cari Nama Barang">
            <input type="submit" value="Cari">
        </form>
        <?php  
        if(isset($_GET['cari'])){
            $cari  = $_GET['cari'];
            echo"<b> Hasil Pencarian :".$cari."</b>";
        }
        ?>
        <table border="1">
        <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Action</th>
        </tr>
        <?php
        $no=1;
        foreach($data_barang as $row){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['stok'];?></td>
                <td><?php echo $row['harga_jual']; ?></td>
                <td><?php echo $row['harga_beli']; ?></td>
                <<td>
                    <a href="edit_data.php?id_barang=<? echo $row['id_barang'];?>&action=edit">Edit</a>
                    <a href="proses_barang.php?id_barang=<? echo $row['id_barang'];?>&action=delete">Hapus</a>
                </td>
            </tr>
            <?php
        }
            ?>
        </table>
    </body>
</html>
