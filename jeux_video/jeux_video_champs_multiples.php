<?php
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM jeux_video');
while ($donnees = $reponse->fetch())
    
{
    echo '<p>' . $donnees ['possesseur'] . '-'. $donnees ['nom']. '</p>';
}
?>
