<?php
$jambu = 15000;
$dus = 6;
$harga_dus = 2000;
$berat = 5;

echo "Hasil beli jambu  = Rp.<b>$jambu</b> jambu/kg";
echo "<br> Saya membeli jambu sebanyak <b>$dus</b> ";
echo "<br> Tiap dus ada <b>$berat</b> buah/kg";
$stj=$jambu*$berat*$dus;
echo "<br>Maka total yang harus dibayar : Rp.<b>$stj</b>";
echo "<br>Saya membeli dus sebanyak <b>$dus</b> dus";
echo "<br>Harga dus : Rp.<b>$harga_dus</b>";
$irsyal=$stj+$harga_dus*$dus;
echo "<br>Jadi saya harus membayar  : Rp.<b>$irsyal</b>";
?>