<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>vítej u nás</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form-index">
	<div class="column-center">
		<p>Vítám tě <?php echo $_SESSION['username']; ?>!</p>
		<p>Nacházíš se ve virtuálním klubu.</p>
	</div>
 	<div class="column-left">
 		<p><a href="dashboard.php">Tvůj koutek</a></p>
 		<p><a href="aboutme.php">Kdo jsem</a></p>
		<p><a href="logout.php">Odejít</a></p>
	</div>
</div>
</body>
</html>
