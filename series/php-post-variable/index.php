<?php
	// 01 Variable used to establish the password being checked for.
	$match = 'pass123';

	// 02 If statements check to see if information has been posted and if it has it check compares it to the password defined in the $match variable. It then displays the appropriate message, depending on whether it is correct or not or if it is empty.
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
		if (!empty($password)) {
			if ($password==$match) {
				echo 'That is correct!';
			} else {
				echo 'That is incorrect!';
			}
		} else {
			echo 'Please enter a password.';
		}
	}
?>

<form action="index.php" method="POST">
	Password:<br>
	<input type="password" name="password"><br><br>
	<input type="submit" value="submit">
</form>