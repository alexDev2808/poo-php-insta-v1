<?php

require 'vendor/autoload.php';
use Alexis\Poo\modelos\Post;



$miObjeto = new Post("Este es mi primer Post");


echo $miObjeto->getMensaje();
echo $miObjeto->saludo();

echo "\n";
?>