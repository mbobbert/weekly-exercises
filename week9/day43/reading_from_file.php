<?php

//$file_handler = fopen('./morningworkout.php', 'r');
//var_dump($file_handler);

// one resource to an online file for reading
$file_handler = fopen('https://www.codingbootcamp.cz/img/man.png', 'r');
var_dump($file_handler);

//create a new resource to a local file for writing
$file_handler_to = fopen('./mydownloadedimage.png', 'w');
var_dump($file_handler_to);


// reading part of remote file
while (!feof($file_handler))
{
    $part_of_file = fread($file_handler, 1024 * 10);
    fwrite($file_handler_to, $part_of_file);
}
