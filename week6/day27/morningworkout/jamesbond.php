<?php

$name = 'James';

$name = $name . 'Bond';
$name .= 'Bond';

$lastName = 'Bond';

$name = $name . $lastname;

$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

echo 'The name is ' .
 $bond_info['last_name'].
  '. '. // dot and space
  $bond_info['first_name'] .
   ' '. //space
    $bond_info['last_name'].
    '.<br>';

echo 'One day when I was driving my ' . $bond_info['car']. ' in the Alps . ' . $bond_info['enemy'] . ' came along and made me a ' . $bond_info['relationship_status']. '. If only I had my ' . $bond_info['gun'] . ' with me!';

$bond_info['last_case'] = 'Spectre';

class bondCase {
    protected $name = null; //
    protected $year = null;
    protected $enemy = null;
    protected $girls = [];
    protected static $cases_solved = 0;
    protected static $girls_met = 0;

    public function addGirl($name)
    {
        //array_push($this->girls, $name);
        $this->girls[] = $name;
        static::$girls_met++;
    }

//get protected value from the outside --> with public functions we CAN get them from the outside, to format the data before it is written. And make sure the wrong data is set.

    public function __construct($year) {
        $this->year = $year;
        static::$cases_solved++;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getEnemy()
    {
        return $this->enemy;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setYear($value)
    {
        $this->name = $value;
    }

    public function setEnemy($value)
    {
        $this->enemy = $value;
    }
    public static function getAvgGirlsPerCase()
    {
        if(static::$cases_solved == 0) return 0;
        return static::$girls_met / static::$cases_solved;
    }

}

$spectre_movie = new bondCase(2015); // year is set in the constrcutor so don't use setYear

$spectre_movie->setName('Spectre');
$spectre_movie->setEnemy('Ernst Stavro Blofeld');



$spectre_movie->addGirl('Estrella');
$spectre_movie->addGirl('Lucia Sciarra');
$spectre_movie->addGirl('Madeleine Swann');

var_dump($spectre_movie);
echo '<hr>';

$casino_royale_movie = new bondCase(2006);

$casino_royale_movie->setName('Casino Royale');
$casino_royale_movie->setEnemy('Le Chiffre');



$casino_royale_movie->addGirl('Vesper Lynd');
$casino_royale_movie->addGirl('Solange Dimitrios');

var_dump($casino_royale_movie);

echo '<hr>';

echo 'On average Bond has met ' . bondCase::getAvgGirlsPerCase() . 'girls per case.';



