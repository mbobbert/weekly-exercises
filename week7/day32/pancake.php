<?php
/**
 * exercise one
 * **/
class pancake
{
    public function prepare()
    {
        echo 'Preparing flour...<br>';
        echo 'Preparing milk...<br>';
        echo 'Preparing eggs...<br>';
    }
}

class blueberry_pancake extends pancake
{
    public function prepare()
    {
        parent::prepare();
        echo 'Preparing blueberry jam...<br>';

    }
}

$bbp= new blueberry_pancake();
$bbp->prepare();


/**
 * exercise one
 * **/

class phone
{
    public $number = null;
    public function __construct($number)
    {
        $this->number = $number;
    }
}

class czech_phone extends phone
{
    public function __construct($number)
    {
        parent::__construct('0042 ' . $number);
    }
}

$my_phone = new czech_phone('123456789');
var_dump($my_phone);
echo $my_phone->number;

