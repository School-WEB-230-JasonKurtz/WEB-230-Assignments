<?php

	$pageName = 'Events';

	require_once 'include/functions.inc.php';

	require_once 'include/header.inc.php';

	require_once 'include/events.data.php';

	//echo '<br>';
	echo eventBuilder($events);

	require_once 'include/footer.inc.php';
?>