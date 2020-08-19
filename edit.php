<?php 
include('conection.php');
$id= $_GET['id'];
$query = mysqli_query($connect,"SELECT*FROM karyawan WHERE id='$id' LIMIT 1 ");
//mengambil semua data di mysqli ini
$results=mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($results);
// exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <form action="update.php" method='post'>
    <input type="hidden" name='id' value="<?php echo $results[0]['id'] ?>">
    <label for="">Isi Nama Anda</label><br>
    <input type="text" name='nama' value="<?php echo $results[0]['nama'] ?>"><br><br>
    <label for="">isi Alamat Anda</label><br>
    <textarea name="alamat"  cols="30" rows="10" ><?php echo $results[0]['alamat']; ?></textarea><br>
    <label for="" >isi umur anada</label><br>
    <input type="text" name='umur' value="<?php echo $results[0]['umur']?>"><br>
    <label for="">Pilih jenis kelamin anda</label><br><br>
    <select name="jeniskelamin">
    <option value="pria" value="<?php echo ($results[0]['jeniskelamin'] == 'pria') ? 'selected': ''; ?>">pria</option>
    <option value="wanit" value="<?php echo ($results[0]['jeniskelamin'] == 'wanit') ? 'selected': ''; ?>">wanita</option>
    </select><br><br>
    <button type='submit'> tambah</button>
    </form>
</body>
</html>