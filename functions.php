<?php
function registration(){
echo '<p>'."registrovat nového člena".'<a href="registration.php">'."Přidat".'</a></p>';
}

function check_db_connection() {	
		$con = mysqli_connect($localhost,$dbuser,$dbpass,$dbname);
		if (mysqli_connect_errno()) {
  				echo "Chyba s přihlášením do MySQL: " . mysqli_connect_error();
  				}

}



?>
