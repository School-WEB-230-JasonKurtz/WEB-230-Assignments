<?php
	session_start();

	echo 'Welcome, '.$_SESSION['username'].'. Your are '.$_SESSION['age'].'!';
?>