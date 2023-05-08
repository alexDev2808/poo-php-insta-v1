<?php

namespace Alexis\Poo\modelos;

class ImagePost extends Post {

    public function __construct(private string $mensaje, private string $imagen)
    {
        print_r("Se creo un nuevo objeto ImagePost \n");

        parent:: __construct($mensaje);
    }

    public function getMensajeImagePost()
    {
        return $this->saludo();   
    }
}