<?php
class dice {
    public $faces = null;
    public $color = null;

    public function __construct($faces = 6)
    {
        $this->faces = $faces;
    }
    public function roll() {
        return rand(1 ,$this->faces);
    }
}

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
<form method="post" action="">
    <label>Number of dices<input type="text" name="number"/></label>

    <input type="submit" value="throw"/>

</form>

<?php
//read from post

//loop and roll dices
$dice = new dice();
    for ($i=0; $i < $_POST["number"]; $i++)
    {
        echo $dice->roll(), '<br/>';
    }

?>
</body>
</html>

