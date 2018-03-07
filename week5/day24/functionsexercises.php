<?php
function return_val($val) {
    return $val;
}

return_val(123);

echo return_val(123);

echo '<hr>';

function increased_val($number) {
    if ($number > 0) {
    return $number;
    } else {
        echo 'value too low';
    }
}

increased_val(-1);

echo '<hr>';

function print_val($value) {
    echo $value;
}

print_val(123);

echo print_val(123);

echo '<hr>';

function add_two_values($number1, $number2) {
    return $number1 + $number2;
}

echo add_two_values(5,2);

echo '<hr>';


$number = 11;

function increase_val() {
    global $number;
    $number++;
}

increase_val();
increase_val();

echo $number;

echo '<hr>';

function combine_two_strings($string1, $string2) {
   return $string1 . ' ' . $string2;
}

echo combine_two_strings('hello', 'there');

echo '<hr>';

function combine_strings($string1, $string2, $string3= ' ' , $string4= ' ') {
    return $string1 . ' ' . $string2 . ' ' . $string3 . ' ' . $string4;
 }


echo combine_strings('my name is', 'Joe', 'Black');

echo '<hr>';

function create_h1($string) {
    echo "<h1>{$string}</h1>";
}
echo create_h1('This is an h1');

echo '<hr>';

function create_message($content, $id) {
    echo "<div class='message' id='{$id}'>{$content}</div>";
}

echo create_message('this is the content', 'thisistheid');

echo '<hr>';

function bigger_value($value1, $value2) {
    return max($value1, $value2);
}

echo bigger_value(12,11);

echo '<hr>';

$location = ['town', 'road', 'highway'];

function check_speed($speed, $location = 'road') {
    if ($location =='road' && $speed > 100) {
        echo ('you were too fast');
    } elseif ($location =='town' && $speed > 50) {
        echo ('you were too fast');
    } elseif ($location =='highway' && $speed > 120) {
        echo ('you were too fast');
    } else {
        echo ('your speed was ok');
    }
}

echo check_speed(40, 'road');

echo '<hr>';

$length = null;

function longer_string($string1, $string2, &$length) {
    echo max(strlen($string1),strlen($string2));
}

echo longer_string('hello', 'goodbye', $length);