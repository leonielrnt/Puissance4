<?php
session_start();

// echo "<p> Le joueur {$_POST['joueur']} a joué dans la colonne {$_POST['colonne']} </p>";

// Traitement des coups joués
function play($player, $column) {
    for ($row = 5; $row >= 0; $row--) {
        if ($_SESSION['board'][$row][$column] == null) {
            $_SESSION['board'][$row][$column] = $player;
            break;
        }
    }
    return true;
}

play($_POST['joueur'], $_POST['colonne']);


// Envoi de la grille mise à jour
require_once("board.php");