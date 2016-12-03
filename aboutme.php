<?php
require('db.php');
include("auth.php");
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
		<p>username je  <?php $username = $_SESSION['username'];echo $username; ?>!</p>
		<p>email je <?php $username = $_SESSION['username'];$result = mysql_query("SELECT * FROM `users` WHERE `username` = '$username'");$row = mysql_fetch_row($result);echo $result ; echo $row['email']; ?>!
		</p>
	</div>
 	<div class="column-left">
 		<p><a href="dashboard.php">Tvůj koutek</a></p>
 		<p><a href="aboutme.php">Kdo jsem</a></p>
		<p><a href="logout.php">Odejít</a></p>
	</div>
</div>
</body>
</html>

