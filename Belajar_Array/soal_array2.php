<?php
$aso = [
 ['Nama' => ' : ujang', 'Kelas' => ' : XI', 'Alamat' => 'TKI3'],
 ['Nama' => ' : Irsyal', 'Kelas' => ' : XII', 'Alamat' => 'TKI2'],
 ['Nama' => ' : Jidan', 'Kelas' => ' : XIII', 'Alamat' => 'TKI5']
 ];

echo "<pre>";
print_r($aso);
echo "<pre>";
$mode = current($aso[2]);
echo $mode."<br>";
$mode = current($aso[1]);
echo $mode."<br>";
next($aso);
$mode = key($aso);
echo $mode."<br>";
reset($aso);
$mode = current($aso[0]);
echo $mode."<br>";
?>