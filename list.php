<?php
    include('conection.php');
    // menggunakan printah msqli_query utk mengquerikan data didalam dataae 
    // paramter pertama di gunakan utuk mengkoneksikan varibael
    // paramter kedua menerima sitaks yang mau dijalankan
    $query = mysqli_query($connect,"SELECT*FROM karyawan");
    // kita gunakan printah mysqli_fetch_all yang berfungsi untuk mengambil semua data sql 
    $results=mysqli_fetch_all($query, MYSQLI_ASSOC);
    // Cetak beserta indeknya
    //  print_r($results);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP MYSQL</title>
</head>
<body>
<a href="add.php">Tambah Data</a>
<br>
<br>

<table border='1'>
<tr>
<th>Nama</th>
<th>Alamat</th>
<th>umur</th>
<th>jenis kelamin</th>
<th>Pilihan</th>
</tr>
<?php foreach($results as $key => $nilai) : ?>
<tr>
<td><?php echo $nilai['nama'];?></td>
<td><?php echo $nilai['alamat'];?></td>
<td><?php echo $nilai['umur'];?></td>
<td><?php echo $nilai['jeniskelamin'];?></td>
<td>
<a href="edit.php?id=<?php echo $nilai['id']?>">Edit</a>
</td>
</tr>
<?php endforeach; ?>

</table>
    
</body>
</html>