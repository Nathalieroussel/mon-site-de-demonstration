<?php
header ("Content-type: image/png");
$image = imagecreate(80,500);

$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

imagestringup($image, 400, 35, 450, "Ecrire du texte vertical", $blanc);

imagepng($image);
?>






