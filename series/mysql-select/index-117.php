<?php
	require 'connect.inc.php';

	$query = "SELECT food, calories From food WHERE healthy_unhealthy = 'u' AND calories = 100 ORDER BY id DESC";

	if ($query_run = mysqli_query($link, $query)) {
		if (mysqli_num_rows($query_run) == NULL) {
			echo 'No results found.';
		} else {
			while ($query_row = mysqli_fetch_assoc($query_run)) {
				$food = $query_row['food'];
				$calories = $query_row['calories'];
				echo $food.' has '.$calories.' calories.<br>';
			}
		}
	} else {
		echo mysqli_error($link);
	}
?>