<?php

class Movie
{
    public $title;
    public $publish_year;
    public $genre;

    public function __construct($title, $publish_year, $genre)
    {
        $this->title = $title;
        $this->publish_year = $publish_year;
        $this->genre = $genre;
    }
}

$movie1 = new Movie("Zorro", "1998", "Action");
$movie2 = new Movie("Fantaghiro'", "1995", "Fantasy");
$movie3 = new Movie("Troy", "2011", "Drama");

var_dump($movie1);
echo $movie1;
