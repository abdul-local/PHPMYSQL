<?php
include('conection.php');

$id = $_GET['id'];

// memastikan data apakash sudah terlempar atau belum
// print_r($id);
// exit;

$hapus =mysqli_query($connect,"DELETE FROM karyawan WHERE id='$id' ");
if($hapus)
    header('location:list.php');
else
    echo"hapus data gagal";

?>