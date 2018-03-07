<?php

$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
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

<table border='1'>
    <tr>
        <th>Means of transport</th>
        <th>Max. speed (km/h)</th>
    <tr>

    <?php foreach($vehicles as $vehicle => $top_speed) : ?> <!-- take array, and then key:value pair -->
    <tr>
        <td><?php echo $vehicle; ?></td>
        <td><?php echo $top_speed; ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>