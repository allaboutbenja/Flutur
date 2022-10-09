<?php
class Reservas{
    private int $id;
    private int $idRestaurant;
    private int $idUser;
    private int $idPlatos;
    private string $hora_inicio;
    private string $hora_fin;
   

    function __construct($id,$idRestaurant ,$idUser ,$idPlatos,$hora_inicio,$hora_fin) {
        $this->id = $id;
        $this->idRestaurant = $idRestaurant;
        $this->idUser = $idUser;
        $this->idPlatos = $idPlatos;
        $this->hora_inicio = $hora_inicio;
        $this->hora_fin = $hora_fin;
    }
    public function getId():int {
        return $this->id;
    }
    public function getIdRestaurant():int {
        return $this->idRestaurant;
    }
    public function getIdUser():int {
        return $this->idUser;
    }
    public function getIdPlatos():int {
        return $this->idPlatos;
    }
    public function getHora_inicio():string {
        return $this->hora_inicio;
    }
    public function getHora_fin():string {
        return $this->hora_fin;
    }
}
?>