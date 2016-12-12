

<?php
require('db.php');
include("auth.php");

include("variables.php");
include('functions.php');
 
if ($_SESSION["username"] == "kafkicz") {
	$username = $_SESSION["username"];
}

;
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
		<p><?php if ($_SESSION["username"] == "kafkicz"){
				registration();} ?>
		</p>
	</div>
 	<div class="column-left">
 		<p><?php include("menu.php"); ?>!</p>
 	</div>
</div>
</body>
</html>

