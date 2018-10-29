<?php
	// Interesting to note that REMOTE_ADDR when run on my live host returns the ip address of my router on Verizon's network not that of the individual devices on my network. Interesting.
	$ip_address = $_SERVER['REMOTE_ADDR'];

	$ip_blocked = array('127.0.0.1', '100.100.100.100', '::1')
?>