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

    public function __constructor(
                                $_name, 
                                $_length){
        $this->name = $_name;
        $this->length = $_length;
    }
}

$bladeRunner = new Movie();
$bladeRunner->name = "Blade Runner";
$bladeRunner->length = "1h 57m";

$madMax = new Movie();
$madMax->name = "Mad Max Fury Road";
$madMax->length = "2h 00m";
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
        <h4> Nome Film: </h4>
        <h3> <?php echo $bladeRunner->name ?> </h3>
        <h4> Durata: </h4>
        <h3> <?php echo $bladeRunner->length ?> </h3>
        <br>
    </div>
    <div class="film">
        <h4> Nome Film: </h4>
        <h3> <?php echo $madMax->name ?> </h3>
        <h4> Durata: </h4>
        <h3> <?php echo $madMax->length ?> </h3>
        <br>
    </div>
    
</body>
</html>