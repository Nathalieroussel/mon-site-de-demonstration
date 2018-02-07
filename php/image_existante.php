<?php  
    $visites = array(138, 254, 381, 652, 896, 720, 140, 556, 663, 331, 407, 768); 

    header ("Content-type: image/png");  
    $largeurImage = 400; 
    $hauteurImage = 300; 
    $im = ImageCreate ($largeurImage, $hauteurImage)  
            or die ("Erreur lors de la création de l'image");          
    $blanc = ImageColorAllocate ($im, 255, 255, 255);  
    $noir = ImageColorAllocate ($im, 0, 0, 0);   
    $bleu = ImageColorAllocate ($im, 0, 0, 255);         
    