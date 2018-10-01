<?php
	$food = array('Healthy'=>
					array('Salad', 'Vegetables', 'Pasta'),
				'Unhealthy'=>
					array('Pizza', 'Ice cream', 'Popcorn')
				);

	//Begining of code block 1
	//Echos a chosen position in the multi-dimensional array
	echo $food['Healthy'][0];
	echo '<br>';
	//End of code block 1

	echo '<br>';

	//Begining of code block 2
	//Echos outer array
	foreach($food as $element => $inner_array) {
		echo $element.'<br>';
	}
	//End of code block 2

	echo '<br>';

	//Begining of code block 3
	//Echos inner array as an "Array" along with echoing outter array
	foreach($food as $element => $inner_array) {
		echo $element.'<br>';
		echo $inner_array.'<br>';
	}
	//End of code block 3

	echo '<br>';

	//Begining of code block 4
	//Prints inner array along with echoing outter array
	foreach($food as $element => $inner_array) {
		echo $element.'<br>';
		print_r($inner_array);
		echo '<br>';
	}
	//End of code block 4

	echo '<br>';

	//Begining of code block 5
	//Echos each element in both outer and inner arrays
	foreach($food as $element => $inner_array) {
		echo '<strong>'.$element.'</strong><br>';
		foreach($inner_array as $item) {
			echo $item.'<br>';
		}
	}
	//End of code block 5

	//Begining of code block 6
	//Structures inner and outer arrays into list format
	echo '<ul>';
	foreach($food as $element => $inner_array) {
		echo '<li><strong>'.$element.'</strong></li>';
		echo '<ol>';
		foreach($inner_array as $item) {
			echo '<li>'.$item.'</li>';
		}
		echo '</ol>';
	}
	echo '</ul>';
	//End of code block 6
?>