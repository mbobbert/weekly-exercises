<?php

$number_of_errors = 0;

function log_error() {
    global $number_of_errors;
    $number_of_errors++;
}

log_error();
log_error();

echo $number_of_errors;

echo '<hr>';

$messages = [];

function add_message($message = " ") {
    global $messages;
    $messages[] = $message;
}

add_message('foo');

var_dump($messages);


echo '<hr>';

$array=[];

$item= 'abc';

$count = 0;

function add_item($array, $item, $count) {
    global $array;
    global $item;
    global $count;
    $count++;
    $array[]= $item;
}

add_item($array, $item, $count);
var_dump($item);
echo '<br>';
var_dump($array);
echo '<br>';
var_dump($count);

echo '<hr>';

add_item($array, 'def', $count);
var_dump($item);
echo '<br>';
var_dump($array);
echo '<br>';
var_dump($count);

echo '<hr>';

function headline($text, $level = 1) {
    return "<h{$level}>{$text}</h{$level}>";
}

echo headline('hello', 2);

echo '<br>';


echo headline('hello you', 4);

echo '<hr>';


echo '<h2>the element exercise</h2>';


//function element($element, $innerhtml, $class = '', $id = '') {
 //   return "<{$element}{$class}{$id}>{$innerhtml}</{$element}>";
//}



function element($element, $innerhtml, $class = '', $id = '') {
    return "<{$element} class={$class} id={$id}>{$innerhtml}</{$element}>";
}

echo element('h1', 'element exercise trial 1');
echo '<br>';

echo element('h2', 'element exercise trial 2', 'thisisclass', 'thisisid');

echo '<hr>';


echo '<h2>the convert weight exercise</h2>';




