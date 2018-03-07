<?php
$inches = 12;

$cm = $inches * 2.54;

echo $cm . ' cm';

echo '<br>';

$celsius = 100;
$fahrenheit = (9/5) * $celsius + 32;

echo $fahrenheit . '&deg; F';

$temperature = 39;
$result =  $temperature > 37 ? 'ill' : 'healthy';
echo 'I am ' . ($result);
