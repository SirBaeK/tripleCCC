<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Přihlášení</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
   $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";	//Checking is user existing in the database or not
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1)	{
  	    		$_SESSION['username'] = $username;
	    		$_SESSION['user'] = mysqli_fetch_array($con,$rows);
            		// Redirect user to index.php
	    		header("Location: index.php");
			}
         else	{
		echo "<div class='form'>
			<h3>Přihlašovací jméno nebo heslo je zadáno chybně.</h3>
			<br/>Klikněte zde pro <a href='login.php'>přihlášení</a></div>";
		}
   			}
   				else{
?>
<div class="form">
<h1>Přihlásit se</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Přihlašovací jméno" required />
<input type="password" name="password" placeholder="Heslo" required />
<input name="submit" type="submit" value="Přihlásit se" />
</form>
<div class="secret">
</div>
</div>
<?php } ?>
</body>
</html>
