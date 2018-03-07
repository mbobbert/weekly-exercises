<?php

$weather = 'shit';

if ($weather == 'raining') {
    echo 'take an umbrella!';
} elseif ($weather == 'sunny') {
    echo 'put on sunscreen!';
} else {
    echo 'lets stay inside because the weather must be shit';
}

$language = 'swedish';

switch($language)
{
    case 'portuguese':
    case 'brazilian':
        echo 'bom dia';
        break;
    case 'french':
        echo 'bonjour';
        break;
    case 'dutch':
        echo 'hoi';
        break;
    default:
        echo "i have no idea what language you're speaking";
        break;
}