<?php
	require 'conf.inc.php';
	include 'header.inc.php';

	echo '<img src="'.$images.'" >';
	if (isset($_POST['submit'])) {
		echo 'Process 1';
	}
?>