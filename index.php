<?php
require('db.php');
include("auth.php");
$query = "SELECT * FROM `news`";
$result = mysqli_query($con, $query );



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
		<div class="welcome">
			<p>Vítám tě <?php echo $_SESSION['username']; ?>!</p>
			<p>Nacházíš se ve virtuálním klubu.<br></p>
		</div>
	</div>
 	<div class="column-left">
 		<p><a href="index.php">Klubovna</a></p>
 		<p><a href="dashboard.php">Tvůj koutek</a></p>
 		<p><a href="aboutme.php">Kdo jsem</a></p>
		<p><a href="logout.php">Odejít</a></p>
 		<p><a href="unused.php">unused</a></p>
	</div>
	<div class="column-right">
		<p><?php if ($result = mysqli_query($con, $query)) {while ($row = mysqli_fetch_array($result)) {echo'<div class="news">' . "aktualita od :" . '<br>' . $row['username'] . " ----- " . $row['time'] . '<br>';printf ($row['news']);echo '<br>' . '<br>' . '</div>';};};?></p>
	</div>
</div>
</body>
</html>
