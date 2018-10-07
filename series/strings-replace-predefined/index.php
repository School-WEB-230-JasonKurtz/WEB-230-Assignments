<?php
	$string = 'This is a string, and is an example.';

	$new_string = str_replace('is', '', $string);
	$new_string = str_replace('string', '', $string);
	$new_string = str_replace('is', '', $new_string);

	echo $new_string.'<br><br>';

	$find = array('is', 'string', 'example');
	$string = 'This is a string, and is an example.';

	$new_string = str_replace($find, '', $string);

	echo $new_string.'<br><br>';

	$find = array('is', 'string', 'example');
	$replace = array('IS', 'STRING', 'EXAMPLE');
	$string = 'This is a string, and is an example.';

	$new_string = str_replace($find, $replace, $string);
?>

<!--
	The following is a continuation of the app that I have been developing along with these projects, but with the new find and replace concept added in. It is very rough. Could use check for empty values, and so forth.
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

	//This code block establishes the varibles from form post.
	$replaceWith1 = $_POST['replaceWith1'];
	$replaceWith2 = $_POST['replaceWith2'];
	$replaceWith3 = $_POST['replaceWith3'];
	$findToReplace1 = $_POST['findToReplace1'];
	$findToReplace2 = $_POST['findToReplace2'];
	$findToReplace3 = $_POST['findToReplace3'];


	$find = array($findToReplace1, $findToReplace2, $findToReplace3);
	$replace = array($replaceWith1, $replaceWith2, $replaceWith3);

	$new_string_fr = str_replace($find, $replace, $string);

	}

?>

<br>

<form action="index.php" method="POST">
	Enter Phrase: <input type="text" name="stringToSearch"><br><br>
	Find in Phrase: <input type="text" name="tofind"><br><br>



<h2>Find and Replace</h2>

<?php echo $new_string_fr.'<br><br>'; ?>


<h3>List of Changes: </h3>

<?php
	echo 'Find and Replace 1: '.'"'.$findToReplace1.'"'.' with '.'"'.$replaceWith1.'"';
	echo '<br><br>';
	echo 'Find and Replace 2: '.'"'.$findToReplace2.'"'.' with '.'"'.$replaceWith2.'"';
	echo '<br><br>';
	echo 'Find and Replace 3: '.'"'.$findToReplace3.'"'.' with '.'"'.$replaceWith3.'"';
	echo '<br><br><br>';
?>


	Find word to replace: <input type="text" name="findToReplace1"><br><br>
	Replace word with: <input type="text" name="replaceWith1"><br><br>
	<br>
	Find word to replace: <input type="text" name="findToReplace2"><br><br>
	Replace word with: <input type="text" name="replaceWith2"><br><br>
	<br>
	Find word to replace: <input type="text" name="findToReplace3"><br><br>
	Replace word with: <input type="text" name="replaceWith3"><br><br>
	<input type="submit" value="Submit">
</form>