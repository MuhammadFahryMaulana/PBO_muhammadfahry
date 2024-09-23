<?php
$n = 5; // Tinggi segitiga
 
// Loop untuk baris
for($i = 1; $i <= $n; $i++) {
    // Loop untuk menampilkan spasi
    for($j = $i; $j < $n; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // Loop untuk menampilkan bintang di sisi kiri
    for($k = 1; $k <= $i + 1; $k++) { // Tambahkan 1 bintang
        echo "* ";
    }
    // Loop untuk menampilkan bintang di sisi kanan
    for($l = 1; $l < $i; $l++) {
        echo "* ";
    }
    // Pindah ke baris berikutnya
    echo "<br/>";
}
?>