<?php
require('db.php');
include("auth.php");
include("newsquery.php");
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
			<?php 
 				include("welcome.php");
 			?>
		</div>
	</div>
 	<div class="column-left">
 		<p>
 			<?php 
 				include("menu.php");
 			?>
 		</p>		
	</div>
	<div class="column-right">
		<p>
			<?php 
				include("addnews.php");
				include("news.php");
			?>
		</p>
	</div>
</div>
</body>
</html>
