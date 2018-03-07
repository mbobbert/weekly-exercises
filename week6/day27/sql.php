<?php

//require the database library
require_once 'database.php';

//connect to database world using functions from the library
$pdo = db_connect('world');

var_dump($pdo);

//1. prepare a query

$my_sql_query = "
    SELECT *
    FROM `city`
    WHERE `CountryCode` = 'FRA'
";

//$country_code = 'CZE';

//$my_sql_query = "
//    SELECT *
//    FROM `city`
//    WHERE `CountryCode` = '".$country_code."'
//";

//2. prepare a statement

$statement = $pdo->prepare($my_sql_query);

//$statement = $pdo->prepare("
//SELECT *
//FROM `city`
//WHERE `CountryCode` = 'CZE'
//");

//3. execute the statement
$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);

//4. fetch
$results = $statement->fetchAll();

var_dump($results);

?>
<ul>
    <?php foreach ($results as $result) : ?>
        <li>
        <?php echo $result['Name']; ?> in the <?php echo $result['District'];?> district has a population of  <?php echo $result['Population'];?> </li>
    <?php endforeach; ?>
</ul>

<?php

$query = "
    SELECT *
    FROM `country`
    ";

$results = db_query($query);
var_dump($results);
echo '<hr>';

$query = "
    SELECT *
    FROM `country`
    WHERE `Continent` = ?
    ";

$results = db_query($query, ['Europe']);

var_dump($results);
echo '<hr>';

$query = "
    SELECT *
    FROM `country`
    WHERE `Continent` = ?
    AND `Population` > ?
    ";

$results = db_query($query, ['Europe', 10000000]);

var_dump($results);
echo '<hr>';