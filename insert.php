<?php
    include('conection.php');
    // karena form mengguakan method post maka kita gunakan post
    $nama= $_POST['nama'];
    $alamat=$_POST['alamat'];
    $umur=$_POST['umur'];
    $jeniskelamin=$_POST['jeniskelamin'];
    // menggunakan printah msqli_qury untuk menyimpan datanya
    $insert=mysqli_query($connect,"INSERT INTO karyawan SET nama='$nama',alamat='$alamat',umur='$umur',jeniskelamin='$jeniskelamin'");

    // jika berhsil maka datanya kita kembalikan ke list dengan memanfaatkan fungsi header

    if($insert)
        header('location:list.php');
    else
        echo "input data gagal ";

?>