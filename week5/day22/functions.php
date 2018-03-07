<?php

//declaration/definition
function greet($whom) {
    echo 'Hello, ' . $whom . '!';
}

//calling of the function greet
greet('Honza');

function print_copyright() {
    echo '&copy; 2017';
}

print_copyright();


function headline($text)
{
return '<h1>' .$text. '</h1>';
}


echo headline('The Bootcamp');
