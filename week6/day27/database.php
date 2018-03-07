<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = 'rootroot';
$db_database = 'world';
/**
 * connects to a database
 *
 * uses the global variables $db_host, $db_username, $db_password
 *
 *
 * build set of functions without having to repeat the connecting to the database
 * @param $database - name of the database to connect to
 */
function db_connect($database) { //gets the name of a database
    global $db_host;
    global $db_username;
    global $db_password;

    try
    {
        //try connecting to the database
        $pdo_connection = new PDO( // connect to the database
        'mysql:dbname=' . $database . ';host=' . $db_host . ';charset=utf8',
        $db_username,
        $db_password
        );

        //set error reporting (for future queries)
        $pdo_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch (PDOException $e) // if something went wrong in try {}
    {
        //output the error message
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $pdo_connection;
}

function db_query($query, $values = [])
{
    global $db_database;

    $pdo = db_connect($db_database);

    $statement = $pdo->prepare($query); // prepare the query

    //$success = $statement->execute([]);
    if(false === $statement->execute($values))
        {
            echo '<h1>MySQL error:</h1>';
            var_dump($pdo->errorInfo());
            exit();
        }
    $statement->setFetchMode(PDO::FETCH_ASSOC); // set the type of results
    return $statement->fetchAll();// get all results as an array
}