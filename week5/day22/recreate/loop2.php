<?php

//$days_to_christmas = 300;

//while ($days_to_christmas > 5) {
    //$days_to_christmas--;
    //echo 'It still takes '. $days_to_christmas . ' days until christmas!!!<br> ';
//}

$years_served = 0;

while ($years_served < 10) {
    $years_served++;
    echo 'You have served '. $years_served . 'years<br>';
}

do {
    $years_served++;
    echo 'You have served '. $years_served . 'years<br>';
} while ( $years_served < 10);

for ($i = 5; $i > 0; $i--) {
    echo 'You still have ' . $i . ' years to serve<br>';
}