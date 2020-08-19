<?php
// kita menggunkan perintah mysql_connect
// partama tempat dimana mysql diinstall
// parameter kedua = user mysql
// parameter ketiga = passwordnya
// paramater yang ke 4 nama database yang di koneksikan
$connect = mysqli_connect('localhost','root','','latihan');
// kita berikan kondisi gagal
if(!$connect)
    exit('gagal koneksi database...');


?>