<?php
class Platos{
    private int $id;
    private int $idRestaurant;
    private string $nombre;
    private int $precio;
    private string $imagen;
    private int $estado;

    function __construct($id,$idRestaurant,$nombre,$precio,$imagen,$estado) {
        $this->id = $id;
        $this->idRestaurant = $idRestaurant;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->estado = $estado;
    }
    public function getId():int {
        return $this->id;
    }
    public function getIdRestaurant():int {
        return $this->idRestaurant;
    }
    public function getNombre():string {
        return $this->nombre;
    }
    public function getPrecio():int {
        return $this->precio;
    }

    public function GetImagen():string {
        return $this->imagen;
    }
    
    public function getEstado():int {
        return $this->estado;
    }
}
?>