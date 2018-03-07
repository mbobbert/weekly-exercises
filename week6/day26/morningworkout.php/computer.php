<?php
class computer {
   public $model = null;
   public $operating_system = null;
   public $is_portable = false;
   public $status = 'off';
}

$my_computer = new computer();
$my_computer->model = 'macbook air';
$my_computer->operating_system = 'OS';
$my_computer->is_portable = true;
$my_computer->status = 'off';
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
<h1>My computer</h1>

<table>
    <tr><th>Model:</th><td><?php echo $my_computer->model ?></td>
    <tr><th>OS:</th><td><?php echo $my_computer->operating_system ?></td>
    <tr><th>Portable:</th><td><?php if ($my_computer->is_portable =='true') {
            echo 'yes';
    } else {
        echo 'no';
    } ?></td>
    <tr><th>Status:</th><td>switched <?php echo $my_computer->status ?></td>
</table>


</table>


</body>
</html>
