<?php

include_once './class/Movie.php';

$movie1 = new Movie('Tarantino','Quei bravi ragazzi','Azione');
$movie2 = new Movie('Sorrentino','La grande Bellezza','Drammatico');


$movie1 ->setImg('https://pad.mymovies.it/filmclub/2006/03/273/locandina.jpg');
$movie2 ->setImg('https://pad.mymovies.it/filmclub/2012/05/105/locandina.jpg');


var_dump($movie1);
var_dump(($movie2));

