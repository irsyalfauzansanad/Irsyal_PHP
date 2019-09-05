<?php
function Lingkaran($jari){
	echo "Jari : " .$jari;
	$kel = 2*($jari*3.14);
	$luas = 3.14*($jari*$jari);
	echo "<br>Keliling : ".$kel;
	echo "<br>Luas : ".$luas;
}
$a = 10;
Lingkaran($a);