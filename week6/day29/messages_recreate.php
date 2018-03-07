<?php
//Initialization part
$dbh= new PDO('mysql:host=localhost;dbname=secretagency', 'root', 'rootroot');

var_dump($_POST);
echo '<hr>';

if (count($_POST) > 0)
{
    $agent_id = filter_input(INPUT_POST, 'agent_id', FILTER_VALIDATE_INT);
    $clearance_level = filter_input(INPUT_POST, 'clearance_level', FILTER_VALIDATE_INT);
    $body = filter_input(INPUT_POST, 'body');

    var_dump($agent_id, $clearance_level, $body);
    if (!$agent_id || !$clearance_level || $body == " ") //if the agent_id is not filled in, etc
    {
        header('Location: ?success=no');
    } else {
        $my_sql_query = ('INSERT INTO message (agent_id, clearance_level, body) VALUES (?,?,?) ');
        $statement = $dbh->prepare($my_sql_query);
        $result = $statement->execute([$agent_id, $clearance_level, $body]);
        var_dump($result);

        header('Location: ?success=yes');
            }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deep Secret Agency</title>
</head>
<body>

<form method="post" action="">

    <label>Agent ID:
        <input type="text" name="agent_id"/>
    </label>
    </br>

    <label> Clearance level:
        <input type="text" name="clearance_level"/>
    </label>
    </br>

    <label> Body:
        <textarea rows="5" name="body"/></textarea>
    </label>
    </br>

    <input type="submit" value="Insert message"/>
</form>

<table border="1">
    <tr>
        <thead>

            <td>Agent_id</td>
            <td>Clearance_level</td>
            <td>Body</td>
        </thead>
    </tr>

    <?php
    $my_sql_query= ("SELECT * from message");
    $statement = $dbh->query($my_sql_query);
    $statement->execute([]);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $messages = $statement->fetchAll();
    foreach ($messages as $message) { ?>

        <tr>

            <td><?php echo htmlspecialchars($message['agent_id']); ?></td>
            <td><?php echo htmlspecialchars($message['clearance_level']); ?></td>
            <td><?php echo htmlspecialchars($message['body']); ?></td>
        </tr>
    <?php }; ?>
</table>

</body>
</html>