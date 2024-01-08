<?php 

    // ### 1. Affichage de la grille.
    
    // À ce stade, vous pourrez créer un script `board.php` (par exemple), dont leur seul but sera d'afficher une grille, éventuellement partiellement remplie.

    // Pour cela, vous aurez deux tâches à remplir :

    // 1. Créer une structure de données qui représente l'état du jeu
    //     - PHP, comme la plupart des langages de programmation, comprend des types de tableaux pour représenter des collections ou des listes.
    //     - Vous devrez choisir les valeurs représentant les états des différentes cellules de la grille
    // 2. Créer une fonction PHP (voire plusieurs au besoin) `displayBoard` qui affichera à l'écran le contenu de la structure de données définie précédemment.
    //     - Vous ferez en sorte que la grille s'affiche à l'écran par l'intermédiaire d'une grille (`grid`) CSS.
    //     - Il faudra incorporer des images pour visualiser les jetons déjà placés par les joueurs

    // En termes de bonnes pratiques, vous pourrez utilement (notamment pour la suite) déclarer votre structure de données dans un fichier séparé (`grid.php`).

    // À ce stade, nous voulons seulement pouvoir intégrer des valeurs arbitraires dans la structure de données et voir le résultat s'afficher à l'écran.

function displayBoard(){
    for ($i=0; $i<6; $i++) {
        echo "<tr>";
        for ($j=0; $j<7;$j++){
            echo "<td></td>";
        };
        echo "</tr>";
    };
};
