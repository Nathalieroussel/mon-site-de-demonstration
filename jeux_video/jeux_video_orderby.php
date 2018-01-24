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

$reponse = $bdd->query('SELECT nom, prix FROM jeux_video ORDER BY prix');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' coûte' . $donnees ['prix'] . ' Euros<br />';
}


//Fermer les résultats de recherche après chaque requête
$reponse->closeCursor();

?>



<!--Pour trier par ordre décroissant : ORDER BY prix DESC-->