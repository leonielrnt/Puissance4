    <!-- ### 1. Affichage de la grille.
    
    À ce stade, vous pourrez créer un script `board.php` (par exemple), dont leur seul but sera d'afficher une grille, éventuellement partiellement remplie.

    Pour cela, vous aurez deux tâches à remplir :

    1. Créer une structure de données qui représente l'état du jeu
        - PHP, comme la plupart des langages de programmation, comprend des types de tableaux pour représenter des collections ou des listes.
        - Vous devrez choisir les valeurs représentant les états des différentes cellules de la grille
    2. Créer une fonction PHP (voire plusieurs au besoin) `displayBoard` qui affichera à l'écran le contenu de la structure de données définie précédemment.
        - Vous ferez en sorte que la grille s'affiche à l'écran par l'intermédiaire d'une grille (`grid`) CSS.
        - Il faudra incorporer des images pour visualiser les jetons déjà placés par les joueurs

    En termes de bonnes pratiques, vous pourrez utilement (notamment pour la suite) déclarer votre structure de données dans un fichier séparé (`grid.php`).

    À ce stade, nous voulons seulement pouvoir intégrer des valeurs arbitraires dans la structure de données et voir le résultat s'afficher à l'écran. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <title>Puissance 4</title>
</head>
<body>
    <div class="player_1">
        <h1>Player 1</h1>
        <form action="play.php" method="post">
            <input type="hidden" name="joueur" value="j1"/>
            <select name="colonne">
                <option value="">-- Sélectionner une colonne --</option>
                <option value="1">Colonne 1</option>
                <option value="2">Colonne 2</option>
                <option value="3">Colonne 3</option>
                <option value="4">Colonne 4</option>
                <option value="5">Colonne 5</option>
                <option value="6">Colonne 6</option>
            </select>
            <input type="submit" name="jouer" value="Jouer"/>
        </form>
    </div>
    <div class="board">
        <table class="table">
        <?php 
            for ($i=0; $i<6; $i++) {
                echo "<tr>";
                for ($j=0; $j<7;$j++){
                    // couleurs 1 ligne sur 2 :
                    // $style=($i%2==0)?"j1":"j2";
                    // echo "<td class=".$style."></td>";
                    $style = (is_null($_SESSION['board'][$i][$j])) ? "libre" : (($_SESSION['board'][$i][$j] == 1) ? "j1" : "j2");
                    ?>
                    <td class= "<?= $style ?>"></td>
                    <?php
                };
                echo "</tr>";
            };
        
        ?>
        </table>
    </div>
    <div class="player_2">
        <h1>Player 2</h1>
        <form action="play.php" method="post">
            <input type="hidden" name="joueur" value="j2"/>
            <select name="colonne">
                <option value="">-- Sélectionner une colonne --</option>
                <option value="1">Colonne 1</option>
                <option value="2">Colonne 2</option>
                <option value="3">Colonne 3</option>
                <option value="4">Colonne 4</option>
                <option value="5">Colonne 5</option>
                <option value="6">Colonne 6</option>
            </select>
            <input type="submit" name="jouer" value="Jouer"/>
        </form>
    </div>
</body>
</html>