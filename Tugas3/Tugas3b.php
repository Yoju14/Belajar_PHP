<?php
echo "Tugas 3b <br> <br>";
$tabungan_awal = 150000;
$bunga_setahun = 12.5;
$bunga = 0.125;
echo "Diketahui Tabungan Awal : Rp. $tabungan_awal <br>";
echo "Bunga Setahun : $bunga_setahun % <br>";
echo "Berapa Total Tabungan Deva dalam Setahun ? <br>";
echo "Jawab = <br>";
$bagi = $tabungan_awal * $bunga;
echo "Bunga yang didapat Deva adalah = Rp. $bagi <br>";
$tambah = $tabungan_awal + $bagi;
echo "Jadi total tabungan Deva adalah = Rp. $tambah";
?>