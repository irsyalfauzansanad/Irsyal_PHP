<?php
// Buat 2 fungsi
// Luas segitiga -> Alas, Tinggi, Luas / alas*tinggi/2
// Lingkaran -> Jari - Jari, Luas,keliling / V
// fungsi paratemer / opsonal parameter
function Luas_Segitiga($alas,$tinggi){
	echo "Alas : " .$alas;
	echo "<br>Tinggi : " .$tinggi;
	echo "<br>Luas nya : ".($alas*$tinggi)/2;
}
$a = 10;
$b = 10;
Luas_Segitiga($a,$b);

function Keliling_Lingkaran($value='')
{
	# code...
}
?>