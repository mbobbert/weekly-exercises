<?php

class recipient {
    public $email = null;
    protected $name = "mireille";
    public function __toString()
    {
        return $this->name;
    }
}

$recipient = new recipient();
$recipient->email = 'mlfbobbert@gmail.com';

echo 'The email was sent to ' .$recipient->email ;
echo '<hr>';
echo $recipient;

echo '<hr>';

class address {
    public $street = null;
    public  $house_nr = null;
    public function __toString() {
        return $this->street . ' ' . $this->house_nr;
    }

}

$here = new address();
$here->street = 'Krakovská';
$here->house_nr = 9;

echo $here;

echo '<hr>';
class dog
{
  public $name;

  public function __set($name, $value)
  {
    echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
  }
}

$mydog = new dog();
$mydog->name = 'Ben'; // ok
$mydog->color = 'black'; // calls $mydog->__set('color', 'black');
$mydog->eyes = 'grey';
$mydog->collar = 'blue';

echo '<hr>';

echo 'This is ' . $mydog->name. ' whose skin is ' . $mydog->color . 'and whose eyes are ' . $mydog->eyes;