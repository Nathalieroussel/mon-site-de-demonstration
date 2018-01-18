<?php
$age = 47;
 
if ($age >= 47) // SI l'âge est inférieur ou égal à 47
{
    echo "Vous êtez plus agé que moi !<br />";
    $autorisation_entrer = "oui";
}


elseif ($age==47) // Sinon et si l'age est égal à 47 
    
{
    echo "Nous avons tous les deux 47 ans";
}


else // SINON
{
    echo "J'ai 47 ans, vous êtez donc plus jeune que moi!<br />";
    $autorisation_entrer = "non";
}
 
echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
?>