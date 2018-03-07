<?php
session_start();
var_dump($_GET);
echo 'this is $_SESSION ';
var_dump($_SESSION);

if (isset($_GET['user'])) {

    $_SESSION['user'] = $_GET['user'];
    $SESSION['last time user was seen'] =  date('Y-m-d H:i:s');
}

//If GET is empty, session will sill contain Kevin, you are saving contents of GET functions