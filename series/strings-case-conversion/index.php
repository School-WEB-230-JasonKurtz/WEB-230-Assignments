<?php
	$string = 'I could be any case.';

	$string_lower = strtolower($string);
	echo $string_lower.'<br><br>';


	$string = 'I Could Be Any Case.';

	$string_lower = strtolower($string);
	echo $string_lower.'<br><br>';

	$string_upper = strtoupper($string);
	echo $string_upper.'<br><br>';

	if (isset($_GET['user_name'])&&!empty($_GET['user_name'])) {
		$user_name = $_GET['user_name'];
		$user_name_lc = strtolower ($user_name);
		if ($user_name_lc == 'jason') {
			echo 'You are the best, '.$user_name.'.';
		}
	}

?>

<form action="index.php" method="GET">
	Name: <input type="text" name="user_name"><br><br>
	<input type="submit" value="Submit">
</form>

<br>


<!--
The following code will check for Jason Kurtz POST instead of Jason GET
-->

<?php
	$name = 'Jason kurtz';
	$name_uc = ucwords(strtolower($name));
?>

<h2>Check if your name is <?php echo $name_uc?>.</h2>


<?php

	if (isset($_POST['user_name_post'])&&!empty($_POST['user_name_post'])) {
		$user_name_post = $_POST['user_name_post'];
		$user_name_uc_post = ucwords(strtolower($user_name_post));
		if ($user_name_uc_post == $name_uc) {
			echo 'You name is indeed '.$user_name_uc_post.'.';
		} else {
			echo 'Sorry '.$user_name_uc_post.', your name is not '.$name_uc.'.';
		}
		echo '<br>';
		echo '<br>';
	}

?>

<form action="index.php" method="POST">
	Enter Your Name: <input type="text" name="user_name_post"><br><br>
	<input type="submit" value="Submit">
</form>
