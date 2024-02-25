<?php 
function tambah($data) {
	$db = mysqli_connect("localhost","root","","db_puskom");
	$nama = htmlspecialchars($data['nama']);
	$kelas = $data['kelas'];
	$divisi = $data['divisi'];
		$query = "INSERT INTO user  VALUES ('', '$nama' , '$kelas' , '$divisi' )";
		mysqli_query($db,$query);

		}
 ?>