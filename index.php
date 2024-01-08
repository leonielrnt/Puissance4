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
            include "board.php";
            displayBoard();
        ?>
        </table>
    </div>
</body>
</html>