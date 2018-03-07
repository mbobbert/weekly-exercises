<?php

$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];

$messages = [

];

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


<?php if($messages == true) : ?>
<ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
<?php foreach($messages as $flow) : ?>
    <li><?php echo $flow ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>





</body>
</html>