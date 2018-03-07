<?php

//require functions to visualize arrays
require_once 'var_show.php';

$fruit = [
    'Apple', // automatically assigned index 0
    'Pear',  // automatically assigned index 1
    'Orange' // automatically assigned index 2
];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

var_show($fruit);
var_show($fruit_colors);

$cars_i_want = [
    'Lambo',
    'Volvo',
    'BMW',
    'Mercedes',
    'Renault'
];

var_show($cars_i_want);

//$cars_i_want[] = 'Lambo';
//$cars_i_want[] = 'Volvo';
//$cars_i_want[] = 'BMW';
//$cars_i_want[] = 'Mercedes';
//$cars_i_want[] = 'Renault';

echo 'For myself I would buy ' . $cars_i_want[1] . '.<br>';

echo 'For my spouse I would buy ' . $cars_i_want[3] . '.<br>';

$cars_i_want[4] = 'Smart';

var_show($cars_i_want);

echo 'Each of my kids will get ' . $cars_i_want[4] . '.<br>';

echo '<ul>';

foreach($cars_i_want as $car_name)
{
    echo '<li>' . $car_name . '</li>';
} //$car_name is new variable that was created in loop

echo '</ul>';

shuffle($cars_i_want);
var_show($cars_i_want);