<?php
class Kendaraan {
    private $merek;
    private $jmlRoda;
    private $harga;
    private $warna;
    private $bhnBakar;
    private $tahun;
 
    public function setMerek($merek) {
        $this->merek = $merek;
    }
 
    public function setJmlRoda($jmlRoda) {
        $this->jmlRoda = $jmlRoda;
    }
 
    public function setHarga($harga) {
        $this->harga = $harga;
    }
 
    public function setWarna($warna) {
        $this->warna = $warna;
    }
 
    public function setBhnBakar($bhnBakar) {
        $this->bhnBakar = $bhnBakar;
    }
 
    public function setTahun($tahun) {
        $this->tahun = $tahun;
    }
 
    public function getMerek() {
        return $this->merek;
    }
 
    public function getJmlRoda() {
        return $this->jmlRoda;
    }
 
    public function getHarga() {
        return $this->harga;
    }
 
    public function getWarna() {
        return $this->warna;
    }
 
    public function getBhnBakar() {
        return $this->bhnBakar;
    }
 
    public function getTahun() {
        return $this->tahun;
    }
 
    public function statusHarga() {
        if($this->harga > 100000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }
 
    public function dapatSubsidi() {
        if($this->tahun < 2000) {
            return "Dapat Subsidi";
        } else {
            return "Tidak Dapat Subsidi";
        }
    }
 
    public function hargaSecondKendaraan() {
        return $this->harga * 0.5;
    }
}
 
$Data1 = array('Toyota Yaris', '4', '160000000', 'Merah', 'Pertamax', '2014');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Premium', '2005');
$Data3 = array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');
 
for($i = 1; $i <= 3; $i++) {
    ${"kendaraan$i"} = new Kendaraan();
    ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
    ${"kendaraan$i"}->setJmlRoda(${"Data$i"}[1]);
    ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
    ${"kendaraan$i"}->setWarna(${"Data$i"}[3]);
    ${"kendaraan$i"}->setBhnBakar(${"Data$i"}[4]);
    ${"kendaraan$i"}->setTahun(${"Data$i"}[5]);
}
 
for($i = 1; $i <= 3; $i++) {
    echo "Kendaraan$i<br>";
    echo ${"kendaraan$i"}->getMerek()."<br>";
    echo ${"kendaraan$i"}->getJmlRoda()."<br>";
    echo ${"kendaraan$i"}->getHarga()."<br>";
    echo ${"kendaraan$i"}->getWarna()."<br>";
    echo ${"kendaraan$i"}->getBhnBakar()."<br>";
    echo ${"kendaraan$i"}->getTahun()."<br>";
    echo ${"kendaraan$i"}->statusHarga()."<br>";
    echo ${"kendaraan$i"}->dapatSubsidi()."<br>";
    echo ${"kendaraan$i"}->hargaSecondKendaraan()."<br><br>";
}
?>