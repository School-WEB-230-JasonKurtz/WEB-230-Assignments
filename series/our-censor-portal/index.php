<?php
	require_once 'include/config.inc.php';
	require_once 'include/header.inc.php';

	$find = $oldName;
	$replace = $newName;
	$user_input = '';
	$user_input_new = '';

	if (!empty($_POST['user_input'])) {
			$user_input = $_POST['user_input'];
			$user_input_new = str_ireplace($find, $replace, $user_input);
		}

	echo '<section>
			<br>
			<br>
			<form action="index.php" method="POST">
				<textarea name="user_input" type="text">'.$user_input_new.'</textarea><br><br>
				<input class="button" type="submit" value="Find and Replace">
			</form>
			<br>
			<br>
		</section>';

	require_once 'include/footer.inc.php';
?>