<?php
class Manusia {
    public $nama = "Ardi";  // Properti nama dengan nilai default "Ardi"
    var $kelas = "SI 2";    // Properti kelas dengan nilai default "SI 2"

    function tampilkan_nama() {
        return $this->nama;  // Mengembalikan nilai properti $nama
    }

    public function tampilkan_kelas() {
        return $this->kelas;  // Mengembalikan nilai properti $kelas
    }
}
$manusia = new Manusia();
echo "Nama: " . $manusia->tampilkan_nama() . "<br />";
echo "Kelas: " . $manusia->tampilkan_kelas();
?>
