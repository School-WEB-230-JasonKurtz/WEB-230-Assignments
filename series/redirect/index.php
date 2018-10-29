<?php
	// Varibles set: one for whether the page should redirect or not and another to set location to redirect to.
	$redirect_page = 'https://google.com';
	$redirect = true;

	// 01. Determines whether the user is to be redirected or not and if so redirects to the predefined set page otherwise continues to load the rest of the file.
	if ($redirect==true) {
		header('Location: '.$redirect_page);
	}
?>