<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <form action="insert.php" method='post'>
    <label for="">Isi Nama Anda</label><br>
    <input type="text" name='nama'><br><br>
    <label for="">isi Alamat Anda</label><br>
    <textarea type='text' name="alamat"  cols="30" rows="10"></textarea><br>
    <label for="" >isi umur anada</label><br>
    <input type="text" name='umur'><br>
    <label for="">Pilih jenis kelamin anda</label><br><br>
    <select name="jeniskelamin" id="">
    <option value="pria">pria</option>
    <option value="wanit">wanita</option>
    </select><br><br>
    <button type='submit'> tambah</button>
    </form>
</body>
</html>