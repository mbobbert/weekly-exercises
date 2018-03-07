<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A HTML5 document</title>
</head>
<body>

<pre>inside $_POST is <?php var_dump($_POST) ?></pre>

<?php
$datetime = null;
$email = null;
if (isset($_POST['datetime']) && strtotime($_POST['datetime']) > time() - 86400) {
	$datetime = $_POST['datetime'];
}
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$howmanypeople = filter_input(INPUT_POST, 'howmanypeople', FILTER_VALIDATE_INT);

echo 'DATE: '.$datetime.'</br>';
echo 'EMAIL: '.$email.'</br>';
?>


<form method="post">

	<?php echo date('Y-m-d')?>
	<input type="hidden" name="datetime" value="<?php echo date('Y-m-d')?>" />

	<br /><br />

	<label>Email:
		<input type="text" name="email" value="<?php echo $email ?>" />
	</label>
	<br /><br />

	<label>How many people:
		<input type="text" name="howmanypeople" value="<?php echo $howmanypeople ?>" />
	</label>
	<br /><br />

	<input type="submit" />
</form>




</body>
</html>