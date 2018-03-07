<?php
//init part
session_start();

// here action part BEGINS --> must always be at the beginning
//
if (count($_POST)>0) {
    //must int will get post value of line 44 -- if here in $_POST is blabla // if must-int is not an integer, nothing will happen
    $must_int = filter_input(INPUT_POST, 'must_int', FILTER_VALIDATE_INT);
    // here $must_int is false
    //if must-int is an integer, info on the session will be saved
    if (false !== $must_int) {
        $_SESSION['must_int'] = $must_int;
        $_SESSION['form_data_received_at'] = date('Y-m-d H:i:s');
        header('Location:?');
        exit;
    }
    var_dump($_POST);
    // when post is valid, don't want the post to be send back to the content part.
    die();

    $_SESSION['form_data_recieved_at'] = date('Y-m-d H:i:s');
    $_SESSION['must_int'] = $_POST['must_int'];
    header('Location: ?'); // dont forget to add some logic from the radio name display here
    exit;
}
// here action part ENDS
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>GET, POST Explained</title>
</head>
<body>

<?php var_dump($_SESSION) ?>

<!-- here is palace for our content -->
<a href="?display=form">Display form</a>
<a href="?">Display none</a>

<?php if (isset($_GET['display']) && $_GET['display'] == 'form'): ?>
<form method="post" action="?display=form">
    This must be integer <input type="text" name="must_int"><br>
    Display form after successful submition:
    <label>
    <input type="radio" name="display" value="yes">yes
    </label>
    <label>
    <input type="radio" name="display" value="no">no
    </label><br>

    <input type="submit" value="Submit my form">
</form>
<?php endif; ?>




</body>
</html>

<!--//if post is not successfull, you want to give the data back to the user via must_int
//if action is successfull (mustint is valid), will send some get data