<?php
include "conek.php";
//menagmbil data dari id_user
$id_user = $_POST['id_user'];
//mengambil data dari password yang menggunakna md5 untuk mengenkripsi
$password=md5($_POST['password']);
//untuk menampilkan seluruh data user
$sql="SELECT * FROM user WHERE id_user='$id_user' AND password='$password'";
$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);
if ($ketemu > 0){
 session_start();
 //inisialiasi variable session
 $_SESSION['iduser'] = $r['id_user'];
 $_SESSION['passuser'] = $r['password'];
 //output jiku username dan pass benar
echo"USER BERHASIL LOGIN<br>";
echo "id_user =",$_SESSION['iduser'],"<br>";
echo "password=",$_SESSION['passuser'],"<br>";
echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}
//output jika keduanya salah
else{
echo "<center>Login gagal! username & password tidak benar<br>";
echo "<a href=login.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($con);
?>