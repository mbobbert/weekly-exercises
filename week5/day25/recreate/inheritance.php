<?php

class match {
    public $begins_at = null;
    public $score = null;
    public $nr_of_players = null;
    public $length = null;
    public function __construct()
    {
        $this->begins_at = time();
    }
    public function getEstimatedEnd()
    {
        return $this->begins_at + $this->length * 60;
    }
}

class football_match extends match {
    public $nr_of_players = 22;
    public $length = 90;
    public $halves = ['0:0', '0:0'];
    public $nr_offsides = '0';
}

class icehockey_match extends match {
   public $nr_of_players = 12;
   public $length = 60;
   public $thirds = ['2:0', '2:1', '2:5'];
   public function getThirdScore($third) {
       return $this->thirds [($third -1)];
   }
}

$lakers_vs_nicks = new icehockey_match();
echo 'the icehockey match lakers vs nicks will take ' .$lakers_vs_nicks->length . 'minutes';
echo '<hr>';

echo 'this is the result from the first half: ' .$lakers_vs_nicks->getThirdScore(1);
echo 'this is the result from the first half: ' .$lakers_vs_nicks->getThirdScore(2);
echo 'this is the result from the first half: ' .$lakers_vs_nicks->getThirdScore(3);

