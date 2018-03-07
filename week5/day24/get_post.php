<?php
header('Content-type: text/plain');

echo $_SERVER["REQUEST_URI"] , "\n";

echo "this is a + b = " ;
echo $_GET['a'] + $_GET['b'];

var_dump($_GET);

<a href="?name=Jakub$city=Budjevoice">This is my name link<a/>