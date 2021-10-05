<?php

@require_once __DIR__ . '/data/data.php';


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

    <!-- stampa istanze -->

    <article>
        <?php foreach ($movies as $movie) : ?>
            <h1> <?= $movie->title ?></h1>
            <div>Language:<?= $movie->language ?></div>
            <span>Director: <?= $movie->getDirector() ?></span>
            <time> Year:<?= $movie->year ?> </time>
            <p><?= $movie->getBrief() ?> </p>
        <? endforeach ?>
    </article>




</body>

</html>