<?php
    do {
        echo 'This will always show.<br>';
    } while (0);

    $counter = 1;

    do {
        echo 'This will always show once.<br>';
        $counter++;
    } while ($counter<=10);
?>
