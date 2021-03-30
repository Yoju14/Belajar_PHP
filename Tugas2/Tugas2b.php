<?php
$beli = 50000;
$jual = 80000;
$persen = 0.01;

$kurang = $jual - $beli;
echo "Untung : Rp. $kurang <br>";
$kali = $kurang * $persen;
echo "Keuntungan : $kali % <br>";
?>