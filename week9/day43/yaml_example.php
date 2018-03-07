<?php

$data = array(
    'config' => array(
        'URL' => 'http://mysite.com',
        'host' => 'localhost',
        'port' => 80
    ),
    'environment' => 'development',
    'info' => array(
        'contact' => array(
            array(
                'name' => 'Steve',
                'position' => 'owner'
            ),
            array(
                'name' => 'Bob',
                'position' => 'developer'
            )
        ),
        'address' =>
'Data4You
Krakovská 9,
Praha 1',
        'established' => 2015
    )
);

//include library
require_once('Spyc.php');

$yaml_string = Spyc::YAMLDump($data, 2); //2 = indent size
echo ($yaml_string);

echo json_encode($data);
