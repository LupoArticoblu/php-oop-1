<?php

require_once './Model/movie.php';
require_once './Model/Genere.php';

$genres_film1 = [
  new Genere('sci-fi'),
  new Genere('action')
];

$genres_film0 = [
  new Genere('sci-fi'),
  new Genere('fantascienza')
];

$film0 = new Movie('Matrix', 120, 'https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg', $genres_film0);

$film1 = new Movie('Starwars', 120, 'https://www.themoviedb.org/t/p/original/nJcAQO0zauDTp72SEMcneIDjA7c.jpg', $genres_film1);

var_dump($film0);
var_dump($film1);

var_dump($film0->get_movie_details());
var_dump($film1->get_movie_details());

?>

<ul>
  <?php foreach($film1->generi as $genere): ?>
    <li><?php echo $genere->name ?></li>
  <?php endforeach; ?>  
</ul>