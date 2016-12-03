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
	$adress = stripslashes($_REQUEST['adress']);
	$adress = mysqli_real_escape_string($con,$adress);
	$aboutme = stripslashes($_REQUEST['aboutme']);
	$aboutme = mysqli_real_escape_string($con,$aboutme);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date, adress, aboutme)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$adress', '$aboutme')";
        $result = mysqli_query($con,$query);
        if($result)
        {
 	$to = "kafkic@gmail.com";
        $subject = "registrace nového člena";
        $message = "nekdo, kdo si řiká '$username' se '$trn_date' registroval do klubu.<br/>kdyby si mu chtěl napsat tak sem '$email'.";
	mail($to , $subject, $message);
	$to = $email
        $subject = "Víme o tobě, ale ještě nemáš vyhráno";
        $message = "Zdravim '$username' k '$trn_date' jsme zaregistrovali, že by si se rád registroval do klubu.<br/>Jsme potěšeni, ale musíš vydržet, než se rozhodneme, jestli chceme mi mezi sebe :)<br/>přijd osobně a nějak se dohodneme určitě.";
	mail($email, $subject, $message);
        echo "<div class='form'><h3>Registrace proběhla v pořádku, ted se čeká jen na schválení.</h3><br/>Zde klikni pro <a href='login.php'>přihlášení</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Stát se členem</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Přihlašovací jméno" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" name="adress" placeholder="Adresa" required />
<input type="text" name="aboutme" placeholder="Popiš se" required />
<input type="password" name="password" placeholder="Heslo" required />
<input type="submit" name="submit" value="Registrovat se" />
</form>
</div>
<?php } ?>
</body>
</html>
