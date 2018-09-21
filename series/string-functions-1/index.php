<?php
	$string = 'This is an example string.';
	$string_word_count = str_word_count($string);

	echo $string_word_count.'<br>';

	$string = 'This is an example string.';
	$string_word_count = str_word_count($string, 0);

	echo $string_word_count.'<br>';

	$string = 'This is an example string.';
	$string_word_count = str_word_count($string, 1);

	print_r($string_word_count);
	echo '<br>';

	$string = 'This is an example string.';
	$string_word_count = str_word_count($string, 2);

	print_r($string_word_count);
	echo '<br>';

	$string = 'This is an example string.';
	$string_word_count = str_word_count($string, 1, '.');

	print_r($string_word_count);
	echo '<br>';

	$string = 'This is an example string .';
	$string_word_count = str_word_count($string, 1, '.');

	print_r($string_word_count);
	echo '<br>';

	$string = 'This is an example string .';
	$string_word_count = str_word_count($string, 1);

	print_r($string_word_count);
	echo '<br>';
?>
