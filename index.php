<?php

class Movie
{
    public $title;
    public $genre;
    public $score;

    function __construct($title, $genre, $score)
    {

        $this->title = $title;
        $this->genre = $genre;
        $this->score = $score;
    }
}

$title1 = new Movie("The Departed - Il bene e il male", "Thriller", 4.6);
$title2 = new Movie("Shrek", "Animazione", 5.0);

var_dump($title1);
echo "<br><br>";

var_dump($title2);
echo "<br><br>";