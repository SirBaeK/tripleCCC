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
		<p>username je <?php echo $username; ?>!</p>
		<p>email je <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['email'];};};?></p>
		<p>tvoje adresa je <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['adress'];};};?></p>
		<p>co jsi o sobě napsal <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['aboutme'];};};?></p>
		<p>registroval si se <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['trn_date'];};};?></p>
		<p>realname je  <?php if ($result = mysqli_query($con, $query)) { while ($row = mysqli_fetch_array($result)) {echo $row['realname'];};};?></p>
		<p>email je <?php $username = $_SESSION['username'];$result = mysqli_query($con,"SELECT * FROM `users` WHERE `username` = '$username'");$row = mysqli_fetch_array($result); echo $row['email']; ?>!
		</p>
	</div>
 	<div class="column-left">
 		<p><?php include("menu.php"); ?>!</p>
 	</div>
</div>
</body>
</html>

