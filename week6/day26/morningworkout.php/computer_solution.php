<?php
class computer {
   public $model = null;
   public $operating_system = null;
   public $is_portable = false;
   public $status = 'off';

   public function switchOff() {
       $this->status ='off';
   }

   public function toggleSwitch() {
       $this->status = ($this->status == 'off' ? 'on' : 'off'); // don't forget to ASSIGN the new value to the variable --> possibilities are $this-> status =='on' or 'off', then ASSIGN IT
       //if($this->status =='on')
       //{
           //$this->status ="off";
       //}
       //else{
           //$this->status ='on';
       //}
   }
}

$my_computer = new computer();
$my_computer->model = 'macbook air';
$my_computer->operating_system = 'OS';
$my_computer->is_portable = false;
$my_computer->status = 'on';

//$my_computer->switchOff();
$my_computer->toggleSwitch();

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
    <tr><th>Model:</th><td><?php echo  $my_computer->model ?></td>
    <tr><th>OS:</th><td><?php echo $my_computer->operating_system ?></td>
    <tr><th>Portable:</th><td><?php echo $my_computer->is_portable ? 'yes' : 'no'; ?></td>
    <tr><th>Status:</th><td><?php echo $my_computer->status == 'on' ? 'switched on' : 'switched off'; ?></td>
</table>


</table>


</body>
</html>