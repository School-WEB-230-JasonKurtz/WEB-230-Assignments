<?php
	$string = 'This is an example string.';
	$string_reversed = strrev($string);

	echo $string_reversed;
	echo '<br>';
	echo '<br>';

	$string = 'image.jpg';
	$string_reversed = strrev($string);

	$fileType = substr($string_reversed, 0, 3);

	echo $fileType;
	echo '<br>';
	echo '<br>';

	echo strrev($fileType);
	echo '<br>';
	echo '<br>';

	$string_one = 'This is my essay. I\'m going to be talking about php.';
	$string_two = 'This is my essay. I will be talking about the subject php.';

	similar_text($string_one, $string_two, $result);

	echo 'The similartity between is, '.$result.' %.';
	echo '<br>';
	echo '<br>';

	$string_one = 'This is my essay. I\'m going to be talking about php.';
	$string_two = 'My essay is about php. I\'m going to be talking about everything to do with php.';

	similar_text($string_one, $string_two, $result);

	echo 'The similartity between is, '.$result.' %.';
	echo '<br>';
	echo '<br>';

	$string_one = 'This is my essay. I\'m going to be talking about php.';
	$string_two = 'My essay is about cats. I\'ll be talking about cats and their colours.';

	similar_text($string_one, $string_two, $result);

	echo 'The similartity between is, '.$result.' %.';
	echo '<br>';
	echo '<br>';

	$string = 'This is an example string.';
	$string_length = strlen($string);

	echo $string_length;
	echo '<br>';
	echo '<br>';

	if ($string_length<25) {
		echo 'String is less then 25 characters.';
		echo '<br>';
		echo '<br>';
	} else {
		echo 'String is more than 25 characters.';
		echo '<br>';
		echo '<br>';
	}

	$string = '"This is the new string that I wrote."';
	$string_length = strlen($string);

	echo $string;
	echo '<br>';
	echo 'This string has '.$string_length.' characters. ';

	if ($string_length<25) {
		echo 'It is less then 25 characters long.';
		echo '<br>';
		echo '<br>';
	} else {
		echo 'It is more than 25 characters long.';
		echo '<br>';
		echo '<br>';
	}
?>
