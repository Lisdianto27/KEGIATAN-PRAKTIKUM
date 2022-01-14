<?php 
include 'koneksi.php';
?>
<h3>MENCARI PENYEWA</h3>
<form action="" method="get">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
<tr>
<th>No</th>
<th>Nama</th>
<th>ALAMAT</th>
<th>NO_HP</th>
<th>BARANG</th>
<th>JAMINAN</th>
</tr>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql="select * from sewa where NAMA like'%".$cari."%'";
$tampil = mysqli_query($con,$sql);
}else{
$sql="select * from sewa";
$tampil = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['NAMA']; ?></td>
<td><?php echo $r['ALAMAT']; ?></td>
<td><?php echo $r['NO_HP']; ?></td>
<td><?php echo $r['BARANG']; ?></td>
<td><?php echo $r['JAMINAN']; ?></td>
</tr>
<?php } ?>
</table>
