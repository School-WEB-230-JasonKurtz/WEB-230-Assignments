<?php
	$food = array('Pasta', 'Pizza', 'Salad', 'Vegetables');

	print_r($food);
	echo '<br>';

	$food[4] = 'Fruit';

	print_r($food);
	echo '<br>';

	$food = array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>150, 'Vegetables'=>50);

	print_r($food);
	echo '<br>';

	echo $food['Pasta'];
	echo '<br>';

	echo $food['Pizza'];
	echo '<br>';

	//Determined that key/values can be assigned the same way that key/values can be assigned in a regular array
	$food['Grilled Chicken'] = 250;

	print_r($food);
	echo '<br>';

	//Determined that values can be reassigned in the same manner as regular arrays
	$food['Pizza'] = 850;

	print_r($food);
	echo '<br>';
?>