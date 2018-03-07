<!--1. prepare the data-->

<?php
$my_greeting = "Hello, world";

echo $my_greeting;

$year_of_birth = 1988;
$height = 186;
define('SERVER_SOFTWARE', 'Apache');
define('OS', 'Macintosh');
$number = 42;
$even_or_odd = $number % 2 == 0 ? 'even' : 'odd';
$even_or_odd = ($number % 2 ? 'odd' : 'even');

echo '<br>';

echo 'The number ' . $number . 'is' . $even_or_odd;

echo '<br>';

$weekday = "Tuesday";
echo 'Today is '. $weekday;

echo '<br>';
$year_of_birth = 1988;
$age = 29;
echo 'I was born in '. $year_of_birth .'so this year I am celebrating my'.  $age
.'birthday';
?>

echo '<br>';
<!-- 2. render the data-->

<br>
Year of birth: <?php echo $year_of_birth ; ?><br>
Height: <?php echo $height ; ?><br>
My server software is <?php echo SERVER_SOFTWARE; ?><br>
My OS is <?php echo OS; ?>



