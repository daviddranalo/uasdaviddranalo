<?php
	include "konek.php";
	$NamaBarang=$_POST["namaBarang"];
	$Id=$_POST["id"];
	$Pengirim=$_POST["pengirim"];
	$Penerima=$_POST["penerima"];
	$AlamatBarang=$_POST["alamatBarang"];
	$query = "UPDATE `alat` SET `namaBarang` = '".$NamaBarang."', `id` = '".$Id."', `pengirim` = '".$Pengirim."', `penerima` = '".$Penerima."' , `alamatBarang` = '".$AlamatBarang."' WHERE `alat`.`id` = ".$Id.";";
	mysqli_query($conn, $query);
	if ($query){
	$msg = "Data Telah diupdate";
	}else{
	$msg = "Data gagal diupdate";
	}
  $response = array (
		'DataBarang' => $msg
  );
  echo json_encode($response);
?>