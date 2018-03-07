<?php
echo "hello world";

echo "<hr>";

$number = 42;

if ($number % 2 == 0) {
    echo "The number $number is even ";
}

echo "<hr>";

$day = 'Tuesday';

echo "Today is . $day ";

echo "<hr>";

$yob = 1988;
$age = 29;

echo 'I was born in ' . $yob . ' so this year I am turning' . $age . 'years old. ';

define ('SERVER_SOFTWARE' , 'Apache');

echo '<hr>';
?>


My server software is: <?php echo SERVER_SOFTWARE ?>;





