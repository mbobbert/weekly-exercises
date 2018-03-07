<?php
//Initialization part
$dbh= new PDO('mysql:host=localhost;dbname=secretagency', 'root', 'rootroot');


//here is action part
var_dump($_POST);
if (count($_POST) > 0) {
    $agent_id = filter_input(INPUT_POST, 'agent_id', FILTER_VALIDATE_INT);
    $clearance_level = filter_input(INPUT_POST, 'clearance_level', FILTER_VALIDATE_INT);
    $body = filter_input(INPUT_POST, 'body');

    var_dump($agent_id, $clearance_level, $body);
     if (!$agent_id || !$clearance_level || $body == " ")
     {
        header('Location: ?success=no');
    } else {
        $statement = $dbh->prepare('INSERT INTO message (agent_id, clearance_level, body) VALUES (?,?,?)'); //change name of db!!
        $result = $statement->execute([$agent_id, $clearance_level, $body]);
        var_dump($result);

        header('Location: ?success=yes');
    }
};

//here follows the template part
$success = filter_input(INPUT_GET, 'success');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messages</title>
</head>
<body>

<?php if ($success =='no') echo '<p style="color: red">FAIL</p>'; ?>
<?php if ($success =='yes') echo '<p style="color: green">SUCCESS</p>'; ?>


<form method="post">
    <label>
        Agent ID <input type ="text" name="agent_id">
    </label>
        </br>

    <label>
        Clearance level: <input type = "text" name="clearance_level">
    </label></br>

    <label>
        Body: <textarea name="body" cols="30" rows="5"></textarea>
    </label></br>

    <input type='submit' value="insert message">
</form>

<table border="1">
<?php
$statement = $dbh->query("SELECT * FROM message");
foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
	echo "<tr><td>" . join('</td><td>', $row) . '</td></tr>';
}
?>
</table>

</body>
</html>