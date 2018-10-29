<?php
	// 01. This outputs the path on the server where the file is located.
	$scrip_name = $_SERVER['SCRIPT_NAME'];

	// 02. PHP is storing the host name in $host and then concatenates the exact folder path to produce the full and accurate path even when the file is transfered to a different server.
	echo $images;

	// Testing to see exactly what $_ERVER['SCRIPT_NAME'] is outputting
	// echo '<hr>';
	// echo $scrip_name;
?>

<!-- 03. The file and the path where the form posts to are dynamically change using the $scrip_name variable. -->
<form action="<?php echo $scrip_name ?>" method="POST">
	<input type="submit" name="submit" value="Submit">
</form>