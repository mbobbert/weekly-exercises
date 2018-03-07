<?php

$page_title = "Shopping list";
$page = "home";


if (isset($_GET['page'])) {
    global $page;
    $page = $_GET['page'];
};

$items = [];
if (!empty($_POST['item'])) {
    var_dump($_POST);
    $items = $_POST['item'];
}
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
<h1> <?php echo $page_title ?>
<?php if ($page == "home") {
    include 'workout3-home.php';
} elseif ($page =="form") {
    include 'workout3-form.php';
}
?>

<nav>
    <a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
</nav>



</body>
</html>