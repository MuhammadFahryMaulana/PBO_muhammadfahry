<?php
class Kendaraan {

    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;        
    }   
}

$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->merek = "YAMAHA MIO"; // set properti
$objekKendaraan1->harga = 10000000;     // set properti

$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->merek = "TOYOTA AVANZA"; // set properti
$objekKendaraan2->harga = 100000000;       // set properti

$objekKendaraan3 = new Kendaraan();
$objekKendaraan3->merek = "CIVIC";
$objekKendaraan3->harga = 20000000;

echo "Ini adalah hasil dari objek Kendaraan2 <br/>";
echo "Merek: " . $objekKendaraan2->merek . "<br/>";
echo "Nominal Harga: " . $objekKendaraan2->harga . "<br/>";
echo "Status Harga Kendaraan: " . $objekKendaraan2->statusHarga() . "<br/>";
echo "<br/>";
echo "Ini adalah hasil dari objek kendaraan3 <br/>";
echo "Merek: " . $objekKendaraan3->merek . "<br/>";
echo "Nominal Harga: " . $objekKendaraan3->harga . "<br/>";
echo "Status Harga Kendaraan: " . $objekKendaraan3->statusHarga() . "<br/>";
?>
