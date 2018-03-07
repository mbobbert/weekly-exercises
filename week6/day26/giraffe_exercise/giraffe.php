<?php

class giraffe
{
    public static $nr_of_giraffes = 0;

    public $is_hungry = true;
    public $is_thirsty= true;
    public $name = null;

    public function __construct($name)
    {
        $this->name = $name; //first name refers to line 7, second name refers to line 9, line 9 is 'Martha'
        static::$nr_of_giraffes++;
    }

    public function feed()
    {
        $this->is_hungry = false;
    }

    public function drink()
    {
        $this->is_thirsty = false;
    }

    /**
     * finds out whether the giraffe is happy or not
     * @return boolean happy/not happy
     */

     public function is_happy() {
        return !$this->is_thirsty && !$this->is_hungry;
     }



}