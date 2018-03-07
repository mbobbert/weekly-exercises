<?php

//QUESTION 1
//1 connect to database
$my_db_handle = new PDO('mysql:host=localhost;dbname=world', 'root', 'rootroot');

var_dump($my_db_handle);

//2 prepare query
$most_citizens = ('SELECT Name
FROM country
ORDER BY Population
LIMIT 10');

//3 prepare statement
$most_citizens_result = $my_db_handle->prepare($most_citizens);

// 4 execute
$most_citizens_result->execute();

//5 fetch
$most_citizens_output = $most_citizens_result->fetchAll();
echo 'highest population top 10';
var_dump($most_citizens_output);

echo '<hr>';

//QUESTION 2 TRIAL 1
echo 'highest population density';

//2 prepare query
$highest_density_query = ('SELECT Name, Population/SurfaceArea AS Density
FROM country
WHERE Population > 0
ORDER BY Density DESC
LIMIT 10');

//3 prepare statement
$highest_density_query_execute = $my_db_handle->prepare($highest_density_query);

// 4 execute
$highest_density_query_execute->execute();

//5 fetch
$highest_density_query_output = $highest_density_query_execute->fetchAll();
var_dump($highest_density_query_output);

//QUESTION 3 use insert 'neverland'

echo '<hr>';
echo 'insert neverland';
//1 prepare query
$insert_neverland = ("INSERT INTO
country
VALUES
('NNN', 'Neverland', 'Europe', 'Nordic Countries', 0, 2018, 1, 99, 0, 0, 'Neverland', 'Punk', 'Me', NULL, 'NN')
");

// 2 prepare statement
$insert_neverland_execute = $my_db_handle->prepare($insert_neverland);

// 3. execute
$insert_neverland_execute->execute();

//4 fetch

var_dump($insert_neverland_execute);














