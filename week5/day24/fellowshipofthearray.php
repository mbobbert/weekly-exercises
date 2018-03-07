<?php

$a = [1,2,3]; //$a references to memory where is stored 1,2,3
$b = [5,6,7,8,9]; //b references to memory where is stored [5,6,7,8,9]

$b = $a; // i will destroy the place in memory where is [5,6,7,8,9] and create a new place in memory and save [1,2,3] in it --> it makes a copy of a, there are now two arrays of 1,2,3 (passing value and making copy)

$b &= $a; // i will destroy the second place in memory where is [1,2,3] and reference to the same place in memory where points $a --> deletes the old b variable and says that b is a. (passing value by reference and change)

$b = [] // this will be the same as $a =[];

//for huge arrays you don't want to make a copy but you want to pass it by reference, so you want to
//because line 6 will copy a, but line 8, it will just look into 1