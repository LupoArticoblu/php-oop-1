<?php

require_once './Model/movie.php';
require_once './Model/Genere.php';

$film0 = new Movie('Matrix', 120, 'https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg', new Genere('Fantascentifico'));

$film1 = new Movie('Starwars', 120, 'https://www.themoviedb.org/t/p/original/nJcAQO0zauDTp72SEMcneIDjA7c.jpg', new Genere('Fantascentifico'));

var_dump($film0);
var_dump($film1);

var_dump($film0->get_movie_details());
var_dump($film1->get_movie_details());

var_dump($film1->genere->name);
?>