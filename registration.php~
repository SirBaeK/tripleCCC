<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Stát se členem</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$phone = stripslashes($_REQUEST['phone']);
	$phone = mysqli_real_escape_string($con,$phone);
	$adress = stripslashes($_REQUEST['adress']);
	$adress = mysqli_real_escape_string($con,$adress);
	$aboutme = stripslashes($_REQUEST['aboutme']);
	$aboutme = mysqli_real_escape_string($con,$aboutme);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, phone, trn_date, adress, aboutme)
VALUES ('$username', '".md5($password)."', '$email', '$phone', '$trn_date', '$adress', '$aboutme')";
        $result = mysqli_query($con,$query);
        if($result) {
        echo "<div class='form'><h3>Registrace proběhla v pořádku, ted se čeká jen na schválení.</h3><br/>Zde klikni pro <a href='login.php'>přihlášení</a></div>";
        }
  
?>
<div class="form">
<h1>Stát se členem</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Přihlašovací jméno" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" name="adress" placeholder="Adresa" required />
<input type="text" name="aboutme" placeholder="Popiš se" required />
<input type="text" name="phone" placeholder="telefon" required />
<input type="password" name="password" placeholder="Heslo" required />
<input type="submit" name="submit" value="Registrovat se" />
</form>
</div>
<?php } ?>
</body>
</html>
