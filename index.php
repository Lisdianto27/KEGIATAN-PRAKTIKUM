<?php

echo "<h2>ADMIN</h2>
<form method=POST action=form_user.php>
<input type=submit value='Tambah Penyewa'>
</form>
<table>

<form method=POST action=cari.php>
<input type=submit value='search'>
</form>
<table><form method=POST action=xml.php>
<input type=submit value='xml'>
</form>
<table>

<form method=POST action=json.php>
<input type=submit value='json'>
</form>
<table>
<tr><th>No</th><th>NAMA</th><th>ALAMAT</th><th>NO_HP</th><th>BARANG</th><th>JAMINAN</th><th>Aksi</th
></tr>";

include "koneksi.php";

$sql="SELECT * from sewa order by NAMA";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;

while ($r = mysqli_fetch_array($tampil))
{

echo "<tr><td>$no</td><td>$r[NAMA]</td>
<td>$r[ALAMAT]</td>
<td>$r[NO_HP]</td>
<td>$r[BARANG]</td>
<td>$r[JAMINAN]</td>
<td><a href='hapus.php?id=$r[NAMA]'>Hapus</a></td>
<td><a href='edit.php?id=$r[NAMA]'>Edit</a></td>
</tr>";

 $no++;
}
echo "</table>";
} else {
 echo "0 results";
 }
 mysqli_close($con);
?>
