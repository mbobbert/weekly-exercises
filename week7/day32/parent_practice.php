<?php

class omelette
{
    public function prepare()
    {
        echo 'Open the egg <br>';
        echo 'Place egg in pan <br>';
    }
}

class spanish_omelette extends omelette
{
    public function prepare()
    {
        parent::prepare();
        echo 'Add tomatoes and patatoes<br>';
    }
}

$sunday_egg = new spanish_omelette();
$sunday_egg->prepare();

echo '<hr>';

class dog
   {
        public function live_life()
        {
            echo 'eat<br>';
            echo 'sleap<br>';
        }
   }

class puppy extends dog
{
    public function live_life()
    {
        parent::live_life();
        echo 'cuddle up with mommy <br>';
    }
}

$gigi = new puppy();
$gigi->live_life();

