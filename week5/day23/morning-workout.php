<?php
$movie_name = 'Arrival';
$ratings = [
    'user642' => 69,        //values are identified by keys
   'user013' => 82,        //KEYS ARE ALWAYS ON THE LEFT SIDE
    'user214' => 95
];

//$ratings = array_combine($assoc_keys, $num_ratings);
current($ratings);
$num_ratings = [
    69,
    95,
    82
];

$assoc_keys = [
    'user642',
    'user214',
    'user013'
];

$pos = 0;
foreach ($ratings as $user_id => $rating) { //$rating holds current value, can be anything. foreaching through $ratings array
    $pos++;
    echo $user_id . ' ' . $rating . '<br>';
}

function print_rating($rating) {
    echo $rating . '%';
}

$user_names = [
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
];

$user_name = $user_names['user214'];

function get_username($user_id) {
    global $user_names; // important $user_names from global scope because in PHP everything is local
    return $user_names[$user_id];
}

foreach ($ratings as $user_id => $rating) { //$rating holds current value, can be anything. foreaching through $ratings array
    $pos++;
    echo get_username($user_id) . 'gave the movie a ';
    print_rating($rating);
    echo ' rating.<br>';
}

// when you declare a function in which you want to use an array that's outsie, you have to import it with 'global'
// if you write a foreach loop, you can use functions that are outside without importing them, becaus a foreach loop is not a funciton, it doesnt have its own scope, it is just changing he flow of the code, but it is still within the same scope. Scope is limited only to functions.

foreach ($ratings as $user_id => $rating) { //$rating holds current value, can be anything. foreaching through $ratings array
    $pos++;
    $name = echo get_username($user_id);
    var_dump($name); die();
    print_rating($rating);
    echo ' rating.<br>';
}






