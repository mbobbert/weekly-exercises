<?php

$my_db_handle = new PDO('mysql:host=localhost;dbname=world', 'root', 'rootroot');

var_dump($my_db_handle);

echo '<hr>';

$paris = $my_db_handle->query('SELECT * FROM city WHERE Name = "Paris"');
var_dump($paris);
echo '<hr>';

var_dump($paris->fetchALL());

echo '<hr>';

$Antarctica = $my_db_handle->query('SELECT Name FROM country WHERE continent = "Antarctica"');
var_dump($Antarctica);
echo '<hr>';

var_dump($Antarctica->fetchAll());
echo '<hr>';

$p_language = $my_db_handle->query('SELECT countrycode FROM countrylanguage WHERE Language LIKE "Lu%"');
var_dump($p_language);
echo '<hr>';
var_dump($p_language->fetchAll());

echo '<hr>';

$english_language = $my_db_handle->query
('SELECT country.Name FROM country
LEFT JOIN countrylanguage
ON country.code = countrylanguage.CountryCode
WHERE Language ="English"');
var_dump($english_language);
echo '<hr>';
var_dump($english_language->fetchAll());

echo '<hr>';

$life_expectancy = $my_db_handle->query
('SELECT Name, LifeExpectancy, Continent
FROM country
ORDER BY LifeExpectancy DESC
LIMIT 10');

var_dump($life_expectancy);
echo '<hr>';
var_dump($life_expectancy->fetchAll());

echo '<hr>';

$australia_region =$my_db_handle->query
('INSERT INTO
region
VALUES
(NULL "Australia", "Australia"');

var_dump($australia_region);
echo '<hr>';
var_dump($australia_region->fetchAll());

echo '<hr>';

$regions_table =$my_db_handle->
('CREATE TABLE `imdb_movie_rating` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `imdb_movie_id` INT NOT NULL ,
    `user_id` INT NOT NULL ,
    `rating` FLOAT NOT NULL ,
    `created_at` DATETIME NULL DEFAULT NULL ,
    PRIMARY KEY (`id`),
    INDEX `imdb_movie_id` (`imdb_movie_id`)
  ) ENGINE = MyISAM;