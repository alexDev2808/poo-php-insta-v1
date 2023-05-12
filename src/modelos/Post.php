<?php

namespace Alexis\Poo\modelos;

use Alexis\Poo\utils\UUID;

class Post {

    // Tipado estricto
    // private, accedidas solo desde la clase misma
    private string $id;
    private array $likes;


    // Constructor
    // se puede definir el alcance de la variable, ademas de asignarle el valor a la variable
    public function __construct(private string $mensaje)
    {
        // print_r("Se creo el objeto nuevo Post \n");
        $this->id = UUID::generate();
        $this->likes = [];
    }

    protected function saludo() {
        return "Hola desde este post, con id: $this->id";
    }

    // getters y setters

    // get: obtener un dato
    // retornar un dato de tipo string
    public function getId():string {
        return $this->id;
    }

    // set: modificar(setear) un dato
    public function setId(string $id) {
        $this->id = $id;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function getLikes()
    {
        return $this->likes;
    }

    protected function checkIfUserLiked(User $user):bool
    {
        $found = array_filter(
            $this->likes,
            function(Like $like) use ($user) {
                return $like->getUser()->getId() === $user->getId();
            }
        );

        return count($found) === 1;
    }

    public function addLike(User $user)
    {
        if($this->checkIfUserLiked($user)) {
            $this->removeLike($user);
        }else {
            $like = new Like($user);
            array_push($this->likes, $like);
        }
    }

    public function removeLike(User $user)
    {
        $this->likes = array_filter(
            $this->likes, 
            fn (Like $like) => $like->getUser()->getId() != $user->getId()
        );
    }
}


?>