<?php 
    header ("Content-type: image/png"); 
    $im = ImageCreate (600, 400) 
            or die ("Erreur lors de la création de l'image");         
    $couleur_fond = ImageColorAllocate ($im, 255, 0, 0); 
    ImagePng ($im); 
?>






