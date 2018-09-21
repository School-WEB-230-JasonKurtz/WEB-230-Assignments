<?php
	$user_ip = $_SERVER['REMOTE_ADDR'];

	function echo_ip() {
		global $user_ip;
		$string = 'Your IP address is: '.$user_ip;
		echo $string;
	}

	//The reason the call echos ::1 is that ::1 is ipv6's way of truncating 127.0.0.1
	echo_ip();
?>
