<?php
	//Connects to the database.
	require 'connect.inc.php';

	//Stores the user's IP address.
	$user_ip = $_SERVER['REMOTE_ADDR'];

	//Creates function to test if the user's IP address is in the database.
	function ip_exists($ip) {

		//Brings in global variables for user's IP address and the connection credentials required for mysqli.
		global $user_ip;
		global $link;

		//Brings in any occurrences of user's IP address from database.
		$query = "SELECT ip FROM hits_ip WHERE ip = '$user_ip'";
		$query_run = mysqli_query($link, $query);
		$query_num_rows = mysqli_num_rows($query_run);

		//Test to see if user's IP address is already in the database.
		if ($query_num_rows == 0) {
			return false;
		} else if ($query_num_rows >= 1) {
			return true;
		}
	}

	//Creates function to add user's IP address to the database.
	function ip_add($ip) {

		//Brings in global variable for the connection credentials required for mysqli.
		global $link;

		//Inserts the user's IP address into the database.
		$query = "INSERT INTO hits_ip VALUES ('$ip')";
		$query_run = mysqli_query($link, $query);
	}

	//Creates a function to add the hit into the database provided that it is the user's first time to the site.
	function update_count() {

		//Brings in global variable for the connection credentials required for mysqli.
		global $link;

		//Brings in the current hit count from the database.
		$query = "SELECT count FROM hits_count";
		if ($query_run = mysqli_query($link, $query)) {

			//Since there is no mysqli equivalant to mysql_result I adapted something I found on Stackoverflow at https://stackoverflow.com/questions/25330616/how-to-get-same-results-from-mysqli-as-in-mysql-result.
			//This code stores a value in $count that is fetched using the SELECT statment in $query. Fetch returns an array that can be accessed using a location of 0.
			$row = mysqli_fetch_row($query_run);
			$count = $row[0];

			//Increments the count.
			$count_inc = $count + 1;

			//Query to update the value in the database to new incremented value.
			$query_update = "UPDATE hits_count SET count = '$count_inc'";

			//Query to retrive the new incremented value from the database.
			@$query_run_update = mysqli_query($link, $query_update);
		}
	}

	//Runs the functions to add a hit to the counter and log the user's IP address provided that it is the user's first time to the site.
	if (!ip_exists($user_ip)) {
		update_count();
		ip_add ($user_ip);
	}

	//Closes the connection to the database.
	mysqli_close($link);
?>

<h1>My Page</h1>