<?php
class kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merek;

    function statusharga ()
    {
        if ($this->harga > 50000000) $status = "Mahal";
        else $status = "Murah";
        return $status;
    }

    function setMerek ($x)
    {
        $this->merek = $x;
    }
    function setharga ($x)
    {
        $this->harga = $x;
    }
}

$kendaraan1 = new kendaraan ();
$kendaraan1 ->setmerek('yamaha Mio');
$kendaraan1 ->setharga(10000000);
echo $kendaraan1->statusharga();

?>