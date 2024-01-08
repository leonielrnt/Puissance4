<?php
session_start();
echo "<p> Le joueur {$_POST['joueur']} a joué dans la colonne {$_POST['colonne']} </p>";