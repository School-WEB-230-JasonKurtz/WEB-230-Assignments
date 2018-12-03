<?php
	require 'connect.inc.php';

	$query = 'SELECT food, calories From food ORDER BY id';

	if ($query_run = mysqli_query($link, $query)) {
		echo 'Query success.';
	} else {
		echo 'Query failed.';
	}
?>