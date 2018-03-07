<?php

$distance = 50;
class vehicle
{
   public $wheels_count = null;
   public $color = null;
   public $avg_speed = 100;
   public function travel(&$distance)
   {
      return $this->distance / $this->avg_speed;
   }
}

class car extends vehicle
{
    public $wheels_count = 4;
    public function change_color($color)
    {
        $this->color = $color;
    }
}

$lambo = new car();
$lambo->$avg_speed = 200;
$lambo->change_color("red");
$lambo->travel($distance);
var_dump($lambo);
echo '<hr>';

class horse extends vehicle
{
    public $wheels_count = 0;
    public $legs = 4;
    public $is_fed = false;
    public function feed()
    {
        $this->is_fed = true;
    }
}

$Misty = new horse();
$Misty->color = 'grey';
$Misty->avg_speed = 16;

echo '<hr>';
var_dump($Misty);
echo '<hr>';

