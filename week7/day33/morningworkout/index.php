<?php
require_once dirname(__FILE__) . 'game.php';
require_once dirname(__FILE__) .'genre.php';


//initialization part
$pdo_connection = new PDO(
    'mysql:dbname=games;host=localhost;charset=utf8', // connection information
    'root', // username
    'rootroot' // password
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php foreach() : ?>
    <div class="game">
        <div class="image">
            <img src="<?php echo $game->image_url; ?>" />
        </div>
        <div class="info">
            <h2 class="name"><?php echo $game->name;?></h2>
            <div class="release"><?php echo $game->released_at;?></div>
            <div class="genres">
                <a href="#"><?php echo $genre->name; ?></a>
                <a href="#"><?php echo $genre->name; ?></a>
            </div>
            <div class="description">
                <?php echo $game->description; ?>
            </div>
            <div class="rating"><?php echo $game->rating; ?></div>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>