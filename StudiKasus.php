<?php
$c = 10; // Suhu dalam Celcius
 
// Konversi Celcius ke Fahrenheit
function KeFahrenheit() {
    global $c;
    global $f;
    $f = ($c * 9/5) + 32;
}
 
// Konversi Celcius ke Reamur
function KeReamur() {
    global $c;
    global $r;
    $r = 4/5 * $c;
}
 
// Konversi Celcius ke Kelvin
function KeKelvin() {
    global $c;
    global $k;
    $k = $c + 273.15;
}
 
// Panggil fungsi konversi
KeFahrenheit();
echo "<p>Celcius ke Fahrenheit: $f °F</p>";
 
KeReamur();
echo "<p>Celcius ke Reamur: $r °R</p>";
 
KeKelvin();
echo "<p>Celcius ke Kelvin: $k K</p>";
?>