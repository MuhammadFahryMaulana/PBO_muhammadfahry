<?php
class Kendaraan {

    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = 100000000;
    var $merek;
    var $tahunPembuatan = 2004;
    
    function statusHarga()
    {
        if ($this->harga > 50000000)
        {
            $status = "Harga Kendaraan Mahal";
        }
        else
        {
            $status = "Harga Kendaraan Murah";
        }
        return $status;
    }

    function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            return "Dapat Subsidi";
        } else {
            return "Tidak Dapat Subsidi";
        }
    }

    // Metode baru untuk menghitung harga bekas kendaraan
    function hargaSecondKendaraan()
    {
        // Asumsi harga bekas adalah 60% dari harga asli
        return $this->harga * 0.6;
    }
}

// Objek 1
// Deklarasi objek dan instansiasi objek (berada di luar kelas)
$objekKendaraan1 = new Kendaraan;
// Setting properties
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;
// Instansiasi objek (pemanggilan method/function)
echo "Status Harga: " . $objekKendaraan1->statusHarga();

// Objek 2
// Deklarasi objek dan instansiasi objek (berada di luar kelas)
$objekKendaraan2 = new Kendaraan;
// Setting properties
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;
// Instansiasi objek (pemanggilan method/function)
echo "<br>";
echo "Status BBM: " . $objekKendaraan2->statusSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>
