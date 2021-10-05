<?php
@require_once __DIR__ . '/../models/Movie.php';

// dichiarazioni istanze

$movie1 = new Movie('Signore degli Anelli', 2001, 'Peter Jackson', 'EN', "Bilbo Baggins ha deciso di celebrare il suo centoundicesimo compleanno in maniera molto particolare;alla fine della festa, abbandona parenti, amici, conoscenti e il suo affezionato nipote Frodo, cui lascia ogni cosa. Lo stregone Gandalf insiste perché lo hobbit lasci a Frodo anche il suo anello magico, su cui intende tenere un occhio vigile e fare alcune ricerche, perché potrebbe celare un mistero più inquietante di quanto non sembri. E così è; quello di Bilbo è l'Unico Anello, l'Anello per domarli, il cuore del potere del malefico Signore Oscuro Sauron, che sta tornando a tessere le sue trame di conquista e distruzione. Per impedirgli di vedere realizzato il suo sanguinoso disegno, l'anello dovrà essere distrutto, cosa possibile soltanto nella fornace di Monte Fato, dove Sauron, secoli prima, lo forgiò.",);
$movie2 = new Movie('Spider Man', 2001, 'Sam Raimi', 'EN', 'Peter Parker è il tipico adolescente sfigato, segretamente innamorato fin da bambino della sua vicina di casa Mary Jane, rimasto orfano dei genitori e che vive con gli zii. Durante una gita scolastica a un laboratorio scientifico Peter viene morso da un ragno geneticamente modificato. Ben presto si renderà conto di non aver più bisogno degli occhiali da vista e di essere in possesso di poteri molto particolari.');


$movies = [];

$movies[] = $movie1;
$movies[] = $movie2;
