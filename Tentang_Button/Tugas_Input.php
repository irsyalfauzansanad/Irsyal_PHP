<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
Nama : <input type="text" name="Nama"><br><br>
Kelas : <input type="text" name="Kelas"><br><br>
Alamat : <input type="text" name="Alamat"><br><br>
Hoby : <input type="text" name="Hoby"><br><br>
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$kelas = $_POST['Kelas'];
$hoby = $_POST['Hoby'];
echo "Nama : <b>$nama<br></b>";
echo "Kelas : <b>$kelas</b><br>";
echo "Alamat : <b>$alamat</b><br>";
echo "Hoby : <b>$hoby</b><br>";
}
?> 