<?php

include_once './class/Movie.php';

$movie1 = new Movie('Tarantino','Quei bravi ragazzi','Azione');
$movie2 = new Movie('Sorrentino','La grande Bellezza','Drammatico');


$movie1 ->setImg('https://pad.mymovies.it/filmclub/2006/03/273/locandina.jpg');
$movie2 ->setImg('https://pad.mymovies.it/filmclub/2012/05/105/locandina.jpg');


var_dump($movie1);
var_dump(($movie2));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="./css/style.css">
  <title>Movie</title>
</head>
<body>
  <header>
    <h1>I film preferiti di Giorgio </h1>

  </header>



  
</body>
</html>