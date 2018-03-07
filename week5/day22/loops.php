<?php

set_time_limit(2);
$days_to_christmas = 5;

while( $days_to_christmas > 0)
{
    $days_to_christmas--;
    echo 'There are still ' . $days_to_christmas . ' days to christmas.<br>';
}

$time_served = 0;
while( $time_served <  10)
{
    $time_served++;
    echo 'The prisoner has served ' . $time_served . ' years.<br>';
}

echo '<hr>';


do{
    $time_served++;
    echo 'The prisoner has served ' . $time_served . ' years.<br>';
} while( $time_served <  10);

for($i = 0; $i < 10; $i++) {
    echo 'this is the ' . $i . ' iteration of the loop<br>';
}

for($i = 5; $i > 0; $i--) {
    echo 'the prisoner has ' . $i . ' yeras to serve<br>';
}
for($i = 0; $i < 5; $i++) {
    echo 'the prisoner has ' . (5-$i) . ' yeras to serve<br>';
}

for($i = 10; $i >0 ; $i--) {
    echo 'The prisoner has ' . $i . ' more years to serve.<br>';
    if ($i > 5)
    {
        // skip the rest of the lopo's code if he has more than 5 year left
        continue; // if i > 5 the for loop doesn't continue after this line
    }
    echo 'Going to a parole hearing...<br>';
    if ($i == 2)
    {
        echo 'Paroled!';
        break;
    }
}
