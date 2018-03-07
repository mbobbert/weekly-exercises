<?php
$number_of_errors = 0;

function log_error() {
   global $number_of_errors;
   $number_of_errors ++;
}

log_error();
log_error();

echo $number_of_errors;

echo '<hr>';

// http://php.net/manual/en/function.array-push.php

//Declare a variable $messages in the global scope and initialize it's value to an empty array ([])
$messages = [];


//Write a function add_message that would accept one argument - the text of a new message and add that message as the next item to the array $messages
function add_message($message = "empty message") {
    global $messages;
    $messages[] = $message;
}

add_message('foo');
var_dump($messages); // [0 => 'foo']
add_message();

echo '<hr>';

function divmod($dividend, $divisor, & $modulus) { //you want to make modulus available outside the function, so you make a reference
    if ($divisor == 0) {
        echo ('not possible to divide by zero!');
        return; // will end the function

        // die('not possible to divide by 0); // die stops the whole script
    }
   $modulus = $dividend % $divisor;
   return $dividend / $divisor;
}

//$result = divmod(3,2, $modulus);
echo divmod(3,2, $modulus);
//echo $result; // 1.5
echo $modulus; // 1



