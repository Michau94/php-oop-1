<?php


/**
 * @title string
 * @year int
 * @description string
 * @language string
 */

class Movie
{
    public $title;
    public $year;
    public $director;
    public $description;
    public $language;

    public function __construct($_title, $_year, $_director, $_language, $_description = null)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->description = $_description;
        $this->language = $_language;
    }
}
