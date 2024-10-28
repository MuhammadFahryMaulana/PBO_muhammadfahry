<?php  
include('koneksi.php');
$koneksi = new Database();
 
if ($action == 'add') {
    $koneksi->tambah_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("Location: index.php");
} else if ($action == 'edit') {
    $id_barang = $_GET['id_barang'];
    $koneksi->tampil_edit_data($id_barang, $_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("Location: index.php");
 
} else if ($action == 'delete') {
    $id_barang = $_GET['id_barang'];
    $koneksi->delete_data($id_barang);
    header("Location: index.php");
 
} else if ($action == "search") {
    $nama_barang = $_POST['nama_barang'];
    $hasil_pencarian = $koneksi->cari_data($nama_barang);
}
 
?>