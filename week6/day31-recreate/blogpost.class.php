<?php

$next_post_id = 0;
$posts_per_user = [];
$total_posts = 0;
class blog_post
{
    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $user_id = null;
    public $status = 'not-published';

    public function __construct(&$next_post_id, $future_headline, &$total_posts)
    {
        $this->id = $next_post_id;
        $next_post_id++;
        $this->added_at = date('1 jS \of F Y H:i:s A'). "<br>";
        $this->headline = $future_headline;
        $this->total_posts;
        $total_posts++;
    }


    public function dumpMe()
    {
        var_dump($this);
    }

    public function publish()
    {
       $this->status = 'published';
    }


}

$first_post = new blog_post($next_post_id, "Future headline post 1");
$first_post->id = 1;
$first_post->headline = 'the first post';
$first_post->text = "I have decided to write my own blog.";
$first_post->added_at = date('1 jS \of F Y H:i:s A'). "<br>";
$first_post->user_id = 1;
$first_post->status = 'published';

$second_post = new blog_post($next_post_id, "Future headline post 2");


echo 'The headline of this post is ' . $first_post->headline. ' , it\' text is ' . $first_post->text. ' and it was added at ' .$first_post->added_at . ' .';

echo '<hr>';

$first_post->dumpMe();
echo '<hr>';
echo 'second post';
$second_post->publish();
var_dump($second_post);

echo'<hr>';
echo 'Var dumping to check headline update';
echo '<br>';
var_dump($first_post);
echo '<br>';
var_dump($second_post);
