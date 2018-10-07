<?php
	$string = 'Jason';

	//Echo out, for the purpose of comparison, the string used to calculate the string legnth in the following code block
	echo 'How many characters does this have?<br>';

	//Length of string passed into function
	$string_legnth = strlen('How many characters does this have?');
	echo $string_legnth.'<br>';

	//Echo out, for the purpose of comparison, the string used to calculate the string legnth in the following code block
	echo '<br>'.'a';

	//length of string 'a'
	$string_legnth = strlen('a');
	echo '<br>'.$string_legnth.'<br>';

	//Echo out, for the purpose of comparison, the string used to calculate the string legnth in the following code block
	echo '<br>'.$string;

	//Length of $string variable of 'Jason'
	$string_legnth = strlen($string);
	echo '<br>'.$string_legnth.'<br>';

	//Echo out, for the purpose of comparison, the string used to calculate the string legnth in the following code block
	echo '<br>'.$string.'<br>';

	//Looping through string to count each character
	for ($x=1; $x<=$string_legnth; $x++) {
		echo $x.'<br>';
	}
?>