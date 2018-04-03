<?php
//header('Content-type: text/plain');

$phone_numbers = [
    '23455690',
    'blahbla',
    'i was born the  19802612',
    1,
    777235822
];

foreach ($phone_numbers as $number) {

    echo "\n$number: ";

    //validate six digits somewhere inside
    if (preg_match('/^(777|776|608)[0-9]{6}$/', $number)) {
        echo "OK";
    } else {
        echo "NG";
    }


}

echo "\n\n\n get TopLevelDomain\n\n";

$domain = 'classes.codingbootcamp.cz';
//([^\.]+) anything what is not a dot
// \. one dot
// ([a-z]{2,}) small case letters, at least two of them
// $ end of the string
preg_match('/([^\.]+)\.([a-z]{2,})$/', $domain, $matches);
var_dump($matches);

echo "\n\n\n    reokace\n\n";

//sanitize phone number
//you want to get rid of all the spaces
$number = 'hey, my number is: +420 777 235 822';
echo preg_replace('/[^0-9]/','',$number), "\n\n";

//URL to cache filename
//get contents and save file
// looks like this will not have the slashes
//then get a safe filename for saving contents of URL
$url="https://en.wikipedia.org/wiki/Resident_Evil:_Apocalypse";
echo preg_replace('/[^-a-z\.]+/i','_',$url), "\n\n";

preg_match_all('@<img\s[^>]*src="(//upload\.wikimedia\.org[^"]+)@ims', file_get_contents($url), $matches);
var_dump($matches);