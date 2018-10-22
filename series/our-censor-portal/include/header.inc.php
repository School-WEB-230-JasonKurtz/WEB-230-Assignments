<?php
	require_once 'include/config.inc.php';
	require_once 'include/menu.data.php';
	require_once 'include/functions.inc.php';

echo '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<link rel="stylesheet" type="text/css" href="assets/css/style.css">
			<title>'.$companyName.' - '.$pageName.'</title>
		</head>
<body>
	<header>
	<h1>'.$companyName.' | '.$pageName.'</h1>';


	echo menuBuilder($menuItems);

	echo '</header>';
?>

