<?php// Contrôleur (controler) qui sert d'intermédiaire entre le modèle et la vue
require('modele.php');

$req = getBillets();

require('affichageAccueil.php');
?>