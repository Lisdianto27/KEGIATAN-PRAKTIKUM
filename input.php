<?php

include "koneksi.php";

$NAMA = $_POST['NAMA'];

 $ALAMAT = $_POST['ALAMAT'];

 $NO_HP = $_POST['NO_HP'];


 $BARANG = $_POST['BARANG'];


 $JAMINAN = $_POST['JAMINAN'];


$sql = "INSERT INTO sewa(NAMA,ALAMAT,NO_HP,BARANG,JAMINAN ) VALUES ('$NAMA', '$ALAMAT', 
'$NO_HP','$BARANG','$JAMINAN')";
$query=mysqli_query($con, $sql);
mysqli_close($con);

header('location:index.php');
?>