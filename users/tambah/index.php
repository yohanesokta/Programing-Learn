<?php 
require '../../admin/tambah_user.php';
require '../../admin/connect_user.php';
if (isset($_POST['submit'])){
	tambah($_POST);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Siswa</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" id="nama" name="nama" required>
		<p>Kelas</p>
		<br>
		<input type="radio" id="X-MM" name="kelas" value="X-MM" required>
		<label for="X-MM">X-MM</label><br>
		<input type="radio" id="XI-MM" name="kelas" value="XI-MM"required>
		<label for="XI-MM">XI-MM</label><br>
		<input type="radio" id="'XII-MM" name="kelas" value="'XII-MM"required>
		<label for="'XII-MM">'XII-MM</label><br>
		<p>DIVISI</p>

		<input type="radio" id="Markom" name="divisi" value="Markom"required>
		<label for="Markom">Markom</label><br>
		<input type="radio" id="S-Ar" name="divisi" value="S-Ar"required>
		<label for="S-Ar">S-Ar</label><br>
		<input type="radio" id="C-Ar" name="divisi" value="C-Ar"required>
		<label for="C-Ar">C-Ar</label><br>
		<button type="submit" name="submit"> Tambah </button>

	</form>
	<a href="../" style="font-size: 20px">Kembali</a>
</body>
</html>