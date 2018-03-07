<?php
//here is action part
var_dump($_POST);
if (count($_POST) > 0) {
    $agent_id = filter_input(INPUT_POST, 'agent_id', FILTER_VALIDATE_INT);
    $clearance_level = filter_input(INPUT_POST, 'clearance_level', FILTER_VALIDATE_INT);
    $body = filter_input(INPUT_POST, 'body');

   var_dump(!$agent_id, !$clearance_level, $body == '');
     if (!$agent_id|| !$clearance_level || $body == '') {
        header('Location: ?success=no');
    } else {
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
<?php if ($success =='yes') echo '<p style="color: red">SUCCESS</p>'; ?>


<form method="post">
    <label>
        Agent ID <input type ='text' name="agent-id">
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

</body>
</html>