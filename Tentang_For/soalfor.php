<!-- $ irsyal = 1 = "Aku Data ke- " .$i. "dan mendapatkan emas<br>";
$ irsyal = 2 = "Aku Data ke- " .$i. "dan mendapatkan perak<br>";
$ irsyal = 3 = "Aku Data ke- " .$i. "dan mendapatkan perunggu<br>";
$ irsyal = 4 s/d 6 = "Aku Data ke- " .$i. "dan mendapatkan tas laptop<br>";
$ irsyal = 7 s/d 9= "Aku Data ke- " .$i. "dan mendapatkan tas karung<br>";
$ irsyal >= 10 = "Aku Data ke- " .$i. "tidak  mendapatkan apapun<br>"; -->
<?php
$irsyal = 10;
for ($i=0; $i <=$irsyal ; $i++) {
  if ($i == 1) {
	echo "aku data ke- ".$i." dan mendapatkan emas<br>";
  }elseif ($i == 2) {
	echo "aku data ke- ".$i." dan mendapatkan perak<br>";
  }elseif ($i == 3) {
	echo "aku data ke- ".$i." dan mendapatkan perunggu<br>";
  }elseif ($i >=4 && $i <=6 ) {
	echo "aku data ke- ".$i." dan mendapatkan tas laptop<br>";
  }elseif ($i >=7 && $i <=9) {
	echo "aku data ke- ".$i." dan mendapatkan tas karung<br>";
  }elseif ($i >=10){
	echo "aku data ke- ".+$i." tidak  mendapatkan apapun<br>";
  }
}
?>