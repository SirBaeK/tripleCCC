<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>O tobě</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>


<div class="form-index">
	<div class="column-center">
		<form action="" method="post" name="aboutme">
			<p>Jak se jmenujete:<?php echo $_SESSION['username']; ?></p>
			<p>Nějaký kontakt na vás:<input type="text" name="kontakt" placeholder="Kontakt" required /></p>
			<p>Něco o vás:
			<input name="submit" type="submit" value="Přihlásit se" />
		</form>
	</div>
 	<div class="column-left">
 		<p><a href="dashboard.php">Tvůj koutek</a></p>
 		<p><a href="aboutme.php">Kdo jsem</a></p>
		<p><a href="logout.php">Odejít</a></p>
	</div>
</div>
</body>
</html>
