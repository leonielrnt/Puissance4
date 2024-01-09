<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <title>Puissance 4</title>
</head>
<body>
    <div class="gameSpace">
        <!-- Scroll de choix de colonne J1 -->
        <div class="player_1">
            <h1>Player 1</h1>
            <form action="play.php" method="post">
                <input type="hidden" name="joueur" value="j1"/>
                <select name="colonne">
                    <option value="">-- Sélectionner une colonne --</option>
                    <option value="0">Colonne 1</option>
                    <option value="1">Colonne 2</option>
                    <option value="2">Colonne 3</option>
                    <option value="3">Colonne 4</option>
                    <option value="4">Colonne 5</option>
                    <option value="5">Colonne 6</option>
                    <option value="6">Colonne 7</option>
                </select>
                <input type="submit" name="jouer" value="Jouer"/>
            </form>
        </div>

        <!-- GRILLE DE JEU -->
        <div class="board">
            <table class="table">
            <?php 
                for ($row=0; $row<6; $row++) {
                    echo "<tr>";
                    for ($column=0; $column<7;$column++){
                        // On adapte la couleur de la case au joueur qui l'a remplie si c'est le cas
                        $style = (is_null($_SESSION['board'][$row][$column])) ? "libre" : (($_SESSION['board'][$row][$column] == "j1") ? "j1" : "j2");
                        ?>
                        <td class= "<?= $style ?>"></td>
                        <?php
                    };
                    echo "</tr>";
                };
            ?>
            </table>
        </div>

        <!-- Scroll de choix de colonne J2 -->
        <div class="player_2">
            <h1>Player 2</h1>
            <form action="play.php" method="post">
                <input type="hidden" name="joueur" value="j2"/>
                <select name="colonne">
                    <option value="">-- Sélectionner une colonne --</option>
                    <option value="0">Colonne 1</option>
                    <option value="1">Colonne 2</option>
                    <option value="2">Colonne 3</option>
                    <option value="3">Colonne 4</option>
                    <option value="4">Colonne 5</option>
                    <option value="5">Colonne 6</option>
                    <option value="6">Colonne 7</option>
                </select>
                <input type="submit" name="jouer" value="Jouer"/>
            </form>
        </div>
    </div>

    <!-- Statut du jeu -->
    <div class="announcement">
        <?php
            require_once("endGame.php");
            if (checkEndGame() == false) {
                echo "<h2>Partie en cours</h2>";
            }
            displayEndGame();
        ?>
    </div>
</body>
</html>