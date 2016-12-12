<?php
require("db.php");
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



?>