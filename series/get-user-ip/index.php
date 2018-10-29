<!-- code before script is killed will execute -->
<h1>Test</h1>

<?php
	require 'conf.inc.php';

	// I left this echo in to test on live host verses local host.
	echo $ip_address;
	echo '<br>';
	echo '<br>';

	// 01. Loops through each ip address in the list of ip addresses to block and compares it to the the user's approximant ip address and kills the script and the rest of the page only if their ip address matches an ip address in the blocked list. It the desplays a message letting the user know that their ip address was blocked.
	foreach ($ip_blocked as $ip) {
		//echo $ip.'<br>';
		if ($ip==$ip_address) {
			die('Your IP address, '.$ip_address.' has been blocked.');
		}
	}

?>

<h1>Welcome!</h1>