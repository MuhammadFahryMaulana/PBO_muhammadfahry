<?php
class Karyawan {
    private $nama;
    private $golongan;
    private $jam_lembur;
 
    // Constructor
    public function __construct($nama, $golongan, $jam_lembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jam_lembur = $jam_lembur;
    }
 
    // Destructor
    public function __destruct() {
        echo "Objek Karyawan {$this->nama} telah dihapus.<br />";
    }
 
    // Setter methods
    public function setNama($nama) {
        $this->nama = $nama;
    }
 
    public function setGolongan($golongan) {
        $this->golongan = $golongan;
    }
 
    public function setJamLembur($jam_lembur) {
        $this->jam_lembur = $jam_lembur;
    }
 
    // Getter methods
    public function getNama() {
        return $this->nama;
    }
 
    public function getGolongan() {
        return $this->golongan;
    }
 
    public function getJamLembur() {
        return $this->jam_lembur;
    }
 
    // Method to get Gaji Pokok
    public function getGajiPokok() {
        $gaji = [
            "Ib" => 1250000,
            "Ic" => 1300000,
            "Id" => 1350000,
            "IIa" => 2000000,
            "IIb" => 2100000,
            "IIc" => 2200000,
            "IId" => 2300000,
            "IIIa" => 2400000,
            "IIIb" => 2500000,
            "IIIc" => 2600000,
            "IIId" => 2700000,
            "IVa" => 2800000,
            "IVb" => 2900000,
            "IVc" => 3000000,
            "IVd" => 3100000,
        ];
 
        return isset($gaji[$this->golongan]) ? $gaji[$this->golongan] : 0;
    }
 
    public function getTotalGaji() {
        $gajiPokok = $this->getGajiPokok();
        $gajiLembur = $this->jam_lembur * 15000; // Lembur per jam
        return $gajiPokok + $gajiLembur;
    }
}
 
// Array of Karyawan
$karyawanList = [
    new Karyawan("Alice", "IIa", 5),
    new Karyawan("Bob", "IIIb", 3),
    new Karyawan("Charlie", "Ib", 7),
    new Karyawan("David", "IVc", 2),
];
 
echo "<table border='1' cellpadding='5'>
        <tr>
            <th>Nama</th>
            <th>Golongan</th>
            <th>Jam Lembur</th>
            <th>Gaji Pokok</th>
            <th>Total Gaji</th>
        </tr>";
 
foreach ($karyawanList as $karyawan) {
    echo "<tr>
            <td>{$karyawan->getNama()}</td>
            <td>{$karyawan->getGolongan()}</td>
            <td>{$karyawan->getJamLembur()}</td>
            <td>" . number_format($karyawan->getGajiPokok(), 0, ',', '.') . "</td>
            <td>" . number_format($karyawan->getTotalGaji(), 0, ',', '.') . "</td>
          </tr>";
}
 
echo "</table>";
?>