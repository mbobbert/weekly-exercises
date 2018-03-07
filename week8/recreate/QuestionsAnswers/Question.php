<?php

class Question extends Model {

protected $table="questions";

public function answers()
{
    return $this->hasMany('App\Answer', 'question_id');
}

}
