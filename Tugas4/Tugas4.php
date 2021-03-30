<?php
echo "Tugas 4 <br> <br>";
$harga_beli = 8000;
$harga_jual = 7500;
$untung = 300;
echo "Diketahui Harga Beli = Rp. $harga_beli <br>";
echo "Harga Jual = Rp. $harga_jual <br>";
echo "Keuntungan = Rp. $untung <br>";
echo "Ditanya Jumlah kambing yang dibeli ? <br>";
echo "Jawab = <br>";
$kurang = $harga_beli - $harga_jual;
$bagi = $kurang / $untung;
echo "Jadi Kambing yang dibeli adalah = $bagi ekor";
?>