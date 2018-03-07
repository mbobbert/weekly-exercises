<?php

$string = '[config]
URL = "http://mysite.com"
host = "localhost"
port = 80';

//to read INI data:


// from a string
$data = parse_ini_string($string, true);
var_dump($data);

// directly from a file
$data = parse_ini_file('./file.ini', true);
var_dump($data);