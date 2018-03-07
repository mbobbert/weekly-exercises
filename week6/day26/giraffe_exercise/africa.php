<?php

require_once 'giraffe.php';

$martha = new giraffe("Martha");



$martha->feed();
var_dump($martha);

$berta = new giraffe("Berta");
$berta->drink();
$berta->feed();

echo '<hr>';

var_dump($berta);

echo '<hr>';

echo 'There are ' . giraffe::$nr_of_giraffes. ' giraffes in Africa.';

echo '<hr>';

echo $martha->name . ' is' . ($martha->is_happy() ? '' : ' not ') . 'happy';

echo '<hr>';

echo $berta->name . ' is' . ($berta->is_happy() ? '' : ' not ') . ' happy';
