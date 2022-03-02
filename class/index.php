<?php
class Movie
{
    public $title;
    public $producer;
    public $year;
    public $genre;
    public $plot;


    function __construct($title, $producer, $year, $genre, $plot)
    {
        $this->title = $title;
        $this->producer = $producer;
        $this->year = $year;
        $this->genre = $genre;
        $this->plot = $plot;
    }
}
