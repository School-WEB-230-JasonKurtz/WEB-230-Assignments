<?php
	$food = array('Pasta', 'Pizza', 'Salad');

	echo $food[1];
	echo '<br>';

	echo $food[0];
	echo '<br>';

	echo $food[2];
	echo '<br>';

	echo '<br>';

	print_r($food);
	echo '<br>';

	echo $food;
	echo '<br>';
	echo '<br>';

	//Redifined array to include vegetables
	$food = array('Pasta', 'Pizza', 'Salad', 'Vegetables');

	print_r($food);
	echo '<br>';

	//Added fruit to array
	$food[4] = 'Fruit';

	print_r($food);
?>