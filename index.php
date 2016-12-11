<?php
require('db.php');
include("auth.php");
$query = "SELECT * FROM `news`";
$result = mysqli_query($con, $query );


if (isset($_POST['news'])){
 	$username = stripslashes($_SESSION['username']);
	$username = mysqli_real_escape_string($con,$_SESSION['username']);
	$news = mysqli_real_escape_string($link, $_POST['news']);
	$news = stripslashes($_POST['news']);
	$addquery = "INSERT INTO ´news´ (username, news) VALUES ('$username', '$news')";
	$addresult = mysqli_query($con, $addquery );
		if(mysqli_query($con, $addquery)){
  		  echo "Records added successfully.";
  		  }
  		   else	{
   				 echo "ERROR: Could not able to execute $addquery. " . mysqli_error($con);
					}
}





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
		<p><h1>Novinka</h1></p>
		<p>
		<form action="" method="post" name="add-news"><br>
			<input type="text" name="news" placeholder="Aktualita???" required /><br>
			<input name="submit-news" type="submit" value="Přidat aktualitu" /><br>
		</form>
		</p>
		<p><?php if ($result = mysqli_query($con, $query)) {while ($row = mysqli_fetch_array($result)) {echo'<div class="news">' . "aktualita od :" . '<br>' . $row['username'] . " ----- " . $row['time'] . '<br>';printf ($row['news']);echo '<br>' . '<br>' . '</div>';};};?></p>
	</div>
</div>
</body>
</html>
