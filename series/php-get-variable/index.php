<?php

	// 01 The first if checks to see if the user has hit the subit button. If not it doesn't display anything. If the user has has submitted information, the second if desides if all three feilds have information submitted. If the user left one or more feilds blank, the else statement tells the user to fill in all fields. If all fields are filled in it outputs the information entered.
	if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
		$day = $_GET['day'];
		$date = $_GET['date'];
		$year = $_GET['year'];

		if (!empty($day)&&!empty($date)&&!empty($year)) {
			echo 'It is '.$day.' '.$date.' '.$year;
		} else {
			echo 'Fill in all fields.';
		}
	}
?>

<form action="index.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br><br>
	<input type="submit" value="Submit">
</form>