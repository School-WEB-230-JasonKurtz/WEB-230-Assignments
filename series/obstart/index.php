<?php
	// 01. ob_start is used to begin buffering data into memory so that it is all sent at one time verses in chuncks.
	ob_start();
?>

<h1>My Page</h1>
<p>This is my page.</P>

<?php
	// Varibles set: one for whether the page should redirect or not and another to set location to redirect to.
	$redirect_page = 'https://google.com';
	$redirect = true;

	// 02. Determines whether the user is to be redirected or not and if so redirects to the predefined set page otherwise continues to load the rest of the file.
	if ($redirect==true) {
		header('Location: '.$redirect_page);
	}

	// 03. ob_end_flush sends the data in the buffer and turns off buffering.
	ob_end_flush();
?>

