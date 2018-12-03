<?php
	require 'connect.inc.php';

	$query = "SELECT food, calories From food ORDER BY id DESC";

	if ($query_run = mysqli_query($link, $query)) {
		while ($query_row = mysqli_fetch_assoc($query_run)) {
			$food = $query_row['food'];
			$calories = $query_row['calories'];
			echo $food.' has '.$calories.' calories.<br>';
		}
	} else {
		echo mysqli_error($link);
	}
?>