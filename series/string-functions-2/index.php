<?php
	$string = 'This is an example string .';
	$string_word_count = str_word_count($string, 1, '.');

	print_r($string_word_count);
	echo '<br>';
	echo '<br>';

	$string = 'This is an example string .';
	$string_word_count = str_word_count($string, 1);

	print_r($string_word_count);
	echo '<br>';
	echo '<br>';

	$string = 'This is an example string & this is a tutorial.';
	$string_word_count = str_word_count($string, 1, '$.!*');

	print_r($string_word_count);
	echo '<br>';
	echo '<br>';

	$string = 'This is an example string & this is a tutorial .';
	$string_word_count = str_word_count($string, 1, '$.!*');

	print_r($string_word_count);
	echo '<br>';
	echo '<br>';

	$string = 'This is an example string .';
	$string_shuffled = str_shuffle($string);

	echo '<br>';
	echo '<br>';

	//Echos full shuffled string.
	print_r($string_shuffled);
	echo '<br>';
	echo '<br>';

	//Echos half of shuffled string.
	$half = substr($string_shuffled, 0, strlen($string)/2);
	echo $half;
	echo '<br>';
	echo '<br>';

	//Echos first five characters of shuffled string.
	$half = substr($string_shuffled, 0, 5);
	echo $half;
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';

	//Echos full shuffled string for comparison of following code.
	print_r($string_shuffled);
	echo '<br>';
	echo '<br>';

	//Echo half of shuffled string for comparison of following code.
	$half = substr($string_shuffled, 0, strlen($string)/2);
	echo $half;
	echo '<br>';
	echo '<br>';

	//Echo half of shuffled string with an offset of 10.
	$half = substr($string_shuffled, 10, strlen($string)/2);
	echo $half;
	echo '<br>';
	echo '<br>';

	//Echo half of shuffled string with an offset of 20.
	$half = substr($string_shuffled, 20, strlen($string)/2);
	echo $half;
	echo '<br>';
	echo '<br>';

	//Begining of code fix for what didn't work from the video.
	//Found when I googled "string reverse fucntion in php".
	$string = 'This is an example string.';
	$string_reversed = strrev($string);

	echo $string_reversed;
	echo '<br>';
	echo '<br>';
	//End of code block fix.

	$string = 'This is an example string.';
	$string_reversed = str_reverse($string);
	echo '<br>';
	echo '<br>';

	echo $string_reversed;

	//The following code is my attempt at fixing the previous code withough looking it up, but it didn't work.

	/*
	$string_revised = 'String.'
	$string = 'This is an example string.';
	$string_reversed = $string_reversed($string);
	*/

	//Figured out that this code doesn't run, presumably because the error broke out of running it.
	$string = 'This is an example string.';
	$string_reversed = strrev($string);

	echo $string_reversed;
?>
