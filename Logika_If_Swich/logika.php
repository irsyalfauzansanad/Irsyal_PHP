<!-- Cetak gol
total cetak gol >=10 'mendali emas'
total cetak gol >=8 'mendali perak'
total cetak gol >=4 'mendali perunggu'
total cetak gol <4 'mendali emas ngambang' -->

<?php
// if
$gol = '20';

if ($gol >= 10) {
	echo "mendali emas,dengan total gol : ".$gol;
}elseif ($gol >=8) {
	echo "mendali perak,dengan total gol : ".$gol;
}elseif ($gol >=4) {
	echo "mendali perunggu,dengan total gol : ".$gol;
}else{
	echo "mendali emas ngambang,dengan total gol : ".$gol;
}
?>
