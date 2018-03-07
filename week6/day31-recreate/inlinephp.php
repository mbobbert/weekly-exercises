
<?php for($i = 0; $i < 10; $i++) : ?>

<div class="item">
  This is item <?php echo $i+1; ?> of 10.
</div>

<?php endfor; ?>

<br>

<?php for ($i = 0; $i < 10; $i ++) : ?>
<div class="item">
This is item <?php echo $i+1  ?>of 10.
</div>

<?php endfor; ?>

<br>

<?php $names = ['Bruce Wayne', 'Clark Kent', 'Tony Stark', 'Peter Parker']; ?>

<?php foreach($names as $nr => $name) : ?>

  <div class="name">
    <?php echo $nr.'. '.$name; ?>
  </div>

<?php endforeach; ?>

<br>

<?php $names = ['Mireille', 'Francoise', 'Thomas', 'Hanneke']; ?>

<?php foreach($names as $nr=>$name) { ?>
    This is family member <?php echo $name ?>, she is family member number <?php echo $nr+1 ?> <br>
<?php }; ?>

<br>
<?php
$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];
?>

<table border='1'>
    <tr>
        <th>Means of transport</th>
        <th>Max. speed (km/h)</th>
    <tr>
    <?php foreach($vehicles as $vehicle=>$speed) : ?>
    <tr>
        <td><?php echo $vehicle?></td>
        <td><?php echo $speed ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>
<?php
$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];
?>

<ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
<?php foreach($messages as $message) : ?>
    <li><?php echo $message ?></li>
<?php endforeach;?>
</ul>