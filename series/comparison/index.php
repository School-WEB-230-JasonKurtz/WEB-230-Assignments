<?php
    $password = 'password';

    if ($password=='something') {
        echo '<p>Correct!</p>';
    } else {
        echo '<p>Incorrect!</p>';
    }

    if ($password=='password') {
        echo '<p>Correct!</p>';
    } else {
        echo '<p>Incorrect!</p>';
    }

    if (true) {
        echo '<p>True.</p>';
    } else {
        echo '<p>False.</p>';
    }

    if (false) {
        echo '<p>True.</p>';
    } else {
        echo '<p>False.</p>';
    }

    if (1==1) {
        echo '<p>True. 1==1</p>';
    } else {
        echo '<p>False. 1==1</p>';
    }

    if (1==2) {
        echo '<p>True. 1==2</p>';
    } else {
        echo '<p>False. 1==2</p>';
    }

    if (1!=2) {
        echo '<p>True. 1!=2</p>';
    } else {
        echo '<p>False. 1!=2</p>';
    }

    if (1!=1) {
        echo '<p>True. 1!=1</p>';
    } else {
        echo '<p>False. 1!=1</p>';
    }

    if (1<>1) {
        echo '<p>True. 1<>1</p>';
    } else {
        echo '<p>False. 1<>1</p>';
    }


    $number1 = 10;
    $number2 = 9;

    if ($number1>$number2) {
        echo "<p>True. $number1>$number2</p>";
    } else {
        echo "<p>False. $number1>$number2</p>";
    }

    if ($number1<$number2) {
        echo "<p>True. $number1<$number2</p>";
    } else {
        echo "<p>False. $number1<$number2</p>";
    }

    $number2 = 10;

    if ($number1=$number2) {
        echo "<p>True. $number1=$number2</p>";
    } else {
        echo "<p>False. $number1=$number2</p>";
    }

    if ($number1>=$number2) {
        echo "<p>True. $number1>=$number2</p>";
    } else {
        echo "<p>False. $number1>=$number2</p>";
    }

    if ($number1<=$number2) {
        echo "<p>True. $number1<=$number2</p>";
    } else {
        echo "<p>False. $number1<=$number2</p>";
    }

    $number1 = 2;

    if ($number1<=$number2) {
        echo "<p>True. $number1<=$number2</p>";
    } else {
        echo "<p>False. $number1<=$number2</p>";
    }

?>
