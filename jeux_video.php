<?php

$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch())
{
    echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

?>
