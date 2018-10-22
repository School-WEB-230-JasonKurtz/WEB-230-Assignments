<?php
	function menuBuilder($obj) {
		echo ('<nav><ul>');
		foreach ($obj as $key => $value) {
			echo ('<li><a href="'.$value['MenuLink'].'">'.$value['MenuName'].'</a></li>');
		}
	echo ('</nav></ul>');
	}


	function eventBuilder($event) {
		echo ('<ul class="events">');
		foreach ($event as $eventKey => $eventValue) {
			echo ('<h2>'.$eventValue['EventName'].'</h2>');
			echo ('<p>'.$eventValue['EventDate'].'<br>');
			echo ($eventValue['EventDescription'].'</p>');
			echo '<br>';
		}
	echo ('</ul>');
	}
?>