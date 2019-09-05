<?php
$arrayName = array('Ajeng' => 90, 'Mamat' => 70, 
	'Ucup' => 87, 'Aang' => 75, 'Syahrul' => 75);
	foreach ($arrayName as $nama => $nilai) {
		echo "<pre>";
	if ($nilai > 85) {
		$data = "Grade A<br>";
	}
	elseif ($nilai > 75) {
		$data = "Grade B<br>";
	}
	elseif ($nilai > 65) {
		$data = "Grade C<br>";
	}
	echo "<hr>Nilai $nama = $nilai $data</hr>";
	echo "</pre>";
}
