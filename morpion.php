<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Morpion</title>
        <link rel="stylesheet" href="./css/morpion.css?ts=<?=time()?>" />
    </head>
        
    <body>
        <div id="jeu">
            <div id="grille">
                <div id="0" class="case"></div>
                <div id="1" class="case"></div>
                <div id="2" class="case"></div>
                <div id="3" class="case"></div>
                <div id="4" class="case"></div>
                <div id="5" class="case"></div>
                <div id="6" class="case"></div>
                <div id="7" class="case"></div>
                <div id="8" class="case"></div>
            </div>
            <p id="texte"></p>
            <div id="btns">
                <button class="btn" onClick="history.go(0);">RESET</button>
                <a href="oxoMenu.php"><button class="btn">RETOUR</button></a>
            </div>
        </div>
        <script src="./js/morpion.js"></script>
    </body>
</html>