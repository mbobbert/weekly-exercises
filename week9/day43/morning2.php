<?php

header('Content-type:text.plain');

var_dump( pathinfo( __FILE__ ) );

var_dump( basename( __FILE__ ) );
var_dump( dirname( __FILE__ ) );

$result = scandir(__DIR__ . '/..');
var_dump($result);


    $directory_handle = opendir(__DIR__ . '/..');
    var_dump($directory_handle);

    $file = readdir($directory_handle)
