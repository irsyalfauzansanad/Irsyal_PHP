<?php
$nim    = "11032003";
$nama   = 'Irsyal Fauzan Sanad';
$umur   = 16;
$nilai  = 82.25;
$status = true;

echo   "Nim   : " .$nim. "<br>";
echo   "Nama  : $nama<br>";
print  "Umur  : " .$umur; print "<br>"; 
printf("Nilai : %.3f<br>", $nilai);
if ($status)
	echo "Status : Aktif";
else
    echo "Status : tidak Aktif";
?>