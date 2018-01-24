<!--La connexion à la base de données n'a besoin d'être faite qu'une seule fois au début de la page-->

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video LIMIT 0, 10');

echo '<p>Voici les 10 premières entrées de la table jeux_video :</p>';
while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />';
}


//Fermer les résultats de recherche après chaque requête
$reponse->closeCursor();

?>



    <!--LIMIT : définit le nombre de résultat à afficher (le premier chiffre 0 correspond au début de la table!)
    ex: LIMIT 0,20 affiche les 20 premières entrées
    ex: LIMIT 5,10 affiche de la sixième à la qui zième entrée
    ex: LIMIT 10,2 affiche la onzième et ka duzième entrée-->
