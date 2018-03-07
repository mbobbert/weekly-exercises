<?php

$first_name = 'Bruce';
$surname = 'Wayne';
$year = 1939;

echo $first_name . $surname . ' was first introduced in ' . $year;

//function element($element, $innerhtml, $class = '', $id = '') {
    //return "<{$element} {$class}>{$innerhtml}</{$element}>";
//}
//
//echo(element('h1', 'This is an h1'));
//
//echo '<hr>';
//
//function headline($headline, $level = 1) {
    //return "<h$level> $headline </h$level >\n";
//}
//
//echo headline('This is the headline', 3);

echo '<hr>';

function element($element, $innerhtml, $class = " ", $id = " ") {
    return "<$element class=$class id=$id>$innerhtml</$element>";
}

echo element('h1', 'element exercise trial 1');
echo '<br>';

echo element('h2', 'element exercise trial 2', 'thisisclass', 'thisisid');