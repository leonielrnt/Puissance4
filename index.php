<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/boardstyle.css">
    <title>Puissance 4</title>
</head>
<body>
    <div class="board">
        <table class="table">
        <?php 
            for ($i=0; $i<6; $i++) {
                echo "<tr>";
                for ($j=0; $j<7;$j++){
                    echo "<td class='index ".$i."/".$j."'></td>";
                };
                echo "</tr>";
            };
        ?>
        </table>
    </div>
</body>
</html>