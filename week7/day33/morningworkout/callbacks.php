<?php

$movies =
[
    [
        'title' => 'Delta Force',
        'rating' => 62,
        'year' => 1986
    ],
    [
        'title' => 'Missing in action',
        'rating' => 57,
        'year' => 1984
    ],
    [
        'title' => 'Firewalker',
        'rating' => 49,
        'year' => 1986
    ],
]

/**
 * example 1
 */

function sort_movies($a, $b)
{
    // we want to sort the movies in ascending order by year
    // functioin sort we can only use it on simple arrays
    //variable a and b are arrays
    //compare elements of big array
    // cannot put together yourself, it just takes list of arrays and takes parameters 0 , -1, or 1
    //always just compares two elements
    if ($a['year'] == $b['year']) {
        return 0;
    }
    return ($a['year'] < $b['year']) ? -1 : 1;
}
usort ( $movies , 'sort_movies' );

/**
 * example 2
 */

class sorting_functions
{
    public function sort_movies($a, $b)
    if ($a['year'] == $b['year']) {
        return 0;
    }
    return ($a['year'] < $b['year']) ? -1 : 1;
}


usort ( $movies , ['sorting_functions', 'sort_movies'] );
year ASC
rating DESC