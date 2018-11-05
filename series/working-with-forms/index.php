<?php

?>

  <!-- 01 Action give direction to where the information should be sent. If file is not specified the page will post back to itself. -->
  <!-- 02 Method specifies how the information should be sent. The two most common methods are get and post. -->

<form action="index.php" method="GET">
	Day:<br><input type="text" name="day"><br>
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br><br>
	<input type="submit" value="Submit">
</form>