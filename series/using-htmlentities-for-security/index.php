<?php
	if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {

		// 01 htmlentities take the item that is being passed into it and changes all the special characters into html entities so that they are not interpreted as html markup, but rather as plan text.
		$day = htmlentities($_GET['day']);
		$date = htmlentities($_GET['date']);
		$year = htmlentities($_GET['year']);
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