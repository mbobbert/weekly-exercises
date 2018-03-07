<?php
//1 connect to database

$my_db_handle = new PDO('mysql:host=localhost;dbname=blog_forum', 'root', 'rootroot');

var_dump($_POST);

//2 create variables and validations


if (COUNT($_POST > 0)) {
    $name = filter_input(INPUT_POST, 'name');
    $message = filter_input(INPUT_POST, 'message');
    var_dump($name, $message);

    if (!$name || !$message) {
        //header('Location: ?success=no');
    } else {
        //inserting messages into database if validation is ok
        $my_sql_query = ('INSERT INTO messages (name, message) VALUES (?,?)');
        $statement = $my_db_handle->prepare($my_sql_query);
        $result = $statement->execute([$name, $message]);
        var_dump($result);
        //header('Location: ?success=yes');
    }
}


//rendering of messages
$my_sql_query = ('SELECT * FROM messages');
$statement = $my_db_handle->query($my_sql_query);
$statement->execute([]);
$statement->setFetchMode(PDO::FETCH_OBJ);
$messages = $statement->fetchAll();

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Discuss!</title>

    <style>
        @media (min-width: 768px) {
            .container {
                max-width: 640px;
            }
        }

        #disc-wrapper {
            position: relative;
            margin: 1rem -15px 0;
        }

        #disc-form {
            padding: 1.5rem;
            border: solid #d3d3dd;
            border-width: .2rem .2rem 0 .2rem;
        }

        #disc-messages {
            clear: both;
            padding: 1.5rem;
            border: solid #d3d3dd;
        }

        #disc-messages .disc-message {
            border: solid #d3d3dd;
            border-width: 0 .2rem 0 .2rem;

            margin: .4rem 0;
        }

        #disc-messages .disc-message .disc-header {
            background: #d3d3dd;
            font-size: 120%;
            font-weight: 500;
            padding: .2rem .6rem;
            color: #666;
        }

        #disc-messages .disc-message .disc-body {
            border-width: 0 .2rem 0 .2rem;

            padding: .2rem .6rem;
        }

        #disc-messages .disc-message .disc-footer {
            background: #d3d3dd;
            text-align: right;
            font-size: 60%;
            padding: .1rem .6rem;
            color: #666;
        }


    </style>
</head>
<body>
<div class="container">


    <div id="disc-wrapper">
        <h1 class="text-center">Discussion</h1>

        <form id="disc-form" method="post">
            <div class="form-group">
                <label class="d-none" for="form-name">Name</label>
                <input name="name" type="text" class="form-control" id="form-name" placeholder="Your name">
            </div>
            <div class="form-group">
                <label class="d-none" for="form-message">Message</label>
                <textarea name="message" class="form-control" id="form-message" placeholder="Your message..."></textarea>
            </div>
            <div class="text-right">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

        <div id="disc-messages">
        <table>
            <?php foreach($messages as $row) {
            echo "<tr><td>" .join('</td><td>', $row) . '</td></tr>';
            } ?>
        </table>
        </div>

    </div>
</div>
</body>
</html>