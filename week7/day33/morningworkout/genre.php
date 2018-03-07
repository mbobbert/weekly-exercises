<?php

class genre
{
    public $id = null;
    public $name = null;

    public static function getGenresForGames(PDO $pdo_connection, $game_ids)
    {
        // prepare a query
        $my_sql_query = "SELECT * FROM `genre`
        RIGHT JOIN `game_has_genre`
        ON (game_has_genre.genre_id = genre.id)
        WHERE game_has_genre.genre_id
        IN( ?, " . str_repeat(', ?', count($game_ids) -1) . ") ORDER BY game_has_genre.game_id ASC");

        //prepare a statement
        $statement = $pdo_connection->prepare($my_sql_query);
        //execute the statement
        $statement->execute();

        // fetch
        $results = $statement->fetchAll();
    }
}