<?php
$member = "Ya";
$totalbelanja = 570000;

switch ($member) {
    case "Ya":
        if ($totalbelanja > 100000) {
            $totalbayar = $totalbelanja - 15000;
        } elseif ($totalbelanja > 50000) {
            $totalbayar = $totalbelanja - 50000;
        } else {
            $totalbayar = $totalbelanja;
        }
        break;

    case "Tidak":
        if ($totalbelanja > 100000) {
            $totalbayar = $totalbelanja - 5000;
        } else {
            $totalbayar = $totalbelanja;
        }
        break;

    default:
        $totalbayar = $totalbelanja;
        break;
}

echo "Apakah ada kartu member: " . $member . "<br>";
echo "Total Belanjaan: " . $totalbelanja . "<br>";
echo "Total Bayar: " . $totalbayar . "<br>";
?>
