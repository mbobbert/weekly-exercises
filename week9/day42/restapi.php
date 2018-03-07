<?php

// write a simple endpoint that will return me a number of months
// php script that will prepare data for you
// situation where you need to get text representation of months
//need to get information about some users, every month has different kinds of users
// you create endpoint on one side that will return you the data
// one app has all info that other app needs

$months = [];

for($month = 1; $month <= 12 ; $month++)
{
    $months[$month]= [
        // m stands for months
    'month_as_text'=> date('M', mktime(null, null, null, $month)),
    'imaginary_users'=> rand(100,1000)
    ];
}

//set content type to applicatin json
header('Content-Type: application/json');

//echo as json
echo json_encode($months);
