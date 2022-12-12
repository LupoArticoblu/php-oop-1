<?php

class Movie{

public $title;
public $duration;
public $poster;
public $genere;

/**
 * @var String $title
 * @var String $duration
 * @var String $poster
 */
public function __construct($_title, $_duration, $_poster, genere $_genere)
{
  $this->title = $_title;
  $this->duration = $_duration;
  $this->poster = $_poster;
  $this->genere = $_genere;

}

public function get_movie_details(){
  return "Film: $this->title, Durata: $this->duration minuti";
}

}
