

<?php
require('db.php');
include("auth.php");

include("variables.php");
include'functions.php';
 
if($_SESSION["username"] = "kafkicz"){
echo "aaa";
}



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
		<p><?php if($_SESSION["username"] = "kafkicz"){

registration();} ?>!</p>
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

