<!-- cetak gol
total cetak gol >= 10 'mendali emas' & = 20 "medapatkan bonus 100jt"
total cetak gol >= 7 'mendali perak' & = 9 "medapatkan bonus 80jt"
total cetak gol >= 4 'mendali perunggu' & = 5 "medapatkan bonus 50jt"
total cetak gol < 4 'mendali emas ngambang' "tidak medapatkan bonus" -->

<?php
$gol = 3;

if ($gol >= 10) {
	echo "mendali emas,dengan total gol : ".$gol;
}elseif ($gol >=8) {
	echo "mendali perak,dengan total gol : ".$gol;
}elseif ($gol >=4) {
	echo "mendali perunggu,dengan total gol : ".$gol;
}else{
	echo "mendali emas ngambang,dengan total gol : ".$gol;
}
switch ($gol) {
	case 20:
		echo " dan mendapatkan bonus 100jt";
		break;
	case 9:
		echo " dan mendapatkan bonus 100jt";
		break;
	case 5:
		echo " dan mendapatkan bonus 100jt";
		break;
	default:
		echo " tidak mendapatkan bonus";
		break;
}
?>