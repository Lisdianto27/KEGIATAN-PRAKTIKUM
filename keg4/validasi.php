<html>

 <head>
 <style>
 .error {color: #FF0000;}
 </style>
 </head>
<center>
 <body>
 <?php
 // define variables and set to empty values
 $namaErr = $emailErr = $genderErr = $websiteErr = "";
 $nama = $email = $gender = $comment = $website = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["nama"])) {
 $namaErr = "Nama harus diisi";
 }else {
 $nama = test_input($_POST["nama"]);
 }

 if (empty($_POST["email"])) {
 $emailErr = "Email harus diisi";
 }else {
 $email = test_input($_POST["email"]);

 // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Email tidak sesuai format";
 }
 }

 if (empty($_POST["website"])) {
 $website = "";
 }else {
 $website = test_input($_POST["website"]);
 }

 if (empty($_POST["comment"])) {
 $comment = "";
 }else {
 $comment = test_input($_POST["comment"]);
 }

 if (empty($_POST["gender"])) {
 $genderErr = "Gender harus dipilih";
 }else {
 $gender = test_input($_POST["gender"]);
 }
 }

 function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 }
 ?>

 <h2>Posting Komentar </h2>

 <p><span class = "error">* WAJIB DIISI!!!.</span></p>

 <form method = "post" action = "<?php
 echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <table>
 <tr>
 <td>Nama:</td>
 <td><input type = "text" name = "nama">
 <span class = "error">* <?php echo $namaErr;?></span>
 </td>
 </tr>

 <tr>
 <td>E-mail: </td>
 <td><input type = "text" name = "email">
 <span class = "error">* <?php echo $emailErr;?></span>
 </td>
 </tr>

 <tr>
 <td>Website:</td>
 <td> <input type = "text" name = "website">
 <span class = "error"><?php echo $websiteErr;?></span>
 </td>
 </tr>

 <tr>
 <td>Komentar:</td>
 <td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
 </tr>

 <tr>
 <td>Gender:</td>
 <td>
 <input type = "radio" name = "gender" value = "L">Laki-Laki
 <input type = "radio" name = "gender" value = "P">Perempuan
 <span class = "error">* <?php echo $genderErr;?></span>
 </td>
 </tr>
 <td>
 <input type = "submit" name = "submit" value = "Submit">
 </td>
 </table>
 </form>

 <?php
 echo "<h2>DATA ANDA:</h2>";

 echo "<table border=1>";
 echo "<tr>";
 echo "<td>Nama</td>";
 echo "<td>Email</td>";
 echo "<td>Website</td>";
 echo "<td>Comment</td>";
 echo "<td>Gender</td>";
 echo "</tr>";
 
 echo "<tr>";
 echo "<td>$nama</td>";
 echo "<td>$email</td>";
 echo "<td>$website</td>";
 echo "<td>$comment</td>";
 echo "<td>$gender</td>";
 echo "</tr>";

 echo "</table>";

 ?>

 </body>
 </center>
</html>