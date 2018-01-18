<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Nathalie';
$_SESSION['nom'] = 'Roussel';
$_SESSION['age'] = 47;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Utilisation des sessions en PHP</title>
    </head>
    <body>
    <p>
        Bonjour et bienvenue sur ton site <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es sur la page1.php. Tu veux aller sur une autre page ?
    </p>
    <p>
        <a href="index.html">Page d'accueil</a><br />
        <a href="information.php">Page d'exemple information.php</a><br />
    </p>
    </body>
</html>