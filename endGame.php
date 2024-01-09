<?php

session_start();

// Conditions de victoire
function checkEndGame() {
    // Horizontales
    for ($row = 0; $row < 6; $row++) {
        for ($column = 0; $column < 4; $column++) {
            if ($_SESSION['board'][$row][$column] == $_SESSION['board'][$row][$column + 1] && $_SESSION['board'][$row][$column] == $_SESSION['board'][$row][$column + 2] && $_SESSION['board'][$row][$column] == $_SESSION['board'][$row][$column + 3] && $_SESSION['board'][$row][$column] != null) {
                return true;
            }
        }
    }
    // Verticales
    for ($column=0; $column<7; $column++) {
        for ($row=0; $row<3; $row++) {
            if ($_SESSION['board'][$row][$column] == $_SESSION['board'][$row+1][$column] && $_SESSION['board'][$row][$column] == $_SESSION['board'][$row+2][$column] && $_SESSION['board'][$row][$column] == $_SESSION['board'][$row+3][$column] && $_SESSION['board'][$row][$column] != null) {
                return true;
            }
        }
    }
    // Diagonales gauche - droite
    for ($row=3; $row>=0; $row--){
        for ($column=4; $column>=0; $column--){
            if ($_SESSION['board'][$row][$column] == $_SESSION['board'][$row+1][$column+1] && $_SESSION['board'][$row][$column] == $_SESSION['board'][$row+2][$column+2] && $_SESSION['board'][$row][$column] == $_SESSION['board'][$row+3][$column+3] && $_SESSION['board'][$row][$column] != null) {
                return true;
            }
        }
    }
    // Diagonales droite - gauche
    for ($row=3; $row>=0; $row--){
        for ($column=4; $column>=0; $column--){
            if ($_SESSION['board'][$row][$column] == $_SESSION['board'][$row+1][$column-1] && $_SESSION['board'][$row][$column] == $_SESSION['board'][$row+2][$column-2] && $_SESSION['board'][$row][$column] == $_SESSION['board'][$row+3][$column-3] && $_SESSION['board'][$row][$column] != null) {
                return true;
            }
        }
    }
    // Match nul
    if ($_SESSION['count'] == 42) {
        return true;
    }
}

function displayEndGame() {
    if (checkEndGame()) {
        echo "<h1>Partie terminée !</h1>";
        if ($_SESSION['count'] == 42) {
            echo "<h2 class='null'>Match nul !</h2>";
            echo "<div class='newGame'><a href='index.php'>Rejouer</a></div>";
        } else {
            echo "<h2 class='player_win'>Le joueur ".$_SESSION['joueur']." a gagné !</h2>";
            echo "<div class='newGame'><a href='index.php'>Rejouer</a></div>";
        } 
    }
}

