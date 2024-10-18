<?php
    $title = "Morpion";
?>

<!DOCTYPE html>

<html lang="fr">
    <?php require("head.php") ?>

    <body>
        <?php require("header.php") ?>

        <div id="morpion-menu">
            <div id="morpion-submenu">
                <p id="oxo-texte">Aligne trois symboles avant ton adversaire</p>
                <form action="morpion.php"><button id="oxo-btn">JOUER</button></form>
            </div>
            <figure id="oxo-fig">
                <img src="./images/morpionEx.PNG" />
            </figure>
        </div>
    </body>
</html>