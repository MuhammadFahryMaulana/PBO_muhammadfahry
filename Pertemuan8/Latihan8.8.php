<?php
class Manusia {
    protected $nama = "Ardi";  // Properti protected untuk nama
    var $kelas = "SI 2";       // Properti kelas
    protected function nama() {
        return "Nama: " . $this->nama;  // Mengembalikan nilai nama
    }

    public function tampilkan_nama() {
        return $this->nama();  // Memanggil method protected nama()
    }

    protected function tampilkan_kelas() {
        return "Kelas: " . $this->kelas;  // Mengembalikan nilai kelas
    }

    public function get_kelas() {
        return $this->tampilkan_kelas();  // Memanggil method protected tampilkan_kelas()
    }
}

$manusia = new Manusia();

echo $manusia->tampilkan_nama() . "<br />";  
echo $manusia->get_kelas();  
?>
