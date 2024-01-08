<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <title>Puissance 4</title>
</head>
<body>

    <!-- Scroll de choix de colonne J1 -->
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

    <!-- GRILLE DE JEU -->
    <div class="board">
        <table class="table">
        <?php 
            for ($i=0; $i<6; $i++) {
                echo "<tr>";
                for ($j=0; $j<7;$j++){
                    // On adapte la couleur de la case au joueur qui l'a remplie si c'est le cas
                    $style = (is_null($_SESSION['board'][$i][$j])) ? "libre" : (($_SESSION['board'][$i][$j] == "j1") ? "j1" : "j2");
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