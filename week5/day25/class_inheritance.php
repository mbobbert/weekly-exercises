<?php

date_default_timezone_set ('Europe/Berlin');

class match {
    public $begins_at = null;
    public $score = null;
    public $nr_of_players = null;
    public $length = null;
    public function __construct() {
        $this->begins_at = time();
    }
    public function getEstimatedEnd() {
        return $this->begins_at + $this->length * 60;
    }
}

$morning_match = new match();
$morning_match->length = 90;
echo "<r/>ending: ",date('H:i:s', $morning_match->getEstimatedEnd()); //
echo '<hr>';

class football_match extends match{
    public $nr_of_players = 22;
    public $length = 90;
    public $halves = ['0:0', '0:0'];
    public $nr_offsides = '0';
}

$footballcup = new football_match();
echo "The amazing footballmatch has . $footballcup->nr_of_players . 'players and takes ' . $footballcup->length . ' minutes ";
echo '<hr>';

class icehockey_match extends match{
    public $nr_of_players = 12;
    public $length = 60;
    public $thirds = ['4:0', '0:0', '0:0'];
    public function getThirdScore($third) {
        return $this->thirds [($third-1)]; // -1 because the third halve, is index 2
    }

}

$the_tigers_vs_the_nicks = new icehockey_match();

echo "The amazing icehockey match has . $the_tigers_vs_the_nicks->nr_of_players . 'players and takes ' . $the_tigers_vs_the_nicks->length . ' minutes ";
echo '<hr>';



echo "This is the result from the first third: " . $the_tigers_vs_the_nicks->getThirdScore(1);
echo '<hr>';

class vehicle
{
    public $wheels_count = null;
    public  $color = null;
    public  $avg_speed = null;
    public function travel($distance) {
        $travel_distance = $distance/$avg_speed;
        return $travel_distance;
    }
}

