<?php
echo "<h3>Tugas 5<h3> <br> ";

$logika1 = (0 and 0);
$logika2 = (0 and 1);
$logika3 = (1 and 0);
$logika4 = (1 and 1);
$logika5 = (0 or 0);
$logika6 = (0 or 1);
$logika7 = (1 or 0);
$logika8 = (1 or 1);
echo "Tabel Logika 1111";
echo "<table width = 200 border = 1>
<tr>
    <td>Input true</td>
    <td>Input 2</td>
    <td>AND</td>
    <td>OR</td>
<tr>
    <td>false</td>
    <td>false</td>
    <td>$logika1</td>
    <td>$logika2</td>
<tr>
    <td>false</td>
    <td>true</td>
    <td>$logika3</td>
    <td>$logika4</td>
<tr>
    <td>true</td>
    <td>false</td>
    <td>$logika5</td>
    <td>$logika6</td>
<tr>
    <td>true</td>
    <td>true</td>
    <td>$logika7</td>
    <td>$logika8</td>
</tr>";
?>