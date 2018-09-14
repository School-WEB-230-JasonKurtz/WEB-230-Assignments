<?php
    $number = 10;
    $canbe1 = 2;
    $canbe2 = 4;

    if (!($number==$canbe1) && !($number==$canbe2)) {
        echo "<p>Okay.</p>";
    } else {
        echo "<p>Not okay.</p>";
    }

    //The following code was created base on the video.

    echo '**The following code was created base on the video.**';

    $number1 = 10;

    if ($number1>=10) {
        echo "<p>True.</p>";
    }

    $number = 654;

    $upper = 1000;
    $lower = 500;

    if ($number>=$lower && $number<=$upper) {
        echo "<p>Ok.</p>";
    }

    $number = 999.99;

    if ($number>=$lower && $number<=$upper) {
        echo "<p>Ok.</p>";
    }

    $number = 10500;

    if ($number>=$lower && $number<=$upper) {
        echo "<p>Ok.</p>";
    } else {
        echo '<p>'.'Number must be between '.$lower.' and '.$upper.', inclusive.</p>';
    }

    $number = 750;

    if ($number>=$lower && $number<=$upper) {
        echo "<p>Ok.</p>";
    } else {
        echo '<p>'.'Number must be between '.$lower.' and '.$upper.', inclusive.</p>';
    }

    $number = 500;
    $canbe1 = 2;
    $canbe2 = 4;

    if ($number==$canbe1 || $number==$canbe2) {
        echo "<p>Okay.</p>";
    } else {
        echo "<p>Not okay.</p>";
    }

    $number = 2;

    if ($number==$canbe1 || $number==$canbe2) {
        echo "<p>Okay.</p>";
    } else {
        echo "<p>Not okay.</p>";
    }

    $number = 3;

    if ($number==$canbe1 || $number==$canbe2) {
        echo "<p>Okay.</p>";
    } else {
        echo "<p>Not okay.</p>";
    }

    $number = 2;

    if (!($number==$canbe1) || !($number==$canbe2)) {
        echo "<p>Okay.</p>";
    } else {
        echo "<p>Not okay.</p>";
    }

    $number = 2;

    if (!($number==$canbe1) && !($number==$canbe2)) {
        echo "<p>Okay.</p>";
    } else {
        echo "<p>Not okay.</p>";
    }
?>
