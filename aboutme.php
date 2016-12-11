<?php
require('db.php');
include("auth.php");
$username = $_SESSION['username'];
$query = "SELECT * FROM `users` WHERE `username` = '{$_SESSION['username']}'";
$result = mysqli_query($con, $query );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>o tobě</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form-index">
	<div class="column-center">
<<<<<<< HEAD
		<p>username je <?php echo $username; ?>!</p>
		<p>email je <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['email'];};};?></p>
		<p>tvoje adresa je <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['adress'];};};?></p>
		<p>co jsi o sobě napsal <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['aboutme'];};};?></p>
		<p>registroval si se <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['trn_date'];};};?></p>
=======
		<p>username je  <?php $username = $_SESSION['username'];echo $username; ?>!</p>
		<p>email je <?php $username = $_SESSION['username'];$result = mysql_query("SELECT * FROM `users` WHERE `username` = '$username'");$row = mysql_fetch_row($result);echo $result ; echo $row['email']; ?>!
		</p>
>>>>>>> 5c0575077043c1b746d357d888d7d0192eb665f6
	</div>
 	<div class="column-left">
 		<p><a href="index.php">Klubovna</a></p>
 		<p><a href="dashboard.php">Tvůj koutek</a></p>
 		<p><a href="aboutme.php">Kdo jsem</a></p>
		<p><a href="logout.php">Odejít</a></p>
 		<p><a href="unused.php">unused</a></p>
	</div>
</div>
</body>
</html>

