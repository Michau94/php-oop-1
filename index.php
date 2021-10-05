<?php

@require_once __DIR__ . '/models/Movie.php';

// dichiarazioni istanze

$movie1 = new Movie('Signore degli Anelli', 2001, 'Peter Jackson', 'EN', "Bilbo Baggins ha deciso di celebrare il suo centoundicesimo compleanno in maniera molto particolare;alla fine della festa, abbandona parenti, amici, conoscenti e il suo affezionato nipote Frodo, cui lascia ogni cosa. Lo stregone Gandalf insiste perché lo hobbit lasci a Frodo anche il suo anello magico, su cui intende tenere un occhio vigile e fare alcune ricerche, perché potrebbe celare un mistero più inquietante di quanto non sembri. E così è; quello di Bilbo è l'Unico Anello, l'Anello per domarli, il cuore del potere del malefico Signore Oscuro Sauron, che sta tornando a tessere le sue trame di conquista e distruzione. Per impedirgli di vedere realizzato il suo sanguinoso disegno, l'anello dovrà essere distrutto, cosa possibile soltanto nella fornace di Monte Fato, dove Sauron, secoli prima, lo forgiò.",);
var_dump($movie1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <!-- stampa istanza 1 -->
    <article>
        <h1> <?= $movie1->title ?></h1>
        <div>Language:<?= $movie1->language ?></div>
        <span>Director: <?= $movie1->director ?></span>
        <time> Year:<?= $movie1->year ?> </time>
        <p><?= $movie1->description ?> </p>
    </article>

</body>

</html>