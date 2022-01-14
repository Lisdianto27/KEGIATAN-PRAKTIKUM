<?php
include "koneksi.php";
$sql="select * from sewa order by NAMA";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['NAMA'] = $r['NAMA'];
 $h['ALAMAT'] = $r['ALAMAT'];
 $h['NO_HP'] = $r['NO_HP'];
 $h['BARANG'] = $r['BARANG'];
 $h['JAMINAN'] = $r['JAMINAN'];
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>