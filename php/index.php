<?php
/*Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

include '../data/index.php';
include '../class/index.php';
$first_movie = new Movie('Il padrino', 'Francis Ford Coppola', '1972', 'Gangster', $plot1);
$second_movie = new Movie('Dunkirk', 'Christopher Nolan', '2017', 'Guerra , Storico', $plot2);
$third_movie = new Movie('Avatar', 'James Cameron', '2009', 'Fantascienza , Azione', $plot3);
var_dump($first_movie);
var_dump($second_movie);
var_dump($third_movie);
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/style.css">
   <title>Movies</title>
</head>

<body>
   <main class="container">
      <div class="my-5">
         <h1>Titolo: <?= $first_movie->title ?></h1>
         <h5>Regista: <?= $first_movie->producer ?></h5>
         <h5>Anno: <?= $first_movie->year ?></h5>
         <h6>Genere: <?= $first_movie->genre ?></h6>
         <p><strong>Trama:</strong> <?= $first_movie->plot ?></p>
      </div>
      <div class="my-5">
         <h1>Titolo: <?= $second_movie->title ?></h1>
         <h5>Regista: <?= $second_movie->producer ?></h5>
         <h5>Anno: <?= $second_movie->year ?></h5>
         <h6>Genere: <?= $second_movie->genre ?></h6>
         <p><strong>Trama:</strong> <?= $second_movie->plot ?></p>
      </div>
      <div class="my-5">
         <h1>Titolo: <?= $third_movie->title ?></h1>
         <h5>Regista: <?= $third_movie->producer ?></h5>
         <h5>Anno: <?= $third_movie->year ?></h5>
         <h6>Genere: <?= $third_movie->genre ?></h6>
         <p><strong>Trama:</strong> <?= $third_movie->plot ?></p>
      </div>
   </main>
</body>

</html>