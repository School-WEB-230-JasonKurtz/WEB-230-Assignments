<?php
	//First include once
	echo 'Include_Once';
	include_once 'header.inc.php';

	echo '<hr>';

	//Includes because it doesn't check to see if it was already included
	echo 'Include';
	include 'header.inc.php';

	echo '<hr>';

	//Does not include because it checks if it was already included
	echo 'Include_Once';
	include_once 'header.inc.php';

	echo '<hr>';

	//First Reqire
	echo 'Require';
	require 'header.inc.php';

	echo '<hr>';

	//Does not require because it was already required
	echo 'Require_Once';
	require_once 'header.inc.php';

	echo '<hr>';

	//Requires because it doesn't check to see if it was already required
	echo 'Require';
	require 'header.inc.php';

	echo 'Var 2 is '.$var2;
?>