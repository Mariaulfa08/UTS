<?php
$hostname="localhost";
$username="root";
$password=" ";
$database="db_kampus";
$koneksi= mysql_connect($hostname,$username,$password) or die ("koneksi ke MYSQL gagal");
mysql_select_db($database,$koneksi) or die ("koneksi ke database gagal");
?>