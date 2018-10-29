<?php
	// 01. This function returns an integer that represents the number of seconds that has elapse from January 1st 1970 @ 00:00:00
	$time = time();
	echo $time;
	echo '<br>';
	echo '<br>';


	// 02. Date function processes the timestamp to output in the specified format
	$actual_time = date('D M Y @ H:i:s', $time);
	// An application of this could be to organize posts
	echo 'The current date/time is '.$actual_time;
	echo '<br>';
	echo '<br>';

	// 03. Date function processes the timestamp to output in just the date without the time in the specified format
	$actual_date = date('d/m/y', $time);
	echo 'The current date is '.$actual_date;
	echo '<br>';
	echo '<br>';

	// 04. Timestamp subtracted to fit EST timezone and then formated to be conducive of numeraical sorting
	$real_time = $time-64800;
	$actual_time = date('Y-m-d h:i:s', $real_time);
	// 05. An application for this could be to organize post on a blog based on a specific time zone
	echo 'This is the format can be used to organize dates chronologically: '.$actual_time;
	echo '<br>';
	echo '<br>';

	// 04. Used the strtostring function to subtract 18 hours from timestamp to fit PDT timezone and then formated to be conducive of numerical sorting
	$real_time = strtotime('- 21 hours');
	$actual_time = date('Y-m-d h:i:s', $real_time);
	// 05. An application for this could be to more easily organize post on a blog based on a specific time zone
	echo 'This is the format can be used to organize dates chronologically in California: '.$actual_time;
	echo '<br>';
	echo '<br>';

	// 05. Specified format for output of user friendly date
	$actual_time = date('M dS, Y', $time);
	echo 'The current date is '.$actual_time.'.';
	echo '<br>';
	echo '<br>';
?>