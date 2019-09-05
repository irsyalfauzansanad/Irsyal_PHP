<?php
$aso = [
 [
   'Judul' => ' : Belajar PHP & MySQl untuk Pemula</h1>',
   'Penulis' => ' : Admin SMK',
 ],
 [
   'Judul' => ' : Tutorial PHP dari Nol hingga Mahir</h1>',
   'Penulis' => ' : Admin SMK',
 ],
 [
   'Judul' => ' : Membuat Alpikasi Web dengan PHP</h1>',
   'Penulis' => ' : Admin SMK',
 ]
];
foreach ($aso as $value) {
foreach ($value as $irsyal => $nama) {
	echo "$irsyal$nama";
 }
}
?>