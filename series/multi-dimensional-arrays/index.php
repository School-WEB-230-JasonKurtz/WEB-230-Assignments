<?php

	/*
		+Healthy
			Salad
			Vegetables
			Pasta

		+Unhealthy
			Pizza
			Ice cream
	*/

	$food = array('Healthy'=>
					array('Salad', 'Vegetables', 'Pasta'),
				'Unhealthy'=>
					array('Pizza', 'Ice cream')
				);

	echo $food['Healthy'][0];
	echo '<br>';

	echo $food['Healthy'][2];
	echo '<br>';

	echo $food['Unhealthy'][1];
	echo '<br>';
?>