<?php

session_start();

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=puissance4;host=127.0.0.1';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password);

/* Exécute une requête préparée en passant un tableau de valeurs */
$sth = $dbh->prepare('INSERT INTO history
    (`joueur_1`, `joueur_2`, `game`)
    VALUES 
    (?, ?, ?)');
    // on aurait pu mettre (:j1,:j2,:game)

    $g=json_encode([1,2,3]);
//    $g=json_encode($_SESSION['board']);

//var_dump($g); die();

$sth->execute(['Player 1', 'Player 2', $g]);

require_once("board.php");