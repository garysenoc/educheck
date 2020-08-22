
<?php

	$server = "localhost";
	$un = "root";
	$pw = "";
	$db = "educheck_db";

	$cn = new mysqli($server, $un, $pw, $db);
	if ($cn -> connect_errno) {
	    echo "Failed to connect to MySQL: (" . $cn -> connect_errno . ") " . $cn -> connect_error;
	}

?>