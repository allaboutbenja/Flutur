<?php
class Productos{
    private $id;
    private $nombre;
    private $precio;
    private $imagen;
    private $estado;

     function __construct($id,$nombre,$precio,$imagen,$estado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->estado = $estado;
    }
    public function getId() {
        return $this->id;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getPrecio() {
        return $this->precio;
    }

    public function GetImagen() {
        return $this->imagen;
    }
    
    public function getEstado() {
        return $this->estado;
    }
}
?>