<?php

header('content-type:text/plain');
class blog_post {
    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $user_id = null;
    public $status = 'not-published';

    public function __construct() {
        global $next_post_id;
        $this->$next_post_id;
        $next_post_id++;
        $added_at = date('1 jS \of F Y H:i:s A'). "<br>";
        $this->$user_id;
    }
    public function publishPost() {
        $this->status = 'published';
    }

    public function dumpMe() {
        var_dump($this);
    }
}

$first_post = new blog_post();
$first_post->id = 1;
$first_post->headline = 'The first post';
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->added_at = date('1 jS \of F Y H:i:s A'). "<br>";
$first_post->user_id = 1;
$first_post->status = 'published';
echo $first_post->text .'from post'. $first_post->headline .'at date ' .$first_post->added_at;

echo '<hr>';
$first_post->publishPost();

echo '<hr>';
$first_post->dumpMe();
echo '<hr>';

$next_post_id = 0;







