<html>
<head>
<title>Looping Through an Associative Array with foreach</title>
</head>
<body>
<?php
$character = array (name=>"Joe",
                    occupation=>"Programmer",
                    age=>30,
                    "Learned language "=>"Java"
);
foreach ( $character as $key=>$val ){
    print "$key = $val<br>";
}
?>
<?php
$fruit = ['apple', 'pear', 'mango'];
foreach($fruit as $item) {
        echo $item . '<br>';
}
?>

<br>


</body>
</html>