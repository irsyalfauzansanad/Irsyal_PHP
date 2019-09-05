<?php
$array = array('saya<br>,10');
$aso = [
[
   'Nama' => 'Agung Wahyudi',
   'Kelas' => 'Informatika 10',
 ],
 [
   'Nama' => 'Agung Wahyudi',
   'Kelas' => 'Informatika 10',
 ]
];
foreach ($aso as $value) {
	echo $value["Nama"] . "<br>";
	echo $value["Kelas"] . "<br>";
}
echo '<hr>';
$countaso = count($aso);
for ($i = 0; $i < $countaso; $i++) {
	echo $aso[$i]["Nama"] . "<br>";
	echo $aso[$i]["Kelas"] . "<br>";
}
?>
<!-- foreach ($aso as $value) {
foreach ($value as $irsyal => $nama) {
	echo "$irsyal$nama<br>";
}
} -->