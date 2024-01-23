<?php 
include '../db/connection.php';
$id = $_GET["id"];
 
$sql_hitung = mysqli_query($connection, "SELECT * FROM loker");
    while($row = mysqli_fetch_array($sql_hitung)){
      $jml_sekarang = $row['pendaftar'];
      $jml_baru = $jml_sekarang+1;
      $query = "UPDATE loker SET pendaftar='$jml_baru' WHERE id ='$id'";
      $sql = mysqli_query($connection,$query);

      header('location:loker.php');
    }


 ?>