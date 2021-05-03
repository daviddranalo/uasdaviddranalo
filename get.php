<?php
include "konek.php";
$sql = "SELECT * FROM alat";
$query = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($query)){

    $item[] = array (
        'NamaBarang'=>$data["namaBarang"],
        'Id'=>$data["id"],
        'Pengirim'=>$data["pengirim"],
        'Penerima'=>$data["penerima"],
        'AlamatBarang'=>$data["alamatBarang"],
    );
  }
  $response = array (
        'DataBarang' => $item
  );
  echo json_encode($response);
?>