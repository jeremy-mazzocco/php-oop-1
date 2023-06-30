<?php

class Data
{
    public $lenght;
    public $color;
    public $type;

    public function __construct($lenght, $color, $type)
    {
        $this->lenght = $lenght;
        $this->color = $color;
        $this->type = $type;
    }
}

class Movie
{
    public $title;
    public $publish_year;
    public $genre;

    public Data $datas;

    public function __construct($title, $publish_year, $genre, Data $datas)
    {
        $this->title = $title;
        $this->publish_year = $publish_year;
        $this->genre = $genre;

        $this->datas = $datas;
    }

    public function stickAll()
    {
        return "Title:" . $this->title . "<br>" . "Year:" . $this->publish_year . "<br>" . "genre" . $this->genre;
    }
}

$dataMovie1 = new Data("120 min.", "color", "tape");
$dataMovie2 = new Data("110 min.", "color", "tape");
$dataMovie3 = new Data("240 min.", "color", "DVD");


$movie1 = new Movie("Zorro", "1998", "Action", $dataMovie1);
$movie2 = new Movie("Fantaghiro'", "1995", "Fantasy", $dataMovie2);
$movie3 = new Movie("Troy", "2011", "Drama", $dataMovie3);


var_dump($movie1, $movie2, $movie3);
