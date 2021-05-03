<?php
include "konek.php";
$NamaBarang=$_POST["namaBarang"];
$Id=$_POST["id"];
$Pengirim=$_POST["pengirim"];
$Penerima=$_POST["penerima"];
$AlamatBarang=$_POST["alamatBarang"];

$sql = "INSERT INTO `alat` (`namaBarang`, `id`, `pengirim`, `penerima`,`alamatBarang` ) VALUES ('".$NamaBarang."', '".$Id."', '".$Pengirim."', '".$Penerima."', '".$AlamatBarang."');";
$query = mysqli_query($conn, $sql);
if ($query){
	$msg = "Data telah tersimpan";
}else{
	$msg = "Data gagal disimpan";
}
  $response = array (
		'DataBarang' => $msg
  );
  echo json_encode($response);
?>