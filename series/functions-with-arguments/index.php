<?php
	$inumber1 = 10;
	$inumber2 = 5;

	function 	add($number1, $number2) {
		echo $number1 + $number2;
		echo '<br>';
	}

	add($inumber1, $inumber2);

	$inumber1 = 22;
	$inumber2 = 8;

	function 	add2($number1, $number2) {
		echo $number1 + $number2;
		echo '<br>';
	}

	add2($inumber1, $inumber2);

	function displayDate($day, $date, $year) {
		echo $day.' '.$date.' '.$year;
	}

	displayDate ('Monday', 31, 2011);
 ?>
