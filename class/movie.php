<?php

class Movie
{
  public $regista;
  public $titolo;
  public $genere;
  public $img;


  // Dependecy Injection
  public function __construct($_regista, $_titolo, $_genere)
  {
   $this ->regista = $_regista;
   $this ->titolo = $_titolo;
   $this ->genere = $_genere;  
  }

  public function setImg($_img)
  {
    $this->img = $_img;

  }
}



