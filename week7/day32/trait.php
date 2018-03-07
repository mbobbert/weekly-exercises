<?php

class animal
{
   protected $hungry = true;
   public function eat()
   {
       $this->hungry = false;

   }
}

class dog extends animal
{
    use domesticated, add_special_ability;
}

class wolf extends animal
{

}

trait domesticated
{
    public function beFed()
    {
        parent::eat();
    }
}

trait add_special_ability
{
    public function fly()
    {
        return true;
    }
}

$gigi = new dog();
$gigi->beFed();
$gigi->fly();
var_dump($gigi);