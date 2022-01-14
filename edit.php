<?php

include_once("koneksi.php");

if(isset($_POST['update']))
{ 
 $NAMA = $_POST['NAMA'];
 $ALAMAT=$_POST['ALAMAT'];
 $NO_HP=$_POST['NO_HP'];
 $BARANG=$_POST['BARANG'];
 $JAMINAN=$_POST['JAMINAN'];
 
$result = mysqli_query($con, "UPDATE sewa SET 
ALAMAT='$ALAMAT',NO_HP='$NO_HP',BARANG='$BARANG',JAMINAN='$JAMINAN' WHERE NAMA='$NAMA'");

header("Location: index.php");
}
?>

<?php

$NAMA = $_GET['NAMA'];

$result = mysqli_query($con, "SELECT * FROM sewa WHERE NAMA='$NAMA'");
while($user_data = mysqli_fetch_array($result))
{
$NAMA = $user_data['NAMA'];
$ALAMAT = $user_data['ALAMAT'];
$NO_HP = $user_data['NO_HP'];
$BARANG = $user_data['BARANG'];
$JAMINAN = $user_data['JAMINAN'];
}
?>
<html>
<head> 
<title>Edit Data Penyewa</title>
</head>
<body>
 <a href="index.php">Home</a>
 <br/><br/>
<form name="update_sewa" method="post" action="edit.php">
<table border="0">
<tr> 
<td>ALAMAT</td>
<td><input type="text" name="ALAMAT" value=<?php echo $ALAMAT;?>></td>
</tr>
<tr> 
<td>NO_HP</td>
<td><input type="text" name="NO_HP" value=<?php echo $NO_HP;?>></td>
</tr>
<tr> 
<td>BARANG</td>
<td><input type="text" name="BARANG" value=<?php echo $BARANG;?>></td>
</tr>
<tr> 
<td>Tgl Lahir</td>
<td><input type="text" name="JAMINAN" value=<?php echo $JAMINAN;?>></td>
</tr>
<tr>
<td><input type="hidden" name="NAMA" value=<?php echo $_GET['NAMA'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>