<?php
class Database {
 
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "belajaroop";
    private $koneksi;
 
    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }  
 
    function tampil_data() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang");
        $hasil = [];
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
 
    function tambah_data($nama_barang, $stok, $harga_beli, $harga_jual) {
        $query = "INSERT INTO tb_barang (nama_barang, stok, harga_beli, harga_jual) VALUES ('$nama_barang', '$stok', '$harga_beli', '$harga_jual')";
        mysqli_query($this->koneksi, $query);
    }
 
    function tampil_edit_data($id_barang) {
        $query = "SELECT * FROM tb_barang WHERE id_barang = '$id_barang'";
        $data = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_array($data);
    }
 
    function edit_data($id_barang, $nama_barang, $stok, $harga_beli, $harga_jual) {
        $query = "UPDATE tb_barang SET nama_barang = '$nama_barang', stok = '$stok', harga_beli = '$harga_beli', harga_jual = '$harga_jual' WHERE id_barang = '$id_barang'";
        mysqli_query($this->koneksi, $query);
    }
 
    function delete_data($id_barang) {
        $query = "DELETE FROM tb_barang WHERE id_barang = '$id_barang'";
        mysqli_query($this->koneksi, $query);
    }
 
    function cari_data($nama_barang) {
        $query = "SELECT * FROM tb_barang WHERE nama_barang = '$nama_barang'";
        $data = mysqli_query($this->koneksi, $query);
        $hasil = [];
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?>