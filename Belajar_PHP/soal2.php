<?php
$harga_sewa = 375000;
$denda = 25000/2;
$total = 625000;
$jam = 24;
echo "Harga sewa mobil 24jam pertama Rp.<b>$harga_sewa</b>";
echo "<br>Jika melebihi akan dikenakan denda sebesar Rp.<b>$denda</b>";
$irsyal = ($total-$harga_sewa)/$denda+$jam;
echo "<br>Jadi irsyal menyewa mobil selama <b>$irsyal</b> jam"; 
?>