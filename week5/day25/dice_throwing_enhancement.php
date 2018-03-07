<?php
class dice {
    public $faces = [4,6,10,20];
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
    <label>Number of dices<input type="text" name="number"/></label><br/>
    <label>Number of faces
    <select name="faces">
        <option value="4">4</option>
        <option value="6">6</option>
        <option value="10">10</option>
        <option value="20">20</option>
    </select></label></br>
    <input type="submit" value="throw"/>

</form>

<?php
//read from post
if(isset($_POST['number'])){
//loop and roll dices
$dice = new dice($_POST['faces']);
    for ($i=0; $i < $_POST["number"]; $i++)
    {
        echo $dice->roll(), '<br/>';
    }
}
?>
</body>
</html>

