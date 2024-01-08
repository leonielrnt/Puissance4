<!-- 
### 2. Jeu humain/humain

Dans un deuxième temps, nous voulons implémenter une dimension interactive à notre page, afin qu'elle permette à deux joueurs de s'affronter.

Pour cela, nous allons avoir plusieurs choses à faire :

1. Il faut enrichir la page HTML d'un formulaire (voire deux — un pour chaque joueur — si c'est plus simple pour vous) qui permette à l'un des deux joueurs de choisir un coup. Il faut que le formulaire soit ensuite envoyé au serveur lorsque le joueur clique sur un bouton de type `submit`
- Pour traiter les données du formulaire, nous aurons donc besoin d'un nouveau script PHP, que nous appellerons, par exemple, `listenPlayer.php`
- Ce script devra vérifier que le joueur a bien joué dans les limites de la grille, avec une fonction `checkMove` par exemple ;
- Il devra ensuite modifier la structure de données pour enregistrer le nouveau coup, avec une fonction `registerMove`
- Il devra enfin afficher à nouveau la grille actualisée, où normalement vous n'avez rien d'autre faire que d'importer le script de la première partie
-->

<?php
include "board.php";

$player1;
$player2;

function checkMove($player, $column){
    // Vérifie que le joueur a bien joué dans les limites de la grille : true si oui, false sinon
    if ($column < 0 || $column > 6){
        return false;
    }
        return true;
}

function registerMove($player,$column){};