<?php
class PenghitungAngsuran {
    var $BPinjaman = 1000000;
    var $Bunga = 0.10; 
    var $TPinjaman; 
    var $LAngsuranBulan = 5; 
    var $LBesarangsuran; 
    var $dendaketerlambatanperhari = 0.15; 

    function totalpinjam() {
        $totalBunga = $this->BPinjaman * $this->Bunga;
        $this->TPinjaman = $this->BPinjaman + $totalBunga;
    }

    function hitungbesaranangsuran() {
        $this->LBesarangsuran = $this->TPinjaman / $this->LAngsuranBulan;
    }
}

$objekPenghitungAngsuran = new PenghitungAngsuran();
$objekPenghitungAngsuran->totalpinjam(); // Hitung total pinjaman
$objekPenghitungAngsuran->hitungbesaranangsuran(); // Hitung besaran angsuran

echo "Latihan 3.3.php <br/>";
echo "TOKO PEGADAIAN SYARIAH <br/>";
echo "Jl Keadilan No 16 <br/>";
echo "<br/>";
echo "Program Penghitung Besaran Angsuran Hutang <br/>";
echo "Besaran Pinjaman: Rp " . number_format($objekPenghitungAngsuran->BPinjaman, 0, ',', '.') . " <br/>";
echo "Masukan besar bunga (%): " . ($objekPenghitungAngsuran->Bunga * 100) . "% <br/>";
echo "Total Pinjaman: Rp " . number_format($objekPenghitungAngsuran->TPinjaman, 0, ',', '.') . " <br/>";
echo "Lama Angsuran (Bulan): " . $objekPenghitungAngsuran->LAngsuranBulan . " <br/>";
echo "Besaran Angsuran: Rp " . number_format($objekPenghitungAngsuran->LBesarangsuran, 0, ',', '.') . " <br/>";
?>
