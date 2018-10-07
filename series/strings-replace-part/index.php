<?php
	$string = 'This part don\'t search. This part search.';
	$string_new = substr_replace($string, 'Jason', 29, 4);

	echo $string_new;

	echo '<br><br>';

	$string = 'jason';

	echo substr($string, 2);
?>