<?php
    include_once('konek.php');
    $ID = $_GET['id'];
    $query = "DELETE FROM alat WHERE alat.id = ".$ID.";";
    mysqli_query($conn, $query);
	if ($query){
	$msg = "Data Telah dihapus";
	}else{
	$msg = "Data tidak terhapus";
	}
  $response = array (
		'DataBarang' => $msg
  );
  echo json_encode($response);
?>