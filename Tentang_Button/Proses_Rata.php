<?php
echo "<pre>";
if (isset($_POST['Input'])) {
$nama = $_POST['Nama'];
$mapel1 = $_POST['Mapel1'];
$mapel2 = $_POST['Mapel2'];
echo "Nama        : <b>$nama<br></b>";
echo "Mapel1      : <b>$mapel1</b><br>";
echo "Mapel2      : <b>$mapel2</b><br>";
$Irsyal = ($mapel1+$mapel2)/2;
echo "Rata - Rata : ".$Irsyal."<br>";
}if ($Irsyal >=75) {
	echo "Status      : LULUS";
}else{
	echo "Status      : Tidak LULUS";
}
echo "<pre>";
?> 