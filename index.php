<?php

require_once __DIR__ . "/Classes/Movie.php";

$pirati = new Movie('Pirati Dei Caraibi', '5-09-2003', 'Gore Verbinski', 'Action, Adventure, Comedy');
$batman = new Movie('Il Cavaliere Oscuro', '23-07-2008', 'Christopher Nolan', 'Action, Adventure, Noir,Dramatic');
$vanhelsing = new Movie('Van Helsing', '7-05-2004', 'Stephen Sommers', 'Action, Adventure, Horror, Fantasy');
$zoo = new Movie('Zootropolis', '18-02-2016', 'Byron Howard', 'Action, Animation, Comedy, Dramatic, Police');
$lupin = new Movie('Lupin III - Il castello di Cagliostro ', '15-12-1979', 'Hayao Miyazaki', 'Action, Animation, Comedy, Adventure, Sentimental');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Movie</title>
</head>

<body>
    <h1>Movie Oop Php</h1>

    <ol>
        <li>
            <ul>
                <li>Title: <?= $pirati->getTitle() ?></li>
                <li>Release date: <?= $pirati->getReleaseDate() ?></li>
                <li>Director: <?= $pirati->getDirector() ?></li>
                <li>Genere: <?= $pirati->getGenre() ?></li>
            </ul>
        </li>
        <br>
        <li>
            <ul>
                <li>Title: <?= $batman->getTitle() ?></li>
                <li>Release date: <?= $batman->getReleaseDate() ?></li>
                <li>Director: <?= $batman->getDirector() ?></li>
                <li>Genere: <?= $batman->getGenre() ?></li>
            </ul>
        </li>
        <br>
        <li>
            <ul>
                <li>Title: <?= $vanhelsing->getTitle() ?></li>
                <li>Release date: <?= $vanhelsing->getReleaseDate() ?></li>
                <li>Director: <?= $vanhelsing->getDirector() ?></li>
                <li>Genere: <?= $vanhelsing->getGenre() ?></li>
            </ul>
        </li>
         <br>
        <li>
            <ul>
                <li>Title: <?= $zoo->getTitle() ?></li>
                <li>Release date: <?= $zoo->getReleaseDate() ?></li>
                <li>Director: <?= $zoo->getDirector() ?></li>
                <li>Genere: <?= $zoo->getGenre() ?></li>
            </ul>
        </li>
        <br>
        <li>
            <ul>
                <li>Title: <?= $lupin->getTitle() ?></li>
                <li>Release date: <?= $lupin->getReleaseDate() ?></li>
                <li>Director: <?= $lupin->getDirector() ?></li>
                <li>Genere: <?= $lupin->getGenre() ?></li>
            </ul>
        </li>
    </ol>
</body>

</html>