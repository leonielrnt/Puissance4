<?php

session_start();

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:history=testdb;host=127.0.0.1';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password);

/* Exécute une requête préparée en passant un tableau de valeurs */
// on introduit nos 2 joueurs et le plateau de jeu dans notre base de données SQL

$sth = $dbh->prepare('INSERT INTO history
    (`j1`, `j2`, `game`)
    VALUES 
    (?, ?, ?)');
    // on aurait pu mettre (:j1,:j2,:game)

$g=json_encode($_SESSION['board']);

$sth->execute(['Player 1', 'Player 2', $g]);

require_once("board.php");