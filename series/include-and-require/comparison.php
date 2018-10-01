<?php
	include 'header.inc.php';

	echo '<hr>';

	include 'header2.inc.php';

	echo '<br>';

	//Outputs var2 value as it is already loaded from first include of existing file header.inc.php
	echo 'Var 2 is '.$var2;
	echo '<br>';
	echo '<br>';

	echo '<hr>';

	require 'header2.inc.php';

	echo 'Var 1 is '.$var1;

	//Demonstrating that absolutely no code runs after fatal error
	echo '<hr>';
	echo '<br>';
	echo 'The header2.inc.php has been found.';
	echo '<br>';
	echo '<br>';

	echo '<hr>';
?>