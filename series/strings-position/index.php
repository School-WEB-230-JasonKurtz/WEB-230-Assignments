<?php
	$offset = 0;
	$find = 'is';
	$find_lenght = strlen($find);
	$string = 'This is a string, and it is an example.';

	echo strpos($string, $find);
	echo '<br>';

	echo strpos($string, $find, 3);
	echo '<br>';

	echo strpos($string, $find, 10);
	echo '<br>';

	echo '<br>';

	while ($string_positon = strpos($string, $find, $offset)) {
		echo '<strong>'.$find.'</strong> found at '.$string_positon.'.<br>';
		$offset = $string_positon + $find_lenght;
	}

	echo '<br>';

	$offset = 0;
	$find = 'string';
	$find_lenght = strlen($find);

	while ($string_positon = strpos($string, $find, $offset)) {
		echo '<strong>'.$find.'</strong> found at '.$string_positon.'.<br>';
		$offset = $string_positon + $find_lenght;
	}

	echo '<br>';

	$offset = 0;
	$find = 'is';
	$find_lenght = strlen($find);

	while ($string_positon = strpos($string, $find, $offset)) {
		echo '<strong>'.'"'.strtolower($find).'"'.'</strong> found at '.$string_positon.'.<br>';
		$offset = $string_positon + $find_lenght;
	}

	echo '<br>';
?>

<!--
The following code allows the user to input a phrase and a phrase to search for in that phrase. It uses the concept of string position to locate the searched for phrase.
-->

<h2>Search-A-Phrase</h2>

<?php
	$offset = 0;
	$find = $_POST['tofind'];
	$find_lenght = strlen($find);
	$string = $_POST['stringToSearch'];

	if ($find || $string != 0) {

		echo 'Searched in '.'"'.$string.'"'.'<br>';
		echo 'Searched for '.'"'.$find.'"'.'<br>';

		echo '<br>';

		echo 'Found at positon(s):<br>';


		while ($string_positon = strpos(strtolower(' '.$string), strtolower($find), $offset)) {
			$string_positon -= 1;
			echo $string_positon.'<br>';
			$offset = $string_positon + $find_lenght;
		}

		echo '<br>';
	}
?>

<form action="index.php" method="POST">
	Enter Phrase: <input type="text" name="stringToSearch"><br><br>
	Find in Phrase: <input type="text" name="tofind"><br><br>
	<input type="submit" value="Submit">
</form>