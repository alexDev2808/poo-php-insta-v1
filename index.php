<?php

require 'vendor/autoload.php';

use Alexis\Poo\modelos\ImagePost;
use Alexis\Poo\modelos\Post;



$miObjeto = new Post("Este es mi primer Post");
$postImagen = new ImagePost("Foto de mis vacaciones en la playa", "imagen.jpg");


echo $miObjeto->getMensaje();
echo "\n";
echo $postImagen->getMensajeImagePost();

echo "\n";
?>