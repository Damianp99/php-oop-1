<?php
class Movie
{
    public $title;
    public $producer;
    public $year;
    public $genre;
    public $plot;
    public $ticket;


    function __construct($title, $producer, $year, $genre, $plot, $ticket = null,)
    {
        $this->title = $title;
        $this->producer = $producer;
        $this->year = $year;
        $this->genre = $genre;
        $this->plot = $plot;
        $this->ticket = $ticket;
    }
    public function priceTicket()
    {
    }
}
