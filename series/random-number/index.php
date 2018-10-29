<?php
	$rand = rand();

	echo $rand;
	echo '<br>';
	echo '<br>';

	$max = getrandmax();
	echo $rand.' / '.$max;
	echo '<br>';
	echo '<br>';
?>
<hr>
<br>
<?php
	// 01. The if statement is taking checking to see if the element with the name 'roll' has posted data and if it has it runs the code block. Another words, when the button posts that it is set the condition is met and the code block runs.
	if (isset($_POST['roll'])) {
		// 02. The rand fuction is running code to produce a random number that is between the inclusive numbers of 1 and 6.
		$randRoll = rand(1, 6);
		echo 'You rolled a '.$randRoll;
	}
	echo '<br>';
	echo '<br>';

	// 03. The random number function can be used to generate random file names in a web application.

?>


<form action="index.php" method="POST">
	<input type="submit" name="roll" value="Roll a die.">
</form>