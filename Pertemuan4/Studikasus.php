<?php
class Mahasiswa {
    var $nama;
    var $kelas;
    var $mataKuliah;
    var $nilai;
 
    public function setNama($nama) {
        $this->nama = $nama;
    }
 
    public function setKelas($kelas) {
        $this->kelas = $kelas;
    }
 
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }
 
    public function setNilai($nilai) {
        $this->nilai = $nilai;
    }
 
    public function getNama() {
        return $this->nama;
    }
 
    public function getKelas() {
        return $this->kelas;
    }
 
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
 
    public function getNilai() {
        return $this->nilai;
    }
 
    public function lulusKuis() {
        return $this->nilai >= 60 ? "Lulus Kuis" : "Tidak Lulus Kuis";
    }
}
 
$Data1 = array('Aditya', 'SI 2', 'Pemrograman Berorientasi Objek', 80);
$Data2 = array('Shinta', 'SI 2', 'Pemrograman Berorientasi Objek', 75);
$Data3 = array('Ineu', 'SI 2', 'Pemrograman Berorientasi Objek', 55);
 
for($i = 1; $i <= 3; $i++) {
for($h = 0; $h <= 5; $h++)
    ${"mahasiswa$i"} = new Mahasiswa();
    ${"mahasiswa$i"}->setNama(${"Data$i"}[0]);
    ${"mahasiswa$i"}->setKelas(${"Data$i"}[1]);
    ${"mahasiswa$i"}->setMataKuliah(${"Data$i"}[2]);
    ${"mahasiswa$i"}->setNilai(${"Data$i"}[3]);
}
 
for($i = 1; $i <= 3; $i++) {
    echo "mahasiswa$i ","<br>";
    echo "Nama : " . ${"mahasiswa$i"}->getNama() . "<br>";
    echo "Kelas : " . ${"mahasiswa$i"}->getKelas() . "<br>";
    echo "Mata Kuliah : " . ${"mahasiswa$i"}->getMataKuliah() . "<br>";
    echo "Nilai : " . ${"mahasiswa$i"}->getNilai() . "<br>";
    echo ${"mahasiswa$i"}->lulusKuis() . "<br><br>";
}
?>