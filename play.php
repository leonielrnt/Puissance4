<?php
session_start();

// echo "<p> Le joueur {$_POST['joueur']} a joué dans la colonne {$_POST['colonne']} </p>";

// Traitement des coups joués
for ($row = 0; $row < 6; $row++) {
    if ($_SESSION['board'][$row][$_POST['colonne']] == null) {
        $_SESSION['board'][$row][$_POST['colonne']] = $_POST['joueur'];
        break;
    }
}

// Envoi de la grille mise à jour
require_once("board.php");