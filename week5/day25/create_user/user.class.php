<?php
header('content-type:text/plain');

class user
{
    public $id = null;
    public $username = null;
    public $name = null;
    public $password = null;
    public $number_of_posts = 0;
    public function __construct(&$next_user_id, $future_username) { // future_username is created only inside the function, and nowhere outside, so it doesn't need a '&'

        $this->id = $next_user_id; // idea: every user created will have other ID
        $next_user_id++;
        $this->username = $future_username;
    }

    public function dumpMe() {
        var_dump($this);
    }

}
$next_user_id = 0;

$steve = new user($next_user_id, "steve668");




$steve->name = 'Stephan';
$steve->id = 1;
$steve->username = 'steve';

echo "The object of class 'user' contains the name"  .$steve->name;

echo '<hr>';

echo 'The name of user '.$steve->id .' is '.$steve->name;

echo '<hr>';

$bob = new user($next_user_id, "bob66");


$bob->dumpMe();
echo '<hr>';
$steve->dumpMe();





