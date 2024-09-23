<?php

class SegitigaBintang
{
    var $t;

    public function setTinggi($t)
    {
        $this->t = $t;
    }

    public function getTinggi()
    {
        return $this->t;
    }

    public function cetakSegitigaKiri()
    {
        // Segitiga atas
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;"; // Spasi untuk perataan
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*"; // Cetak bintang
            }
            echo "<br>"; // Pindah ke baris baru
        }

        // Segitiga bawah
        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;"; // Spasi untuk perataan
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*"; // Cetak bintang
            }
            echo "<br>"; // Pindah ke baris baru
        }
    }
}

// Instansiasi objek dan pemanggilan metode
$segitiga3 = new SegitigaBintang();
$segitiga3->setTinggi(5);
$segitiga3->cetakSegitigaKiri();

?>

