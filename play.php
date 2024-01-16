<?php
session_start();

// Traitement des coups joués
function play($player, $column) {
    for ($row = 5; $row >= 0; $row--) {
        if ($_SESSION['board'][$row][$column] == null) {
            $_SESSION['board'][$row][$column] = $player;
            break;
        }
    }
    $_SESSION['count']++;
    return true;
}

play($_POST['joueur'], $_POST['colonne']);

$_SESSION['joueur'] = $_POST['joueur'];

// Envoi de la grille mise à jour
require_once("board.php");