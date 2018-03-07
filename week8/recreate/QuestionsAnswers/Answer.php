<?php

class Answer extends Model {

protected $table="answers";

public function question()
{
    return $this->belongsTo('App\Question', 'question_id');
}
}