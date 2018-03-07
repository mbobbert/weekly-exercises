<?php

$pdo; // let's assume that this is an established PDO connection object

// run query here

$my_sql_query = "
SELECT `delivery`.*
FROM `delivery`
WHERE `delivery`.`id` = ?
";

//2. prepare a statement

$statement = $pdo->prepare($my_sql_query);

//3. execute the statement
$success = $pdo->execute([81]);

