
<?php
require("db.php");
/*$query = "SELECT * FROM news ORDER BY time DESC ";*/
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
$result = mysqli_query($con, $query) or die('--');
	if ($result = mysqli_query($con, $query)) {
		while ($row = mysqli_fetch_array($result)) {
			echo'<div class="news">' . '<br>' . $row['time'] . '<br>';
			print_r($row['news']);
			echo '<br>' . '<br>' . '</div>';
			};
		};
		if (isset($_POST['news'])){
 	$username = stripslashes($_SESSION['username']);
	$username = mysqli_real_escape_string($con,$_SESSION['username']);
	$time = time();
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
					

};
?>
