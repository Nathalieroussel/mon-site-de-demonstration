<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
session_destroy(); 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Utilisation page de déconnexion session</title>
    </head>
    <body>
    <p>
        Vous avez été deconnecté de votre session. !<br />
        Cette opération a été possible grace la création d'un bouton "deconnexion" sur lequel vous avez cliqué et qui vous redirige autommatiquement sur la page destroy.php.
    </p>
    <p>
        <a href="index.html">Revenir à l'accueil</a><br />
       
    </p>
    </body>
</html>