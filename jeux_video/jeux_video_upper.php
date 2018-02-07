<!--La connexion à la base de données n'a besoin d'être faite qu'une seule fois au début de la page-->

<?php

$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    

    
$requete = $bdd->prepare('SELECT UPPER(nom) AS nom_majuscule, console, prix FROM jeux_video WHERE console=?');
$requete->execute(array($_GET['console']));

while ($donnees = $requete->fetch())


    
    
{
	echo '<p>' . $donnees['console'] . '-' . $donnees['nom_majuscule'] . '-' . $donnees['prix']. 'euros <p/>';
}




?>

