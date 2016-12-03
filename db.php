<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","woodoo","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Chyba s přihlášením do MySQL: " . mysqli_connect_error();
  }
?>
