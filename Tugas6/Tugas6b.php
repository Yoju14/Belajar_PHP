<?php
echo "Tugas 6b <br>";
$harga_jambu = 15000;
$jumlah_dus = 6;
$jumlah_jambu = 5;
$harga_dus = 2000;
echo "<br>";
echo "===================================================<br>";
echo "Harga Jambu = Rp. $harga_jambu / Kg <br>";
echo "Harga Kardus = Rp. $harga_dus / pcs<br>";
echo "Total Penjualan (Dus dan Jambu) = Rp. ? <br>";
echo "===================================================<br>";
echo "<br>";
echo "Jawab : <br><br>";
$penjualan_jambu = $harga_jambu * $jumlah_dus * $jumlah_jambu;
$penjualan_dus = $harga_dus * $jumlah_dus;
$total_penjualan = $penjualan_jambu + $penjualan_dus;
echo "Penjualan Jambu = Rp. $penjualan_jambu<br>";
echo "Penjualan Dus = Rp. $penjualan_dus<br>";
echo "Jadi Total Penjualan Jambu dan Kardus adalah : Rp. $total_penjualan";
?>