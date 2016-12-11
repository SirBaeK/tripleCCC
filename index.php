<?php
require('db.php');
include("auth.php");
$query = "
SELECT 
	news.newsid,
	news.time,
	news.id,
	news.news,
	users.username, 
	users.id
FROM 
	news,
	users
WHERE 
	users.id = news.id 
ORDER BY
	news.time DESC";
$result = mysqli_query($con, $query );
$time = time();





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
	<p><?php if ($result = mysqli_query($con, $query)) {while ($row = mysqli_fetch_array($result)) {echo'<div class="news">' . '<br>' . " ----- " . $row['time'] . '<br>';printf ($row['news']);echo '<br>' . '<br>' . '</div>';};};	
if (isset($_POST['news'])){
 	$username = stripslashes($_SESSION['username']);
	$username = mysqli_real_escape_string($con,$_SESSION['username']);
	$news = mysqli_real_escape_string($con, $_POST['news']);
	$userrow = mysqli_fetch_array($result);
	$user = $userrow['id'];
	$news = stripslashes($_POST['news']);
	$addquery = "INSERT INTO news (time,id,news) VALUES (NOW(), '$user' ,'$news')";
	$addresult = mysqli_query($con, $addquery ); 
	
	
	if(mysqli_query($con, $adddquery)){ 
  		  echo "Records added successfully.";
  		  }
  		   else	{
   				 echo "ERROR: Could not able to execute $addquery. " . mysqli_error($con);
					}
					

}

		?>
	</p>
	</div>
</div>
</body>
</html>
