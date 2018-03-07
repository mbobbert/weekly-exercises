<?php
function vdump($variable)
{
    echo nl2br(var_export($variable, true));
}
vdump($_GET);
echo '<hr>';
vdump($_POST);
echo '<hr>';
var_dump(parse_url($_SERVER['REQUEST_URI']));
echo '<hr>';

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
<nav>
    <a href="request.php">home</a>
    <a href="request.php?page=form">forms</a>
</nav>


<div id="content">
<?php if(isset($_GET['page']) && $_GET['page']=='form') : ?>
    <?php include('forms.php'); ?>
<?php else : ?>
    This is home.
<?php endif; ?>
</div>

</body>
</html>