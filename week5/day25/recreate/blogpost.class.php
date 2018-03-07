<?php
date_default_timezone_set('Europe/Berlin');

class blog_post {
   public $id = null;
   public $headline = null;
   public $text = null;
   public $added_at = null;
    public $user_id = null;
    public $status = 'not-published';
    public function __construct(&$next_post_id, $headline, $all_posts) {
        $this->id = $next_post_id;
        $next_post_id++;
        $this->added_at = date('Y-m-d H:i:s');
        $headline = null;
        $this->headline = $headline;
        $this->all_posts = [$all_posts];
    }
    public function publish() {
        $this->status = 'published';
    }
}
$all_posts = [];

$next_post_id = 0;

$first_post = new blog_post($next_post_id, "a new headline!");

$first_post->id = 1;
$first_post->headline = 'The first post';
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->added_at = date('Y-m-d H:i:s');
$first_post->user_id = 1;
$first_post->status = 'published';

echo 'My first blog post is called ' . $first_post->headline . ' and within the blogpost it says ' . $first_post->text . ' and it was created at ' . $first_post->added_at ;

echo '<hr>';

echo $first_post->id;

echo '<hr>';

$second_post = new blog_post($next_post_id, "another new headline!");
$second_post->publish();
echo '<hr>';
var_dump($first_post);
echo '<hr>';
var_dump($second_post);

