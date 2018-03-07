<?php

require_once 'giraffe.php';

$martha = new giraffe("Martha");
$berta = new giraffe("Berta");

$martha->feed();
var_dump($martha);
echo '<hr>';
$berta->feed();
$berta->drink();
var_dump($berta);

echo '<hr>';
echo 'There are ' .giraffe::$nr_of_giraffes . ' giraffes in Africa.';

echo '<hr>';

echo $martha->name . ' is ' . ($martha->is_happy()? '' : ' not ')  . 'happy.';
echo '<hr>';

echo $berta->name . ' is ' . ($berta->is_happy()? '' : ' not ')  . 'happy.';