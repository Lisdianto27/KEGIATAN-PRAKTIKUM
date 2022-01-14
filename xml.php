<?php
include "koneksi.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM sewa";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<sewa>";
 echo"<NAMA>",$data['NAMA'],"</NAMA>";
 echo"<ALAMAT>",$data['ALAMAT'],"</ALAMAT>";
 echo"<NO_HP>",$data['NO_HP'],"</NO_HP>";
 echo"<BARANG>",$data['BARANG'],"</BARANG>";
 echo"<JAMINAN>",$data['JAMINAN'],"</JAMINAN>";
 echo "</sewa>";
}
echo "</data>";
?>