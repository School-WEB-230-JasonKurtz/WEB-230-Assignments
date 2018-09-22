<?php
	$string = ' This is an example string. ';

	$string_trimmed = trim($string);

	echo $string;
	echo '<br>';

	echo $string_trimmed;
	echo '<br>';

	$string_trimmed = rtrim($string);

	echo $string_trimmed;
	echo '<br>';

	$string_trimmed = ltrim($string);

	echo $string_trimmed;
	echo '<br>';

	//reset

	$string = 'This is a <img src="image.jpg"> string.';

	$string_slashes = htmlentities(addslashes($string));
	echo $string_slashes;
	echo '<br>';

	echo stripslashes($string_slashes);
	echo '<br>';
?>
