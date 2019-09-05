<?php
$arrWarna = array("blue","Black","Red","Yellow","Green");
echo "Menampilkan isi array dengan for : <br>";
for ($i=0; $i < count($arrWarna); $i++) { 
	echo "Do you like <font color=$arrWarna[$i]>".$arrWarna[$i]."</font>s?<br>";
}

echo "<br>Menampilkan isi array dengan foreach : <br>";
foreach ($arrWarna as $warna) {
	echo "Do you like <font color=$warna>". $warna  ."</font>?<br>";
}
?>