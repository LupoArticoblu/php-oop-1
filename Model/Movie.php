<?php

class Movie{

public $title;
public $duration;
public $poster;
public $generi;

/**
 * @var String $title
 * @var String $duration
 * @var String $poster
 * @var Array $generi
 */
public function __construct($_title, $_duration, $_poster, $_generi)
{
  $this->title = $_title;
  $this->duration = $_duration;
  $this->poster = $_poster;
  $this->genere = $_generi;

}

public function get_movie_details(){
  return "Film: $this->title, Durata: $this->duration minuti";
}

}
