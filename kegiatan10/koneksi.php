<?php
//menampung localhst yan aka d gunakan untuk menghubungkan ke dalam data base
$host = "localhost"; 
//variabel untuk manmapung root
$username = "root";
//untu menampung pass karena tidka pake pass maka di kosongkan
$password = ""; 
//variabel yang kana menampung data bse yang kita gunakan
$databasename = "akademik"; 
//isi nama host usernaedan pass
$con = @mysqli_connect($host, $username, $password, $databasename);
if (!$con) {
    echo "Error: " . mysqli_connect_error(); 
    exit(); 
}