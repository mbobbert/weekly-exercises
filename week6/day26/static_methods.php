<?php

//THIS IS IN FILE <DOG class="CLASS PHP">
class dog

{
  public $color = 'unspecified'; //public non-static

  public static $nr_of_dogs = 0;  // public STATIC --> no dogs were created yet

  public function bark()        // every dog can bark - non-static, so part of the object
  {
    echo "WOOF!";
  }

  public static function get_nr_of_dogs() // returns number of dogs property
  {
    return static::$nr_of_dogs;
  }

  public function __construct()     //called automatically every time a dog is created
  {
    static::$nr_of_dogs++;
  }
  public function __destruct()
  {
      static::$nr_of_dogs--;
  }
}


//THIS PART IS ANOTHER FILE
$my_dog = new dog(); // dog::$nr_of_dogs increased by 1
$toms_dog = new dog();

// because it's public I can access the static property from anywhere
echo dog::$nr_of_dogs;
//echo dog::get_nr_of_dogs(); //same result

$my_dog->bark();


//destructing the dog
unset($my_dog);

echo dog::get_nr_of_dogs(); //same result --> only 1, we had 2

