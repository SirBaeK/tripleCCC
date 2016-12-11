<!DOCTYPE html>
<html>
<head>
<title>vítej u nás</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="column-news">
<?php
require("db.php");
$query = "SELECT * FROM news ORDER BY time DESC ";
$result = mysqli_query($con, $query) or die('--');
while($news = mysqli_fetch_array($result)) {
echo $news['news'];</div>;
echo "kokot";
echo '<br>';
}
?>


</body>
</html>