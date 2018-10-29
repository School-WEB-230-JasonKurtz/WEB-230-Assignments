<?php
	$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
	$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote_addr = $_SERVER['REMOTE_ADDR'];

	if (!empty($http_client_ip)) {
		$ip_address = $http_client_ip;
	} else if (!empty($http_x_forwarded_for)) {
		$ip_address = $http_x_forwarded_for;
	} else {
		// I find it interesting that on my home network with both my labtop and cell phone this is the only value that is outputed when the file is on the live server, as proven by commenting this line of code out result in desplaying nothing. It gives me the ip address of my router.
		$ip_address = $remote_addr;
	}

	echo $ip_address;
?>