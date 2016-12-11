<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'woodoo');
	define('DBNAME', 'dbtest');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("chyba spojení : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("chyba spojení s DB : " . mysql_error());
	}
	