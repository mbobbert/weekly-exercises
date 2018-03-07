<?php

class user {
    public $id = null;
    public $username = null;
    public $name = null;
    public $password = null;
    public $number_of_posts = 0;
    public function __construct(&$next_user_id, $future_username) {
        $this->id = $next_user_id;
        $next_user_id++;
        $this->username = $future_username;
    }

    public function dumpMe() {
        var_dump($this);
    }
}

$steve = new user($next_user_id,"steve");
$steve->__construct($next_user_id,"steve888");
$steve->id = 1;
$steve->username = 'steve666';
$steve->name = 'Stephan';

echo '<hr>';

echo '\nUser has id: ' . $steve->id;


$bob = new user($next_user_id, "bob");
$bob->__construct($next_user_id, "bob123");
echo '\nUser has id: ' . $bob->id;

$next_user_id = 0;

echo 'The name of user '. $steve->id . ' is '. $steve->name .' and he is username is ' . $steve->username;
echo '<hr>';

echo $steve->id, $steve->username, $steve->name;

echo '<hr>';



$bob->dumpMe();

echo '<hr>';
$steve->dumpMe();

echo '<hr>';

echo $steve->dumpMe();





