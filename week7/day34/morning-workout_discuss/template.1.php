<?php

//1 connect to database
//creates object which holds connection to database
$my_db_handle = new PDO('mysql:host=localhost;dbname=discussion_forum', 'root', 'rootroot');

/**
 * Putting messages into database
 */
var_dump($_POST);
if (count($_POST) > 0) {
    $name = filter_input(INPUT_POST, 'name');
    $message = filter_input(INPUT_POST, 'message');

    var_dump($name, $message);
     if (!$name || !$message)
     {
        header('Location: ?success=no');
    } else {
        $my_sql_query = ('INSERT INTO messages (name, message) VALUES (?,?)');
        $statement = $my_db_handle->prepare($my_sql_query); //change name of db!!
        $statement->execute([$name, $message]);
        var_dump($statement); // here you don't have the fetch because it is not a query?

        header('Location: ?success=yes');
    }
};

/**
 * Statement for rendering the messages in the overview, just the preparation
 */
$statement = $my_db_handle->query("SELECT * FROM messages ORDER BY created_at DESC"); // same as 'prepare'? almost,
// when saying 'prepare' question marks replaced in future.
// difference 'query' and 'prepare' is that you're only grabbing stuff
$statement->execute([]);
$statement->setFetchMode(PDO::FETCH_OBJ);
$messages = $statement->fetchALL();

//here follows the template part
$success = filter_input(INPUT_GET, 'success');
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

<?php if ($success =='no') echo '<p style="color: red">FAIL</p>'; ?>
<?php if ($success =='yes') echo '<p style="color: green">SUCCESS</p>'; ?>
<div class="container">


    <div id="disc-wrapper">
        <h1 class="text-center">Discussion</h1>

        <form id="disc-form" method="post">
            <div class="form-group">
                <label class="d-none" for="form-name">Name</label>
                <input name="name" type="text" class="form-control" id="form-name" placeholder="Your name">
            </div>
            <div class="form-group">
                <label class="d-none" for="form-message">Messge</label>
                <textarea name="message" class="form-control" id="form-message" placeholder="Your message..."></textarea>
            </div>
            <div class="text-right">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

        <div id="disc-messages">

            <div class="disc-message">
                <?php foreach($messages as $message) : ?>
                    <div class="disc-header"> <?php echo htmlspecialchars($message->name);?></div>
                    <div class="disc-body"> <?php echo htmlspecialchars($message->message);?></div>
                    <div class="disc-footer"> <?php echo htmlspecialchars($message->created_at); ?></div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
</body>
</html>