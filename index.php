<?php
session_start();

// Initialisaiton du tableau
$_SESSION['board'] = [
];
for ($row = 0; $row < 6; $row++) {
    $board[$row] = array();
    for ($column = 0; $column < 7; $column++) {
        $board[$row][$column] = null;
    };
};

require_once("board.php");
?>