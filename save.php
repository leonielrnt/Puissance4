<?php

session_start();

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:history=testdb;host=127.0.0.1';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password);

/* Exécute une requête préparée en passant un tableau de valeurs */
$sth = $dbh->prepare('INSERT INTO history
    (`j1`, `j2`, `game`)
    VALUES 
    (?, ?, ?)');

$sth->execute(['', '', '[]']);

?>