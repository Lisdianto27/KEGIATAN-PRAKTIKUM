<?php
include "koneksi.php";
//funngsi penghapus data
$sql="DELETE FROM sewa where NAMA= '$_GET[id]'";
mysqli_query($con, $sql);
 mysqli_close($con);
header('location:index.php');
?>