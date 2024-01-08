<?php
session_start();

// Initialisaiton du tableau, vide au départ
$_SESSION['board'] = [];
for ($row = 0; $row < 6; $row++) {
    $board[$row] = [];
    for ($column = 0; $column < 7; $column++) {
        $board[$row][$column] = null;
    };
};

require_once("board.php");
?>