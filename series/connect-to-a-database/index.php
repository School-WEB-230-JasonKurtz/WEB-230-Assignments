<?php
	$conn_error = 'Could not connect.';

	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';

	$mysql_db = 'a_database';

	$mysqli_link = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);

	if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysqli_select_db($mysqli_link, $mysql_db)) {
		die($conn_error);
	} else {
		echo 'Connected.';
	}
?>