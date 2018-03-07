<?php

class game
{
    public $id = null;
    public $name = null;
    public $image_url = null;
    public $description = null;
    public $rating = null;
    public $released_at = null;

    public static function getAllGames(PDO $pdo_connection)
    {
        // prepare a query
        $my_sql_query = "SELECT * FROM `game`";

        //prepare a statement
        $statement = $pdo_connection->prepare($my_sql_query);
        //execute the statement
        $statement->execute();


        // fetch
        $objects = $statement->fetchObject(`game`);

        $items = [];

        while(false !== ($objects)) {
            $items[] = $objects;
        }

        return $items;

    }
}


