<?php
include('conection.php');
$id=$_POST['id'];

$nama= $_POST['nama'];
$alamat=$_POST['alamat'];
$umur=$_POST['umur'];
$jeniskelamin=$_POST['jeniskelamin'];

$update=mysqli_query($connect,"UPDATE karyawan SET nama='$nama',alamat='$alamat',umur='$umur',jeniskelamin='$jeniskelamin' WHERE id='$id' ");

// jika berhsil maka datanya kita kembalikan ke list dengan memanfaatkan fungsi header
if($update)
    header('location:list.php');
else
    echo "update data gagal ";



?>