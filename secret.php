<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au site</title>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "poissons24") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
        <h1>Parfait! Voici le lien :</h1>
        <p><strong><a href="http://openclassrooms.themecloud.website/">Voir mon site</a></strong></p>   
        
        <p>
        Cette page est confidentielle. Vous avez la permission d'y accèder. Attention, les codes d'accès sont changés régulièrement!<br />
        </p>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>