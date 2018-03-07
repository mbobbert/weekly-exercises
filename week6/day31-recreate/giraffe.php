<?php

class giraffe
{
    public static $nr_of_giraffes = 0;

    public $is_hungry = true;
    public $is_thirsty = true;
    public $name = null;

    public function __construct($name)
    {
        $this->name = $name;
        static::$nr_of_giraffes++;
    }

    public function drink()
    {
        $this->is_thirsty = false;
    }

    public function feed()
    {
        $this->is_hungry = false;
    }

    public function is_happy()
    {
        return !$this->is_thirsty && !$this->is_hungry;
    }
}


