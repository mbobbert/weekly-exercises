<?php

header('Content-type:text.plain');

var_dump( pathinfo( __FILE__ ) );

var_dump( basename( __FILE__ ) );
var_dump( dirname( __FILE__ ) );

$result = scandir(__DIR__ . '/..');
//var_dump($result);

//read_dir_recursive will call itself time and time again
function list_directory($directory)
{
 //__DIR__ = directory of current file. /.. open the directory one level op
    $directory_handle = opendir($directory);

// loop through all your directories to have them listed
// go through every single file, to print contents of directory
// as long as the while loop is true, continue to loop
    while (false !== ($file = readdir($directory_handle)))
    {
        //don't give me the hidden files (.)
        if ($file == '.' || $file == '..') continue;
        if (strpos($file, '.') === 0 ) continue;

        // DIRECTORY SEPARATOR : when you have full path, can navigate
        $full_file_path = realpath( $directory . DIRECTORY_SEPARATOR . $file);
        echo "$full_file_path\n";
        // the directory separator will contain slash
        if (is_dir($full_file_path)) {
            list_directory($full_file_path);
        }

    }
}

list_directory('/Users/mireille/Data4you/codingbootcamp/exercises/weekly-exercises/week9/');