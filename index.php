<?php
/*
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile)
*/
// require_once __DIR__ . "/classes/movie.php";

class Movie {
    public $name;
    public $length;
    private $box_office;
  
    public function __construct($name, $length) {
      $this->name = $name;
      $this->length = $length;
    }

    public function setBoxOffice($_box_office){
        $this->box_office = $_box_office;
    }

    public function getBoxOffice(){
        return $this->box_office;
    }
}
  
$movies = [];

$bladeRunner = new Movie('Blade Runner', '1h 57m');
$bladeRunner->setBoxOffice("28 milioni $");
$movies[] = $bladeRunner;

$madMax = new Movie("Mad Max Fury Road", "2h 00m");
$madMax->setBoxOffice("50 milioni $");
$movies[] = $madMax;

// var_dump($movies);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio - OOP 1</title>
</head>
<body>
    <h1>Lista film</h1>
    <div class="film">
        <?php foreach ($movies as $k => $v):?>
            <h6> Nome Film: </h6>
            <h3> <?php echo $v->name ?> </h3>
            <h6> Durata: </h6>
            <h3> <?php echo $v->length ?> </h3>
            <h6> Incassi: </h6>
            <h3> <?php echo $v->getBoxOffice() ?> </h3>
            <br>
        <?php endforeach;?>
    </div>
    
</body>
</html>