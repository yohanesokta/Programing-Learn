<?php 
	function send($data){
		$short = 0;
		require 'connect_user.php';
		$MES = $data["laporan"];
		$user_name = "Guest";
		if (strlen($MES) <=3){
			$short = 1;
		}
		if (strlen($MES) == 0){
		}else{
					$query = "INSERT INTO comment  VALUES ('','$user_name','$MES','$short')";
		mysqli_query($db,$query);
		}
		$MES = "";
		$data["laporan"]="";
	}

 ?>