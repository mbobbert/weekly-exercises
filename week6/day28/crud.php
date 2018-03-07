<?php

$my_db_handle = new PDO('mysql:host=localhost;dbname=world', 'root', 'rootroot');

var_dump($my_db_handle);

echo '<hr>';

$my_record = $my_db_handle->query('SELECT * FROM city WHERE Name = "Paris"');
var_dump($my_record);
echo '<hr>';

var_dump($my_record->fetchALL());

echo '<hr>';

$my_new_regions = $my_db_handle->query('INSERT INTO region
VALUES (NULL,"North America","north-america"),
(NULL,"Central America","central-america"),
 (NULL,"Peru","Peru")');

var_dump($my_new_regions);

$my_newly_created_region = $my_db_handle->query('SELECT * FROM region');

var_dump($my_newly_created_region);
echo '<hr>';

var_dump($my_newly_created_region->fetchAll());
echo '<hr>';

$chech_cities = $my_db_handle->query('SELECT * FROM city WHERE CountryCode = "CZE"');
var_dump($chech_cities);

echo '<hr>';

var_dump($chech_cities->fetchAll());


