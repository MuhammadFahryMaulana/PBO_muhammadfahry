<?php
include('koneksi.php');
$db = new database(); // Corrected instantiation
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Barang CV Jaya</title>
    <style type="text/css">
        form#background_border {
            margin: 8px 238px;
            color: white;
        }
    </style>
</head>
<body>
    <h2>LAPORAN DATA BARANG CV JAYA</h2>
    <table width="667" border="1">
        <tr>
            <th width="21">No</th>
            <th width="122">Kode Barang</th>
            <th width="158">Barang</th>
            <th width="47">Stok</th>
            <th width="76">Harga Beli</th>
            <th width="83">Harga Jual</th>
            <th width="114">Keuntungan</th>
        </tr>
        <?php
        $data_barang = $db->tampil_data(); // Fetch data
        $no = 1; // Initialize counter
        foreach ($data_barang as $row) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['kd_barang']; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['stok']; ?></td>
                <td><?php echo number_format($row['harga_beli'], 2, ',', '.'); ?></td>
                <td><?php echo number_format($row['harga_jual'], 2, ',', '.'); ?></td>
                <td><?php echo number_format($row['harga_jual'] - $row['harga_beli'], 2, ',', '.'); ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script>
        window.print(); // Automatically trigger print dialog
    </script>
</body>
</html>
