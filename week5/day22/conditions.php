<?php

//$weather = 'windy';
//$weather = 'sunny';
//$weather = 'raining';
$weather = 'meh';


if($weather == 'raining') {
echo 'let us take an umbrella';
} elseif ($weather == 'sunny'){
    echo 'let\'s put on some sunblock';
} elseif ($weather == "windy") {
    echo 'let us put on a coat';
} else {
    echo 'let us stay inside';
}

echo '<br>';

$language = 'php';

switch($language)
{
    case 'php':
    case 'ruby':
        echo 'serverside'; // code that will be run when it is php or ruby
        break;
    case 'Javascript':
        echo 'clientside'; // code that will be run when it is JS
        break;
    default:
        echo "I dont know"; //code that will be run when no other case matched
    break;
}

echo '<br>';

$os = 'windows';

switch($os)
{
    case 'windows': echo 'Edge'; break;
    case 'linux': echo 'Firefox'; break;
    case 'os x': echo 'Safari'; break;
    default: echo "Just use Chrome"; break;
}

$age = 84;
$gender = 'f';
$employed = true;

if($age < 25) {

}

if ($employed == true ) {

}

if ( $age > 34 && $employed != true  )
//if ( $age > 34 && !$employed  )
{

}

if ($age <= 18) //if the age is not greater than 18
{

}

if ($age < 12 && $gender == 'f') //if the age is not greater than 18
{

}

if ($age >= 18 && !$employed) //if age is greater or equal to 18 and is not employed
{

}

if ($age >= 60 && $employed == true && $gender == 'f') //if age is greater or equal to 60, is employed and is a female
{

}

if (($gender == 'm' && $age > 20 ) ||   (!$employed && $gender == 'f' && $age > 25 ) //if (someone) is a male above 20 or is an unemployed female above 25
{

}

//AND, $$
if (true && true && true) {
    //this will run
}

//OR, ||
if(false || false || true) //at least one part of expression must be true
{
    //this will run
}

